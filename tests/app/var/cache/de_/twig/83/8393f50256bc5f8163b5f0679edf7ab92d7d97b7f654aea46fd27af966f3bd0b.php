<?php

/* node_modules/core-js/modules/_to-object.js */
class __TwigTemplate_4c96ebe68bb69985f8eddf674beeda99b2071eebec1388d39cfe8c0cc6be21b3 extends Twig_Template
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
        $__internal_747e7b7cf1dad29e8d39ae3c821c1ca2f145cecc5f81ea181d01e15ffb5da312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_747e7b7cf1dad29e8d39ae3c821c1ca2f145cecc5f81ea181d01e15ffb5da312->enter($__internal_747e7b7cf1dad29e8d39ae3c821c1ca2f145cecc5f81ea181d01e15ffb5da312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_to-object.js"));

        // line 1
        echo "// 7.1.13 ToObject(argument)
var defined = require('./_defined');
module.exports = function (it) {
  return Object(defined(it));
};
";
        
        $__internal_747e7b7cf1dad29e8d39ae3c821c1ca2f145cecc5f81ea181d01e15ffb5da312->leave($__internal_747e7b7cf1dad29e8d39ae3c821c1ca2f145cecc5f81ea181d01e15ffb5da312_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_to-object.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 7.1.13 ToObject(argument)
var defined = require('./_defined');
module.exports = function (it) {
  return Object(defined(it));
};
", "node_modules/core-js/modules/_to-object.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_to-object.js");
    }
}
