<?php

/* node_modules/os-browserify/main.js */
class __TwigTemplate_489024734fd962043c4f1e717c1e76483f3a9fb03c757803df3961fe6480c47b extends Twig_Template
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
        $__internal_4d806014c7d87c161f0cceabaf9de850f6ede454851768eb5edcb4878fb365bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d806014c7d87c161f0cceabaf9de850f6ede454851768eb5edcb4878fb365bc->enter($__internal_4d806014c7d87c161f0cceabaf9de850f6ede454851768eb5edcb4878fb365bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/os-browserify/main.js"));

        // line 1
        echo "module.exports = require('os');
";
        
        $__internal_4d806014c7d87c161f0cceabaf9de850f6ede454851768eb5edcb4878fb365bc->leave($__internal_4d806014c7d87c161f0cceabaf9de850f6ede454851768eb5edcb4878fb365bc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/os-browserify/main.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require('os');
", "node_modules/os-browserify/main.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/os-browserify/main.js");
    }
}
