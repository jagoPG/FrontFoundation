<?php

/* node_modules/fsevents/node_modules/jsonify/test/stringify.js */
class __TwigTemplate_81855261615f3d770ed3ec87ffc04c6ce43b747391f0ed7ab19cca86f53a2215 extends Twig_Template
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
        $__internal_e6ff15af052b18011559910b4a7ac20dd7d6ccdfc12bd8b8c8d2a11bab551f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ff15af052b18011559910b4a7ac20dd7d6ccdfc12bd8b8c8d2a11bab551f19->enter($__internal_e6ff15af052b18011559910b4a7ac20dd7d6ccdfc12bd8b8c8d2a11bab551f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/jsonify/test/stringify.js"));

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
        
        $__internal_e6ff15af052b18011559910b4a7ac20dd7d6ccdfc12bd8b8c8d2a11bab551f19->leave($__internal_e6ff15af052b18011559910b4a7ac20dd7d6ccdfc12bd8b8c8d2a11bab551f19_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/jsonify/test/stringify.js";
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
", "node_modules/fsevents/node_modules/jsonify/test/stringify.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/jsonify/test/stringify.js");
    }
}
