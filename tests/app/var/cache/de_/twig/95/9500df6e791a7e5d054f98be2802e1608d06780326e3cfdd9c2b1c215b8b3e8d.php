<?php

/* node_modules/async/dir.js */
class __TwigTemplate_a44946457fffd08cbd7b248fdae21f976643456c66bcda6bf077c71edfed83c9 extends Twig_Template
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
        $__internal_0ad0323aa61d5e4cebe681a5514e18d08571ae1e24fa3235161b207ba20ccdb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad0323aa61d5e4cebe681a5514e18d08571ae1e24fa3235161b207ba20ccdb7->enter($__internal_0ad0323aa61d5e4cebe681a5514e18d08571ae1e24fa3235161b207ba20ccdb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/dir.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _consoleFunc = require('./internal/consoleFunc');

var _consoleFunc2 = _interopRequireDefault(_consoleFunc);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Logs the result of an [`async` function]{@link AsyncFunction} to the
 * `console` using `console.dir` to display the properties of the resulting object.
 * Only works in Node.js or in browsers that support `console.dir` and
 * `console.error` (such as FF and Chrome).
 * If multiple arguments are returned from the async function,
 * `console.dir` is called on each argument in order.
 *
 * @name dir
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
 *         callback(null, {hello: name});
 *     }, 1000);
 * };
 *
 * // in the node repl
 * node> async.dir(hello, 'world');
 * {hello: 'world'}
 */
exports.default = (0, _consoleFunc2.default)('dir');
module.exports = exports['default'];";
        
        $__internal_0ad0323aa61d5e4cebe681a5514e18d08571ae1e24fa3235161b207ba20ccdb7->leave($__internal_0ad0323aa61d5e4cebe681a5514e18d08571ae1e24fa3235161b207ba20ccdb7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/dir.js";
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
 * Logs the result of an [`async` function]{@link AsyncFunction} to the
 * `console` using `console.dir` to display the properties of the resulting object.
 * Only works in Node.js or in browsers that support `console.dir` and
 * `console.error` (such as FF and Chrome).
 * If multiple arguments are returned from the async function,
 * `console.dir` is called on each argument in order.
 *
 * @name dir
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
 *         callback(null, {hello: name});
 *     }, 1000);
 * };
 *
 * // in the node repl
 * node> async.dir(hello, 'world');
 * {hello: 'world'}
 */
exports.default = (0, _consoleFunc2.default)('dir');
module.exports = exports['default'];", "node_modules/async/dir.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/dir.js");
    }
}
