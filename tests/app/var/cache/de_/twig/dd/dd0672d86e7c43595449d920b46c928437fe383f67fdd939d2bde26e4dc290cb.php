<?php

/* node_modules/core-js/modules/_a-function.js */
class __TwigTemplate_3cfad3fa9fd8d46123d3a35addb7717bb24f33fe05a86cb445d3b8d570a4288e extends Twig_Template
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
        $__internal_c786e7b91a35c6d18654042f0ed07fa4203a3564d39c7511685afb8da6469188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c786e7b91a35c6d18654042f0ed07fa4203a3564d39c7511685afb8da6469188->enter($__internal_c786e7b91a35c6d18654042f0ed07fa4203a3564d39c7511685afb8da6469188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_a-function.js"));

        // line 1
        echo "module.exports = function (it) {
  if (typeof it != 'function') throw TypeError(it + ' is not a function!');
  return it;
};
";
        
        $__internal_c786e7b91a35c6d18654042f0ed07fa4203a3564d39c7511685afb8da6469188->leave($__internal_c786e7b91a35c6d18654042f0ed07fa4203a3564d39c7511685afb8da6469188_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_a-function.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function (it) {
  if (typeof it != 'function') throw TypeError(it + ' is not a function!');
  return it;
};
", "node_modules/core-js/modules/_a-function.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_a-function.js");
    }
}
