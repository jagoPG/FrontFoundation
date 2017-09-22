<?php

/* node_modules/mkdirp/test/clobber.js */
class __TwigTemplate_d756fca78adb436c8a518d030a3e85aae16480d0235f87d9dbd665ed03f4496a extends Twig_Template
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
        $__internal_09908e9b59615693633e5ceefa5616a0b63cea81df75d54b57d22e6057a057aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09908e9b59615693633e5ceefa5616a0b63cea81df75d54b57d22e6057a057aa->enter($__internal_09908e9b59615693633e5ceefa5616a0b63cea81df75d54b57d22e6057a057aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mkdirp/test/clobber.js"));

        // line 1
        echo "var mkdirp = require('../').mkdirp;
var path = require('path');
var fs = require('fs');
var test = require('tap').test;
var _0755 = parseInt('0755', 8);

var ps = [ '', 'tmp' ];

for (var i = 0; i < 25; i++) {
    var dir = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    ps.push(dir);
}

var file = ps.join('/');

// a file in the way
var itw = ps.slice(0, 3).join('/');


test('clobber-pre', function (t) {
    console.error(\"about to write to \"+itw)
    fs.writeFileSync(itw, 'I AM IN THE WAY, THE TRUTH, AND THE LIGHT.');

    fs.stat(itw, function (er, stat) {
        t.ifError(er)
        t.ok(stat && stat.isFile(), 'should be file')
        t.end()
    })
})

test('clobber', function (t) {
    t.plan(2);
    mkdirp(file, _0755, function (err) {
        t.ok(err);
        t.equal(err.code, 'ENOTDIR');
        t.end();
    });
});
";
        
        $__internal_09908e9b59615693633e5ceefa5616a0b63cea81df75d54b57d22e6057a057aa->leave($__internal_09908e9b59615693633e5ceefa5616a0b63cea81df75d54b57d22e6057a057aa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mkdirp/test/clobber.js";
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
var test = require('tap').test;
var _0755 = parseInt('0755', 8);

var ps = [ '', 'tmp' ];

for (var i = 0; i < 25; i++) {
    var dir = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    ps.push(dir);
}

var file = ps.join('/');

// a file in the way
var itw = ps.slice(0, 3).join('/');


test('clobber-pre', function (t) {
    console.error(\"about to write to \"+itw)
    fs.writeFileSync(itw, 'I AM IN THE WAY, THE TRUTH, AND THE LIGHT.');

    fs.stat(itw, function (er, stat) {
        t.ifError(er)
        t.ok(stat && stat.isFile(), 'should be file')
        t.end()
    })
})

test('clobber', function (t) {
    t.plan(2);
    mkdirp(file, _0755, function (err) {
        t.ok(err);
        t.equal(err.code, 'ENOTDIR');
        t.end();
    });
});
", "node_modules/mkdirp/test/clobber.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mkdirp/test/clobber.js");
    }
}
