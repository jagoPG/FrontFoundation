<?php

/* node_modules/babel-runtime/helpers/_jsx.js */
class __TwigTemplate_8b8069483b3a33cdcfd191f047655b70486e0bb2b6ab031d60a699ab9dacaa3d extends Twig_Template
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
        $__internal_711f49bfeee8ea9f877c82be7e065ee6828975a6ffeaa0b0dfc66fa5371a8ac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_711f49bfeee8ea9f877c82be7e065ee6828975a6ffeaa0b0dfc66fa5371a8ac8->enter($__internal_711f49bfeee8ea9f877c82be7e065ee6828975a6ffeaa0b0dfc66fa5371a8ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/_jsx.js"));

        // line 1
        echo "module.exports = require(\"./jsx.js\");";
        
        $__internal_711f49bfeee8ea9f877c82be7e065ee6828975a6ffeaa0b0dfc66fa5371a8ac8->leave($__internal_711f49bfeee8ea9f877c82be7e065ee6828975a6ffeaa0b0dfc66fa5371a8ac8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/_jsx.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./jsx.js\");", "node_modules/babel-runtime/helpers/_jsx.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/_jsx.js");
    }
}
