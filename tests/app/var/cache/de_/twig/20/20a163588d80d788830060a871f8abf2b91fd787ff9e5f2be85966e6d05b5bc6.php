<?php

/* node_modules/core-js/library/fn/array/virtual/reduce.js */
class __TwigTemplate_9b58ce7bb4b8d6d18929823cd61b7f547ad046fcd5b6c6fa690082a332a6950c extends Twig_Template
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
        $__internal_20744b354c18447d8fdd761ac15aebce36de46781f884a39350bc9df06ee923f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20744b354c18447d8fdd761ac15aebce36de46781f884a39350bc9df06ee923f->enter($__internal_20744b354c18447d8fdd761ac15aebce36de46781f884a39350bc9df06ee923f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/virtual/reduce.js"));

        // line 1
        echo "require('../../../modules/es6.array.reduce');
module.exports = require('../../../modules/_entry-virtual')('Array').reduce;
";
        
        $__internal_20744b354c18447d8fdd761ac15aebce36de46781f884a39350bc9df06ee923f->leave($__internal_20744b354c18447d8fdd761ac15aebce36de46781f884a39350bc9df06ee923f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/virtual/reduce.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.array.reduce');
module.exports = require('../../../modules/_entry-virtual')('Array').reduce;
", "node_modules/core-js/library/fn/array/virtual/reduce.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/virtual/reduce.js");
    }
}
