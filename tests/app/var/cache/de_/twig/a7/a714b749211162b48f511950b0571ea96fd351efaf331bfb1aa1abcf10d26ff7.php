<?php

/* node_modules/lodash/_arrayEachRight.js */
class __TwigTemplate_bca718d5ac03ec173979899d25d4824038049682cc64c7569ed2dc2427f03311 extends Twig_Template
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
        $__internal_3ff2f8802ac1d5e3e15f53fabc05ef5cdd12ff80865454bfa4bd8ff45e122ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff2f8802ac1d5e3e15f53fabc05ef5cdd12ff80865454bfa4bd8ff45e122ae1->enter($__internal_3ff2f8802ac1d5e3e15f53fabc05ef5cdd12ff80865454bfa4bd8ff45e122ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_arrayEachRight.js"));

        // line 1
        echo "/**
 * A specialized version of `_.forEachRight` for arrays without support for
 * iteratee shorthands.
 *
 * @private
 * @param {Array} [array] The array to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @returns {Array} Returns `array`.
 */
function arrayEachRight(array, iteratee) {
  var length = array == null ? 0 : array.length;

  while (length--) {
    if (iteratee(array[length], length, array) === false) {
      break;
    }
  }
  return array;
}

module.exports = arrayEachRight;
";
        
        $__internal_3ff2f8802ac1d5e3e15f53fabc05ef5cdd12ff80865454bfa4bd8ff45e122ae1->leave($__internal_3ff2f8802ac1d5e3e15f53fabc05ef5cdd12ff80865454bfa4bd8ff45e122ae1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_arrayEachRight.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * A specialized version of `_.forEachRight` for arrays without support for
 * iteratee shorthands.
 *
 * @private
 * @param {Array} [array] The array to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @returns {Array} Returns `array`.
 */
function arrayEachRight(array, iteratee) {
  var length = array == null ? 0 : array.length;

  while (length--) {
    if (iteratee(array[length], length, array) === false) {
      break;
    }
  }
  return array;
}

module.exports = arrayEachRight;
", "node_modules/lodash/_arrayEachRight.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_arrayEachRight.js");
    }
}
