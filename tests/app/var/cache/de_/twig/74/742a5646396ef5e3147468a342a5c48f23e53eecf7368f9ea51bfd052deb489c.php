<?php

/* node_modules/core-js/fn/object/assign.js */
class __TwigTemplate_fd3138030772c2d3f1768b973d8fcd46e6550586141e28f8d739d3bde6b6bbbd extends Twig_Template
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
        $__internal_6895225bf31f836de2bebf6ee24c55adb23639d222847364625175591286ec5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6895225bf31f836de2bebf6ee24c55adb23639d222847364625175591286ec5b->enter($__internal_6895225bf31f836de2bebf6ee24c55adb23639d222847364625175591286ec5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/object/assign.js"));

        // line 1
        echo "require('../../modules/es6.object.assign');
module.exports = require('../../modules/_core').Object.assign;
";
        
        $__internal_6895225bf31f836de2bebf6ee24c55adb23639d222847364625175591286ec5b->leave($__internal_6895225bf31f836de2bebf6ee24c55adb23639d222847364625175591286ec5b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/object/assign.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.assign');
module.exports = require('../../modules/_core').Object.assign;
", "node_modules/core-js/fn/object/assign.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/object/assign.js");
    }
}
