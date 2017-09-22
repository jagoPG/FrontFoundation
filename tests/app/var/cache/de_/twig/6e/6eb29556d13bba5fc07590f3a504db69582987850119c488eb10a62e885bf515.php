<?php

/* node_modules/core-js/fn/date/to-iso-string.js */
class __TwigTemplate_9217ead2446343a8b0e9d9e2a589fba732635b5fc1b0d3fbb7fc29bda3fe0ff2 extends Twig_Template
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
        $__internal_7dbd7855865cfa68d5cca27b375929d599cdfa3eeb5235c88ccf9cfe98351c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dbd7855865cfa68d5cca27b375929d599cdfa3eeb5235c88ccf9cfe98351c77->enter($__internal_7dbd7855865cfa68d5cca27b375929d599cdfa3eeb5235c88ccf9cfe98351c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/date/to-iso-string.js"));

        // line 1
        echo "require('../../modules/es6.date.to-json');
require('../../modules/es6.date.to-iso-string');
module.exports = require('../../modules/_core').Date.toISOString;
";
        
        $__internal_7dbd7855865cfa68d5cca27b375929d599cdfa3eeb5235c88ccf9cfe98351c77->leave($__internal_7dbd7855865cfa68d5cca27b375929d599cdfa3eeb5235c88ccf9cfe98351c77_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/date/to-iso-string.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.date.to-json');
require('../../modules/es6.date.to-iso-string');
module.exports = require('../../modules/_core').Date.toISOString;
", "node_modules/core-js/fn/date/to-iso-string.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/date/to-iso-string.js");
    }
}
