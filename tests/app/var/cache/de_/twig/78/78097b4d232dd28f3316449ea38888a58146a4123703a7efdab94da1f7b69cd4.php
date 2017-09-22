<?php

/* node_modules/core-js/library/fn/array/values.js */
class __TwigTemplate_32168b97b609b47cddb367ea2a57da65c0a57744ff5f885d12c74e8aeff5f465 extends Twig_Template
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
        $__internal_54f473d48b2694761bffdf3a470fc1949237cd8b8619c5b72b85ea6f6937a187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f473d48b2694761bffdf3a470fc1949237cd8b8619c5b72b85ea6f6937a187->enter($__internal_54f473d48b2694761bffdf3a470fc1949237cd8b8619c5b72b85ea6f6937a187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/values.js"));

        // line 1
        echo "require('../../modules/es6.array.iterator');
module.exports = require('../../modules/_core').Array.values;
";
        
        $__internal_54f473d48b2694761bffdf3a470fc1949237cd8b8619c5b72b85ea6f6937a187->leave($__internal_54f473d48b2694761bffdf3a470fc1949237cd8b8619c5b72b85ea6f6937a187_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/values.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.array.iterator');
module.exports = require('../../modules/_core').Array.values;
", "node_modules/core-js/library/fn/array/values.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/values.js");
    }
}
