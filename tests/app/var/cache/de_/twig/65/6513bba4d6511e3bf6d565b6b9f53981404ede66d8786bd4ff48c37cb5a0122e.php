<?php

/* node_modules/core-js/modules/es6.typed.int8-array.js */
class __TwigTemplate_c185205617c84a5838f30d7b23f38d1ae345a04598a65a0275208f8811215b5a extends Twig_Template
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
        $__internal_eb989c3280b27afca9c98a7407e8036f20d738f8acecd8c18b53517600558227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb989c3280b27afca9c98a7407e8036f20d738f8acecd8c18b53517600558227->enter($__internal_eb989c3280b27afca9c98a7407e8036f20d738f8acecd8c18b53517600558227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.typed.int8-array.js"));

        // line 1
        echo "require('./_typed-array')('Int8', 1, function (init) {
  return function Int8Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
";
        
        $__internal_eb989c3280b27afca9c98a7407e8036f20d738f8acecd8c18b53517600558227->leave($__internal_eb989c3280b27afca9c98a7407e8036f20d738f8acecd8c18b53517600558227_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.typed.int8-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('./_typed-array')('Int8', 1, function (init) {
  return function Int8Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
", "node_modules/core-js/modules/es6.typed.int8-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.typed.int8-array.js");
    }
}
