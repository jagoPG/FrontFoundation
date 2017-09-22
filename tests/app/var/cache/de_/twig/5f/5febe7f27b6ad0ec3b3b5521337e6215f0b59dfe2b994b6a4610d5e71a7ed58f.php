<?php

/* node_modules/resolve/test/node_path.js */
class __TwigTemplate_368ddbc760a740f7a9f57fa3c4de2de706b2f059163b88d0822d79cc59b2289e extends Twig_Template
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
        $__internal_b501eb89d1e8741d8343b5e511e9bd80286ec5b55e18b1da1c01a5ff62aa47d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b501eb89d1e8741d8343b5e511e9bd80286ec5b55e18b1da1c01a5ff62aa47d5->enter($__internal_b501eb89d1e8741d8343b5e511e9bd80286ec5b55e18b1da1c01a5ff62aa47d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/node_path.js"));

        // line 1
        echo "var path = require('path');
var test = require('tape');
var resolve = require('../');

test('\$NODE_PATH', function (t) {
    t.plan(4);

    resolve('aaa', {
        paths: [
            path.join(__dirname, '/node_path/x'),
            path.join(__dirname, '/node_path/y')
        ],
        basedir: __dirname
    }, function (err, res) {
        t.equal(res, path.join(__dirname, '/node_path/x/aaa/index.js'));
    });

    resolve('bbb', {
        paths: [
            path.join(__dirname, '/node_path/x'),
            path.join(__dirname, '/node_path/y')
        ],
        basedir: __dirname
    }, function (err, res) {
        t.equal(res, path.join(__dirname, '/node_path/y/bbb/index.js'));
    });

    resolve('ccc', {
        paths: [
            path.join(__dirname, '/node_path/x'),
            path.join(__dirname, '/node_path/y')
        ],
        basedir: __dirname
    }, function (err, res) {
        t.equal(res, path.join(__dirname, '/node_path/x/ccc/index.js'));
    });

    // ensure that relative paths still resolve against the
    // regular `node_modules` correctly
    resolve('tap', {
        paths: [
            'node_path'
        ],
        basedir: 'node_path/x'
    }, function (err, res) {
        var root = require('tap/package.json').main;
        t.equal(res, path.resolve(__dirname, '..', 'node_modules/tap', root));
    });
});
";
        
        $__internal_b501eb89d1e8741d8343b5e511e9bd80286ec5b55e18b1da1c01a5ff62aa47d5->leave($__internal_b501eb89d1e8741d8343b5e511e9bd80286ec5b55e18b1da1c01a5ff62aa47d5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/node_path.js";
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

test('\$NODE_PATH', function (t) {
    t.plan(4);

    resolve('aaa', {
        paths: [
            path.join(__dirname, '/node_path/x'),
            path.join(__dirname, '/node_path/y')
        ],
        basedir: __dirname
    }, function (err, res) {
        t.equal(res, path.join(__dirname, '/node_path/x/aaa/index.js'));
    });

    resolve('bbb', {
        paths: [
            path.join(__dirname, '/node_path/x'),
            path.join(__dirname, '/node_path/y')
        ],
        basedir: __dirname
    }, function (err, res) {
        t.equal(res, path.join(__dirname, '/node_path/y/bbb/index.js'));
    });

    resolve('ccc', {
        paths: [
            path.join(__dirname, '/node_path/x'),
            path.join(__dirname, '/node_path/y')
        ],
        basedir: __dirname
    }, function (err, res) {
        t.equal(res, path.join(__dirname, '/node_path/x/ccc/index.js'));
    });

    // ensure that relative paths still resolve against the
    // regular `node_modules` correctly
    resolve('tap', {
        paths: [
            'node_path'
        ],
        basedir: 'node_path/x'
    }, function (err, res) {
        var root = require('tap/package.json').main;
        t.equal(res, path.resolve(__dirname, '..', 'node_modules/tap', root));
    });
});
", "node_modules/resolve/test/node_path.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/node_path.js");
    }
}
