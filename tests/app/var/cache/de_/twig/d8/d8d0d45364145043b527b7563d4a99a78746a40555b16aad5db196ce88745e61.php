<?php

/* node_modules/fsevents/node_modules/mkdirp/test/sync.js */
class __TwigTemplate_b2e0c921a2dfa67980b0b6cd6d3aa7a198d1410a4c47add397283cde579988c8 extends Twig_Template
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
        $__internal_99cc7fc9a4249f0c013c86d6acfd765d389f8f63e4b5622a95744edfe489dfa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99cc7fc9a4249f0c013c86d6acfd765d389f8f63e4b5622a95744edfe489dfa1->enter($__internal_99cc7fc9a4249f0c013c86d6acfd765d389f8f63e4b5622a95744edfe489dfa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/mkdirp/test/sync.js"));

        // line 1
        echo "var mkdirp = require('../');
var path = require('path');
var fs = require('fs');
var exists = fs.exists || path.exists;
var test = require('tap').test;
var _0777 = parseInt('0777', 8);
var _0755 = parseInt('0755', 8);

test('sync', function (t) {
    t.plan(4);
    var x = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var y = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var z = Math.floor(Math.random() * Math.pow(16,4)).toString(16);

    var file = '/tmp/' + [x,y,z].join('/');

    try {
        mkdirp.sync(file, _0755);
    } catch (err) {
        t.fail(err);
        return t.end();
    }

    exists(file, function (ex) {
        t.ok(ex, 'file created');
        fs.stat(file, function (err, stat) {
            t.ifError(err);
            t.equal(stat.mode & _0777, _0755);
            t.ok(stat.isDirectory(), 'target not a directory');
        });
    });
});
";
        
        $__internal_99cc7fc9a4249f0c013c86d6acfd765d389f8f63e4b5622a95744edfe489dfa1->leave($__internal_99cc7fc9a4249f0c013c86d6acfd765d389f8f63e4b5622a95744edfe489dfa1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/mkdirp/test/sync.js";
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

test('sync', function (t) {
    t.plan(4);
    var x = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var y = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var z = Math.floor(Math.random() * Math.pow(16,4)).toString(16);

    var file = '/tmp/' + [x,y,z].join('/');

    try {
        mkdirp.sync(file, _0755);
    } catch (err) {
        t.fail(err);
        return t.end();
    }

    exists(file, function (ex) {
        t.ok(ex, 'file created');
        fs.stat(file, function (err, stat) {
            t.ifError(err);
            t.equal(stat.mode & _0777, _0755);
            t.ok(stat.isDirectory(), 'target not a directory');
        });
    });
});
", "node_modules/fsevents/node_modules/mkdirp/test/sync.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/mkdirp/test/sync.js");
    }
}
