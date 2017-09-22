<?php

/* node_modules/babel-runtime/core-js/weak-set.js */
class __TwigTemplate_80806a6c20784dc94668e6f278be9fb445c6e65a5d6a3222ff1493c335d2feec extends Twig_Template
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
        $__internal_40578a09f6741b475def6db023c41061b0d42b76b59f85bd7f5ee68b80f7f694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40578a09f6741b475def6db023c41061b0d42b76b59f85bd7f5ee68b80f7f694->enter($__internal_40578a09f6741b475def6db023c41061b0d42b76b59f85bd7f5ee68b80f7f694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/core-js/weak-set.js"));

        // line 1
        echo "module.exports = { \"default\": require(\"core-js/library/fn/weak-set\"), __esModule: true };";
        
        $__internal_40578a09f6741b475def6db023c41061b0d42b76b59f85bd7f5ee68b80f7f694->leave($__internal_40578a09f6741b475def6db023c41061b0d42b76b59f85bd7f5ee68b80f7f694_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/core-js/weak-set.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = { \"default\": require(\"core-js/library/fn/weak-set\"), __esModule: true };", "node_modules/babel-runtime/core-js/weak-set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/core-js/weak-set.js");
    }
}
