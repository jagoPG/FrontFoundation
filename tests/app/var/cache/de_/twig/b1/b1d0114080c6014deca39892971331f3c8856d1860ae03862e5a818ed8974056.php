<?php

/* node_modules/fsevents/node_modules/json-stable-stringify/test/str.js */
class __TwigTemplate_92ffbbb41cebab9e03794cf892c226271f07ea3a78bf208d2a1452de7074ef90 extends Twig_Template
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
        $__internal_f8755992f321156ff9e9d5df7f757e948e3519246b9c9517b57f7b17655af84d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8755992f321156ff9e9d5df7f757e948e3519246b9c9517b57f7b17655af84d->enter($__internal_f8755992f321156ff9e9d5df7f757e948e3519246b9c9517b57f7b17655af84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-stable-stringify/test/str.js"));

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
        
        $__internal_f8755992f321156ff9e9d5df7f757e948e3519246b9c9517b57f7b17655af84d->leave($__internal_f8755992f321156ff9e9d5df7f757e948e3519246b9c9517b57f7b17655af84d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-stable-stringify/test/str.js";
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
", "node_modules/fsevents/node_modules/json-stable-stringify/test/str.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-stable-stringify/test/str.js");
    }
}
