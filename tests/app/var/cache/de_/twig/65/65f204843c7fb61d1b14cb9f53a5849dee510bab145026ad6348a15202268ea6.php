<?php

/* node_modules/lodash/_Map.js */
class __TwigTemplate_2b1290625438cf8a8a481f18e07948617b03d7dbedb14e5703132ad52fedb47a extends Twig_Template
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
        $__internal_62c6b360a87dafd592b47c26255525408239a5ca65e1a3d3fecc3f61d63641f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62c6b360a87dafd592b47c26255525408239a5ca65e1a3d3fecc3f61d63641f0->enter($__internal_62c6b360a87dafd592b47c26255525408239a5ca65e1a3d3fecc3f61d63641f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_Map.js"));

        // line 1
        echo "var getNative = require('./_getNative'),
    root = require('./_root');

/* Built-in method references that are verified to be native. */
var Map = getNative(root, 'Map');

module.exports = Map;
";
        
        $__internal_62c6b360a87dafd592b47c26255525408239a5ca65e1a3d3fecc3f61d63641f0->leave($__internal_62c6b360a87dafd592b47c26255525408239a5ca65e1a3d3fecc3f61d63641f0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_Map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var getNative = require('./_getNative'),
    root = require('./_root');

/* Built-in method references that are verified to be native. */
var Map = getNative(root, 'Map');

module.exports = Map;
", "node_modules/lodash/_Map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_Map.js");
    }
}
