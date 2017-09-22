<?php

/* node_modules/async/compose.js */
class __TwigTemplate_590b5342c3addffce5c91881d69da913df4e308c1f287f60dcedc3716e03dfaa extends Twig_Template
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
        $__internal_8d6b58f3256d310a27f0d8d37c65ad145ca20e0c8716f82abb622a27ba6703e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6b58f3256d310a27f0d8d37c65ad145ca20e0c8716f82abb622a27ba6703e2->enter($__internal_8d6b58f3256d310a27f0d8d37c65ad145ca20e0c8716f82abb622a27ba6703e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/compose.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

exports.default = function () /*...args*/{
  return _seq2.default.apply(null, (0, _slice2.default)(arguments).reverse());
};

var _seq = require('./seq');

var _seq2 = _interopRequireDefault(_seq);

var _slice = require('./internal/slice');

var _slice2 = _interopRequireDefault(_slice);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

;

/**
 * Creates a function which is a composition of the passed asynchronous
 * functions. Each function consumes the return value of the function that
 * follows. Composing functions `f()`, `g()`, and `h()` would produce the result
 * of `f(g(h()))`, only this version uses callbacks to obtain the return values.
 *
 * Each function is executed with the `this` binding of the composed function.
 *
 * @name compose
 * @static
 * @memberOf module:ControlFlow
 * @method
 * @category Control Flow
 * @param {...AsyncFunction} functions - the asynchronous functions to compose
 * @returns {Function} an asynchronous function that is the composed
 * asynchronous `functions`
 * @example
 *
 * function add1(n, callback) {
 *     setTimeout(function () {
 *         callback(null, n + 1);
 *     }, 10);
 * }
 *
 * function mul3(n, callback) {
 *     setTimeout(function () {
 *         callback(null, n * 3);
 *     }, 10);
 * }
 *
 * var add1mul3 = async.compose(mul3, add1);
 * add1mul3(4, function (err, result) {
 *     // result now equals 15
 * });
 */
module.exports = exports['default'];";
        
        $__internal_8d6b58f3256d310a27f0d8d37c65ad145ca20e0c8716f82abb622a27ba6703e2->leave($__internal_8d6b58f3256d310a27f0d8d37c65ad145ca20e0c8716f82abb622a27ba6703e2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/compose.js";
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

exports.default = function () /*...args*/{
  return _seq2.default.apply(null, (0, _slice2.default)(arguments).reverse());
};

var _seq = require('./seq');

var _seq2 = _interopRequireDefault(_seq);

var _slice = require('./internal/slice');

var _slice2 = _interopRequireDefault(_slice);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

;

/**
 * Creates a function which is a composition of the passed asynchronous
 * functions. Each function consumes the return value of the function that
 * follows. Composing functions `f()`, `g()`, and `h()` would produce the result
 * of `f(g(h()))`, only this version uses callbacks to obtain the return values.
 *
 * Each function is executed with the `this` binding of the composed function.
 *
 * @name compose
 * @static
 * @memberOf module:ControlFlow
 * @method
 * @category Control Flow
 * @param {...AsyncFunction} functions - the asynchronous functions to compose
 * @returns {Function} an asynchronous function that is the composed
 * asynchronous `functions`
 * @example
 *
 * function add1(n, callback) {
 *     setTimeout(function () {
 *         callback(null, n + 1);
 *     }, 10);
 * }
 *
 * function mul3(n, callback) {
 *     setTimeout(function () {
 *         callback(null, n * 3);
 *     }, 10);
 * }
 *
 * var add1mul3 = async.compose(mul3, add1);
 * add1mul3(4, function (err, result) {
 *     // result now equals 15
 * });
 */
module.exports = exports['default'];", "node_modules/async/compose.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/compose.js");
    }
}
