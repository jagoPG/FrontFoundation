<?php

/* node_modules/core-js/fn/array/virtual/flatten.js */
class __TwigTemplate_29ae3c0a816ff933de2715d604c57c53b0ab408fcfd5123c0fd77a73f155c945 extends Twig_Template
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
        $__internal_3fcab22ea6d743b4bfc397de372c76c2314e6710708189fd0d0c8aff0bf5af35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fcab22ea6d743b4bfc397de372c76c2314e6710708189fd0d0c8aff0bf5af35->enter($__internal_3fcab22ea6d743b4bfc397de372c76c2314e6710708189fd0d0c8aff0bf5af35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/array/virtual/flatten.js"));

        // line 1
        echo "require('../../../modules/es7.array.flatten');
module.exports = require('../../../modules/_entry-virtual')('Array').flatten;
";
        
        $__internal_3fcab22ea6d743b4bfc397de372c76c2314e6710708189fd0d0c8aff0bf5af35->leave($__internal_3fcab22ea6d743b4bfc397de372c76c2314e6710708189fd0d0c8aff0bf5af35_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/array/virtual/flatten.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es7.array.flatten');
module.exports = require('../../../modules/_entry-virtual')('Array').flatten;
", "node_modules/core-js/fn/array/virtual/flatten.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/array/virtual/flatten.js");
    }
}
