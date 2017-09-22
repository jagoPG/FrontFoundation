<?php

/* node_modules/fsevents/node_modules/json-stable-stringify/test/space.js */
class __TwigTemplate_a562aadb4663572dc4155002e12838820313f4d54744211dcf29184745ff1c3f extends Twig_Template
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
        $__internal_50fb48d12286f8c2667d6bddd35f51f9060a2ad95fcc22b6391266243dc23efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50fb48d12286f8c2667d6bddd35f51f9060a2ad95fcc22b6391266243dc23efd->enter($__internal_50fb48d12286f8c2667d6bddd35f51f9060a2ad95fcc22b6391266243dc23efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-stable-stringify/test/space.js"));

        // line 1
        echo "var test = require('tape');
var stringify = require('../');

test('space parameter', function (t) {
    t.plan(1);
    var obj = { one: 1, two: 2 };
    t.equal(stringify(obj, {space: '  '}), ''
        + '{\\n'
        + '  \"one\": 1,\\n'
        + '  \"two\": 2\\n'
        + '}'
    );
});

test('space parameter (with tabs)', function (t) {
    t.plan(1);
    var obj = { one: 1, two: 2 };
    t.equal(stringify(obj, {space: '\\t'}), ''
        + '{\\n'
        + '\\t\"one\": 1,\\n'
        + '\\t\"two\": 2\\n'
        + '}'
    );
});

test('space parameter (with a number)', function (t) {
    t.plan(1);
    var obj = { one: 1, two: 2 };
    t.equal(stringify(obj, {space: 3}), ''
        + '{\\n'
        + '   \"one\": 1,\\n'
        + '   \"two\": 2\\n'
        + '}'
    );
});

test('space parameter (nested objects)', function (t) {
    t.plan(1);
    var obj = { one: 1, two: { b: 4, a: [2,3] } };
    t.equal(stringify(obj, {space: '  '}), ''
        + '{\\n'
        + '  \"one\": 1,\\n'
        + '  \"two\": {\\n'
        + '    \"a\": [\\n'
        + '      2,\\n'
        + '      3\\n'
        + '    ],\\n'
        + '    \"b\": 4\\n'
        + '  }\\n'
        + '}'
    );
});

test('space parameter (same as native)', function (t) {
    t.plan(1);
    // for this test, properties need to be in alphabetical order
    var obj = { one: 1, two: { a: [2,3], b: 4 } };
    t.equal(stringify(obj, {space: '  '}), JSON.stringify(obj, null, '  '));
});
";
        
        $__internal_50fb48d12286f8c2667d6bddd35f51f9060a2ad95fcc22b6391266243dc23efd->leave($__internal_50fb48d12286f8c2667d6bddd35f51f9060a2ad95fcc22b6391266243dc23efd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-stable-stringify/test/space.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape');
var stringify = require('../');

test('space parameter', function (t) {
    t.plan(1);
    var obj = { one: 1, two: 2 };
    t.equal(stringify(obj, {space: '  '}), ''
        + '{\\n'
        + '  \"one\": 1,\\n'
        + '  \"two\": 2\\n'
        + '}'
    );
});

test('space parameter (with tabs)', function (t) {
    t.plan(1);
    var obj = { one: 1, two: 2 };
    t.equal(stringify(obj, {space: '\\t'}), ''
        + '{\\n'
        + '\\t\"one\": 1,\\n'
        + '\\t\"two\": 2\\n'
        + '}'
    );
});

test('space parameter (with a number)', function (t) {
    t.plan(1);
    var obj = { one: 1, two: 2 };
    t.equal(stringify(obj, {space: 3}), ''
        + '{\\n'
        + '   \"one\": 1,\\n'
        + '   \"two\": 2\\n'
        + '}'
    );
});

test('space parameter (nested objects)', function (t) {
    t.plan(1);
    var obj = { one: 1, two: { b: 4, a: [2,3] } };
    t.equal(stringify(obj, {space: '  '}), ''
        + '{\\n'
        + '  \"one\": 1,\\n'
        + '  \"two\": {\\n'
        + '    \"a\": [\\n'
        + '      2,\\n'
        + '      3\\n'
        + '    ],\\n'
        + '    \"b\": 4\\n'
        + '  }\\n'
        + '}'
    );
});

test('space parameter (same as native)', function (t) {
    t.plan(1);
    // for this test, properties need to be in alphabetical order
    var obj = { one: 1, two: { a: [2,3], b: 4 } };
    t.equal(stringify(obj, {space: '  '}), JSON.stringify(obj, null, '  '));
});
", "node_modules/fsevents/node_modules/json-stable-stringify/test/space.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-stable-stringify/test/space.js");
    }
}
