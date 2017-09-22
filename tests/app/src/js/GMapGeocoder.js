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

import {onDomReady, EventPublisher} from 'lin3s-event-bus';
import {EventBus} from 'lin3s-front-foundation';
import debounce from 'lodash.debounce';

const renderMarkerDetailView = marker => {
  return `
    <h3>This is a mocked marker detail view</h3>
    <p>Marker <b>lat</b>: ${marker.lat}</p>
    <p>Marker <b>lng</b>: ${marker.lng}</p>
  `;
};

class GMapGeocoder {

  domNode;
  filterInput;
  gmapInstance;

  constructor(domNode) {
    this.domNode = domNode;
    this.filterInput = this.domNode.querySelector('.gmap-geocoder__filter');
    this.errorLabel = this.domNode.querySelector('.gmap-geocoder__error');

    // throttled method
    this.throttledGeocodeByAddress = debounce(address => {
      this.gmapInstance.geocodeAddress(address);
    }, 500);

    // Subscribe
    EventPublisher.subscribe(new EventBus.GMapInitializedEventSubscriber(gmapInitializedEvent => {
      if (gmapInitializedEvent.gmap.isChildOfDomNode(this.domNode)) {
        this.gmapInstance = gmapInitializedEvent.gmap;
        this.init();
      }
    }));
  }

  init() {
    this.setupMarkers();
    this.bindListeners();
  }

  setupMarkers() {
    const markers = [{
      id: 0,
      lat: 43.2631394,
      lng: -2.9275847
    }];

    this.gmapInstance.setMarkers(markers);
  }

  bindListeners() {
    this.filterInput.addEventListener('input', () => {
      this.errorLabel.innerHTML = '';
      this.throttledGeocodeByAddress(this.filterInput.value);
    });

    EventPublisher.subscribe(new EventBus.GMapGeocodeNoResultsEventSubscriber(() => {
      this.errorLabel.innerHTML = 'Sorry, there are no results for the provided value!';
    }));

    EventPublisher.subscribe(new EventBus.GMapMarkerSelectedEventSubscriber(gmapMarkerSelectedEvent => {
      this.onMarkerSelected(gmapMarkerSelectedEvent.marker);
    }));
  }

  onMarkerSelected(marker) {
    if (marker === undefined) {
      this.gmapInstance.hideMarkerDetailView();
    } else {
      this.gmapInstance.showMarkerDetailView(
        marker.id,
        renderMarkerDetailView(marker)
      );
    }
  }
}

const initGMapGeocoder = () => {
  const gmapWithGeocoders = document.querySelectorAll('.gmap-geocoder');

  Array.from(gmapWithGeocoders).forEach(gmapWithGeocoder => new GMapGeocoder(gmapWithGeocoder));
};

onDomReady(initGMapGeocoder);
