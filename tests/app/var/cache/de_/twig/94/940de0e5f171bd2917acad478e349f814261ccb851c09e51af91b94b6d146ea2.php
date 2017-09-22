<?php

/* node_modules/core-js/library/fn/string/virtual/includes.js */
class __TwigTemplate_7d42b14ab3fd2cd207ca35b6a5b0eeb4d75a644be01d0c18752e0dfd08903e22 extends Twig_Template
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
        $__internal_f492d28561dd53b36c355d955dc392d9ce9822c487f7dcf759d806aadfb4f88a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f492d28561dd53b36c355d955dc392d9ce9822c487f7dcf759d806aadfb4f88a->enter($__internal_f492d28561dd53b36c355d955dc392d9ce9822c487f7dcf759d806aadfb4f88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/virtual/includes.js"));

        // line 1
        echo "require('../../../modules/es6.string.includes');
module.exports = require('../../../modules/_entry-virtual')('String').includes;
";
        
        $__internal_f492d28561dd53b36c355d955dc392d9ce9822c487f7dcf759d806aadfb4f88a->leave($__internal_f492d28561dd53b36c355d955dc392d9ce9822c487f7dcf759d806aadfb4f88a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/virtual/includes.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.includes');
module.exports = require('../../../modules/_entry-virtual')('String').includes;
", "node_modules/core-js/library/fn/string/virtual/includes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/virtual/includes.js");
    }
}
