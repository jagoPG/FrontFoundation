<?php

/* node_modules/lodash/isLength.js */
class __TwigTemplate_53284ca81bd0b68d3bbddbf657db8af6470d5d1cb18bb1f81d31a465ed733088 extends Twig_Template
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
        $__internal_4e6cf4231e6a5d19b264dba30ab44867b878854f90e56e94e3fd94bb5b63b3e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e6cf4231e6a5d19b264dba30ab44867b878854f90e56e94e3fd94bb5b63b3e3->enter($__internal_4e6cf4231e6a5d19b264dba30ab44867b878854f90e56e94e3fd94bb5b63b3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isLength.js"));

        // line 1
        echo "/** Used as references for various `Number` constants. */
var MAX_SAFE_INTEGER = 9007199254740991;

/**
 * Checks if `value` is a valid array-like length.
 *
 * **Note:** This method is loosely based on
 * [`ToLength`](http://ecma-international.org/ecma-262/7.0/#sec-tolength).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a valid length, else `false`.
 * @example
 *
 * _.isLength(3);
 * // => true
 *
 * _.isLength(Number.MIN_VALUE);
 * // => false
 *
 * _.isLength(Infinity);
 * // => false
 *
 * _.isLength('3');
 * // => false
 */
function isLength(value) {
  return typeof value == 'number' &&
    value > -1 && value % 1 == 0 && value <= MAX_SAFE_INTEGER;
}

module.exports = isLength;
";
        
        $__internal_4e6cf4231e6a5d19b264dba30ab44867b878854f90e56e94e3fd94bb5b63b3e3->leave($__internal_4e6cf4231e6a5d19b264dba30ab44867b878854f90e56e94e3fd94bb5b63b3e3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isLength.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** Used as references for various `Number` constants. */
var MAX_SAFE_INTEGER = 9007199254740991;

/**
 * Checks if `value` is a valid array-like length.
 *
 * **Note:** This method is loosely based on
 * [`ToLength`](http://ecma-international.org/ecma-262/7.0/#sec-tolength).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a valid length, else `false`.
 * @example
 *
 * _.isLength(3);
 * // => true
 *
 * _.isLength(Number.MIN_VALUE);
 * // => false
 *
 * _.isLength(Infinity);
 * // => false
 *
 * _.isLength('3');
 * // => false
 */
function isLength(value) {
  return typeof value == 'number' &&
    value > -1 && value % 1 == 0 && value <= MAX_SAFE_INTEGER;
}

module.exports = isLength;
", "node_modules/lodash/isLength.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isLength.js");
    }
}
