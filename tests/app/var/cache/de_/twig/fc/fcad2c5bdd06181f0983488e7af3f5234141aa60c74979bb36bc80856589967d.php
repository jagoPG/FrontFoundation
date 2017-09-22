<?php

/* node_modules/create-ecdh/index.js */
class __TwigTemplate_8e60ac439d6367c726cd6e4cacf0c9a0f9f70d92318b6b262148bbac0cc18124 extends Twig_Template
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
        $__internal_fe931043f06863aaa3eed258369c70a2c90c866351780deee8a74aad44e762bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe931043f06863aaa3eed258369c70a2c90c866351780deee8a74aad44e762bb->enter($__internal_fe931043f06863aaa3eed258369c70a2c90c866351780deee8a74aad44e762bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/create-ecdh/index.js"));

        // line 1
        echo "var createECDH = require('crypto').createECDH;

module.exports = createECDH || require('./browser');";
        
        $__internal_fe931043f06863aaa3eed258369c70a2c90c866351780deee8a74aad44e762bb->leave($__internal_fe931043f06863aaa3eed258369c70a2c90c866351780deee8a74aad44e762bb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/create-ecdh/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createECDH = require('crypto').createECDH;

module.exports = createECDH || require('./browser');", "node_modules/create-ecdh/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/create-ecdh/index.js");
    }
}
