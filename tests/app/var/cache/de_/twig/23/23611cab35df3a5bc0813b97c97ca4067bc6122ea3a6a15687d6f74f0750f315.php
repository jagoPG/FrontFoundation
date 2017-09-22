<?php

/* node_modules/lodash/isInteger.js */
class __TwigTemplate_0cafbd8ade17f8f3e46f05aaeb9f6857939893d1d9c3fe20b383445438668320 extends Twig_Template
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
        $__internal_58ff2c7636c4b8926fa3108631c0abcc03ec9df5ce44759bcf1361b4a0ebbb77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ff2c7636c4b8926fa3108631c0abcc03ec9df5ce44759bcf1361b4a0ebbb77->enter($__internal_58ff2c7636c4b8926fa3108631c0abcc03ec9df5ce44759bcf1361b4a0ebbb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isInteger.js"));

        // line 1
        echo "var toInteger = require('./toInteger');

/**
 * Checks if `value` is an integer.
 *
 * **Note:** This method is based on
 * [`Number.isInteger`](https://mdn.io/Number/isInteger).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is an integer, else `false`.
 * @example
 *
 * _.isInteger(3);
 * // => true
 *
 * _.isInteger(Number.MIN_VALUE);
 * // => false
 *
 * _.isInteger(Infinity);
 * // => false
 *
 * _.isInteger('3');
 * // => false
 */
function isInteger(value) {
  return typeof value == 'number' && value == toInteger(value);
}

module.exports = isInteger;
";
        
        $__internal_58ff2c7636c4b8926fa3108631c0abcc03ec9df5ce44759bcf1361b4a0ebbb77->leave($__internal_58ff2c7636c4b8926fa3108631c0abcc03ec9df5ce44759bcf1361b4a0ebbb77_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isInteger.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var toInteger = require('./toInteger');

/**
 * Checks if `value` is an integer.
 *
 * **Note:** This method is based on
 * [`Number.isInteger`](https://mdn.io/Number/isInteger).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is an integer, else `false`.
 * @example
 *
 * _.isInteger(3);
 * // => true
 *
 * _.isInteger(Number.MIN_VALUE);
 * // => false
 *
 * _.isInteger(Infinity);
 * // => false
 *
 * _.isInteger('3');
 * // => false
 */
function isInteger(value) {
  return typeof value == 'number' && value == toInteger(value);
}

module.exports = isInteger;
", "node_modules/lodash/isInteger.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isInteger.js");
    }
}
