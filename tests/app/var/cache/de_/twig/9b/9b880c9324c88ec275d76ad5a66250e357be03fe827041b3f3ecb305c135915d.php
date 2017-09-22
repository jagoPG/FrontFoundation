<?php

/* node_modules/mkdirp/test/umask_sync.js */
class __TwigTemplate_a5fbacb706d60592b590df1e1688651d27a6d72d8ceb8ee6c6ee36a237f3cf8f extends Twig_Template
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
        $__internal_57bf492fe42a4feb2bae543c13b302409cd76880d4f6fbcb8b41ffedd07d6e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57bf492fe42a4feb2bae543c13b302409cd76880d4f6fbcb8b41ffedd07d6e1c->enter($__internal_57bf492fe42a4feb2bae543c13b302409cd76880d4f6fbcb8b41ffedd07d6e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mkdirp/test/umask_sync.js"));

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
        
        $__internal_57bf492fe42a4feb2bae543c13b302409cd76880d4f6fbcb8b41ffedd07d6e1c->leave($__internal_57bf492fe42a4feb2bae543c13b302409cd76880d4f6fbcb8b41ffedd07d6e1c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mkdirp/test/umask_sync.js";
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
", "node_modules/mkdirp/test/umask_sync.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mkdirp/test/umask_sync.js");
    }
}
