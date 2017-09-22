<?php

/* node_modules/is-callable/test.js */
class __TwigTemplate_2a355e24f95160cf7d2f10fe3e2c7eed8c532e3ef98549773d4abae3236b6e57 extends Twig_Template
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
        $__internal_0042c58be4f1d89a98723efedf265f59b17d6ead9c9fef450540f503fb21930c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0042c58be4f1d89a98723efedf265f59b17d6ead9c9fef450540f503fb21930c->enter($__internal_0042c58be4f1d89a98723efedf265f59b17d6ead9c9fef450540f503fb21930c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-callable/test.js"));

        // line 1
        echo "'use strict';

/* eslint no-magic-numbers: 1 */

var test = require('tape');
var isCallable = require('./');
var hasSymbols = typeof Symbol === 'function' && typeof Symbol() === 'symbol';
var genFn = require('make-generator-function');
var arrowFn = require('make-arrow-function')();
var forEach = require('foreach');

var invokeFunction = function invokeFunction(str) {
    var result;
\ttry {
\t\t/* eslint-disable no-new-func */
\t\tvar fn = Function(str);
\t\t/* eslint-enable no-new-func */
\t\tresult = fn();
\t} catch (e) { /**/ }
\treturn result;
};

var classConstructor = invokeFunction('\"use strict\"; return class Foo {}');

var commentedClass = invokeFunction('\"use strict\"; return class/*kkk*/\\n\\/\\/blah\\n Bar\\n\\/\\/blah\\n {}');

test('not callables', function (t) {
\tt.test('non-number/string primitives', function (st) {
\t\tst.notOk(isCallable(), 'undefined is not callable');
\t\tst.notOk(isCallable(null), 'null is not callable');
\t\tst.notOk(isCallable(false), 'false is not callable');
\t\tst.notOk(isCallable(true), 'true is not callable');
\t\tst.end();
\t});

\tt.notOk(isCallable([]), 'array is not callable');
\tt.notOk(isCallable({}), 'object is not callable');
\tt.notOk(isCallable(/a/g), 'regex literal is not callable');
\tt.notOk(isCallable(new RegExp('a', 'g')), 'regex object is not callable');
\tt.notOk(isCallable(new Date()), 'new Date() is not callable');

\tt.test('numbers', function (st) {
\t\tst.notOk(isCallable(42), 'number is not callable');
\t\tst.notOk(isCallable(Object(42)), 'number object is not callable');
\t\tst.notOk(isCallable(NaN), 'NaN is not callable');
\t\tst.notOk(isCallable(Infinity), 'Infinity is not callable');
\t\tst.end();
\t});

\tt.test('strings', function (st) {
\t\tst.notOk(isCallable('foo'), 'string primitive is not callable');
\t\tst.notOk(isCallable(Object('foo')), 'string object is not callable');
\t\tst.end();
\t});

\tt.test('non-function with function in its [[Prototype]] chain', function (st) {
\t\tvar Foo = function Bar() {};
\t\tFoo.prototype = function () {};
\t\tst.equal(true, isCallable(Foo), 'sanity check: Foo is callable');
\t\tst.equal(false, isCallable(new Foo()), 'instance of Foo is not callable');
\t\tst.end();
\t});

\tt.end();
});

test('@@toStringTag', { skip: !hasSymbols || !Symbol.toStringTag }, function (t) {
\tvar fn = function () { return 3; };
\tvar fakeFunction = {
\t\ttoString: function () { return String(fn); },
\t\tvalueOf: function () { return fn; }
\t};
\tfakeFunction[Symbol.toStringTag] = 'Function';
\tt.notOk(isCallable(fakeFunction), 'fake Function with @@toStringTag \"Function\" is not callable');
\tt.end();
});

var typedArrayNames = [
\t'Int8Array',
\t'Uint8Array',
\t'Uint8ClampedArray',
\t'Int16Array',
\t'Uint16Array',
\t'Int32Array',
\t'Uint32Array',
\t'Float32Array',
\t'Float64Array'
];

test('Functions', function (t) {
\tt.ok(isCallable(function () {}), 'function is callable');
\tt.ok(isCallable(function classFake() { }), 'function with name containing \"class\" is callable');
\tt.ok(isCallable(function () { return ' class '; }), 'function with string \" class \" is callable');
\tt.ok(isCallable(isCallable), 'isCallable is callable');
\tt.end();
});

test('Typed Arrays', function (st) {
\tforEach(typedArrayNames, function (typedArray) {
\t\tif (typeof global[typedArray] !== 'undefined') {
\t\t\tst.ok(isCallable(global[typedArray]), typedArray + ' is callable');
\t\t}
\t});
\tst.end();
});

test('Generators', { skip: !genFn }, function (t) {
\tt.ok(isCallable(genFn), 'generator function is callable');
\tt.end();
});

test('Arrow functions', { skip: !arrowFn }, function (t) {
\tt.ok(isCallable(arrowFn), 'arrow function is callable');
\tt.end();
});

test('\"Class\" constructors', { skip: !classConstructor || !commentedClass }, function (t) {
\tt.notOk(isCallable(classConstructor), 'class constructors are not callable');
\tt.notOk(isCallable(commentedClass), 'class constructors with comments in the signature are not callable');
\tt.end();
});
";
        
        $__internal_0042c58be4f1d89a98723efedf265f59b17d6ead9c9fef450540f503fb21930c->leave($__internal_0042c58be4f1d89a98723efedf265f59b17d6ead9c9fef450540f503fb21930c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-callable/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

/* eslint no-magic-numbers: 1 */

var test = require('tape');
var isCallable = require('./');
var hasSymbols = typeof Symbol === 'function' && typeof Symbol() === 'symbol';
var genFn = require('make-generator-function');
var arrowFn = require('make-arrow-function')();
var forEach = require('foreach');

var invokeFunction = function invokeFunction(str) {
    var result;
\ttry {
\t\t/* eslint-disable no-new-func */
\t\tvar fn = Function(str);
\t\t/* eslint-enable no-new-func */
\t\tresult = fn();
\t} catch (e) { /**/ }
\treturn result;
};

var classConstructor = invokeFunction('\"use strict\"; return class Foo {}');

var commentedClass = invokeFunction('\"use strict\"; return class/*kkk*/\\n\\/\\/blah\\n Bar\\n\\/\\/blah\\n {}');

test('not callables', function (t) {
\tt.test('non-number/string primitives', function (st) {
\t\tst.notOk(isCallable(), 'undefined is not callable');
\t\tst.notOk(isCallable(null), 'null is not callable');
\t\tst.notOk(isCallable(false), 'false is not callable');
\t\tst.notOk(isCallable(true), 'true is not callable');
\t\tst.end();
\t});

\tt.notOk(isCallable([]), 'array is not callable');
\tt.notOk(isCallable({}), 'object is not callable');
\tt.notOk(isCallable(/a/g), 'regex literal is not callable');
\tt.notOk(isCallable(new RegExp('a', 'g')), 'regex object is not callable');
\tt.notOk(isCallable(new Date()), 'new Date() is not callable');

\tt.test('numbers', function (st) {
\t\tst.notOk(isCallable(42), 'number is not callable');
\t\tst.notOk(isCallable(Object(42)), 'number object is not callable');
\t\tst.notOk(isCallable(NaN), 'NaN is not callable');
\t\tst.notOk(isCallable(Infinity), 'Infinity is not callable');
\t\tst.end();
\t});

\tt.test('strings', function (st) {
\t\tst.notOk(isCallable('foo'), 'string primitive is not callable');
\t\tst.notOk(isCallable(Object('foo')), 'string object is not callable');
\t\tst.end();
\t});

\tt.test('non-function with function in its [[Prototype]] chain', function (st) {
\t\tvar Foo = function Bar() {};
\t\tFoo.prototype = function () {};
\t\tst.equal(true, isCallable(Foo), 'sanity check: Foo is callable');
\t\tst.equal(false, isCallable(new Foo()), 'instance of Foo is not callable');
\t\tst.end();
\t});

\tt.end();
});

test('@@toStringTag', { skip: !hasSymbols || !Symbol.toStringTag }, function (t) {
\tvar fn = function () { return 3; };
\tvar fakeFunction = {
\t\ttoString: function () { return String(fn); },
\t\tvalueOf: function () { return fn; }
\t};
\tfakeFunction[Symbol.toStringTag] = 'Function';
\tt.notOk(isCallable(fakeFunction), 'fake Function with @@toStringTag \"Function\" is not callable');
\tt.end();
});

var typedArrayNames = [
\t'Int8Array',
\t'Uint8Array',
\t'Uint8ClampedArray',
\t'Int16Array',
\t'Uint16Array',
\t'Int32Array',
\t'Uint32Array',
\t'Float32Array',
\t'Float64Array'
];

test('Functions', function (t) {
\tt.ok(isCallable(function () {}), 'function is callable');
\tt.ok(isCallable(function classFake() { }), 'function with name containing \"class\" is callable');
\tt.ok(isCallable(function () { return ' class '; }), 'function with string \" class \" is callable');
\tt.ok(isCallable(isCallable), 'isCallable is callable');
\tt.end();
});

test('Typed Arrays', function (st) {
\tforEach(typedArrayNames, function (typedArray) {
\t\tif (typeof global[typedArray] !== 'undefined') {
\t\t\tst.ok(isCallable(global[typedArray]), typedArray + ' is callable');
\t\t}
\t});
\tst.end();
});

test('Generators', { skip: !genFn }, function (t) {
\tt.ok(isCallable(genFn), 'generator function is callable');
\tt.end();
});

test('Arrow functions', { skip: !arrowFn }, function (t) {
\tt.ok(isCallable(arrowFn), 'arrow function is callable');
\tt.end();
});

test('\"Class\" constructors', { skip: !classConstructor || !commentedClass }, function (t) {
\tt.notOk(isCallable(classConstructor), 'class constructors are not callable');
\tt.notOk(isCallable(commentedClass), 'class constructors with comments in the signature are not callable');
\tt.end();
});
", "node_modules/is-callable/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-callable/test.js");
    }
}
