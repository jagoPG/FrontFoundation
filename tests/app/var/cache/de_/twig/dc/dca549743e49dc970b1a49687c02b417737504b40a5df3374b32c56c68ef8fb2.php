<?php

/* node_modules/core-js/es6/function.js */
class __TwigTemplate_1106634e14c494ab9730bdf55212cbd18f06709f888133b7dfd169541facce1d extends Twig_Template
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
        $__internal_9979dae99043e13d4bfe03a80d39367e2e5c1a63aa78019d3090bdf480640165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9979dae99043e13d4bfe03a80d39367e2e5c1a63aa78019d3090bdf480640165->enter($__internal_9979dae99043e13d4bfe03a80d39367e2e5c1a63aa78019d3090bdf480640165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/es6/function.js"));

        // line 1
        echo "require('../modules/es6.function.bind');
require('../modules/es6.function.name');
require('../modules/es6.function.has-instance');
module.exports = require('../modules/_core').Function;
";
        
        $__internal_9979dae99043e13d4bfe03a80d39367e2e5c1a63aa78019d3090bdf480640165->leave($__internal_9979dae99043e13d4bfe03a80d39367e2e5c1a63aa78019d3090bdf480640165_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/es6/function.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es6.function.bind');
require('../modules/es6.function.name');
require('../modules/es6.function.has-instance');
module.exports = require('../modules/_core').Function;
", "node_modules/core-js/es6/function.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/es6/function.js");
    }
}
