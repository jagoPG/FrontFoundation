<?php

/* node_modules/core-js/library/fn/array/virtual/includes.js */
class __TwigTemplate_5a2e5871d89734898b06f9a03363513b99850f031c0e3b4308a4f46c496cffef extends Twig_Template
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
        $__internal_cfe9f85c45fcec606872beb18d63fc9f9297bb3bf14b2eb443ff12f2b061d379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe9f85c45fcec606872beb18d63fc9f9297bb3bf14b2eb443ff12f2b061d379->enter($__internal_cfe9f85c45fcec606872beb18d63fc9f9297bb3bf14b2eb443ff12f2b061d379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/virtual/includes.js"));

        // line 1
        echo "require('../../../modules/es7.array.includes');
module.exports = require('../../../modules/_entry-virtual')('Array').includes;
";
        
        $__internal_cfe9f85c45fcec606872beb18d63fc9f9297bb3bf14b2eb443ff12f2b061d379->leave($__internal_cfe9f85c45fcec606872beb18d63fc9f9297bb3bf14b2eb443ff12f2b061d379_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/virtual/includes.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es7.array.includes');
module.exports = require('../../../modules/_entry-virtual')('Array').includes;
", "node_modules/core-js/library/fn/array/virtual/includes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/virtual/includes.js");
    }
}