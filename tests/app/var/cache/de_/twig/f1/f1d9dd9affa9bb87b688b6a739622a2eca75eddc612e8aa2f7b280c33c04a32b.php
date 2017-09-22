<?php

/* node_modules/babel-runtime/core-js/string/raw.js */
class __TwigTemplate_7895ae6c381831b975ffa79f44892bf0862047ed81d2d1f71a76bd8728ab9daf extends Twig_Template
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
        $__internal_bea2f7d361db0bfa92073ac399652dbe03f0bc10a86d07fcf1d6e1801c19ab4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea2f7d361db0bfa92073ac399652dbe03f0bc10a86d07fcf1d6e1801c19ab4d->enter($__internal_bea2f7d361db0bfa92073ac399652dbe03f0bc10a86d07fcf1d6e1801c19ab4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/core-js/string/raw.js"));

        // line 1
        echo "module.exports = { \"default\": require(\"core-js/library/fn/string/raw\"), __esModule: true };";
        
        $__internal_bea2f7d361db0bfa92073ac399652dbe03f0bc10a86d07fcf1d6e1801c19ab4d->leave($__internal_bea2f7d361db0bfa92073ac399652dbe03f0bc10a86d07fcf1d6e1801c19ab4d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/core-js/string/raw.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = { \"default\": require(\"core-js/library/fn/string/raw\"), __esModule: true };", "node_modules/babel-runtime/core-js/string/raw.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/core-js/string/raw.js");
    }
}
