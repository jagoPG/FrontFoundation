<?php

/* node_modules/asn1/lib/ber/errors.js */
class __TwigTemplate_6b1fa6ab141b33268faa5cbaef05204461cfd240180d8d5514071bcc3494150b extends Twig_Template
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
        $__internal_d6dbeb405b9816f02e74761a5cc0d28c4f9921c84651b30ef51b1f03021a25c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6dbeb405b9816f02e74761a5cc0d28c4f9921c84651b30ef51b1f03021a25c9->enter($__internal_d6dbeb405b9816f02e74761a5cc0d28c4f9921c84651b30ef51b1f03021a25c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/asn1/lib/ber/errors.js"));

        // line 1
        echo "// Copyright 2011 Mark Cavage <mcavage@gmail.com> All rights reserved.


module.exports = {

  newInvalidAsn1Error: function(msg) {
    var e = new Error();
    e.name = 'InvalidAsn1Error';
    e.message = msg || '';
    return e;
  }

};
";
        
        $__internal_d6dbeb405b9816f02e74761a5cc0d28c4f9921c84651b30ef51b1f03021a25c9->leave($__internal_d6dbeb405b9816f02e74761a5cc0d28c4f9921c84651b30ef51b1f03021a25c9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/asn1/lib/ber/errors.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Copyright 2011 Mark Cavage <mcavage@gmail.com> All rights reserved.


module.exports = {

  newInvalidAsn1Error: function(msg) {
    var e = new Error();
    e.name = 'InvalidAsn1Error';
    e.message = msg || '';
    return e;
  }

};
", "node_modules/asn1/lib/ber/errors.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/asn1/lib/ber/errors.js");
    }
}
