<?php

/* node_modules/babel-runtime/helpers/_define-enumerable-properties.js */
class __TwigTemplate_a9bc105ea4fc73f37298003db106b7ecc02c31b5b6e6fa71ee6dd67be8e8f57d extends Twig_Template
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
        $__internal_f8f05de9a0b71998b6980a985a597346b850f15876f36f72346084c90954aed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f05de9a0b71998b6980a985a597346b850f15876f36f72346084c90954aed2->enter($__internal_f8f05de9a0b71998b6980a985a597346b850f15876f36f72346084c90954aed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/_define-enumerable-properties.js"));

        // line 1
        echo "module.exports = require(\"./defineEnumerableProperties.js\");";
        
        $__internal_f8f05de9a0b71998b6980a985a597346b850f15876f36f72346084c90954aed2->leave($__internal_f8f05de9a0b71998b6980a985a597346b850f15876f36f72346084c90954aed2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/_define-enumerable-properties.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./defineEnumerableProperties.js\");", "node_modules/babel-runtime/helpers/_define-enumerable-properties.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/_define-enumerable-properties.js");
    }
}
