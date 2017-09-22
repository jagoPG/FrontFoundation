<?php

/* node_modules/lodash/isNaN.js */
class __TwigTemplate_7b61b1ff1e7e52296b9859e9c9b1e245b4923199b364636871383b94443b55d9 extends Twig_Template
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
        $__internal_94b70d7e29fd3b6278a888ec5dcbbdc168184af2806da74f15a80cbb81c2c977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b70d7e29fd3b6278a888ec5dcbbdc168184af2806da74f15a80cbb81c2c977->enter($__internal_94b70d7e29fd3b6278a888ec5dcbbdc168184af2806da74f15a80cbb81c2c977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isNaN.js"));

        // line 1
        echo "var isNumber = require('./isNumber');

/**
 * Checks if `value` is `NaN`.
 *
 * **Note:** This method is based on
 * [`Number.isNaN`](https://mdn.io/Number/isNaN) and is not the same as
 * global [`isNaN`](https://mdn.io/isNaN) which returns `true` for
 * `undefined` and other non-number values.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is `NaN`, else `false`.
 * @example
 *
 * _.isNaN(NaN);
 * // => true
 *
 * _.isNaN(new Number(NaN));
 * // => true
 *
 * isNaN(undefined);
 * // => true
 *
 * _.isNaN(undefined);
 * // => false
 */
function isNaN(value) {
  // An `NaN` primitive is the only value that is not equal to itself.
  // Perform the `toStringTag` check first to avoid errors with some
  // ActiveX objects in IE.
  return isNumber(value) && value != +value;
}

module.exports = isNaN;
";
        
        $__internal_94b70d7e29fd3b6278a888ec5dcbbdc168184af2806da74f15a80cbb81c2c977->leave($__internal_94b70d7e29fd3b6278a888ec5dcbbdc168184af2806da74f15a80cbb81c2c977_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isNaN.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isNumber = require('./isNumber');

/**
 * Checks if `value` is `NaN`.
 *
 * **Note:** This method is based on
 * [`Number.isNaN`](https://mdn.io/Number/isNaN) and is not the same as
 * global [`isNaN`](https://mdn.io/isNaN) which returns `true` for
 * `undefined` and other non-number values.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is `NaN`, else `false`.
 * @example
 *
 * _.isNaN(NaN);
 * // => true
 *
 * _.isNaN(new Number(NaN));
 * // => true
 *
 * isNaN(undefined);
 * // => true
 *
 * _.isNaN(undefined);
 * // => false
 */
function isNaN(value) {
  // An `NaN` primitive is the only value that is not equal to itself.
  // Perform the `toStringTag` check first to avoid errors with some
  // ActiveX objects in IE.
  return isNumber(value) && value != +value;
}

module.exports = isNaN;
", "node_modules/lodash/isNaN.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isNaN.js");
    }
}
