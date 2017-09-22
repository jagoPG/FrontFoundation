<?php

/* node_modules/lodash/sortedIndex.js */
class __TwigTemplate_9899ef372f399ae4160ce2f75493c69aa3975a3b2712d2114887dde48f277a88 extends Twig_Template
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
        $__internal_806bb9977d4bd5aeb22993049ced8e11b631ab79f09d1a7f4d524e843753f0d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806bb9977d4bd5aeb22993049ced8e11b631ab79f09d1a7f4d524e843753f0d1->enter($__internal_806bb9977d4bd5aeb22993049ced8e11b631ab79f09d1a7f4d524e843753f0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/sortedIndex.js"));

        // line 1
        echo "var baseSortedIndex = require('./_baseSortedIndex');

/**
 * Uses a binary search to determine the lowest index at which `value`
 * should be inserted into `array` in order to maintain its sort order.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Array
 * @param {Array} array The sorted array to inspect.
 * @param {*} value The value to evaluate.
 * @returns {number} Returns the index at which `value` should be inserted
 *  into `array`.
 * @example
 *
 * _.sortedIndex([30, 50], 40);
 * // => 1
 */
function sortedIndex(array, value) {
  return baseSortedIndex(array, value);
}

module.exports = sortedIndex;
";
        
        $__internal_806bb9977d4bd5aeb22993049ced8e11b631ab79f09d1a7f4d524e843753f0d1->leave($__internal_806bb9977d4bd5aeb22993049ced8e11b631ab79f09d1a7f4d524e843753f0d1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/sortedIndex.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseSortedIndex = require('./_baseSortedIndex');

/**
 * Uses a binary search to determine the lowest index at which `value`
 * should be inserted into `array` in order to maintain its sort order.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Array
 * @param {Array} array The sorted array to inspect.
 * @param {*} value The value to evaluate.
 * @returns {number} Returns the index at which `value` should be inserted
 *  into `array`.
 * @example
 *
 * _.sortedIndex([30, 50], 40);
 * // => 1
 */
function sortedIndex(array, value) {
  return baseSortedIndex(array, value);
}

module.exports = sortedIndex;
", "node_modules/lodash/sortedIndex.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/sortedIndex.js");
    }
}
