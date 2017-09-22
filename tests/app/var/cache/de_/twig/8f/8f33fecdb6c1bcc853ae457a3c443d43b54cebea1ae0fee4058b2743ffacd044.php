<?php

/* node_modules/lodash/_baseMean.js */
class __TwigTemplate_2775d8758952fd38e86e629b6b534bc7a5cb792f4d78e514828450fd35599092 extends Twig_Template
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
        $__internal_3518eb9659288462230d78cef583904a6cb894fad806bbcb416ff5c41d32e1f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3518eb9659288462230d78cef583904a6cb894fad806bbcb416ff5c41d32e1f3->enter($__internal_3518eb9659288462230d78cef583904a6cb894fad806bbcb416ff5c41d32e1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseMean.js"));

        // line 1
        echo "var baseSum = require('./_baseSum');

/** Used as references for various `Number` constants. */
var NAN = 0 / 0;

/**
 * The base implementation of `_.mean` and `_.meanBy` without support for
 * iteratee shorthands.
 *
 * @private
 * @param {Array} array The array to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @returns {number} Returns the mean.
 */
function baseMean(array, iteratee) {
  var length = array == null ? 0 : array.length;
  return length ? (baseSum(array, iteratee) / length) : NAN;
}

module.exports = baseMean;
";
        
        $__internal_3518eb9659288462230d78cef583904a6cb894fad806bbcb416ff5c41d32e1f3->leave($__internal_3518eb9659288462230d78cef583904a6cb894fad806bbcb416ff5c41d32e1f3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseMean.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseSum = require('./_baseSum');

/** Used as references for various `Number` constants. */
var NAN = 0 / 0;

/**
 * The base implementation of `_.mean` and `_.meanBy` without support for
 * iteratee shorthands.
 *
 * @private
 * @param {Array} array The array to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @returns {number} Returns the mean.
 */
function baseMean(array, iteratee) {
  var length = array == null ? 0 : array.length;
  return length ? (baseSum(array, iteratee) / length) : NAN;
}

module.exports = baseMean;
", "node_modules/lodash/_baseMean.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseMean.js");
    }
}
