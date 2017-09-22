<?php

/* node_modules/create-hash/index.js */
class __TwigTemplate_9d5babe39090ced43320a6d36693af4d542f8affa450e8abf11b48d1112b84da extends Twig_Template
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
        $__internal_fa0dc6341cef3073d692d7991860aad53172cac699ce44e47f590e333617341f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0dc6341cef3073d692d7991860aad53172cac699ce44e47f590e333617341f->enter($__internal_fa0dc6341cef3073d692d7991860aad53172cac699ce44e47f590e333617341f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/create-hash/index.js"));

        // line 1
        echo "module.exports = require('crypto').createHash
";
        
        $__internal_fa0dc6341cef3073d692d7991860aad53172cac699ce44e47f590e333617341f->leave($__internal_fa0dc6341cef3073d692d7991860aad53172cac699ce44e47f590e333617341f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/create-hash/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require('crypto').createHash
", "node_modules/create-hash/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/create-hash/index.js");
    }
}
