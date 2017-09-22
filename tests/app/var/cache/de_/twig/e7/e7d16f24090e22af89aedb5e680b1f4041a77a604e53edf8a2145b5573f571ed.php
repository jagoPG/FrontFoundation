<?php

/* node_modules/asn1.js/lib/asn1/decoders/index.js */
class __TwigTemplate_f8362fd664946a8ae240c1cd09092aa23faab280fb0736e0a0b6d110e5e0e078 extends Twig_Template
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
        $__internal_b705bccda3fc09ea0e3b1fdddfbf3edd9082a1449b22a41b7d39d5f1ab7e7fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b705bccda3fc09ea0e3b1fdddfbf3edd9082a1449b22a41b7d39d5f1ab7e7fe7->enter($__internal_b705bccda3fc09ea0e3b1fdddfbf3edd9082a1449b22a41b7d39d5f1ab7e7fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/asn1.js/lib/asn1/decoders/index.js"));

        // line 1
        echo "var decoders = exports;

decoders.der = require('./der');
decoders.pem = require('./pem');
";
        
        $__internal_b705bccda3fc09ea0e3b1fdddfbf3edd9082a1449b22a41b7d39d5f1ab7e7fe7->leave($__internal_b705bccda3fc09ea0e3b1fdddfbf3edd9082a1449b22a41b7d39d5f1ab7e7fe7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/asn1.js/lib/asn1/decoders/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var decoders = exports;

decoders.der = require('./der');
decoders.pem = require('./pem');
", "node_modules/asn1.js/lib/asn1/decoders/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/asn1.js/lib/asn1/decoders/index.js");
    }
}
