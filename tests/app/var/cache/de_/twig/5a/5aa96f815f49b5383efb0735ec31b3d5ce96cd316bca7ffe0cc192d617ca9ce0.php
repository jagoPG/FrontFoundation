<?php

/* node_modules/babel-runtime/helpers/new-arrow-check.js */
class __TwigTemplate_3a73de62a3e3b0970cb6bafe476d53c6f2a6eea21ffe68dddaf40da03c6aa5a8 extends Twig_Template
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
        $__internal_89eb1fa208fa07c1a6873795c631bbeef6a7149c39d450d3999be1b1f89398bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89eb1fa208fa07c1a6873795c631bbeef6a7149c39d450d3999be1b1f89398bb->enter($__internal_89eb1fa208fa07c1a6873795c631bbeef6a7149c39d450d3999be1b1f89398bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/new-arrow-check.js"));

        // line 1
        echo "module.exports = require(\"./newArrowCheck.js\");";
        
        $__internal_89eb1fa208fa07c1a6873795c631bbeef6a7149c39d450d3999be1b1f89398bb->leave($__internal_89eb1fa208fa07c1a6873795c631bbeef6a7149c39d450d3999be1b1f89398bb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/new-arrow-check.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./newArrowCheck.js\");", "node_modules/babel-runtime/helpers/new-arrow-check.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/new-arrow-check.js");
    }
}
