<?php

/* node_modules/resolve/test/module_dir.js */
class __TwigTemplate_cf9e18d3276a727f09312c7be9fe219b49cd033aef1a4e6b3aaa4ed533f8ad9e extends Twig_Template
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
        $__internal_c160536dccf8d18670866c9a31e9e106f9e277807b5a6b5261bcb64ba2c3bd6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c160536dccf8d18670866c9a31e9e106f9e277807b5a6b5261bcb64ba2c3bd6e->enter($__internal_c160536dccf8d18670866c9a31e9e106f9e277807b5a6b5261bcb64ba2c3bd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/module_dir.js"));

        // line 1
        echo "var path = require('path');
var test = require('tape');
var resolve = require('../');

test('moduleDirectory strings', function (t) {
    t.plan(4);
    var dir = path.join(__dirname, 'module_dir');
    var xopts = {
        basedir: dir,
        moduleDirectory: 'xmodules'
    };
    resolve('aaa', xopts, function (err, res, pkg) {
        t.ifError(err);
        t.equal(res, path.join(dir, '/xmodules/aaa/index.js'));
    });

    var yopts = {
        basedir: dir,
        moduleDirectory: 'ymodules'
    };
    resolve('aaa', yopts, function (err, res, pkg) {
        t.ifError(err);
        t.equal(res, path.join(dir, '/ymodules/aaa/index.js'));
    });
});

test('moduleDirectory array', function (t) {
    t.plan(6);
    var dir = path.join(__dirname, 'module_dir');
    var aopts = {
        basedir: dir,
        moduleDirectory: ['xmodules', 'ymodules', 'zmodules']
    };
    resolve('aaa', aopts, function (err, res, pkg) {
        t.ifError(err);
        t.equal(res, path.join(dir, '/xmodules/aaa/index.js'));
    });

    var bopts = {
        basedir: dir,
        moduleDirectory: ['zmodules', 'ymodules', 'xmodules']
    };
    resolve('aaa', bopts, function (err, res, pkg) {
        t.ifError(err);
        t.equal(res, path.join(dir, '/ymodules/aaa/index.js'));
    });

    var copts = {
        basedir: dir,
        moduleDirectory: ['xmodules', 'ymodules', 'zmodules']
    };
    resolve('bbb', copts, function (err, res, pkg) {
        t.ifError(err);
        t.equal(res, path.join(dir, '/zmodules/bbb/main.js'));
    });
});
";
        
        $__internal_c160536dccf8d18670866c9a31e9e106f9e277807b5a6b5261bcb64ba2c3bd6e->leave($__internal_c160536dccf8d18670866c9a31e9e106f9e277807b5a6b5261bcb64ba2c3bd6e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/module_dir.js";
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

test('moduleDirectory strings', function (t) {
    t.plan(4);
    var dir = path.join(__dirname, 'module_dir');
    var xopts = {
        basedir: dir,
        moduleDirectory: 'xmodules'
    };
    resolve('aaa', xopts, function (err, res, pkg) {
        t.ifError(err);
        t.equal(res, path.join(dir, '/xmodules/aaa/index.js'));
    });

    var yopts = {
        basedir: dir,
        moduleDirectory: 'ymodules'
    };
    resolve('aaa', yopts, function (err, res, pkg) {
        t.ifError(err);
        t.equal(res, path.join(dir, '/ymodules/aaa/index.js'));
    });
});

test('moduleDirectory array', function (t) {
    t.plan(6);
    var dir = path.join(__dirname, 'module_dir');
    var aopts = {
        basedir: dir,
        moduleDirectory: ['xmodules', 'ymodules', 'zmodules']
    };
    resolve('aaa', aopts, function (err, res, pkg) {
        t.ifError(err);
        t.equal(res, path.join(dir, '/xmodules/aaa/index.js'));
    });

    var bopts = {
        basedir: dir,
        moduleDirectory: ['zmodules', 'ymodules', 'xmodules']
    };
    resolve('aaa', bopts, function (err, res, pkg) {
        t.ifError(err);
        t.equal(res, path.join(dir, '/ymodules/aaa/index.js'));
    });

    var copts = {
        basedir: dir,
        moduleDirectory: ['xmodules', 'ymodules', 'zmodules']
    };
    resolve('bbb', copts, function (err, res, pkg) {
        t.ifError(err);
        t.equal(res, path.join(dir, '/zmodules/bbb/main.js'));
    });
});
", "node_modules/resolve/test/module_dir.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/module_dir.js");
    }
}
