<?php

/* node_modules/lodash/toString.js */
class __TwigTemplate_a4c92cb06359b591d5295998658d619e4ef50868fb86e317e0565b27db70e7c1 extends Twig_Template
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
        $__internal_7a5d840904e8651d6afffa4e7a8dea20f0b475fb0c1bd0f4212246784605aa06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a5d840904e8651d6afffa4e7a8dea20f0b475fb0c1bd0f4212246784605aa06->enter($__internal_7a5d840904e8651d6afffa4e7a8dea20f0b475fb0c1bd0f4212246784605aa06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/toString.js"));

        // line 1
        echo "var baseToString = require('./_baseToString');

/**
 * Converts `value` to a string. An empty string is returned for `null`
 * and `undefined` values. The sign of `-0` is preserved.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to convert.
 * @returns {string} Returns the converted string.
 * @example
 *
 * _.toString(null);
 * // => ''
 *
 * _.toString(-0);
 * // => '-0'
 *
 * _.toString([1, 2, 3]);
 * // => '1,2,3'
 */
function toString(value) {
  return value == null ? '' : baseToString(value);
}

module.exports = toString;
";
        
        $__internal_7a5d840904e8651d6afffa4e7a8dea20f0b475fb0c1bd0f4212246784605aa06->leave($__internal_7a5d840904e8651d6afffa4e7a8dea20f0b475fb0c1bd0f4212246784605aa06_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/toString.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseToString = require('./_baseToString');

/**
 * Converts `value` to a string. An empty string is returned for `null`
 * and `undefined` values. The sign of `-0` is preserved.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to convert.
 * @returns {string} Returns the converted string.
 * @example
 *
 * _.toString(null);
 * // => ''
 *
 * _.toString(-0);
 * // => '-0'
 *
 * _.toString([1, 2, 3]);
 * // => '1,2,3'
 */
function toString(value) {
  return value == null ? '' : baseToString(value);
}

module.exports = toString;
", "node_modules/lodash/toString.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/toString.js");
    }
}
