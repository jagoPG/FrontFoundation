<?php

/* node_modules/core-js/modules/_object-gopn.js */
class __TwigTemplate_58bf450937c8d41f23742ca6b4596f1ba6a599b2150eeca0d13c08f9e9041a2a extends Twig_Template
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
        $__internal_a192f227eed5aac6677b4601ac5fc1557d1864b976b731cf66a569d080a99721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a192f227eed5aac6677b4601ac5fc1557d1864b976b731cf66a569d080a99721->enter($__internal_a192f227eed5aac6677b4601ac5fc1557d1864b976b731cf66a569d080a99721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_object-gopn.js"));

        // line 1
        echo "// 19.1.2.7 / 15.2.3.4 Object.getOwnPropertyNames(O)
var \$keys = require('./_object-keys-internal');
var hiddenKeys = require('./_enum-bug-keys').concat('length', 'prototype');

exports.f = Object.getOwnPropertyNames || function getOwnPropertyNames(O) {
  return \$keys(O, hiddenKeys);
};
";
        
        $__internal_a192f227eed5aac6677b4601ac5fc1557d1864b976b731cf66a569d080a99721->leave($__internal_a192f227eed5aac6677b4601ac5fc1557d1864b976b731cf66a569d080a99721_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_object-gopn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 19.1.2.7 / 15.2.3.4 Object.getOwnPropertyNames(O)
var \$keys = require('./_object-keys-internal');
var hiddenKeys = require('./_enum-bug-keys').concat('length', 'prototype');

exports.f = Object.getOwnPropertyNames || function getOwnPropertyNames(O) {
  return \$keys(O, hiddenKeys);
};
", "node_modules/core-js/modules/_object-gopn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_object-gopn.js");
    }
}
