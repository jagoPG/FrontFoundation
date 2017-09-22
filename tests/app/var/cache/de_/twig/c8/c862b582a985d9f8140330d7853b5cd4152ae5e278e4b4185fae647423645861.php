<?php

/* node_modules/lin3s-front-foundation/dist/js/event-bus/GMap/GMapInitializedEvent.js */
class __TwigTemplate_54994d25767a9ff6ac2d08e88494879a010fe0adcae8a81256563cd1ab6e1d69 extends Twig_Template
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
        $__internal_c9e4404cfba919c9e54d1b6ff514c780f02c53fec3daddb4319a23726ccac3a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e4404cfba919c9e54d1b6ff514c780f02c53fec3daddb4319a23726ccac3a3->enter($__internal_c9e4404cfba919c9e54d1b6ff514c780f02c53fec3daddb4319a23726ccac3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-front-foundation/dist/js/event-bus/GMap/GMapInitializedEvent.js"));

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

var GMapInitializedEvent = function (_Event) {
  _inherits(GMapInitializedEvent, _Event);

  function GMapInitializedEvent(gmap) {
    _classCallCheck(this, GMapInitializedEvent);

    var _this = _possibleConstructorReturn(this, (GMapInitializedEvent.__proto__ || Object.getPrototypeOf(GMapInitializedEvent)).call(this, GMapInitializedEvent.NAME));

    _this.gmap = gmap;
    return _this;
  }

  return GMapInitializedEvent;
}(_lin3sEventBus.Event);

GMapInitializedEvent.NAME = 'GMAP_INITIALIZED';
exports.default = GMapInitializedEvent;";
        
        $__internal_c9e4404cfba919c9e54d1b6ff514c780f02c53fec3daddb4319a23726ccac3a3->leave($__internal_c9e4404cfba919c9e54d1b6ff514c780f02c53fec3daddb4319a23726ccac3a3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-front-foundation/dist/js/event-bus/GMap/GMapInitializedEvent.js";
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

var GMapInitializedEvent = function (_Event) {
  _inherits(GMapInitializedEvent, _Event);

  function GMapInitializedEvent(gmap) {
    _classCallCheck(this, GMapInitializedEvent);

    var _this = _possibleConstructorReturn(this, (GMapInitializedEvent.__proto__ || Object.getPrototypeOf(GMapInitializedEvent)).call(this, GMapInitializedEvent.NAME));

    _this.gmap = gmap;
    return _this;
  }

  return GMapInitializedEvent;
}(_lin3sEventBus.Event);

GMapInitializedEvent.NAME = 'GMAP_INITIALIZED';
exports.default = GMapInitializedEvent;", "node_modules/lin3s-front-foundation/dist/js/event-bus/GMap/GMapInitializedEvent.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-front-foundation/dist/js/event-bus/GMap/GMapInitializedEvent.js");
    }
}
