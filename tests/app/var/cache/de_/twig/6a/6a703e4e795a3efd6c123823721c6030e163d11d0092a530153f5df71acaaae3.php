<?php

/* node_modules/babel-runtime/core-js/reflect/construct.js */
class __TwigTemplate_1fb322fa8b90a1aea25b36b6758af3c6a8e7c31cd7148823383a62857f67ed66 extends Twig_Template
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
        $__internal_4d1eb621b12dab7fe60aac6b47c636bc4fa04411a28e851399f2e7c109d1dd9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d1eb621b12dab7fe60aac6b47c636bc4fa04411a28e851399f2e7c109d1dd9e->enter($__internal_4d1eb621b12dab7fe60aac6b47c636bc4fa04411a28e851399f2e7c109d1dd9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/core-js/reflect/construct.js"));

        // line 1
        echo "module.exports = { \"default\": require(\"core-js/library/fn/reflect/construct\"), __esModule: true };";
        
        $__internal_4d1eb621b12dab7fe60aac6b47c636bc4fa04411a28e851399f2e7c109d1dd9e->leave($__internal_4d1eb621b12dab7fe60aac6b47c636bc4fa04411a28e851399f2e7c109d1dd9e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/core-js/reflect/construct.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = { \"default\": require(\"core-js/library/fn/reflect/construct\"), __esModule: true };", "node_modules/babel-runtime/core-js/reflect/construct.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/core-js/reflect/construct.js");
    }
}
