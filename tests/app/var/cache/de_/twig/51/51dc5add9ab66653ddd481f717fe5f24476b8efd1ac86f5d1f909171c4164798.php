<?php

/* node_modules/fsevents/node_modules/mkdirp/test/clobber.js */
class __TwigTemplate_75ba2e8b9ba2d6059d2287bf7e303485ef2ada943ee02a3ae4dd688f42b1e976 extends Twig_Template
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
        $__internal_76a36fbb9b1874670bad7269ab2ed648b43bb5f763fce52d0eec55587bff1a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a36fbb9b1874670bad7269ab2ed648b43bb5f763fce52d0eec55587bff1a42->enter($__internal_76a36fbb9b1874670bad7269ab2ed648b43bb5f763fce52d0eec55587bff1a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/mkdirp/test/clobber.js"));

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
        
        $__internal_76a36fbb9b1874670bad7269ab2ed648b43bb5f763fce52d0eec55587bff1a42->leave($__internal_76a36fbb9b1874670bad7269ab2ed648b43bb5f763fce52d0eec55587bff1a42_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/mkdirp/test/clobber.js";
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
", "node_modules/fsevents/node_modules/mkdirp/test/clobber.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/mkdirp/test/clobber.js");
    }
}
