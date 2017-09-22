<?php

/* node_modules/lodash/take.js */
class __TwigTemplate_29022b8173647382ca6d1514f2f882f7ca96d6c5efaae2547ee3e6d6c9669d49 extends Twig_Template
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
        $__internal_76e7d6b4a6422525fc9e63a7cd499e4a2347f0fdccaa3417a478e59cad7c507b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e7d6b4a6422525fc9e63a7cd499e4a2347f0fdccaa3417a478e59cad7c507b->enter($__internal_76e7d6b4a6422525fc9e63a7cd499e4a2347f0fdccaa3417a478e59cad7c507b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/take.js"));

        // line 1
        echo "var baseSlice = require('./_baseSlice'),
    toInteger = require('./toInteger');

/**
 * Creates a slice of `array` with `n` elements taken from the beginning.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Array
 * @param {Array} array The array to query.
 * @param {number} [n=1] The number of elements to take.
 * @param- {Object} [guard] Enables use as an iteratee for methods like `_.map`.
 * @returns {Array} Returns the slice of `array`.
 * @example
 *
 * _.take([1, 2, 3]);
 * // => [1]
 *
 * _.take([1, 2, 3], 2);
 * // => [1, 2]
 *
 * _.take([1, 2, 3], 5);
 * // => [1, 2, 3]
 *
 * _.take([1, 2, 3], 0);
 * // => []
 */
function take(array, n, guard) {
  if (!(array && array.length)) {
    return [];
  }
  n = (guard || n === undefined) ? 1 : toInteger(n);
  return baseSlice(array, 0, n < 0 ? 0 : n);
}

module.exports = take;
";
        
        $__internal_76e7d6b4a6422525fc9e63a7cd499e4a2347f0fdccaa3417a478e59cad7c507b->leave($__internal_76e7d6b4a6422525fc9e63a7cd499e4a2347f0fdccaa3417a478e59cad7c507b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/take.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseSlice = require('./_baseSlice'),
    toInteger = require('./toInteger');

/**
 * Creates a slice of `array` with `n` elements taken from the beginning.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Array
 * @param {Array} array The array to query.
 * @param {number} [n=1] The number of elements to take.
 * @param- {Object} [guard] Enables use as an iteratee for methods like `_.map`.
 * @returns {Array} Returns the slice of `array`.
 * @example
 *
 * _.take([1, 2, 3]);
 * // => [1]
 *
 * _.take([1, 2, 3], 2);
 * // => [1, 2]
 *
 * _.take([1, 2, 3], 5);
 * // => [1, 2, 3]
 *
 * _.take([1, 2, 3], 0);
 * // => []
 */
function take(array, n, guard) {
  if (!(array && array.length)) {
    return [];
  }
  n = (guard || n === undefined) ? 1 : toInteger(n);
  return baseSlice(array, 0, n < 0 ? 0 : n);
}

module.exports = take;
", "node_modules/lodash/take.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/take.js");
    }
}
