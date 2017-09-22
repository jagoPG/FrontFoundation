<?php

/* node_modules/fsevents/node_modules/mkdirp/test/chmod.js */
class __TwigTemplate_33b6f062db065641676018177112df3f80ebf65c37870a8e0a7f08c364d10ca4 extends Twig_Template
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
        $__internal_9e61c77df91dd8129a033c20477dc243ccaab6eb85b3166e5e5f860a4cebb65c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e61c77df91dd8129a033c20477dc243ccaab6eb85b3166e5e5f860a4cebb65c->enter($__internal_9e61c77df91dd8129a033c20477dc243ccaab6eb85b3166e5e5f860a4cebb65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/mkdirp/test/chmod.js"));

        // line 1
        echo "var mkdirp = require('../').mkdirp;
var path = require('path');
var fs = require('fs');
var test = require('tap').test;
var _0777 = parseInt('0777', 8);
var _0755 = parseInt('0755', 8);
var _0744 = parseInt('0744', 8);

var ps = [ '', 'tmp' ];

for (var i = 0; i < 25; i++) {
    var dir = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    ps.push(dir);
}

var file = ps.join('/');

test('chmod-pre', function (t) {
    var mode = _0744
    mkdirp(file, mode, function (er) {
        t.ifError(er, 'should not error');
        fs.stat(file, function (er, stat) {
            t.ifError(er, 'should exist');
            t.ok(stat && stat.isDirectory(), 'should be directory');
            t.equal(stat && stat.mode & _0777, mode, 'should be 0744');
            t.end();
        });
    });
});

test('chmod', function (t) {
    var mode = _0755
    mkdirp(file, mode, function (er) {
        t.ifError(er, 'should not error');
        fs.stat(file, function (er, stat) {
            t.ifError(er, 'should exist');
            t.ok(stat && stat.isDirectory(), 'should be directory');
            t.end();
        });
    });
});
";
        
        $__internal_9e61c77df91dd8129a033c20477dc243ccaab6eb85b3166e5e5f860a4cebb65c->leave($__internal_9e61c77df91dd8129a033c20477dc243ccaab6eb85b3166e5e5f860a4cebb65c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/mkdirp/test/chmod.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var mkdirp = require('../').mkdirp;
var path = require('path');
var fs = require('fs');
var test = require('tap').test;
var _0777 = parseInt('0777', 8);
var _0755 = parseInt('0755', 8);
var _0744 = parseInt('0744', 8);

var ps = [ '', 'tmp' ];

for (var i = 0; i < 25; i++) {
    var dir = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    ps.push(dir);
}

var file = ps.join('/');

test('chmod-pre', function (t) {
    var mode = _0744
    mkdirp(file, mode, function (er) {
        t.ifError(er, 'should not error');
        fs.stat(file, function (er, stat) {
            t.ifError(er, 'should exist');
            t.ok(stat && stat.isDirectory(), 'should be directory');
            t.equal(stat && stat.mode & _0777, mode, 'should be 0744');
            t.end();
        });
    });
});

test('chmod', function (t) {
    var mode = _0755
    mkdirp(file, mode, function (er) {
        t.ifError(er, 'should not error');
        fs.stat(file, function (er, stat) {
            t.ifError(er, 'should exist');
            t.ok(stat && stat.isDirectory(), 'should be directory');
            t.end();
        });
    });
});
", "node_modules/fsevents/node_modules/mkdirp/test/chmod.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/mkdirp/test/chmod.js");
    }
}
