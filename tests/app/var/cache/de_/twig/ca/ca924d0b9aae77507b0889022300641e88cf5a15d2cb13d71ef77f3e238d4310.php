<?php

/* node_modules/core-js/library/fn/reflect/get-prototype-of.js */
class __TwigTemplate_cd58837775c1f8f51c0025318bb5e63050bea7ea34542d6fac2cbf06a546e4ba extends Twig_Template
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
        $__internal_c8a2b029af195b9bd242249707aa91159d519a1b4d6d06cf3a112829d351daf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a2b029af195b9bd242249707aa91159d519a1b4d6d06cf3a112829d351daf8->enter($__internal_c8a2b029af195b9bd242249707aa91159d519a1b4d6d06cf3a112829d351daf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/reflect/get-prototype-of.js"));

        // line 1
        echo "require('../../modules/es6.reflect.get-prototype-of');
module.exports = require('../../modules/_core').Reflect.getPrototypeOf;
";
        
        $__internal_c8a2b029af195b9bd242249707aa91159d519a1b4d6d06cf3a112829d351daf8->leave($__internal_c8a2b029af195b9bd242249707aa91159d519a1b4d6d06cf3a112829d351daf8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/reflect/get-prototype-of.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.reflect.get-prototype-of');
module.exports = require('../../modules/_core').Reflect.getPrototypeOf;
", "node_modules/core-js/library/fn/reflect/get-prototype-of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/reflect/get-prototype-of.js");
    }
}
