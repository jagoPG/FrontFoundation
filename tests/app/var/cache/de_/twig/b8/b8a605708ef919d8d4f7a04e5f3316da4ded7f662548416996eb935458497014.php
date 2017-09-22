<?php

/* node_modules/lin3s-front-foundation/dist/js/ui/vanilla/components/GMap/init.js */
class __TwigTemplate_3833de702c34f1e1dad5b6a09e65fd706465643345a47b89438bf76c5af7ec2e extends Twig_Template
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
        $__internal_78442d02206cf50a726feb3885142362acffbafb0171a1d2c6c6a5ecd1253dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78442d02206cf50a726feb3885142362acffbafb0171a1d2c6c6a5ecd1253dc2->enter($__internal_78442d02206cf50a726feb3885142362acffbafb0171a1d2c6c6a5ecd1253dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-front-foundation/dist/js/ui/vanilla/components/GMap/init.js"));

        // line 1
        echo "'use strict';

var _lin3sEventBus = require('lin3s-event-bus');

var _dom = require('./../../../../dom');

var _GMap = require('./GMap');

var _GMap2 = _interopRequireDefault(_GMap);

var _GMapInitializedEvent = require('./../../../../event-bus/GMap/GMapInitializedEvent');

var _GMapInitializedEvent2 = _interopRequireDefault(_GMapInitializedEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

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

var GMAP_CLASS_NAME = 'js-gmap';

var publishMapInstanceInitializedEvent = function publishMapInstanceInitializedEvent(gmapInstance) {
  _lin3sEventBus.EventPublisher.publish(new _GMapInitializedEvent2.default(gmapInstance));
};

var loadGMapScripts = function loadGMapScripts(apiKey) {
  var lang = document.querySelector('html').getAttribute('lang');

  (0, _dom.loadScript)('https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js').then(function () {
    return (0, _dom.loadScript)('https://maps.googleapis.com/maps/api/js?key=' + apiKey + '&callback=initGMap&language=' + lang);
  });
};

var onReady = function onReady() {
  var gmap = document.querySelector('.' + GMAP_CLASS_NAME);

  if (gmap === null) {
    return;
  }

  var apiKey = gmap.dataset.apiKey;

  loadGMapScripts(apiKey);
};

window.initGMap = function () {
  var gmaps = document.querySelectorAll('.' + GMAP_CLASS_NAME);

  Array.from(gmaps).forEach(function (map) {
    var centerLat = parseFloat(map.dataset.centerLat, 10),
        centerLng = parseFloat(map.dataset.centerLng, 10),
        initialZoom = parseInt(map.dataset.initialZoom, 10),
        maxZoom = parseInt(map.dataset.maxZoom, 10),
        markerDefaultPath = map.dataset.markerDefaultPath,
        markerSelectedPath = map.dataset.markerSelectedPath,
        markerGroupPath = map.dataset.markerGroupPath,
        mapStyle = JSON.parse(map.dataset.style);

    console.log(map.dataset.style);
    console.log(mapStyle);

    var gmapPromise = new _GMap2.default(map, {
      center: {
        lat: centerLat,
        lng: centerLng
      },
      zoom: {
        initial: initialZoom,
        max: maxZoom
      },
      markerDefaultPath: markerDefaultPath,
      markerSelectedPath: markerSelectedPath,
      markerGroupPath: markerGroupPath,
      mapStyle: mapStyle
    });

    gmapPromise.then(function (gmap) {
      publishMapInstanceInitializedEvent(gmap);
    });
  });
};

(0, _lin3sEventBus.onDomReady)(onReady);
";
        
        $__internal_78442d02206cf50a726feb3885142362acffbafb0171a1d2c6c6a5ecd1253dc2->leave($__internal_78442d02206cf50a726feb3885142362acffbafb0171a1d2c6c6a5ecd1253dc2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-front-foundation/dist/js/ui/vanilla/components/GMap/init.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var _lin3sEventBus = require('lin3s-event-bus');

var _dom = require('./../../../../dom');

var _GMap = require('./GMap');

var _GMap2 = _interopRequireDefault(_GMap);

var _GMapInitializedEvent = require('./../../../../event-bus/GMap/GMapInitializedEvent');

var _GMapInitializedEvent2 = _interopRequireDefault(_GMapInitializedEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

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

var GMAP_CLASS_NAME = 'js-gmap';

var publishMapInstanceInitializedEvent = function publishMapInstanceInitializedEvent(gmapInstance) {
  _lin3sEventBus.EventPublisher.publish(new _GMapInitializedEvent2.default(gmapInstance));
};

var loadGMapScripts = function loadGMapScripts(apiKey) {
  var lang = document.querySelector('html').getAttribute('lang');

  (0, _dom.loadScript)('https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js').then(function () {
    return (0, _dom.loadScript)('https://maps.googleapis.com/maps/api/js?key=' + apiKey + '&callback=initGMap&language=' + lang);
  });
};

var onReady = function onReady() {
  var gmap = document.querySelector('.' + GMAP_CLASS_NAME);

  if (gmap === null) {
    return;
  }

  var apiKey = gmap.dataset.apiKey;

  loadGMapScripts(apiKey);
};

window.initGMap = function () {
  var gmaps = document.querySelectorAll('.' + GMAP_CLASS_NAME);

  Array.from(gmaps).forEach(function (map) {
    var centerLat = parseFloat(map.dataset.centerLat, 10),
        centerLng = parseFloat(map.dataset.centerLng, 10),
        initialZoom = parseInt(map.dataset.initialZoom, 10),
        maxZoom = parseInt(map.dataset.maxZoom, 10),
        markerDefaultPath = map.dataset.markerDefaultPath,
        markerSelectedPath = map.dataset.markerSelectedPath,
        markerGroupPath = map.dataset.markerGroupPath,
        mapStyle = JSON.parse(map.dataset.style);

    console.log(map.dataset.style);
    console.log(mapStyle);

    var gmapPromise = new _GMap2.default(map, {
      center: {
        lat: centerLat,
        lng: centerLng
      },
      zoom: {
        initial: initialZoom,
        max: maxZoom
      },
      markerDefaultPath: markerDefaultPath,
      markerSelectedPath: markerSelectedPath,
      markerGroupPath: markerGroupPath,
      mapStyle: mapStyle
    });

    gmapPromise.then(function (gmap) {
      publishMapInstanceInitializedEvent(gmap);
    });
  });
};

(0, _lin3sEventBus.onDomReady)(onReady);
", "node_modules/lin3s-front-foundation/dist/js/ui/vanilla/components/GMap/init.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-front-foundation/dist/js/ui/vanilla/components/GMap/init.js");
    }
}
