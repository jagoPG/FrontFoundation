<?php

/* node_modules/mkdirp/test/perm_sync.js */
class __TwigTemplate_d06b19d0f4a66bb6c440f7e62461dd29ffbca60bca9198850ad1b9c5e48ad9dd extends Twig_Template
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
        $__internal_c41c7b47690ce2edf1bc06760f037f8be32eec416af58a9203bac30462057264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c41c7b47690ce2edf1bc06760f037f8be32eec416af58a9203bac30462057264->enter($__internal_c41c7b47690ce2edf1bc06760f037f8be32eec416af58a9203bac30462057264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mkdirp/test/perm_sync.js"));

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
        
        $__internal_c41c7b47690ce2edf1bc06760f037f8be32eec416af58a9203bac30462057264->leave($__internal_c41c7b47690ce2edf1bc06760f037f8be32eec416af58a9203bac30462057264_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mkdirp/test/perm_sync.js";
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
", "node_modules/mkdirp/test/perm_sync.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mkdirp/test/perm_sync.js");
    }
}
