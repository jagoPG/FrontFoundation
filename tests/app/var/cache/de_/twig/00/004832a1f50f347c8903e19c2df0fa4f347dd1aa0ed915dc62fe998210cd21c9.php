<?php

/* node_modules/lodash/toLength.js */
class __TwigTemplate_73007ca8eb4cf6558b45e03f2689367c4d1a1aa781c1e7565701cdc28ab5e525 extends Twig_Template
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
        $__internal_2968e24d019591ab03c54bc8c43fd3337bf1ec88e103948f9b3661ea98700762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2968e24d019591ab03c54bc8c43fd3337bf1ec88e103948f9b3661ea98700762->enter($__internal_2968e24d019591ab03c54bc8c43fd3337bf1ec88e103948f9b3661ea98700762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/toLength.js"));

        // line 1
        echo "var baseClamp = require('./_baseClamp'),
    toInteger = require('./toInteger');

/** Used as references for the maximum length and index of an array. */
var MAX_ARRAY_LENGTH = 4294967295;

/**
 * Converts `value` to an integer suitable for use as the length of an
 * array-like object.
 *
 * **Note:** This method is based on
 * [`ToLength`](http://ecma-international.org/ecma-262/7.0/#sec-tolength).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to convert.
 * @returns {number} Returns the converted integer.
 * @example
 *
 * _.toLength(3.2);
 * // => 3
 *
 * _.toLength(Number.MIN_VALUE);
 * // => 0
 *
 * _.toLength(Infinity);
 * // => 4294967295
 *
 * _.toLength('3.2');
 * // => 3
 */
function toLength(value) {
  return value ? baseClamp(toInteger(value), 0, MAX_ARRAY_LENGTH) : 0;
}

module.exports = toLength;
";
        
        $__internal_2968e24d019591ab03c54bc8c43fd3337bf1ec88e103948f9b3661ea98700762->leave($__internal_2968e24d019591ab03c54bc8c43fd3337bf1ec88e103948f9b3661ea98700762_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/toLength.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseClamp = require('./_baseClamp'),
    toInteger = require('./toInteger');

/** Used as references for the maximum length and index of an array. */
var MAX_ARRAY_LENGTH = 4294967295;

/**
 * Converts `value` to an integer suitable for use as the length of an
 * array-like object.
 *
 * **Note:** This method is based on
 * [`ToLength`](http://ecma-international.org/ecma-262/7.0/#sec-tolength).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to convert.
 * @returns {number} Returns the converted integer.
 * @example
 *
 * _.toLength(3.2);
 * // => 3
 *
 * _.toLength(Number.MIN_VALUE);
 * // => 0
 *
 * _.toLength(Infinity);
 * // => 4294967295
 *
 * _.toLength('3.2');
 * // => 3
 */
function toLength(value) {
  return value ? baseClamp(toInteger(value), 0, MAX_ARRAY_LENGTH) : 0;
}

module.exports = toLength;
", "node_modules/lodash/toLength.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/toLength.js");
    }
}
