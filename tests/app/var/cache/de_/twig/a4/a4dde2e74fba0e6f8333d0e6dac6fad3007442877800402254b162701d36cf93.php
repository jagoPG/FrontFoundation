<?php

/* node_modules/async/eachOfSeries.js */
class __TwigTemplate_24ac0399f9e8f61bdd7b0b9664dc48fedcc5ce2b83c9e0734ea7edf7736eede8 extends Twig_Template
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
        $__internal_a1f01921347aeb2a335d0ff23089be4f4537ab7c20d62817514e8d68f088ee6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f01921347aeb2a335d0ff23089be4f4537ab7c20d62817514e8d68f088ee6a->enter($__internal_a1f01921347aeb2a335d0ff23089be4f4537ab7c20d62817514e8d68f088ee6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/eachOfSeries.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _eachOfLimit = require('./eachOfLimit');

var _eachOfLimit2 = _interopRequireDefault(_eachOfLimit);

var _doLimit = require('./internal/doLimit');

var _doLimit2 = _interopRequireDefault(_doLimit);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [`eachOf`]{@link module:Collections.eachOf} but runs only a single async operation at a time.
 *
 * @name eachOfSeries
 * @static
 * @memberOf module:Collections
 * @method
 * @see [async.eachOf]{@link module:Collections.eachOf}
 * @alias forEachOfSeries
 * @category Collection
 * @param {Array|Iterable|Object} coll - A collection to iterate over.
 * @param {AsyncFunction} iteratee - An async function to apply to each item in
 * `coll`.
 * Invoked with (item, key, callback).
 * @param {Function} [callback] - A callback which is called when all `iteratee`
 * functions have finished, or an error occurs. Invoked with (err).
 */
exports.default = (0, _doLimit2.default)(_eachOfLimit2.default, 1);
module.exports = exports['default'];";
        
        $__internal_a1f01921347aeb2a335d0ff23089be4f4537ab7c20d62817514e8d68f088ee6a->leave($__internal_a1f01921347aeb2a335d0ff23089be4f4537ab7c20d62817514e8d68f088ee6a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/eachOfSeries.js";
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

var _eachOfLimit = require('./eachOfLimit');

var _eachOfLimit2 = _interopRequireDefault(_eachOfLimit);

var _doLimit = require('./internal/doLimit');

var _doLimit2 = _interopRequireDefault(_doLimit);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [`eachOf`]{@link module:Collections.eachOf} but runs only a single async operation at a time.
 *
 * @name eachOfSeries
 * @static
 * @memberOf module:Collections
 * @method
 * @see [async.eachOf]{@link module:Collections.eachOf}
 * @alias forEachOfSeries
 * @category Collection
 * @param {Array|Iterable|Object} coll - A collection to iterate over.
 * @param {AsyncFunction} iteratee - An async function to apply to each item in
 * `coll`.
 * Invoked with (item, key, callback).
 * @param {Function} [callback] - A callback which is called when all `iteratee`
 * functions have finished, or an error occurs. Invoked with (err).
 */
exports.default = (0, _doLimit2.default)(_eachOfLimit2.default, 1);
module.exports = exports['default'];", "node_modules/async/eachOfSeries.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/eachOfSeries.js");
    }
}
