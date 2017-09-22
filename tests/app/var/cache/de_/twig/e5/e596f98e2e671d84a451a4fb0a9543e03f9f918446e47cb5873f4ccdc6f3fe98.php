<?php

/* node_modules/core-js/fn/array/join.js */
class __TwigTemplate_0f2c6d32a54ab5ea60999af182e749d8e5551c7784add90c47732c030f1f18cf extends Twig_Template
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
        $__internal_d13230de847fb74cfc86ab54d5780c76e714d415313a72f517eaeb14c3fa46c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d13230de847fb74cfc86ab54d5780c76e714d415313a72f517eaeb14c3fa46c1->enter($__internal_d13230de847fb74cfc86ab54d5780c76e714d415313a72f517eaeb14c3fa46c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/array/join.js"));

        // line 1
        echo "require('../../modules/es6.array.join');
module.exports = require('../../modules/_core').Array.join;
";
        
        $__internal_d13230de847fb74cfc86ab54d5780c76e714d415313a72f517eaeb14c3fa46c1->leave($__internal_d13230de847fb74cfc86ab54d5780c76e714d415313a72f517eaeb14c3fa46c1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/array/join.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.array.join');
module.exports = require('../../modules/_core').Array.join;
", "node_modules/core-js/fn/array/join.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/array/join.js");
    }
}
