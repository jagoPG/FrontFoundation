<?php

/* node_modules/async/mapValuesSeries.js */
class __TwigTemplate_4d11230fa04c7b5f62fc7fe289d8ed8c3ea50f0457bb170dc97b6906c2c69b92 extends Twig_Template
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
        $__internal_a769e6076567c3f589524b6963757bd0627c14d1df5d40c70ddc2f0ac8e40aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a769e6076567c3f589524b6963757bd0627c14d1df5d40c70ddc2f0ac8e40aa8->enter($__internal_a769e6076567c3f589524b6963757bd0627c14d1df5d40c70ddc2f0ac8e40aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/mapValuesSeries.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _mapValuesLimit = require('./mapValuesLimit');

var _mapValuesLimit2 = _interopRequireDefault(_mapValuesLimit);

var _doLimit = require('./internal/doLimit');

var _doLimit2 = _interopRequireDefault(_doLimit);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [`mapValues`]{@link module:Collections.mapValues} but runs only a single async operation at a time.
 *
 * @name mapValuesSeries
 * @static
 * @memberOf module:Collections
 * @method
 * @see [async.mapValues]{@link module:Collections.mapValues}
 * @category Collection
 * @param {Object} obj - A collection to iterate over.
 * @param {AsyncFunction} iteratee - A function to apply to each value and key
 * in `coll`.
 * The iteratee should complete with the transformed value as its result.
 * Invoked with (value, key, callback).
 * @param {Function} [callback] - A callback which is called when all `iteratee`
 * functions have finished, or an error occurs. `result` is a new object consisting
 * of each key from `obj`, with each transformed value on the right-hand side.
 * Invoked with (err, result).
 */
exports.default = (0, _doLimit2.default)(_mapValuesLimit2.default, 1);
module.exports = exports['default'];";
        
        $__internal_a769e6076567c3f589524b6963757bd0627c14d1df5d40c70ddc2f0ac8e40aa8->leave($__internal_a769e6076567c3f589524b6963757bd0627c14d1df5d40c70ddc2f0ac8e40aa8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/mapValuesSeries.js";
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

var _mapValuesLimit = require('./mapValuesLimit');

var _mapValuesLimit2 = _interopRequireDefault(_mapValuesLimit);

var _doLimit = require('./internal/doLimit');

var _doLimit2 = _interopRequireDefault(_doLimit);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [`mapValues`]{@link module:Collections.mapValues} but runs only a single async operation at a time.
 *
 * @name mapValuesSeries
 * @static
 * @memberOf module:Collections
 * @method
 * @see [async.mapValues]{@link module:Collections.mapValues}
 * @category Collection
 * @param {Object} obj - A collection to iterate over.
 * @param {AsyncFunction} iteratee - A function to apply to each value and key
 * in `coll`.
 * The iteratee should complete with the transformed value as its result.
 * Invoked with (value, key, callback).
 * @param {Function} [callback] - A callback which is called when all `iteratee`
 * functions have finished, or an error occurs. `result` is a new object consisting
 * of each key from `obj`, with each transformed value on the right-hand side.
 * Invoked with (err, result).
 */
exports.default = (0, _doLimit2.default)(_mapValuesLimit2.default, 1);
module.exports = exports['default'];", "node_modules/async/mapValuesSeries.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/mapValuesSeries.js");
    }
}
