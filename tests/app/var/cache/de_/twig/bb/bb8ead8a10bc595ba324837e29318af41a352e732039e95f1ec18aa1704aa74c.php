<?php

/* node_modules/babel-runtime/core-js/clear-immediate.js */
class __TwigTemplate_fad9ad5188799fd14a1f50496c40a161f7f3dcb4a0a1fc39b57fc52f54af480a extends Twig_Template
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
        $__internal_549b8da4473c6763c43eccf8c0c1646e84d223f64d59286c076c7755423f4b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549b8da4473c6763c43eccf8c0c1646e84d223f64d59286c076c7755423f4b95->enter($__internal_549b8da4473c6763c43eccf8c0c1646e84d223f64d59286c076c7755423f4b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/core-js/clear-immediate.js"));

        // line 1
        echo "module.exports = { \"default\": require(\"core-js/library/fn/clear-immediate\"), __esModule: true };";
        
        $__internal_549b8da4473c6763c43eccf8c0c1646e84d223f64d59286c076c7755423f4b95->leave($__internal_549b8da4473c6763c43eccf8c0c1646e84d223f64d59286c076c7755423f4b95_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/core-js/clear-immediate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = { \"default\": require(\"core-js/library/fn/clear-immediate\"), __esModule: true };", "node_modules/babel-runtime/core-js/clear-immediate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/core-js/clear-immediate.js");
    }
}
