/*
 * This file is part of the Front Foundation package.
 *
 * Copyright (c) 2017-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */

import {OneTimeEventPublisher, LifeTimeEventPublisher} from 'lin3s-event-bus';
import {isIE11} from './../../../../browser';
import GMapMarkerDetail from './../GMapMarkerDetail/GMapMarkerDetail';
import GMapInitializedEvent from './../../../../event-bus/GMap/GMapInitializedEvent';
import GMapMarkerSelectedEvent from './../../../../event-bus/GMap/GMapMarkerSelectedEvent';
import GMapGeocodeNoResultsEvent from './../../../../event-bus/GMap/GMapGeocodeNoResultsEvent';

class GMap {

  static MARKER_HEIGHT = 59;

  domNode;
  map;
  geocoder;
  bounds;
  mapMarkers = [];
  mapMarkerClusterer;
  center;
  centerOffsetX;
  centerOffsetY;
  zoom;
  markerIcons;
  markers = [];
  markerDefaultPath;
  markerSelectedPath;
  markerGroupPath;
  mapStyle;

  markerDetail;
  selectedMarker;

  constructor(domNode,
    {center, zoom = {initial: 8, max: 12}, markerDefaultPath, markerSelectedPath, markerGroupPath, mapStyle} = {}) {
    this.domNode = domNode;

    this.center = center;
    this.zoom = zoom;
    this.markerDefaultPath = markerDefaultPath;
    this.markerSelectedPath = markerSelectedPath;
    this.markerGroupPath = markerGroupPath;
    this.mapStyle = mapStyle;

    const markerDetailView = this.domNode.querySelector('.gmap-marker-detail');

    if (markerDetailView !== null) {
      this.markerDetail = new GMapMarkerDetail(markerDetailView);
    }

    this.markerIcons = this.buildMarkerIcons();
    this.initMap();
    this.initGeocoder();
    this.bindListeners();

    const initPromise = new Promise(resolve => {
      google.maps.event.addListenerOnce(this.map, 'projection_changed', () => {
        resolve();
      });
    });

    initPromise.then(() => this.publishMapInstanceInitializedEvent());
  }

  buildMarkerIcons() {
    const
      extension = isIE11() ? 'png' : 'svg',
      iconSize = new google.maps.Size(42, GMap.MARKER_HEIGHT),
      anchor = new google.maps.Point(24, GMap.MARKER_HEIGHT),
      origin = new google.maps.Point(0, 0);

    return {
      default: {
        url: `${this.markerDefaultPath}.${extension}`,
        anchor,
        scaledSize: iconSize,
        optimized: false,
        origin
      },
      selected: {
        url: `${this.markerSelectedPath}.${extension}`,
        anchor,
        scaledSize: iconSize,
        optimized: false,
        origin
      },
      group: {
        url: `${this.markerGroupPath}.${extension}`,
        anchor,
        scaledSize: iconSize,
        optimized: false,
        origin
      }
    };
  }

  initMap() {
    const mapContainer = this.domNode.querySelector('.gmap__map');

    this.map = new google.maps.Map(mapContainer, {
      center: this.center,
      minZoom: 3,
      maxZoom: this.zoom.max,
      zoom: this.zoom.initial,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      styles: this.mapStyle,
      scrollwheel: false,
      draggable: true
    });

    this.mapMarkerClusterer = new MarkerClusterer(this.map, [], { // eslint-disable-line no-undef
      gridSize: 50,
      maxZoom: 14,
      styles: [{
        width: 42,
        height: 74,
        url: this.markerIcons.group.url,
        textColor: '#FFFFFF',
        textSize: 16,
        anchor: [16, 0],
      }]
    });
  }

  initGeocoder() {
    this.geocoder = new google.maps.Geocoder();
  }

  bindListeners() {
    this.map.addListener('click', () => this.onMarkerSelected());
    this.map.addListener('dragstart', () => this.onMarkerSelected());
    this.map.addListener('zoom_changed', () => this.onMarkerSelected());
  }

  setCenterOffsets({x = 0, y = 0} = {}) {
    this.centerOffsetX = x;
    this.centerOffsetY = y;

    this.centerMap(this.getOffsetedLatLng(this.map.getCenter()));
  }

  setMarkers(markers) {
    this.clearMarkers();
    this.pushMarkers(markers);
  }

  clearMarkers() {
    this.hideMarkerDetailView();

    this.bounds = undefined;
    this.mapMarkerClusterer.clearMarkers();

    this.mapMarkers.forEach(marker => {
      google.maps.event.clearListeners(marker, 'click');
      marker.setMap(null);
    });

    this.markers = [];
    this.mapMarkers = [];
  }

  pushMarkers(markers) {
    this.markers = markers;

    this.bounds = new google.maps.LatLngBounds();

    this.markers.forEach(marker => {
      if (marker.lat === undefined || marker.lng === undefined) {
        return;
      }

      const mapMarker = new google.maps.Marker({
        id: marker.id,
        position: {
          lat: parseFloat(marker.lat),
          lng: parseFloat(marker.lng)
        },
        map: this.map,
        icon: this.markerIcons.default,
      });

      mapMarker.index = this.markers.length;
      this.bounds.extend(mapMarker.position);

      this.mapMarkers.push(mapMarker);
      this.mapMarkerClusterer.addMarker(mapMarker);

      mapMarker.addListener('click', () => this.onMarkerSelected(marker));
    });

    this.centerMapOnBounds(this.bounds);
  }

  showMarkerDetailView(markerId, markerDetailHtmlContent) {
    this.hideMarkerDetailView();

    this.selectedMarker = this.mapMarkers.find(marker => marker.id === markerId);

    if (this.selectedMarker === undefined || this.markerDetail === undefined) {
      return;
    }

    const offsetedMarkerLatLng = this.getOffsetedLatLng(this.selectedMarker.getPosition());
    this.centerMap(offsetedMarkerLatLng);

    this.selectedMarker.setIcon(this.markerIcons.selected);
    this.markerDetail.hide();
    this.markerDetail.updateContent(markerDetailHtmlContent);

    const
      markerDetailRect = this.markerDetail.getRect(),
      markerPixelPosition = this.getPixelPositionFromLatLng(this.selectedMarker.getPosition());

    this.markerDetail.setPosition({
      x: markerPixelPosition.x - markerDetailRect.width / 2 - 4,
      y: markerPixelPosition.y - markerDetailRect.height - GMap.MARKER_HEIGHT - 20
    });

    this.markerDetail.show();
  }

  hideMarkerDetailView() {
    if (this.selectedMarker === undefined || this.markerDetail === undefined) {
      return;
    }

    const markerToHide = this.mapMarkers.find(marker => marker.id === this.selectedMarker.id);

    if (markerToHide === undefined) {
      return;
    }

    markerToHide.setIcon(this.markerIcons.default);
    this.markerDetail.hide();
  }

  centerMap(latLng) {
    this.map.panTo(latLng);
  }

  centerMapOnBounds(bounds) {
    this.map.fitBounds(bounds);
    this.map.panToBounds(bounds);
  }

  getOffsetedLatLng({lat, lng}) {
    const
      scale = Math.pow(2, this.map.getZoom()),
      pixelOffset = new google.maps.Point(this.centerOffsetX / scale || 0, this.centerOffsetY / scale || 0);

    const
      worldCoordinateCenter = this.map.getProjection().fromLatLngToPoint({lat, lng}),
      worldCoordinateNewCenter = new google.maps.Point(
        worldCoordinateCenter.x + pixelOffset.x,
        worldCoordinateCenter.y + pixelOffset.y
      );

    return this.map.getProjection().fromPointToLatLng(worldCoordinateNewCenter);
  }

  getPixelPositionFromLatLng({lat, lng}) {
    const
      scale = Math.pow(2, this.map.getZoom()),
      nw = new google.maps.LatLng(
        this.map.getBounds().getNorthEast().lat(),
        this.map.getBounds().getSouthWest().lng()
      ),
      worldCoordinateNW = this.map.getProjection().fromLatLngToPoint(nw),
      worldCoordinate = this.map.getProjection().fromLatLngToPoint({lat, lng});

    return new google.maps.Point(
      Math.floor((worldCoordinate.x - worldCoordinateNW.x) * scale),
      Math.floor((worldCoordinate.y - worldCoordinateNW.y) * scale)
    );
  }

  geocodeAddress(address) {
    if (address === undefined || address === '') {
      this.resetMapZoomAndCenterToDefault();
    } else {
      const fullAddress = `${address}, Spain`;

      this.geocoder.geocode(
        {
          address: fullAddress
        },
        (results, status) => {
          if (status === google.maps.GeocoderStatus.OK) {
            const geocodeResult = results[0];

            this.centerMap(geocodeResult.geometry.location);
            this.map.setZoom(14);
          } else {
            this.publishGeocodeNoResultsEvent();
            this.resetMapZoomAndCenterToDefault();
          }
        }
      );
    }
  }

  resetMapZoomAndCenterToDefault() {
    if (this.bounds !== undefined) {
      this.centerMapOnBounds(this.bounds);
    } else {
      this.map.setZoom(this.zoom.initial);
      this.centerMap(this.getOffsetedLatLng(new google.maps.LatLng(
        this.center.lat,
        this.center.lng
      )));
    }
  }

  onMarkerSelected(marker) {
    this.publishMarkerSelectedEvent(marker);
  }

  publishMapInstanceInitializedEvent() {
    OneTimeEventPublisher.publish(new GMapInitializedEvent(this));
  }

  publishMarkerSelectedEvent(marker) {
    LifeTimeEventPublisher.publish(new GMapMarkerSelectedEvent(this, marker));
  }

  publishGeocodeNoResultsEvent() {
    LifeTimeEventPublisher.publish(new GMapGeocodeNoResultsEvent(this));
  }
}

export default GMap;
