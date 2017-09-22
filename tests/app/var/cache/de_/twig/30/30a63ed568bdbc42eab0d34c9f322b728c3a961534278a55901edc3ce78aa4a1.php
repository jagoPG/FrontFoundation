<?php

/* node_modules/fsevents/node_modules/mkdirp/test/umask_sync.js */
class __TwigTemplate_26f9aa68cc1f70ab3226f93613f2f57d0052b598db1bda5946009106bf990a5f extends Twig_Template
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
        $__internal_e1aa21932f851e4c645c0246e1b95de7ddcd7fc469575d851636602b88bc8016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1aa21932f851e4c645c0246e1b95de7ddcd7fc469575d851636602b88bc8016->enter($__internal_e1aa21932f851e4c645c0246e1b95de7ddcd7fc469575d851636602b88bc8016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/mkdirp/test/umask_sync.js"));

        // line 1
        echo "var mkdirp = require('../');
var path = require('path');
var fs = require('fs');
var exists = fs.exists || path.exists;
var test = require('tap').test;
var _0777 = parseInt('0777', 8);
var _0755 = parseInt('0755', 8);

test('umask sync modes', function (t) {
    t.plan(4);
    var x = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var y = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var z = Math.floor(Math.random() * Math.pow(16,4)).toString(16);

    var file = '/tmp/' + [x,y,z].join('/');

    try {
        mkdirp.sync(file);
    } catch (err) {
        t.fail(err);
        return t.end();
    }

    exists(file, function (ex) {
        t.ok(ex, 'file created');
        fs.stat(file, function (err, stat) {
            t.ifError(err);
            t.equal(stat.mode & _0777, (_0777 & (~process.umask())));
            t.ok(stat.isDirectory(), 'target not a directory');
        });
    });
});
";
        
        $__internal_e1aa21932f851e4c645c0246e1b95de7ddcd7fc469575d851636602b88bc8016->leave($__internal_e1aa21932f851e4c645c0246e1b95de7ddcd7fc469575d851636602b88bc8016_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/mkdirp/test/umask_sync.js";
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

test('umask sync modes', function (t) {
    t.plan(4);
    var x = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var y = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var z = Math.floor(Math.random() * Math.pow(16,4)).toString(16);

    var file = '/tmp/' + [x,y,z].join('/');

    try {
        mkdirp.sync(file);
    } catch (err) {
        t.fail(err);
        return t.end();
    }

    exists(file, function (ex) {
        t.ok(ex, 'file created');
        fs.stat(file, function (err, stat) {
            t.ifError(err);
            t.equal(stat.mode & _0777, (_0777 & (~process.umask())));
            t.ok(stat.isDirectory(), 'target not a directory');
        });
    });
});
", "node_modules/fsevents/node_modules/mkdirp/test/umask_sync.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/mkdirp/test/umask_sync.js");
    }
}
