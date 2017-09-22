<?php

/* node_modules/async/internal/doParallel.js */
class __TwigTemplate_bb3350b84a140b832c0383349c5bc7cd9cbf78f530019b23bf49b67a1fe37246 extends Twig_Template
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
        $__internal_5be22ed265adecc2e1a50e0228cfd1f71604e4d873be57b7fbbc486ea146d353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be22ed265adecc2e1a50e0228cfd1f71604e4d873be57b7fbbc486ea146d353->enter($__internal_5be22ed265adecc2e1a50e0228cfd1f71604e4d873be57b7fbbc486ea146d353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/internal/doParallel.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
    value: true
});
exports.default = doParallel;

var _eachOf = require('../eachOf');

var _eachOf2 = _interopRequireDefault(_eachOf);

var _wrapAsync = require('./wrapAsync');

var _wrapAsync2 = _interopRequireDefault(_wrapAsync);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function doParallel(fn) {
    return function (obj, iteratee, callback) {
        return fn(_eachOf2.default, obj, (0, _wrapAsync2.default)(iteratee), callback);
    };
}
module.exports = exports['default'];";
        
        $__internal_5be22ed265adecc2e1a50e0228cfd1f71604e4d873be57b7fbbc486ea146d353->leave($__internal_5be22ed265adecc2e1a50e0228cfd1f71604e4d873be57b7fbbc486ea146d353_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/internal/doParallel.js";
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
exports.default = doParallel;

var _eachOf = require('../eachOf');

var _eachOf2 = _interopRequireDefault(_eachOf);

var _wrapAsync = require('./wrapAsync');

var _wrapAsync2 = _interopRequireDefault(_wrapAsync);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function doParallel(fn) {
    return function (obj, iteratee, callback) {
        return fn(_eachOf2.default, obj, (0, _wrapAsync2.default)(iteratee), callback);
    };
}
module.exports = exports['default'];", "node_modules/async/internal/doParallel.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/internal/doParallel.js");
    }
}
