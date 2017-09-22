<?php

/* node_modules/fsevents/node_modules/json-stable-stringify/test/nested.js */
class __TwigTemplate_ffae97a632963d3c447a771229eb9c942808d8d34545223684b0da0c201d4ffc extends Twig_Template
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
        $__internal_f03e5cbde139645dbadad3340d94d3a35c3b0c92061c3738cf9772ee95533ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03e5cbde139645dbadad3340d94d3a35c3b0c92061c3738cf9772ee95533ac5->enter($__internal_f03e5cbde139645dbadad3340d94d3a35c3b0c92061c3738cf9772ee95533ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-stable-stringify/test/nested.js"));

        // line 1
        echo "var test = require('tape');
var stringify = require('../');

test('nested', function (t) {
    t.plan(1);
    var obj = { c: 8, b: [{z:6,y:5,x:4},7], a: 3 };
    t.equal(stringify(obj), '{\"a\":3,\"b\":[{\"x\":4,\"y\":5,\"z\":6},7],\"c\":8}');
});

test('cyclic (default)', function (t) {
    t.plan(1);
    var one = { a: 1 };
    var two = { a: 2, one: one };
    one.two = two;
    try {
    \tstringify(one);
    } catch (ex) {
    \tt.equal(ex.toString(), 'TypeError: Converting circular structure to JSON');
    }
});

test('cyclic (specifically allowed)', function (t) {
    t.plan(1);
    var one = { a: 1 };
    var two = { a: 2, one: one };
    one.two = two;
    t.equal(stringify(one, {cycles:true}), '{\"a\":1,\"two\":{\"a\":2,\"one\":\"__cycle__\"}}');
});

test('repeated non-cyclic value', function(t) {
    t.plan(1);
    var one = { x: 1 };
    var two = { a: one, b: one };
    t.equal(stringify(two), '{\"a\":{\"x\":1},\"b\":{\"x\":1}}');
});
";
        
        $__internal_f03e5cbde139645dbadad3340d94d3a35c3b0c92061c3738cf9772ee95533ac5->leave($__internal_f03e5cbde139645dbadad3340d94d3a35c3b0c92061c3738cf9772ee95533ac5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-stable-stringify/test/nested.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape');
var stringify = require('../');

test('nested', function (t) {
    t.plan(1);
    var obj = { c: 8, b: [{z:6,y:5,x:4},7], a: 3 };
    t.equal(stringify(obj), '{\"a\":3,\"b\":[{\"x\":4,\"y\":5,\"z\":6},7],\"c\":8}');
});

test('cyclic (default)', function (t) {
    t.plan(1);
    var one = { a: 1 };
    var two = { a: 2, one: one };
    one.two = two;
    try {
    \tstringify(one);
    } catch (ex) {
    \tt.equal(ex.toString(), 'TypeError: Converting circular structure to JSON');
    }
});

test('cyclic (specifically allowed)', function (t) {
    t.plan(1);
    var one = { a: 1 };
    var two = { a: 2, one: one };
    one.two = two;
    t.equal(stringify(one, {cycles:true}), '{\"a\":1,\"two\":{\"a\":2,\"one\":\"__cycle__\"}}');
});

test('repeated non-cyclic value', function(t) {
    t.plan(1);
    var one = { x: 1 };
    var two = { a: one, b: one };
    t.equal(stringify(two), '{\"a\":{\"x\":1},\"b\":{\"x\":1}}');
});
", "node_modules/fsevents/node_modules/json-stable-stringify/test/nested.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-stable-stringify/test/nested.js");
    }
}
