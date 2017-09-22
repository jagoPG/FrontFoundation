<?php

/* node_modules/async/internal/doParallelLimit.js */
class __TwigTemplate_c3afe5aff84154c61562d2a6c6da25d6552f180ed2e6d5a47290e5924da69ac6 extends Twig_Template
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
        $__internal_2cd49918e904dd7c3739793ac9ece1450e992375b3354509b601d2ab535b5396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd49918e904dd7c3739793ac9ece1450e992375b3354509b601d2ab535b5396->enter($__internal_2cd49918e904dd7c3739793ac9ece1450e992375b3354509b601d2ab535b5396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/internal/doParallelLimit.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
    value: true
});
exports.default = doParallelLimit;

var _eachOfLimit = require('./eachOfLimit');

var _eachOfLimit2 = _interopRequireDefault(_eachOfLimit);

var _wrapAsync = require('./wrapAsync');

var _wrapAsync2 = _interopRequireDefault(_wrapAsync);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function doParallelLimit(fn) {
    return function (obj, limit, iteratee, callback) {
        return fn((0, _eachOfLimit2.default)(limit), obj, (0, _wrapAsync2.default)(iteratee), callback);
    };
}
module.exports = exports['default'];";
        
        $__internal_2cd49918e904dd7c3739793ac9ece1450e992375b3354509b601d2ab535b5396->leave($__internal_2cd49918e904dd7c3739793ac9ece1450e992375b3354509b601d2ab535b5396_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/internal/doParallelLimit.js";
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
exports.default = doParallelLimit;

var _eachOfLimit = require('./eachOfLimit');

var _eachOfLimit2 = _interopRequireDefault(_eachOfLimit);

var _wrapAsync = require('./wrapAsync');

var _wrapAsync2 = _interopRequireDefault(_wrapAsync);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function doParallelLimit(fn) {
    return function (obj, limit, iteratee, callback) {
        return fn((0, _eachOfLimit2.default)(limit), obj, (0, _wrapAsync2.default)(iteratee), callback);
    };
}
module.exports = exports['default'];", "node_modules/async/internal/doParallelLimit.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/internal/doParallelLimit.js");
    }
}
