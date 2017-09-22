<?php

/* node_modules/lodash/subtract.js */
class __TwigTemplate_e0b346f77d8e6da32ead62bf935afbdd1e6315a3a5e3e581cc580a5c44d57865 extends Twig_Template
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
        $__internal_c4c72efaa39d4c981070b2a650cbc5de6b2f6639b835f2fb338ff1002fdf7d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c72efaa39d4c981070b2a650cbc5de6b2f6639b835f2fb338ff1002fdf7d94->enter($__internal_c4c72efaa39d4c981070b2a650cbc5de6b2f6639b835f2fb338ff1002fdf7d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/subtract.js"));

        // line 1
        echo "var createMathOperation = require('./_createMathOperation');

/**
 * Subtract two numbers.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Math
 * @param {number} minuend The first number in a subtraction.
 * @param {number} subtrahend The second number in a subtraction.
 * @returns {number} Returns the difference.
 * @example
 *
 * _.subtract(6, 4);
 * // => 2
 */
var subtract = createMathOperation(function(minuend, subtrahend) {
  return minuend - subtrahend;
}, 0);

module.exports = subtract;
";
        
        $__internal_c4c72efaa39d4c981070b2a650cbc5de6b2f6639b835f2fb338ff1002fdf7d94->leave($__internal_c4c72efaa39d4c981070b2a650cbc5de6b2f6639b835f2fb338ff1002fdf7d94_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/subtract.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createMathOperation = require('./_createMathOperation');

/**
 * Subtract two numbers.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Math
 * @param {number} minuend The first number in a subtraction.
 * @param {number} subtrahend The second number in a subtraction.
 * @returns {number} Returns the difference.
 * @example
 *
 * _.subtract(6, 4);
 * // => 2
 */
var subtract = createMathOperation(function(minuend, subtrahend) {
  return minuend - subtrahend;
}, 0);

module.exports = subtract;
", "node_modules/lodash/subtract.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/subtract.js");
    }
}
