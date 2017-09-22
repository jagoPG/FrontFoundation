<?php

/* node_modules/lodash/_baseSum.js */
class __TwigTemplate_442125e28edf97bab0a197d62255e7cf36908920b0bef2fd8055bd7fee68a766 extends Twig_Template
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
        $__internal_cdb359df2b85b7d664b345175539e114c48bf5f6c6ca8976ee186a6a486cfa34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdb359df2b85b7d664b345175539e114c48bf5f6c6ca8976ee186a6a486cfa34->enter($__internal_cdb359df2b85b7d664b345175539e114c48bf5f6c6ca8976ee186a6a486cfa34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseSum.js"));

        // line 1
        echo "/**
 * The base implementation of `_.sum` and `_.sumBy` without support for
 * iteratee shorthands.
 *
 * @private
 * @param {Array} array The array to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @returns {number} Returns the sum.
 */
function baseSum(array, iteratee) {
  var result,
      index = -1,
      length = array.length;

  while (++index < length) {
    var current = iteratee(array[index]);
    if (current !== undefined) {
      result = result === undefined ? current : (result + current);
    }
  }
  return result;
}

module.exports = baseSum;
";
        
        $__internal_cdb359df2b85b7d664b345175539e114c48bf5f6c6ca8976ee186a6a486cfa34->leave($__internal_cdb359df2b85b7d664b345175539e114c48bf5f6c6ca8976ee186a6a486cfa34_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseSum.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * The base implementation of `_.sum` and `_.sumBy` without support for
 * iteratee shorthands.
 *
 * @private
 * @param {Array} array The array to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @returns {number} Returns the sum.
 */
function baseSum(array, iteratee) {
  var result,
      index = -1,
      length = array.length;

  while (++index < length) {
    var current = iteratee(array[index]);
    if (current !== undefined) {
      result = result === undefined ? current : (result + current);
    }
  }
  return result;
}

module.exports = baseSum;
", "node_modules/lodash/_baseSum.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseSum.js");
    }
}
