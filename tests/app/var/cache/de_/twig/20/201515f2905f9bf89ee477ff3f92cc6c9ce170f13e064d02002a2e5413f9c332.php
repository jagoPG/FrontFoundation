<?php

/* node_modules/core-js/library/fn/symbol/index.js */
class __TwigTemplate_75ab2e22fcacea17c4860825df4daf7e348cee13391893023f470b5268393d90 extends Twig_Template
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
        $__internal_f89a0f8c8f71c42e7ab2653ad77c64d8499c2d334aac434c0f75c8c84366d1a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89a0f8c8f71c42e7ab2653ad77c64d8499c2d334aac434c0f75c8c84366d1a2->enter($__internal_f89a0f8c8f71c42e7ab2653ad77c64d8499c2d334aac434c0f75c8c84366d1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/symbol/index.js"));

        // line 1
        echo "require('../../modules/es6.symbol');
require('../../modules/es6.object.to-string');
require('../../modules/es7.symbol.async-iterator');
require('../../modules/es7.symbol.observable');
module.exports = require('../../modules/_core').Symbol;
";
        
        $__internal_f89a0f8c8f71c42e7ab2653ad77c64d8499c2d334aac434c0f75c8c84366d1a2->leave($__internal_f89a0f8c8f71c42e7ab2653ad77c64d8499c2d334aac434c0f75c8c84366d1a2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/symbol/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.symbol');
require('../../modules/es6.object.to-string');
require('../../modules/es7.symbol.async-iterator');
require('../../modules/es7.symbol.observable');
module.exports = require('../../modules/_core').Symbol;
", "node_modules/core-js/library/fn/symbol/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/symbol/index.js");
    }
}
