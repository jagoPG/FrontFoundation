<?php

/* node_modules/lodash/toFinite.js */
class __TwigTemplate_eec545af11eb282a9b84df6e29b6a8acb6a31355ffde72f731e5178e2457b8d0 extends Twig_Template
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
        $__internal_896ea9268178b89c712d48d4e15e05034eaa9e8bd28e3f6b4f347dd5a6b1cc87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896ea9268178b89c712d48d4e15e05034eaa9e8bd28e3f6b4f347dd5a6b1cc87->enter($__internal_896ea9268178b89c712d48d4e15e05034eaa9e8bd28e3f6b4f347dd5a6b1cc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/toFinite.js"));

        // line 1
        echo "var toNumber = require('./toNumber');

/** Used as references for various `Number` constants. */
var INFINITY = 1 / 0,
    MAX_INTEGER = 1.7976931348623157e+308;

/**
 * Converts `value` to a finite number.
 *
 * @static
 * @memberOf _
 * @since 4.12.0
 * @category Lang
 * @param {*} value The value to convert.
 * @returns {number} Returns the converted number.
 * @example
 *
 * _.toFinite(3.2);
 * // => 3.2
 *
 * _.toFinite(Number.MIN_VALUE);
 * // => 5e-324
 *
 * _.toFinite(Infinity);
 * // => 1.7976931348623157e+308
 *
 * _.toFinite('3.2');
 * // => 3.2
 */
function toFinite(value) {
  if (!value) {
    return value === 0 ? value : 0;
  }
  value = toNumber(value);
  if (value === INFINITY || value === -INFINITY) {
    var sign = (value < 0 ? -1 : 1);
    return sign * MAX_INTEGER;
  }
  return value === value ? value : 0;
}

module.exports = toFinite;
";
        
        $__internal_896ea9268178b89c712d48d4e15e05034eaa9e8bd28e3f6b4f347dd5a6b1cc87->leave($__internal_896ea9268178b89c712d48d4e15e05034eaa9e8bd28e3f6b4f347dd5a6b1cc87_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/toFinite.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var toNumber = require('./toNumber');

/** Used as references for various `Number` constants. */
var INFINITY = 1 / 0,
    MAX_INTEGER = 1.7976931348623157e+308;

/**
 * Converts `value` to a finite number.
 *
 * @static
 * @memberOf _
 * @since 4.12.0
 * @category Lang
 * @param {*} value The value to convert.
 * @returns {number} Returns the converted number.
 * @example
 *
 * _.toFinite(3.2);
 * // => 3.2
 *
 * _.toFinite(Number.MIN_VALUE);
 * // => 5e-324
 *
 * _.toFinite(Infinity);
 * // => 1.7976931348623157e+308
 *
 * _.toFinite('3.2');
 * // => 3.2
 */
function toFinite(value) {
  if (!value) {
    return value === 0 ? value : 0;
  }
  value = toNumber(value);
  if (value === INFINITY || value === -INFINITY) {
    var sign = (value < 0 ? -1 : 1);
    return sign * MAX_INTEGER;
  }
  return value === value ? value : 0;
}

module.exports = toFinite;
", "node_modules/lodash/toFinite.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/toFinite.js");
    }
}
