<?php

/* node_modules/lodash/toSafeInteger.js */
class __TwigTemplate_dcf3a110bbd21cc28c38ae688078bca611192af46206df60fd5dc430f4537071 extends Twig_Template
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
        $__internal_cfb446658f0d936cf2f399a7d9443d4a2ee3f9c8145bd4076ed29401da2918fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb446658f0d936cf2f399a7d9443d4a2ee3f9c8145bd4076ed29401da2918fc->enter($__internal_cfb446658f0d936cf2f399a7d9443d4a2ee3f9c8145bd4076ed29401da2918fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/toSafeInteger.js"));

        // line 1
        echo "var baseClamp = require('./_baseClamp'),
    toInteger = require('./toInteger');

/** Used as references for various `Number` constants. */
var MAX_SAFE_INTEGER = 9007199254740991;

/**
 * Converts `value` to a safe integer. A safe integer can be compared and
 * represented correctly.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to convert.
 * @returns {number} Returns the converted integer.
 * @example
 *
 * _.toSafeInteger(3.2);
 * // => 3
 *
 * _.toSafeInteger(Number.MIN_VALUE);
 * // => 0
 *
 * _.toSafeInteger(Infinity);
 * // => 9007199254740991
 *
 * _.toSafeInteger('3.2');
 * // => 3
 */
function toSafeInteger(value) {
  return value
    ? baseClamp(toInteger(value), -MAX_SAFE_INTEGER, MAX_SAFE_INTEGER)
    : (value === 0 ? value : 0);
}

module.exports = toSafeInteger;
";
        
        $__internal_cfb446658f0d936cf2f399a7d9443d4a2ee3f9c8145bd4076ed29401da2918fc->leave($__internal_cfb446658f0d936cf2f399a7d9443d4a2ee3f9c8145bd4076ed29401da2918fc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/toSafeInteger.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseClamp = require('./_baseClamp'),
    toInteger = require('./toInteger');

/** Used as references for various `Number` constants. */
var MAX_SAFE_INTEGER = 9007199254740991;

/**
 * Converts `value` to a safe integer. A safe integer can be compared and
 * represented correctly.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to convert.
 * @returns {number} Returns the converted integer.
 * @example
 *
 * _.toSafeInteger(3.2);
 * // => 3
 *
 * _.toSafeInteger(Number.MIN_VALUE);
 * // => 0
 *
 * _.toSafeInteger(Infinity);
 * // => 9007199254740991
 *
 * _.toSafeInteger('3.2');
 * // => 3
 */
function toSafeInteger(value) {
  return value
    ? baseClamp(toInteger(value), -MAX_SAFE_INTEGER, MAX_SAFE_INTEGER)
    : (value === 0 ? value : 0);
}

module.exports = toSafeInteger;
", "node_modules/lodash/toSafeInteger.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/toSafeInteger.js");
    }
}
