<?php

/* node_modules/core-js/library/fn/number/is-finite.js */
class __TwigTemplate_085cffb6cc92b141cb4361f6351bed1c3782eb3551553afa4b08e65e4f90d234 extends Twig_Template
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
        $__internal_656465df5e4dbb125df841f2232bee70d1a134115bd607616ad4d0c8c40b0cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656465df5e4dbb125df841f2232bee70d1a134115bd607616ad4d0c8c40b0cb3->enter($__internal_656465df5e4dbb125df841f2232bee70d1a134115bd607616ad4d0c8c40b0cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/number/is-finite.js"));

        // line 1
        echo "require('../../modules/es6.number.is-finite');
module.exports = require('../../modules/_core').Number.isFinite;
";
        
        $__internal_656465df5e4dbb125df841f2232bee70d1a134115bd607616ad4d0c8c40b0cb3->leave($__internal_656465df5e4dbb125df841f2232bee70d1a134115bd607616ad4d0c8c40b0cb3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/number/is-finite.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.number.is-finite');
module.exports = require('../../modules/_core').Number.isFinite;
", "node_modules/core-js/library/fn/number/is-finite.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/number/is-finite.js");
    }
}
