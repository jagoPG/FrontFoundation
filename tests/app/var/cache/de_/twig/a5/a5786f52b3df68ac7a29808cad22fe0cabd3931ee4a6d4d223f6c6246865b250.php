<?php

/* node_modules/lodash/divide.js */
class __TwigTemplate_cb59984fa6d31edbcad9998f4aaa212fcf8add3c1b7fe911296528890f3c0ff4 extends Twig_Template
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
        $__internal_d1060a663d16a1b200cfc1d196a249ea807de531985e423a4ad86b766d4512e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1060a663d16a1b200cfc1d196a249ea807de531985e423a4ad86b766d4512e4->enter($__internal_d1060a663d16a1b200cfc1d196a249ea807de531985e423a4ad86b766d4512e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/divide.js"));

        // line 1
        echo "var createMathOperation = require('./_createMathOperation');

/**
 * Divide two numbers.
 *
 * @static
 * @memberOf _
 * @since 4.7.0
 * @category Math
 * @param {number} dividend The first number in a division.
 * @param {number} divisor The second number in a division.
 * @returns {number} Returns the quotient.
 * @example
 *
 * _.divide(6, 4);
 * // => 1.5
 */
var divide = createMathOperation(function(dividend, divisor) {
  return dividend / divisor;
}, 1);

module.exports = divide;
";
        
        $__internal_d1060a663d16a1b200cfc1d196a249ea807de531985e423a4ad86b766d4512e4->leave($__internal_d1060a663d16a1b200cfc1d196a249ea807de531985e423a4ad86b766d4512e4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/divide.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createMathOperation = require('./_createMathOperation');

/**
 * Divide two numbers.
 *
 * @static
 * @memberOf _
 * @since 4.7.0
 * @category Math
 * @param {number} dividend The first number in a division.
 * @param {number} divisor The second number in a division.
 * @returns {number} Returns the quotient.
 * @example
 *
 * _.divide(6, 4);
 * // => 1.5
 */
var divide = createMathOperation(function(dividend, divisor) {
  return dividend / divisor;
}, 1);

module.exports = divide;
", "node_modules/lodash/divide.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/divide.js");
    }
}
