<?php

/* node_modules/json-stable-stringify/test/str.js */
class __TwigTemplate_ceb9816b76f578c9f481e3ce1d63763b1a6a3c0fa86bc55c735a1a4dc4a475b4 extends Twig_Template
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
        $__internal_c9f210ca6243ea6f0c8c8b0a81582d7b277339c19d8b98515ef21e6a1cc7a844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f210ca6243ea6f0c8c8b0a81582d7b277339c19d8b98515ef21e6a1cc7a844->enter($__internal_c9f210ca6243ea6f0c8c8b0a81582d7b277339c19d8b98515ef21e6a1cc7a844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-stable-stringify/test/str.js"));

        // line 1
        echo "var test = require('tape');
var stringify = require('../');

test('simple object', function (t) {
    t.plan(1);
    var obj = { c: 6, b: [4,5], a: 3, z: null };
    t.equal(stringify(obj), '{\"a\":3,\"b\":[4,5],\"c\":6,\"z\":null}');
});

test('object with undefined', function (t) {
\tt.plan(1);
\tvar obj = { a: 3, z: undefined };
\tt.equal(stringify(obj), '{\"a\":3}');
});

test('array with undefined', function (t) {
\tt.plan(1);
\tvar obj = [4, undefined, 6];
\tt.equal(stringify(obj), '[4,null,6]');
});

test('object with empty string', function (t) {
\tt.plan(1);
\tvar obj = { a: 3, z: '' };
\tt.equal(stringify(obj), '{\"a\":3,\"z\":\"\"}');
});

test('array with empty string', function (t) {
\tt.plan(1);
\tvar obj = [4, '', 6];
\tt.equal(stringify(obj), '[4,\"\",6]');
});
";
        
        $__internal_c9f210ca6243ea6f0c8c8b0a81582d7b277339c19d8b98515ef21e6a1cc7a844->leave($__internal_c9f210ca6243ea6f0c8c8b0a81582d7b277339c19d8b98515ef21e6a1cc7a844_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-stable-stringify/test/str.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape');
var stringify = require('../');

test('simple object', function (t) {
    t.plan(1);
    var obj = { c: 6, b: [4,5], a: 3, z: null };
    t.equal(stringify(obj), '{\"a\":3,\"b\":[4,5],\"c\":6,\"z\":null}');
});

test('object with undefined', function (t) {
\tt.plan(1);
\tvar obj = { a: 3, z: undefined };
\tt.equal(stringify(obj), '{\"a\":3}');
});

test('array with undefined', function (t) {
\tt.plan(1);
\tvar obj = [4, undefined, 6];
\tt.equal(stringify(obj), '[4,null,6]');
});

test('object with empty string', function (t) {
\tt.plan(1);
\tvar obj = { a: 3, z: '' };
\tt.equal(stringify(obj), '{\"a\":3,\"z\":\"\"}');
});

test('array with empty string', function (t) {
\tt.plan(1);
\tvar obj = [4, '', 6];
\tt.equal(stringify(obj), '[4,\"\",6]');
});
", "node_modules/json-stable-stringify/test/str.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-stable-stringify/test/str.js");
    }
}
