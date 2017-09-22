<?php

/* node_modules/resolve/test/dotdot.js */
class __TwigTemplate_4678779429d018f84caea33831b3ad22c2d2f92f209c9332b02f3cfdcf683c5d extends Twig_Template
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
        $__internal_9f441458a3053377f534e7d376c19f1ff5f63f4bb0c47d659ea08c10b55a8f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f441458a3053377f534e7d376c19f1ff5f63f4bb0c47d659ea08c10b55a8f0d->enter($__internal_9f441458a3053377f534e7d376c19f1ff5f63f4bb0c47d659ea08c10b55a8f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/dotdot.js"));

        // line 1
        echo "var path = require('path');
var test = require('tape');
var resolve = require('../');

test('dotdot', function (t) {
    t.plan(4);
    var dir = path.join(__dirname, '/dotdot/abc');

    resolve('..', { basedir: dir }, function (err, res, pkg) {
        t.ifError(err);
        t.equal(res, path.join(__dirname, 'dotdot/index.js'));
    });

    resolve('.', { basedir: dir }, function (err, res, pkg) {
        t.ifError(err);
        t.equal(res, path.join(dir, 'index.js'));
    });
});

test('dotdot sync', function (t) {
    t.plan(2);
    var dir = path.join(__dirname, '/dotdot/abc');

    var a = resolve.sync('..', { basedir: dir });
    t.equal(a, path.join(__dirname, 'dotdot/index.js'));

    var b = resolve.sync('.', { basedir: dir });
    t.equal(b, path.join(dir, 'index.js'));
});
";
        
        $__internal_9f441458a3053377f534e7d376c19f1ff5f63f4bb0c47d659ea08c10b55a8f0d->leave($__internal_9f441458a3053377f534e7d376c19f1ff5f63f4bb0c47d659ea08c10b55a8f0d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/dotdot.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var path = require('path');
var test = require('tape');
var resolve = require('../');

test('dotdot', function (t) {
    t.plan(4);
    var dir = path.join(__dirname, '/dotdot/abc');

    resolve('..', { basedir: dir }, function (err, res, pkg) {
        t.ifError(err);
        t.equal(res, path.join(__dirname, 'dotdot/index.js'));
    });

    resolve('.', { basedir: dir }, function (err, res, pkg) {
        t.ifError(err);
        t.equal(res, path.join(dir, 'index.js'));
    });
});

test('dotdot sync', function (t) {
    t.plan(2);
    var dir = path.join(__dirname, '/dotdot/abc');

    var a = resolve.sync('..', { basedir: dir });
    t.equal(a, path.join(__dirname, 'dotdot/index.js'));

    var b = resolve.sync('.', { basedir: dir });
    t.equal(b, path.join(dir, 'index.js'));
});
", "node_modules/resolve/test/dotdot.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/dotdot.js");
    }
}
