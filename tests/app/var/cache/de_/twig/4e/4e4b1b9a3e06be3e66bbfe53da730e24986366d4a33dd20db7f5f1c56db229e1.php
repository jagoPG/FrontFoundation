<?php

/* node_modules/async/detectSeries.js */
class __TwigTemplate_e04842cd5b9d4bdca49f208fffc3d2b01155d8dcbc23f912103bf32cf71c4e3c extends Twig_Template
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
        $__internal_a5e7f4cfaa63160bb4a1ca8bdc2b8165f4688b4c30c34bf1c3c485d5e3d21263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e7f4cfaa63160bb4a1ca8bdc2b8165f4688b4c30c34bf1c3c485d5e3d21263->enter($__internal_a5e7f4cfaa63160bb4a1ca8bdc2b8165f4688b4c30c34bf1c3c485d5e3d21263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/detectSeries.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _detectLimit = require('./detectLimit');

var _detectLimit2 = _interopRequireDefault(_detectLimit);

var _doLimit = require('./internal/doLimit');

var _doLimit2 = _interopRequireDefault(_doLimit);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [`detect`]{@link module:Collections.detect} but runs only a single async operation at a time.
 *
 * @name detectSeries
 * @static
 * @memberOf module:Collections
 * @method
 * @see [async.detect]{@link module:Collections.detect}
 * @alias findSeries
 * @category Collections
 * @param {Array|Iterable|Object} coll - A collection to iterate over.
 * @param {AsyncFunction} iteratee - A truth test to apply to each item in `coll`.
 * The iteratee must complete with a boolean value as its result.
 * Invoked with (item, callback).
 * @param {Function} [callback] - A callback which is called as soon as any
 * iteratee returns `true`, or after all the `iteratee` functions have finished.
 * Result will be the first item in the array that passes the truth test
 * (iteratee) or the value `undefined` if none passed. Invoked with
 * (err, result).
 */
exports.default = (0, _doLimit2.default)(_detectLimit2.default, 1);
module.exports = exports['default'];";
        
        $__internal_a5e7f4cfaa63160bb4a1ca8bdc2b8165f4688b4c30c34bf1c3c485d5e3d21263->leave($__internal_a5e7f4cfaa63160bb4a1ca8bdc2b8165f4688b4c30c34bf1c3c485d5e3d21263_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/detectSeries.js";
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

var _detectLimit = require('./detectLimit');

var _detectLimit2 = _interopRequireDefault(_detectLimit);

var _doLimit = require('./internal/doLimit');

var _doLimit2 = _interopRequireDefault(_doLimit);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [`detect`]{@link module:Collections.detect} but runs only a single async operation at a time.
 *
 * @name detectSeries
 * @static
 * @memberOf module:Collections
 * @method
 * @see [async.detect]{@link module:Collections.detect}
 * @alias findSeries
 * @category Collections
 * @param {Array|Iterable|Object} coll - A collection to iterate over.
 * @param {AsyncFunction} iteratee - A truth test to apply to each item in `coll`.
 * The iteratee must complete with a boolean value as its result.
 * Invoked with (item, callback).
 * @param {Function} [callback] - A callback which is called as soon as any
 * iteratee returns `true`, or after all the `iteratee` functions have finished.
 * Result will be the first item in the array that passes the truth test
 * (iteratee) or the value `undefined` if none passed. Invoked with
 * (err, result).
 */
exports.default = (0, _doLimit2.default)(_detectLimit2.default, 1);
module.exports = exports['default'];", "node_modules/async/detectSeries.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/detectSeries.js");
    }
}
