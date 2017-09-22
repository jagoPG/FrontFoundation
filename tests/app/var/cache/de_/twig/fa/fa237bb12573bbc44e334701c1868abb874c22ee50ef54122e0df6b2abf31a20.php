<?php

/* node_modules/lin3s-front-foundation/dist/js/event-bus/GMap/GMapMarkerSelectedEvent.js */
class __TwigTemplate_a7d3f1ec7e7efcc9d4dfce92095f82748efda90c55a60c4c75a40f8b9ba78ff8 extends Twig_Template
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
        $__internal_f62e00cb3fabdbc96a00a2f982380024cf43e64c9416b72adb280cf7b9a5cdbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f62e00cb3fabdbc96a00a2f982380024cf43e64c9416b72adb280cf7b9a5cdbe->enter($__internal_f62e00cb3fabdbc96a00a2f982380024cf43e64c9416b72adb280cf7b9a5cdbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-front-foundation/dist/js/event-bus/GMap/GMapMarkerSelectedEvent.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _lin3sEventBus = require('lin3s-event-bus');

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\"); } return call && (typeof call === \"object\" || typeof call === \"function\") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== \"function\" && superClass !== null) { throw new TypeError(\"Super expression must either be null or a function, not \" + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; } /*
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * This file is part of the Front Foundation package.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * Copyright (c) 2017-present LIN3S <info@lin3s.com>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * For the full copyright and license information, please view the LICENSE
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * file that was distributed with this source code.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * @author Mikel Tuesta <mikeltuesta@gmail.com>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                */

var GMapMarkerSelectedEvent = function (_Event) {
  _inherits(GMapMarkerSelectedEvent, _Event);

  function GMapMarkerSelectedEvent(marker) {
    _classCallCheck(this, GMapMarkerSelectedEvent);

    var _this = _possibleConstructorReturn(this, (GMapMarkerSelectedEvent.__proto__ || Object.getPrototypeOf(GMapMarkerSelectedEvent)).call(this, GMapMarkerSelectedEvent.NAME));

    _this.marker = marker;
    return _this;
  }

  return GMapMarkerSelectedEvent;
}(_lin3sEventBus.Event);

GMapMarkerSelectedEvent.NAME = 'GMAP_MARKER_SELECTED';
exports.default = GMapMarkerSelectedEvent;";
        
        $__internal_f62e00cb3fabdbc96a00a2f982380024cf43e64c9416b72adb280cf7b9a5cdbe->leave($__internal_f62e00cb3fabdbc96a00a2f982380024cf43e64c9416b72adb280cf7b9a5cdbe_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-front-foundation/dist/js/event-bus/GMap/GMapMarkerSelectedEvent.js";
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

var _lin3sEventBus = require('lin3s-event-bus');

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError(\"this hasn't been initialised - super() hasn't been called\"); } return call && (typeof call === \"object\" || typeof call === \"function\") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== \"function\" && superClass !== null) { throw new TypeError(\"Super expression must either be null or a function, not \" + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; } /*
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * This file is part of the Front Foundation package.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * Copyright (c) 2017-present LIN3S <info@lin3s.com>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * For the full copyright and license information, please view the LICENSE
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * file that was distributed with this source code.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                *
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                * @author Mikel Tuesta <mikeltuesta@gmail.com>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                */

var GMapMarkerSelectedEvent = function (_Event) {
  _inherits(GMapMarkerSelectedEvent, _Event);

  function GMapMarkerSelectedEvent(marker) {
    _classCallCheck(this, GMapMarkerSelectedEvent);

    var _this = _possibleConstructorReturn(this, (GMapMarkerSelectedEvent.__proto__ || Object.getPrototypeOf(GMapMarkerSelectedEvent)).call(this, GMapMarkerSelectedEvent.NAME));

    _this.marker = marker;
    return _this;
  }

  return GMapMarkerSelectedEvent;
}(_lin3sEventBus.Event);

GMapMarkerSelectedEvent.NAME = 'GMAP_MARKER_SELECTED';
exports.default = GMapMarkerSelectedEvent;", "node_modules/lin3s-front-foundation/dist/js/event-bus/GMap/GMapMarkerSelectedEvent.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-front-foundation/dist/js/event-bus/GMap/GMapMarkerSelectedEvent.js");
    }
}
