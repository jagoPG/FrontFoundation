<?php

/* node_modules/babel-runtime/helpers/_defaults.js */
class __TwigTemplate_297f29c4d2248c2b3d4515d5fd76a8b12b0e4c9e56e5af346cc4d46b047ef18e extends Twig_Template
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
        $__internal_5e683890724605000706cd4a8751a17876da0fa8ee2c0c4839983ee900ce3b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e683890724605000706cd4a8751a17876da0fa8ee2c0c4839983ee900ce3b37->enter($__internal_5e683890724605000706cd4a8751a17876da0fa8ee2c0c4839983ee900ce3b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/_defaults.js"));

        // line 1
        echo "module.exports = require(\"./defaults.js\");";
        
        $__internal_5e683890724605000706cd4a8751a17876da0fa8ee2c0c4839983ee900ce3b37->leave($__internal_5e683890724605000706cd4a8751a17876da0fa8ee2c0c4839983ee900ce3b37_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/_defaults.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./defaults.js\");", "node_modules/babel-runtime/helpers/_defaults.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/_defaults.js");
    }
}
