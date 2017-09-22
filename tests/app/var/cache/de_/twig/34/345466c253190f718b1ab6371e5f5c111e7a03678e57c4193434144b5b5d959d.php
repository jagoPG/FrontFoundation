<?php

/* node_modules/is-regex/test.js */
class __TwigTemplate_c19bccb5907e5de6ad94af8102e226f9c8d84ce6cdf54627fc83f557201379fb extends Twig_Template
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
        $__internal_137af0e429f460d11cd57d5da3ea5f46c4346a301d69f55754e305624b35cdee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137af0e429f460d11cd57d5da3ea5f46c4346a301d69f55754e305624b35cdee->enter($__internal_137af0e429f460d11cd57d5da3ea5f46c4346a301d69f55754e305624b35cdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-regex/test.js"));

        // line 1
        echo "'use strict';

var test = require('tape');
var isRegex = require('./');
var hasToStringTag = typeof Symbol === 'function' && typeof Symbol.toStringTag === 'symbol';

test('not regexes', function (t) {
\tt.notOk(isRegex(), 'undefined is not regex');
\tt.notOk(isRegex(null), 'null is not regex');
\tt.notOk(isRegex(false), 'false is not regex');
\tt.notOk(isRegex(true), 'true is not regex');
\tt.notOk(isRegex(42), 'number is not regex');
\tt.notOk(isRegex('foo'), 'string is not regex');
\tt.notOk(isRegex([]), 'array is not regex');
\tt.notOk(isRegex({}), 'object is not regex');
\tt.notOk(isRegex(function () {}), 'function is not regex');
\tt.end();
});

test('@@toStringTag', { skip: !hasToStringTag }, function (t) {
\tvar regex = /a/g;
\tvar fakeRegex = {
\t\ttoString: function () { return String(regex); },
\t\tvalueOf: function () { return regex; }
\t};
\tfakeRegex[Symbol.toStringTag] = 'RegExp';
\tt.notOk(isRegex(fakeRegex), 'fake RegExp with @@toStringTag \"RegExp\" is not regex');
\tt.end();
});

test('regexes', function (t) {
\tt.ok(isRegex(/a/g), 'regex literal is regex');
\tt.ok(isRegex(new RegExp('a', 'g')), 'regex object is regex');
\tt.end();
});

test('does not mutate regexes', function (t) {
\tt.test('lastIndex is a marker object', function (st) {
\t\tvar regex = /a/;
\t\tvar marker = {};
\t\tregex.lastIndex = marker;
\t\tst.equal(regex.lastIndex, marker, 'lastIndex is the marker object');
\t\tst.ok(isRegex(regex), 'is regex');
\t\tst.equal(regex.lastIndex, marker, 'lastIndex is the marker object after isRegex');
\t\tst.end();
\t});

\tt.test('lastIndex is nonzero', function (st) {
\t\tvar regex = /a/;
\t\tregex.lastIndex = 3;
\t\tst.equal(regex.lastIndex, 3, 'lastIndex is 3');
\t\tst.ok(isRegex(regex), 'is regex');
\t\tst.equal(regex.lastIndex, 3, 'lastIndex is 3 after isRegex');
\t\tst.end();
\t});

\tt.end();
});
";
        
        $__internal_137af0e429f460d11cd57d5da3ea5f46c4346a301d69f55754e305624b35cdee->leave($__internal_137af0e429f460d11cd57d5da3ea5f46c4346a301d69f55754e305624b35cdee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-regex/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var test = require('tape');
var isRegex = require('./');
var hasToStringTag = typeof Symbol === 'function' && typeof Symbol.toStringTag === 'symbol';

test('not regexes', function (t) {
\tt.notOk(isRegex(), 'undefined is not regex');
\tt.notOk(isRegex(null), 'null is not regex');
\tt.notOk(isRegex(false), 'false is not regex');
\tt.notOk(isRegex(true), 'true is not regex');
\tt.notOk(isRegex(42), 'number is not regex');
\tt.notOk(isRegex('foo'), 'string is not regex');
\tt.notOk(isRegex([]), 'array is not regex');
\tt.notOk(isRegex({}), 'object is not regex');
\tt.notOk(isRegex(function () {}), 'function is not regex');
\tt.end();
});

test('@@toStringTag', { skip: !hasToStringTag }, function (t) {
\tvar regex = /a/g;
\tvar fakeRegex = {
\t\ttoString: function () { return String(regex); },
\t\tvalueOf: function () { return regex; }
\t};
\tfakeRegex[Symbol.toStringTag] = 'RegExp';
\tt.notOk(isRegex(fakeRegex), 'fake RegExp with @@toStringTag \"RegExp\" is not regex');
\tt.end();
});

test('regexes', function (t) {
\tt.ok(isRegex(/a/g), 'regex literal is regex');
\tt.ok(isRegex(new RegExp('a', 'g')), 'regex object is regex');
\tt.end();
});

test('does not mutate regexes', function (t) {
\tt.test('lastIndex is a marker object', function (st) {
\t\tvar regex = /a/;
\t\tvar marker = {};
\t\tregex.lastIndex = marker;
\t\tst.equal(regex.lastIndex, marker, 'lastIndex is the marker object');
\t\tst.ok(isRegex(regex), 'is regex');
\t\tst.equal(regex.lastIndex, marker, 'lastIndex is the marker object after isRegex');
\t\tst.end();
\t});

\tt.test('lastIndex is nonzero', function (st) {
\t\tvar regex = /a/;
\t\tregex.lastIndex = 3;
\t\tst.equal(regex.lastIndex, 3, 'lastIndex is 3');
\t\tst.ok(isRegex(regex), 'is regex');
\t\tst.equal(regex.lastIndex, 3, 'lastIndex is 3 after isRegex');
\t\tst.end();
\t});

\tt.end();
});
", "node_modules/is-regex/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-regex/test.js");
    }
}
