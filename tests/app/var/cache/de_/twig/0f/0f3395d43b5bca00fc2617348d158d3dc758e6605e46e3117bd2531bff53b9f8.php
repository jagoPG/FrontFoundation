<?php

/* node_modules/browserify-aes/browser.js */
class __TwigTemplate_162e5e1929dacefef3e686bb1269656b6ab0cc567fdfb8bb3cdd7b95aef817e6 extends Twig_Template
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
        $__internal_316feafb0538b368f71bf05a09e708b06119901cfcf665bd50e461b38f28458e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_316feafb0538b368f71bf05a09e708b06119901cfcf665bd50e461b38f28458e->enter($__internal_316feafb0538b368f71bf05a09e708b06119901cfcf665bd50e461b38f28458e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/browserify-aes/browser.js"));

        // line 1
        echo "var ciphers = require('./encrypter')
var deciphers = require('./decrypter')
var modes = require('./modes/list.json')

function getCiphers () {
  return Object.keys(modes)
}

exports.createCipher = exports.Cipher = ciphers.createCipher
exports.createCipheriv = exports.Cipheriv = ciphers.createCipheriv
exports.createDecipher = exports.Decipher = deciphers.createDecipher
exports.createDecipheriv = exports.Decipheriv = deciphers.createDecipheriv
exports.listCiphers = exports.getCiphers = getCiphers
";
        
        $__internal_316feafb0538b368f71bf05a09e708b06119901cfcf665bd50e461b38f28458e->leave($__internal_316feafb0538b368f71bf05a09e708b06119901cfcf665bd50e461b38f28458e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/browserify-aes/browser.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var ciphers = require('./encrypter')
var deciphers = require('./decrypter')
var modes = require('./modes/list.json')

function getCiphers () {
  return Object.keys(modes)
}

exports.createCipher = exports.Cipher = ciphers.createCipher
exports.createCipheriv = exports.Cipheriv = ciphers.createCipheriv
exports.createDecipher = exports.Decipher = deciphers.createDecipher
exports.createDecipheriv = exports.Decipheriv = deciphers.createDecipheriv
exports.listCiphers = exports.getCiphers = getCiphers
", "node_modules/browserify-aes/browser.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/browserify-aes/browser.js");
    }
}
