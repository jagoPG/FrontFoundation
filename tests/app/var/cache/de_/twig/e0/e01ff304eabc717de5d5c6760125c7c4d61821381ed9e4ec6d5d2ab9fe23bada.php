<?php

/* node_modules/fsevents/node_modules/asn1/lib/ber/errors.js */
class __TwigTemplate_08d59f3728e47cfa922c216d216b4d2a75785f550e78dd99c7c73912026451fb extends Twig_Template
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
        $__internal_581c09efdf11a041058a4318ba569e5203a157c145cc4c418f0479eeeace1e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_581c09efdf11a041058a4318ba569e5203a157c145cc4c418f0479eeeace1e18->enter($__internal_581c09efdf11a041058a4318ba569e5203a157c145cc4c418f0479eeeace1e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/asn1/lib/ber/errors.js"));

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
        
        $__internal_581c09efdf11a041058a4318ba569e5203a157c145cc4c418f0479eeeace1e18->leave($__internal_581c09efdf11a041058a4318ba569e5203a157c145cc4c418f0479eeeace1e18_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/asn1/lib/ber/errors.js";
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
", "node_modules/fsevents/node_modules/asn1/lib/ber/errors.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/asn1/lib/ber/errors.js");
    }
}
