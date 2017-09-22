<?php

/* node_modules/mkdirp/test/opts_fs_sync.js */
class __TwigTemplate_6db036c0c7c32b10bfafd0ed797f750fe7f0e940d96d85a93d17bc5f7287ea52 extends Twig_Template
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
        $__internal_3a363cff840564a117b98c4bb87207832c7755aeb5a8fb3512091071b87a3454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a363cff840564a117b98c4bb87207832c7755aeb5a8fb3512091071b87a3454->enter($__internal_3a363cff840564a117b98c4bb87207832c7755aeb5a8fb3512091071b87a3454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mkdirp/test/opts_fs_sync.js"));

        // line 1
        echo "var mkdirp = require('../');
var path = require('path');
var test = require('tap').test;
var mockfs = require('mock-fs');
var _0777 = parseInt('0777', 8);
var _0755 = parseInt('0755', 8);

test('opts.fs sync', function (t) {
    t.plan(4);
    
    var x = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var y = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var z = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    
    var file = '/beep/boop/' + [x,y,z].join('/');
    var xfs = mockfs.fs();
    
    mkdirp.sync(file, { fs: xfs, mode: _0755 });
    xfs.exists(file, function (ex) {
        t.ok(ex, 'created file');
        xfs.stat(file, function (err, stat) {
            t.ifError(err);
            t.equal(stat.mode & _0777, _0755);
            t.ok(stat.isDirectory(), 'target not a directory');
        });
    });
});
";
        
        $__internal_3a363cff840564a117b98c4bb87207832c7755aeb5a8fb3512091071b87a3454->leave($__internal_3a363cff840564a117b98c4bb87207832c7755aeb5a8fb3512091071b87a3454_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mkdirp/test/opts_fs_sync.js";
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

test('opts.fs sync', function (t) {
    t.plan(4);
    
    var x = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var y = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var z = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    
    var file = '/beep/boop/' + [x,y,z].join('/');
    var xfs = mockfs.fs();
    
    mkdirp.sync(file, { fs: xfs, mode: _0755 });
    xfs.exists(file, function (ex) {
        t.ok(ex, 'created file');
        xfs.stat(file, function (err, stat) {
            t.ifError(err);
            t.equal(stat.mode & _0777, _0755);
            t.ok(stat.isDirectory(), 'target not a directory');
        });
    });
});
", "node_modules/mkdirp/test/opts_fs_sync.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mkdirp/test/opts_fs_sync.js");
    }
}
