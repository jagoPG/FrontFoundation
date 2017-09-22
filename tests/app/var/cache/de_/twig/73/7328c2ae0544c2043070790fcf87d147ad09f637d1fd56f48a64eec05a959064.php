<?php

/* node_modules/browserify-cipher/index.js */
class __TwigTemplate_5d5c6d2dd327af2351aae73bd9ca5e66479f87fbeb421d1428e7e443a2d873ef extends Twig_Template
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
        $__internal_6d9d4e8fba50d9f36d8fba610c3544d3738dbbd491aa45d955a8904094bfd376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9d4e8fba50d9f36d8fba610c3544d3738dbbd491aa45d955a8904094bfd376->enter($__internal_6d9d4e8fba50d9f36d8fba610c3544d3738dbbd491aa45d955a8904094bfd376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/browserify-cipher/index.js"));

        // line 1
        echo "var crypto = require('crypto')

exports.createCipher = exports.Cipher = crypto.createCipher
exports.createCipheriv = exports.Cipheriv = crypto.createCipheriv
exports.createDecipher = exports.Decipher = crypto.createDecipher
exports.createDecipheriv = exports.Decipheriv = crypto.createDecipheriv
exports.listCiphers = exports.getCiphers = crypto.getCiphers
";
        
        $__internal_6d9d4e8fba50d9f36d8fba610c3544d3738dbbd491aa45d955a8904094bfd376->leave($__internal_6d9d4e8fba50d9f36d8fba610c3544d3738dbbd491aa45d955a8904094bfd376_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/browserify-cipher/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var crypto = require('crypto')

exports.createCipher = exports.Cipher = crypto.createCipher
exports.createCipheriv = exports.Cipheriv = crypto.createCipheriv
exports.createDecipher = exports.Decipher = crypto.createDecipher
exports.createDecipheriv = exports.Decipheriv = crypto.createDecipheriv
exports.listCiphers = exports.getCiphers = crypto.getCiphers
", "node_modules/browserify-cipher/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/browserify-cipher/index.js");
    }
}
