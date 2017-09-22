<?php

/* node_modules/mkdirp/test/perm.js */
class __TwigTemplate_a97679882030e2cc80966a123c9b2fbce469afd946f3064bedbefa1ec43b9a06 extends Twig_Template
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
        $__internal_2b16a10d61a1bd937db43b9f18c3a5eb8a248daa9a5a18ad5afc75d3e0505d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b16a10d61a1bd937db43b9f18c3a5eb8a248daa9a5a18ad5afc75d3e0505d26->enter($__internal_2b16a10d61a1bd937db43b9f18c3a5eb8a248daa9a5a18ad5afc75d3e0505d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mkdirp/test/perm.js"));

        // line 1
        echo "var mkdirp = require('../');
var path = require('path');
var fs = require('fs');
var exists = fs.exists || path.exists;
var test = require('tap').test;
var _0777 = parseInt('0777', 8);
var _0755 = parseInt('0755', 8);

test('async perm', function (t) {
    t.plan(5);
    var file = '/tmp/' + (Math.random() * (1<<30)).toString(16);
    
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

test('async root perm', function (t) {
    mkdirp('/tmp', _0755, function (err) {
        if (err) t.fail(err);
        t.end();
    });
    t.end();
});
";
        
        $__internal_2b16a10d61a1bd937db43b9f18c3a5eb8a248daa9a5a18ad5afc75d3e0505d26->leave($__internal_2b16a10d61a1bd937db43b9f18c3a5eb8a248daa9a5a18ad5afc75d3e0505d26_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mkdirp/test/perm.js";
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

test('async perm', function (t) {
    t.plan(5);
    var file = '/tmp/' + (Math.random() * (1<<30)).toString(16);
    
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

test('async root perm', function (t) {
    mkdirp('/tmp', _0755, function (err) {
        if (err) t.fail(err);
        t.end();
    });
    t.end();
});
", "node_modules/mkdirp/test/perm.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mkdirp/test/perm.js");
    }
}
