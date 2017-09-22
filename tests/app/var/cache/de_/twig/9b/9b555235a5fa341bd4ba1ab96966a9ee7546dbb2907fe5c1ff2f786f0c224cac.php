<?php

/* node_modules/core-js/library/fn/object/get-own-property-names.js */
class __TwigTemplate_e1dfca3587acf0cc264f15d3fce757f46ce4d9aa5354055002921f700c3675d7 extends Twig_Template
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
        $__internal_4aad2318932d324d5951dbfdedf95ef18cfd9273518ec761f15d3f9451e6e40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aad2318932d324d5951dbfdedf95ef18cfd9273518ec761f15d3f9451e6e40c->enter($__internal_4aad2318932d324d5951dbfdedf95ef18cfd9273518ec761f15d3f9451e6e40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/object/get-own-property-names.js"));

        // line 1
        echo "require('../../modules/es6.object.get-own-property-names');
var \$Object = require('../../modules/_core').Object;
module.exports = function getOwnPropertyNames(it) {
  return \$Object.getOwnPropertyNames(it);
};
";
        
        $__internal_4aad2318932d324d5951dbfdedf95ef18cfd9273518ec761f15d3f9451e6e40c->leave($__internal_4aad2318932d324d5951dbfdedf95ef18cfd9273518ec761f15d3f9451e6e40c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/object/get-own-property-names.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.get-own-property-names');
var \$Object = require('../../modules/_core').Object;
module.exports = function getOwnPropertyNames(it) {
  return \$Object.getOwnPropertyNames(it);
};
", "node_modules/core-js/library/fn/object/get-own-property-names.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/object/get-own-property-names.js");
    }
}
