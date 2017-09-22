<?php

/* node_modules/babel-runtime/core-js/system/global.js */
class __TwigTemplate_f4d7436148b24fc8ae1f4dc6e8118e097452a1c123d5e27f8d4acbd659e5fced extends Twig_Template
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
        $__internal_33e4ceb9eed9dfc102a9d5b829ea282abb00c207537c056b6b683bc555855f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e4ceb9eed9dfc102a9d5b829ea282abb00c207537c056b6b683bc555855f1e->enter($__internal_33e4ceb9eed9dfc102a9d5b829ea282abb00c207537c056b6b683bc555855f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/core-js/system/global.js"));

        // line 1
        echo "module.exports = { \"default\": require(\"core-js/library/fn/system/global\"), __esModule: true };";
        
        $__internal_33e4ceb9eed9dfc102a9d5b829ea282abb00c207537c056b6b683bc555855f1e->leave($__internal_33e4ceb9eed9dfc102a9d5b829ea282abb00c207537c056b6b683bc555855f1e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/core-js/system/global.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = { \"default\": require(\"core-js/library/fn/system/global\"), __esModule: true };", "node_modules/babel-runtime/core-js/system/global.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/core-js/system/global.js");
    }
}
