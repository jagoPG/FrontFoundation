<?php

/* node_modules/asn1.js/lib/asn1.js */
class __TwigTemplate_da9a3f53655ebe26169a7d791f27888497ff2a647ccd006c5f66ad0e327c9e56 extends Twig_Template
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
        $__internal_3b1dcd8562a40d1635e7327d9ca940a1841aa12f804e369baff3db55a48fdb19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1dcd8562a40d1635e7327d9ca940a1841aa12f804e369baff3db55a48fdb19->enter($__internal_3b1dcd8562a40d1635e7327d9ca940a1841aa12f804e369baff3db55a48fdb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/asn1.js/lib/asn1.js"));

        // line 1
        echo "var asn1 = exports;

asn1.bignum = require('bn.js');

asn1.define = require('./asn1/api').define;
asn1.base = require('./asn1/base');
asn1.constants = require('./asn1/constants');
asn1.decoders = require('./asn1/decoders');
asn1.encoders = require('./asn1/encoders');
";
        
        $__internal_3b1dcd8562a40d1635e7327d9ca940a1841aa12f804e369baff3db55a48fdb19->leave($__internal_3b1dcd8562a40d1635e7327d9ca940a1841aa12f804e369baff3db55a48fdb19_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/asn1.js/lib/asn1.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var asn1 = exports;

asn1.bignum = require('bn.js');

asn1.define = require('./asn1/api').define;
asn1.base = require('./asn1/base');
asn1.constants = require('./asn1/constants');
asn1.decoders = require('./asn1/decoders');
asn1.encoders = require('./asn1/encoders');
", "node_modules/asn1.js/lib/asn1.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/asn1.js/lib/asn1.js");
    }
}
