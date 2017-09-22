<?php

/* node_modules/mkdirp/test/race.js */
class __TwigTemplate_b33dfc085d13a400e2db1b1dc6164d143f5f507b2c6c17b12e0afa9a8f72241c extends Twig_Template
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
        $__internal_9e31f1bc63960d94d8c0d9dae05e50b53a45d2e77aec9a96d261b159ed395302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e31f1bc63960d94d8c0d9dae05e50b53a45d2e77aec9a96d261b159ed395302->enter($__internal_9e31f1bc63960d94d8c0d9dae05e50b53a45d2e77aec9a96d261b159ed395302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mkdirp/test/race.js"));

        // line 1
        echo "var mkdirp = require('../').mkdirp;
var path = require('path');
var fs = require('fs');
var exists = fs.exists || path.exists;
var test = require('tap').test;
var _0777 = parseInt('0777', 8);
var _0755 = parseInt('0755', 8);

test('race', function (t) {
    t.plan(10);
    var ps = [ '', 'tmp' ];
    
    for (var i = 0; i < 25; i++) {
        var dir = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
        ps.push(dir);
    }
    var file = ps.join('/');
    
    var res = 2;
    mk(file);
    
    mk(file);
    
    function mk (file, cb) {
        mkdirp(file, _0755, function (err) {
            t.ifError(err);
            exists(file, function (ex) {
                t.ok(ex, 'file created');
                fs.stat(file, function (err, stat) {
                    t.ifError(err);
                    t.equal(stat.mode & _0777, _0755);
                    t.ok(stat.isDirectory(), 'target not a directory');
                });
            })
        });
    }
});
";
        
        $__internal_9e31f1bc63960d94d8c0d9dae05e50b53a45d2e77aec9a96d261b159ed395302->leave($__internal_9e31f1bc63960d94d8c0d9dae05e50b53a45d2e77aec9a96d261b159ed395302_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mkdirp/test/race.js";
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
var exists = fs.exists || path.exists;
var test = require('tap').test;
var _0777 = parseInt('0777', 8);
var _0755 = parseInt('0755', 8);

test('race', function (t) {
    t.plan(10);
    var ps = [ '', 'tmp' ];
    
    for (var i = 0; i < 25; i++) {
        var dir = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
        ps.push(dir);
    }
    var file = ps.join('/');
    
    var res = 2;
    mk(file);
    
    mk(file);
    
    function mk (file, cb) {
        mkdirp(file, _0755, function (err) {
            t.ifError(err);
            exists(file, function (ex) {
                t.ok(ex, 'file created');
                fs.stat(file, function (err, stat) {
                    t.ifError(err);
                    t.equal(stat.mode & _0777, _0755);
                    t.ok(stat.isDirectory(), 'target not a directory');
                });
            })
        });
    }
});
", "node_modules/mkdirp/test/race.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mkdirp/test/race.js");
    }
}
