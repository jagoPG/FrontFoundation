<?php

/* node_modules/string.prototype.trim/test/shimmed.js */
class __TwigTemplate_83f1d0c2b39d3857088405bdada1eb3756061d12e4d1732462b9ad11758e5d1d extends Twig_Template
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
        $__internal_fa9a5cef3b0721a25eee514cbab46ca64079292e7aa87d132b24cf883667d1c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa9a5cef3b0721a25eee514cbab46ca64079292e7aa87d132b24cf883667d1c9->enter($__internal_fa9a5cef3b0721a25eee514cbab46ca64079292e7aa87d132b24cf883667d1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/string.prototype.trim/test/shimmed.js"));

        // line 1
        echo "'use strict';

var trim = require('../');
trim.shim();

var test = require('tape');
var defineProperties = require('define-properties');
var bind = require('function-bind');
var isEnumerable = Object.prototype.propertyIsEnumerable;
var functionsHaveNames = function f() {}.name === 'f';

var runTests = require('./tests');

test('shimmed', function (t) {
\tt.equal(String.prototype.trim.length, 0, 'String#trim has a length of 0');
\tt.test('Function name', { skip: !functionsHaveNames }, function (st) {
\t\tst.equal(String.prototype.trim.name, 'trim', 'String#trim has name \"trim\"');
\t\tst.end();
\t});

\tt.test('enumerability', { skip: !defineProperties.supportsDescriptors }, function (et) {
\t\tet.equal(false, isEnumerable.call(String.prototype, 'trim'), 'String#trim is not enumerable');
\t\tet.end();
\t});

\tvar supportsStrictMode = (function () { return typeof this === 'undefined'; }());

\tt.test('bad string/this value', { skip: !supportsStrictMode }, function (st) {
\t\tst.throws(function () { return trim(undefined, 'a'); }, TypeError, 'undefined is not an object');
\t\tst.throws(function () { return trim(null, 'a'); }, TypeError, 'null is not an object');
\t\tst.end();
\t});

\trunTests(bind.call(Function.call, String.prototype.trim), t);

\tt.end();
});
";
        
        $__internal_fa9a5cef3b0721a25eee514cbab46ca64079292e7aa87d132b24cf883667d1c9->leave($__internal_fa9a5cef3b0721a25eee514cbab46ca64079292e7aa87d132b24cf883667d1c9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/string.prototype.trim/test/shimmed.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var trim = require('../');
trim.shim();

var test = require('tape');
var defineProperties = require('define-properties');
var bind = require('function-bind');
var isEnumerable = Object.prototype.propertyIsEnumerable;
var functionsHaveNames = function f() {}.name === 'f';

var runTests = require('./tests');

test('shimmed', function (t) {
\tt.equal(String.prototype.trim.length, 0, 'String#trim has a length of 0');
\tt.test('Function name', { skip: !functionsHaveNames }, function (st) {
\t\tst.equal(String.prototype.trim.name, 'trim', 'String#trim has name \"trim\"');
\t\tst.end();
\t});

\tt.test('enumerability', { skip: !defineProperties.supportsDescriptors }, function (et) {
\t\tet.equal(false, isEnumerable.call(String.prototype, 'trim'), 'String#trim is not enumerable');
\t\tet.end();
\t});

\tvar supportsStrictMode = (function () { return typeof this === 'undefined'; }());

\tt.test('bad string/this value', { skip: !supportsStrictMode }, function (st) {
\t\tst.throws(function () { return trim(undefined, 'a'); }, TypeError, 'undefined is not an object');
\t\tst.throws(function () { return trim(null, 'a'); }, TypeError, 'null is not an object');
\t\tst.end();
\t});

\trunTests(bind.call(Function.call, String.prototype.trim), t);

\tt.end();
});
", "node_modules/string.prototype.trim/test/shimmed.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/string.prototype.trim/test/shimmed.js");
    }
}
