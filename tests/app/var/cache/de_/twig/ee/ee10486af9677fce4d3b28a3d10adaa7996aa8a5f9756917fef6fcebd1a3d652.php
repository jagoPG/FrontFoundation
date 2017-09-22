<?php

/* node_modules/fsevents/node_modules/jsonify/test/parse.js */
class __TwigTemplate_38492252b64cef90cc97b71db31f8316f45aeaa665289c6567b782c6fef95242 extends Twig_Template
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
        $__internal_3a7b59d37c6e253dfdbc576084e045e20b431378831d8452c8c5fb8d507f70ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7b59d37c6e253dfdbc576084e045e20b431378831d8452c8c5fb8d507f70ef->enter($__internal_3a7b59d37c6e253dfdbc576084e045e20b431378831d8452c8c5fb8d507f70ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/jsonify/test/parse.js"));

        // line 1
        echo "var test = require('tap').test;
var json = require('../');
var garbage = require('garbage');

test('parse', function (t) {
    for (var i = 0; i < 50; i++) {
        var s = JSON.stringify(garbage(50));
        
        t.deepEqual(
            json.parse(s),
            JSON.parse(s)
        );
    }
    
    t.end();
});
";
        
        $__internal_3a7b59d37c6e253dfdbc576084e045e20b431378831d8452c8c5fb8d507f70ef->leave($__internal_3a7b59d37c6e253dfdbc576084e045e20b431378831d8452c8c5fb8d507f70ef_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/jsonify/test/parse.js";
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

test('parse', function (t) {
    for (var i = 0; i < 50; i++) {
        var s = JSON.stringify(garbage(50));
        
        t.deepEqual(
            json.parse(s),
            JSON.parse(s)
        );
    }
    
    t.end();
});
", "node_modules/fsevents/node_modules/jsonify/test/parse.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/jsonify/test/parse.js");
    }
}
