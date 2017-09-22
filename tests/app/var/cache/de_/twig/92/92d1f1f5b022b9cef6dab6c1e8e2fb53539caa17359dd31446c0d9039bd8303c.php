<?php

/* node_modules/es-to-primitive/test/es5.js */
class __TwigTemplate_bec6535d144c3af4ea9ae3313dae89c3d34c819c82e5858dea5c15057aef4c2a extends Twig_Template
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
        $__internal_16813cad89a377f600d544acd85c21f1a1817a43afe5edda407fc8573fb95172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16813cad89a377f600d544acd85c21f1a1817a43afe5edda407fc8573fb95172->enter($__internal_16813cad89a377f600d544acd85c21f1a1817a43afe5edda407fc8573fb95172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-to-primitive/test/es5.js"));

        // line 1
        echo "'use strict';

var test = require('tape');
var toPrimitive = require('../es5');
var is = require('object-is');
var forEach = require('foreach');
var debug = require('util').inspect;

var primitives = [null, undefined, true, false, 0, -0, 42, NaN, Infinity, -Infinity, '', 'abc'];

test('primitives', function (t) {
\tforEach(primitives, function (i) {
\t\tt.ok(is(toPrimitive(i), i), 'toPrimitive(' + debug(i) + ') returns the same value');
\t\tt.ok(is(toPrimitive(i, String), i), 'toPrimitive(' + debug(i) + ', String) returns the same value');
\t\tt.ok(is(toPrimitive(i, Number), i), 'toPrimitive(' + debug(i) + ', Number) returns the same value');
\t});
\tt.end();
});

test('Arrays', function (t) {
\tvar arrays = [[], ['a', 'b'], [1, 2]];
\tforEach(arrays, function (arr) {
\t\tt.ok(is(toPrimitive(arr), arr.toString()), 'toPrimitive(' + debug(arr) + ') returns toString of the array');
\t\tt.equal(toPrimitive(arr, String), arr.toString(), 'toPrimitive(' + debug(arr) + ') returns toString of the array');
\t\tt.ok(is(toPrimitive(arr, Number), arr.toString()), 'toPrimitive(' + debug(arr) + ') returns toString of the array');
\t});
\tt.end();
});

test('Dates', function (t) {
\tvar dates = [new Date(), new Date(0), new Date(NaN)];
\tforEach(dates, function (date) {
\t\tt.equal(toPrimitive(date), date.toString(), 'toPrimitive(' + debug(date) + ') returns toString of the date');
\t\tt.equal(toPrimitive(date, String), date.toString(), 'toPrimitive(' + debug(date) + ') returns toString of the date');
\t\tt.ok(is(toPrimitive(date, Number), date.valueOf()), 'toPrimitive(' + debug(date) + ') returns valueOf of the date');
\t});
\tt.end();
});

var coercibleObject = { valueOf: function () { return 3; }, toString: function () { return 42; } };
var valueOfOnlyObject = { valueOf: function () { return 4; }, toString: function () { return {}; } };
var toStringOnlyObject = { valueOf: function () { return {}; }, toString: function () { return 7; } };
var coercibleFnObject = { valueOf: function () { return function valueOfFn() {}; }, toString: function () { return 42; } };
var uncoercibleObject = { valueOf: function () { return {}; }, toString: function () { return {}; } };
var uncoercibleFnObject = { valueOf: function () { return function valueOfFn() {}; }, toString: function () { return function toStrFn() {}; } };

test('Objects', function (t) {
\tt.equal(toPrimitive(coercibleObject), coercibleObject.valueOf(), 'coercibleObject with no hint coerces to valueOf');
\tt.equal(toPrimitive(coercibleObject, String), coercibleObject.toString(), 'coercibleObject with hint String coerces to toString');
\tt.equal(toPrimitive(coercibleObject, Number), coercibleObject.valueOf(), 'coercibleObject with hint Number coerces to valueOf');

\tt.equal(toPrimitive(coercibleFnObject), coercibleFnObject.toString(), 'coercibleFnObject coerces to toString');
\tt.equal(toPrimitive(coercibleFnObject, String), coercibleFnObject.toString(), 'coercibleFnObject with hint String coerces to toString');
\tt.equal(toPrimitive(coercibleFnObject, Number), coercibleFnObject.toString(), 'coercibleFnObject with hint Number coerces to toString');

\tt.ok(is(toPrimitive({}), '[object Object]'), '{} with no hint coerces to Object#toString');
\tt.equal(toPrimitive({}, String), '[object Object]', '{} with hint String coerces to Object#toString');
\tt.ok(is(toPrimitive({}, Number), '[object Object]'), '{} with hint Number coerces to Object#toString');

\tt.equal(toPrimitive(toStringOnlyObject), toStringOnlyObject.toString(), 'toStringOnlyObject returns toString');
\tt.equal(toPrimitive(toStringOnlyObject, String), toStringOnlyObject.toString(), 'toStringOnlyObject with hint String returns toString');
\tt.equal(toPrimitive(toStringOnlyObject, Number), toStringOnlyObject.toString(), 'toStringOnlyObject with hint Number returns toString');

\tt.equal(toPrimitive(valueOfOnlyObject), valueOfOnlyObject.valueOf(), 'valueOfOnlyObject returns valueOf');
\tt.equal(toPrimitive(valueOfOnlyObject, String), valueOfOnlyObject.valueOf(), 'valueOfOnlyObject with hint String returns valueOf');
\tt.equal(toPrimitive(valueOfOnlyObject, Number), valueOfOnlyObject.valueOf(), 'valueOfOnlyObject with hint Number returns valueOf');

\tt.test('exceptions', function (st) {
\t\tst['throws'](toPrimitive.bind(null, uncoercibleObject), TypeError, 'uncoercibleObject throws a TypeError');
\t\tst['throws'](toPrimitive.bind(null, uncoercibleObject, String), TypeError, 'uncoercibleObject with hint String throws a TypeError');
\t\tst['throws'](toPrimitive.bind(null, uncoercibleObject, Number), TypeError, 'uncoercibleObject with hint Number throws a TypeError');

\t\tst['throws'](toPrimitive.bind(null, uncoercibleFnObject), TypeError, 'uncoercibleFnObject throws a TypeError');
\t\tst['throws'](toPrimitive.bind(null, uncoercibleFnObject, String), TypeError, 'uncoercibleFnObject with hint String throws a TypeError');
\t\tst['throws'](toPrimitive.bind(null, uncoercibleFnObject, Number), TypeError, 'uncoercibleFnObject with hint Number throws a TypeError');
\t\tst.end();
\t});

\tt.end();
});
";
        
        $__internal_16813cad89a377f600d544acd85c21f1a1817a43afe5edda407fc8573fb95172->leave($__internal_16813cad89a377f600d544acd85c21f1a1817a43afe5edda407fc8573fb95172_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-to-primitive/test/es5.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var test = require('tape');
var toPrimitive = require('../es5');
var is = require('object-is');
var forEach = require('foreach');
var debug = require('util').inspect;

var primitives = [null, undefined, true, false, 0, -0, 42, NaN, Infinity, -Infinity, '', 'abc'];

test('primitives', function (t) {
\tforEach(primitives, function (i) {
\t\tt.ok(is(toPrimitive(i), i), 'toPrimitive(' + debug(i) + ') returns the same value');
\t\tt.ok(is(toPrimitive(i, String), i), 'toPrimitive(' + debug(i) + ', String) returns the same value');
\t\tt.ok(is(toPrimitive(i, Number), i), 'toPrimitive(' + debug(i) + ', Number) returns the same value');
\t});
\tt.end();
});

test('Arrays', function (t) {
\tvar arrays = [[], ['a', 'b'], [1, 2]];
\tforEach(arrays, function (arr) {
\t\tt.ok(is(toPrimitive(arr), arr.toString()), 'toPrimitive(' + debug(arr) + ') returns toString of the array');
\t\tt.equal(toPrimitive(arr, String), arr.toString(), 'toPrimitive(' + debug(arr) + ') returns toString of the array');
\t\tt.ok(is(toPrimitive(arr, Number), arr.toString()), 'toPrimitive(' + debug(arr) + ') returns toString of the array');
\t});
\tt.end();
});

test('Dates', function (t) {
\tvar dates = [new Date(), new Date(0), new Date(NaN)];
\tforEach(dates, function (date) {
\t\tt.equal(toPrimitive(date), date.toString(), 'toPrimitive(' + debug(date) + ') returns toString of the date');
\t\tt.equal(toPrimitive(date, String), date.toString(), 'toPrimitive(' + debug(date) + ') returns toString of the date');
\t\tt.ok(is(toPrimitive(date, Number), date.valueOf()), 'toPrimitive(' + debug(date) + ') returns valueOf of the date');
\t});
\tt.end();
});

var coercibleObject = { valueOf: function () { return 3; }, toString: function () { return 42; } };
var valueOfOnlyObject = { valueOf: function () { return 4; }, toString: function () { return {}; } };
var toStringOnlyObject = { valueOf: function () { return {}; }, toString: function () { return 7; } };
var coercibleFnObject = { valueOf: function () { return function valueOfFn() {}; }, toString: function () { return 42; } };
var uncoercibleObject = { valueOf: function () { return {}; }, toString: function () { return {}; } };
var uncoercibleFnObject = { valueOf: function () { return function valueOfFn() {}; }, toString: function () { return function toStrFn() {}; } };

test('Objects', function (t) {
\tt.equal(toPrimitive(coercibleObject), coercibleObject.valueOf(), 'coercibleObject with no hint coerces to valueOf');
\tt.equal(toPrimitive(coercibleObject, String), coercibleObject.toString(), 'coercibleObject with hint String coerces to toString');
\tt.equal(toPrimitive(coercibleObject, Number), coercibleObject.valueOf(), 'coercibleObject with hint Number coerces to valueOf');

\tt.equal(toPrimitive(coercibleFnObject), coercibleFnObject.toString(), 'coercibleFnObject coerces to toString');
\tt.equal(toPrimitive(coercibleFnObject, String), coercibleFnObject.toString(), 'coercibleFnObject with hint String coerces to toString');
\tt.equal(toPrimitive(coercibleFnObject, Number), coercibleFnObject.toString(), 'coercibleFnObject with hint Number coerces to toString');

\tt.ok(is(toPrimitive({}), '[object Object]'), '{} with no hint coerces to Object#toString');
\tt.equal(toPrimitive({}, String), '[object Object]', '{} with hint String coerces to Object#toString');
\tt.ok(is(toPrimitive({}, Number), '[object Object]'), '{} with hint Number coerces to Object#toString');

\tt.equal(toPrimitive(toStringOnlyObject), toStringOnlyObject.toString(), 'toStringOnlyObject returns toString');
\tt.equal(toPrimitive(toStringOnlyObject, String), toStringOnlyObject.toString(), 'toStringOnlyObject with hint String returns toString');
\tt.equal(toPrimitive(toStringOnlyObject, Number), toStringOnlyObject.toString(), 'toStringOnlyObject with hint Number returns toString');

\tt.equal(toPrimitive(valueOfOnlyObject), valueOfOnlyObject.valueOf(), 'valueOfOnlyObject returns valueOf');
\tt.equal(toPrimitive(valueOfOnlyObject, String), valueOfOnlyObject.valueOf(), 'valueOfOnlyObject with hint String returns valueOf');
\tt.equal(toPrimitive(valueOfOnlyObject, Number), valueOfOnlyObject.valueOf(), 'valueOfOnlyObject with hint Number returns valueOf');

\tt.test('exceptions', function (st) {
\t\tst['throws'](toPrimitive.bind(null, uncoercibleObject), TypeError, 'uncoercibleObject throws a TypeError');
\t\tst['throws'](toPrimitive.bind(null, uncoercibleObject, String), TypeError, 'uncoercibleObject with hint String throws a TypeError');
\t\tst['throws'](toPrimitive.bind(null, uncoercibleObject, Number), TypeError, 'uncoercibleObject with hint Number throws a TypeError');

\t\tst['throws'](toPrimitive.bind(null, uncoercibleFnObject), TypeError, 'uncoercibleFnObject throws a TypeError');
\t\tst['throws'](toPrimitive.bind(null, uncoercibleFnObject, String), TypeError, 'uncoercibleFnObject with hint String throws a TypeError');
\t\tst['throws'](toPrimitive.bind(null, uncoercibleFnObject, Number), TypeError, 'uncoercibleFnObject with hint Number throws a TypeError');
\t\tst.end();
\t});

\tt.end();
});
", "node_modules/es-to-primitive/test/es5.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-to-primitive/test/es5.js");
    }
}
