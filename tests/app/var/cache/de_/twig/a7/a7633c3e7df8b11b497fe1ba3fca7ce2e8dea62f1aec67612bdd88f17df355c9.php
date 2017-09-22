<?php

/* node_modules/lodash/isNumber.js */
class __TwigTemplate_1b242c124395cdd2cbfec37ded2a378e1c4b5d840eeba9dea5cd3b7c267358e7 extends Twig_Template
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
        $__internal_ef7a5868daa4b8af7021659abc34a78533c149ab8b01e9263fb8ac67836b908e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7a5868daa4b8af7021659abc34a78533c149ab8b01e9263fb8ac67836b908e->enter($__internal_ef7a5868daa4b8af7021659abc34a78533c149ab8b01e9263fb8ac67836b908e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isNumber.js"));

        // line 1
        echo "var baseGetTag = require('./_baseGetTag'),
    isObjectLike = require('./isObjectLike');

/** `Object#toString` result references. */
var numberTag = '[object Number]';

/**
 * Checks if `value` is classified as a `Number` primitive or object.
 *
 * **Note:** To exclude `Infinity`, `-Infinity`, and `NaN`, which are
 * classified as numbers, use the `_.isFinite` method.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a number, else `false`.
 * @example
 *
 * _.isNumber(3);
 * // => true
 *
 * _.isNumber(Number.MIN_VALUE);
 * // => true
 *
 * _.isNumber(Infinity);
 * // => true
 *
 * _.isNumber('3');
 * // => false
 */
function isNumber(value) {
  return typeof value == 'number' ||
    (isObjectLike(value) && baseGetTag(value) == numberTag);
}

module.exports = isNumber;
";
        
        $__internal_ef7a5868daa4b8af7021659abc34a78533c149ab8b01e9263fb8ac67836b908e->leave($__internal_ef7a5868daa4b8af7021659abc34a78533c149ab8b01e9263fb8ac67836b908e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isNumber.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseGetTag = require('./_baseGetTag'),
    isObjectLike = require('./isObjectLike');

/** `Object#toString` result references. */
var numberTag = '[object Number]';

/**
 * Checks if `value` is classified as a `Number` primitive or object.
 *
 * **Note:** To exclude `Infinity`, `-Infinity`, and `NaN`, which are
 * classified as numbers, use the `_.isFinite` method.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a number, else `false`.
 * @example
 *
 * _.isNumber(3);
 * // => true
 *
 * _.isNumber(Number.MIN_VALUE);
 * // => true
 *
 * _.isNumber(Infinity);
 * // => true
 *
 * _.isNumber('3');
 * // => false
 */
function isNumber(value) {
  return typeof value == 'number' ||
    (isObjectLike(value) && baseGetTag(value) == numberTag);
}

module.exports = isNumber;
", "node_modules/lodash/isNumber.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isNumber.js");
    }
}
