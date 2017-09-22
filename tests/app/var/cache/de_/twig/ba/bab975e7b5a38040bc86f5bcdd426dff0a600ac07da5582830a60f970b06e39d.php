<?php

/* node_modules/babel-runtime/core-js/object/freeze.js */
class __TwigTemplate_2821c0c8bb1331032f9d1e4e4c0a95184dea7ff01e04f72434b94cf93aa89072 extends Twig_Template
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
        $__internal_a1207aa6c33f107f2ade300562f2c0d15988bf45996d2e5cf6376474d0c1a802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1207aa6c33f107f2ade300562f2c0d15988bf45996d2e5cf6376474d0c1a802->enter($__internal_a1207aa6c33f107f2ade300562f2c0d15988bf45996d2e5cf6376474d0c1a802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/core-js/object/freeze.js"));

        // line 1
        echo "module.exports = { \"default\": require(\"core-js/library/fn/object/freeze\"), __esModule: true };";
        
        $__internal_a1207aa6c33f107f2ade300562f2c0d15988bf45996d2e5cf6376474d0c1a802->leave($__internal_a1207aa6c33f107f2ade300562f2c0d15988bf45996d2e5cf6376474d0c1a802_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/core-js/object/freeze.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = { \"default\": require(\"core-js/library/fn/object/freeze\"), __esModule: true };", "node_modules/babel-runtime/core-js/object/freeze.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/core-js/object/freeze.js");
    }
}
