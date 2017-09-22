<?php

/* node_modules/async/log.js */
class __TwigTemplate_b171b1e30aefd2b67a537467e7116452c2446c92de2f005ded636404c02f27fa extends Twig_Template
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
        $__internal_bc5e7e913277bea5e4a2e0194408436c833e8d73c417b6f5a79e59bf31ead286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5e7e913277bea5e4a2e0194408436c833e8d73c417b6f5a79e59bf31ead286->enter($__internal_bc5e7e913277bea5e4a2e0194408436c833e8d73c417b6f5a79e59bf31ead286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/log.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _consoleFunc = require('./internal/consoleFunc');

var _consoleFunc2 = _interopRequireDefault(_consoleFunc);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Logs the result of an `async` function to the `console`. Only works in
 * Node.js or in browsers that support `console.log` and `console.error` (such
 * as FF and Chrome). If multiple arguments are returned from the async
 * function, `console.log` is called on each argument in order.
 *
 * @name log
 * @static
 * @memberOf module:Utils
 * @method
 * @category Util
 * @param {AsyncFunction} function - The function you want to eventually apply
 * all arguments to.
 * @param {...*} arguments... - Any number of arguments to apply to the function.
 * @example
 *
 * // in a module
 * var hello = function(name, callback) {
 *     setTimeout(function() {
 *         callback(null, 'hello ' + name);
 *     }, 1000);
 * };
 *
 * // in the node repl
 * node> async.log(hello, 'world');
 * 'hello world'
 */
exports.default = (0, _consoleFunc2.default)('log');
module.exports = exports['default'];";
        
        $__internal_bc5e7e913277bea5e4a2e0194408436c833e8d73c417b6f5a79e59bf31ead286->leave($__internal_bc5e7e913277bea5e4a2e0194408436c833e8d73c417b6f5a79e59bf31ead286_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/log.js";
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

var _consoleFunc = require('./internal/consoleFunc');

var _consoleFunc2 = _interopRequireDefault(_consoleFunc);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Logs the result of an `async` function to the `console`. Only works in
 * Node.js or in browsers that support `console.log` and `console.error` (such
 * as FF and Chrome). If multiple arguments are returned from the async
 * function, `console.log` is called on each argument in order.
 *
 * @name log
 * @static
 * @memberOf module:Utils
 * @method
 * @category Util
 * @param {AsyncFunction} function - The function you want to eventually apply
 * all arguments to.
 * @param {...*} arguments... - Any number of arguments to apply to the function.
 * @example
 *
 * // in a module
 * var hello = function(name, callback) {
 *     setTimeout(function() {
 *         callback(null, 'hello ' + name);
 *     }, 1000);
 * };
 *
 * // in the node repl
 * node> async.log(hello, 'world');
 * 'hello world'
 */
exports.default = (0, _consoleFunc2.default)('log');
module.exports = exports['default'];", "node_modules/async/log.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/log.js");
    }
}
