<?php

/* node_modules/fsevents/node_modules/mkdirp/test/return.js */
class __TwigTemplate_91a06ebed0f9a63ab0fea3ec4e6e649c8966947d62a3bf339534d62791ee9f96 extends Twig_Template
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
        $__internal_07a2dc633a72177dffe61955686bf46c55c53f5253023b13ccaee1f8bfbbaecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a2dc633a72177dffe61955686bf46c55c53f5253023b13ccaee1f8bfbbaecb->enter($__internal_07a2dc633a72177dffe61955686bf46c55c53f5253023b13ccaee1f8bfbbaecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/mkdirp/test/return.js"));

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
        
        $__internal_07a2dc633a72177dffe61955686bf46c55c53f5253023b13ccaee1f8bfbbaecb->leave($__internal_07a2dc633a72177dffe61955686bf46c55c53f5253023b13ccaee1f8bfbbaecb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/mkdirp/test/return.js";
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
", "node_modules/fsevents/node_modules/mkdirp/test/return.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/mkdirp/test/return.js");
    }
}
