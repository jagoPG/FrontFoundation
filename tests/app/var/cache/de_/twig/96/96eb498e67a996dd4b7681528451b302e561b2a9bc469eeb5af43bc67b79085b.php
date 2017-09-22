<?php

/* node_modules/fsevents/node_modules/mkdirp/test/perm_sync.js */
class __TwigTemplate_a6f811684de03478e26fa2346973fc2396037c6271ae8106b952a0b89666125a extends Twig_Template
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
        $__internal_71d3af41db91890cf66ac5a7d9f26693574f61305072663e955dd2125253fbe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d3af41db91890cf66ac5a7d9f26693574f61305072663e955dd2125253fbe1->enter($__internal_71d3af41db91890cf66ac5a7d9f26693574f61305072663e955dd2125253fbe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/mkdirp/test/perm_sync.js"));

        // line 1
        echo "var mkdirp = require('../');
var path = require('path');
var fs = require('fs');
var exists = fs.exists || path.exists;
var test = require('tap').test;
var _0777 = parseInt('0777', 8);
var _0755 = parseInt('0755', 8);

test('sync perm', function (t) {
    t.plan(4);
    var file = '/tmp/' + (Math.random() * (1<<30)).toString(16) + '.json';
    
    mkdirp.sync(file, _0755);
    exists(file, function (ex) {
        t.ok(ex, 'file created');
        fs.stat(file, function (err, stat) {
            t.ifError(err);
            t.equal(stat.mode & _0777, _0755);
            t.ok(stat.isDirectory(), 'target not a directory');
        });
    });
});

test('sync root perm', function (t) {
    t.plan(3);
    
    var file = '/tmp';
    mkdirp.sync(file, _0755);
    exists(file, function (ex) {
        t.ok(ex, 'file created');
        fs.stat(file, function (err, stat) {
            t.ifError(err);
            t.ok(stat.isDirectory(), 'target not a directory');
        })
    });
});
";
        
        $__internal_71d3af41db91890cf66ac5a7d9f26693574f61305072663e955dd2125253fbe1->leave($__internal_71d3af41db91890cf66ac5a7d9f26693574f61305072663e955dd2125253fbe1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/mkdirp/test/perm_sync.js";
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
var exists = fs.exists || path.exists;
var test = require('tap').test;
var _0777 = parseInt('0777', 8);
var _0755 = parseInt('0755', 8);

test('sync perm', function (t) {
    t.plan(4);
    var file = '/tmp/' + (Math.random() * (1<<30)).toString(16) + '.json';
    
    mkdirp.sync(file, _0755);
    exists(file, function (ex) {
        t.ok(ex, 'file created');
        fs.stat(file, function (err, stat) {
            t.ifError(err);
            t.equal(stat.mode & _0777, _0755);
            t.ok(stat.isDirectory(), 'target not a directory');
        });
    });
});

test('sync root perm', function (t) {
    t.plan(3);
    
    var file = '/tmp';
    mkdirp.sync(file, _0755);
    exists(file, function (ex) {
        t.ok(ex, 'file created');
        fs.stat(file, function (err, stat) {
            t.ifError(err);
            t.ok(stat.isDirectory(), 'target not a directory');
        })
    });
});
", "node_modules/fsevents/node_modules/mkdirp/test/perm_sync.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/mkdirp/test/perm_sync.js");
    }
}
