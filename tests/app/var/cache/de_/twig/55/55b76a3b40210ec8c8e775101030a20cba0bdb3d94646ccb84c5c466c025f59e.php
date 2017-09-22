<?php

/* node_modules/asn1.js/lib/asn1/encoders/index.js */
class __TwigTemplate_4a02cfe119a8e19e5ce03b7529897761a6d8c3d8ca0ead8f9ca84836e84cf1d3 extends Twig_Template
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
        $__internal_ffbe32c950b0d944d6ac6af94a9f28a57894cff26c76a134022ebc17a88f757d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffbe32c950b0d944d6ac6af94a9f28a57894cff26c76a134022ebc17a88f757d->enter($__internal_ffbe32c950b0d944d6ac6af94a9f28a57894cff26c76a134022ebc17a88f757d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/asn1.js/lib/asn1/encoders/index.js"));

        // line 1
        echo "var encoders = exports;

encoders.der = require('./der');
encoders.pem = require('./pem');
";
        
        $__internal_ffbe32c950b0d944d6ac6af94a9f28a57894cff26c76a134022ebc17a88f757d->leave($__internal_ffbe32c950b0d944d6ac6af94a9f28a57894cff26c76a134022ebc17a88f757d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/asn1.js/lib/asn1/encoders/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var encoders = exports;

encoders.der = require('./der');
encoders.pem = require('./pem');
", "node_modules/asn1.js/lib/asn1/encoders/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/asn1.js/lib/asn1/encoders/index.js");
    }
}
