<?php

/* node_modules/async/timesSeries.js */
class __TwigTemplate_64574ecfedce770366ac89cec28809140a1c1f6c1cdd394530a73817370483c0 extends Twig_Template
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
        $__internal_e8a3db93ca2529c05f2fcda7758907d64577d73ea1b62b17b03836463fa8b1f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8a3db93ca2529c05f2fcda7758907d64577d73ea1b62b17b03836463fa8b1f2->enter($__internal_e8a3db93ca2529c05f2fcda7758907d64577d73ea1b62b17b03836463fa8b1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/timesSeries.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});

var _timesLimit = require('./timesLimit');

var _timesLimit2 = _interopRequireDefault(_timesLimit);

var _doLimit = require('./internal/doLimit');

var _doLimit2 = _interopRequireDefault(_doLimit);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [times]{@link module:ControlFlow.times} but runs only a single async operation at a time.
 *
 * @name timesSeries
 * @static
 * @memberOf module:ControlFlow
 * @method
 * @see [async.times]{@link module:ControlFlow.times}
 * @category Control Flow
 * @param {number} n - The number of times to run the function.
 * @param {AsyncFunction} iteratee - The async function to call `n` times.
 * Invoked with the iteration index and a callback: (n, next).
 * @param {Function} callback - see {@link module:Collections.map}.
 */
exports.default = (0, _doLimit2.default)(_timesLimit2.default, 1);
module.exports = exports['default'];";
        
        $__internal_e8a3db93ca2529c05f2fcda7758907d64577d73ea1b62b17b03836463fa8b1f2->leave($__internal_e8a3db93ca2529c05f2fcda7758907d64577d73ea1b62b17b03836463fa8b1f2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/timesSeries.js";
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

var _timesLimit = require('./timesLimit');

var _timesLimit2 = _interopRequireDefault(_timesLimit);

var _doLimit = require('./internal/doLimit');

var _doLimit2 = _interopRequireDefault(_doLimit);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * The same as [times]{@link module:ControlFlow.times} but runs only a single async operation at a time.
 *
 * @name timesSeries
 * @static
 * @memberOf module:ControlFlow
 * @method
 * @see [async.times]{@link module:ControlFlow.times}
 * @category Control Flow
 * @param {number} n - The number of times to run the function.
 * @param {AsyncFunction} iteratee - The async function to call `n` times.
 * Invoked with the iteration index and a callback: (n, next).
 * @param {Function} callback - see {@link module:Collections.map}.
 */
exports.default = (0, _doLimit2.default)(_timesLimit2.default, 1);
module.exports = exports['default'];", "node_modules/async/timesSeries.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/timesSeries.js");
    }
}
