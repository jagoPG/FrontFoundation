<?php

/* node_modules/lodash/_setToArray.js */
class __TwigTemplate_d59bbed849fa98f077fc19767caafa3eed27300b3c2cb0fd4550f598b4c849ed extends Twig_Template
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
        $__internal_8531779e171743d8b9a754aba0075a1a0c02367a9360836b522f1c69cb19b2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8531779e171743d8b9a754aba0075a1a0c02367a9360836b522f1c69cb19b2bb->enter($__internal_8531779e171743d8b9a754aba0075a1a0c02367a9360836b522f1c69cb19b2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_setToArray.js"));

        // line 1
        echo "/**
 * Converts `set` to an array of its values.
 *
 * @private
 * @param {Object} set The set to convert.
 * @returns {Array} Returns the values.
 */
function setToArray(set) {
  var index = -1,
      result = Array(set.size);

  set.forEach(function(value) {
    result[++index] = value;
  });
  return result;
}

module.exports = setToArray;
";
        
        $__internal_8531779e171743d8b9a754aba0075a1a0c02367a9360836b522f1c69cb19b2bb->leave($__internal_8531779e171743d8b9a754aba0075a1a0c02367a9360836b522f1c69cb19b2bb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_setToArray.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Converts `set` to an array of its values.
 *
 * @private
 * @param {Object} set The set to convert.
 * @returns {Array} Returns the values.
 */
function setToArray(set) {
  var index = -1,
      result = Array(set.size);

  set.forEach(function(value) {
    result[++index] = value;
  });
  return result;
}

module.exports = setToArray;
", "node_modules/lodash/_setToArray.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_setToArray.js");
    }
}
