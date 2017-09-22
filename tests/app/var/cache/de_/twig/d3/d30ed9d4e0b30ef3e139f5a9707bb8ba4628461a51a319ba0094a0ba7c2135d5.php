<?php

/* node_modules/core-js/library/fn/function/bind.js */
class __TwigTemplate_e688f78839b417f0f9577009453552dd509fd0d8cba3847a0e9b97e759f5bb6d extends Twig_Template
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
        $__internal_082ddfe27a2263e5d835674282191d4fe5886198eeefa4a7a570085cd99ee771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_082ddfe27a2263e5d835674282191d4fe5886198eeefa4a7a570085cd99ee771->enter($__internal_082ddfe27a2263e5d835674282191d4fe5886198eeefa4a7a570085cd99ee771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/function/bind.js"));

        // line 1
        echo "require('../../modules/es6.function.bind');
module.exports = require('../../modules/_core').Function.bind;
";
        
        $__internal_082ddfe27a2263e5d835674282191d4fe5886198eeefa4a7a570085cd99ee771->leave($__internal_082ddfe27a2263e5d835674282191d4fe5886198eeefa4a7a570085cd99ee771_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/function/bind.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.function.bind');
module.exports = require('../../modules/_core').Function.bind;
", "node_modules/core-js/library/fn/function/bind.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/function/bind.js");
    }
}
