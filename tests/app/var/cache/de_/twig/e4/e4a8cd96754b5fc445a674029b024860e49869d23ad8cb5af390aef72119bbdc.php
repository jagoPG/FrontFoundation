<?php

/* node_modules/mkdirp/test/root.js */
class __TwigTemplate_9e413dbbacda0f9fb9c07b9330f745f5c1f98c77bd2cc1620d2e3b4756204ca6 extends Twig_Template
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
        $__internal_4d02d563a29bc096dc65f05636f26c22613a7022aa230903d2412e41be4abcd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d02d563a29bc096dc65f05636f26c22613a7022aa230903d2412e41be4abcd2->enter($__internal_4d02d563a29bc096dc65f05636f26c22613a7022aa230903d2412e41be4abcd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mkdirp/test/root.js"));

        // line 1
        echo "var mkdirp = require('../');
var path = require('path');
var fs = require('fs');
var test = require('tap').test;
var _0755 = parseInt('0755', 8);

test('root', function (t) {
    // '/' on unix, 'c:/' on windows.
    var file = path.resolve('/');

    mkdirp(file, _0755, function (err) {
        if (err) throw err
        fs.stat(file, function (er, stat) {
            if (er) throw er
            t.ok(stat.isDirectory(), 'target is a directory');
            t.end();
        })
    });
});
";
        
        $__internal_4d02d563a29bc096dc65f05636f26c22613a7022aa230903d2412e41be4abcd2->leave($__internal_4d02d563a29bc096dc65f05636f26c22613a7022aa230903d2412e41be4abcd2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mkdirp/test/root.js";
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
var test = require('tap').test;
var _0755 = parseInt('0755', 8);

test('root', function (t) {
    // '/' on unix, 'c:/' on windows.
    var file = path.resolve('/');

    mkdirp(file, _0755, function (err) {
        if (err) throw err
        fs.stat(file, function (er, stat) {
            if (er) throw er
            t.ok(stat.isDirectory(), 'target is a directory');
            t.end();
        })
    });
});
", "node_modules/mkdirp/test/root.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mkdirp/test/root.js");
    }
}
