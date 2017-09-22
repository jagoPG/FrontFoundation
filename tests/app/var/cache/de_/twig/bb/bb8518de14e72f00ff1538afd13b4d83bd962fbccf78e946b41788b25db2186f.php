<?php

/* node_modules/mkdirp/test/mkdirp.js */
class __TwigTemplate_099abbe9c4fc8bc411c8e500ac3c6744e212df8853f9aa70fa97b733fdc1ca57 extends Twig_Template
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
        $__internal_8d9dd824f6786b02f103447bce87c3e050a0b36a44ec0ea67bd2bceb2dad4401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9dd824f6786b02f103447bce87c3e050a0b36a44ec0ea67bd2bceb2dad4401->enter($__internal_8d9dd824f6786b02f103447bce87c3e050a0b36a44ec0ea67bd2bceb2dad4401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mkdirp/test/mkdirp.js"));

        // line 1
        echo "var mkdirp = require('../');
var path = require('path');
var fs = require('fs');
var exists = fs.exists || path.exists;
var test = require('tap').test;
var _0777 = parseInt('0777', 8);
var _0755 = parseInt('0755', 8);

test('woo', function (t) {
    t.plan(5);
    var x = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var y = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var z = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    
    var file = '/tmp/' + [x,y,z].join('/');
    
    mkdirp(file, _0755, function (err) {
        t.ifError(err);
        exists(file, function (ex) {
            t.ok(ex, 'file created');
            fs.stat(file, function (err, stat) {
                t.ifError(err);
                t.equal(stat.mode & _0777, _0755);
                t.ok(stat.isDirectory(), 'target not a directory');
            })
        })
    });
});
";
        
        $__internal_8d9dd824f6786b02f103447bce87c3e050a0b36a44ec0ea67bd2bceb2dad4401->leave($__internal_8d9dd824f6786b02f103447bce87c3e050a0b36a44ec0ea67bd2bceb2dad4401_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mkdirp/test/mkdirp.js";
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

test('woo', function (t) {
    t.plan(5);
    var x = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var y = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var z = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    
    var file = '/tmp/' + [x,y,z].join('/');
    
    mkdirp(file, _0755, function (err) {
        t.ifError(err);
        exists(file, function (ex) {
            t.ok(ex, 'file created');
            fs.stat(file, function (err, stat) {
                t.ifError(err);
                t.equal(stat.mode & _0777, _0755);
                t.ok(stat.isDirectory(), 'target not a directory');
            })
        })
    });
});
", "node_modules/mkdirp/test/mkdirp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mkdirp/test/mkdirp.js");
    }
}
