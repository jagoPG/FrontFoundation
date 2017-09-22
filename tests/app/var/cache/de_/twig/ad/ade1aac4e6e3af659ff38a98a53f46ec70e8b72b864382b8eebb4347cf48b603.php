<?php

/* node_modules/lodash/_setToPairs.js */
class __TwigTemplate_5dd51912fbb5f4e8c8243805a6bb6426565a4f5b458e4cd33607a32e9ccbeda9 extends Twig_Template
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
        $__internal_f115045cd7cec646afb28cf44877dae0367e5f63b3ac6455245ed1ad66c037d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f115045cd7cec646afb28cf44877dae0367e5f63b3ac6455245ed1ad66c037d3->enter($__internal_f115045cd7cec646afb28cf44877dae0367e5f63b3ac6455245ed1ad66c037d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_setToPairs.js"));

        // line 1
        echo "/**
 * Converts `set` to its value-value pairs.
 *
 * @private
 * @param {Object} set The set to convert.
 * @returns {Array} Returns the value-value pairs.
 */
function setToPairs(set) {
  var index = -1,
      result = Array(set.size);

  set.forEach(function(value) {
    result[++index] = [value, value];
  });
  return result;
}

module.exports = setToPairs;
";
        
        $__internal_f115045cd7cec646afb28cf44877dae0367e5f63b3ac6455245ed1ad66c037d3->leave($__internal_f115045cd7cec646afb28cf44877dae0367e5f63b3ac6455245ed1ad66c037d3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_setToPairs.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Converts `set` to its value-value pairs.
 *
 * @private
 * @param {Object} set The set to convert.
 * @returns {Array} Returns the value-value pairs.
 */
function setToPairs(set) {
  var index = -1,
      result = Array(set.size);

  set.forEach(function(value) {
    result[++index] = [value, value];
  });
  return result;
}

module.exports = setToPairs;
", "node_modules/lodash/_setToPairs.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_setToPairs.js");
    }
}
