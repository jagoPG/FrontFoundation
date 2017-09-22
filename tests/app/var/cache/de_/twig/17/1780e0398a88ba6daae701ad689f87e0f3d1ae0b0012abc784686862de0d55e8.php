<?php

/* node_modules/lodash/_baseFindIndex.js */
class __TwigTemplate_f850bd9643bfac5da81ab3564973031cbf024cd753d04d263fb31205db89acff extends Twig_Template
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
        $__internal_c2f04a8261ab827933d50c7cc861fd89268d5621ba8e94cc4080d6e11c58f013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f04a8261ab827933d50c7cc861fd89268d5621ba8e94cc4080d6e11c58f013->enter($__internal_c2f04a8261ab827933d50c7cc861fd89268d5621ba8e94cc4080d6e11c58f013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseFindIndex.js"));

        // line 1
        echo "/**
 * The base implementation of `_.findIndex` and `_.findLastIndex` without
 * support for iteratee shorthands.
 *
 * @private
 * @param {Array} array The array to inspect.
 * @param {Function} predicate The function invoked per iteration.
 * @param {number} fromIndex The index to search from.
 * @param {boolean} [fromRight] Specify iterating from right to left.
 * @returns {number} Returns the index of the matched value, else `-1`.
 */
function baseFindIndex(array, predicate, fromIndex, fromRight) {
  var length = array.length,
      index = fromIndex + (fromRight ? 1 : -1);

  while ((fromRight ? index-- : ++index < length)) {
    if (predicate(array[index], index, array)) {
      return index;
    }
  }
  return -1;
}

module.exports = baseFindIndex;
";
        
        $__internal_c2f04a8261ab827933d50c7cc861fd89268d5621ba8e94cc4080d6e11c58f013->leave($__internal_c2f04a8261ab827933d50c7cc861fd89268d5621ba8e94cc4080d6e11c58f013_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseFindIndex.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * The base implementation of `_.findIndex` and `_.findLastIndex` without
 * support for iteratee shorthands.
 *
 * @private
 * @param {Array} array The array to inspect.
 * @param {Function} predicate The function invoked per iteration.
 * @param {number} fromIndex The index to search from.
 * @param {boolean} [fromRight] Specify iterating from right to left.
 * @returns {number} Returns the index of the matched value, else `-1`.
 */
function baseFindIndex(array, predicate, fromIndex, fromRight) {
  var length = array.length,
      index = fromIndex + (fromRight ? 1 : -1);

  while ((fromRight ? index-- : ++index < length)) {
    if (predicate(array[index], index, array)) {
      return index;
    }
  }
  return -1;
}

module.exports = baseFindIndex;
", "node_modules/lodash/_baseFindIndex.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseFindIndex.js");
    }
}
