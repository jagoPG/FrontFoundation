<?php

/* node_modules/mkdirp/test/return_sync.js */
class __TwigTemplate_064946ee0096f467fb5b8d49066a204a00dbeb1957d687bfee1197dc69c7137b extends Twig_Template
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
        $__internal_05d0eaacf680734860ebb4317f848e2b9a2fd70af66b2986f16de06574cb4377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d0eaacf680734860ebb4317f848e2b9a2fd70af66b2986f16de06574cb4377->enter($__internal_05d0eaacf680734860ebb4317f848e2b9a2fd70af66b2986f16de06574cb4377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mkdirp/test/return_sync.js"));

        // line 1
        echo "var mkdirp = require('../');
var path = require('path');
var fs = require('fs');
var test = require('tap').test;

test('return value', function (t) {
    t.plan(2);
    var x = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var y = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var z = Math.floor(Math.random() * Math.pow(16,4)).toString(16);

    var file = '/tmp/' + [x,y,z].join('/');

    // should return the first dir created.
    // By this point, it would be profoundly surprising if /tmp didn't
    // already exist, since every other test makes things in there.
    // Note that this will throw on failure, which will fail the test.
    var made = mkdirp.sync(file);
    t.equal(made, '/tmp/' + x);

    // making the same file again should have no effect.
    made = mkdirp.sync(file);
    t.equal(made, null);
});
";
        
        $__internal_05d0eaacf680734860ebb4317f848e2b9a2fd70af66b2986f16de06574cb4377->leave($__internal_05d0eaacf680734860ebb4317f848e2b9a2fd70af66b2986f16de06574cb4377_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mkdirp/test/return_sync.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var mkdirp = require('../');
var path = require('path');
var fs = require('fs');
var test = require('tap').test;

test('return value', function (t) {
    t.plan(2);
    var x = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var y = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var z = Math.floor(Math.random() * Math.pow(16,4)).toString(16);

    var file = '/tmp/' + [x,y,z].join('/');

    // should return the first dir created.
    // By this point, it would be profoundly surprising if /tmp didn't
    // already exist, since every other test makes things in there.
    // Note that this will throw on failure, which will fail the test.
    var made = mkdirp.sync(file);
    t.equal(made, '/tmp/' + x);

    // making the same file again should have no effect.
    made = mkdirp.sync(file);
    t.equal(made, null);
});
", "node_modules/mkdirp/test/return_sync.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mkdirp/test/return_sync.js");
    }
}
