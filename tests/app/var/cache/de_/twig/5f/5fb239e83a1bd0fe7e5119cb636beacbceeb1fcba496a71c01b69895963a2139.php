<?php

/* node_modules/async/nextTick.js */
class __TwigTemplate_5aa314c7f8048871bd3851fd8990276bae8dffd8925505a1d96203e050ef1d55 extends Twig_Template
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
        $__internal_99e07f105e209eb5383cddbba9a32ec80dbdf272eee3cbee8ee2cdad0854543e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e07f105e209eb5383cddbba9a32ec80dbdf272eee3cbee8ee2cdad0854543e->enter($__internal_99e07f105e209eb5383cddbba9a32ec80dbdf272eee3cbee8ee2cdad0854543e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/nextTick.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
    value: true
});

var _setImmediate = require('./internal/setImmediate');

/**
 * Calls `callback` on a later loop around the event loop. In Node.js this just
 * calls `setImmediate`.  In the browser it will use `setImmediate` if
 * available, otherwise `setTimeout(callback, 0)`, which means other higher
 * priority events may precede the execution of `callback`.
 *
 * This is used internally for browser-compatibility purposes.
 *
 * @name nextTick
 * @static
 * @memberOf module:Utils
 * @method
 * @alias setImmediate
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
var _defer;

if (_setImmediate.hasNextTick) {
    _defer = process.nextTick;
} else if (_setImmediate.hasSetImmediate) {
    _defer = setImmediate;
} else {
    _defer = _setImmediate.fallback;
}

exports.default = (0, _setImmediate.wrap)(_defer);
module.exports = exports['default'];";
        
        $__internal_99e07f105e209eb5383cddbba9a32ec80dbdf272eee3cbee8ee2cdad0854543e->leave($__internal_99e07f105e209eb5383cddbba9a32ec80dbdf272eee3cbee8ee2cdad0854543e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/nextTick.js";
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

/**
 * Calls `callback` on a later loop around the event loop. In Node.js this just
 * calls `setImmediate`.  In the browser it will use `setImmediate` if
 * available, otherwise `setTimeout(callback, 0)`, which means other higher
 * priority events may precede the execution of `callback`.
 *
 * This is used internally for browser-compatibility purposes.
 *
 * @name nextTick
 * @static
 * @memberOf module:Utils
 * @method
 * @alias setImmediate
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
var _defer;

if (_setImmediate.hasNextTick) {
    _defer = process.nextTick;
} else if (_setImmediate.hasSetImmediate) {
    _defer = setImmediate;
} else {
    _defer = _setImmediate.fallback;
}

exports.default = (0, _setImmediate.wrap)(_defer);
module.exports = exports['default'];", "node_modules/async/nextTick.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/nextTick.js");
    }
}
