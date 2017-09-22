<?php

/* node_modules/lodash/_arrayFilter.js */
class __TwigTemplate_542adafae446ea6763ad7562da2e24b561a12461a8c5fb7be40411d0fef6897a extends Twig_Template
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
        $__internal_df0d4478896ca26f197aab8d57b1220ea720a1b6128bd01ecc7d91d611f29ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0d4478896ca26f197aab8d57b1220ea720a1b6128bd01ecc7d91d611f29ed3->enter($__internal_df0d4478896ca26f197aab8d57b1220ea720a1b6128bd01ecc7d91d611f29ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_arrayFilter.js"));

        // line 1
        echo "/**
 * A specialized version of `_.filter` for arrays without support for
 * iteratee shorthands.
 *
 * @private
 * @param {Array} [array] The array to iterate over.
 * @param {Function} predicate The function invoked per iteration.
 * @returns {Array} Returns the new filtered array.
 */
function arrayFilter(array, predicate) {
  var index = -1,
      length = array == null ? 0 : array.length,
      resIndex = 0,
      result = [];

  while (++index < length) {
    var value = array[index];
    if (predicate(value, index, array)) {
      result[resIndex++] = value;
    }
  }
  return result;
}

module.exports = arrayFilter;
";
        
        $__internal_df0d4478896ca26f197aab8d57b1220ea720a1b6128bd01ecc7d91d611f29ed3->leave($__internal_df0d4478896ca26f197aab8d57b1220ea720a1b6128bd01ecc7d91d611f29ed3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_arrayFilter.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * A specialized version of `_.filter` for arrays without support for
 * iteratee shorthands.
 *
 * @private
 * @param {Array} [array] The array to iterate over.
 * @param {Function} predicate The function invoked per iteration.
 * @returns {Array} Returns the new filtered array.
 */
function arrayFilter(array, predicate) {
  var index = -1,
      length = array == null ? 0 : array.length,
      resIndex = 0,
      result = [];

  while (++index < length) {
    var value = array[index];
    if (predicate(value, index, array)) {
      result[resIndex++] = value;
    }
  }
  return result;
}

module.exports = arrayFilter;
", "node_modules/lodash/_arrayFilter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_arrayFilter.js");
    }
}
