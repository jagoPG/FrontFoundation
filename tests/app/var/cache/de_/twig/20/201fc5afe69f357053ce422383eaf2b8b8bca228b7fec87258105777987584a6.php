<?php

/* node_modules/async/reduceRight.js */
class __TwigTemplate_a508f46f97e51727c9858380eb11da1a23d9a1927487ca1c746e861797ebae10 extends Twig_Template
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
        $__internal_5b732951f37cd6428dadaefac5590f9a4caacc819e113c1c9d9b58121fb11ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b732951f37cd6428dadaefac5590f9a4caacc819e113c1c9d9b58121fb11ee0->enter($__internal_5b732951f37cd6428dadaefac5590f9a4caacc819e113c1c9d9b58121fb11ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/reduceRight.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});
exports.default = reduceRight;

var _reduce = require('./reduce');

var _reduce2 = _interopRequireDefault(_reduce);

var _slice = require('./internal/slice');

var _slice2 = _interopRequireDefault(_slice);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Same as [`reduce`]{@link module:Collections.reduce}, only operates on `array` in reverse order.
 *
 * @name reduceRight
 * @static
 * @memberOf module:Collections
 * @method
 * @see [async.reduce]{@link module:Collections.reduce}
 * @alias foldr
 * @category Collection
 * @param {Array} array - A collection to iterate over.
 * @param {*} memo - The initial state of the reduction.
 * @param {AsyncFunction} iteratee - A function applied to each item in the
 * array to produce the next step in the reduction.
 * The `iteratee` should complete with the next state of the reduction.
 * If the iteratee complete with an error, the reduction is stopped and the
 * main `callback` is immediately called with the error.
 * Invoked with (memo, item, callback).
 * @param {Function} [callback] - A callback which is called after all the
 * `iteratee` functions have finished. Result is the reduced value. Invoked with
 * (err, result).
 */
function reduceRight(array, memo, iteratee, callback) {
  var reversed = (0, _slice2.default)(array).reverse();
  (0, _reduce2.default)(reversed, memo, iteratee, callback);
}
module.exports = exports['default'];";
        
        $__internal_5b732951f37cd6428dadaefac5590f9a4caacc819e113c1c9d9b58121fb11ee0->leave($__internal_5b732951f37cd6428dadaefac5590f9a4caacc819e113c1c9d9b58121fb11ee0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/reduceRight.js";
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
exports.default = reduceRight;

var _reduce = require('./reduce');

var _reduce2 = _interopRequireDefault(_reduce);

var _slice = require('./internal/slice');

var _slice2 = _interopRequireDefault(_slice);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Same as [`reduce`]{@link module:Collections.reduce}, only operates on `array` in reverse order.
 *
 * @name reduceRight
 * @static
 * @memberOf module:Collections
 * @method
 * @see [async.reduce]{@link module:Collections.reduce}
 * @alias foldr
 * @category Collection
 * @param {Array} array - A collection to iterate over.
 * @param {*} memo - The initial state of the reduction.
 * @param {AsyncFunction} iteratee - A function applied to each item in the
 * array to produce the next step in the reduction.
 * The `iteratee` should complete with the next state of the reduction.
 * If the iteratee complete with an error, the reduction is stopped and the
 * main `callback` is immediately called with the error.
 * Invoked with (memo, item, callback).
 * @param {Function} [callback] - A callback which is called after all the
 * `iteratee` functions have finished. Result is the reduced value. Invoked with
 * (err, result).
 */
function reduceRight(array, memo, iteratee, callback) {
  var reversed = (0, _slice2.default)(array).reverse();
  (0, _reduce2.default)(reversed, memo, iteratee, callback);
}
module.exports = exports['default'];", "node_modules/async/reduceRight.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/reduceRight.js");
    }
}
