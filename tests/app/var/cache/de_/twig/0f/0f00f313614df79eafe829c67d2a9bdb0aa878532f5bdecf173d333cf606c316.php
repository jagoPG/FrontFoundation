<?php

/* node_modules/mkdirp/test/return.js */
class __TwigTemplate_acb5ac9560cef75574b2f80105b4a39d1f3438bc3daf8a4aafa98c289c340b79 extends Twig_Template
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
        $__internal_09e278a0c08e208769ad0a21ad400130c1ef18911aac4e1993fe4583c1148699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e278a0c08e208769ad0a21ad400130c1ef18911aac4e1993fe4583c1148699->enter($__internal_09e278a0c08e208769ad0a21ad400130c1ef18911aac4e1993fe4583c1148699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mkdirp/test/return.js"));

        // line 1
        echo "var mkdirp = require('../');
var path = require('path');
var fs = require('fs');
var test = require('tap').test;

test('return value', function (t) {
    t.plan(4);
    var x = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var y = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var z = Math.floor(Math.random() * Math.pow(16,4)).toString(16);

    var file = '/tmp/' + [x,y,z].join('/');

    // should return the first dir created.
    // By this point, it would be profoundly surprising if /tmp didn't
    // already exist, since every other test makes things in there.
    mkdirp(file, function (err, made) {
        t.ifError(err);
        t.equal(made, '/tmp/' + x);
        mkdirp(file, function (err, made) {
          t.ifError(err);
          t.equal(made, null);
        });
    });
});
";
        
        $__internal_09e278a0c08e208769ad0a21ad400130c1ef18911aac4e1993fe4583c1148699->leave($__internal_09e278a0c08e208769ad0a21ad400130c1ef18911aac4e1993fe4583c1148699_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mkdirp/test/return.js";
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
    t.plan(4);
    var x = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var y = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var z = Math.floor(Math.random() * Math.pow(16,4)).toString(16);

    var file = '/tmp/' + [x,y,z].join('/');

    // should return the first dir created.
    // By this point, it would be profoundly surprising if /tmp didn't
    // already exist, since every other test makes things in there.
    mkdirp(file, function (err, made) {
        t.ifError(err);
        t.equal(made, '/tmp/' + x);
        mkdirp(file, function (err, made) {
          t.ifError(err);
          t.equal(made, null);
        });
    });
});
", "node_modules/mkdirp/test/return.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mkdirp/test/return.js");
    }
}
