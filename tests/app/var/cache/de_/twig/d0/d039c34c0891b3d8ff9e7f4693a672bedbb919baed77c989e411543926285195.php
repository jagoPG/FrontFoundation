<?php

/* node_modules/async/parallelLimit.js */
class __TwigTemplate_a9288f6416490557491326c83d164736dcf90f265984c318d9de5aa104e018b3 extends Twig_Template
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
        $__internal_cc7d5e4efb378199e17fb4a5808cc9499e2d5ccd20d1086ba96ad4bf2b3cee37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7d5e4efb378199e17fb4a5808cc9499e2d5ccd20d1086ba96ad4bf2b3cee37->enter($__internal_cc7d5e4efb378199e17fb4a5808cc9499e2d5ccd20d1086ba96ad4bf2b3cee37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/parallelLimit.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});
exports.default = parallelLimit;

var _eachOfLimit = require('./internal/eachOfLimit');

var _eachOfLimit2 = _interopRequireDefault(_eachOfLimit);

var _parallel = require('./internal/parallel');

var _parallel2 = _interopRequireDefault(_parallel);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [`parallel`]{@link module:ControlFlow.parallel} but runs a maximum of `limit` async operations at a
 * time.
 *
 * @name parallelLimit
 * @static
 * @memberOf module:ControlFlow
 * @method
 * @see [async.parallel]{@link module:ControlFlow.parallel}
 * @category Control Flow
 * @param {Array|Iterable|Object} tasks - A collection of
 * [async functions]{@link AsyncFunction} to run.
 * Each async function can complete with any number of optional `result` values.
 * @param {number} limit - The maximum number of async operations at a time.
 * @param {Function} [callback] - An optional callback to run once all the
 * functions have completed successfully. This function gets a results array
 * (or object) containing all the result arguments passed to the task callbacks.
 * Invoked with (err, results).
 */
function parallelLimit(tasks, limit, callback) {
  (0, _parallel2.default)((0, _eachOfLimit2.default)(limit), tasks, callback);
}
module.exports = exports['default'];";
        
        $__internal_cc7d5e4efb378199e17fb4a5808cc9499e2d5ccd20d1086ba96ad4bf2b3cee37->leave($__internal_cc7d5e4efb378199e17fb4a5808cc9499e2d5ccd20d1086ba96ad4bf2b3cee37_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/parallelLimit.js";
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
exports.default = parallelLimit;

var _eachOfLimit = require('./internal/eachOfLimit');

var _eachOfLimit2 = _interopRequireDefault(_eachOfLimit);

var _parallel = require('./internal/parallel');

var _parallel2 = _interopRequireDefault(_parallel);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [`parallel`]{@link module:ControlFlow.parallel} but runs a maximum of `limit` async operations at a
 * time.
 *
 * @name parallelLimit
 * @static
 * @memberOf module:ControlFlow
 * @method
 * @see [async.parallel]{@link module:ControlFlow.parallel}
 * @category Control Flow
 * @param {Array|Iterable|Object} tasks - A collection of
 * [async functions]{@link AsyncFunction} to run.
 * Each async function can complete with any number of optional `result` values.
 * @param {number} limit - The maximum number of async operations at a time.
 * @param {Function} [callback] - An optional callback to run once all the
 * functions have completed successfully. This function gets a results array
 * (or object) containing all the result arguments passed to the task callbacks.
 * Invoked with (err, results).
 */
function parallelLimit(tasks, limit, callback) {
  (0, _parallel2.default)((0, _eachOfLimit2.default)(limit), tasks, callback);
}
module.exports = exports['default'];", "node_modules/async/parallelLimit.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/parallelLimit.js");
    }
}
