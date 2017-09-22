<?php

/* node_modules/async/internal/map.js */
class __TwigTemplate_0cc22ee452769dbaa2c5c281df3616bea5160946d96878926a41ce4752f1907b extends Twig_Template
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
        $__internal_04c0971ee3d521da13e15db293ad4ed61da356588312977f7ea64622d7b76415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c0971ee3d521da13e15db293ad4ed61da356588312977f7ea64622d7b76415->enter($__internal_04c0971ee3d521da13e15db293ad4ed61da356588312977f7ea64622d7b76415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/internal/map.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
    value: true
});
exports.default = _asyncMap;

var _noop = require('lodash/noop');

var _noop2 = _interopRequireDefault(_noop);

var _wrapAsync = require('./wrapAsync');

var _wrapAsync2 = _interopRequireDefault(_wrapAsync);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _asyncMap(eachfn, arr, iteratee, callback) {
    callback = callback || _noop2.default;
    arr = arr || [];
    var results = [];
    var counter = 0;
    var _iteratee = (0, _wrapAsync2.default)(iteratee);

    eachfn(arr, function (value, _, callback) {
        var index = counter++;
        _iteratee(value, function (err, v) {
            results[index] = v;
            callback(err);
        });
    }, function (err) {
        callback(err, results);
    });
}
module.exports = exports['default'];";
        
        $__internal_04c0971ee3d521da13e15db293ad4ed61da356588312977f7ea64622d7b76415->leave($__internal_04c0971ee3d521da13e15db293ad4ed61da356588312977f7ea64622d7b76415_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/internal/map.js";
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
exports.default = _asyncMap;

var _noop = require('lodash/noop');

var _noop2 = _interopRequireDefault(_noop);

var _wrapAsync = require('./wrapAsync');

var _wrapAsync2 = _interopRequireDefault(_wrapAsync);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _asyncMap(eachfn, arr, iteratee, callback) {
    callback = callback || _noop2.default;
    arr = arr || [];
    var results = [];
    var counter = 0;
    var _iteratee = (0, _wrapAsync2.default)(iteratee);

    eachfn(arr, function (value, _, callback) {
        var index = counter++;
        _iteratee(value, function (err, v) {
            results[index] = v;
            callback(err);
        });
    }, function (err) {
        callback(err, results);
    });
}
module.exports = exports['default'];", "node_modules/async/internal/map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/internal/map.js");
    }
}
