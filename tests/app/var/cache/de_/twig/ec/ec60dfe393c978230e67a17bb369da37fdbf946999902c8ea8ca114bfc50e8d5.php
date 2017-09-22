<?php

/* node_modules/asn1.js/lib/asn1/constants/index.js */
class __TwigTemplate_88f5bcfc4ad23b6157ff3ffe24798c9821fc525e8a1a5dac455af7bc5afe9727 extends Twig_Template
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
        $__internal_e728da23fc24781d1a0751c25ca3270be6a9c0a77ccd5895a5ff59ae992ea348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e728da23fc24781d1a0751c25ca3270be6a9c0a77ccd5895a5ff59ae992ea348->enter($__internal_e728da23fc24781d1a0751c25ca3270be6a9c0a77ccd5895a5ff59ae992ea348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/asn1.js/lib/asn1/constants/index.js"));

        // line 1
        echo "var constants = exports;

// Helper
constants._reverse = function reverse(map) {
  var res = {};

  Object.keys(map).forEach(function(key) {
    // Convert key to integer if it is stringified
    if ((key | 0) == key)
      key = key | 0;

    var value = map[key];
    res[value] = key;
  });

  return res;
};

constants.der = require('./der');
";
        
        $__internal_e728da23fc24781d1a0751c25ca3270be6a9c0a77ccd5895a5ff59ae992ea348->leave($__internal_e728da23fc24781d1a0751c25ca3270be6a9c0a77ccd5895a5ff59ae992ea348_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/asn1.js/lib/asn1/constants/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var constants = exports;

// Helper
constants._reverse = function reverse(map) {
  var res = {};

  Object.keys(map).forEach(function(key) {
    // Convert key to integer if it is stringified
    if ((key | 0) == key)
      key = key | 0;

    var value = map[key];
    res[value] = key;
  });

  return res;
};

constants.der = require('./der');
", "node_modules/asn1.js/lib/asn1/constants/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/asn1.js/lib/asn1/constants/index.js");
    }
}
