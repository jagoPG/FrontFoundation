<?php

/* node_modules/json-stable-stringify/test/replacer.js */
class __TwigTemplate_5481c160149d26626ba6b351e2651334f03f8ca5be6bbbab12fbc7d231ebdabc extends Twig_Template
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
        $__internal_c13f6a304ae2a7f47545384d34dfbaf8ac3a7cfdf20d3c2542ae0b5233d305b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c13f6a304ae2a7f47545384d34dfbaf8ac3a7cfdf20d3c2542ae0b5233d305b5->enter($__internal_c13f6a304ae2a7f47545384d34dfbaf8ac3a7cfdf20d3c2542ae0b5233d305b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-stable-stringify/test/replacer.js"));

        // line 1
        echo "var test = require('tape');
var stringify = require('../');

test('replace root', function (t) {
\tt.plan(1);

\tvar obj = { a: 1, b: 2, c: false };
\tvar replacer = function(key, value) { return 'one'; };

\tt.equal(stringify(obj, { replacer: replacer }), '\"one\"');
});

test('replace numbers', function (t) {
\tt.plan(1);

\tvar obj = { a: 1, b: 2, c: false };
\tvar replacer = function(key, value) {
\t\tif(value === 1) return 'one';
\t\tif(value === 2) return 'two';
\t\treturn value;
\t};

\tt.equal(stringify(obj, { replacer: replacer }), '{\"a\":\"one\",\"b\":\"two\",\"c\":false}');
});

test('replace with object', function (t) {
\tt.plan(1);

\tvar obj = { a: 1, b: 2, c: false };
\tvar replacer = function(key, value) {
\t\tif(key === 'b') return { d: 1 };
\t\tif(value === 1) return 'one';
\t\treturn value;
\t};

\tt.equal(stringify(obj, { replacer: replacer }), '{\"a\":\"one\",\"b\":{\"d\":\"one\"},\"c\":false}');
});

test('replace with undefined', function (t) {
\tt.plan(1);

\tvar obj = { a: 1, b: 2, c: false };
\tvar replacer = function(key, value) {
\t\tif(value === false) return;
\t\treturn value;
\t};

\tt.equal(stringify(obj, { replacer: replacer }), '{\"a\":1,\"b\":2}');
});

test('replace with array', function (t) {
\tt.plan(1);

\tvar obj = { a: 1, b: 2, c: false };
\tvar replacer = function(key, value) {
\t\tif(key === 'b') return ['one', 'two'];
\t\treturn value;
\t};

\tt.equal(stringify(obj, { replacer: replacer }), '{\"a\":1,\"b\":[\"one\",\"two\"],\"c\":false}');
});

test('replace array item', function (t) {
\tt.plan(1);

\tvar obj = { a: 1, b: 2, c: [1,2] };
\tvar replacer = function(key, value) {
\t\tif(value === 1) return 'one';
\t\tif(value === 2) return 'two';
\t\treturn value;
\t};

\tt.equal(stringify(obj, { replacer: replacer }), '{\"a\":\"one\",\"b\":\"two\",\"c\":[\"one\",\"two\"]}');
});
";
        
        $__internal_c13f6a304ae2a7f47545384d34dfbaf8ac3a7cfdf20d3c2542ae0b5233d305b5->leave($__internal_c13f6a304ae2a7f47545384d34dfbaf8ac3a7cfdf20d3c2542ae0b5233d305b5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-stable-stringify/test/replacer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape');
var stringify = require('../');

test('replace root', function (t) {
\tt.plan(1);

\tvar obj = { a: 1, b: 2, c: false };
\tvar replacer = function(key, value) { return 'one'; };

\tt.equal(stringify(obj, { replacer: replacer }), '\"one\"');
});

test('replace numbers', function (t) {
\tt.plan(1);

\tvar obj = { a: 1, b: 2, c: false };
\tvar replacer = function(key, value) {
\t\tif(value === 1) return 'one';
\t\tif(value === 2) return 'two';
\t\treturn value;
\t};

\tt.equal(stringify(obj, { replacer: replacer }), '{\"a\":\"one\",\"b\":\"two\",\"c\":false}');
});

test('replace with object', function (t) {
\tt.plan(1);

\tvar obj = { a: 1, b: 2, c: false };
\tvar replacer = function(key, value) {
\t\tif(key === 'b') return { d: 1 };
\t\tif(value === 1) return 'one';
\t\treturn value;
\t};

\tt.equal(stringify(obj, { replacer: replacer }), '{\"a\":\"one\",\"b\":{\"d\":\"one\"},\"c\":false}');
});

test('replace with undefined', function (t) {
\tt.plan(1);

\tvar obj = { a: 1, b: 2, c: false };
\tvar replacer = function(key, value) {
\t\tif(value === false) return;
\t\treturn value;
\t};

\tt.equal(stringify(obj, { replacer: replacer }), '{\"a\":1,\"b\":2}');
});

test('replace with array', function (t) {
\tt.plan(1);

\tvar obj = { a: 1, b: 2, c: false };
\tvar replacer = function(key, value) {
\t\tif(key === 'b') return ['one', 'two'];
\t\treturn value;
\t};

\tt.equal(stringify(obj, { replacer: replacer }), '{\"a\":1,\"b\":[\"one\",\"two\"],\"c\":false}');
});

test('replace array item', function (t) {
\tt.plan(1);

\tvar obj = { a: 1, b: 2, c: [1,2] };
\tvar replacer = function(key, value) {
\t\tif(value === 1) return 'one';
\t\tif(value === 2) return 'two';
\t\treturn value;
\t};

\tt.equal(stringify(obj, { replacer: replacer }), '{\"a\":\"one\",\"b\":\"two\",\"c\":[\"one\",\"two\"]}');
});
", "node_modules/json-stable-stringify/test/replacer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-stable-stringify/test/replacer.js");
    }
}
