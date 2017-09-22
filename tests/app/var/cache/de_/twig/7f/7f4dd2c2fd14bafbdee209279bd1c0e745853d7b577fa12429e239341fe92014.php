<?php

/* node_modules/randombytes/index.js */
class __TwigTemplate_d84bf2e468e92ef1802fbae89d0c1c81c7e5b7da607c70a6389b7ea41b9fd60a extends Twig_Template
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
        $__internal_46b505f2524385cae9fdaa40ba5134b0ac94ca599ad58c804672269ff133bae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b505f2524385cae9fdaa40ba5134b0ac94ca599ad58c804672269ff133bae5->enter($__internal_46b505f2524385cae9fdaa40ba5134b0ac94ca599ad58c804672269ff133bae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/randombytes/index.js"));

        // line 1
        echo "module.exports = require('crypto').randomBytes
";
        
        $__internal_46b505f2524385cae9fdaa40ba5134b0ac94ca599ad58c804672269ff133bae5->leave($__internal_46b505f2524385cae9fdaa40ba5134b0ac94ca599ad58c804672269ff133bae5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/randombytes/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require('crypto').randomBytes
", "node_modules/randombytes/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/randombytes/index.js");
    }
}
