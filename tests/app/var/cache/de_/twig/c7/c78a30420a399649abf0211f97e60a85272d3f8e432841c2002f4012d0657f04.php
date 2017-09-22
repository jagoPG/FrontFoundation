<?php

/* node_modules/es-to-primitive/test/es6.js */
class __TwigTemplate_b7ac9aa81b86e0a0aefb62c028f8027fe813d6112a77242a4461acf297f3e1cb extends Twig_Template
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
        $__internal_31ce0833a1f9f6765a140ae47dbc5dab714b0f1b36108592f7408c575470ec2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ce0833a1f9f6765a140ae47dbc5dab714b0f1b36108592f7408c575470ec2d->enter($__internal_31ce0833a1f9f6765a140ae47dbc5dab714b0f1b36108592f7408c575470ec2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-to-primitive/test/es6.js"));

        // line 1
        echo "'use strict';

var test = require('tape');
var toPrimitive = require('../es6');
var is = require('object-is');
var forEach = require('foreach');
var debug = require('util').inspect;

var hasSymbols = typeof Symbol === 'function' && typeof Symbol.iterator === 'symbol';
var hasSymbolToPrimitive = hasSymbols && typeof Symbol.toPrimitive === 'symbol';

var primitives = [null, undefined, true, false, 0, -0, 42, NaN, Infinity, -Infinity, '', 'abc'];

test('primitives', function (t) {
\tforEach(primitives, function (i) {
\t\tt.ok(is(toPrimitive(i), i), 'toPrimitive(' + debug(i) + ') returns the same value');
\t\tt.ok(is(toPrimitive(i, String), i), 'toPrimitive(' + debug(i) + ', String) returns the same value');
\t\tt.ok(is(toPrimitive(i, Number), i), 'toPrimitive(' + debug(i) + ', Number) returns the same value');
\t});
\tt.end();
});

test('Symbols', { skip: !hasSymbols }, function (t) {
\tvar symbols = [Symbol(), Symbol.iterator, Symbol.for('foo')];
\tforEach(symbols, function (sym) {
\t\tt.equal(toPrimitive(sym), sym, 'toPrimitive(' + debug(sym) + ') returns the same value');
\t\tt.equal(toPrimitive(sym, String), sym, 'toPrimitive(' + debug(sym) + ', String) returns the same value');
\t\tt.equal(toPrimitive(sym, Number), sym, 'toPrimitive(' + debug(sym) + ', Number) returns the same value');
\t});

\tvar primitiveSym = Symbol('primitiveSym');
\tvar objectSym = Object(primitiveSym);
\tt.equal(toPrimitive(objectSym), primitiveSym, 'toPrimitive(' + debug(objectSym) + ') returns ' + debug(primitiveSym));
\tt.equal(toPrimitive(objectSym, String), primitiveSym, 'toPrimitive(' + debug(objectSym) + ', String) returns ' + debug(primitiveSym));
\tt.equal(toPrimitive(objectSym, Number), primitiveSym, 'toPrimitive(' + debug(objectSym) + ', Number) returns ' + debug(primitiveSym));
\tt.end();
});

test('Arrays', function (t) {
\tvar arrays = [[], ['a', 'b'], [1, 2]];
\tforEach(arrays, function (arr) {
\t\tt.equal(toPrimitive(arr), String(arr), 'toPrimitive(' + debug(arr) + ') returns the string version of the array');
\t\tt.equal(toPrimitive(arr, String), String(arr), 'toPrimitive(' + debug(arr) + ') returns the string version of the array');
\t\tt.equal(toPrimitive(arr, Number), String(arr), 'toPrimitive(' + debug(arr) + ') returns the string version of the array');
\t});
\tt.end();
});

test('Dates', function (t) {
\tvar dates = [new Date(), new Date(0), new Date(NaN)];
\tforEach(dates, function (date) {
\t\tt.equal(toPrimitive(date), String(date), 'toPrimitive(' + debug(date) + ') returns the string version of the date');
\t\tt.equal(toPrimitive(date, String), String(date), 'toPrimitive(' + debug(date) + ') returns the string version of the date');
\t\tt.ok(is(toPrimitive(date, Number), Number(date)), 'toPrimitive(' + debug(date) + ') returns the number version of the date');
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
\tt.equal(toPrimitive(coercibleObject, Number), coercibleObject.valueOf(), 'coercibleObject with hint Number coerces to valueOf');
\tt.equal(toPrimitive(coercibleObject, String), coercibleObject.toString(), 'coercibleObject with hint String coerces to non-stringified toString');

\tt.equal(toPrimitive(coercibleFnObject), coercibleFnObject.toString(), 'coercibleFnObject coerces to non-stringified toString');
\tt.equal(toPrimitive(coercibleFnObject, Number), coercibleFnObject.toString(), 'coercibleFnObject with hint Number coerces to non-stringified toString');
\tt.equal(toPrimitive(coercibleFnObject, String), coercibleFnObject.toString(), 'coercibleFnObject with hint String coerces to non-stringified toString');

\tt.equal(toPrimitive({}), '[object Object]', '{} with no hint coerces to Object#toString');
\tt.equal(toPrimitive({}, Number), '[object Object]', '{} with hint Number coerces to Object#toString');
\tt.equal(toPrimitive({}, String), '[object Object]', '{} with hint String coerces to Object#toString');

\tt.equal(toPrimitive(toStringOnlyObject), toStringOnlyObject.toString(), 'toStringOnlyObject returns non-stringified toString');
\tt.equal(toPrimitive(toStringOnlyObject, Number), toStringOnlyObject.toString(), 'toStringOnlyObject with hint Number returns non-stringified toString');
\tt.equal(toPrimitive(toStringOnlyObject, String), toStringOnlyObject.toString(), 'toStringOnlyObject with hint String returns non-stringified toString');

\tt.equal(toPrimitive(valueOfOnlyObject), valueOfOnlyObject.valueOf(), 'valueOfOnlyObject returns valueOf');
\tt.equal(toPrimitive(valueOfOnlyObject, Number), valueOfOnlyObject.valueOf(), 'valueOfOnlyObject with hint Number returns valueOf');
\tt.equal(toPrimitive(valueOfOnlyObject, String), valueOfOnlyObject.valueOf(), 'valueOfOnlyObject with hint String returns non-stringified valueOf');

\tt.test('Symbol.toPrimitive', { skip: !hasSymbolToPrimitive }, function (st) {
\t\tvar overriddenObject = { toString: st.fail, valueOf: st.fail };
\t\toverriddenObject[Symbol.toPrimitive] = function (hint) { return String(hint); };

\t\tst.equal(toPrimitive(overriddenObject), 'default', 'object with Symbol.toPrimitive + no hint invokes that');
\t\tst.equal(toPrimitive(overriddenObject, Number), 'number', 'object with Symbol.toPrimitive + hint Number invokes that');
\t\tst.equal(toPrimitive(overriddenObject, String), 'string', 'object with Symbol.toPrimitive + hint String invokes that');

\t\tvar nullToPrimitive = { toString: coercibleObject.toString, valueOf: coercibleObject.valueOf };
\t\tnullToPrimitive[Symbol.toPrimitive] = null;
\t\tst.equal(toPrimitive(nullToPrimitive), toPrimitive(coercibleObject), 'object with no hint + null Symbol.toPrimitive ignores it');
\t\tst.equal(toPrimitive(nullToPrimitive, Number), toPrimitive(coercibleObject, Number), 'object with hint Number + null Symbol.toPrimitive ignores it');
\t\tst.equal(toPrimitive(nullToPrimitive, String), toPrimitive(coercibleObject, String), 'object with hint String + null Symbol.toPrimitive ignores it');

\t\tst.test('exceptions', function (sst) {
\t\t\tvar nonFunctionToPrimitive = { toString: sst.fail, valueOf: sst.fail };
\t\t\tnonFunctionToPrimitive[Symbol.toPrimitive] = {};
\t\t\tsst['throws'](toPrimitive.bind(null, nonFunctionToPrimitive), TypeError, 'Symbol.toPrimitive returning a non-function throws');

\t\t\tvar uncoercibleToPrimitive = { toString: sst.fail, valueOf: sst.fail };
\t\t\tuncoercibleToPrimitive[Symbol.toPrimitive] = function (hint) { return { toString: function () { return hint; } }; };
\t\t\tsst['throws'](toPrimitive.bind(null, uncoercibleToPrimitive), TypeError, 'Symbol.toPrimitive returning an object throws');

\t\t\tvar throwingToPrimitive = { toString: sst.fail, valueOf: sst.fail };
\t\t\tthrowingToPrimitive[Symbol.toPrimitive] = function (hint) { throw new RangeError(hint); };
\t\t\tsst['throws'](toPrimitive.bind(null, throwingToPrimitive), RangeError, 'Symbol.toPrimitive throwing throws');

\t\t\tsst.end();
\t\t});

\t\tst.end();
\t});

\tt.test('exceptions', function (st) {
\t\tst['throws'](toPrimitive.bind(null, uncoercibleObject), TypeError, 'uncoercibleObject throws a TypeError');
\t\tst['throws'](toPrimitive.bind(null, uncoercibleObject, Number), TypeError, 'uncoercibleObject with hint Number throws a TypeError');
\t\tst['throws'](toPrimitive.bind(null, uncoercibleObject, String), TypeError, 'uncoercibleObject with hint String throws a TypeError');

\t\tst['throws'](toPrimitive.bind(null, uncoercibleFnObject), TypeError, 'uncoercibleFnObject throws a TypeError');
\t\tst['throws'](toPrimitive.bind(null, uncoercibleFnObject, Number), TypeError, 'uncoercibleFnObject with hint Number throws a TypeError');
\t\tst['throws'](toPrimitive.bind(null, uncoercibleFnObject, String), TypeError, 'uncoercibleFnObject with hint String throws a TypeError');
\t\tst.end();
\t});
\tt.end();
});
";
        
        $__internal_31ce0833a1f9f6765a140ae47dbc5dab714b0f1b36108592f7408c575470ec2d->leave($__internal_31ce0833a1f9f6765a140ae47dbc5dab714b0f1b36108592f7408c575470ec2d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-to-primitive/test/es6.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var test = require('tape');
var toPrimitive = require('../es6');
var is = require('object-is');
var forEach = require('foreach');
var debug = require('util').inspect;

var hasSymbols = typeof Symbol === 'function' && typeof Symbol.iterator === 'symbol';
var hasSymbolToPrimitive = hasSymbols && typeof Symbol.toPrimitive === 'symbol';

var primitives = [null, undefined, true, false, 0, -0, 42, NaN, Infinity, -Infinity, '', 'abc'];

test('primitives', function (t) {
\tforEach(primitives, function (i) {
\t\tt.ok(is(toPrimitive(i), i), 'toPrimitive(' + debug(i) + ') returns the same value');
\t\tt.ok(is(toPrimitive(i, String), i), 'toPrimitive(' + debug(i) + ', String) returns the same value');
\t\tt.ok(is(toPrimitive(i, Number), i), 'toPrimitive(' + debug(i) + ', Number) returns the same value');
\t});
\tt.end();
});

test('Symbols', { skip: !hasSymbols }, function (t) {
\tvar symbols = [Symbol(), Symbol.iterator, Symbol.for('foo')];
\tforEach(symbols, function (sym) {
\t\tt.equal(toPrimitive(sym), sym, 'toPrimitive(' + debug(sym) + ') returns the same value');
\t\tt.equal(toPrimitive(sym, String), sym, 'toPrimitive(' + debug(sym) + ', String) returns the same value');
\t\tt.equal(toPrimitive(sym, Number), sym, 'toPrimitive(' + debug(sym) + ', Number) returns the same value');
\t});

\tvar primitiveSym = Symbol('primitiveSym');
\tvar objectSym = Object(primitiveSym);
\tt.equal(toPrimitive(objectSym), primitiveSym, 'toPrimitive(' + debug(objectSym) + ') returns ' + debug(primitiveSym));
\tt.equal(toPrimitive(objectSym, String), primitiveSym, 'toPrimitive(' + debug(objectSym) + ', String) returns ' + debug(primitiveSym));
\tt.equal(toPrimitive(objectSym, Number), primitiveSym, 'toPrimitive(' + debug(objectSym) + ', Number) returns ' + debug(primitiveSym));
\tt.end();
});

test('Arrays', function (t) {
\tvar arrays = [[], ['a', 'b'], [1, 2]];
\tforEach(arrays, function (arr) {
\t\tt.equal(toPrimitive(arr), String(arr), 'toPrimitive(' + debug(arr) + ') returns the string version of the array');
\t\tt.equal(toPrimitive(arr, String), String(arr), 'toPrimitive(' + debug(arr) + ') returns the string version of the array');
\t\tt.equal(toPrimitive(arr, Number), String(arr), 'toPrimitive(' + debug(arr) + ') returns the string version of the array');
\t});
\tt.end();
});

test('Dates', function (t) {
\tvar dates = [new Date(), new Date(0), new Date(NaN)];
\tforEach(dates, function (date) {
\t\tt.equal(toPrimitive(date), String(date), 'toPrimitive(' + debug(date) + ') returns the string version of the date');
\t\tt.equal(toPrimitive(date, String), String(date), 'toPrimitive(' + debug(date) + ') returns the string version of the date');
\t\tt.ok(is(toPrimitive(date, Number), Number(date)), 'toPrimitive(' + debug(date) + ') returns the number version of the date');
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
\tt.equal(toPrimitive(coercibleObject, Number), coercibleObject.valueOf(), 'coercibleObject with hint Number coerces to valueOf');
\tt.equal(toPrimitive(coercibleObject, String), coercibleObject.toString(), 'coercibleObject with hint String coerces to non-stringified toString');

\tt.equal(toPrimitive(coercibleFnObject), coercibleFnObject.toString(), 'coercibleFnObject coerces to non-stringified toString');
\tt.equal(toPrimitive(coercibleFnObject, Number), coercibleFnObject.toString(), 'coercibleFnObject with hint Number coerces to non-stringified toString');
\tt.equal(toPrimitive(coercibleFnObject, String), coercibleFnObject.toString(), 'coercibleFnObject with hint String coerces to non-stringified toString');

\tt.equal(toPrimitive({}), '[object Object]', '{} with no hint coerces to Object#toString');
\tt.equal(toPrimitive({}, Number), '[object Object]', '{} with hint Number coerces to Object#toString');
\tt.equal(toPrimitive({}, String), '[object Object]', '{} with hint String coerces to Object#toString');

\tt.equal(toPrimitive(toStringOnlyObject), toStringOnlyObject.toString(), 'toStringOnlyObject returns non-stringified toString');
\tt.equal(toPrimitive(toStringOnlyObject, Number), toStringOnlyObject.toString(), 'toStringOnlyObject with hint Number returns non-stringified toString');
\tt.equal(toPrimitive(toStringOnlyObject, String), toStringOnlyObject.toString(), 'toStringOnlyObject with hint String returns non-stringified toString');

\tt.equal(toPrimitive(valueOfOnlyObject), valueOfOnlyObject.valueOf(), 'valueOfOnlyObject returns valueOf');
\tt.equal(toPrimitive(valueOfOnlyObject, Number), valueOfOnlyObject.valueOf(), 'valueOfOnlyObject with hint Number returns valueOf');
\tt.equal(toPrimitive(valueOfOnlyObject, String), valueOfOnlyObject.valueOf(), 'valueOfOnlyObject with hint String returns non-stringified valueOf');

\tt.test('Symbol.toPrimitive', { skip: !hasSymbolToPrimitive }, function (st) {
\t\tvar overriddenObject = { toString: st.fail, valueOf: st.fail };
\t\toverriddenObject[Symbol.toPrimitive] = function (hint) { return String(hint); };

\t\tst.equal(toPrimitive(overriddenObject), 'default', 'object with Symbol.toPrimitive + no hint invokes that');
\t\tst.equal(toPrimitive(overriddenObject, Number), 'number', 'object with Symbol.toPrimitive + hint Number invokes that');
\t\tst.equal(toPrimitive(overriddenObject, String), 'string', 'object with Symbol.toPrimitive + hint String invokes that');

\t\tvar nullToPrimitive = { toString: coercibleObject.toString, valueOf: coercibleObject.valueOf };
\t\tnullToPrimitive[Symbol.toPrimitive] = null;
\t\tst.equal(toPrimitive(nullToPrimitive), toPrimitive(coercibleObject), 'object with no hint + null Symbol.toPrimitive ignores it');
\t\tst.equal(toPrimitive(nullToPrimitive, Number), toPrimitive(coercibleObject, Number), 'object with hint Number + null Symbol.toPrimitive ignores it');
\t\tst.equal(toPrimitive(nullToPrimitive, String), toPrimitive(coercibleObject, String), 'object with hint String + null Symbol.toPrimitive ignores it');

\t\tst.test('exceptions', function (sst) {
\t\t\tvar nonFunctionToPrimitive = { toString: sst.fail, valueOf: sst.fail };
\t\t\tnonFunctionToPrimitive[Symbol.toPrimitive] = {};
\t\t\tsst['throws'](toPrimitive.bind(null, nonFunctionToPrimitive), TypeError, 'Symbol.toPrimitive returning a non-function throws');

\t\t\tvar uncoercibleToPrimitive = { toString: sst.fail, valueOf: sst.fail };
\t\t\tuncoercibleToPrimitive[Symbol.toPrimitive] = function (hint) { return { toString: function () { return hint; } }; };
\t\t\tsst['throws'](toPrimitive.bind(null, uncoercibleToPrimitive), TypeError, 'Symbol.toPrimitive returning an object throws');

\t\t\tvar throwingToPrimitive = { toString: sst.fail, valueOf: sst.fail };
\t\t\tthrowingToPrimitive[Symbol.toPrimitive] = function (hint) { throw new RangeError(hint); };
\t\t\tsst['throws'](toPrimitive.bind(null, throwingToPrimitive), RangeError, 'Symbol.toPrimitive throwing throws');

\t\t\tsst.end();
\t\t});

\t\tst.end();
\t});

\tt.test('exceptions', function (st) {
\t\tst['throws'](toPrimitive.bind(null, uncoercibleObject), TypeError, 'uncoercibleObject throws a TypeError');
\t\tst['throws'](toPrimitive.bind(null, uncoercibleObject, Number), TypeError, 'uncoercibleObject with hint Number throws a TypeError');
\t\tst['throws'](toPrimitive.bind(null, uncoercibleObject, String), TypeError, 'uncoercibleObject with hint String throws a TypeError');

\t\tst['throws'](toPrimitive.bind(null, uncoercibleFnObject), TypeError, 'uncoercibleFnObject throws a TypeError');
\t\tst['throws'](toPrimitive.bind(null, uncoercibleFnObject, Number), TypeError, 'uncoercibleFnObject with hint Number throws a TypeError');
\t\tst['throws'](toPrimitive.bind(null, uncoercibleFnObject, String), TypeError, 'uncoercibleFnObject with hint String throws a TypeError');
\t\tst.end();
\t});
\tt.end();
});
", "node_modules/es-to-primitive/test/es6.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-to-primitive/test/es6.js");
    }
}
