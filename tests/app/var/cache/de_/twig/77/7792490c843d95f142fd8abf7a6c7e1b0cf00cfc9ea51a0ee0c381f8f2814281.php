<?php

/* node_modules/lodash/_baseRandom.js */
class __TwigTemplate_04c9650f7dfa077669890aee66646e22ed85643e9c9f346d5c36b205be72dcd3 extends Twig_Template
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
        $__internal_f4b04b84d7d00c6947522464c26702a67b5afaaab28d65363cd9d4486b2e1398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4b04b84d7d00c6947522464c26702a67b5afaaab28d65363cd9d4486b2e1398->enter($__internal_f4b04b84d7d00c6947522464c26702a67b5afaaab28d65363cd9d4486b2e1398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseRandom.js"));

        // line 1
        echo "/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeFloor = Math.floor,
    nativeRandom = Math.random;

/**
 * The base implementation of `_.random` without support for returning
 * floating-point numbers.
 *
 * @private
 * @param {number} lower The lower bound.
 * @param {number} upper The upper bound.
 * @returns {number} Returns the random number.
 */
function baseRandom(lower, upper) {
  return lower + nativeFloor(nativeRandom() * (upper - lower + 1));
}

module.exports = baseRandom;
";
        
        $__internal_f4b04b84d7d00c6947522464c26702a67b5afaaab28d65363cd9d4486b2e1398->leave($__internal_f4b04b84d7d00c6947522464c26702a67b5afaaab28d65363cd9d4486b2e1398_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseRandom.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeFloor = Math.floor,
    nativeRandom = Math.random;

/**
 * The base implementation of `_.random` without support for returning
 * floating-point numbers.
 *
 * @private
 * @param {number} lower The lower bound.
 * @param {number} upper The upper bound.
 * @returns {number} Returns the random number.
 */
function baseRandom(lower, upper) {
  return lower + nativeFloor(nativeRandom() * (upper - lower + 1));
}

module.exports = baseRandom;
", "node_modules/lodash/_baseRandom.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseRandom.js");
    }
}
