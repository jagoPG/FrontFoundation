<?php

/* node_modules/babel-runtime/core-js/reflect/set.js */
class __TwigTemplate_710c519b057fd72261a8e71ad855b0bc92c4563c19e2c54bd3137b76e5b315fb extends Twig_Template
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
        $__internal_220f94174be6631ebf582fc9d58871ac3b04952716c956cd19b9fa262a009217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220f94174be6631ebf582fc9d58871ac3b04952716c956cd19b9fa262a009217->enter($__internal_220f94174be6631ebf582fc9d58871ac3b04952716c956cd19b9fa262a009217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/core-js/reflect/set.js"));

        // line 1
        echo "module.exports = { \"default\": require(\"core-js/library/fn/reflect/set\"), __esModule: true };";
        
        $__internal_220f94174be6631ebf582fc9d58871ac3b04952716c956cd19b9fa262a009217->leave($__internal_220f94174be6631ebf582fc9d58871ac3b04952716c956cd19b9fa262a009217_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/core-js/reflect/set.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = { \"default\": require(\"core-js/library/fn/reflect/set\"), __esModule: true };", "node_modules/babel-runtime/core-js/reflect/set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/core-js/reflect/set.js");
    }
}
