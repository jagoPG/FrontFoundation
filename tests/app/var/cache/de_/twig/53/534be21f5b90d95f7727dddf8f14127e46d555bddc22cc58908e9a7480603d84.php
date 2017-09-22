<?php

/* node_modules/asn1/lib/index.js */
class __TwigTemplate_37081870bcc404b37cd963c2fdf6f1045c326aed7b14d9d7b94e04d6eec82b2a extends Twig_Template
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
        $__internal_6fb00b0c90ca28c4dee0eff5f3ec25092cd8863b642cd85dc3cce94184be938d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb00b0c90ca28c4dee0eff5f3ec25092cd8863b642cd85dc3cce94184be938d->enter($__internal_6fb00b0c90ca28c4dee0eff5f3ec25092cd8863b642cd85dc3cce94184be938d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/asn1/lib/index.js"));

        // line 1
        echo "// Copyright 2011 Mark Cavage <mcavage@gmail.com> All rights reserved.

// If you have no idea what ASN.1 or BER is, see this:
// ftp://ftp.rsa.com/pub/pkcs/ascii/layman.asc

var Ber = require('./ber/index');



///--- Exported API

module.exports = {

  Ber: Ber,

  BerReader: Ber.Reader,

  BerWriter: Ber.Writer

};
";
        
        $__internal_6fb00b0c90ca28c4dee0eff5f3ec25092cd8863b642cd85dc3cce94184be938d->leave($__internal_6fb00b0c90ca28c4dee0eff5f3ec25092cd8863b642cd85dc3cce94184be938d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/asn1/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Copyright 2011 Mark Cavage <mcavage@gmail.com> All rights reserved.

// If you have no idea what ASN.1 or BER is, see this:
// ftp://ftp.rsa.com/pub/pkcs/ascii/layman.asc

var Ber = require('./ber/index');



///--- Exported API

module.exports = {

  Ber: Ber,

  BerReader: Ber.Reader,

  BerWriter: Ber.Writer

};
", "node_modules/asn1/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/asn1/lib/index.js");
    }
}
