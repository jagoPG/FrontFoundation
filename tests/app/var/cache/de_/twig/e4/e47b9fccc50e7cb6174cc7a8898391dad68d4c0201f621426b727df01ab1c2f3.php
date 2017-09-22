<?php

/* node_modules/browserify-sign/index.js */
class __TwigTemplate_978d9d0330c19f448410d5f5e861d9ecfbc09f6e2b6f3ca83ce644927a09ed79 extends Twig_Template
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
        $__internal_5e3c7ca04a87d2c9e59c7b4530ee7919071d528c37ba30765a9a94d89c76b3a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3c7ca04a87d2c9e59c7b4530ee7919071d528c37ba30765a9a94d89c76b3a0->enter($__internal_5e3c7ca04a87d2c9e59c7b4530ee7919071d528c37ba30765a9a94d89c76b3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/browserify-sign/index.js"));

        // line 1
        echo "var crypto = require('crypto')

exports.createSign = crypto.createSign
exports.Sign = crypto.Sign

exports.createVerify = crypto.createVerify
exports.Verify = crypto.Verify
";
        
        $__internal_5e3c7ca04a87d2c9e59c7b4530ee7919071d528c37ba30765a9a94d89c76b3a0->leave($__internal_5e3c7ca04a87d2c9e59c7b4530ee7919071d528c37ba30765a9a94d89c76b3a0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/browserify-sign/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var crypto = require('crypto')

exports.createSign = crypto.createSign
exports.Sign = crypto.Sign

exports.createVerify = crypto.createVerify
exports.Verify = crypto.Verify
", "node_modules/browserify-sign/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/browserify-sign/index.js");
    }
}
