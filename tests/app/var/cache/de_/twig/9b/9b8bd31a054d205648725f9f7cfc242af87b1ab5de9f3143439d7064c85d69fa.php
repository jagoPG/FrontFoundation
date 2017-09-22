<?php

/* node_modules/core-js/library/fn/string/small.js */
class __TwigTemplate_646619c3fb8937266e6674b4a6476ee2f87f35b1049c26073781241dd23905cd extends Twig_Template
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
        $__internal_071db294ca02f5f2591f36ffcb00fe452beacffa7ed74f6c3c94513ba2af747d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_071db294ca02f5f2591f36ffcb00fe452beacffa7ed74f6c3c94513ba2af747d->enter($__internal_071db294ca02f5f2591f36ffcb00fe452beacffa7ed74f6c3c94513ba2af747d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/small.js"));

        // line 1
        echo "require('../../modules/es6.string.small');
module.exports = require('../../modules/_core').String.small;
";
        
        $__internal_071db294ca02f5f2591f36ffcb00fe452beacffa7ed74f6c3c94513ba2af747d->leave($__internal_071db294ca02f5f2591f36ffcb00fe452beacffa7ed74f6c3c94513ba2af747d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/small.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.small');
module.exports = require('../../modules/_core').String.small;
", "node_modules/core-js/library/fn/string/small.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/small.js");
    }
}
