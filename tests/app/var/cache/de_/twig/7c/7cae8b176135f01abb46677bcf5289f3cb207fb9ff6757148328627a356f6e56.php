<?php

/* node_modules/babel-runtime/core-js/reflect/get.js */
class __TwigTemplate_b23ed221635b8ddb4a67a0a1bf7a4e999241de24b029f2d2e556b53a0ade5a0c extends Twig_Template
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
        $__internal_4de28853a41fa6d21408e2bc803b330050135bb442e02f9d4cc058544debd7e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de28853a41fa6d21408e2bc803b330050135bb442e02f9d4cc058544debd7e0->enter($__internal_4de28853a41fa6d21408e2bc803b330050135bb442e02f9d4cc058544debd7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/core-js/reflect/get.js"));

        // line 1
        echo "module.exports = { \"default\": require(\"core-js/library/fn/reflect/get\"), __esModule: true };";
        
        $__internal_4de28853a41fa6d21408e2bc803b330050135bb442e02f9d4cc058544debd7e0->leave($__internal_4de28853a41fa6d21408e2bc803b330050135bb442e02f9d4cc058544debd7e0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/core-js/reflect/get.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = { \"default\": require(\"core-js/library/fn/reflect/get\"), __esModule: true };", "node_modules/babel-runtime/core-js/reflect/get.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/core-js/reflect/get.js");
    }
}
