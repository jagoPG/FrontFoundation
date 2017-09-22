<?php

/* node_modules/fsevents/node_modules/json-stable-stringify/test/replacer.js */
class __TwigTemplate_23d6ca8dab11148f6b328d2850ffd71a756385bd03647f8f101f29f810dc8239 extends Twig_Template
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
        $__internal_4ebfb140e372a3ae18674b7881d7cec2c532d4a7d9d31ac87d411129fd038b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ebfb140e372a3ae18674b7881d7cec2c532d4a7d9d31ac87d411129fd038b04->enter($__internal_4ebfb140e372a3ae18674b7881d7cec2c532d4a7d9d31ac87d411129fd038b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-stable-stringify/test/replacer.js"));

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
        
        $__internal_4ebfb140e372a3ae18674b7881d7cec2c532d4a7d9d31ac87d411129fd038b04->leave($__internal_4ebfb140e372a3ae18674b7881d7cec2c532d4a7d9d31ac87d411129fd038b04_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-stable-stringify/test/replacer.js";
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
", "node_modules/fsevents/node_modules/json-stable-stringify/test/replacer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-stable-stringify/test/replacer.js");
    }
}
