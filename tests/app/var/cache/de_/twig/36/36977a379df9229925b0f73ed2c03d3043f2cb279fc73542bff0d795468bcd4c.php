<?php

/* node_modules/define-properties/test/index.js */
class __TwigTemplate_7cf4be8c9a5ba3fc059e6cd3a84c77889d8bb92729ac4cf9d9656eb3a82d6d22 extends Twig_Template
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
        $__internal_6042ad65816cf4efbfd29954f6e4a2d48dba1ce4e7f5645929fe5e2a7e778f69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6042ad65816cf4efbfd29954f6e4a2d48dba1ce4e7f5645929fe5e2a7e778f69->enter($__internal_6042ad65816cf4efbfd29954f6e4a2d48dba1ce4e7f5645929fe5e2a7e778f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/define-properties/test/index.js"));

        // line 1
        echo "'use strict';

var define = require('../');
var test = require('tape');
var keys = require('object-keys');

var arePropertyDescriptorsSupported = function () {
\tvar obj = { a: 1 };
\ttry {
\t\tObject.defineProperty(obj, 'x', { value: obj });
\t\treturn obj.x === obj;
\t} catch (e) { /* this is IE 8. */
\t\treturn false;
\t}
};
var descriptorsSupported = !!Object.defineProperty && arePropertyDescriptorsSupported();

var hasSymbols = typeof Symbol === 'function' && typeof Symbol() === 'symbol';

test('defineProperties', function (dt) {

\tdt.test('with descriptor support', { skip: !descriptorsSupported }, function (t) {
\t\tvar getDescriptor = function (value) {
\t\t\treturn {
\t\t\t\tconfigurable: true,
\t\t\t\tenumerable: false,
\t\t\t\tvalue: value,
\t\t\t\twritable: true
\t\t\t};
\t\t};

\t\tvar obj = {
\t\t\ta: 1,
\t\t\tb: 2,
\t\t\tc: 3
\t\t};
\t\tt.deepEqual(keys(obj), ['a', 'b', 'c'], 'all literal-set keys start enumerable');
\t\tdefine(obj, {
\t\t\tb: 3,
\t\t\tc: 4,
\t\t\td: 5
\t\t});
\t\tt.deepEqual(obj, {
\t\t\ta: 1,
\t\t\tb: 2,
\t\t\tc: 3
\t\t}, 'existing properties were not overridden');
\t\tt.deepEqual(Object.getOwnPropertyDescriptor(obj, 'd'), getDescriptor(5), 'new property \"d\" was added and is not enumerable');
\t\tt.deepEqual(['a', 'b', 'c'], keys(obj), 'new keys are not enumerable');

\t\tdefine(obj, {
\t\t\ta: 2,
\t\t\tb: 3,
\t\t\tc: 4
\t\t}, {
\t\t\ta: function () { return true; },
\t\t\tb: function () { return false; }
\t\t});
\t\tt.deepEqual(obj, {
\t\t\tb: 2,
\t\t\tc: 3
\t\t}, 'properties only overriden when predicate exists and returns true');
\t\tt.deepEqual(Object.getOwnPropertyDescriptor(obj, 'd'), getDescriptor(5), 'existing property \"d\" remained and is not enumerable');
\t\tt.deepEqual(Object.getOwnPropertyDescriptor(obj, 'a'), getDescriptor(2), 'existing property \"a\" was overridden and is not enumerable');
\t\tt.deepEqual(['b', 'c'], keys(obj), 'overridden keys are not enumerable');

\t\tt.end();
\t});

\tdt.test('without descriptor support', { skip: descriptorsSupported }, function (t) {
\t\tvar obj = {
\t\t\ta: 1,
\t\t\tb: 2,
\t\t\tc: 3
\t\t};
\t\tdefine(obj, {
\t\t\tb: 3,
\t\t\tc: 4,
\t\t\td: 5
\t\t});
\t\tt.deepEqual(obj, {
\t\t\ta: 1,
\t\t\tb: 2,
\t\t\tc: 3,
\t\t\td: 5
\t\t}, 'existing properties were not overridden, new properties were added');

\t\tdefine(obj, {
\t\t\ta: 2,
\t\t\tb: 3,
\t\t\tc: 4
\t\t}, {
\t\t\ta: function () { return true; },
\t\t\tb: function () { return false; }
\t\t});
\t\tt.deepEqual(obj, {
\t\t\ta: 2,
\t\t\tb: 2,
\t\t\tc: 3,
\t\t\td: 5
\t\t}, 'properties only overriden when predicate exists and returns true');

\t\tt.end();
\t});

\tdt.end();
});

test('symbols', { skip: !hasSymbols }, function (t) {
\tvar sym = Symbol('foo');
\tvar obj = {};
\tvar aValue = {};
\tvar bValue = {};
\tvar properties = { a: aValue };
\tproperties[sym] = bValue;

\tdefine(obj, properties);

\tt.deepEqual(Object.keys(obj), [], 'object has no enumerable keys');
\tt.deepEqual(Object.getOwnPropertyNames(obj), ['a'], 'object has non-enumerable \"a\" key');
\tt.deepEqual(Object.getOwnPropertySymbols(obj), [sym], 'object has non-enumerable symbol key');
\tt.equal(obj.a, aValue, 'string keyed value is defined');
\tt.equal(obj[sym], bValue, 'symbol keyed value is defined');

\tt.end();
});
";
        
        $__internal_6042ad65816cf4efbfd29954f6e4a2d48dba1ce4e7f5645929fe5e2a7e778f69->leave($__internal_6042ad65816cf4efbfd29954f6e4a2d48dba1ce4e7f5645929fe5e2a7e778f69_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/define-properties/test/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var define = require('../');
var test = require('tape');
var keys = require('object-keys');

var arePropertyDescriptorsSupported = function () {
\tvar obj = { a: 1 };
\ttry {
\t\tObject.defineProperty(obj, 'x', { value: obj });
\t\treturn obj.x === obj;
\t} catch (e) { /* this is IE 8. */
\t\treturn false;
\t}
};
var descriptorsSupported = !!Object.defineProperty && arePropertyDescriptorsSupported();

var hasSymbols = typeof Symbol === 'function' && typeof Symbol() === 'symbol';

test('defineProperties', function (dt) {

\tdt.test('with descriptor support', { skip: !descriptorsSupported }, function (t) {
\t\tvar getDescriptor = function (value) {
\t\t\treturn {
\t\t\t\tconfigurable: true,
\t\t\t\tenumerable: false,
\t\t\t\tvalue: value,
\t\t\t\twritable: true
\t\t\t};
\t\t};

\t\tvar obj = {
\t\t\ta: 1,
\t\t\tb: 2,
\t\t\tc: 3
\t\t};
\t\tt.deepEqual(keys(obj), ['a', 'b', 'c'], 'all literal-set keys start enumerable');
\t\tdefine(obj, {
\t\t\tb: 3,
\t\t\tc: 4,
\t\t\td: 5
\t\t});
\t\tt.deepEqual(obj, {
\t\t\ta: 1,
\t\t\tb: 2,
\t\t\tc: 3
\t\t}, 'existing properties were not overridden');
\t\tt.deepEqual(Object.getOwnPropertyDescriptor(obj, 'd'), getDescriptor(5), 'new property \"d\" was added and is not enumerable');
\t\tt.deepEqual(['a', 'b', 'c'], keys(obj), 'new keys are not enumerable');

\t\tdefine(obj, {
\t\t\ta: 2,
\t\t\tb: 3,
\t\t\tc: 4
\t\t}, {
\t\t\ta: function () { return true; },
\t\t\tb: function () { return false; }
\t\t});
\t\tt.deepEqual(obj, {
\t\t\tb: 2,
\t\t\tc: 3
\t\t}, 'properties only overriden when predicate exists and returns true');
\t\tt.deepEqual(Object.getOwnPropertyDescriptor(obj, 'd'), getDescriptor(5), 'existing property \"d\" remained and is not enumerable');
\t\tt.deepEqual(Object.getOwnPropertyDescriptor(obj, 'a'), getDescriptor(2), 'existing property \"a\" was overridden and is not enumerable');
\t\tt.deepEqual(['b', 'c'], keys(obj), 'overridden keys are not enumerable');

\t\tt.end();
\t});

\tdt.test('without descriptor support', { skip: descriptorsSupported }, function (t) {
\t\tvar obj = {
\t\t\ta: 1,
\t\t\tb: 2,
\t\t\tc: 3
\t\t};
\t\tdefine(obj, {
\t\t\tb: 3,
\t\t\tc: 4,
\t\t\td: 5
\t\t});
\t\tt.deepEqual(obj, {
\t\t\ta: 1,
\t\t\tb: 2,
\t\t\tc: 3,
\t\t\td: 5
\t\t}, 'existing properties were not overridden, new properties were added');

\t\tdefine(obj, {
\t\t\ta: 2,
\t\t\tb: 3,
\t\t\tc: 4
\t\t}, {
\t\t\ta: function () { return true; },
\t\t\tb: function () { return false; }
\t\t});
\t\tt.deepEqual(obj, {
\t\t\ta: 2,
\t\t\tb: 2,
\t\t\tc: 3,
\t\t\td: 5
\t\t}, 'properties only overriden when predicate exists and returns true');

\t\tt.end();
\t});

\tdt.end();
});

test('symbols', { skip: !hasSymbols }, function (t) {
\tvar sym = Symbol('foo');
\tvar obj = {};
\tvar aValue = {};
\tvar bValue = {};
\tvar properties = { a: aValue };
\tproperties[sym] = bValue;

\tdefine(obj, properties);

\tt.deepEqual(Object.keys(obj), [], 'object has no enumerable keys');
\tt.deepEqual(Object.getOwnPropertyNames(obj), ['a'], 'object has non-enumerable \"a\" key');
\tt.deepEqual(Object.getOwnPropertySymbols(obj), [sym], 'object has non-enumerable symbol key');
\tt.equal(obj.a, aValue, 'string keyed value is defined');
\tt.equal(obj[sym], bValue, 'symbol keyed value is defined');

\tt.end();
});
", "node_modules/define-properties/test/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/define-properties/test/index.js");
    }
}
