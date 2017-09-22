<?php

/* node_modules/jsonify/test/parse.js */
class __TwigTemplate_8624f45108c9f6820f859f4db1c7c54f8b601f8c76b2e3cda7f752af929c2d1c extends Twig_Template
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
        $__internal_396ab14c92101e391d4661d51931063ae29df1d5d97fed07bb8f206269203580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_396ab14c92101e391d4661d51931063ae29df1d5d97fed07bb8f206269203580->enter($__internal_396ab14c92101e391d4661d51931063ae29df1d5d97fed07bb8f206269203580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jsonify/test/parse.js"));

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
        
        $__internal_396ab14c92101e391d4661d51931063ae29df1d5d97fed07bb8f206269203580->leave($__internal_396ab14c92101e391d4661d51931063ae29df1d5d97fed07bb8f206269203580_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jsonify/test/parse.js";
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
", "node_modules/jsonify/test/parse.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jsonify/test/parse.js");
    }
}
