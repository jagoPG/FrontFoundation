<?php

/* node_modules/lodash/sumBy.js */
class __TwigTemplate_b903bfc459000c78128d0c13c34f26de30d33cecea9d0d6da722b169485b1f8d extends Twig_Template
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
        $__internal_c55a49fc2567569521c0d7a1ac066a0c5a024d1394113f4e3035fb084afe101f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55a49fc2567569521c0d7a1ac066a0c5a024d1394113f4e3035fb084afe101f->enter($__internal_c55a49fc2567569521c0d7a1ac066a0c5a024d1394113f4e3035fb084afe101f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/sumBy.js"));

        // line 1
        echo "var baseIteratee = require('./_baseIteratee'),
    baseSum = require('./_baseSum');

/**
 * This method is like `_.sum` except that it accepts `iteratee` which is
 * invoked for each element in `array` to generate the value to be summed.
 * The iteratee is invoked with one argument: (value).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Math
 * @param {Array} array The array to iterate over.
 * @param {Function} [iteratee=_.identity] The iteratee invoked per element.
 * @returns {number} Returns the sum.
 * @example
 *
 * var objects = [{ 'n': 4 }, { 'n': 2 }, { 'n': 8 }, { 'n': 6 }];
 *
 * _.sumBy(objects, function(o) { return o.n; });
 * // => 20
 *
 * // The `_.property` iteratee shorthand.
 * _.sumBy(objects, 'n');
 * // => 20
 */
function sumBy(array, iteratee) {
  return (array && array.length)
    ? baseSum(array, baseIteratee(iteratee, 2))
    : 0;
}

module.exports = sumBy;
";
        
        $__internal_c55a49fc2567569521c0d7a1ac066a0c5a024d1394113f4e3035fb084afe101f->leave($__internal_c55a49fc2567569521c0d7a1ac066a0c5a024d1394113f4e3035fb084afe101f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/sumBy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseIteratee = require('./_baseIteratee'),
    baseSum = require('./_baseSum');

/**
 * This method is like `_.sum` except that it accepts `iteratee` which is
 * invoked for each element in `array` to generate the value to be summed.
 * The iteratee is invoked with one argument: (value).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Math
 * @param {Array} array The array to iterate over.
 * @param {Function} [iteratee=_.identity] The iteratee invoked per element.
 * @returns {number} Returns the sum.
 * @example
 *
 * var objects = [{ 'n': 4 }, { 'n': 2 }, { 'n': 8 }, { 'n': 6 }];
 *
 * _.sumBy(objects, function(o) { return o.n; });
 * // => 20
 *
 * // The `_.property` iteratee shorthand.
 * _.sumBy(objects, 'n');
 * // => 20
 */
function sumBy(array, iteratee) {
  return (array && array.length)
    ? baseSum(array, baseIteratee(iteratee, 2))
    : 0;
}

module.exports = sumBy;
", "node_modules/lodash/sumBy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/sumBy.js");
    }
}
