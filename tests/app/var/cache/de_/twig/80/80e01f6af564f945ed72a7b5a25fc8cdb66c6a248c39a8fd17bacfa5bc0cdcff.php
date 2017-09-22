<?php

/* node_modules/core-js/fn/symbol/for.js */
class __TwigTemplate_7ac3ef4d118c57d9b5544968546ad53aef1127cdf8903f38564f9b34e8ac6bac extends Twig_Template
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
        $__internal_687750fc61887d89b02391544718fc19084c3a4931d2954962fe45001b5153ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_687750fc61887d89b02391544718fc19084c3a4931d2954962fe45001b5153ae->enter($__internal_687750fc61887d89b02391544718fc19084c3a4931d2954962fe45001b5153ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/symbol/for.js"));

        // line 1
        echo "require('../../modules/es6.symbol');
module.exports = require('../../modules/_core').Symbol['for'];
";
        
        $__internal_687750fc61887d89b02391544718fc19084c3a4931d2954962fe45001b5153ae->leave($__internal_687750fc61887d89b02391544718fc19084c3a4931d2954962fe45001b5153ae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/symbol/for.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.symbol');
module.exports = require('../../modules/_core').Symbol['for'];
", "node_modules/core-js/fn/symbol/for.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/symbol/for.js");
    }
}
