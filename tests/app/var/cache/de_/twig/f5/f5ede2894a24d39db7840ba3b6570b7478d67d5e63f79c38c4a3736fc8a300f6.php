<?php

/* node_modules/public-encrypt/index.js */
class __TwigTemplate_c756b3c82615773296171a3768dc9f51d089587273fd93c263bfcfa4f5023bf5 extends Twig_Template
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
        $__internal_2bb159db2fc40dea85f99086e561942b1845da52310be7f33f1a3cf262f26467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb159db2fc40dea85f99086e561942b1845da52310be7f33f1a3cf262f26467->enter($__internal_2bb159db2fc40dea85f99086e561942b1845da52310be7f33f1a3cf262f26467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/public-encrypt/index.js"));

        // line 1
        echo "var crypto = require('crypto');
if (typeof crypto.publicEncrypt !== 'function') {
  crypto = require('./browser');
}
exports.publicEncrypt = crypto.publicEncrypt;
exports.privateDecrypt = crypto.privateDecrypt;

if (typeof crypto.privateEncrypt !== 'function') {
  exports.privateEncrypt = require('./browser').privateEncrypt;
} else {
  exports.privateEncrypt = crypto.privateEncrypt;
}

if (typeof crypto.publicDecrypt !== 'function') {
  exports.publicDecrypt = require('./browser').publicDecrypt;
} else {
  exports.publicDecrypt = crypto.publicDecrypt;
}";
        
        $__internal_2bb159db2fc40dea85f99086e561942b1845da52310be7f33f1a3cf262f26467->leave($__internal_2bb159db2fc40dea85f99086e561942b1845da52310be7f33f1a3cf262f26467_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/public-encrypt/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var crypto = require('crypto');
if (typeof crypto.publicEncrypt !== 'function') {
  crypto = require('./browser');
}
exports.publicEncrypt = crypto.publicEncrypt;
exports.privateDecrypt = crypto.privateDecrypt;

if (typeof crypto.privateEncrypt !== 'function') {
  exports.privateEncrypt = require('./browser').privateEncrypt;
} else {
  exports.privateEncrypt = crypto.privateEncrypt;
}

if (typeof crypto.publicDecrypt !== 'function') {
  exports.publicDecrypt = require('./browser').publicDecrypt;
} else {
  exports.publicDecrypt = crypto.publicDecrypt;
}", "node_modules/public-encrypt/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/public-encrypt/index.js");
    }
}
