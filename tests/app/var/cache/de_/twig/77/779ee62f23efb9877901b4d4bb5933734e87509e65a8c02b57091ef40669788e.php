<?php

/* node_modules/mkdirp/test/umask.js */
class __TwigTemplate_64479be55dd4ba46a8f482dd6f33a74df41ecc710b9241eb9fba09afc8dfb42b extends Twig_Template
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
        $__internal_05f0dd696ad9ad181ca548256fe9ad4c214cb80b721eedd0fae0b8b81b4a1d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05f0dd696ad9ad181ca548256fe9ad4c214cb80b721eedd0fae0b8b81b4a1d83->enter($__internal_05f0dd696ad9ad181ca548256fe9ad4c214cb80b721eedd0fae0b8b81b4a1d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mkdirp/test/umask.js"));

        // line 1
        echo "var mkdirp = require('../');
var path = require('path');
var fs = require('fs');
var exists = fs.exists || path.exists;
var test = require('tap').test;
var _0777 = parseInt('0777', 8);
var _0755 = parseInt('0755', 8);

test('implicit mode from umask', function (t) {
    t.plan(5);
    var x = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var y = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var z = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    
    var file = '/tmp/' + [x,y,z].join('/');
    
    mkdirp(file, function (err) {
        t.ifError(err);
        exists(file, function (ex) {
            t.ok(ex, 'file created');
            fs.stat(file, function (err, stat) {
                t.ifError(err);
                t.equal(stat.mode & _0777, _0777 & (~process.umask()));
                t.ok(stat.isDirectory(), 'target not a directory');
            });
        })
    });
});
";
        
        $__internal_05f0dd696ad9ad181ca548256fe9ad4c214cb80b721eedd0fae0b8b81b4a1d83->leave($__internal_05f0dd696ad9ad181ca548256fe9ad4c214cb80b721eedd0fae0b8b81b4a1d83_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mkdirp/test/umask.js";
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

test('implicit mode from umask', function (t) {
    t.plan(5);
    var x = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var y = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var z = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    
    var file = '/tmp/' + [x,y,z].join('/');
    
    mkdirp(file, function (err) {
        t.ifError(err);
        exists(file, function (ex) {
            t.ok(ex, 'file created');
            fs.stat(file, function (err, stat) {
                t.ifError(err);
                t.equal(stat.mode & _0777, _0777 & (~process.umask()));
                t.ok(stat.isDirectory(), 'target not a directory');
            });
        })
    });
});
", "node_modules/mkdirp/test/umask.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mkdirp/test/umask.js");
    }
}
