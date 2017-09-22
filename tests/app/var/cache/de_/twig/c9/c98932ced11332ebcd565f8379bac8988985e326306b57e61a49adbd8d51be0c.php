<?php

/* node_modules/lodash/_arrayEach.js */
class __TwigTemplate_20527b41ef701060442a42b64b1010db2435a23f13aac62bbe1810190636a11d extends Twig_Template
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
        $__internal_2364ed35dcdcd714551f8723db9f8020652bc3825ca0971e8d6784413e74e193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2364ed35dcdcd714551f8723db9f8020652bc3825ca0971e8d6784413e74e193->enter($__internal_2364ed35dcdcd714551f8723db9f8020652bc3825ca0971e8d6784413e74e193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_arrayEach.js"));

        // line 1
        echo "/**
 * A specialized version of `_.forEach` for arrays without support for
 * iteratee shorthands.
 *
 * @private
 * @param {Array} [array] The array to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @returns {Array} Returns `array`.
 */
function arrayEach(array, iteratee) {
  var index = -1,
      length = array == null ? 0 : array.length;

  while (++index < length) {
    if (iteratee(array[index], index, array) === false) {
      break;
    }
  }
  return array;
}

module.exports = arrayEach;
";
        
        $__internal_2364ed35dcdcd714551f8723db9f8020652bc3825ca0971e8d6784413e74e193->leave($__internal_2364ed35dcdcd714551f8723db9f8020652bc3825ca0971e8d6784413e74e193_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_arrayEach.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * A specialized version of `_.forEach` for arrays without support for
 * iteratee shorthands.
 *
 * @private
 * @param {Array} [array] The array to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @returns {Array} Returns `array`.
 */
function arrayEach(array, iteratee) {
  var index = -1,
      length = array == null ? 0 : array.length;

  while (++index < length) {
    if (iteratee(array[index], index, array) === false) {
      break;
    }
  }
  return array;
}

module.exports = arrayEach;
", "node_modules/lodash/_arrayEach.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_arrayEach.js");
    }
}
