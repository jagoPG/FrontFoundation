<?php

/* node_modules/async/applyEach.js */
class __TwigTemplate_00d21ef783744f9010ea81b2775e2273ec53e93daf14669bc4a19258d09a4fc5 extends Twig_Template
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
        $__internal_2f3629b8b23654eb485f3c06f6ff87b6580b7d94186aaf4f0715f357a0ebac51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3629b8b23654eb485f3c06f6ff87b6580b7d94186aaf4f0715f357a0ebac51->enter($__internal_2f3629b8b23654eb485f3c06f6ff87b6580b7d94186aaf4f0715f357a0ebac51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/applyEach.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _applyEach = require('./internal/applyEach');

var _applyEach2 = _interopRequireDefault(_applyEach);

var _map = require('./map');

var _map2 = _interopRequireDefault(_map);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Applies the provided arguments to each function in the array, calling
 * `callback` after all functions have completed. If you only provide the first
 * argument, `fns`, then it will return a function which lets you pass in the
 * arguments as if it were a single function call. If more arguments are
 * provided, `callback` is required while `args` is still optional.
 *
 * @name applyEach
 * @static
 * @memberOf module:ControlFlow
 * @method
 * @category Control Flow
 * @param {Array|Iterable|Object} fns - A collection of {@link AsyncFunction}s
 * to all call with the same arguments
 * @param {...*} [args] - any number of separate arguments to pass to the
 * function.
 * @param {Function} [callback] - the final argument should be the callback,
 * called when all functions have completed processing.
 * @returns {Function} - If only the first argument, `fns`, is provided, it will
 * return a function which lets you pass in the arguments as if it were a single
 * function call. The signature is `(..args, callback)`. If invoked with any
 * arguments, `callback` is required.
 * @example
 *
 * async.applyEach([enableSearch, updateSchema], 'bucket', callback);
 *
 * // partial application example:
 * async.each(
 *     buckets,
 *     async.applyEach([enableSearch, updateSchema]),
 *     callback
 * );
 */
exports.default = (0, _applyEach2.default)(_map2.default);
module.exports = exports['default'];";
        
        $__internal_2f3629b8b23654eb485f3c06f6ff87b6580b7d94186aaf4f0715f357a0ebac51->leave($__internal_2f3629b8b23654eb485f3c06f6ff87b6580b7d94186aaf4f0715f357a0ebac51_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/applyEach.js";
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

var _applyEach = require('./internal/applyEach');

var _applyEach2 = _interopRequireDefault(_applyEach);

var _map = require('./map');

var _map2 = _interopRequireDefault(_map);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Applies the provided arguments to each function in the array, calling
 * `callback` after all functions have completed. If you only provide the first
 * argument, `fns`, then it will return a function which lets you pass in the
 * arguments as if it were a single function call. If more arguments are
 * provided, `callback` is required while `args` is still optional.
 *
 * @name applyEach
 * @static
 * @memberOf module:ControlFlow
 * @method
 * @category Control Flow
 * @param {Array|Iterable|Object} fns - A collection of {@link AsyncFunction}s
 * to all call with the same arguments
 * @param {...*} [args] - any number of separate arguments to pass to the
 * function.
 * @param {Function} [callback] - the final argument should be the callback,
 * called when all functions have completed processing.
 * @returns {Function} - If only the first argument, `fns`, is provided, it will
 * return a function which lets you pass in the arguments as if it were a single
 * function call. The signature is `(..args, callback)`. If invoked with any
 * arguments, `callback` is required.
 * @example
 *
 * async.applyEach([enableSearch, updateSchema], 'bucket', callback);
 *
 * // partial application example:
 * async.each(
 *     buckets,
 *     async.applyEach([enableSearch, updateSchema]),
 *     callback
 * );
 */
exports.default = (0, _applyEach2.default)(_map2.default);
module.exports = exports['default'];", "node_modules/async/applyEach.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/applyEach.js");
    }
}
