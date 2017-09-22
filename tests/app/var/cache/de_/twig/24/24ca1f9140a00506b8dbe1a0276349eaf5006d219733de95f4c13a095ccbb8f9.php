<?php

/* node_modules/core-js/library/fn/array/virtual/filter.js */
class __TwigTemplate_f6b04c3b96765dfc6fe8e07af405213349ca14690426ff72560c5b5f86faa4ef extends Twig_Template
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
        $__internal_1a1d10ce70e84d4a39492fb204caa2da609dd1e5e84e228494db1f5ed9e2c00f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a1d10ce70e84d4a39492fb204caa2da609dd1e5e84e228494db1f5ed9e2c00f->enter($__internal_1a1d10ce70e84d4a39492fb204caa2da609dd1e5e84e228494db1f5ed9e2c00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/virtual/filter.js"));

        // line 1
        echo "require('../../../modules/es6.array.filter');
module.exports = require('../../../modules/_entry-virtual')('Array').filter;
";
        
        $__internal_1a1d10ce70e84d4a39492fb204caa2da609dd1e5e84e228494db1f5ed9e2c00f->leave($__internal_1a1d10ce70e84d4a39492fb204caa2da609dd1e5e84e228494db1f5ed9e2c00f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/virtual/filter.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.array.filter');
module.exports = require('../../../modules/_entry-virtual')('Array').filter;
", "node_modules/core-js/library/fn/array/virtual/filter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/virtual/filter.js");
    }
}
