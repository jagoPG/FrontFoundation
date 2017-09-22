<?php

/* node_modules/babel-runtime/core-js/object/prevent-extensions.js */
class __TwigTemplate_1dfdda0559f2beca86e3df402c545b234f8dae577ceca6da51b88c2cb5995419 extends Twig_Template
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
        $__internal_e3b06fafcce676ca094190511c7e27b631e9e4931d73054c6db9dc0af9c40095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b06fafcce676ca094190511c7e27b631e9e4931d73054c6db9dc0af9c40095->enter($__internal_e3b06fafcce676ca094190511c7e27b631e9e4931d73054c6db9dc0af9c40095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/core-js/object/prevent-extensions.js"));

        // line 1
        echo "module.exports = { \"default\": require(\"core-js/library/fn/object/prevent-extensions\"), __esModule: true };";
        
        $__internal_e3b06fafcce676ca094190511c7e27b631e9e4931d73054c6db9dc0af9c40095->leave($__internal_e3b06fafcce676ca094190511c7e27b631e9e4931d73054c6db9dc0af9c40095_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/core-js/object/prevent-extensions.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = { \"default\": require(\"core-js/library/fn/object/prevent-extensions\"), __esModule: true };", "node_modules/babel-runtime/core-js/object/prevent-extensions.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/core-js/object/prevent-extensions.js");
    }
}
