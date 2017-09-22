<?php

/* node_modules/jsonify/test/stringify.js */
class __TwigTemplate_7b09c0d0b336453749d2893d23b4ca267a2f082926b9d1a2a97865a3fb69e45b extends Twig_Template
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
        $__internal_59fac06ef63de244aa9573d5cb18a4d2faf1ce2d2cd986aa338b43d34d69a9d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59fac06ef63de244aa9573d5cb18a4d2faf1ce2d2cd986aa338b43d34d69a9d5->enter($__internal_59fac06ef63de244aa9573d5cb18a4d2faf1ce2d2cd986aa338b43d34d69a9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jsonify/test/stringify.js"));

        // line 1
        echo "var test = require('tap').test;
var json = require('../');
var garbage = require('garbage');

test('stringify', function (t) {
    for (var i = 0; i < 50; i++) {
        var obj = garbage(50);
        t.equal(
            json.stringify(obj),
            JSON.stringify(obj)
        );
    }
    
    t.end();
});
";
        
        $__internal_59fac06ef63de244aa9573d5cb18a4d2faf1ce2d2cd986aa338b43d34d69a9d5->leave($__internal_59fac06ef63de244aa9573d5cb18a4d2faf1ce2d2cd986aa338b43d34d69a9d5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jsonify/test/stringify.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tap').test;
var json = require('../');
var garbage = require('garbage');

test('stringify', function (t) {
    for (var i = 0; i < 50; i++) {
        var obj = garbage(50);
        t.equal(
            json.stringify(obj),
            JSON.stringify(obj)
        );
    }
    
    t.end();
});
", "node_modules/jsonify/test/stringify.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jsonify/test/stringify.js");
    }
}
