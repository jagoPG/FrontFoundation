<?php

/* node_modules/core-js/es6/parse-int.js */
class __TwigTemplate_f362c1b54824acb1a2fabed90ba5550652290c2f53186697a7eec2d22909ff1a extends Twig_Template
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
        $__internal_dac7a100b4fe30cfb349f179183f73dd9eb680648591e3cd48af8a9d8ba0eacf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac7a100b4fe30cfb349f179183f73dd9eb680648591e3cd48af8a9d8ba0eacf->enter($__internal_dac7a100b4fe30cfb349f179183f73dd9eb680648591e3cd48af8a9d8ba0eacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/es6/parse-int.js"));

        // line 1
        echo "require('../modules/es6.parse-int');
module.exports = require('../modules/_core').parseInt;
";
        
        $__internal_dac7a100b4fe30cfb349f179183f73dd9eb680648591e3cd48af8a9d8ba0eacf->leave($__internal_dac7a100b4fe30cfb349f179183f73dd9eb680648591e3cd48af8a9d8ba0eacf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/es6/parse-int.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es6.parse-int');
module.exports = require('../modules/_core').parseInt;
", "node_modules/core-js/es6/parse-int.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/es6/parse-int.js");
    }
}
