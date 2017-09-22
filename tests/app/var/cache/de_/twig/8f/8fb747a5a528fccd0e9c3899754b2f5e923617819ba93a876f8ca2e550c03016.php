<?php

/* node_modules/fsevents/node_modules/minimist/test/whitespace.js */
class __TwigTemplate_77cd45e25691879503e5a483c2e3a558cc670b669fb89c227bbc16cdbbbdd640 extends Twig_Template
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
        $__internal_2dacdc9a5e2d3327a59631481a481119e24d4e367f4c75003e487204e70705e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dacdc9a5e2d3327a59631481a481119e24d4e367f4c75003e487204e70705e6->enter($__internal_2dacdc9a5e2d3327a59631481a481119e24d4e367f4c75003e487204e70705e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/minimist/test/whitespace.js"));

        // line 1
        echo "var parse = require('../');
var test = require('tape');

test('whitespace should be whitespace' , function (t) {
    t.plan(1);
    var x = parse([ '-x', '\\t' ]).x;
    t.equal(x, '\\t');
});
";
        
        $__internal_2dacdc9a5e2d3327a59631481a481119e24d4e367f4c75003e487204e70705e6->leave($__internal_2dacdc9a5e2d3327a59631481a481119e24d4e367f4c75003e487204e70705e6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/minimist/test/whitespace.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var parse = require('../');
var test = require('tape');

test('whitespace should be whitespace' , function (t) {
    t.plan(1);
    var x = parse([ '-x', '\\t' ]).x;
    t.equal(x, '\\t');
});
", "node_modules/fsevents/node_modules/minimist/test/whitespace.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/minimist/test/whitespace.js");
    }
}
