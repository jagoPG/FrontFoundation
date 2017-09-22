<?php

/* node_modules/core-js/library/fn/number/epsilon.js */
class __TwigTemplate_d8aa6b28fce103cb9241477e534766aa60f7df1a954af2ffae7fd5987cb5b6c6 extends Twig_Template
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
        $__internal_7e23841aef4330ba6b2acb4e990ada92a0e9de956af7511083880dae75a946d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e23841aef4330ba6b2acb4e990ada92a0e9de956af7511083880dae75a946d1->enter($__internal_7e23841aef4330ba6b2acb4e990ada92a0e9de956af7511083880dae75a946d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/number/epsilon.js"));

        // line 1
        echo "require('../../modules/es6.number.epsilon');
module.exports = Math.pow(2, -52);
";
        
        $__internal_7e23841aef4330ba6b2acb4e990ada92a0e9de956af7511083880dae75a946d1->leave($__internal_7e23841aef4330ba6b2acb4e990ada92a0e9de956af7511083880dae75a946d1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/number/epsilon.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.number.epsilon');
module.exports = Math.pow(2, -52);
", "node_modules/core-js/library/fn/number/epsilon.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/number/epsilon.js");
    }
}
