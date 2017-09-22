<?php

/* node_modules/async/groupBySeries.js */
class __TwigTemplate_b417c7504f33d22cae8493e20bd3f7180304362adce1b86688ddd377d4efa15e extends Twig_Template
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
        $__internal_f821c11f384417cdfe74e2c226dbb3d04da597a98f5c8ceaea7ce954d4f62038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f821c11f384417cdfe74e2c226dbb3d04da597a98f5c8ceaea7ce954d4f62038->enter($__internal_f821c11f384417cdfe74e2c226dbb3d04da597a98f5c8ceaea7ce954d4f62038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/groupBySeries.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _doLimit = require('./internal/doLimit');

var _doLimit2 = _interopRequireDefault(_doLimit);

var _groupByLimit = require('./groupByLimit');

var _groupByLimit2 = _interopRequireDefault(_groupByLimit);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [`groupBy`]{@link module:Collections.groupBy} but runs only a single async operation at a time.
 *
 * @name groupBySeries
 * @static
 * @memberOf module:Collections
 * @method
 * @see [async.groupBy]{@link module:Collections.groupBy}
 * @category Collection
 * @param {Array|Iterable|Object} coll - A collection to iterate over.
 * @param {number} limit - The maximum number of async operations at a time.
 * @param {AsyncFunction} iteratee - An async function to apply to each item in
 * `coll`.
 * The iteratee should complete with a `key` to group the value under.
 * Invoked with (value, callback).
 * @param {Function} [callback] - A callback which is called when all `iteratee`
 * functions have finished, or an error occurs. Result is an `Object` whoses
 * properties are arrays of values which returned the corresponding key.
 */
exports.default = (0, _doLimit2.default)(_groupByLimit2.default, 1);
module.exports = exports['default'];";
        
        $__internal_f821c11f384417cdfe74e2c226dbb3d04da597a98f5c8ceaea7ce954d4f62038->leave($__internal_f821c11f384417cdfe74e2c226dbb3d04da597a98f5c8ceaea7ce954d4f62038_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/groupBySeries.js";
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

var _doLimit = require('./internal/doLimit');

var _doLimit2 = _interopRequireDefault(_doLimit);

var _groupByLimit = require('./groupByLimit');

var _groupByLimit2 = _interopRequireDefault(_groupByLimit);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [`groupBy`]{@link module:Collections.groupBy} but runs only a single async operation at a time.
 *
 * @name groupBySeries
 * @static
 * @memberOf module:Collections
 * @method
 * @see [async.groupBy]{@link module:Collections.groupBy}
 * @category Collection
 * @param {Array|Iterable|Object} coll - A collection to iterate over.
 * @param {number} limit - The maximum number of async operations at a time.
 * @param {AsyncFunction} iteratee - An async function to apply to each item in
 * `coll`.
 * The iteratee should complete with a `key` to group the value under.
 * Invoked with (value, callback).
 * @param {Function} [callback] - A callback which is called when all `iteratee`
 * functions have finished, or an error occurs. Result is an `Object` whoses
 * properties are arrays of values which returned the corresponding key.
 */
exports.default = (0, _doLimit2.default)(_groupByLimit2.default, 1);
module.exports = exports['default'];", "node_modules/async/groupBySeries.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/groupBySeries.js");
    }
}
