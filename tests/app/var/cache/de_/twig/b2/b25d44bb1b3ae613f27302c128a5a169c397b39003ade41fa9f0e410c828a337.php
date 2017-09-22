<?php

/* node_modules/fsevents/node_modules/mkdirp/test/race.js */
class __TwigTemplate_a94d40119a1c28f094510eaae66b3ed55031d8a1145c367af818298595ea29dd extends Twig_Template
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
        $__internal_2ba3b0c4968868eba1ce22d96b149258cc39d016caa025d026564a5556744254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba3b0c4968868eba1ce22d96b149258cc39d016caa025d026564a5556744254->enter($__internal_2ba3b0c4968868eba1ce22d96b149258cc39d016caa025d026564a5556744254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/mkdirp/test/race.js"));

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
        
        $__internal_2ba3b0c4968868eba1ce22d96b149258cc39d016caa025d026564a5556744254->leave($__internal_2ba3b0c4968868eba1ce22d96b149258cc39d016caa025d026564a5556744254_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/mkdirp/test/race.js";
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
", "node_modules/fsevents/node_modules/mkdirp/test/race.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/mkdirp/test/race.js");
    }
}
