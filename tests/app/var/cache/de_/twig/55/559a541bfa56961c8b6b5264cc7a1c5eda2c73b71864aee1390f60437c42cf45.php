<?php

/* node_modules/core-js/fn/reflect/apply.js */
class __TwigTemplate_c5f4ba6aad3604f3bcd96b2d9e80aa6f5cea191d59c75768155136eef8b2afe5 extends Twig_Template
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
        $__internal_b92c2c60670cab20583e2c8b5c5d34801673898db674a40174a9425d4ecfa8e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92c2c60670cab20583e2c8b5c5d34801673898db674a40174a9425d4ecfa8e0->enter($__internal_b92c2c60670cab20583e2c8b5c5d34801673898db674a40174a9425d4ecfa8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/reflect/apply.js"));

        // line 1
        echo "require('../../modules/es6.reflect.apply');
module.exports = require('../../modules/_core').Reflect.apply;
";
        
        $__internal_b92c2c60670cab20583e2c8b5c5d34801673898db674a40174a9425d4ecfa8e0->leave($__internal_b92c2c60670cab20583e2c8b5c5d34801673898db674a40174a9425d4ecfa8e0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/reflect/apply.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.reflect.apply');
module.exports = require('../../modules/_core').Reflect.apply;
", "node_modules/core-js/fn/reflect/apply.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/reflect/apply.js");
    }
}
