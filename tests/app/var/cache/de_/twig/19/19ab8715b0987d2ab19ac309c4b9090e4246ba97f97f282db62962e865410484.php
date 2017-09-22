<?php

/* node_modules/core-js/fn/function/virtual/part.js */
class __TwigTemplate_c1667569a8cba9fa5e27e88fd69aa79ea23db900bedd952d250659a82508d3dc extends Twig_Template
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
        $__internal_4e2334a023f6e537774d8470bf6bc576d2118dd643be8fecf70e995c52a4ddcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e2334a023f6e537774d8470bf6bc576d2118dd643be8fecf70e995c52a4ddcc->enter($__internal_4e2334a023f6e537774d8470bf6bc576d2118dd643be8fecf70e995c52a4ddcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/function/virtual/part.js"));

        // line 1
        echo "require('../../../modules/core.function.part');
module.exports = require('../../../modules/_entry-virtual')('Function').part;
";
        
        $__internal_4e2334a023f6e537774d8470bf6bc576d2118dd643be8fecf70e995c52a4ddcc->leave($__internal_4e2334a023f6e537774d8470bf6bc576d2118dd643be8fecf70e995c52a4ddcc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/function/virtual/part.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/core.function.part');
module.exports = require('../../../modules/_entry-virtual')('Function').part;
", "node_modules/core-js/fn/function/virtual/part.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/function/virtual/part.js");
    }
}
