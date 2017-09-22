<?php

/* node_modules/lodash/_strictIndexOf.js */
class __TwigTemplate_98db01bb62ec96f15c2aa715ade0f3ba90e90b6e4c882ae6c2a60e8b849fd02e extends Twig_Template
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
        $__internal_c6a3f0c64c7ff240bc99c2f7f2cdd1134dc04e446c3eeb077a61ba6ebf4a1fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a3f0c64c7ff240bc99c2f7f2cdd1134dc04e446c3eeb077a61ba6ebf4a1fe7->enter($__internal_c6a3f0c64c7ff240bc99c2f7f2cdd1134dc04e446c3eeb077a61ba6ebf4a1fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_strictIndexOf.js"));

        // line 1
        echo "/**
 * A specialized version of `_.indexOf` which performs strict equality
 * comparisons of values, i.e. `===`.
 *
 * @private
 * @param {Array} array The array to inspect.
 * @param {*} value The value to search for.
 * @param {number} fromIndex The index to search from.
 * @returns {number} Returns the index of the matched value, else `-1`.
 */
function strictIndexOf(array, value, fromIndex) {
  var index = fromIndex - 1,
      length = array.length;

  while (++index < length) {
    if (array[index] === value) {
      return index;
    }
  }
  return -1;
}

module.exports = strictIndexOf;
";
        
        $__internal_c6a3f0c64c7ff240bc99c2f7f2cdd1134dc04e446c3eeb077a61ba6ebf4a1fe7->leave($__internal_c6a3f0c64c7ff240bc99c2f7f2cdd1134dc04e446c3eeb077a61ba6ebf4a1fe7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_strictIndexOf.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * A specialized version of `_.indexOf` which performs strict equality
 * comparisons of values, i.e. `===`.
 *
 * @private
 * @param {Array} array The array to inspect.
 * @param {*} value The value to search for.
 * @param {number} fromIndex The index to search from.
 * @returns {number} Returns the index of the matched value, else `-1`.
 */
function strictIndexOf(array, value, fromIndex) {
  var index = fromIndex - 1,
      length = array.length;

  while (++index < length) {
    if (array[index] === value) {
      return index;
    }
  }
  return -1;
}

module.exports = strictIndexOf;
", "node_modules/lodash/_strictIndexOf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_strictIndexOf.js");
    }
}
