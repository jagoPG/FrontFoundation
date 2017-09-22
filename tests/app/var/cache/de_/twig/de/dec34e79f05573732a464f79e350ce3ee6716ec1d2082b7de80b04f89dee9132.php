<?php

/* node_modules/core-js/modules/_hide.js */
class __TwigTemplate_d3c2d22cc4aace1940c78e69a40b2ee89a2bcff4870f47f70fbaa4ea14628a9f extends Twig_Template
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
        $__internal_21c193214efddacaa94e23411edfb6aa64a7f9dfcc1f2e8fdfcab388894a0159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c193214efddacaa94e23411edfb6aa64a7f9dfcc1f2e8fdfcab388894a0159->enter($__internal_21c193214efddacaa94e23411edfb6aa64a7f9dfcc1f2e8fdfcab388894a0159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_hide.js"));

        // line 1
        echo "var dP = require('./_object-dp');
var createDesc = require('./_property-desc');
module.exports = require('./_descriptors') ? function (object, key, value) {
  return dP.f(object, key, createDesc(1, value));
} : function (object, key, value) {
  object[key] = value;
  return object;
};
";
        
        $__internal_21c193214efddacaa94e23411edfb6aa64a7f9dfcc1f2e8fdfcab388894a0159->leave($__internal_21c193214efddacaa94e23411edfb6aa64a7f9dfcc1f2e8fdfcab388894a0159_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_hide.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var dP = require('./_object-dp');
var createDesc = require('./_property-desc');
module.exports = require('./_descriptors') ? function (object, key, value) {
  return dP.f(object, key, createDesc(1, value));
} : function (object, key, value) {
  object[key] = value;
  return object;
};
", "node_modules/core-js/modules/_hide.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_hide.js");
    }
}
