<?php

/* node_modules/lodash/sortedLastIndex.js */
class __TwigTemplate_36ea4fa90c2b5995ad78cc1c62e6fc2d87b1b3572aab6f1615869982e416a42d extends Twig_Template
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
        $__internal_5e277421181709e2bc52c780f350fad5b4b1f09d5a6613a265122705e7bb2dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e277421181709e2bc52c780f350fad5b4b1f09d5a6613a265122705e7bb2dac->enter($__internal_5e277421181709e2bc52c780f350fad5b4b1f09d5a6613a265122705e7bb2dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/sortedLastIndex.js"));

        // line 1
        echo "var baseSortedIndex = require('./_baseSortedIndex');

/**
 * This method is like `_.sortedIndex` except that it returns the highest
 * index at which `value` should be inserted into `array` in order to
 * maintain its sort order.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Array
 * @param {Array} array The sorted array to inspect.
 * @param {*} value The value to evaluate.
 * @returns {number} Returns the index at which `value` should be inserted
 *  into `array`.
 * @example
 *
 * _.sortedLastIndex([4, 5, 5, 5, 6], 5);
 * // => 4
 */
function sortedLastIndex(array, value) {
  return baseSortedIndex(array, value, true);
}

module.exports = sortedLastIndex;
";
        
        $__internal_5e277421181709e2bc52c780f350fad5b4b1f09d5a6613a265122705e7bb2dac->leave($__internal_5e277421181709e2bc52c780f350fad5b4b1f09d5a6613a265122705e7bb2dac_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/sortedLastIndex.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseSortedIndex = require('./_baseSortedIndex');

/**
 * This method is like `_.sortedIndex` except that it returns the highest
 * index at which `value` should be inserted into `array` in order to
 * maintain its sort order.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Array
 * @param {Array} array The sorted array to inspect.
 * @param {*} value The value to evaluate.
 * @returns {number} Returns the index at which `value` should be inserted
 *  into `array`.
 * @example
 *
 * _.sortedLastIndex([4, 5, 5, 5, 6], 5);
 * // => 4
 */
function sortedLastIndex(array, value) {
  return baseSortedIndex(array, value, true);
}

module.exports = sortedLastIndex;
", "node_modules/lodash/sortedLastIndex.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/sortedLastIndex.js");
    }
}
