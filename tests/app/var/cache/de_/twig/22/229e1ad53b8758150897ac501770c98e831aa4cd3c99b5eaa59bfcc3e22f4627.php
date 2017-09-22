<?php

/* node_modules/mkdirp/test/opts_fs.js */
class __TwigTemplate_30f24436eff4f737ef34896defb316725f326bbae99c6b08aba0c9f1d624c324 extends Twig_Template
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
        $__internal_a412397f92913acdfa2500c99cf908f8a278c713c7f17b3b9d2a9eaa4c490eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a412397f92913acdfa2500c99cf908f8a278c713c7f17b3b9d2a9eaa4c490eca->enter($__internal_a412397f92913acdfa2500c99cf908f8a278c713c7f17b3b9d2a9eaa4c490eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mkdirp/test/opts_fs.js"));

        // line 1
        echo "var mkdirp = require('../');
var path = require('path');
var test = require('tap').test;
var mockfs = require('mock-fs');
var _0777 = parseInt('0777', 8);
var _0755 = parseInt('0755', 8);

test('opts.fs', function (t) {
    t.plan(5);
    
    var x = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var y = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var z = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    
    var file = '/beep/boop/' + [x,y,z].join('/');
    var xfs = mockfs.fs();
    
    mkdirp(file, { fs: xfs, mode: _0755 }, function (err) {
        t.ifError(err);
        xfs.exists(file, function (ex) {
            t.ok(ex, 'created file');
            xfs.stat(file, function (err, stat) {
                t.ifError(err);
                t.equal(stat.mode & _0777, _0755);
                t.ok(stat.isDirectory(), 'target not a directory');
            });
        });
    });
});
";
        
        $__internal_a412397f92913acdfa2500c99cf908f8a278c713c7f17b3b9d2a9eaa4c490eca->leave($__internal_a412397f92913acdfa2500c99cf908f8a278c713c7f17b3b9d2a9eaa4c490eca_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mkdirp/test/opts_fs.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var mkdirp = require('../');
var path = require('path');
var test = require('tap').test;
var mockfs = require('mock-fs');
var _0777 = parseInt('0777', 8);
var _0755 = parseInt('0755', 8);

test('opts.fs', function (t) {
    t.plan(5);
    
    var x = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var y = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var z = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    
    var file = '/beep/boop/' + [x,y,z].join('/');
    var xfs = mockfs.fs();
    
    mkdirp(file, { fs: xfs, mode: _0755 }, function (err) {
        t.ifError(err);
        xfs.exists(file, function (ex) {
            t.ok(ex, 'created file');
            xfs.stat(file, function (err, stat) {
                t.ifError(err);
                t.equal(stat.mode & _0777, _0755);
                t.ok(stat.isDirectory(), 'target not a directory');
            });
        });
    });
});
", "node_modules/mkdirp/test/opts_fs.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mkdirp/test/opts_fs.js");
    }
}
