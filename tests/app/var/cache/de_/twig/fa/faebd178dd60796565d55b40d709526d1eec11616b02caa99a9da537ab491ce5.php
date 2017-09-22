<?php

/* node_modules/es-abstract/test/es5.js */
class __TwigTemplate_2f3c1c62f6dde29c3aa8008ff98ab24fcade4db8ff2e96b177e234fe85e70510 extends Twig_Template
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
        $__internal_134634cc85d3883959f78ec4119a3fe3b89f9b710cab90b545c47b0ac8f4ef0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134634cc85d3883959f78ec4119a3fe3b89f9b710cab90b545c47b0ac8f4ef0e->enter($__internal_134634cc85d3883959f78ec4119a3fe3b89f9b710cab90b545c47b0ac8f4ef0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-abstract/test/es5.js"));

        // line 1
        echo "'use strict';

var ES = require('../').ES5;
var test = require('tape');

var forEach = require('foreach');
var is = require('object-is');

var coercibleObject = { valueOf: function () { return '3'; }, toString: function () { return 42; } };
var coercibleFnObject = {
\tvalueOf: function () { return function valueOfFn() {}; },
\ttoString: function () { return 42; }
};
var valueOfOnlyObject = { valueOf: function () { return 4; }, toString: function () { return {}; } };
var toStringOnlyObject = { valueOf: function () { return {}; }, toString: function () { return 7; } };
var uncoercibleObject = { valueOf: function () { return {}; }, toString: function () { return {}; } };
var uncoercibleFnObject = {
\tvalueOf: function () { return function valueOfFn() {}; },
\ttoString: function () { return function toStrFn() {}; }
};
var objects = [{}, coercibleObject, toStringOnlyObject, valueOfOnlyObject];
var numbers = [0, -0, Infinity, -Infinity, 42];
var nonNullPrimitives = [true, false, 'foo', ''].concat(numbers);
var primitives = [undefined, null].concat(nonNullPrimitives);

test('ToPrimitive', function (t) {
\tt.test('primitives', function (st) {
\t\tvar testPrimitive = function (primitive) {
\t\t\tst.ok(is(ES.ToPrimitive(primitive), primitive), primitive + ' is returned correctly');
\t\t};
\t\tforEach(primitives, testPrimitive);
\t\tst.end();
\t});

\tt.test('objects', function (st) {
\t\tst.equal(ES.ToPrimitive(coercibleObject), coercibleObject.valueOf(), 'coercibleObject coerces to valueOf');
\t\tst.equal(ES.ToPrimitive(coercibleObject, Number), coercibleObject.valueOf(), 'coercibleObject with hint Number coerces to valueOf');
\t\tst.equal(ES.ToPrimitive(coercibleObject, String), coercibleObject.toString(), 'coercibleObject with hint String coerces to toString');
\t\tst.equal(ES.ToPrimitive(coercibleFnObject), coercibleFnObject.toString(), 'coercibleFnObject coerces to toString');
\t\tst.equal(ES.ToPrimitive(toStringOnlyObject), toStringOnlyObject.toString(), 'toStringOnlyObject returns toString');
\t\tst.equal(ES.ToPrimitive(valueOfOnlyObject), valueOfOnlyObject.valueOf(), 'valueOfOnlyObject returns valueOf');
\t\tst.equal(ES.ToPrimitive({}), '[object Object]', '{} with no hint coerces to Object#toString');
\t\tst.equal(ES.ToPrimitive({}, String), '[object Object]', '{} with hint String coerces to Object#toString');
\t\tst.equal(ES.ToPrimitive({}, Number), '[object Object]', '{} with hint Number coerces to Object#toString');
\t\tst['throws'](function () { return ES.ToPrimitive(uncoercibleObject); }, TypeError, 'uncoercibleObject throws a TypeError');
\t\tst['throws'](function () { return ES.ToPrimitive(uncoercibleFnObject); }, TypeError, 'uncoercibleFnObject throws a TypeError');
\t\tst.end();
\t});

\tt.end();
});

test('ToBoolean', function (t) {
\tt.equal(false, ES.ToBoolean(undefined), 'undefined coerces to false');
\tt.equal(false, ES.ToBoolean(null), 'null coerces to false');
\tt.equal(false, ES.ToBoolean(false), 'false returns false');
\tt.equal(true, ES.ToBoolean(true), 'true returns true');
\tforEach([0, -0, NaN], function (falsyNumber) {
\t\tt.equal(false, ES.ToBoolean(falsyNumber), 'falsy number ' + falsyNumber + ' coerces to false');
\t});
\tforEach([Infinity, 42, 1, -Infinity], function (truthyNumber) {
\t\tt.equal(true, ES.ToBoolean(truthyNumber), 'truthy number ' + truthyNumber + ' coerces to true');
\t});
\tt.equal(false, ES.ToBoolean(''), 'empty string coerces to false');
\tt.equal(true, ES.ToBoolean('foo'), 'nonempty string coerces to true');
\tforEach(objects, function (obj) {
\t\tt.equal(true, ES.ToBoolean(obj), 'object coerces to true');
\t});
\tt.equal(true, ES.ToBoolean(uncoercibleObject), 'uncoercibleObject coerces to true');
\tt.end();
});

test('ToNumber', function (t) {
\tt.ok(is(NaN, ES.ToNumber(undefined)), 'undefined coerces to NaN');
\tt.ok(is(ES.ToNumber(null), 0), 'null coerces to +0');
\tt.ok(is(ES.ToNumber(false), 0), 'false coerces to +0');
\tt.equal(1, ES.ToNumber(true), 'true coerces to 1');
\tt.ok(is(NaN, ES.ToNumber(NaN)), 'NaN returns itself');
\tforEach([0, -0, 42, Infinity, -Infinity], function (num) {
\t\tt.equal(num, ES.ToNumber(num), num + ' returns itself');
\t});
\tforEach(['foo', '0', '4a', '2.0', 'Infinity', '-Infinity'], function (numString) {
\t\tt.ok(is(+numString, ES.ToNumber(numString)), '\"' + numString + '\" coerces to ' + Number(numString));
\t});
\tforEach(objects, function (object) {
\t\tt.ok(is(ES.ToNumber(object), ES.ToNumber(ES.ToPrimitive(object))), 'object ' + object + ' coerces to same as ToPrimitive of object does');
\t});
\tt['throws'](function () { return ES.ToNumber(uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\tt.end();
});

test('ToInteger', function (t) {
\tt.ok(is(0, ES.ToInteger(NaN)), 'NaN coerces to +0');
\tforEach([0, Infinity, 42], function (num) {
\t\tt.ok(is(num, ES.ToInteger(num)), num + ' returns itself');
\t\tt.ok(is(-num, ES.ToInteger(-num)), '-' + num + ' returns itself');
\t});
\tt.equal(3, ES.ToInteger(Math.PI), 'pi returns 3');
\tt['throws'](function () { return ES.ToInteger(uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\tt.end();
});

test('ToInt32', function (t) {
\tt.ok(is(0, ES.ToInt32(NaN)), 'NaN coerces to +0');
\tforEach([0, Infinity], function (num) {
\t\tt.ok(is(0, ES.ToInt32(num)), num + ' returns +0');
\t\tt.ok(is(0, ES.ToInt32(-num)), '-' + num + ' returns +0');
\t});
\tt['throws'](function () { return ES.ToInt32(uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\tt.ok(is(ES.ToInt32(0x100000000), 0), '2^32 returns +0');
\tt.ok(is(ES.ToInt32(0x100000000 - 1), -1), '2^32 - 1 returns -1');
\tt.ok(is(ES.ToInt32(0x80000000), -0x80000000), '2^31 returns -2^31');
\tt.ok(is(ES.ToInt32(0x80000000 - 1), 0x80000000 - 1), '2^31 - 1 returns 2^31 - 1');
\tforEach([0, Infinity, NaN, 0x100000000, 0x80000000, 0x10000, 0x42], function (num) {
\t\tt.ok(is(ES.ToInt32(num), ES.ToInt32(ES.ToUint32(num))), 'ToInt32(x) === ToInt32(ToUint32(x)) for 0x' + num.toString(16));
\t\tt.ok(is(ES.ToInt32(-num), ES.ToInt32(ES.ToUint32(-num))), 'ToInt32(x) === ToInt32(ToUint32(x)) for -0x' + num.toString(16));
\t});
\tt.end();
});

test('ToUint32', function (t) {
\tt.ok(is(0, ES.ToUint32(NaN)), 'NaN coerces to +0');
\tforEach([0, Infinity], function (num) {
\t\tt.ok(is(0, ES.ToUint32(num)), num + ' returns +0');
\t\tt.ok(is(0, ES.ToUint32(-num)), '-' + num + ' returns +0');
\t});
\tt['throws'](function () { return ES.ToUint32(uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\tt.ok(is(ES.ToUint32(0x100000000), 0), '2^32 returns +0');
\tt.ok(is(ES.ToUint32(0x100000000 - 1), 0x100000000 - 1), '2^32 - 1 returns 2^32 - 1');
\tt.ok(is(ES.ToUint32(0x80000000), 0x80000000), '2^31 returns 2^31');
\tt.ok(is(ES.ToUint32(0x80000000 - 1), 0x80000000 - 1), '2^31 - 1 returns 2^31 - 1');
\tforEach([0, Infinity, NaN, 0x100000000, 0x80000000, 0x10000, 0x42], function (num) {
\t\tt.ok(is(ES.ToUint32(num), ES.ToUint32(ES.ToInt32(num))), 'ToUint32(x) === ToUint32(ToInt32(x)) for 0x' + num.toString(16));
\t\tt.ok(is(ES.ToUint32(-num), ES.ToUint32(ES.ToInt32(-num))), 'ToUint32(x) === ToUint32(ToInt32(x)) for -0x' + num.toString(16));
\t});
\tt.end();
});

test('ToUint16', function (t) {
\tt.ok(is(0, ES.ToUint16(NaN)), 'NaN coerces to +0');
\tforEach([0, Infinity], function (num) {
\t\tt.ok(is(0, ES.ToUint16(num)), num + ' returns +0');
\t\tt.ok(is(0, ES.ToUint16(-num)), '-' + num + ' returns +0');
\t});
\tt['throws'](function () { return ES.ToUint16(uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\tt.ok(is(ES.ToUint16(0x100000000), 0), '2^32 returns +0');
\tt.ok(is(ES.ToUint16(0x100000000 - 1), 0x10000 - 1), '2^32 - 1 returns 2^16 - 1');
\tt.ok(is(ES.ToUint16(0x80000000), 0), '2^31 returns +0');
\tt.ok(is(ES.ToUint16(0x80000000 - 1), 0x10000 - 1), '2^31 - 1 returns 2^16 - 1');
\tt.ok(is(ES.ToUint16(0x10000), 0), '2^16 returns +0');
\tt.ok(is(ES.ToUint16(0x10000 - 1), 0x10000 - 1), '2^16 - 1 returns 2^16 - 1');
\tt.end();
});

test('ToString', function (t) {
\tt['throws'](function () { return ES.ToString(uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\tt.end();
});

test('ToObject', function (t) {
\tt['throws'](function () { return ES.ToObject(undefined); }, TypeError, 'undefined throws');
\tt['throws'](function () { return ES.ToObject(null); }, TypeError, 'null throws');
\tforEach(numbers, function (number) {
\t\tvar obj = ES.ToObject(number);
\t\tt.equal(typeof obj, 'object', 'number ' + number + ' coerces to object');
\t\tt.equal(true, obj instanceof Number, 'object of ' + number + ' is Number object');
\t\tt.ok(is(obj.valueOf(), number), 'object of ' + number + ' coerces to ' + number);
\t});
\tt.end();
});

test('CheckObjectCoercible', function (t) {
\tt['throws'](function () { return ES.CheckObjectCoercible(undefined); }, TypeError, 'undefined throws');
\tt['throws'](function () { return ES.CheckObjectCoercible(null); }, TypeError, 'null throws');
\tvar checkCoercible = function (value) {
\t\tt.doesNotThrow(function () { return ES.CheckObjectCoercible(value); }, '\"' + value + '\" does not throw');
\t};
\tforEach(objects.concat(nonNullPrimitives), checkCoercible);
\tt.end();
});

test('IsCallable', function (t) {
\tt.equal(true, ES.IsCallable(function () {}), 'function is callable');
\tvar nonCallables = [/a/g, {}, Object.prototype, NaN].concat(primitives);
\tforEach(nonCallables, function (nonCallable) {
\t\tt.equal(false, ES.IsCallable(nonCallable), nonCallable + ' is not callable');
\t});
\tt.end();
});

test('SameValue', function (t) {
\tt.equal(true, ES.SameValue(NaN, NaN), 'NaN is SameValue as NaN');
\tt.equal(false, ES.SameValue(0, -0), '+0 is not SameValue as -0');
\tforEach(objects.concat(primitives), function (val) {
\t\tt.equal(val === val, ES.SameValue(val, val), '\"' + val + '\" is SameValue to itself');
\t});
\tt.end();
});

test('Type', function (t) {
\tt.equal(ES.Type(), 'Undefined', 'Type() is Undefined');
\tt.equal(ES.Type(undefined), 'Undefined', 'Type(undefined) is Undefined');
\tt.equal(ES.Type(null), 'Null', 'Type(null) is Null');
\tt.equal(ES.Type(true), 'Boolean', 'Type(true) is Boolean');
\tt.equal(ES.Type(false), 'Boolean', 'Type(false) is Boolean');
\tt.equal(ES.Type(0), 'Number', 'Type(0) is Number');
\tt.equal(ES.Type(NaN), 'Number', 'Type(NaN) is Number');
\tt.equal(ES.Type('abc'), 'String', 'Type(\"abc\") is String');
\tt.equal(ES.Type(function () {}), 'Object', 'Type(function () {}) is Object');
\tt.equal(ES.Type({}), 'Object', 'Type({}) is Object');
\tt.end();
});

var bothDescriptor = function () {
\treturn { '[[Get]]': function () {}, '[[Value]]': true };
};
var accessorDescriptor = function () {
\treturn {
\t\t'[[Get]]': function () {},
\t\t'[[Enumerable]]': true,
\t\t'[[Configurable]]': true
\t};
};
var mutatorDescriptor = function () {
\treturn {
\t\t'[[Set]]': function () {},
\t\t'[[Enumerable]]': true,
\t\t'[[Configurable]]': true
\t};
};
var dataDescriptor = function () {
\treturn {
\t\t'[[Value]]': 42,
\t\t'[[Writable]]': false,
\t\t'[[Configurable]]': false
\t};
};
var genericDescriptor = function () {
\treturn {
\t\t'[[Configurable]]': true,
\t\t'[[Enumerable]]': false
\t};
};

test('IsPropertyDescriptor', function (t) {
\tforEach(primitives, function (primitive) {
\t\tt.equal(ES.IsPropertyDescriptor(primitive), false, primitive + ' is not a Property Descriptor');
\t});

\tt.equal(ES.IsPropertyDescriptor({ invalid: true }), false, 'invalid keys not allowed on a Property Descriptor');

\tt.equal(ES.IsPropertyDescriptor({}), true, 'empty object is an incomplete Property Descriptor');

\tt.equal(ES.IsPropertyDescriptor(accessorDescriptor()), true, 'accessor descriptor is a Property Descriptor');
\tt.equal(ES.IsPropertyDescriptor(mutatorDescriptor()), true, 'mutator descriptor is a Property Descriptor');
\tt.equal(ES.IsPropertyDescriptor(dataDescriptor()), true, 'data descriptor is a Property Descriptor');
\tt.equal(ES.IsPropertyDescriptor(genericDescriptor()), true, 'generic descriptor is a Property Descriptor');

\tt['throws'](function () {
\t\tES.IsPropertyDescriptor(bothDescriptor());
\t}, TypeError, 'a Property Descriptor can not be both a Data and an Accessor Descriptor');

\tt.end();
});

test('IsAccessorDescriptor', function (t) {
\tforEach(nonNullPrimitives.concat(null), function (primitive) {
\t\tt['throws'](function () { ES.IsAccessorDescriptor(primitive); }, TypeError, primitive + ' is not a Property Descriptor');
\t});

\tt.equal(ES.IsAccessorDescriptor(), false, 'no value is not an Accessor Descriptor');
\tt.equal(ES.IsAccessorDescriptor(undefined), false, 'undefined value is not an Accessor Descriptor');

\tt.equal(ES.IsAccessorDescriptor(accessorDescriptor()), true, 'accessor descriptor is an Accessor Descriptor');
\tt.equal(ES.IsAccessorDescriptor(mutatorDescriptor()), true, 'mutator descriptor is an Accessor Descriptor');
\tt.equal(ES.IsAccessorDescriptor(dataDescriptor()), false, 'data descriptor is not an Accessor Descriptor');
\tt.equal(ES.IsAccessorDescriptor(genericDescriptor()), false, 'generic descriptor is not an Accessor Descriptor');

\tt.end();
});

test('IsDataDescriptor', function (t) {
\tforEach(nonNullPrimitives.concat(null), function (primitive) {
\t\tt['throws'](function () { ES.IsDataDescriptor(primitive); }, TypeError, primitive + ' is not a Property Descriptor');
\t});

\tt.equal(ES.IsDataDescriptor(), false, 'no value is not a Data Descriptor');
\tt.equal(ES.IsDataDescriptor(undefined), false, 'undefined value is not a Data Descriptor');

\tt.equal(ES.IsDataDescriptor(accessorDescriptor()), false, 'accessor descriptor is not a Data Descriptor');
\tt.equal(ES.IsDataDescriptor(mutatorDescriptor()), false, 'mutator descriptor is not a Data Descriptor');
\tt.equal(ES.IsDataDescriptor(dataDescriptor()), true, 'data descriptor is a Data Descriptor');
\tt.equal(ES.IsDataDescriptor(genericDescriptor()), false, 'generic descriptor is not a Data Descriptor');

\tt.end();
});

test('IsGenericDescriptor', function (t) {
\tforEach(nonNullPrimitives.concat(null), function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.IsGenericDescriptor(primitive); },
\t\t\tTypeError,
\t\t\tprimitive + ' is not a Property Descriptor'
\t\t);
\t});

\tt.equal(ES.IsGenericDescriptor(), false, 'no value is not a Data Descriptor');
\tt.equal(ES.IsGenericDescriptor(undefined), false, 'undefined value is not a Data Descriptor');

\tt.equal(ES.IsGenericDescriptor(accessorDescriptor()), false, 'accessor descriptor is not a generic Descriptor');
\tt.equal(ES.IsGenericDescriptor(mutatorDescriptor()), false, 'mutator descriptor is not a generic Descriptor');
\tt.equal(ES.IsGenericDescriptor(dataDescriptor()), false, 'data descriptor is not a generic Descriptor');

\tt.equal(ES.IsGenericDescriptor(genericDescriptor()), true, 'generic descriptor is a generic Descriptor');

\tt.end();
});

test('FromPropertyDescriptor', function (t) {
\tt.equal(ES.FromPropertyDescriptor(), undefined, 'no value begets undefined');
\tt.equal(ES.FromPropertyDescriptor(undefined), undefined, 'undefined value begets undefined');

\tforEach(nonNullPrimitives.concat(null), function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.FromPropertyDescriptor(primitive); },
\t\t\tTypeError,
\t\t\tprimitive + ' is not a Property Descriptor'
\t\t);
\t});

\tvar accessor = accessorDescriptor();
\tt.deepEqual(ES.FromPropertyDescriptor(accessor), {
\t\tget: accessor['[[Get]]'],
\t\tset: accessor['[[Set]]'],
\t\tenumerable: !!accessor['[[Enumerable]]'],
\t\tconfigurable: !!accessor['[[Configurable]]']
\t});

\tvar mutator = mutatorDescriptor();
\tt.deepEqual(ES.FromPropertyDescriptor(mutator), {
\t\tget: mutator['[[Get]]'],
\t\tset: mutator['[[Set]]'],
\t\tenumerable: !!mutator['[[Enumerable]]'],
\t\tconfigurable: !!mutator['[[Configurable]]']
\t});
\tvar data = dataDescriptor();
\tt.deepEqual(ES.FromPropertyDescriptor(data), {
\t\tvalue: data['[[Value]]'],
\t\twritable: data['[[Writable]]'],
\t\tenumerable: !!data['[[Enumerable]]'],
\t\tconfigurable: !!data['[[Configurable]]']
\t});

\tt['throws'](
\t\tfunction () { ES.FromPropertyDescriptor(genericDescriptor()); },
\t\tTypeError,
\t\t'a complete Property Descriptor is required'
\t);

\tt.end();
});

test('ToPropertyDescriptor', function (t) {
\tforEach(nonNullPrimitives.concat(null), function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.ToPropertyDescriptor(primitive); },
\t\t\tTypeError,
\t\t\tprimitive + ' is not an Object'
\t\t);
\t});

\tvar accessor = accessorDescriptor();
\tt.deepEqual(ES.ToPropertyDescriptor({
\t\tget: accessor['[[Get]]'],
\t\tenumerable: !!accessor['[[Enumerable]]'],
\t\tconfigurable: !!accessor['[[Configurable]]']
\t}), accessor);

\tvar mutator = mutatorDescriptor();
\tt.deepEqual(ES.ToPropertyDescriptor({
\t\tset: mutator['[[Set]]'],
\t\tenumerable: !!mutator['[[Enumerable]]'],
\t\tconfigurable: !!mutator['[[Configurable]]']
\t}), mutator);

\tvar data = dataDescriptor();
\tt.deepEqual(ES.ToPropertyDescriptor({
\t\tvalue: data['[[Value]]'],
\t\twritable: data['[[Writable]]'],
\t\tconfigurable: !!data['[[Configurable]]']
\t}), data);

\tvar both = bothDescriptor();
\tt['throws'](
\t\tfunction () {
\t\t\tES.ToPropertyDescriptor({ get: both['[[Get]]'], value: both['[[Value]]'] });
\t\t},
\t\tTypeError,
\t\t'data and accessor descriptors are mutually exclusive'
\t);

\tt['throws'](
\t\tfunction () { ES.ToPropertyDescriptor({ get: 'not callable' }); },
\t\tTypeError,
\t\t'\"get\" must be undefined or callable'
\t);

\tt['throws'](
\t\tfunction () { ES.ToPropertyDescriptor({ set: 'not callable' }); },
\t\tTypeError,
\t\t'\"set\" must be undefined or callable'
\t);

\tt.end();
});
";
        
        $__internal_134634cc85d3883959f78ec4119a3fe3b89f9b710cab90b545c47b0ac8f4ef0e->leave($__internal_134634cc85d3883959f78ec4119a3fe3b89f9b710cab90b545c47b0ac8f4ef0e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-abstract/test/es5.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var ES = require('../').ES5;
var test = require('tape');

var forEach = require('foreach');
var is = require('object-is');

var coercibleObject = { valueOf: function () { return '3'; }, toString: function () { return 42; } };
var coercibleFnObject = {
\tvalueOf: function () { return function valueOfFn() {}; },
\ttoString: function () { return 42; }
};
var valueOfOnlyObject = { valueOf: function () { return 4; }, toString: function () { return {}; } };
var toStringOnlyObject = { valueOf: function () { return {}; }, toString: function () { return 7; } };
var uncoercibleObject = { valueOf: function () { return {}; }, toString: function () { return {}; } };
var uncoercibleFnObject = {
\tvalueOf: function () { return function valueOfFn() {}; },
\ttoString: function () { return function toStrFn() {}; }
};
var objects = [{}, coercibleObject, toStringOnlyObject, valueOfOnlyObject];
var numbers = [0, -0, Infinity, -Infinity, 42];
var nonNullPrimitives = [true, false, 'foo', ''].concat(numbers);
var primitives = [undefined, null].concat(nonNullPrimitives);

test('ToPrimitive', function (t) {
\tt.test('primitives', function (st) {
\t\tvar testPrimitive = function (primitive) {
\t\t\tst.ok(is(ES.ToPrimitive(primitive), primitive), primitive + ' is returned correctly');
\t\t};
\t\tforEach(primitives, testPrimitive);
\t\tst.end();
\t});

\tt.test('objects', function (st) {
\t\tst.equal(ES.ToPrimitive(coercibleObject), coercibleObject.valueOf(), 'coercibleObject coerces to valueOf');
\t\tst.equal(ES.ToPrimitive(coercibleObject, Number), coercibleObject.valueOf(), 'coercibleObject with hint Number coerces to valueOf');
\t\tst.equal(ES.ToPrimitive(coercibleObject, String), coercibleObject.toString(), 'coercibleObject with hint String coerces to toString');
\t\tst.equal(ES.ToPrimitive(coercibleFnObject), coercibleFnObject.toString(), 'coercibleFnObject coerces to toString');
\t\tst.equal(ES.ToPrimitive(toStringOnlyObject), toStringOnlyObject.toString(), 'toStringOnlyObject returns toString');
\t\tst.equal(ES.ToPrimitive(valueOfOnlyObject), valueOfOnlyObject.valueOf(), 'valueOfOnlyObject returns valueOf');
\t\tst.equal(ES.ToPrimitive({}), '[object Object]', '{} with no hint coerces to Object#toString');
\t\tst.equal(ES.ToPrimitive({}, String), '[object Object]', '{} with hint String coerces to Object#toString');
\t\tst.equal(ES.ToPrimitive({}, Number), '[object Object]', '{} with hint Number coerces to Object#toString');
\t\tst['throws'](function () { return ES.ToPrimitive(uncoercibleObject); }, TypeError, 'uncoercibleObject throws a TypeError');
\t\tst['throws'](function () { return ES.ToPrimitive(uncoercibleFnObject); }, TypeError, 'uncoercibleFnObject throws a TypeError');
\t\tst.end();
\t});

\tt.end();
});

test('ToBoolean', function (t) {
\tt.equal(false, ES.ToBoolean(undefined), 'undefined coerces to false');
\tt.equal(false, ES.ToBoolean(null), 'null coerces to false');
\tt.equal(false, ES.ToBoolean(false), 'false returns false');
\tt.equal(true, ES.ToBoolean(true), 'true returns true');
\tforEach([0, -0, NaN], function (falsyNumber) {
\t\tt.equal(false, ES.ToBoolean(falsyNumber), 'falsy number ' + falsyNumber + ' coerces to false');
\t});
\tforEach([Infinity, 42, 1, -Infinity], function (truthyNumber) {
\t\tt.equal(true, ES.ToBoolean(truthyNumber), 'truthy number ' + truthyNumber + ' coerces to true');
\t});
\tt.equal(false, ES.ToBoolean(''), 'empty string coerces to false');
\tt.equal(true, ES.ToBoolean('foo'), 'nonempty string coerces to true');
\tforEach(objects, function (obj) {
\t\tt.equal(true, ES.ToBoolean(obj), 'object coerces to true');
\t});
\tt.equal(true, ES.ToBoolean(uncoercibleObject), 'uncoercibleObject coerces to true');
\tt.end();
});

test('ToNumber', function (t) {
\tt.ok(is(NaN, ES.ToNumber(undefined)), 'undefined coerces to NaN');
\tt.ok(is(ES.ToNumber(null), 0), 'null coerces to +0');
\tt.ok(is(ES.ToNumber(false), 0), 'false coerces to +0');
\tt.equal(1, ES.ToNumber(true), 'true coerces to 1');
\tt.ok(is(NaN, ES.ToNumber(NaN)), 'NaN returns itself');
\tforEach([0, -0, 42, Infinity, -Infinity], function (num) {
\t\tt.equal(num, ES.ToNumber(num), num + ' returns itself');
\t});
\tforEach(['foo', '0', '4a', '2.0', 'Infinity', '-Infinity'], function (numString) {
\t\tt.ok(is(+numString, ES.ToNumber(numString)), '\"' + numString + '\" coerces to ' + Number(numString));
\t});
\tforEach(objects, function (object) {
\t\tt.ok(is(ES.ToNumber(object), ES.ToNumber(ES.ToPrimitive(object))), 'object ' + object + ' coerces to same as ToPrimitive of object does');
\t});
\tt['throws'](function () { return ES.ToNumber(uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\tt.end();
});

test('ToInteger', function (t) {
\tt.ok(is(0, ES.ToInteger(NaN)), 'NaN coerces to +0');
\tforEach([0, Infinity, 42], function (num) {
\t\tt.ok(is(num, ES.ToInteger(num)), num + ' returns itself');
\t\tt.ok(is(-num, ES.ToInteger(-num)), '-' + num + ' returns itself');
\t});
\tt.equal(3, ES.ToInteger(Math.PI), 'pi returns 3');
\tt['throws'](function () { return ES.ToInteger(uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\tt.end();
});

test('ToInt32', function (t) {
\tt.ok(is(0, ES.ToInt32(NaN)), 'NaN coerces to +0');
\tforEach([0, Infinity], function (num) {
\t\tt.ok(is(0, ES.ToInt32(num)), num + ' returns +0');
\t\tt.ok(is(0, ES.ToInt32(-num)), '-' + num + ' returns +0');
\t});
\tt['throws'](function () { return ES.ToInt32(uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\tt.ok(is(ES.ToInt32(0x100000000), 0), '2^32 returns +0');
\tt.ok(is(ES.ToInt32(0x100000000 - 1), -1), '2^32 - 1 returns -1');
\tt.ok(is(ES.ToInt32(0x80000000), -0x80000000), '2^31 returns -2^31');
\tt.ok(is(ES.ToInt32(0x80000000 - 1), 0x80000000 - 1), '2^31 - 1 returns 2^31 - 1');
\tforEach([0, Infinity, NaN, 0x100000000, 0x80000000, 0x10000, 0x42], function (num) {
\t\tt.ok(is(ES.ToInt32(num), ES.ToInt32(ES.ToUint32(num))), 'ToInt32(x) === ToInt32(ToUint32(x)) for 0x' + num.toString(16));
\t\tt.ok(is(ES.ToInt32(-num), ES.ToInt32(ES.ToUint32(-num))), 'ToInt32(x) === ToInt32(ToUint32(x)) for -0x' + num.toString(16));
\t});
\tt.end();
});

test('ToUint32', function (t) {
\tt.ok(is(0, ES.ToUint32(NaN)), 'NaN coerces to +0');
\tforEach([0, Infinity], function (num) {
\t\tt.ok(is(0, ES.ToUint32(num)), num + ' returns +0');
\t\tt.ok(is(0, ES.ToUint32(-num)), '-' + num + ' returns +0');
\t});
\tt['throws'](function () { return ES.ToUint32(uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\tt.ok(is(ES.ToUint32(0x100000000), 0), '2^32 returns +0');
\tt.ok(is(ES.ToUint32(0x100000000 - 1), 0x100000000 - 1), '2^32 - 1 returns 2^32 - 1');
\tt.ok(is(ES.ToUint32(0x80000000), 0x80000000), '2^31 returns 2^31');
\tt.ok(is(ES.ToUint32(0x80000000 - 1), 0x80000000 - 1), '2^31 - 1 returns 2^31 - 1');
\tforEach([0, Infinity, NaN, 0x100000000, 0x80000000, 0x10000, 0x42], function (num) {
\t\tt.ok(is(ES.ToUint32(num), ES.ToUint32(ES.ToInt32(num))), 'ToUint32(x) === ToUint32(ToInt32(x)) for 0x' + num.toString(16));
\t\tt.ok(is(ES.ToUint32(-num), ES.ToUint32(ES.ToInt32(-num))), 'ToUint32(x) === ToUint32(ToInt32(x)) for -0x' + num.toString(16));
\t});
\tt.end();
});

test('ToUint16', function (t) {
\tt.ok(is(0, ES.ToUint16(NaN)), 'NaN coerces to +0');
\tforEach([0, Infinity], function (num) {
\t\tt.ok(is(0, ES.ToUint16(num)), num + ' returns +0');
\t\tt.ok(is(0, ES.ToUint16(-num)), '-' + num + ' returns +0');
\t});
\tt['throws'](function () { return ES.ToUint16(uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\tt.ok(is(ES.ToUint16(0x100000000), 0), '2^32 returns +0');
\tt.ok(is(ES.ToUint16(0x100000000 - 1), 0x10000 - 1), '2^32 - 1 returns 2^16 - 1');
\tt.ok(is(ES.ToUint16(0x80000000), 0), '2^31 returns +0');
\tt.ok(is(ES.ToUint16(0x80000000 - 1), 0x10000 - 1), '2^31 - 1 returns 2^16 - 1');
\tt.ok(is(ES.ToUint16(0x10000), 0), '2^16 returns +0');
\tt.ok(is(ES.ToUint16(0x10000 - 1), 0x10000 - 1), '2^16 - 1 returns 2^16 - 1');
\tt.end();
});

test('ToString', function (t) {
\tt['throws'](function () { return ES.ToString(uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\tt.end();
});

test('ToObject', function (t) {
\tt['throws'](function () { return ES.ToObject(undefined); }, TypeError, 'undefined throws');
\tt['throws'](function () { return ES.ToObject(null); }, TypeError, 'null throws');
\tforEach(numbers, function (number) {
\t\tvar obj = ES.ToObject(number);
\t\tt.equal(typeof obj, 'object', 'number ' + number + ' coerces to object');
\t\tt.equal(true, obj instanceof Number, 'object of ' + number + ' is Number object');
\t\tt.ok(is(obj.valueOf(), number), 'object of ' + number + ' coerces to ' + number);
\t});
\tt.end();
});

test('CheckObjectCoercible', function (t) {
\tt['throws'](function () { return ES.CheckObjectCoercible(undefined); }, TypeError, 'undefined throws');
\tt['throws'](function () { return ES.CheckObjectCoercible(null); }, TypeError, 'null throws');
\tvar checkCoercible = function (value) {
\t\tt.doesNotThrow(function () { return ES.CheckObjectCoercible(value); }, '\"' + value + '\" does not throw');
\t};
\tforEach(objects.concat(nonNullPrimitives), checkCoercible);
\tt.end();
});

test('IsCallable', function (t) {
\tt.equal(true, ES.IsCallable(function () {}), 'function is callable');
\tvar nonCallables = [/a/g, {}, Object.prototype, NaN].concat(primitives);
\tforEach(nonCallables, function (nonCallable) {
\t\tt.equal(false, ES.IsCallable(nonCallable), nonCallable + ' is not callable');
\t});
\tt.end();
});

test('SameValue', function (t) {
\tt.equal(true, ES.SameValue(NaN, NaN), 'NaN is SameValue as NaN');
\tt.equal(false, ES.SameValue(0, -0), '+0 is not SameValue as -0');
\tforEach(objects.concat(primitives), function (val) {
\t\tt.equal(val === val, ES.SameValue(val, val), '\"' + val + '\" is SameValue to itself');
\t});
\tt.end();
});

test('Type', function (t) {
\tt.equal(ES.Type(), 'Undefined', 'Type() is Undefined');
\tt.equal(ES.Type(undefined), 'Undefined', 'Type(undefined) is Undefined');
\tt.equal(ES.Type(null), 'Null', 'Type(null) is Null');
\tt.equal(ES.Type(true), 'Boolean', 'Type(true) is Boolean');
\tt.equal(ES.Type(false), 'Boolean', 'Type(false) is Boolean');
\tt.equal(ES.Type(0), 'Number', 'Type(0) is Number');
\tt.equal(ES.Type(NaN), 'Number', 'Type(NaN) is Number');
\tt.equal(ES.Type('abc'), 'String', 'Type(\"abc\") is String');
\tt.equal(ES.Type(function () {}), 'Object', 'Type(function () {}) is Object');
\tt.equal(ES.Type({}), 'Object', 'Type({}) is Object');
\tt.end();
});

var bothDescriptor = function () {
\treturn { '[[Get]]': function () {}, '[[Value]]': true };
};
var accessorDescriptor = function () {
\treturn {
\t\t'[[Get]]': function () {},
\t\t'[[Enumerable]]': true,
\t\t'[[Configurable]]': true
\t};
};
var mutatorDescriptor = function () {
\treturn {
\t\t'[[Set]]': function () {},
\t\t'[[Enumerable]]': true,
\t\t'[[Configurable]]': true
\t};
};
var dataDescriptor = function () {
\treturn {
\t\t'[[Value]]': 42,
\t\t'[[Writable]]': false,
\t\t'[[Configurable]]': false
\t};
};
var genericDescriptor = function () {
\treturn {
\t\t'[[Configurable]]': true,
\t\t'[[Enumerable]]': false
\t};
};

test('IsPropertyDescriptor', function (t) {
\tforEach(primitives, function (primitive) {
\t\tt.equal(ES.IsPropertyDescriptor(primitive), false, primitive + ' is not a Property Descriptor');
\t});

\tt.equal(ES.IsPropertyDescriptor({ invalid: true }), false, 'invalid keys not allowed on a Property Descriptor');

\tt.equal(ES.IsPropertyDescriptor({}), true, 'empty object is an incomplete Property Descriptor');

\tt.equal(ES.IsPropertyDescriptor(accessorDescriptor()), true, 'accessor descriptor is a Property Descriptor');
\tt.equal(ES.IsPropertyDescriptor(mutatorDescriptor()), true, 'mutator descriptor is a Property Descriptor');
\tt.equal(ES.IsPropertyDescriptor(dataDescriptor()), true, 'data descriptor is a Property Descriptor');
\tt.equal(ES.IsPropertyDescriptor(genericDescriptor()), true, 'generic descriptor is a Property Descriptor');

\tt['throws'](function () {
\t\tES.IsPropertyDescriptor(bothDescriptor());
\t}, TypeError, 'a Property Descriptor can not be both a Data and an Accessor Descriptor');

\tt.end();
});

test('IsAccessorDescriptor', function (t) {
\tforEach(nonNullPrimitives.concat(null), function (primitive) {
\t\tt['throws'](function () { ES.IsAccessorDescriptor(primitive); }, TypeError, primitive + ' is not a Property Descriptor');
\t});

\tt.equal(ES.IsAccessorDescriptor(), false, 'no value is not an Accessor Descriptor');
\tt.equal(ES.IsAccessorDescriptor(undefined), false, 'undefined value is not an Accessor Descriptor');

\tt.equal(ES.IsAccessorDescriptor(accessorDescriptor()), true, 'accessor descriptor is an Accessor Descriptor');
\tt.equal(ES.IsAccessorDescriptor(mutatorDescriptor()), true, 'mutator descriptor is an Accessor Descriptor');
\tt.equal(ES.IsAccessorDescriptor(dataDescriptor()), false, 'data descriptor is not an Accessor Descriptor');
\tt.equal(ES.IsAccessorDescriptor(genericDescriptor()), false, 'generic descriptor is not an Accessor Descriptor');

\tt.end();
});

test('IsDataDescriptor', function (t) {
\tforEach(nonNullPrimitives.concat(null), function (primitive) {
\t\tt['throws'](function () { ES.IsDataDescriptor(primitive); }, TypeError, primitive + ' is not a Property Descriptor');
\t});

\tt.equal(ES.IsDataDescriptor(), false, 'no value is not a Data Descriptor');
\tt.equal(ES.IsDataDescriptor(undefined), false, 'undefined value is not a Data Descriptor');

\tt.equal(ES.IsDataDescriptor(accessorDescriptor()), false, 'accessor descriptor is not a Data Descriptor');
\tt.equal(ES.IsDataDescriptor(mutatorDescriptor()), false, 'mutator descriptor is not a Data Descriptor');
\tt.equal(ES.IsDataDescriptor(dataDescriptor()), true, 'data descriptor is a Data Descriptor');
\tt.equal(ES.IsDataDescriptor(genericDescriptor()), false, 'generic descriptor is not a Data Descriptor');

\tt.end();
});

test('IsGenericDescriptor', function (t) {
\tforEach(nonNullPrimitives.concat(null), function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.IsGenericDescriptor(primitive); },
\t\t\tTypeError,
\t\t\tprimitive + ' is not a Property Descriptor'
\t\t);
\t});

\tt.equal(ES.IsGenericDescriptor(), false, 'no value is not a Data Descriptor');
\tt.equal(ES.IsGenericDescriptor(undefined), false, 'undefined value is not a Data Descriptor');

\tt.equal(ES.IsGenericDescriptor(accessorDescriptor()), false, 'accessor descriptor is not a generic Descriptor');
\tt.equal(ES.IsGenericDescriptor(mutatorDescriptor()), false, 'mutator descriptor is not a generic Descriptor');
\tt.equal(ES.IsGenericDescriptor(dataDescriptor()), false, 'data descriptor is not a generic Descriptor');

\tt.equal(ES.IsGenericDescriptor(genericDescriptor()), true, 'generic descriptor is a generic Descriptor');

\tt.end();
});

test('FromPropertyDescriptor', function (t) {
\tt.equal(ES.FromPropertyDescriptor(), undefined, 'no value begets undefined');
\tt.equal(ES.FromPropertyDescriptor(undefined), undefined, 'undefined value begets undefined');

\tforEach(nonNullPrimitives.concat(null), function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.FromPropertyDescriptor(primitive); },
\t\t\tTypeError,
\t\t\tprimitive + ' is not a Property Descriptor'
\t\t);
\t});

\tvar accessor = accessorDescriptor();
\tt.deepEqual(ES.FromPropertyDescriptor(accessor), {
\t\tget: accessor['[[Get]]'],
\t\tset: accessor['[[Set]]'],
\t\tenumerable: !!accessor['[[Enumerable]]'],
\t\tconfigurable: !!accessor['[[Configurable]]']
\t});

\tvar mutator = mutatorDescriptor();
\tt.deepEqual(ES.FromPropertyDescriptor(mutator), {
\t\tget: mutator['[[Get]]'],
\t\tset: mutator['[[Set]]'],
\t\tenumerable: !!mutator['[[Enumerable]]'],
\t\tconfigurable: !!mutator['[[Configurable]]']
\t});
\tvar data = dataDescriptor();
\tt.deepEqual(ES.FromPropertyDescriptor(data), {
\t\tvalue: data['[[Value]]'],
\t\twritable: data['[[Writable]]'],
\t\tenumerable: !!data['[[Enumerable]]'],
\t\tconfigurable: !!data['[[Configurable]]']
\t});

\tt['throws'](
\t\tfunction () { ES.FromPropertyDescriptor(genericDescriptor()); },
\t\tTypeError,
\t\t'a complete Property Descriptor is required'
\t);

\tt.end();
});

test('ToPropertyDescriptor', function (t) {
\tforEach(nonNullPrimitives.concat(null), function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.ToPropertyDescriptor(primitive); },
\t\t\tTypeError,
\t\t\tprimitive + ' is not an Object'
\t\t);
\t});

\tvar accessor = accessorDescriptor();
\tt.deepEqual(ES.ToPropertyDescriptor({
\t\tget: accessor['[[Get]]'],
\t\tenumerable: !!accessor['[[Enumerable]]'],
\t\tconfigurable: !!accessor['[[Configurable]]']
\t}), accessor);

\tvar mutator = mutatorDescriptor();
\tt.deepEqual(ES.ToPropertyDescriptor({
\t\tset: mutator['[[Set]]'],
\t\tenumerable: !!mutator['[[Enumerable]]'],
\t\tconfigurable: !!mutator['[[Configurable]]']
\t}), mutator);

\tvar data = dataDescriptor();
\tt.deepEqual(ES.ToPropertyDescriptor({
\t\tvalue: data['[[Value]]'],
\t\twritable: data['[[Writable]]'],
\t\tconfigurable: !!data['[[Configurable]]']
\t}), data);

\tvar both = bothDescriptor();
\tt['throws'](
\t\tfunction () {
\t\t\tES.ToPropertyDescriptor({ get: both['[[Get]]'], value: both['[[Value]]'] });
\t\t},
\t\tTypeError,
\t\t'data and accessor descriptors are mutually exclusive'
\t);

\tt['throws'](
\t\tfunction () { ES.ToPropertyDescriptor({ get: 'not callable' }); },
\t\tTypeError,
\t\t'\"get\" must be undefined or callable'
\t);

\tt['throws'](
\t\tfunction () { ES.ToPropertyDescriptor({ set: 'not callable' }); },
\t\tTypeError,
\t\t'\"set\" must be undefined or callable'
\t);

\tt.end();
});
", "node_modules/es-abstract/test/es5.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-abstract/test/es5.js");
    }
}
