<?php

/* node_modules/async/applyEachSeries.js */
class __TwigTemplate_3a7c7e12032fb1202b204b3e19a170993e8b5ef7f41ba235455983b0fcb5262f extends Twig_Template
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
        $__internal_6b676f74d7ffe50c80b7480359208704917410412f01721ccf6be870639f02ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b676f74d7ffe50c80b7480359208704917410412f01721ccf6be870639f02ed->enter($__internal_6b676f74d7ffe50c80b7480359208704917410412f01721ccf6be870639f02ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/applyEachSeries.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _applyEach = require('./internal/applyEach');

var _applyEach2 = _interopRequireDefault(_applyEach);

var _mapSeries = require('./mapSeries');

var _mapSeries2 = _interopRequireDefault(_mapSeries);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [`applyEach`]{@link module:ControlFlow.applyEach} but runs only a single async operation at a time.
 *
 * @name applyEachSeries
 * @static
 * @memberOf module:ControlFlow
 * @method
 * @see [async.applyEach]{@link module:ControlFlow.applyEach}
 * @category Control Flow
 * @param {Array|Iterable|Object} fns - A collection of {@link AsyncFunction}s to all
 * call with the same arguments
 * @param {...*} [args] - any number of separate arguments to pass to the
 * function.
 * @param {Function} [callback] - the final argument should be the callback,
 * called when all functions have completed processing.
 * @returns {Function} - If only the first argument is provided, it will return
 * a function which lets you pass in the arguments as if it were a single
 * function call.
 */
exports.default = (0, _applyEach2.default)(_mapSeries2.default);
module.exports = exports['default'];";
        
        $__internal_6b676f74d7ffe50c80b7480359208704917410412f01721ccf6be870639f02ed->leave($__internal_6b676f74d7ffe50c80b7480359208704917410412f01721ccf6be870639f02ed_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/applyEachSeries.js";
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

var _mapSeries = require('./mapSeries');

var _mapSeries2 = _interopRequireDefault(_mapSeries);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [`applyEach`]{@link module:ControlFlow.applyEach} but runs only a single async operation at a time.
 *
 * @name applyEachSeries
 * @static
 * @memberOf module:ControlFlow
 * @method
 * @see [async.applyEach]{@link module:ControlFlow.applyEach}
 * @category Control Flow
 * @param {Array|Iterable|Object} fns - A collection of {@link AsyncFunction}s to all
 * call with the same arguments
 * @param {...*} [args] - any number of separate arguments to pass to the
 * function.
 * @param {Function} [callback] - the final argument should be the callback,
 * called when all functions have completed processing.
 * @returns {Function} - If only the first argument is provided, it will return
 * a function which lets you pass in the arguments as if it were a single
 * function call.
 */
exports.default = (0, _applyEach2.default)(_mapSeries2.default);
module.exports = exports['default'];", "node_modules/async/applyEachSeries.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/applyEachSeries.js");
    }
}
