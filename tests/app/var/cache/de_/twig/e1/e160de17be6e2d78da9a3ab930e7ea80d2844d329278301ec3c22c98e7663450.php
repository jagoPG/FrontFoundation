<?php

/* node_modules/async/until.js */
class __TwigTemplate_eb56fc8c7c2a7fee9c40afa9b7a7291c14df92c2b712eeb0985bd600df89c711 extends Twig_Template
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
        $__internal_f1f1302ec4bce0717ef0e1a44dedcfe6bd3b42e64d81ca42d69d169377dd595f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f1302ec4bce0717ef0e1a44dedcfe6bd3b42e64d81ca42d69d169377dd595f->enter($__internal_f1f1302ec4bce0717ef0e1a44dedcfe6bd3b42e64d81ca42d69d169377dd595f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/until.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
    value: true
});
exports.default = until;

var _whilst = require('./whilst');

var _whilst2 = _interopRequireDefault(_whilst);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Repeatedly call `iteratee` until `test` returns `true`. Calls `callback` when
 * stopped, or an error occurs. `callback` will be passed an error and any
 * arguments passed to the final `iteratee`'s callback.
 *
 * The inverse of [whilst]{@link module:ControlFlow.whilst}.
 *
 * @name until
 * @static
 * @memberOf module:ControlFlow
 * @method
 * @see [async.whilst]{@link module:ControlFlow.whilst}
 * @category Control Flow
 * @param {Function} test - synchronous truth test to perform before each
 * execution of `iteratee`. Invoked with ().
 * @param {AsyncFunction} iteratee - An async function which is called each time
 * `test` fails. Invoked with (callback).
 * @param {Function} [callback] - A callback which is called after the test
 * function has passed and repeated execution of `iteratee` has stopped. `callback`
 * will be passed an error and any arguments passed to the final `iteratee`'s
 * callback. Invoked with (err, [results]);
 */
function until(test, iteratee, callback) {
    (0, _whilst2.default)(function () {
        return !test.apply(this, arguments);
    }, iteratee, callback);
}
module.exports = exports['default'];";
        
        $__internal_f1f1302ec4bce0717ef0e1a44dedcfe6bd3b42e64d81ca42d69d169377dd595f->leave($__internal_f1f1302ec4bce0717ef0e1a44dedcfe6bd3b42e64d81ca42d69d169377dd595f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/until.js";
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
exports.default = until;

var _whilst = require('./whilst');

var _whilst2 = _interopRequireDefault(_whilst);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Repeatedly call `iteratee` until `test` returns `true`. Calls `callback` when
 * stopped, or an error occurs. `callback` will be passed an error and any
 * arguments passed to the final `iteratee`'s callback.
 *
 * The inverse of [whilst]{@link module:ControlFlow.whilst}.
 *
 * @name until
 * @static
 * @memberOf module:ControlFlow
 * @method
 * @see [async.whilst]{@link module:ControlFlow.whilst}
 * @category Control Flow
 * @param {Function} test - synchronous truth test to perform before each
 * execution of `iteratee`. Invoked with ().
 * @param {AsyncFunction} iteratee - An async function which is called each time
 * `test` fails. Invoked with (callback).
 * @param {Function} [callback] - A callback which is called after the test
 * function has passed and repeated execution of `iteratee` has stopped. `callback`
 * will be passed an error and any arguments passed to the final `iteratee`'s
 * callback. Invoked with (err, [results]);
 */
function until(test, iteratee, callback) {
    (0, _whilst2.default)(function () {
        return !test.apply(this, arguments);
    }, iteratee, callback);
}
module.exports = exports['default'];", "node_modules/async/until.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/until.js");
    }
}
