<?php

/* node_modules/babel-runtime/helpers/_async-generator.js */
class __TwigTemplate_625c625f85dc574f835d696899e2bb062e6ee1a60ebbee90f4bcd6104d50ab36 extends Twig_Template
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
        $__internal_0f9eb84c7e3be2cc14120cf2769d13d02eebc4871e957b026238acd8399da8ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f9eb84c7e3be2cc14120cf2769d13d02eebc4871e957b026238acd8399da8ac->enter($__internal_0f9eb84c7e3be2cc14120cf2769d13d02eebc4871e957b026238acd8399da8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/_async-generator.js"));

        // line 1
        echo "module.exports = require(\"./asyncGenerator.js\");";
        
        $__internal_0f9eb84c7e3be2cc14120cf2769d13d02eebc4871e957b026238acd8399da8ac->leave($__internal_0f9eb84c7e3be2cc14120cf2769d13d02eebc4871e957b026238acd8399da8ac_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/_async-generator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./asyncGenerator.js\");", "node_modules/babel-runtime/helpers/_async-generator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/_async-generator.js");
    }
}
