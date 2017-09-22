<?php

/* node_modules/core-js/library/fn/string/virtual/strike.js */
class __TwigTemplate_83935ca9474eb47085758eebc700250cc255e6ea36362f27e700ccdb46646abd extends Twig_Template
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
        $__internal_4075e04f956e5348e07c1415ef2cf9563974dcdfe7e9ab29dd5df6c3fe0297a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4075e04f956e5348e07c1415ef2cf9563974dcdfe7e9ab29dd5df6c3fe0297a6->enter($__internal_4075e04f956e5348e07c1415ef2cf9563974dcdfe7e9ab29dd5df6c3fe0297a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/virtual/strike.js"));

        // line 1
        echo "require('../../../modules/es6.string.strike');
module.exports = require('../../../modules/_entry-virtual')('String').strike;
";
        
        $__internal_4075e04f956e5348e07c1415ef2cf9563974dcdfe7e9ab29dd5df6c3fe0297a6->leave($__internal_4075e04f956e5348e07c1415ef2cf9563974dcdfe7e9ab29dd5df6c3fe0297a6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/virtual/strike.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.strike');
module.exports = require('../../../modules/_entry-virtual')('String').strike;
", "node_modules/core-js/library/fn/string/virtual/strike.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/virtual/strike.js");
    }
}
