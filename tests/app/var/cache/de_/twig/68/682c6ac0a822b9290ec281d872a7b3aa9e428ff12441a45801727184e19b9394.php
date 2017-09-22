<?php

/* node_modules/lodash/_baseTimes.js */
class __TwigTemplate_4c62e5628eb00445250971ef8b577a11520c42e96bee674875aa60e6575a1052 extends Twig_Template
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
        $__internal_81ec916071c5406d7374fe3484ef5131f6d953de905ecc98a03bfa742d6d752b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81ec916071c5406d7374fe3484ef5131f6d953de905ecc98a03bfa742d6d752b->enter($__internal_81ec916071c5406d7374fe3484ef5131f6d953de905ecc98a03bfa742d6d752b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseTimes.js"));

        // line 1
        echo "/**
 * The base implementation of `_.times` without support for iteratee shorthands
 * or max array length checks.
 *
 * @private
 * @param {number} n The number of times to invoke `iteratee`.
 * @param {Function} iteratee The function invoked per iteration.
 * @returns {Array} Returns the array of results.
 */
function baseTimes(n, iteratee) {
  var index = -1,
      result = Array(n);

  while (++index < n) {
    result[index] = iteratee(index);
  }
  return result;
}

module.exports = baseTimes;
";
        
        $__internal_81ec916071c5406d7374fe3484ef5131f6d953de905ecc98a03bfa742d6d752b->leave($__internal_81ec916071c5406d7374fe3484ef5131f6d953de905ecc98a03bfa742d6d752b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseTimes.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * The base implementation of `_.times` without support for iteratee shorthands
 * or max array length checks.
 *
 * @private
 * @param {number} n The number of times to invoke `iteratee`.
 * @param {Function} iteratee The function invoked per iteration.
 * @returns {Array} Returns the array of results.
 */
function baseTimes(n, iteratee) {
  var index = -1,
      result = Array(n);

  while (++index < n) {
    result[index] = iteratee(index);
  }
  return result;
}

module.exports = baseTimes;
", "node_modules/lodash/_baseTimes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseTimes.js");
    }
}
