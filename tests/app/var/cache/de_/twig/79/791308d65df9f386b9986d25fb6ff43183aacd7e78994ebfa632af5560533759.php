<?php

/* node_modules/commondir/example/dir.js */
class __TwigTemplate_9ff4814b86476773ebb671bc9efa6b4b3e582143184786b48091d49023d98933 extends Twig_Template
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
        $__internal_3e1ea76ec03d0b8af526feb351ca74ba0feaf294915989a4ff88a05bc0b070ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e1ea76ec03d0b8af526feb351ca74ba0feaf294915989a4ff88a05bc0b070ca->enter($__internal_3e1ea76ec03d0b8af526feb351ca74ba0feaf294915989a4ff88a05bc0b070ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/commondir/example/dir.js"));

        // line 1
        echo "var commondir = require('../');
var dir = commondir(process.argv.slice(2));
console.log(dir);
";
        
        $__internal_3e1ea76ec03d0b8af526feb351ca74ba0feaf294915989a4ff88a05bc0b070ca->leave($__internal_3e1ea76ec03d0b8af526feb351ca74ba0feaf294915989a4ff88a05bc0b070ca_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/commondir/example/dir.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var commondir = require('../');
var dir = commondir(process.argv.slice(2));
console.log(dir);
", "node_modules/commondir/example/dir.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/commondir/example/dir.js");
    }
}
