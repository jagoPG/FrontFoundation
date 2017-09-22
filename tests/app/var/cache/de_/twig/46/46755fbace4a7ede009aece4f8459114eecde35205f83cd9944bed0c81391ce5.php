<?php

/* node_modules/lodash/_strictLastIndexOf.js */
class __TwigTemplate_372cfd8d89e74134c36b1f1cbafa3798b37bf336021055c302caacd3f7ca0da8 extends Twig_Template
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
        $__internal_e3b3a787ccdb02d36a39cb4c5dd3bac793a2c453f5a765cd10fd0e4709ff2dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b3a787ccdb02d36a39cb4c5dd3bac793a2c453f5a765cd10fd0e4709ff2dc2->enter($__internal_e3b3a787ccdb02d36a39cb4c5dd3bac793a2c453f5a765cd10fd0e4709ff2dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_strictLastIndexOf.js"));

        // line 1
        echo "/**
 * A specialized version of `_.lastIndexOf` which performs strict equality
 * comparisons of values, i.e. `===`.
 *
 * @private
 * @param {Array} array The array to inspect.
 * @param {*} value The value to search for.
 * @param {number} fromIndex The index to search from.
 * @returns {number} Returns the index of the matched value, else `-1`.
 */
function strictLastIndexOf(array, value, fromIndex) {
  var index = fromIndex + 1;
  while (index--) {
    if (array[index] === value) {
      return index;
    }
  }
  return index;
}

module.exports = strictLastIndexOf;
";
        
        $__internal_e3b3a787ccdb02d36a39cb4c5dd3bac793a2c453f5a765cd10fd0e4709ff2dc2->leave($__internal_e3b3a787ccdb02d36a39cb4c5dd3bac793a2c453f5a765cd10fd0e4709ff2dc2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_strictLastIndexOf.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * A specialized version of `_.lastIndexOf` which performs strict equality
 * comparisons of values, i.e. `===`.
 *
 * @private
 * @param {Array} array The array to inspect.
 * @param {*} value The value to search for.
 * @param {number} fromIndex The index to search from.
 * @returns {number} Returns the index of the matched value, else `-1`.
 */
function strictLastIndexOf(array, value, fromIndex) {
  var index = fromIndex + 1;
  while (index--) {
    if (array[index] === value) {
      return index;
    }
  }
  return index;
}

module.exports = strictLastIndexOf;
", "node_modules/lodash/_strictLastIndexOf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_strictLastIndexOf.js");
    }
}
