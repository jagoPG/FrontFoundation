<?php

/* node_modules/lin3s-front-foundation/dist/js/event-bus/GMap/GMapGeocodeNoResultsEventSubscriber.js */
class __TwigTemplate_3dc2f69bcb650bf5c7664c05ce5aadbee4346578ed4c061d0ceb435e3266a7ad extends Twig_Template
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
        $__internal_68b4157e4bdb287bf50efa44c84d5f604e17409abe32bf5e3cdebb739967f066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b4157e4bdb287bf50efa44c84d5f604e17409abe32bf5e3cdebb739967f066->enter($__internal_68b4157e4bdb287bf50efa44c84d5f604e17409abe32bf5e3cdebb739967f066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-front-foundation/dist/js/event-bus/GMap/GMapGeocodeNoResultsEventSubscriber.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _lin3sEventBus = require('lin3s-event-bus');

var _GMapGeocodeNoResultsEvent = require('./GMapGeocodeNoResultsEvent');

var _GMapGeocodeNoResultsEvent2 = _interopRequireDefault(_GMapGeocodeNoResultsEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

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

var GMapGeocodeNoResultsEventSubscriber = function (_EventSubscriber) {
  _inherits(GMapGeocodeNoResultsEventSubscriber, _EventSubscriber);

  function GMapGeocodeNoResultsEventSubscriber() {
    _classCallCheck(this, GMapGeocodeNoResultsEventSubscriber);

    return _possibleConstructorReturn(this, (GMapGeocodeNoResultsEventSubscriber.__proto__ || Object.getPrototypeOf(GMapGeocodeNoResultsEventSubscriber)).apply(this, arguments));
  }

  _createClass(GMapGeocodeNoResultsEventSubscriber, [{
    key: 'isSubscribedTo',
    value: function isSubscribedTo(anEvent) {
      var event = new _GMapGeocodeNoResultsEvent2.default();

      return anEvent.getName() === event.getName();
    }
  }]);

  return GMapGeocodeNoResultsEventSubscriber;
}(_lin3sEventBus.EventSubscriber);

exports.default = GMapGeocodeNoResultsEventSubscriber;";
        
        $__internal_68b4157e4bdb287bf50efa44c84d5f604e17409abe32bf5e3cdebb739967f066->leave($__internal_68b4157e4bdb287bf50efa44c84d5f604e17409abe32bf5e3cdebb739967f066_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-front-foundation/dist/js/event-bus/GMap/GMapGeocodeNoResultsEventSubscriber.js";
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

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _lin3sEventBus = require('lin3s-event-bus');

var _GMapGeocodeNoResultsEvent = require('./GMapGeocodeNoResultsEvent');

var _GMapGeocodeNoResultsEvent2 = _interopRequireDefault(_GMapGeocodeNoResultsEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

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

var GMapGeocodeNoResultsEventSubscriber = function (_EventSubscriber) {
  _inherits(GMapGeocodeNoResultsEventSubscriber, _EventSubscriber);

  function GMapGeocodeNoResultsEventSubscriber() {
    _classCallCheck(this, GMapGeocodeNoResultsEventSubscriber);

    return _possibleConstructorReturn(this, (GMapGeocodeNoResultsEventSubscriber.__proto__ || Object.getPrototypeOf(GMapGeocodeNoResultsEventSubscriber)).apply(this, arguments));
  }

  _createClass(GMapGeocodeNoResultsEventSubscriber, [{
    key: 'isSubscribedTo',
    value: function isSubscribedTo(anEvent) {
      var event = new _GMapGeocodeNoResultsEvent2.default();

      return anEvent.getName() === event.getName();
    }
  }]);

  return GMapGeocodeNoResultsEventSubscriber;
}(_lin3sEventBus.EventSubscriber);

exports.default = GMapGeocodeNoResultsEventSubscriber;", "node_modules/lin3s-front-foundation/dist/js/event-bus/GMap/GMapGeocodeNoResultsEventSubscriber.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-front-foundation/dist/js/event-bus/GMap/GMapGeocodeNoResultsEventSubscriber.js");
    }
}
