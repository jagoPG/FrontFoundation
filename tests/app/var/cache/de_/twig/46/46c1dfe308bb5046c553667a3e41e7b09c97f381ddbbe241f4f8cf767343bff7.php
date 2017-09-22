<?php

/* node_modules/babel-runtime/helpers/to-array.js */
class __TwigTemplate_e6a8f0ae47027ed4cb5d9a7d955d5cdf71bf1d7cce4b4f8b535f2759688fbacd extends Twig_Template
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
        $__internal_00ba9a19e55a83def149b6abf8b0feab90590f929969d3960533ac78b8860c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ba9a19e55a83def149b6abf8b0feab90590f929969d3960533ac78b8860c1c->enter($__internal_00ba9a19e55a83def149b6abf8b0feab90590f929969d3960533ac78b8860c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/to-array.js"));

        // line 1
        echo "module.exports = require(\"./toArray.js\");";
        
        $__internal_00ba9a19e55a83def149b6abf8b0feab90590f929969d3960533ac78b8860c1c->leave($__internal_00ba9a19e55a83def149b6abf8b0feab90590f929969d3960533ac78b8860c1c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/to-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./toArray.js\");", "node_modules/babel-runtime/helpers/to-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/to-array.js");
    }
}
