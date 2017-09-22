<?php

/* node_modules/core-js/library/fn/function/virtual/bind.js */
class __TwigTemplate_293107ce253c8335133cebeb2e2e4f76d21a3dfe206ec8ae60078e7050f3ea14 extends Twig_Template
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
        $__internal_d9bf575b6f573aec2183dab037669ee34da41a52334fb1393a277b71d15bd9f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9bf575b6f573aec2183dab037669ee34da41a52334fb1393a277b71d15bd9f0->enter($__internal_d9bf575b6f573aec2183dab037669ee34da41a52334fb1393a277b71d15bd9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/function/virtual/bind.js"));

        // line 1
        echo "require('../../../modules/es6.function.bind');
module.exports = require('../../../modules/_entry-virtual')('Function').bind;
";
        
        $__internal_d9bf575b6f573aec2183dab037669ee34da41a52334fb1393a277b71d15bd9f0->leave($__internal_d9bf575b6f573aec2183dab037669ee34da41a52334fb1393a277b71d15bd9f0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/function/virtual/bind.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.function.bind');
module.exports = require('../../../modules/_entry-virtual')('Function').bind;
", "node_modules/core-js/library/fn/function/virtual/bind.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/function/virtual/bind.js");
    }
}
