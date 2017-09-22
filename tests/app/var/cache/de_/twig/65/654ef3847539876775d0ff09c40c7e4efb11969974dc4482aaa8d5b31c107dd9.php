<?php

/* node_modules/fsevents/node_modules/mkdirp/test/return_sync.js */
class __TwigTemplate_719b246f374dafca8889b90ef716b0be68d23520e23071bb6f7ddaae962a0bf0 extends Twig_Template
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
        $__internal_5f16df439c701139d4c42d23c06ff715de241f52135482a09e1f66fb3d4528fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f16df439c701139d4c42d23c06ff715de241f52135482a09e1f66fb3d4528fc->enter($__internal_5f16df439c701139d4c42d23c06ff715de241f52135482a09e1f66fb3d4528fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/mkdirp/test/return_sync.js"));

        // line 1
        echo "var mkdirp = require('../');
var path = require('path');
var fs = require('fs');
var test = require('tap').test;

test('return value', function (t) {
    t.plan(2);
    var x = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var y = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var z = Math.floor(Math.random() * Math.pow(16,4)).toString(16);

    var file = '/tmp/' + [x,y,z].join('/');

    // should return the first dir created.
    // By this point, it would be profoundly surprising if /tmp didn't
    // already exist, since every other test makes things in there.
    // Note that this will throw on failure, which will fail the test.
    var made = mkdirp.sync(file);
    t.equal(made, '/tmp/' + x);

    // making the same file again should have no effect.
    made = mkdirp.sync(file);
    t.equal(made, null);
});
";
        
        $__internal_5f16df439c701139d4c42d23c06ff715de241f52135482a09e1f66fb3d4528fc->leave($__internal_5f16df439c701139d4c42d23c06ff715de241f52135482a09e1f66fb3d4528fc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/mkdirp/test/return_sync.js";
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

test('return value', function (t) {
    t.plan(2);
    var x = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var y = Math.floor(Math.random() * Math.pow(16,4)).toString(16);
    var z = Math.floor(Math.random() * Math.pow(16,4)).toString(16);

    var file = '/tmp/' + [x,y,z].join('/');

    // should return the first dir created.
    // By this point, it would be profoundly surprising if /tmp didn't
    // already exist, since every other test makes things in there.
    // Note that this will throw on failure, which will fail the test.
    var made = mkdirp.sync(file);
    t.equal(made, '/tmp/' + x);

    // making the same file again should have no effect.
    made = mkdirp.sync(file);
    t.equal(made, null);
});
", "node_modules/fsevents/node_modules/mkdirp/test/return_sync.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/mkdirp/test/return_sync.js");
    }
}
