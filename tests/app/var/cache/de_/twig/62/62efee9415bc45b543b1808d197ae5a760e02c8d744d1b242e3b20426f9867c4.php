<?php

/* node_modules/core-js/fn/symbol/key-for.js */
class __TwigTemplate_261c8aa572ab32fc4cd5a9bb6add1141245aaeaf3c350288e1bf60c769a86948 extends Twig_Template
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
        $__internal_a046a00d631fe050cf34d453f111bbebda2270cb8ffa363082f98c0ea41bc5d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a046a00d631fe050cf34d453f111bbebda2270cb8ffa363082f98c0ea41bc5d5->enter($__internal_a046a00d631fe050cf34d453f111bbebda2270cb8ffa363082f98c0ea41bc5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/symbol/key-for.js"));

        // line 1
        echo "require('../../modules/es6.symbol');
module.exports = require('../../modules/_core').Symbol.keyFor;
";
        
        $__internal_a046a00d631fe050cf34d453f111bbebda2270cb8ffa363082f98c0ea41bc5d5->leave($__internal_a046a00d631fe050cf34d453f111bbebda2270cb8ffa363082f98c0ea41bc5d5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/symbol/key-for.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.symbol');
module.exports = require('../../modules/_core').Symbol.keyFor;
", "node_modules/core-js/fn/symbol/key-for.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/symbol/key-for.js");
    }
}
