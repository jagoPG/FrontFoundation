<?php

/* node_modules/fsevents/node_modules/mkdirp/test/rel.js */
class __TwigTemplate_ea6006c2521dd9d2bd4f930a00c73257a775024a854d34ed3978c237c31e042c extends Twig_Template
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
        $__internal_3162fabb0f97094174c05ef952087b891c65387409eb0b2fe0e867d92344a574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3162fabb0f97094174c05ef952087b891c65387409eb0b2fe0e867d92344a574->enter($__internal_3162fabb0f97094174c05ef952087b891c65387409eb0b2fe0e867d92344a574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/mkdirp/test/rel.js"));

        // line 1
        echo "var mkdirp = require('../');
var path = require('path');
var fs = require('fs');
var exists = fs.exists || path.exists;
var test = require('tap').test;
var _0777 = parseInt('0777', 8);
var _0755 = parseInt('0755', 8);

test('rel', function (t) {
    t.plan(5);
    var x = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var y = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var z = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    
    var cwd = process.cwd();
    process.chdir('/tmp');
    
    var file = [x,y,z].join('/');
    
    mkdirp(file, _0755, function (err) {
        t.ifError(err);
        exists(file, function (ex) {
            t.ok(ex, 'file created');
            fs.stat(file, function (err, stat) {
                t.ifError(err);
                process.chdir(cwd);
                t.equal(stat.mode & _0777, _0755);
                t.ok(stat.isDirectory(), 'target not a directory');
            })
        })
    });
});
";
        
        $__internal_3162fabb0f97094174c05ef952087b891c65387409eb0b2fe0e867d92344a574->leave($__internal_3162fabb0f97094174c05ef952087b891c65387409eb0b2fe0e867d92344a574_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/mkdirp/test/rel.js";
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

test('rel', function (t) {
    t.plan(5);
    var x = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var y = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var z = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    
    var cwd = process.cwd();
    process.chdir('/tmp');
    
    var file = [x,y,z].join('/');
    
    mkdirp(file, _0755, function (err) {
        t.ifError(err);
        exists(file, function (ex) {
            t.ok(ex, 'file created');
            fs.stat(file, function (err, stat) {
                t.ifError(err);
                process.chdir(cwd);
                t.equal(stat.mode & _0777, _0755);
                t.ok(stat.isDirectory(), 'target not a directory');
            })
        })
    });
});
", "node_modules/fsevents/node_modules/mkdirp/test/rel.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/mkdirp/test/rel.js");
    }
}
