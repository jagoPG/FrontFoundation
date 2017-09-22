<?php

/* node_modules/core-js/fn/reflect/own-keys.js */
class __TwigTemplate_58f9f2bbc86ac4a3e54049bc8e7192c6a54a25b27f7dd92b37e5f5a30911e5a1 extends Twig_Template
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
        $__internal_f87c58fb745103cc8467df895a567043e872b9055e6d8995f334ca0fd1c75d41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f87c58fb745103cc8467df895a567043e872b9055e6d8995f334ca0fd1c75d41->enter($__internal_f87c58fb745103cc8467df895a567043e872b9055e6d8995f334ca0fd1c75d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/reflect/own-keys.js"));

        // line 1
        echo "require('../../modules/es6.reflect.own-keys');
module.exports = require('../../modules/_core').Reflect.ownKeys;
";
        
        $__internal_f87c58fb745103cc8467df895a567043e872b9055e6d8995f334ca0fd1c75d41->leave($__internal_f87c58fb745103cc8467df895a567043e872b9055e6d8995f334ca0fd1c75d41_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/reflect/own-keys.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.reflect.own-keys');
module.exports = require('../../modules/_core').Reflect.ownKeys;
", "node_modules/core-js/fn/reflect/own-keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/reflect/own-keys.js");
    }
}
