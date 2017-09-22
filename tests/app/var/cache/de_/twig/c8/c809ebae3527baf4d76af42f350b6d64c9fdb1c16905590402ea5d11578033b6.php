<?php

/* node_modules/core-js/modules/_is-object.js */
class __TwigTemplate_6457e925ade80c1086bef612c715382344d4e4dd252b23c1c6cd73ef3f9f883d extends Twig_Template
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
        $__internal_74632cd432696cb608bfbcfb5e45d6f026788b1eb552f6aca61d3e347228e2f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74632cd432696cb608bfbcfb5e45d6f026788b1eb552f6aca61d3e347228e2f1->enter($__internal_74632cd432696cb608bfbcfb5e45d6f026788b1eb552f6aca61d3e347228e2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_is-object.js"));

        // line 1
        echo "module.exports = function (it) {
  return typeof it === 'object' ? it !== null : typeof it === 'function';
};
";
        
        $__internal_74632cd432696cb608bfbcfb5e45d6f026788b1eb552f6aca61d3e347228e2f1->leave($__internal_74632cd432696cb608bfbcfb5e45d6f026788b1eb552f6aca61d3e347228e2f1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_is-object.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function (it) {
  return typeof it === 'object' ? it !== null : typeof it === 'function';
};
", "node_modules/core-js/modules/_is-object.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_is-object.js");
    }
}
