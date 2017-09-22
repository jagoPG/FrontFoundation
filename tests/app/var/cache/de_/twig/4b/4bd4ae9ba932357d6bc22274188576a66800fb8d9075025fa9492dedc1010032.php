<?php

/* node_modules/core-js/fn/date/to-primitive.js */
class __TwigTemplate_546291b49ef0feb949988a767d6e0d6e4bd9f07d799b494a440ce460a2c6e0b1 extends Twig_Template
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
        $__internal_d6a2cbfa59bf8644a7cc7882ec2d573a87dd3a487cb8824127ac1893bfe43bb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a2cbfa59bf8644a7cc7882ec2d573a87dd3a487cb8824127ac1893bfe43bb7->enter($__internal_d6a2cbfa59bf8644a7cc7882ec2d573a87dd3a487cb8824127ac1893bfe43bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/date/to-primitive.js"));

        // line 1
        echo "require('../../modules/es6.date.to-primitive');
var toPrimitive = require('../../modules/_date-to-primitive');
module.exports = function (it, hint) {
  return toPrimitive.call(it, hint);
};
";
        
        $__internal_d6a2cbfa59bf8644a7cc7882ec2d573a87dd3a487cb8824127ac1893bfe43bb7->leave($__internal_d6a2cbfa59bf8644a7cc7882ec2d573a87dd3a487cb8824127ac1893bfe43bb7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/date/to-primitive.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.date.to-primitive');
var toPrimitive = require('../../modules/_date-to-primitive');
module.exports = function (it, hint) {
  return toPrimitive.call(it, hint);
};
", "node_modules/core-js/fn/date/to-primitive.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/date/to-primitive.js");
    }
}
