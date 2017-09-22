<?php

/* node_modules/babel-runtime/helpers/_get.js */
class __TwigTemplate_19977fb62034c1d647f8f38cd84ae904322357b0d5ac77bf29d4725fc7caa5ce extends Twig_Template
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
        $__internal_a8a03244e99afcb186a49773e66cd0d6b10df2df17e549b1ea01930981a6bb06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a03244e99afcb186a49773e66cd0d6b10df2df17e549b1ea01930981a6bb06->enter($__internal_a8a03244e99afcb186a49773e66cd0d6b10df2df17e549b1ea01930981a6bb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/_get.js"));

        // line 1
        echo "module.exports = require(\"./get.js\");";
        
        $__internal_a8a03244e99afcb186a49773e66cd0d6b10df2df17e549b1ea01930981a6bb06->leave($__internal_a8a03244e99afcb186a49773e66cd0d6b10df2df17e549b1ea01930981a6bb06_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/_get.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./get.js\");", "node_modules/babel-runtime/helpers/_get.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/_get.js");
    }
}
