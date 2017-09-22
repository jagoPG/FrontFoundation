<?php

/* node_modules/core-js/library/modules/_to-object.js */
class __TwigTemplate_6485db3323d35a35213681a2eacd1a455e6cc6d098b128873f0cdb9af190c318 extends Twig_Template
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
        $__internal_29f27e8c0acd1450d9ebc9a679dba0fa20ed2d5493b4dfb617100abf733e533e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f27e8c0acd1450d9ebc9a679dba0fa20ed2d5493b4dfb617100abf733e533e->enter($__internal_29f27e8c0acd1450d9ebc9a679dba0fa20ed2d5493b4dfb617100abf733e533e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_to-object.js"));

        // line 1
        echo "// 7.1.13 ToObject(argument)
var defined = require('./_defined');
module.exports = function (it) {
  return Object(defined(it));
};
";
        
        $__internal_29f27e8c0acd1450d9ebc9a679dba0fa20ed2d5493b4dfb617100abf733e533e->leave($__internal_29f27e8c0acd1450d9ebc9a679dba0fa20ed2d5493b4dfb617100abf733e533e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_to-object.js";
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
", "node_modules/core-js/library/modules/_to-object.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_to-object.js");
    }
}
