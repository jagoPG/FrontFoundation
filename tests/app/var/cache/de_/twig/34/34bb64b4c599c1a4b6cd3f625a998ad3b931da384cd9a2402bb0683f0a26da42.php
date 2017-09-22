<?php

/* node_modules/core-js/fn/reflect/is-extensible.js */
class __TwigTemplate_a9bf3f6657a34af89c48767f8fee12348eeee68ea5f1cb298ba2b5296120a839 extends Twig_Template
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
        $__internal_add10a85aea1e953b0432037a2530ab5607359a2b04bf4a7ca2a2641f55c068b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add10a85aea1e953b0432037a2530ab5607359a2b04bf4a7ca2a2641f55c068b->enter($__internal_add10a85aea1e953b0432037a2530ab5607359a2b04bf4a7ca2a2641f55c068b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/reflect/is-extensible.js"));

        // line 1
        echo "require('../../modules/es6.reflect.is-extensible');
module.exports = require('../../modules/_core').Reflect.isExtensible;
";
        
        $__internal_add10a85aea1e953b0432037a2530ab5607359a2b04bf4a7ca2a2641f55c068b->leave($__internal_add10a85aea1e953b0432037a2530ab5607359a2b04bf4a7ca2a2641f55c068b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/reflect/is-extensible.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.reflect.is-extensible');
module.exports = require('../../modules/_core').Reflect.isExtensible;
", "node_modules/core-js/fn/reflect/is-extensible.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/reflect/is-extensible.js");
    }
}
