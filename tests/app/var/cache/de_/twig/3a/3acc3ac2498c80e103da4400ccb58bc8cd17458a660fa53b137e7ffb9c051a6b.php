<?php

/* node_modules/core-js/library/fn/string/trim.js */
class __TwigTemplate_ea2a0c8c1500ec43d419f7b728cb8c68fcd0ccda0ab1a252d6c8b8cff1432625 extends Twig_Template
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
        $__internal_55d8039fa31a9fbbd6f15dd7112daa78a522a24479f88cc550f413593feb2489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d8039fa31a9fbbd6f15dd7112daa78a522a24479f88cc550f413593feb2489->enter($__internal_55d8039fa31a9fbbd6f15dd7112daa78a522a24479f88cc550f413593feb2489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/trim.js"));

        // line 1
        echo "require('../../modules/es6.string.trim');
module.exports = require('../../modules/_core').String.trim;
";
        
        $__internal_55d8039fa31a9fbbd6f15dd7112daa78a522a24479f88cc550f413593feb2489->leave($__internal_55d8039fa31a9fbbd6f15dd7112daa78a522a24479f88cc550f413593feb2489_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/trim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.trim');
module.exports = require('../../modules/_core').String.trim;
", "node_modules/core-js/library/fn/string/trim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/trim.js");
    }
}
