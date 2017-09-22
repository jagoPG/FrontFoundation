<?php

/* node_modules/async/setImmediate.js */
class __TwigTemplate_08fa24de788fea03d9f91dfb89bc301695c940ac33b926dac43e2643de6048b8 extends Twig_Template
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
        $__internal_2aa21e19412e4c99047cf077ad4c011225b8cb74f5953975a5ce3ed62f6c80fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa21e19412e4c99047cf077ad4c011225b8cb74f5953975a5ce3ed62f6c80fe->enter($__internal_2aa21e19412e4c99047cf077ad4c011225b8cb74f5953975a5ce3ed62f6c80fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/setImmediate.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _setImmediate = require('./internal/setImmediate');

var _setImmediate2 = _interopRequireDefault(_setImmediate);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Calls `callback` on a later loop around the event loop. In Node.js this just
 * calls `setImmediate`.  In the browser it will use `setImmediate` if
 * available, otherwise `setTimeout(callback, 0)`, which means other higher
 * priority events may precede the execution of `callback`.
 *
 * This is used internally for browser-compatibility purposes.
 *
 * @name setImmediate
 * @static
 * @memberOf module:Utils
 * @method
 * @alias nextTick
 * @category Util
 * @param {Function} callback - The function to call on a later loop around
 * the event loop. Invoked with (args...).
 * @param {...*} args... - any number of additional arguments to pass to the
 * callback on the next tick.
 * @example
 *
 * var call_order = [];
 * async.nextTick(function() {
 *     call_order.push('two');
 *     // call_order now equals ['one','two']
 * });
 * call_order.push('one');
 *
 * async.setImmediate(function (a, b, c) {
 *     // a, b, and c equal 1, 2, and 3
 * }, 1, 2, 3);
 */
exports.default = _setImmediate2.default;
module.exports = exports['default'];";
        
        $__internal_2aa21e19412e4c99047cf077ad4c011225b8cb74f5953975a5ce3ed62f6c80fe->leave($__internal_2aa21e19412e4c99047cf077ad4c011225b8cb74f5953975a5ce3ed62f6c80fe_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/setImmediate.js";
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

var _setImmediate = require('./internal/setImmediate');

var _setImmediate2 = _interopRequireDefault(_setImmediate);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Calls `callback` on a later loop around the event loop. In Node.js this just
 * calls `setImmediate`.  In the browser it will use `setImmediate` if
 * available, otherwise `setTimeout(callback, 0)`, which means other higher
 * priority events may precede the execution of `callback`.
 *
 * This is used internally for browser-compatibility purposes.
 *
 * @name setImmediate
 * @static
 * @memberOf module:Utils
 * @method
 * @alias nextTick
 * @category Util
 * @param {Function} callback - The function to call on a later loop around
 * the event loop. Invoked with (args...).
 * @param {...*} args... - any number of additional arguments to pass to the
 * callback on the next tick.
 * @example
 *
 * var call_order = [];
 * async.nextTick(function() {
 *     call_order.push('two');
 *     // call_order now equals ['one','two']
 * });
 * call_order.push('one');
 *
 * async.setImmediate(function (a, b, c) {
 *     // a, b, and c equal 1, 2, and 3
 * }, 1, 2, 3);
 */
exports.default = _setImmediate2.default;
module.exports = exports['default'];", "node_modules/async/setImmediate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/setImmediate.js");
    }
}
