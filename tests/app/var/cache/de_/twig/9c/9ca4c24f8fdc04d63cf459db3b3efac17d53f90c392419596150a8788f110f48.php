<?php

/* node_modules/lodash/_arrayMap.js */
class __TwigTemplate_f4eaa6b3cf304aab807827cfc97d4c313674c5dc5563057558dfc0820e5462a7 extends Twig_Template
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
        $__internal_fcb4b7d035261e2e4d4aaa3f0beb0829d14325da0b3714abddb8abb3800482e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb4b7d035261e2e4d4aaa3f0beb0829d14325da0b3714abddb8abb3800482e8->enter($__internal_fcb4b7d035261e2e4d4aaa3f0beb0829d14325da0b3714abddb8abb3800482e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_arrayMap.js"));

        // line 1
        echo "/**
 * A specialized version of `_.map` for arrays without support for iteratee
 * shorthands.
 *
 * @private
 * @param {Array} [array] The array to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @returns {Array} Returns the new mapped array.
 */
function arrayMap(array, iteratee) {
  var index = -1,
      length = array == null ? 0 : array.length,
      result = Array(length);

  while (++index < length) {
    result[index] = iteratee(array[index], index, array);
  }
  return result;
}

module.exports = arrayMap;
";
        
        $__internal_fcb4b7d035261e2e4d4aaa3f0beb0829d14325da0b3714abddb8abb3800482e8->leave($__internal_fcb4b7d035261e2e4d4aaa3f0beb0829d14325da0b3714abddb8abb3800482e8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_arrayMap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * A specialized version of `_.map` for arrays without support for iteratee
 * shorthands.
 *
 * @private
 * @param {Array} [array] The array to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @returns {Array} Returns the new mapped array.
 */
function arrayMap(array, iteratee) {
  var index = -1,
      length = array == null ? 0 : array.length,
      result = Array(length);

  while (++index < length) {
    result[index] = iteratee(array[index], index, array);
  }
  return result;
}

module.exports = arrayMap;
", "node_modules/lodash/_arrayMap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_arrayMap.js");
    }
}
