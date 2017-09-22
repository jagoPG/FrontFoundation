<?php

/* node_modules/lodash/sortedIndexOf.js */
class __TwigTemplate_7f3416caa7b05954184c787f42504a541b0ca78ed6738044e9ea84d46023eeca extends Twig_Template
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
        $__internal_3208d64eb50ca888bfd3bdea0f3d73ff9256560d052b422bbf46577173e0f42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3208d64eb50ca888bfd3bdea0f3d73ff9256560d052b422bbf46577173e0f42b->enter($__internal_3208d64eb50ca888bfd3bdea0f3d73ff9256560d052b422bbf46577173e0f42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/sortedIndexOf.js"));

        // line 1
        echo "var baseSortedIndex = require('./_baseSortedIndex'),
    eq = require('./eq');

/**
 * This method is like `_.indexOf` except that it performs a binary
 * search on a sorted `array`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Array
 * @param {Array} array The array to inspect.
 * @param {*} value The value to search for.
 * @returns {number} Returns the index of the matched value, else `-1`.
 * @example
 *
 * _.sortedIndexOf([4, 5, 5, 5, 6], 5);
 * // => 1
 */
function sortedIndexOf(array, value) {
  var length = array == null ? 0 : array.length;
  if (length) {
    var index = baseSortedIndex(array, value);
    if (index < length && eq(array[index], value)) {
      return index;
    }
  }
  return -1;
}

module.exports = sortedIndexOf;
";
        
        $__internal_3208d64eb50ca888bfd3bdea0f3d73ff9256560d052b422bbf46577173e0f42b->leave($__internal_3208d64eb50ca888bfd3bdea0f3d73ff9256560d052b422bbf46577173e0f42b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/sortedIndexOf.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseSortedIndex = require('./_baseSortedIndex'),
    eq = require('./eq');

/**
 * This method is like `_.indexOf` except that it performs a binary
 * search on a sorted `array`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Array
 * @param {Array} array The array to inspect.
 * @param {*} value The value to search for.
 * @returns {number} Returns the index of the matched value, else `-1`.
 * @example
 *
 * _.sortedIndexOf([4, 5, 5, 5, 6], 5);
 * // => 1
 */
function sortedIndexOf(array, value) {
  var length = array == null ? 0 : array.length;
  if (length) {
    var index = baseSortedIndex(array, value);
    if (index < length && eq(array[index], value)) {
      return index;
    }
  }
  return -1;
}

module.exports = sortedIndexOf;
", "node_modules/lodash/sortedIndexOf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/sortedIndexOf.js");
    }
}
