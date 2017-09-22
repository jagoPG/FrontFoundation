<?php

/* node_modules/async/timesLimit.js */
class __TwigTemplate_bcf82d7faea3b9d32f1811976df6f7ec8eb6726f96c93a36dddb721f2c07b2e4 extends Twig_Template
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
        $__internal_83144de398baf4a9ef7c8f400d1becef0c159ef144a0c4219daee272761c8e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83144de398baf4a9ef7c8f400d1becef0c159ef144a0c4219daee272761c8e70->enter($__internal_83144de398baf4a9ef7c8f400d1becef0c159ef144a0c4219daee272761c8e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/timesLimit.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});
exports.default = timeLimit;

var _mapLimit = require('./mapLimit');

var _mapLimit2 = _interopRequireDefault(_mapLimit);

var _baseRange = require('lodash/_baseRange');

var _baseRange2 = _interopRequireDefault(_baseRange);

var _wrapAsync = require('./internal/wrapAsync');

var _wrapAsync2 = _interopRequireDefault(_wrapAsync);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [times]{@link module:ControlFlow.times} but runs a maximum of `limit` async operations at a
 * time.
 *
 * @name timesLimit
 * @static
 * @memberOf module:ControlFlow
 * @method
 * @see [async.times]{@link module:ControlFlow.times}
 * @category Control Flow
 * @param {number} count - The number of times to run the function.
 * @param {number} limit - The maximum number of async operations at a time.
 * @param {AsyncFunction} iteratee - The async function to call `n` times.
 * Invoked with the iteration index and a callback: (n, next).
 * @param {Function} callback - see [async.map]{@link module:Collections.map}.
 */
function timeLimit(count, limit, iteratee, callback) {
  var _iteratee = (0, _wrapAsync2.default)(iteratee);
  (0, _mapLimit2.default)((0, _baseRange2.default)(0, count, 1), limit, _iteratee, callback);
}
module.exports = exports['default'];";
        
        $__internal_83144de398baf4a9ef7c8f400d1becef0c159ef144a0c4219daee272761c8e70->leave($__internal_83144de398baf4a9ef7c8f400d1becef0c159ef144a0c4219daee272761c8e70_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/timesLimit.js";
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
exports.default = timeLimit;

var _mapLimit = require('./mapLimit');

var _mapLimit2 = _interopRequireDefault(_mapLimit);

var _baseRange = require('lodash/_baseRange');

var _baseRange2 = _interopRequireDefault(_baseRange);

var _wrapAsync = require('./internal/wrapAsync');

var _wrapAsync2 = _interopRequireDefault(_wrapAsync);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [times]{@link module:ControlFlow.times} but runs a maximum of `limit` async operations at a
 * time.
 *
 * @name timesLimit
 * @static
 * @memberOf module:ControlFlow
 * @method
 * @see [async.times]{@link module:ControlFlow.times}
 * @category Control Flow
 * @param {number} count - The number of times to run the function.
 * @param {number} limit - The maximum number of async operations at a time.
 * @param {AsyncFunction} iteratee - The async function to call `n` times.
 * Invoked with the iteration index and a callback: (n, next).
 * @param {Function} callback - see [async.map]{@link module:Collections.map}.
 */
function timeLimit(count, limit, iteratee, callback) {
  var _iteratee = (0, _wrapAsync2.default)(iteratee);
  (0, _mapLimit2.default)((0, _baseRange2.default)(0, count, 1), limit, _iteratee, callback);
}
module.exports = exports['default'];", "node_modules/async/timesLimit.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/timesLimit.js");
    }
}
