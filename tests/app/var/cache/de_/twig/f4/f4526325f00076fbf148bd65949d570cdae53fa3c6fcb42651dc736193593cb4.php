<?php

/* node_modules/lodash/multiply.js */
class __TwigTemplate_e66b83e09dc392c205a012f6e1aec663ca19c7481d4d8fa950eb6df5c4dc3618 extends Twig_Template
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
        $__internal_659c83a880a3e1f4fa80003eef56cb2a585bbc28a6692643129cb6e8bcf8b358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659c83a880a3e1f4fa80003eef56cb2a585bbc28a6692643129cb6e8bcf8b358->enter($__internal_659c83a880a3e1f4fa80003eef56cb2a585bbc28a6692643129cb6e8bcf8b358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/multiply.js"));

        // line 1
        echo "var createMathOperation = require('./_createMathOperation');

/**
 * Multiply two numbers.
 *
 * @static
 * @memberOf _
 * @since 4.7.0
 * @category Math
 * @param {number} multiplier The first number in a multiplication.
 * @param {number} multiplicand The second number in a multiplication.
 * @returns {number} Returns the product.
 * @example
 *
 * _.multiply(6, 4);
 * // => 24
 */
var multiply = createMathOperation(function(multiplier, multiplicand) {
  return multiplier * multiplicand;
}, 1);

module.exports = multiply;
";
        
        $__internal_659c83a880a3e1f4fa80003eef56cb2a585bbc28a6692643129cb6e8bcf8b358->leave($__internal_659c83a880a3e1f4fa80003eef56cb2a585bbc28a6692643129cb6e8bcf8b358_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/multiply.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createMathOperation = require('./_createMathOperation');

/**
 * Multiply two numbers.
 *
 * @static
 * @memberOf _
 * @since 4.7.0
 * @category Math
 * @param {number} multiplier The first number in a multiplication.
 * @param {number} multiplicand The second number in a multiplication.
 * @returns {number} Returns the product.
 * @example
 *
 * _.multiply(6, 4);
 * // => 24
 */
var multiply = createMathOperation(function(multiplier, multiplicand) {
  return multiplier * multiplicand;
}, 1);

module.exports = multiply;
", "node_modules/lodash/multiply.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/multiply.js");
    }
}
