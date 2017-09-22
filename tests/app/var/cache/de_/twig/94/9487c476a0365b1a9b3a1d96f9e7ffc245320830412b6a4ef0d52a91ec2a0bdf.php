<?php

/* node_modules/lin3s-front-foundation/dist/js/ui/vanilla/components/GMap/GMap.js */
class __TwigTemplate_4228d4227b5a9d3c4e71c4123738e72b54835ddd8ccbc6ff17488c4ee0416afe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88e7c6c4bc18a026d824563687c1f04a35cb29af64e473069478857f0a20237a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e7c6c4bc18a026d824563687c1f04a35cb29af64e473069478857f0a20237a->enter($__internal_88e7c6c4bc18a026d824563687c1f04a35cb29af64e473069478857f0a20237a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-front-foundation/dist/js/ui/vanilla/components/GMap/GMap.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }(); /*
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * This file is part of the Front Foundation package.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * Copyright (c) 2017-present LIN3S <info@lin3s.com>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * For the full copyright and license information, please view the LICENSE
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * file that was distributed with this source code.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * @author Mikel Tuesta <mikeltuesta@gmail.com>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      */

var _lin3sEventBus = require('lin3s-event-bus');

var _browser = require('./../../../../browser');

var _GMapMarkerDetail = require('./../GMapMarkerDetail/GMapMarkerDetail');

var _GMapMarkerDetail2 = _interopRequireDefault(_GMapMarkerDetail);

var _GMapMarkerSelectedEvent = require('./../../../../event-bus/GMap/GMapMarkerSelectedEvent');

var _GMapMarkerSelectedEvent2 = _interopRequireDefault(_GMapMarkerSelectedEvent);

var _GMapGeocodeNoResultsEvent = require('./../../../../event-bus/GMap/GMapGeocodeNoResultsEvent');

var _GMapGeocodeNoResultsEvent2 = _interopRequireDefault(_GMapGeocodeNoResultsEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

var GMap = function () {
  function GMap(domNode) {
    var _this = this;

    var _ref = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {},
        center = _ref.center,
        _ref\$zoom = _ref.zoom,
        zoom = _ref\$zoom === undefined ? { initial: 8, max: 12 } : _ref\$zoom,
        markerDefaultPath = _ref.markerDefaultPath,
        markerSelectedPath = _ref.markerSelectedPath,
        markerGroupPath = _ref.markerGroupPath,
        mapStyle = _ref.mapStyle;

    _classCallCheck(this, GMap);

    this.mapMarkers = [];
    this.markers = [];

    this.domNode = domNode;

    this.center = center;
    this.zoom = zoom;
    this.markerDefaultPath = markerDefaultPath;
    this.markerSelectedPath = markerSelectedPath;
    this.markerGroupPath = markerGroupPath;
    this.mapStyle = mapStyle;

    console.log(this);

    var markerDetailView = this.domNode.querySelector('.gmap-marker-detail');

    if (markerDetailView !== null) {
      this.markerDetail = new _GMapMarkerDetail2.default(markerDetailView);
    }

    this.markerIcons = this.buildMarkerIcons();
    this.initMap();
    this.initGeocoder();
    this.bindListeners();

    return new Promise(function (resolve) {
      google.maps.event.addListenerOnce(_this.map, 'projection_changed', function () {
        resolve(_this);
      });
    });
  }

  _createClass(GMap, [{
    key: 'buildMarkerIcons',
    value: function buildMarkerIcons() {
      var extension = (0, _browser.isIE11)() ? 'png' : 'svg',
          iconSize = new google.maps.Size(42, GMap.MARKER_HEIGHT),
          anchor = new google.maps.Point(24, GMap.MARKER_HEIGHT),
          origin = new google.maps.Point(0, 0);

      return {
        default: {
          url: this.markerDefaultPath + '.' + extension,
          anchor: anchor,
          scaledSize: iconSize,
          optimized: false,
          origin: origin
        },
        selected: {
          url: this.markerSelectedPath + '.' + extension,
          anchor: anchor,
          scaledSize: iconSize,
          optimized: false,
          origin: origin
        },
        group: {
          url: this.markerGroupPath + '.' + extension,
          anchor: anchor,
          scaledSize: iconSize,
          optimized: false,
          origin: origin
        }
      };
    }
  }, {
    key: 'initMap',
    value: function initMap() {
      var mapContainer = this.domNode.querySelector('.gmap__map');

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
          anchor: [16, 0]
        }]
      });
    }
  }, {
    key: 'initGeocoder',
    value: function initGeocoder() {
      this.geocoder = new google.maps.Geocoder();
    }
  }, {
    key: 'bindListeners',
    value: function bindListeners() {
      var _this2 = this;

      this.map.addListener('click', function () {
        return _this2.onMarkerSelected();
      });
      this.map.addListener('dragstart', function () {
        return _this2.onMarkerSelected();
      });
    }
  }, {
    key: 'setCenterOffsets',
    value: function setCenterOffsets() {
      var _ref2 = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {},
          _ref2\$x = _ref2.x,
          x = _ref2\$x === undefined ? 0 : _ref2\$x,
          _ref2\$y = _ref2.y,
          y = _ref2\$y === undefined ? 0 : _ref2\$y;

      this.centerOffsetX = x;
      this.centerOffsetY = y;

      this.centerMap(this.getOffsetedLatLng(this.map.getCenter()));
    }
  }, {
    key: 'setMarkers',
    value: function setMarkers(markers) {
      this.clearMarkers();
      this.pushMarkers(markers);
    }
  }, {
    key: 'clearMarkers',
    value: function clearMarkers() {
      this.hideMarkerDetailView();

      this.bounds = undefined;
      this.mapMarkerClusterer.clearMarkers();

      this.mapMarkers.forEach(function (marker) {
        google.maps.event.clearListeners(marker, 'click');
        marker.setMap(null);
      });

      this.markers = [];
      this.mapMarkers = [];
    }
  }, {
    key: 'pushMarkers',
    value: function pushMarkers(markers) {
      var _this3 = this;

      this.markers = markers;

      this.bounds = new google.maps.LatLngBounds();

      this.markers.forEach(function (marker) {
        if (marker.lat === undefined || marker.lng === undefined) {
          return;
        }

        var mapMarker = new google.maps.Marker({
          id: marker.id,
          position: {
            lat: parseFloat(marker.lat),
            lng: parseFloat(marker.lng)
          },
          map: _this3.map,
          icon: _this3.markerIcons.default
        });

        mapMarker.index = _this3.markers.length;
        _this3.bounds.extend(mapMarker.position);

        _this3.mapMarkers.push(mapMarker);
        _this3.mapMarkerClusterer.addMarker(mapMarker);

        mapMarker.addListener('click', function () {
          return _this3.onMarkerSelected(marker);
        });
      });

      this.centerMapOnBounds(this.bounds);
    }
  }, {
    key: 'showMarkerDetailView',
    value: function showMarkerDetailView(markerId, markerDetailHtmlContent) {
      this.hideMarkerDetailView();

      this.selectedMarker = this.mapMarkers.find(function (marker) {
        return marker.id === markerId;
      });

      if (this.selectedMarker === undefined || this.markerDetail === undefined) {
        return;
      }

      var offsetedMarkerLatLng = this.getOffsetedLatLng(this.selectedMarker.getPosition());
      this.centerMap(offsetedMarkerLatLng);

      this.selectedMarker.setIcon(this.markerIcons.selected);
      this.markerDetail.hide();
      this.markerDetail.updateContent(markerDetailHtmlContent);

      var markerDetailRect = this.markerDetail.getRect(),
          markerPixelPosition = this.getPixelPositionFromLatLng(this.selectedMarker.getPosition());

      this.markerDetail.setPosition({
        x: markerPixelPosition.x - markerDetailRect.width / 2 - 4,
        y: markerPixelPosition.y - markerDetailRect.height - GMap.MARKER_HEIGHT - 20
      });

      this.markerDetail.show();
    }
  }, {
    key: 'hideMarkerDetailView',
    value: function hideMarkerDetailView() {
      var _this4 = this;

      if (this.selectedMarker === undefined || this.markerDetail === undefined) {
        return;
      }

      var markerToHide = this.mapMarkers.find(function (marker) {
        return marker.id === _this4.selectedMarker.id;
      });

      if (markerToHide === undefined) {
        return;
      }

      markerToHide.setIcon(this.markerIcons.default);
      this.markerDetail.hide();
    }
  }, {
    key: 'centerMap',
    value: function centerMap(latLng) {
      this.map.panTo(latLng);
    }
  }, {
    key: 'centerMapOnBounds',
    value: function centerMapOnBounds(bounds) {
      this.map.fitBounds(bounds);
      this.map.panToBounds(bounds);
    }
  }, {
    key: 'getOffsetedLatLng',
    value: function getOffsetedLatLng(_ref3) {
      var lat = _ref3.lat,
          lng = _ref3.lng;

      var scale = Math.pow(2, this.map.getZoom()),
          pixelOffset = new google.maps.Point(this.centerOffsetX / scale || 0, this.centerOffsetY / scale || 0);

      var worldCoordinateCenter = this.map.getProjection().fromLatLngToPoint({ lat: lat, lng: lng }),
          worldCoordinateNewCenter = new google.maps.Point(worldCoordinateCenter.x + pixelOffset.x, worldCoordinateCenter.y + pixelOffset.y);

      return this.map.getProjection().fromPointToLatLng(worldCoordinateNewCenter);
    }
  }, {
    key: 'getPixelPositionFromLatLng',
    value: function getPixelPositionFromLatLng(_ref4) {
      var lat = _ref4.lat,
          lng = _ref4.lng;

      var scale = Math.pow(2, this.map.getZoom()),
          nw = new google.maps.LatLng(this.map.getBounds().getNorthEast().lat(), this.map.getBounds().getSouthWest().lng()),
          worldCoordinateNW = this.map.getProjection().fromLatLngToPoint(nw),
          worldCoordinate = this.map.getProjection().fromLatLngToPoint({ lat: lat, lng: lng });

      return new google.maps.Point(Math.floor((worldCoordinate.x - worldCoordinateNW.x) * scale), Math.floor((worldCoordinate.y - worldCoordinateNW.y) * scale));
    }
  }, {
    key: 'geocodeAddress',
    value: function geocodeAddress(address) {
      var _this5 = this;

      if (address === undefined || address === '') {
        this.resetMapZoomAndCenterToDefault();
      } else {
        var fullAddress = address + ', Spain';

        this.geocoder.geocode({
          address: fullAddress
        }, function (results, status) {
          if (status === google.maps.GeocoderStatus.OK) {
            var geocodeResult = results[0];

            _this5.centerMap(geocodeResult.geometry.location);
            _this5.map.setZoom(14);
          } else {
            _this5.publishGeocodeNoResultsEvent();
            _this5.resetMapZoomAndCenterToDefault();
          }
        });
      }
    }
  }, {
    key: 'resetMapZoomAndCenterToDefault',
    value: function resetMapZoomAndCenterToDefault() {
      if (this.bounds !== undefined) {
        this.centerMapOnBounds(this.bounds);
      } else {
        this.map.setZoom(this.zoom);
        this.centerMap(this.getOffsetedLatLng(new google.maps.LatLng(this.center.lat, this.center.lng)));
      }
    }
  }, {
    key: 'onMarkerSelected',
    value: function onMarkerSelected(marker) {
      this.publishMarkerSelectedEvent(marker);
    }
  }, {
    key: 'publishMarkerSelectedEvent',
    value: function publishMarkerSelectedEvent(marker) {
      _lin3sEventBus.EventPublisher.publish(new _GMapMarkerSelectedEvent2.default(marker));
    }
  }, {
    key: 'publishGeocodeNoResultsEvent',
    value: function publishGeocodeNoResultsEvent() {
      _lin3sEventBus.EventPublisher.publish(new _GMapGeocodeNoResultsEvent2.default());
    }
  }]);

  return GMap;
}();

GMap.MARKER_HEIGHT = 59;
exports.default = GMap;
";
        
        $__internal_88e7c6c4bc18a026d824563687c1f04a35cb29af64e473069478857f0a20237a->leave($__internal_88e7c6c4bc18a026d824563687c1f04a35cb29af64e473069478857f0a20237a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-front-foundation/dist/js/ui/vanilla/components/GMap/GMap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }(); /*
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * This file is part of the Front Foundation package.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * Copyright (c) 2017-present LIN3S <info@lin3s.com>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * For the full copyright and license information, please view the LICENSE
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * file that was distributed with this source code.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      * @author Mikel Tuesta <mikeltuesta@gmail.com>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      */

var _lin3sEventBus = require('lin3s-event-bus');

var _browser = require('./../../../../browser');

var _GMapMarkerDetail = require('./../GMapMarkerDetail/GMapMarkerDetail');

var _GMapMarkerDetail2 = _interopRequireDefault(_GMapMarkerDetail);

var _GMapMarkerSelectedEvent = require('./../../../../event-bus/GMap/GMapMarkerSelectedEvent');

var _GMapMarkerSelectedEvent2 = _interopRequireDefault(_GMapMarkerSelectedEvent);

var _GMapGeocodeNoResultsEvent = require('./../../../../event-bus/GMap/GMapGeocodeNoResultsEvent');

var _GMapGeocodeNoResultsEvent2 = _interopRequireDefault(_GMapGeocodeNoResultsEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

var GMap = function () {
  function GMap(domNode) {
    var _this = this;

    var _ref = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {},
        center = _ref.center,
        _ref\$zoom = _ref.zoom,
        zoom = _ref\$zoom === undefined ? { initial: 8, max: 12 } : _ref\$zoom,
        markerDefaultPath = _ref.markerDefaultPath,
        markerSelectedPath = _ref.markerSelectedPath,
        markerGroupPath = _ref.markerGroupPath,
        mapStyle = _ref.mapStyle;

    _classCallCheck(this, GMap);

    this.mapMarkers = [];
    this.markers = [];

    this.domNode = domNode;

    this.center = center;
    this.zoom = zoom;
    this.markerDefaultPath = markerDefaultPath;
    this.markerSelectedPath = markerSelectedPath;
    this.markerGroupPath = markerGroupPath;
    this.mapStyle = mapStyle;

    console.log(this);

    var markerDetailView = this.domNode.querySelector('.gmap-marker-detail');

    if (markerDetailView !== null) {
      this.markerDetail = new _GMapMarkerDetail2.default(markerDetailView);
    }

    this.markerIcons = this.buildMarkerIcons();
    this.initMap();
    this.initGeocoder();
    this.bindListeners();

    return new Promise(function (resolve) {
      google.maps.event.addListenerOnce(_this.map, 'projection_changed', function () {
        resolve(_this);
      });
    });
  }

  _createClass(GMap, [{
    key: 'buildMarkerIcons',
    value: function buildMarkerIcons() {
      var extension = (0, _browser.isIE11)() ? 'png' : 'svg',
          iconSize = new google.maps.Size(42, GMap.MARKER_HEIGHT),
          anchor = new google.maps.Point(24, GMap.MARKER_HEIGHT),
          origin = new google.maps.Point(0, 0);

      return {
        default: {
          url: this.markerDefaultPath + '.' + extension,
          anchor: anchor,
          scaledSize: iconSize,
          optimized: false,
          origin: origin
        },
        selected: {
          url: this.markerSelectedPath + '.' + extension,
          anchor: anchor,
          scaledSize: iconSize,
          optimized: false,
          origin: origin
        },
        group: {
          url: this.markerGroupPath + '.' + extension,
          anchor: anchor,
          scaledSize: iconSize,
          optimized: false,
          origin: origin
        }
      };
    }
  }, {
    key: 'initMap',
    value: function initMap() {
      var mapContainer = this.domNode.querySelector('.gmap__map');

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
          anchor: [16, 0]
        }]
      });
    }
  }, {
    key: 'initGeocoder',
    value: function initGeocoder() {
      this.geocoder = new google.maps.Geocoder();
    }
  }, {
    key: 'bindListeners',
    value: function bindListeners() {
      var _this2 = this;

      this.map.addListener('click', function () {
        return _this2.onMarkerSelected();
      });
      this.map.addListener('dragstart', function () {
        return _this2.onMarkerSelected();
      });
    }
  }, {
    key: 'setCenterOffsets',
    value: function setCenterOffsets() {
      var _ref2 = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {},
          _ref2\$x = _ref2.x,
          x = _ref2\$x === undefined ? 0 : _ref2\$x,
          _ref2\$y = _ref2.y,
          y = _ref2\$y === undefined ? 0 : _ref2\$y;

      this.centerOffsetX = x;
      this.centerOffsetY = y;

      this.centerMap(this.getOffsetedLatLng(this.map.getCenter()));
    }
  }, {
    key: 'setMarkers',
    value: function setMarkers(markers) {
      this.clearMarkers();
      this.pushMarkers(markers);
    }
  }, {
    key: 'clearMarkers',
    value: function clearMarkers() {
      this.hideMarkerDetailView();

      this.bounds = undefined;
      this.mapMarkerClusterer.clearMarkers();

      this.mapMarkers.forEach(function (marker) {
        google.maps.event.clearListeners(marker, 'click');
        marker.setMap(null);
      });

      this.markers = [];
      this.mapMarkers = [];
    }
  }, {
    key: 'pushMarkers',
    value: function pushMarkers(markers) {
      var _this3 = this;

      this.markers = markers;

      this.bounds = new google.maps.LatLngBounds();

      this.markers.forEach(function (marker) {
        if (marker.lat === undefined || marker.lng === undefined) {
          return;
        }

        var mapMarker = new google.maps.Marker({
          id: marker.id,
          position: {
            lat: parseFloat(marker.lat),
            lng: parseFloat(marker.lng)
          },
          map: _this3.map,
          icon: _this3.markerIcons.default
        });

        mapMarker.index = _this3.markers.length;
        _this3.bounds.extend(mapMarker.position);

        _this3.mapMarkers.push(mapMarker);
        _this3.mapMarkerClusterer.addMarker(mapMarker);

        mapMarker.addListener('click', function () {
          return _this3.onMarkerSelected(marker);
        });
      });

      this.centerMapOnBounds(this.bounds);
    }
  }, {
    key: 'showMarkerDetailView',
    value: function showMarkerDetailView(markerId, markerDetailHtmlContent) {
      this.hideMarkerDetailView();

      this.selectedMarker = this.mapMarkers.find(function (marker) {
        return marker.id === markerId;
      });

      if (this.selectedMarker === undefined || this.markerDetail === undefined) {
        return;
      }

      var offsetedMarkerLatLng = this.getOffsetedLatLng(this.selectedMarker.getPosition());
      this.centerMap(offsetedMarkerLatLng);

      this.selectedMarker.setIcon(this.markerIcons.selected);
      this.markerDetail.hide();
      this.markerDetail.updateContent(markerDetailHtmlContent);

      var markerDetailRect = this.markerDetail.getRect(),
          markerPixelPosition = this.getPixelPositionFromLatLng(this.selectedMarker.getPosition());

      this.markerDetail.setPosition({
        x: markerPixelPosition.x - markerDetailRect.width / 2 - 4,
        y: markerPixelPosition.y - markerDetailRect.height - GMap.MARKER_HEIGHT - 20
      });

      this.markerDetail.show();
    }
  }, {
    key: 'hideMarkerDetailView',
    value: function hideMarkerDetailView() {
      var _this4 = this;

      if (this.selectedMarker === undefined || this.markerDetail === undefined) {
        return;
      }

      var markerToHide = this.mapMarkers.find(function (marker) {
        return marker.id === _this4.selectedMarker.id;
      });

      if (markerToHide === undefined) {
        return;
      }

      markerToHide.setIcon(this.markerIcons.default);
      this.markerDetail.hide();
    }
  }, {
    key: 'centerMap',
    value: function centerMap(latLng) {
      this.map.panTo(latLng);
    }
  }, {
    key: 'centerMapOnBounds',
    value: function centerMapOnBounds(bounds) {
      this.map.fitBounds(bounds);
      this.map.panToBounds(bounds);
    }
  }, {
    key: 'getOffsetedLatLng',
    value: function getOffsetedLatLng(_ref3) {
      var lat = _ref3.lat,
          lng = _ref3.lng;

      var scale = Math.pow(2, this.map.getZoom()),
          pixelOffset = new google.maps.Point(this.centerOffsetX / scale || 0, this.centerOffsetY / scale || 0);

      var worldCoordinateCenter = this.map.getProjection().fromLatLngToPoint({ lat: lat, lng: lng }),
          worldCoordinateNewCenter = new google.maps.Point(worldCoordinateCenter.x + pixelOffset.x, worldCoordinateCenter.y + pixelOffset.y);

      return this.map.getProjection().fromPointToLatLng(worldCoordinateNewCenter);
    }
  }, {
    key: 'getPixelPositionFromLatLng',
    value: function getPixelPositionFromLatLng(_ref4) {
      var lat = _ref4.lat,
          lng = _ref4.lng;

      var scale = Math.pow(2, this.map.getZoom()),
          nw = new google.maps.LatLng(this.map.getBounds().getNorthEast().lat(), this.map.getBounds().getSouthWest().lng()),
          worldCoordinateNW = this.map.getProjection().fromLatLngToPoint(nw),
          worldCoordinate = this.map.getProjection().fromLatLngToPoint({ lat: lat, lng: lng });

      return new google.maps.Point(Math.floor((worldCoordinate.x - worldCoordinateNW.x) * scale), Math.floor((worldCoordinate.y - worldCoordinateNW.y) * scale));
    }
  }, {
    key: 'geocodeAddress',
    value: function geocodeAddress(address) {
      var _this5 = this;

      if (address === undefined || address === '') {
        this.resetMapZoomAndCenterToDefault();
      } else {
        var fullAddress = address + ', Spain';

        this.geocoder.geocode({
          address: fullAddress
        }, function (results, status) {
          if (status === google.maps.GeocoderStatus.OK) {
            var geocodeResult = results[0];

            _this5.centerMap(geocodeResult.geometry.location);
            _this5.map.setZoom(14);
          } else {
            _this5.publishGeocodeNoResultsEvent();
            _this5.resetMapZoomAndCenterToDefault();
          }
        });
      }
    }
  }, {
    key: 'resetMapZoomAndCenterToDefault',
    value: function resetMapZoomAndCenterToDefault() {
      if (this.bounds !== undefined) {
        this.centerMapOnBounds(this.bounds);
      } else {
        this.map.setZoom(this.zoom);
        this.centerMap(this.getOffsetedLatLng(new google.maps.LatLng(this.center.lat, this.center.lng)));
      }
    }
  }, {
    key: 'onMarkerSelected',
    value: function onMarkerSelected(marker) {
      this.publishMarkerSelectedEvent(marker);
    }
  }, {
    key: 'publishMarkerSelectedEvent',
    value: function publishMarkerSelectedEvent(marker) {
      _lin3sEventBus.EventPublisher.publish(new _GMapMarkerSelectedEvent2.default(marker));
    }
  }, {
    key: 'publishGeocodeNoResultsEvent',
    value: function publishGeocodeNoResultsEvent() {
      _lin3sEventBus.EventPublisher.publish(new _GMapGeocodeNoResultsEvent2.default());
    }
  }]);

  return GMap;
}();

GMap.MARKER_HEIGHT = 59;
exports.default = GMap;
", "node_modules/lin3s-front-foundation/dist/js/ui/vanilla/components/GMap/GMap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-front-foundation/dist/js/ui/vanilla/components/GMap/GMap.js");
    }
}
