<?php

/* node_modules/lodash/_iteratorToArray.js */
class __TwigTemplate_f881c8d2d30302f66a871db96b38a95a93bd3845f278300591108930b46814c5 extends Twig_Template
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
        $__internal_81440201884045e17cb963b41f85f14130b464447b6b5ffa9b88a8e352d3a5ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81440201884045e17cb963b41f85f14130b464447b6b5ffa9b88a8e352d3a5ed->enter($__internal_81440201884045e17cb963b41f85f14130b464447b6b5ffa9b88a8e352d3a5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_iteratorToArray.js"));

        // line 1
        echo "/**
 * Converts `iterator` to an array.
 *
 * @private
 * @param {Object} iterator The iterator to convert.
 * @returns {Array} Returns the converted array.
 */
function iteratorToArray(iterator) {
  var data,
      result = [];

  while (!(data = iterator.next()).done) {
    result.push(data.value);
  }
  return result;
}

module.exports = iteratorToArray;
";
        
        $__internal_81440201884045e17cb963b41f85f14130b464447b6b5ffa9b88a8e352d3a5ed->leave($__internal_81440201884045e17cb963b41f85f14130b464447b6b5ffa9b88a8e352d3a5ed_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_iteratorToArray.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Converts `iterator` to an array.
 *
 * @private
 * @param {Object} iterator The iterator to convert.
 * @returns {Array} Returns the converted array.
 */
function iteratorToArray(iterator) {
  var data,
      result = [];

  while (!(data = iterator.next()).done) {
    result.push(data.value);
  }
  return result;
}

module.exports = iteratorToArray;
", "node_modules/lodash/_iteratorToArray.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_iteratorToArray.js");
    }
}
