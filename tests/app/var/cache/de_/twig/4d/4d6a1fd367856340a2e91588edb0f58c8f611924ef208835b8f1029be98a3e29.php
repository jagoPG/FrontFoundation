<?php

/* node_modules/fsevents/node_modules/mkdirp/test/root.js */
class __TwigTemplate_ddf6785e2ad93ab52564a47e014977010f23a7dcf916b59d2a0cff0521540208 extends Twig_Template
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
        $__internal_872a5da08cacc92b96a3744397cb89d6741013b515a4d899c39afc34ad39d590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_872a5da08cacc92b96a3744397cb89d6741013b515a4d899c39afc34ad39d590->enter($__internal_872a5da08cacc92b96a3744397cb89d6741013b515a4d899c39afc34ad39d590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/mkdirp/test/root.js"));

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
        
        $__internal_872a5da08cacc92b96a3744397cb89d6741013b515a4d899c39afc34ad39d590->leave($__internal_872a5da08cacc92b96a3744397cb89d6741013b515a4d899c39afc34ad39d590_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/mkdirp/test/root.js";
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
", "node_modules/fsevents/node_modules/mkdirp/test/root.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/mkdirp/test/root.js");
    }
}
