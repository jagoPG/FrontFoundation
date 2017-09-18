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
import {loadScript} from './../../../../dom';
import GMap from './GMap';
import {GMapInitializedEvent} from './../../../../event-bus/GMap/GMapInitializedEvent';

const GMAP_CLASS_NAME = 'js-gmap';

const publishMapInstanceInitializedEvent = (gmapInstance) => {
  EventPublisher.publish(new GMapInitializedEvent(gmapInstance));
};

const loadGMapScripts = (apiKey) => {
  const lang = document.querySelector('html').getAttribute('lang');

  loadScript('https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js')
    .then(() =>
      loadScript(`https://maps.googleapis.com/maps/api/js?key=${apiKey}&callback=initGMap&language=${lang}`)
    );
};

const onReady = () => {
  const gmap = document.querySelector(`.${GMAP_CLASS_NAME}`);

  if (gmap === null) {
    return;
  }

  const apiKey = gmap.dataset.apiKey;

  loadGMapScripts(apiKey);
};

window.initGMap = () => {
  const gmaps = document.querySelectorAll(`.${GMAP_CLASS_NAME}`);

  Array.from(gmaps).forEach(map => {
    const
      centerLat = parseFloat(map.dataset.centerLat, 10),
      centerLng = parseFloat(map.dataset.enterLng, 10),
      initialZoom = parseInt(map.dataset.initialZoom, 10),
      maxZoom = parseInt(map.dataset.initialZoom, 10),
      markerDefaultPath = map.dataset.markerDefaultPath,
      markerSelectedPath = map.dataset.markerSelectedPath,
      markerGroupPath = map.dataset.markerGroupPath;

    const gmapPromise = new GMap(map, {
      center: {
        lat: centerLat,
        lng: centerLng
      },
      zoom: {
        initial: initialZoom,
        max: maxZoom
      },
      markerDefaultPath,
      markerSelectedPath,
      markerGroupPath
    });

    gmapPromise.then(gmap => {
      publishMapInstanceInitializedEvent(gmap);
    });
  });
};

onDomReady(onReady);
