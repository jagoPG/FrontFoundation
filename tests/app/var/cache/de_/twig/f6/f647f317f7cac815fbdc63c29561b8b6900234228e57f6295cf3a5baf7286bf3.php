<?php

/* node_modules/browserify-aes/index.js */
class __TwigTemplate_1f80d47afee5330a38e9673fff43e337ca16a17c05755bdbfa2474a1ce8a4365 extends Twig_Template
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
        $__internal_a9a3ef86f6b9bcc4f92dfe13a16737bf36b191dc124cad757158e1c65fd4ab61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9a3ef86f6b9bcc4f92dfe13a16737bf36b191dc124cad757158e1c65fd4ab61->enter($__internal_a9a3ef86f6b9bcc4f92dfe13a16737bf36b191dc124cad757158e1c65fd4ab61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/browserify-aes/index.js"));

        // line 1
        echo "var crypto = require('crypto')

exports.createCipher = exports.Cipher = crypto.createCipher
exports.createCipheriv = exports.Cipheriv = crypto.createCipheriv
exports.createDecipher = exports.Decipher = crypto.createDecipher
exports.createDecipheriv = exports.Decipheriv = crypto.createDecipheriv
exports.listCiphers = exports.getCiphers = crypto.getCiphers
";
        
        $__internal_a9a3ef86f6b9bcc4f92dfe13a16737bf36b191dc124cad757158e1c65fd4ab61->leave($__internal_a9a3ef86f6b9bcc4f92dfe13a16737bf36b191dc124cad757158e1c65fd4ab61_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/browserify-aes/index.js";
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
", "node_modules/browserify-aes/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/browserify-aes/index.js");
    }
}
