<?php

/* node_modules/babel-runtime/core-js/symbol.js */
class __TwigTemplate_c2d476bc34f374796f28764e30835ea85b933b8854deb70c18da73368b0024cd extends Twig_Template
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
        $__internal_f85eaa497a23aaf01609d3deb5ef295d08a25ada0e093acf46e677ba51393310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f85eaa497a23aaf01609d3deb5ef295d08a25ada0e093acf46e677ba51393310->enter($__internal_f85eaa497a23aaf01609d3deb5ef295d08a25ada0e093acf46e677ba51393310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/core-js/symbol.js"));

        // line 1
        echo "module.exports = { \"default\": require(\"core-js/library/fn/symbol\"), __esModule: true };";
        
        $__internal_f85eaa497a23aaf01609d3deb5ef295d08a25ada0e093acf46e677ba51393310->leave($__internal_f85eaa497a23aaf01609d3deb5ef295d08a25ada0e093acf46e677ba51393310_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/core-js/symbol.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = { \"default\": require(\"core-js/library/fn/symbol\"), __esModule: true };", "node_modules/babel-runtime/core-js/symbol.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/core-js/symbol.js");
    }
}
