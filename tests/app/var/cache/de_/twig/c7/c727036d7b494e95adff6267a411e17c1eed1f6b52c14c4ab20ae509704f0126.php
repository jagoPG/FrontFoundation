<?php

/* node_modules/babel-runtime/regenerator/index.js */
class __TwigTemplate_4498748fcee1c6eea5903b6361e05a32b58d9e5b041da0b9066004ae27182af7 extends Twig_Template
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
        $__internal_ee8344962f4c396101c886a2be45c870f4c2e4d6e99c44e922064cf55e0b7d09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8344962f4c396101c886a2be45c870f4c2e4d6e99c44e922064cf55e0b7d09->enter($__internal_ee8344962f4c396101c886a2be45c870f4c2e4d6e99c44e922064cf55e0b7d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/regenerator/index.js"));

        // line 1
        echo "module.exports = require(\"regenerator-runtime\");
";
        
        $__internal_ee8344962f4c396101c886a2be45c870f4c2e4d6e99c44e922064cf55e0b7d09->leave($__internal_ee8344962f4c396101c886a2be45c870f4c2e4d6e99c44e922064cf55e0b7d09_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/regenerator/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"regenerator-runtime\");
", "node_modules/babel-runtime/regenerator/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/regenerator/index.js");
    }
}
