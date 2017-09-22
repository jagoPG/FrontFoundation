<?php

/* node_modules/es-abstract/test/es2015.js */
class __TwigTemplate_dd56fed61f9fa6608011453e6c186c073f5f328baab34c7e4c5292db8d4c5bcf extends Twig_Template
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
        $__internal_01d08fec07bb7141b75cf6ee60abe14f5ed6d05d1171b595f6f86da1cec94165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d08fec07bb7141b75cf6ee60abe14f5ed6d05d1171b595f6f86da1cec94165->enter($__internal_01d08fec07bb7141b75cf6ee60abe14f5ed6d05d1171b595f6f86da1cec94165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-abstract/test/es2015.js"));

        // line 1
        echo "'use strict';

var ES = require('../').ES2015;
var test = require('tape');

var forEach = require('foreach');
var is = require('object-is');
var debug = require('util').format;
var assign = require('object.assign');

var v = require('./helpers/values');

var ops = require('../operations/2015');
var diffOps = require('./diffOps');

test('has expected operations', function (t) {
\tvar diff = diffOps(ES, ops);

\tt.deepEqual(diff.extra, [], 'no extra ops');

\t// jscs:disable
\tvar expectedMissing = ['CreateDataProperty', 'CreateMethodProperty', 'CreateDataPropertyOrThrow', 'DefinePropertyOrThrow', 'DeletePropertyOrThrow', 'Construct', 'SetIntegrityLevel', 'TestIntegrityLevel', 'CreateArrayFromList', 'CreateListFromArrayLike', 'OrdinaryHasInstance', 'EnumerableOwnNames', 'GetIterator', 'IteratorNext', 'IteratorComplete', 'IteratorValue', 'IteratorStep', 'IteratorClose', 'CreateListIterator', 'thisNumberValue', 'thisTimeValue', 'thisStringValue', 'RegExpBuiltinExec', 'IsPromise'];
\t// jscs:enable
\tt.deepEqual(diff.missing, expectedMissing, 'no unexpected missing ops');

\tt.end();
});

var MAX_SAFE_INTEGER = Number.MAX_SAFE_INTEGER || Math.pow(2, 53) - 1;

test('ToPrimitive', function (t) {
\tt.test('primitives', function (st) {
\t\tvar testPrimitive = function (primitive) {
\t\t\tst.ok(is(ES.ToPrimitive(primitive), primitive), debug(primitive) + ' is returned correctly');
\t\t};
\t\tforEach(v.primitives, testPrimitive);
\t\tst.end();
\t});

\tt.test('objects', function (st) {
\t\tst.equal(ES.ToPrimitive(v.coercibleObject), 3, 'coercibleObject with no hint coerces to valueOf');
\t\tst.ok(is(ES.ToPrimitive({}), '[object Object]'), '{} with no hint coerces to Object#toString');
\t\tst.equal(ES.ToPrimitive(v.coercibleObject, Number), 3, 'coercibleObject with hint Number coerces to valueOf');
\t\tst.ok(is(ES.ToPrimitive({}, Number), '[object Object]'), '{} with hint Number coerces to NaN');
\t\tst.equal(ES.ToPrimitive(v.coercibleObject, String), 42, 'coercibleObject with hint String coerces to nonstringified toString');
\t\tst.equal(ES.ToPrimitive({}, String), '[object Object]', '{} with hint String coerces to Object#toString');
\t\tst.equal(ES.ToPrimitive(v.toStringOnlyObject), 7, 'toStringOnlyObject returns non-stringified toString');
\t\tst.equal(ES.ToPrimitive(v.valueOfOnlyObject), 4, 'valueOfOnlyObject returns valueOf');
\t\tst['throws'](function () { return ES.ToPrimitive(v.uncoercibleObject); }, TypeError, 'uncoercibleObject throws a TypeError');
\t\tst.end();
\t});

\tt.test('dates', function (st) {
\t\tvar invalid = new Date(NaN);
\t\tst.equal(ES.ToPrimitive(invalid), Date.prototype.toString.call(invalid), 'invalid Date coerces to Date#toString');
\t\tvar now = new Date();
\t\tst.equal(ES.ToPrimitive(now), Date.prototype.toString.call(now), 'Date coerces to Date#toString');
\t\tst.end();
\t});

\tt.end();
});

test('ToBoolean', function (t) {
\tt.equal(false, ES.ToBoolean(undefined), 'undefined coerces to false');
\tt.equal(false, ES.ToBoolean(null), 'null coerces to false');
\tt.equal(false, ES.ToBoolean(false), 'false returns false');
\tt.equal(true, ES.ToBoolean(true), 'true returns true');

\tt.test('numbers', function (st) {
\t\tforEach([0, -0, NaN], function (falsyNumber) {
\t\t\tst.equal(false, ES.ToBoolean(falsyNumber), 'falsy number ' + falsyNumber + ' coerces to false');
\t\t});
\t\tforEach([Infinity, 42, 1, -Infinity], function (truthyNumber) {
\t\t\tst.equal(true, ES.ToBoolean(truthyNumber), 'truthy number ' + truthyNumber + ' coerces to true');
\t\t});

\t\tst.end();
\t});

\tt.equal(false, ES.ToBoolean(''), 'empty string coerces to false');
\tt.equal(true, ES.ToBoolean('foo'), 'nonempty string coerces to true');

\tt.test('objects', function (st) {
\t\tforEach(v.objects, function (obj) {
\t\t\tst.equal(true, ES.ToBoolean(obj), 'object coerces to true');
\t\t});
\t\tst.equal(true, ES.ToBoolean(v.uncoercibleObject), 'uncoercibleObject coerces to true');

\t\tst.end();
\t});

\tt.end();
});

test('ToNumber', function (t) {
\tt.ok(is(NaN, ES.ToNumber(undefined)), 'undefined coerces to NaN');
\tt.ok(is(ES.ToNumber(null), 0), 'null coerces to +0');
\tt.ok(is(ES.ToNumber(false), 0), 'false coerces to +0');
\tt.equal(1, ES.ToNumber(true), 'true coerces to 1');

\tt.test('numbers', function (st) {
\t\tst.ok(is(NaN, ES.ToNumber(NaN)), 'NaN returns itself');
\t\tforEach([0, -0, 42, Infinity, -Infinity], function (num) {
\t\t\tst.equal(num, ES.ToNumber(num), num + ' returns itself');
\t\t});
\t\tforEach(['foo', '0', '4a', '2.0', 'Infinity', '-Infinity'], function (numString) {
\t\t\tst.ok(is(+numString, ES.ToNumber(numString)), '\"' + numString + '\" coerces to ' + Number(numString));
\t\t});
\t\tst.end();
\t});

\tt.test('objects', function (st) {
\t\tforEach(v.objects, function (object) {
\t\t\tst.ok(is(ES.ToNumber(object), ES.ToNumber(ES.ToPrimitive(object))), 'object ' + object + ' coerces to same as ToPrimitive of object does');
\t\t});
\t\tst['throws'](function () { return ES.ToNumber(v.uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\t\tst.end();
\t});

\tt.test('binary literals', function (st) {
\t\tst.equal(ES.ToNumber('0b10'), 2, '0b10 is 2');
\t\tst.equal(ES.ToNumber({ toString: function () { return '0b11'; } }), 3, 'Object that toStrings to 0b11 is 3');

\t\tst.equal(true, is(ES.ToNumber('0b12'), NaN), '0b12 is NaN');
\t\tst.equal(true, is(ES.ToNumber({ toString: function () { return '0b112'; } }), NaN), 'Object that toStrings to 0b112 is NaN');
\t\tst.end();
\t});

\tt.test('octal literals', function (st) {
\t\tst.equal(ES.ToNumber('0o10'), 8, '0o10 is 8');
\t\tst.equal(ES.ToNumber({ toString: function () { return '0o11'; } }), 9, 'Object that toStrings to 0o11 is 9');

\t\tst.equal(true, is(ES.ToNumber('0o18'), NaN), '0o18 is NaN');
\t\tst.equal(true, is(ES.ToNumber({ toString: function () { return '0o118'; } }), NaN), 'Object that toStrings to 0o118 is NaN');
\t\tst.end();
\t});

\tt.test('signed hex numbers', function (st) {
\t\tst.equal(true, is(ES.ToNumber('-0xF'), NaN), '-0xF is NaN');
\t\tst.equal(true, is(ES.ToNumber(' -0xF '), NaN), 'space-padded -0xF is NaN');
\t\tst.equal(true, is(ES.ToNumber('+0xF'), NaN), '+0xF is NaN');
\t\tst.equal(true, is(ES.ToNumber(' +0xF '), NaN), 'space-padded +0xF is NaN');

\t\tst.end();
\t});

\tt.test('trimming of whitespace and non-whitespace characters', function (st) {
\t\tvar whitespace = ' \\t\\x0b\\f\\xa0\\ufeff\\n\\r\\u2028\\u2029\\u1680\\u180e\\u2000\\u2001\\u2002\\u2003\\u2004\\u2005\\u2006\\u2007\\u2008\\u2009\\u200a\\u202f\\u205f\\u3000';
\t\tst.equal(0, ES.ToNumber(whitespace + 0 + whitespace), 'whitespace is trimmed');

\t\t// Zero-width space (zws), next line character (nel), and non-character (bom) are not whitespace.
\t\tvar nonWhitespaces = {
\t\t\t'\\\\u0085': '\\u0085',
\t\t\t'\\\\u200b': '\\u200b',
\t\t\t'\\\\ufffe': '\\ufffe'
\t\t};

\t\tforEach(nonWhitespaces, function (desc, nonWS) {
\t\t\tst.equal(true, is(ES.ToNumber(nonWS + 0 + nonWS), NaN), 'non-whitespace ' + desc + ' not trimmed');
\t\t});

\t\tst.end();
\t});

\tforEach(v.symbols, function (symbol) {
\t\tt['throws'](
\t\t\tfunction () { ES.ToNumber(symbol); },
\t\t\tTypeError,
\t\t\t'Symbols can’t be converted to a Number: ' + debug(symbol)
\t\t);
\t});

\tt.test('dates', function (st) {
\t\tvar invalid = new Date(NaN);
\t\tst.ok(is(ES.ToNumber(invalid), NaN), 'invalid Date coerces to NaN');
\t\tvar now = Date.now();
\t\tst.equal(ES.ToNumber(new Date(now)), now, 'Date coerces to timestamp');
\t\tst.end();
\t});

\tt.end();
});

test('ToInteger', function (t) {
\tt.ok(is(0, ES.ToInteger(NaN)), 'NaN coerces to +0');
\tforEach([0, Infinity, 42], function (num) {
\t\tt.ok(is(num, ES.ToInteger(num)), num + ' returns itself');
\t\tt.ok(is(-num, ES.ToInteger(-num)), '-' + num + ' returns itself');
\t});
\tt.equal(3, ES.ToInteger(Math.PI), 'pi returns 3');
\tt['throws'](function () { return ES.ToInteger(v.uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\tt.end();
});

test('ToInt32', function (t) {
\tt.ok(is(0, ES.ToInt32(NaN)), 'NaN coerces to +0');
\tforEach([0, Infinity], function (num) {
\t\tt.ok(is(0, ES.ToInt32(num)), num + ' returns +0');
\t\tt.ok(is(0, ES.ToInt32(-num)), '-' + num + ' returns +0');
\t});
\tt['throws'](function () { return ES.ToInt32(v.uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
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
\tt['throws'](function () { return ES.ToUint32(v.uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
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

test('ToInt16', function (t) {
\tt.ok(is(0, ES.ToInt16(NaN)), 'NaN coerces to +0');
\tforEach([0, Infinity], function (num) {
\t\tt.ok(is(0, ES.ToInt16(num)), num + ' returns +0');
\t\tt.ok(is(0, ES.ToInt16(-num)), '-' + num + ' returns +0');
\t});
\tt['throws'](function () { return ES.ToInt16(v.uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\tt.ok(is(ES.ToInt16(0x100000000), 0), '2^32 returns +0');
\tt.ok(is(ES.ToInt16(0x100000000 - 1), -1), '2^32 - 1 returns -1');
\tt.ok(is(ES.ToInt16(0x80000000), 0), '2^31 returns +0');
\tt.ok(is(ES.ToInt16(0x80000000 - 1), -1), '2^31 - 1 returns -1');
\tt.ok(is(ES.ToInt16(0x10000), 0), '2^16 returns +0');
\tt.ok(is(ES.ToInt16(0x10000 - 1), -1), '2^16 - 1 returns -1');
\tt.end();
});

test('ToUint16', function (t) {
\tt.ok(is(0, ES.ToUint16(NaN)), 'NaN coerces to +0');
\tforEach([0, Infinity], function (num) {
\t\tt.ok(is(0, ES.ToUint16(num)), num + ' returns +0');
\t\tt.ok(is(0, ES.ToUint16(-num)), '-' + num + ' returns +0');
\t});
\tt['throws'](function () { return ES.ToUint16(v.uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\tt.ok(is(ES.ToUint16(0x100000000), 0), '2^32 returns +0');
\tt.ok(is(ES.ToUint16(0x100000000 - 1), 0x10000 - 1), '2^32 - 1 returns 2^16 - 1');
\tt.ok(is(ES.ToUint16(0x80000000), 0), '2^31 returns +0');
\tt.ok(is(ES.ToUint16(0x80000000 - 1), 0x10000 - 1), '2^31 - 1 returns 2^16 - 1');
\tt.ok(is(ES.ToUint16(0x10000), 0), '2^16 returns +0');
\tt.ok(is(ES.ToUint16(0x10000 - 1), 0x10000 - 1), '2^16 - 1 returns 2^16 - 1');
\tt.end();
});

test('ToInt8', function (t) {
\tt.ok(is(0, ES.ToInt8(NaN)), 'NaN coerces to +0');
\tforEach([0, Infinity], function (num) {
\t\tt.ok(is(0, ES.ToInt8(num)), num + ' returns +0');
\t\tt.ok(is(0, ES.ToInt8(-num)), '-' + num + ' returns +0');
\t});
\tt['throws'](function () { return ES.ToInt8(v.uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\tt.ok(is(ES.ToInt8(0x100000000), 0), '2^32 returns +0');
\tt.ok(is(ES.ToInt8(0x100000000 - 1), -1), '2^32 - 1 returns -1');
\tt.ok(is(ES.ToInt8(0x80000000), 0), '2^31 returns +0');
\tt.ok(is(ES.ToInt8(0x80000000 - 1), -1), '2^31 - 1 returns -1');
\tt.ok(is(ES.ToInt8(0x10000), 0), '2^16 returns +0');
\tt.ok(is(ES.ToInt8(0x10000 - 1), -1), '2^16 - 1 returns -1');
\tt.ok(is(ES.ToInt8(0x100), 0), '2^8 returns +0');
\tt.ok(is(ES.ToInt8(0x100 - 1), -1), '2^8 - 1 returns -1');
\tt.ok(is(ES.ToInt8(0x10), 0x10), '2^4 returns 2^4');
\tt.end();
});

test('ToUint8', function (t) {
\tt.ok(is(0, ES.ToUint8(NaN)), 'NaN coerces to +0');
\tforEach([0, Infinity], function (num) {
\t\tt.ok(is(0, ES.ToUint8(num)), num + ' returns +0');
\t\tt.ok(is(0, ES.ToUint8(-num)), '-' + num + ' returns +0');
\t});
\tt['throws'](function () { return ES.ToUint8(v.uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\tt.ok(is(ES.ToUint8(0x100000000), 0), '2^32 returns +0');
\tt.ok(is(ES.ToUint8(0x100000000 - 1), 0x100 - 1), '2^32 - 1 returns 2^8 - 1');
\tt.ok(is(ES.ToUint8(0x80000000), 0), '2^31 returns +0');
\tt.ok(is(ES.ToUint8(0x80000000 - 1), 0x100 - 1), '2^31 - 1 returns 2^8 - 1');
\tt.ok(is(ES.ToUint8(0x10000), 0), '2^16 returns +0');
\tt.ok(is(ES.ToUint8(0x10000 - 1), 0x100 - 1), '2^16 - 1 returns 2^8 - 1');
\tt.ok(is(ES.ToUint8(0x100), 0), '2^8 returns +0');
\tt.ok(is(ES.ToUint8(0x100 - 1), 0x100 - 1), '2^8 - 1 returns 2^16 - 1');
\tt.ok(is(ES.ToUint8(0x10), 0x10), '2^4 returns 2^4');
\tt.ok(is(ES.ToUint8(0x10 - 1), 0x10 - 1), '2^4 - 1 returns 2^4 - 1');
\tt.end();
});

test('ToUint8Clamp', function (t) {
\tt.ok(is(0, ES.ToUint8Clamp(NaN)), 'NaN coerces to +0');
\tt.ok(is(0, ES.ToUint8Clamp(0)), '+0 returns +0');
\tt.ok(is(0, ES.ToUint8Clamp(-0)), '-0 returns +0');
\tt.ok(is(0, ES.ToUint8Clamp(-Infinity)), '-Infinity returns +0');
\tt['throws'](function () { return ES.ToUint8Clamp(v.uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\tforEach([255, 256, 0x100000, Infinity], function (number) {
\t\tt.ok(is(255, ES.ToUint8Clamp(number)), number + ' coerces to 255');
\t});
\tt.equal(1, ES.ToUint8Clamp(1.49), '1.49 coerces to 1');
\tt.equal(2, ES.ToUint8Clamp(1.5), '1.5 coerces to 2, because 2 is even');
\tt.equal(2, ES.ToUint8Clamp(1.51), '1.51 coerces to 2');

\tt.equal(2, ES.ToUint8Clamp(2.49), '2.49 coerces to 2');
\tt.equal(2, ES.ToUint8Clamp(2.5), '2.5 coerces to 2, because 2 is even');
\tt.equal(3, ES.ToUint8Clamp(2.51), '2.51 coerces to 3');
\tt.end();
});

test('ToString', function (t) {
\tforEach(v.objects.concat(v.nonSymbolPrimitives), function (item) {
\t\tt.equal(ES.ToString(item), String(item), 'ES.ToString(' + debug(item) + ') ToStrings to String(' + debug(item) + ')');
\t});

\tt['throws'](function () { return ES.ToString(v.uncoercibleObject); }, TypeError, 'uncoercibleObject throws');

\tforEach(v.symbols, function (symbol) {
\t\tt['throws'](function () { return ES.ToString(symbol); }, TypeError, debug(symbol) + ' throws');
\t});
\tt.end();
});

test('ToObject', function (t) {
\tt['throws'](function () { return ES.ToObject(undefined); }, TypeError, 'undefined throws');
\tt['throws'](function () { return ES.ToObject(null); }, TypeError, 'null throws');
\tforEach(v.numbers, function (number) {
\t\tvar obj = ES.ToObject(number);
\t\tt.equal(typeof obj, 'object', 'number ' + number + ' coerces to object');
\t\tt.equal(true, obj instanceof Number, 'object of ' + number + ' is Number object');
\t\tt.ok(is(obj.valueOf(), number), 'object of ' + number + ' coerces to ' + number);
\t});
\tt.end();
});

test('RequireObjectCoercible', function (t) {
\tt.equal(false, 'CheckObjectCoercible' in ES, 'CheckObjectCoercible -> RequireObjectCoercible in ES6');
\tt['throws'](function () { return ES.RequireObjectCoercible(undefined); }, TypeError, 'undefined throws');
\tt['throws'](function () { return ES.RequireObjectCoercible(null); }, TypeError, 'null throws');
\tvar isCoercible = function (value) {
\t\tt.doesNotThrow(function () { return ES.RequireObjectCoercible(value); }, debug(value) + ' does not throw');
\t};
\tforEach(v.objects.concat(v.nonNullPrimitives), isCoercible);
\tt.end();
});

test('IsCallable', function (t) {
\tt.equal(true, ES.IsCallable(function () {}), 'function is callable');
\tvar nonCallables = [/a/g, {}, Object.prototype, NaN].concat(v.primitives);
\tforEach(nonCallables, function (nonCallable) {
\t\tt.equal(false, ES.IsCallable(nonCallable), debug(nonCallable) + ' is not callable');
\t});
\tt.end();
});

test('SameValue', function (t) {
\tt.equal(true, ES.SameValue(NaN, NaN), 'NaN is SameValue as NaN');
\tt.equal(false, ES.SameValue(0, -0), '+0 is not SameValue as -0');
\tforEach(v.objects.concat(v.primitives), function (val) {
\t\tt.equal(val === val, ES.SameValue(val, val), debug(val) + ' is SameValue to itself');
\t});
\tt.end();
});

test('SameValueZero', function (t) {
\tt.equal(true, ES.SameValueZero(NaN, NaN), 'NaN is SameValueZero as NaN');
\tt.equal(true, ES.SameValueZero(0, -0), '+0 is SameValueZero as -0');
\tforEach(v.objects.concat(v.primitives), function (val) {
\t\tt.equal(val === val, ES.SameValueZero(val, val), debug(val) + ' is SameValueZero to itself');
\t});
\tt.end();
});

test('ToPropertyKey', function (t) {
\tforEach(v.objects.concat(v.nonSymbolPrimitives), function (value) {
\t\tt.equal(ES.ToPropertyKey(value), String(value), 'ToPropertyKey(value) === String(value) for non-Symbols');
\t});

\tforEach(v.symbols, function (symbol) {
\t\tt.equal(
\t\t\tES.ToPropertyKey(symbol),
\t\t\tsymbol,
\t\t\t'ToPropertyKey(' + debug(symbol) + ') === ' + debug(symbol)
\t\t);
\t\tt.equal(
\t\t\tES.ToPropertyKey(Object(symbol)),
\t\t\tsymbol,
\t\t\t'ToPropertyKey(' + debug(Object(symbol)) + ') === ' + debug(symbol)
\t\t);
\t});

\tt.end();
});

test('ToLength', function (t) {
\tt['throws'](function () { return ES.ToLength(v.uncoercibleObject); }, TypeError, 'uncoercibleObject throws a TypeError');
\tt.equal(3, ES.ToLength(v.coercibleObject), 'coercibleObject coerces to 3');
\tt.equal(42, ES.ToLength('42.5'), '\"42.5\" coerces to 42');
\tt.equal(7, ES.ToLength(7.3), '7.3 coerces to 7');
\tforEach([-0, -1, -42, -Infinity], function (negative) {
\t\tt.ok(is(0, ES.ToLength(negative)), negative + ' coerces to +0');
\t});
\tt.equal(MAX_SAFE_INTEGER, ES.ToLength(MAX_SAFE_INTEGER + 1), '2^53 coerces to 2^53 - 1');
\tt.equal(MAX_SAFE_INTEGER, ES.ToLength(MAX_SAFE_INTEGER + 3), '2^53 + 2 coerces to 2^53 - 1');
\tt.end();
});

test('IsArray', function (t) {
\tt.equal(true, ES.IsArray([]), '[] is array');
\tt.equal(false, ES.IsArray({}), '{} is not array');
\tt.equal(false, ES.IsArray({ length: 1, 0: true }), 'arraylike object is not array');
\tforEach(v.objects.concat(v.primitives), function (value) {
\t\tt.equal(false, ES.IsArray(value), debug(value) + ' is not array');
\t});
\tt.end();
});

test('IsRegExp', function (t) {
\tforEach([/a/g, new RegExp('a', 'g')], function (regex) {
\t\tt.equal(true, ES.IsRegExp(regex), regex + ' is regex');
\t});

\tforEach(v.objects.concat(v.primitives), function (nonRegex) {
\t\tt.equal(false, ES.IsRegExp(nonRegex), debug(nonRegex) + ' is not regex');
\t});

\tt.test('Symbol.match', { skip: !v.hasSymbols || !Symbol.match }, function (st) {
\t\tvar obj = {};
\t\tobj[Symbol.match] = true;
\t\tst.equal(true, ES.IsRegExp(obj), 'object with truthy Symbol.match is regex');

\t\tvar regex = /a/;
\t\tregex[Symbol.match] = false;
\t\tst.equal(false, ES.IsRegExp(regex), 'regex with falsy Symbol.match is not regex');

\t\tst.end();
\t});

\tt.end();
});

test('IsPropertyKey', function (t) {
\tforEach(v.numbers.concat(v.objects), function (notKey) {
\t\tt.equal(false, ES.IsPropertyKey(notKey), debug(notKey) + ' is not property key');
\t});

\tt.equal(true, ES.IsPropertyKey('foo'), 'string is property key');

\tforEach(v.symbols, function (symbol) {
\t\tt.equal(true, ES.IsPropertyKey(symbol), debug(symbol) + ' is property key');
\t});
\tt.end();
});

test('IsInteger', function (t) {
\tfor (var i = -100; i < 100; i += 10) {
\t\tt.equal(true, ES.IsInteger(i), i + ' is integer');
\t\tt.equal(false, ES.IsInteger(i + 0.2), (i + 0.2) + ' is not integer');
\t}
\tt.equal(true, ES.IsInteger(-0), '-0 is integer');
\tvar notInts = v.objects.concat([Infinity, -Infinity, NaN, true, false, null, undefined, [], new Date()], v.symbols);
\tforEach(notInts, function (notInt) {
\t\tt.equal(false, ES.IsInteger(notInt), debug(notInt) + ' is not integer');
\t});
\tt.equal(false, ES.IsInteger(v.uncoercibleObject), 'uncoercibleObject is not integer');
\tt.end();
});

test('IsExtensible', function (t) {
\tforEach(v.objects, function (object) {
\t\tt.equal(true, ES.IsExtensible(object), debug(object) + ' object is extensible');
\t});
\tforEach(v.primitives, function (primitive) {
\t\tt.equal(false, ES.IsExtensible(primitive), debug(primitive) + ' is not extensible');
\t});
\tif (Object.preventExtensions) {
\t\tt.equal(false, ES.IsExtensible(Object.preventExtensions({})), 'object with extensions prevented is not extensible');
\t}
\tt.end();
});

test('CanonicalNumericIndexString', function (t) {
\tvar throwsOnNonString = function (notString) {
\t\tt['throws'](
\t\t\tfunction () { return ES.CanonicalNumericIndexString(notString); },
\t\t\tTypeError,
\t\t\tdebug(notString) + ' is not a string'
\t\t);
\t};
\tforEach(v.objects.concat(v.numbers), throwsOnNonString);
\tt.ok(is(-0, ES.CanonicalNumericIndexString('-0')), '\"-0\" returns -0');
\tfor (var i = -50; i < 50; i += 10) {
\t\tt.equal(i, ES.CanonicalNumericIndexString(String(i)), '\"' + i + '\" returns ' + i);
\t\tt.equal(undefined, ES.CanonicalNumericIndexString(String(i) + 'a'), '\"' + i + 'a\" returns undefined');
\t}
\tt.end();
});

test('IsConstructor', function (t) {
\tt.equal(true, ES.IsConstructor(function () {}), 'function is constructor');
\tt.equal(false, ES.IsConstructor(/a/g), 'regex is not constructor');
\tforEach(v.objects, function (object) {
\t\tt.equal(false, ES.IsConstructor(object), object + ' object is not constructor');
\t});

\ttry {
\t\tvar foo = Function('return class Foo {}')(); // eslint-disable-line no-new-func
\t\tt.equal(ES.IsConstructor(foo), true, 'class is constructor');
\t} catch (e) {
\t\tt.comment('SKIP: class syntax not supported.');
\t}
\tt.end();
});

test('Call', function (t) {
\tvar receiver = {};
\tvar notFuncs = v.objects.concat(v.primitives).concat([/a/g, new RegExp('a', 'g')]);
\tt.plan(notFuncs.length + 4);
\tvar throwsIfNotCallable = function (notFunc) {
\t\tt['throws'](
\t\t\tfunction () { return ES.Call(notFunc, receiver); },
\t\t\tTypeError,
\t\t\tdebug(notFunc) + ' (' + typeof notFunc + ') is not callable'
\t\t);
\t};
\tforEach(notFuncs, throwsIfNotCallable);
\tES.Call(function (a, b) {
\t\tt.equal(this, receiver, 'context matches expected');
\t\tt.deepEqual([a, b], [1, 2], 'named args are correct');
\t\tt.equal(arguments.length, 3, 'extra argument was passed');
\t\tt.equal(arguments[2], 3, 'extra argument was correct');
\t}, receiver, [1, 2, 3]);
\tt.end();
});

test('GetV', function (t) {
\tt['throws'](function () { return ES.GetV({ 7: 7 }, 7); }, TypeError, 'Throws a TypeError if `P` is not a property key');
\tvar obj = { a: function () {} };
\tt.equal(ES.GetV(obj, 'a'), obj.a, 'returns property if it exists');
\tt.equal(ES.GetV(obj, 'b'), undefined, 'returns undefiend if property does not exist');
\tt.end();
});

test('GetMethod', function (t) {
\tt['throws'](function () { return ES.GetMethod({ 7: 7 }, 7); }, TypeError, 'Throws a TypeError if `P` is not a property key');
\tt.equal(ES.GetMethod({}, 'a'), undefined, 'returns undefined in property is undefined');
\tt.equal(ES.GetMethod({ a: null }, 'a'), undefined, 'returns undefined if property is null');
\tt.equal(ES.GetMethod({ a: undefined }, 'a'), undefined, 'returns undefined if property is undefined');
\tvar obj = { a: function () {} };
\tt['throws'](function () { ES.GetMethod({ a: 'b' }, 'a'); }, TypeError, 'throws TypeError if property exists and is not callable');
\tt.equal(ES.GetMethod(obj, 'a'), obj.a, 'returns property if it is callable');
\tt.end();
});

test('Get', function (t) {
\tt['throws'](function () { return ES.Get('a', 'a'); }, TypeError, 'Throws a TypeError if `O` is not an Object');
\tt['throws'](function () { return ES.Get({ 7: 7 }, 7); }, TypeError, 'Throws a TypeError if `P` is not a property key');

\tvar value = {};
\tt.test('Symbols', { skip: !v.hasSymbols }, function (st) {
\t\tvar sym = Symbol('sym');
\t\tvar obj = {};
\t\tobj[sym] = value;
\t\tst.equal(ES.Get(obj, sym), value, 'returns property `P` if it exists on object `O`');
\t\tst.end();
\t});
\tt.equal(ES.Get({ a: value }, 'a'), value, 'returns property `P` if it exists on object `O`');
\tt.end();
});

test('Type', { skip: !v.hasSymbols }, function (t) {
\tt.equal(ES.Type(Symbol.iterator), 'Symbol', 'Type(Symbol.iterator) is Symbol');
\tt.end();
});

test('SpeciesConstructor', function (t) {
\tt['throws'](function () { ES.SpeciesConstructor(null); }, TypeError);
\tt['throws'](function () { ES.SpeciesConstructor(undefined); }, TypeError);

\tvar defaultConstructor = function Foo() {};

\tt.equal(
\t\tES.SpeciesConstructor({ constructor: undefined }, defaultConstructor),
\t\tdefaultConstructor,
\t\t'undefined constructor returns defaultConstructor'
\t);

\tt['throws'](
\t\tfunction () { return ES.SpeciesConstructor({ constructor: null }, defaultConstructor); },
\t\tTypeError,
\t\t'non-undefined non-object constructor throws'
\t);

\tvar Bar = function Bar() {};
\tvar hasSpecies = v.hasSymbols && Symbol.species;
\tif (hasSpecies) {
\t\tBar[Symbol.species] = null;
\t}
\tt.equal(
\t\tES.SpeciesConstructor(new Bar(), defaultConstructor),
\t\tdefaultConstructor,
\t\t'undefined/null Symbol.species returns default constructor'
\t);

\tt.test('with Symbol.species', { skip: !hasSpecies }, function (st) {
\t\tvar Baz = function Baz() {};
\t\tBaz[Symbol.species] = Bar;
\t\tst.equal(
\t\t\tES.SpeciesConstructor(new Baz(), defaultConstructor),
\t\t\tBar,
\t\t\t'returns Symbol.species constructor value'
\t\t);

\t\tBaz[Symbol.species] = {};
\t\tst['throws'](
\t\t\tfunction () { ES.SpeciesConstructor(new Baz(), defaultConstructor); },
\t\t\tTypeError,
\t\t\t'throws when non-constructor non-null non-undefined species value found'
\t\t);

\t\tst.end();
\t});
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
\t\t'[[Writable]]': false
\t};
};
var genericDescriptor = function () {
\treturn {
\t\t'[[Configurable]]': true,
\t\t'[[Enumerable]]': false
\t};
};

test('IsPropertyDescriptor', function (t) {
\tforEach(v.nonUndefinedPrimitives, function (primitive) {
\t\tt.equal(
\t\t\tES.IsPropertyDescriptor(primitive),
\t\t\tfalse,
\t\t\tdebug(primitive) + ' is not a Property Descriptor'
\t\t);
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
\tforEach(v.nonUndefinedPrimitives, function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.IsAccessorDescriptor(primitive); },
\t\t\tTypeError,
\t\t\tdebug(primitive) + ' is not a Property Descriptor'
\t\t);
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
\tforEach(v.nonUndefinedPrimitives, function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.IsDataDescriptor(primitive); },
\t\t\tTypeError,
\t\t\tdebug(primitive) + ' is not a Property Descriptor'
\t\t);
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
\tforEach(v.nonUndefinedPrimitives, function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.IsGenericDescriptor(primitive); },
\t\t\tTypeError,
\t\t\tdebug(primitive) + ' is not a Property Descriptor'
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

\tforEach(v.nonUndefinedPrimitives, function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.FromPropertyDescriptor(primitive); },
\t\t\tTypeError,
\t\t\tdebug(primitive) + ' is not a Property Descriptor'
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
\tforEach(v.nonUndefinedPrimitives, function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.ToPropertyDescriptor(primitive); },
\t\t\tTypeError,
\t\t\tdebug(primitive) + ' is not an Object'
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
\t}), assign(data, { '[[Configurable]]': false }));

\tvar both = bothDescriptor();
\tt['throws'](
\t\tfunction () {
\t\t\tES.FromPropertyDescriptor({ get: both['[[Get]]'], value: both['[[Value]]'] });
\t\t},
\t\tTypeError,
\t\t'data and accessor descriptors are mutually exclusive'
\t);

\tt.end();
});

test('CompletePropertyDescriptor', function (t) {
\tforEach(v.nonUndefinedPrimitives, function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.CompletePropertyDescriptor(primitive); },
\t\t\tTypeError,
\t\t\tdebug(primitive) + ' is not a Property Descriptor'
\t\t);
\t});

\tvar generic = genericDescriptor();
\tt.deepEqual(ES.CompletePropertyDescriptor(generic), {
\t\t'[[Configurable]]': !!generic['[[Configurable]]'],
\t\t'[[Enumerable]]': !!generic['[[Enumerable]]'],
\t\t'[[Value]]': undefined,
\t\t'[[Writable]]': false
\t}, 'completes a Generic Descriptor');

\tvar data = dataDescriptor();
\tt.deepEqual(ES.CompletePropertyDescriptor(data), {
\t\t'[[Configurable]]': !!data['[[Configurable]]'],
\t\t'[[Enumerable]]': false,
\t\t'[[Value]]': data['[[Value]]'],
\t\t'[[Writable]]': !!data['[[Writable]]']
\t}, 'completes a Data Descriptor');

\tvar accessor = accessorDescriptor();
\tt.deepEqual(ES.CompletePropertyDescriptor(accessor), {
\t\t'[[Get]]': accessor['[[Get]]'],
\t\t'[[Enumerable]]': !!accessor['[[Enumerable]]'],
\t\t'[[Configurable]]': !!accessor['[[Configurable]]'],
\t\t'[[Set]]': undefined
\t}, 'completes an Accessor Descriptor');

\tvar mutator = mutatorDescriptor();
\tt.deepEqual(ES.CompletePropertyDescriptor(mutator), {
\t\t'[[Set]]': mutator['[[Set]]'],
\t\t'[[Enumerable]]': !!mutator['[[Enumerable]]'],
\t\t'[[Configurable]]': !!mutator['[[Configurable]]'],
\t\t'[[Get]]': undefined
\t}, 'completes a mutator Descriptor');

\tt['throws'](
\t\tfunction () { ES.CompletePropertyDescriptor(bothDescriptor()); },
\t\tTypeError,
\t\t'data and accessor descriptors are mutually exclusive'
\t);

\tt.end();
});

test('Set', function (t) {
\tforEach(v.primitives, function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.Set(primitive, '', null, false); },
\t\t\tTypeError,
\t\t\tdebug(primitive) + ' is not an Object'
\t\t);
\t});

\tforEach(v.nonPropertyKeys, function (nonKey) {
\t\tt['throws'](
\t\t\tfunction () { ES.Set({}, nonKey, null, false); },
\t\t\tTypeError,
\t\t\tdebug(nonKey) + ' is not a Property Key'
\t\t);
\t});

\tforEach(v.nonBooleans, function (nonBoolean) {
\t\tt['throws'](
\t\t\tfunction () { ES.Set({}, '', null, nonBoolean); },
\t\t\tTypeError,
\t\t\tdebug(nonBoolean) + ' is not a Boolean'
\t\t);
\t});

\tvar o = {};
\tvar value = {};
\tES.Set(o, 'key', value, true);
\tt.deepEqual(o, { key: value }, 'key is set');

\tt.test('nonwritable', { skip: !Object.defineProperty }, function (st) {
\t\tvar obj = { a: value };
\t\tObject.defineProperty(obj, 'a', { writable: false });

\t\tst['throws'](
\t\t\tfunction () { ES.Set(obj, 'a', value, true); },
\t\t\tTypeError,
\t\t\t'can not Set nonwritable property'
\t\t);

\t\tst.doesNotThrow(
\t\t\tfunction () { ES.Set(obj, 'a', value, false); },
\t\t\t'setting Throw to false prevents an exception'
\t\t);

\t\tst.end();
\t});

\tt.end();
});

test('HasOwnProperty', function (t) {
\tforEach(v.primitives, function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.HasOwnProperty(primitive, 'key'); },
\t\t\tTypeError,
\t\t\tdebug(primitive) + ' is not an Object'
\t\t);
\t});

\tforEach(v.nonPropertyKeys, function (nonKey) {
\t\tt['throws'](
\t\t\tfunction () { ES.HasOwnProperty({}, nonKey); },
\t\t\tTypeError,
\t\t\tdebug(nonKey) + ' is not a Property Key'
\t\t);
\t});

\tt.equal(ES.HasOwnProperty({}, 'toString'), false, 'inherited properties are not own');
\tt.equal(
\t\tES.HasOwnProperty({ toString: 1 }, 'toString'),
\t\ttrue,
\t\t'shadowed inherited own properties are own'
\t);
\tt.equal(ES.HasOwnProperty({ a: 1 }, 'a'), true, 'own properties are own');

\tt.end();
});

test('HasProperty', function (t) {
\tforEach(v.primitives, function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.HasProperty(primitive, 'key'); },
\t\t\tTypeError,
\t\t\tdebug(primitive) + ' is not an Object'
\t\t);
\t});

\tforEach(v.nonPropertyKeys, function (nonKey) {
\t\tt['throws'](
\t\t\tfunction () { ES.HasProperty({}, nonKey); },
\t\t\tTypeError,
\t\t\tdebug(nonKey) + ' is not a Property Key'
\t\t);
\t});

\tt.equal(ES.HasProperty({}, 'nope'), false, 'object does not have nonexistent properties');
\tt.equal(ES.HasProperty({}, 'toString'), true, 'object has inherited properties');
\tt.equal(
\t\tES.HasProperty({ toString: 1 }, 'toString'),
\t\ttrue,
\t\t'object has shadowed inherited own properties'
\t);
\tt.equal(ES.HasProperty({ a: 1 }, 'a'), true, 'object has own properties');

\tt.end();
});

test('IsConcatSpreadable', function (t) {
\tforEach(v.primitives, function (primitive) {
\t\tt.equal(ES.IsConcatSpreadable(primitive), false, debug(primitive) + ' is not an Object');
\t});

\tvar hasSymbolConcatSpreadable = v.hasSymbols && Symbol.isConcatSpreadable;
\tt.test('Symbol.isConcatSpreadable', { skip: !hasSymbolConcatSpreadable }, function (st) {
\t\tforEach(v.falsies, function (falsy) {
\t\t\tvar obj = {};
\t\t\tobj[Symbol.isConcatSpreadable] = falsy;
\t\t\tst.equal(
\t\t\t\tES.IsConcatSpreadable(obj),
\t\t\t\tfalse,
\t\t\t\t'an object with ' + debug(falsy) + ' as Symbol.isConcatSpreadable is not concat spreadable'
\t\t\t);
\t\t});

\t\tforEach(v.truthies, function (truthy) {
\t\t\tvar obj = {};
\t\t\tobj[Symbol.isConcatSpreadable] = truthy;
\t\t\tst.equal(
\t\t\t\tES.IsConcatSpreadable(obj),
\t\t\t\ttrue,
\t\t\t\t'an object with ' + debug(truthy) + ' as Symbol.isConcatSpreadable is concat spreadable'
\t\t\t);
\t\t});

\t\tst.end();
\t});

\tforEach(v.objects, function (object) {
\t\tt.equal(
\t\t\tES.IsConcatSpreadable(object),
\t\t\tfalse,
\t\t\t'non-array without Symbol.isConcatSpreadable is not concat spreadable'
\t\t);
\t});

\tt.equal(ES.IsConcatSpreadable([]), true, 'arrays are concat spreadable');

\tt.end();
});

test('Invoke', function (t) {
\tforEach(v.nonPropertyKeys, function (nonKey) {
\t\tt['throws'](
\t\t\tfunction () { ES.Invoke({}, nonKey); },
\t\t\tTypeError,
\t\t\tdebug(nonKey) + ' is not a Property Key'
\t\t);
\t});

\tt['throws'](function () { ES.Invoke({ o: false }, 'o'); }, TypeError, 'fails on a non-function');

\tt.test('invoked callback', function (st) {
\t\tvar aValue = {};
\t\tvar bValue = {};
\t\tvar obj = {
\t\t\tf: function (a) {
\t\t\t\tst.equal(arguments.length, 2, '2 args passed');
\t\t\t\tst.equal(a, aValue, 'first arg is correct');
\t\t\t\tst.equal(arguments[1], bValue, 'second arg is correct');
\t\t\t}
\t\t};
\t\tst.plan(3);
\t\tES.Invoke(obj, 'f', aValue, bValue);
\t});

\tt.end();
});

test('CreateIterResultObject', function (t) {
\tforEach(v.nonBooleans, function (nonBoolean) {
\t\tt['throws'](
\t\t\tfunction () { ES.CreateIterResultObject({}, nonBoolean); },
\t\t\tTypeError,
\t\t\t'\"done\" argument must be a boolean; ' + debug(nonBoolean) + ' is not'
\t\t);
\t});

\tvar value = {};
\tt.deepEqual(ES.CreateIterResultObject(value, true), {
\t\tvalue: value,
\t\tdone: true
\t}, 'creates a \"done\" iteration result');
\tt.deepEqual(ES.CreateIterResultObject(value, false), {
\t\tvalue: value,
\t\tdone: false
\t}, 'creates a \"not done\" iteration result');

\tt.end();
});

test('RegExpExec', function (t) {
\tforEach(v.primitives, function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.RegExpExec(primitive); },
\t\t\tTypeError,
\t\t\t'\"R\" argument must be an object; ' + debug(primitive) + ' is not'
\t\t);
\t});

\tforEach(v.nonStrings, function (nonString) {
\t\tt['throws'](
\t\t\tfunction () { ES.RegExpExec({}, nonString); },
\t\t\tTypeError,
\t\t\t'\"S\" argument must be a String; ' + debug(nonString) + ' is not'
\t\t);
\t});

\tt.test('gets and calls a callable \"exec\"', function (st) {
\t\tvar str = '123';
\t\tvar o = {
\t\t\texec: function (S) {
\t\t\t\tst.equal(this, o, '\"exec\" receiver is R');
\t\t\t\tst.equal(S, str, '\"exec\" argument is S');

\t\t\t\treturn null;
\t\t\t}
\t\t};
\t\tst.plan(2);
\t\tES.RegExpExec(o, str);
\t\tst.end();
\t});

\tt.test('throws if a callable \"exec\" returns a non-null non-object', function (st) {
\t\tvar str = '123';
\t\tst.plan(v.nonNullPrimitives.length);
\t\tforEach(v.nonNullPrimitives, function (nonNullPrimitive) {
\t\t\tst['throws'](
\t\t\t\tfunction () { ES.RegExpExec({ exec: function () { return nonNullPrimitive; } }, str); },
\t\t\t\tTypeError,
\t\t\t\t'\"exec\" method must return `null` or an Object; ' + debug(nonNullPrimitive) + ' is not'
\t\t\t);
\t\t});
\t\tst.end();
\t});

\tt.test('actual regex that should match against a string', function (st) {
\t\tvar S = 'aabc';
\t\tvar R = /a/g;
\t\tvar match1 = ES.RegExpExec(R, S);
\t\tvar match2 = ES.RegExpExec(R, S);
\t\tvar match3 = ES.RegExpExec(R, S);
\t\tst.deepEqual(match1, assign(['a'], { index: 0, input: S }), 'match object 1 is as expected');
\t\tst.deepEqual(match2, assign(['a'], { index: 1, input: S }), 'match object 2 is as expected');
\t\tst.equal(match3, null, 'match 3 is null as expected');
\t\tst.end();
\t});

\tt.test('actual regex that should match against a string, with shadowed \"exec\"', function (st) {
\t\tvar S = 'aabc';
\t\tvar R = /a/g;
\t\tR.exec = undefined;
\t\tvar match1 = ES.RegExpExec(R, S);
\t\tvar match2 = ES.RegExpExec(R, S);
\t\tvar match3 = ES.RegExpExec(R, S);
\t\tst.deepEqual(match1, assign(['a'], { index: 0, input: S }), 'match object 1 is as expected');
\t\tst.deepEqual(match2, assign(['a'], { index: 1, input: S }), 'match object 2 is as expected');
\t\tst.equal(match3, null, 'match 3 is null as expected');
\t\tst.end();
\t});
\tt.end();
});
";
        
        $__internal_01d08fec07bb7141b75cf6ee60abe14f5ed6d05d1171b595f6f86da1cec94165->leave($__internal_01d08fec07bb7141b75cf6ee60abe14f5ed6d05d1171b595f6f86da1cec94165_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-abstract/test/es2015.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var ES = require('../').ES2015;
var test = require('tape');

var forEach = require('foreach');
var is = require('object-is');
var debug = require('util').format;
var assign = require('object.assign');

var v = require('./helpers/values');

var ops = require('../operations/2015');
var diffOps = require('./diffOps');

test('has expected operations', function (t) {
\tvar diff = diffOps(ES, ops);

\tt.deepEqual(diff.extra, [], 'no extra ops');

\t// jscs:disable
\tvar expectedMissing = ['CreateDataProperty', 'CreateMethodProperty', 'CreateDataPropertyOrThrow', 'DefinePropertyOrThrow', 'DeletePropertyOrThrow', 'Construct', 'SetIntegrityLevel', 'TestIntegrityLevel', 'CreateArrayFromList', 'CreateListFromArrayLike', 'OrdinaryHasInstance', 'EnumerableOwnNames', 'GetIterator', 'IteratorNext', 'IteratorComplete', 'IteratorValue', 'IteratorStep', 'IteratorClose', 'CreateListIterator', 'thisNumberValue', 'thisTimeValue', 'thisStringValue', 'RegExpBuiltinExec', 'IsPromise'];
\t// jscs:enable
\tt.deepEqual(diff.missing, expectedMissing, 'no unexpected missing ops');

\tt.end();
});

var MAX_SAFE_INTEGER = Number.MAX_SAFE_INTEGER || Math.pow(2, 53) - 1;

test('ToPrimitive', function (t) {
\tt.test('primitives', function (st) {
\t\tvar testPrimitive = function (primitive) {
\t\t\tst.ok(is(ES.ToPrimitive(primitive), primitive), debug(primitive) + ' is returned correctly');
\t\t};
\t\tforEach(v.primitives, testPrimitive);
\t\tst.end();
\t});

\tt.test('objects', function (st) {
\t\tst.equal(ES.ToPrimitive(v.coercibleObject), 3, 'coercibleObject with no hint coerces to valueOf');
\t\tst.ok(is(ES.ToPrimitive({}), '[object Object]'), '{} with no hint coerces to Object#toString');
\t\tst.equal(ES.ToPrimitive(v.coercibleObject, Number), 3, 'coercibleObject with hint Number coerces to valueOf');
\t\tst.ok(is(ES.ToPrimitive({}, Number), '[object Object]'), '{} with hint Number coerces to NaN');
\t\tst.equal(ES.ToPrimitive(v.coercibleObject, String), 42, 'coercibleObject with hint String coerces to nonstringified toString');
\t\tst.equal(ES.ToPrimitive({}, String), '[object Object]', '{} with hint String coerces to Object#toString');
\t\tst.equal(ES.ToPrimitive(v.toStringOnlyObject), 7, 'toStringOnlyObject returns non-stringified toString');
\t\tst.equal(ES.ToPrimitive(v.valueOfOnlyObject), 4, 'valueOfOnlyObject returns valueOf');
\t\tst['throws'](function () { return ES.ToPrimitive(v.uncoercibleObject); }, TypeError, 'uncoercibleObject throws a TypeError');
\t\tst.end();
\t});

\tt.test('dates', function (st) {
\t\tvar invalid = new Date(NaN);
\t\tst.equal(ES.ToPrimitive(invalid), Date.prototype.toString.call(invalid), 'invalid Date coerces to Date#toString');
\t\tvar now = new Date();
\t\tst.equal(ES.ToPrimitive(now), Date.prototype.toString.call(now), 'Date coerces to Date#toString');
\t\tst.end();
\t});

\tt.end();
});

test('ToBoolean', function (t) {
\tt.equal(false, ES.ToBoolean(undefined), 'undefined coerces to false');
\tt.equal(false, ES.ToBoolean(null), 'null coerces to false');
\tt.equal(false, ES.ToBoolean(false), 'false returns false');
\tt.equal(true, ES.ToBoolean(true), 'true returns true');

\tt.test('numbers', function (st) {
\t\tforEach([0, -0, NaN], function (falsyNumber) {
\t\t\tst.equal(false, ES.ToBoolean(falsyNumber), 'falsy number ' + falsyNumber + ' coerces to false');
\t\t});
\t\tforEach([Infinity, 42, 1, -Infinity], function (truthyNumber) {
\t\t\tst.equal(true, ES.ToBoolean(truthyNumber), 'truthy number ' + truthyNumber + ' coerces to true');
\t\t});

\t\tst.end();
\t});

\tt.equal(false, ES.ToBoolean(''), 'empty string coerces to false');
\tt.equal(true, ES.ToBoolean('foo'), 'nonempty string coerces to true');

\tt.test('objects', function (st) {
\t\tforEach(v.objects, function (obj) {
\t\t\tst.equal(true, ES.ToBoolean(obj), 'object coerces to true');
\t\t});
\t\tst.equal(true, ES.ToBoolean(v.uncoercibleObject), 'uncoercibleObject coerces to true');

\t\tst.end();
\t});

\tt.end();
});

test('ToNumber', function (t) {
\tt.ok(is(NaN, ES.ToNumber(undefined)), 'undefined coerces to NaN');
\tt.ok(is(ES.ToNumber(null), 0), 'null coerces to +0');
\tt.ok(is(ES.ToNumber(false), 0), 'false coerces to +0');
\tt.equal(1, ES.ToNumber(true), 'true coerces to 1');

\tt.test('numbers', function (st) {
\t\tst.ok(is(NaN, ES.ToNumber(NaN)), 'NaN returns itself');
\t\tforEach([0, -0, 42, Infinity, -Infinity], function (num) {
\t\t\tst.equal(num, ES.ToNumber(num), num + ' returns itself');
\t\t});
\t\tforEach(['foo', '0', '4a', '2.0', 'Infinity', '-Infinity'], function (numString) {
\t\t\tst.ok(is(+numString, ES.ToNumber(numString)), '\"' + numString + '\" coerces to ' + Number(numString));
\t\t});
\t\tst.end();
\t});

\tt.test('objects', function (st) {
\t\tforEach(v.objects, function (object) {
\t\t\tst.ok(is(ES.ToNumber(object), ES.ToNumber(ES.ToPrimitive(object))), 'object ' + object + ' coerces to same as ToPrimitive of object does');
\t\t});
\t\tst['throws'](function () { return ES.ToNumber(v.uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\t\tst.end();
\t});

\tt.test('binary literals', function (st) {
\t\tst.equal(ES.ToNumber('0b10'), 2, '0b10 is 2');
\t\tst.equal(ES.ToNumber({ toString: function () { return '0b11'; } }), 3, 'Object that toStrings to 0b11 is 3');

\t\tst.equal(true, is(ES.ToNumber('0b12'), NaN), '0b12 is NaN');
\t\tst.equal(true, is(ES.ToNumber({ toString: function () { return '0b112'; } }), NaN), 'Object that toStrings to 0b112 is NaN');
\t\tst.end();
\t});

\tt.test('octal literals', function (st) {
\t\tst.equal(ES.ToNumber('0o10'), 8, '0o10 is 8');
\t\tst.equal(ES.ToNumber({ toString: function () { return '0o11'; } }), 9, 'Object that toStrings to 0o11 is 9');

\t\tst.equal(true, is(ES.ToNumber('0o18'), NaN), '0o18 is NaN');
\t\tst.equal(true, is(ES.ToNumber({ toString: function () { return '0o118'; } }), NaN), 'Object that toStrings to 0o118 is NaN');
\t\tst.end();
\t});

\tt.test('signed hex numbers', function (st) {
\t\tst.equal(true, is(ES.ToNumber('-0xF'), NaN), '-0xF is NaN');
\t\tst.equal(true, is(ES.ToNumber(' -0xF '), NaN), 'space-padded -0xF is NaN');
\t\tst.equal(true, is(ES.ToNumber('+0xF'), NaN), '+0xF is NaN');
\t\tst.equal(true, is(ES.ToNumber(' +0xF '), NaN), 'space-padded +0xF is NaN');

\t\tst.end();
\t});

\tt.test('trimming of whitespace and non-whitespace characters', function (st) {
\t\tvar whitespace = ' \\t\\x0b\\f\\xa0\\ufeff\\n\\r\\u2028\\u2029\\u1680\\u180e\\u2000\\u2001\\u2002\\u2003\\u2004\\u2005\\u2006\\u2007\\u2008\\u2009\\u200a\\u202f\\u205f\\u3000';
\t\tst.equal(0, ES.ToNumber(whitespace + 0 + whitespace), 'whitespace is trimmed');

\t\t// Zero-width space (zws), next line character (nel), and non-character (bom) are not whitespace.
\t\tvar nonWhitespaces = {
\t\t\t'\\\\u0085': '\\u0085',
\t\t\t'\\\\u200b': '\\u200b',
\t\t\t'\\\\ufffe': '\\ufffe'
\t\t};

\t\tforEach(nonWhitespaces, function (desc, nonWS) {
\t\t\tst.equal(true, is(ES.ToNumber(nonWS + 0 + nonWS), NaN), 'non-whitespace ' + desc + ' not trimmed');
\t\t});

\t\tst.end();
\t});

\tforEach(v.symbols, function (symbol) {
\t\tt['throws'](
\t\t\tfunction () { ES.ToNumber(symbol); },
\t\t\tTypeError,
\t\t\t'Symbols can’t be converted to a Number: ' + debug(symbol)
\t\t);
\t});

\tt.test('dates', function (st) {
\t\tvar invalid = new Date(NaN);
\t\tst.ok(is(ES.ToNumber(invalid), NaN), 'invalid Date coerces to NaN');
\t\tvar now = Date.now();
\t\tst.equal(ES.ToNumber(new Date(now)), now, 'Date coerces to timestamp');
\t\tst.end();
\t});

\tt.end();
});

test('ToInteger', function (t) {
\tt.ok(is(0, ES.ToInteger(NaN)), 'NaN coerces to +0');
\tforEach([0, Infinity, 42], function (num) {
\t\tt.ok(is(num, ES.ToInteger(num)), num + ' returns itself');
\t\tt.ok(is(-num, ES.ToInteger(-num)), '-' + num + ' returns itself');
\t});
\tt.equal(3, ES.ToInteger(Math.PI), 'pi returns 3');
\tt['throws'](function () { return ES.ToInteger(v.uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\tt.end();
});

test('ToInt32', function (t) {
\tt.ok(is(0, ES.ToInt32(NaN)), 'NaN coerces to +0');
\tforEach([0, Infinity], function (num) {
\t\tt.ok(is(0, ES.ToInt32(num)), num + ' returns +0');
\t\tt.ok(is(0, ES.ToInt32(-num)), '-' + num + ' returns +0');
\t});
\tt['throws'](function () { return ES.ToInt32(v.uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
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
\tt['throws'](function () { return ES.ToUint32(v.uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
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

test('ToInt16', function (t) {
\tt.ok(is(0, ES.ToInt16(NaN)), 'NaN coerces to +0');
\tforEach([0, Infinity], function (num) {
\t\tt.ok(is(0, ES.ToInt16(num)), num + ' returns +0');
\t\tt.ok(is(0, ES.ToInt16(-num)), '-' + num + ' returns +0');
\t});
\tt['throws'](function () { return ES.ToInt16(v.uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\tt.ok(is(ES.ToInt16(0x100000000), 0), '2^32 returns +0');
\tt.ok(is(ES.ToInt16(0x100000000 - 1), -1), '2^32 - 1 returns -1');
\tt.ok(is(ES.ToInt16(0x80000000), 0), '2^31 returns +0');
\tt.ok(is(ES.ToInt16(0x80000000 - 1), -1), '2^31 - 1 returns -1');
\tt.ok(is(ES.ToInt16(0x10000), 0), '2^16 returns +0');
\tt.ok(is(ES.ToInt16(0x10000 - 1), -1), '2^16 - 1 returns -1');
\tt.end();
});

test('ToUint16', function (t) {
\tt.ok(is(0, ES.ToUint16(NaN)), 'NaN coerces to +0');
\tforEach([0, Infinity], function (num) {
\t\tt.ok(is(0, ES.ToUint16(num)), num + ' returns +0');
\t\tt.ok(is(0, ES.ToUint16(-num)), '-' + num + ' returns +0');
\t});
\tt['throws'](function () { return ES.ToUint16(v.uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\tt.ok(is(ES.ToUint16(0x100000000), 0), '2^32 returns +0');
\tt.ok(is(ES.ToUint16(0x100000000 - 1), 0x10000 - 1), '2^32 - 1 returns 2^16 - 1');
\tt.ok(is(ES.ToUint16(0x80000000), 0), '2^31 returns +0');
\tt.ok(is(ES.ToUint16(0x80000000 - 1), 0x10000 - 1), '2^31 - 1 returns 2^16 - 1');
\tt.ok(is(ES.ToUint16(0x10000), 0), '2^16 returns +0');
\tt.ok(is(ES.ToUint16(0x10000 - 1), 0x10000 - 1), '2^16 - 1 returns 2^16 - 1');
\tt.end();
});

test('ToInt8', function (t) {
\tt.ok(is(0, ES.ToInt8(NaN)), 'NaN coerces to +0');
\tforEach([0, Infinity], function (num) {
\t\tt.ok(is(0, ES.ToInt8(num)), num + ' returns +0');
\t\tt.ok(is(0, ES.ToInt8(-num)), '-' + num + ' returns +0');
\t});
\tt['throws'](function () { return ES.ToInt8(v.uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\tt.ok(is(ES.ToInt8(0x100000000), 0), '2^32 returns +0');
\tt.ok(is(ES.ToInt8(0x100000000 - 1), -1), '2^32 - 1 returns -1');
\tt.ok(is(ES.ToInt8(0x80000000), 0), '2^31 returns +0');
\tt.ok(is(ES.ToInt8(0x80000000 - 1), -1), '2^31 - 1 returns -1');
\tt.ok(is(ES.ToInt8(0x10000), 0), '2^16 returns +0');
\tt.ok(is(ES.ToInt8(0x10000 - 1), -1), '2^16 - 1 returns -1');
\tt.ok(is(ES.ToInt8(0x100), 0), '2^8 returns +0');
\tt.ok(is(ES.ToInt8(0x100 - 1), -1), '2^8 - 1 returns -1');
\tt.ok(is(ES.ToInt8(0x10), 0x10), '2^4 returns 2^4');
\tt.end();
});

test('ToUint8', function (t) {
\tt.ok(is(0, ES.ToUint8(NaN)), 'NaN coerces to +0');
\tforEach([0, Infinity], function (num) {
\t\tt.ok(is(0, ES.ToUint8(num)), num + ' returns +0');
\t\tt.ok(is(0, ES.ToUint8(-num)), '-' + num + ' returns +0');
\t});
\tt['throws'](function () { return ES.ToUint8(v.uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\tt.ok(is(ES.ToUint8(0x100000000), 0), '2^32 returns +0');
\tt.ok(is(ES.ToUint8(0x100000000 - 1), 0x100 - 1), '2^32 - 1 returns 2^8 - 1');
\tt.ok(is(ES.ToUint8(0x80000000), 0), '2^31 returns +0');
\tt.ok(is(ES.ToUint8(0x80000000 - 1), 0x100 - 1), '2^31 - 1 returns 2^8 - 1');
\tt.ok(is(ES.ToUint8(0x10000), 0), '2^16 returns +0');
\tt.ok(is(ES.ToUint8(0x10000 - 1), 0x100 - 1), '2^16 - 1 returns 2^8 - 1');
\tt.ok(is(ES.ToUint8(0x100), 0), '2^8 returns +0');
\tt.ok(is(ES.ToUint8(0x100 - 1), 0x100 - 1), '2^8 - 1 returns 2^16 - 1');
\tt.ok(is(ES.ToUint8(0x10), 0x10), '2^4 returns 2^4');
\tt.ok(is(ES.ToUint8(0x10 - 1), 0x10 - 1), '2^4 - 1 returns 2^4 - 1');
\tt.end();
});

test('ToUint8Clamp', function (t) {
\tt.ok(is(0, ES.ToUint8Clamp(NaN)), 'NaN coerces to +0');
\tt.ok(is(0, ES.ToUint8Clamp(0)), '+0 returns +0');
\tt.ok(is(0, ES.ToUint8Clamp(-0)), '-0 returns +0');
\tt.ok(is(0, ES.ToUint8Clamp(-Infinity)), '-Infinity returns +0');
\tt['throws'](function () { return ES.ToUint8Clamp(v.uncoercibleObject); }, TypeError, 'uncoercibleObject throws');
\tforEach([255, 256, 0x100000, Infinity], function (number) {
\t\tt.ok(is(255, ES.ToUint8Clamp(number)), number + ' coerces to 255');
\t});
\tt.equal(1, ES.ToUint8Clamp(1.49), '1.49 coerces to 1');
\tt.equal(2, ES.ToUint8Clamp(1.5), '1.5 coerces to 2, because 2 is even');
\tt.equal(2, ES.ToUint8Clamp(1.51), '1.51 coerces to 2');

\tt.equal(2, ES.ToUint8Clamp(2.49), '2.49 coerces to 2');
\tt.equal(2, ES.ToUint8Clamp(2.5), '2.5 coerces to 2, because 2 is even');
\tt.equal(3, ES.ToUint8Clamp(2.51), '2.51 coerces to 3');
\tt.end();
});

test('ToString', function (t) {
\tforEach(v.objects.concat(v.nonSymbolPrimitives), function (item) {
\t\tt.equal(ES.ToString(item), String(item), 'ES.ToString(' + debug(item) + ') ToStrings to String(' + debug(item) + ')');
\t});

\tt['throws'](function () { return ES.ToString(v.uncoercibleObject); }, TypeError, 'uncoercibleObject throws');

\tforEach(v.symbols, function (symbol) {
\t\tt['throws'](function () { return ES.ToString(symbol); }, TypeError, debug(symbol) + ' throws');
\t});
\tt.end();
});

test('ToObject', function (t) {
\tt['throws'](function () { return ES.ToObject(undefined); }, TypeError, 'undefined throws');
\tt['throws'](function () { return ES.ToObject(null); }, TypeError, 'null throws');
\tforEach(v.numbers, function (number) {
\t\tvar obj = ES.ToObject(number);
\t\tt.equal(typeof obj, 'object', 'number ' + number + ' coerces to object');
\t\tt.equal(true, obj instanceof Number, 'object of ' + number + ' is Number object');
\t\tt.ok(is(obj.valueOf(), number), 'object of ' + number + ' coerces to ' + number);
\t});
\tt.end();
});

test('RequireObjectCoercible', function (t) {
\tt.equal(false, 'CheckObjectCoercible' in ES, 'CheckObjectCoercible -> RequireObjectCoercible in ES6');
\tt['throws'](function () { return ES.RequireObjectCoercible(undefined); }, TypeError, 'undefined throws');
\tt['throws'](function () { return ES.RequireObjectCoercible(null); }, TypeError, 'null throws');
\tvar isCoercible = function (value) {
\t\tt.doesNotThrow(function () { return ES.RequireObjectCoercible(value); }, debug(value) + ' does not throw');
\t};
\tforEach(v.objects.concat(v.nonNullPrimitives), isCoercible);
\tt.end();
});

test('IsCallable', function (t) {
\tt.equal(true, ES.IsCallable(function () {}), 'function is callable');
\tvar nonCallables = [/a/g, {}, Object.prototype, NaN].concat(v.primitives);
\tforEach(nonCallables, function (nonCallable) {
\t\tt.equal(false, ES.IsCallable(nonCallable), debug(nonCallable) + ' is not callable');
\t});
\tt.end();
});

test('SameValue', function (t) {
\tt.equal(true, ES.SameValue(NaN, NaN), 'NaN is SameValue as NaN');
\tt.equal(false, ES.SameValue(0, -0), '+0 is not SameValue as -0');
\tforEach(v.objects.concat(v.primitives), function (val) {
\t\tt.equal(val === val, ES.SameValue(val, val), debug(val) + ' is SameValue to itself');
\t});
\tt.end();
});

test('SameValueZero', function (t) {
\tt.equal(true, ES.SameValueZero(NaN, NaN), 'NaN is SameValueZero as NaN');
\tt.equal(true, ES.SameValueZero(0, -0), '+0 is SameValueZero as -0');
\tforEach(v.objects.concat(v.primitives), function (val) {
\t\tt.equal(val === val, ES.SameValueZero(val, val), debug(val) + ' is SameValueZero to itself');
\t});
\tt.end();
});

test('ToPropertyKey', function (t) {
\tforEach(v.objects.concat(v.nonSymbolPrimitives), function (value) {
\t\tt.equal(ES.ToPropertyKey(value), String(value), 'ToPropertyKey(value) === String(value) for non-Symbols');
\t});

\tforEach(v.symbols, function (symbol) {
\t\tt.equal(
\t\t\tES.ToPropertyKey(symbol),
\t\t\tsymbol,
\t\t\t'ToPropertyKey(' + debug(symbol) + ') === ' + debug(symbol)
\t\t);
\t\tt.equal(
\t\t\tES.ToPropertyKey(Object(symbol)),
\t\t\tsymbol,
\t\t\t'ToPropertyKey(' + debug(Object(symbol)) + ') === ' + debug(symbol)
\t\t);
\t});

\tt.end();
});

test('ToLength', function (t) {
\tt['throws'](function () { return ES.ToLength(v.uncoercibleObject); }, TypeError, 'uncoercibleObject throws a TypeError');
\tt.equal(3, ES.ToLength(v.coercibleObject), 'coercibleObject coerces to 3');
\tt.equal(42, ES.ToLength('42.5'), '\"42.5\" coerces to 42');
\tt.equal(7, ES.ToLength(7.3), '7.3 coerces to 7');
\tforEach([-0, -1, -42, -Infinity], function (negative) {
\t\tt.ok(is(0, ES.ToLength(negative)), negative + ' coerces to +0');
\t});
\tt.equal(MAX_SAFE_INTEGER, ES.ToLength(MAX_SAFE_INTEGER + 1), '2^53 coerces to 2^53 - 1');
\tt.equal(MAX_SAFE_INTEGER, ES.ToLength(MAX_SAFE_INTEGER + 3), '2^53 + 2 coerces to 2^53 - 1');
\tt.end();
});

test('IsArray', function (t) {
\tt.equal(true, ES.IsArray([]), '[] is array');
\tt.equal(false, ES.IsArray({}), '{} is not array');
\tt.equal(false, ES.IsArray({ length: 1, 0: true }), 'arraylike object is not array');
\tforEach(v.objects.concat(v.primitives), function (value) {
\t\tt.equal(false, ES.IsArray(value), debug(value) + ' is not array');
\t});
\tt.end();
});

test('IsRegExp', function (t) {
\tforEach([/a/g, new RegExp('a', 'g')], function (regex) {
\t\tt.equal(true, ES.IsRegExp(regex), regex + ' is regex');
\t});

\tforEach(v.objects.concat(v.primitives), function (nonRegex) {
\t\tt.equal(false, ES.IsRegExp(nonRegex), debug(nonRegex) + ' is not regex');
\t});

\tt.test('Symbol.match', { skip: !v.hasSymbols || !Symbol.match }, function (st) {
\t\tvar obj = {};
\t\tobj[Symbol.match] = true;
\t\tst.equal(true, ES.IsRegExp(obj), 'object with truthy Symbol.match is regex');

\t\tvar regex = /a/;
\t\tregex[Symbol.match] = false;
\t\tst.equal(false, ES.IsRegExp(regex), 'regex with falsy Symbol.match is not regex');

\t\tst.end();
\t});

\tt.end();
});

test('IsPropertyKey', function (t) {
\tforEach(v.numbers.concat(v.objects), function (notKey) {
\t\tt.equal(false, ES.IsPropertyKey(notKey), debug(notKey) + ' is not property key');
\t});

\tt.equal(true, ES.IsPropertyKey('foo'), 'string is property key');

\tforEach(v.symbols, function (symbol) {
\t\tt.equal(true, ES.IsPropertyKey(symbol), debug(symbol) + ' is property key');
\t});
\tt.end();
});

test('IsInteger', function (t) {
\tfor (var i = -100; i < 100; i += 10) {
\t\tt.equal(true, ES.IsInteger(i), i + ' is integer');
\t\tt.equal(false, ES.IsInteger(i + 0.2), (i + 0.2) + ' is not integer');
\t}
\tt.equal(true, ES.IsInteger(-0), '-0 is integer');
\tvar notInts = v.objects.concat([Infinity, -Infinity, NaN, true, false, null, undefined, [], new Date()], v.symbols);
\tforEach(notInts, function (notInt) {
\t\tt.equal(false, ES.IsInteger(notInt), debug(notInt) + ' is not integer');
\t});
\tt.equal(false, ES.IsInteger(v.uncoercibleObject), 'uncoercibleObject is not integer');
\tt.end();
});

test('IsExtensible', function (t) {
\tforEach(v.objects, function (object) {
\t\tt.equal(true, ES.IsExtensible(object), debug(object) + ' object is extensible');
\t});
\tforEach(v.primitives, function (primitive) {
\t\tt.equal(false, ES.IsExtensible(primitive), debug(primitive) + ' is not extensible');
\t});
\tif (Object.preventExtensions) {
\t\tt.equal(false, ES.IsExtensible(Object.preventExtensions({})), 'object with extensions prevented is not extensible');
\t}
\tt.end();
});

test('CanonicalNumericIndexString', function (t) {
\tvar throwsOnNonString = function (notString) {
\t\tt['throws'](
\t\t\tfunction () { return ES.CanonicalNumericIndexString(notString); },
\t\t\tTypeError,
\t\t\tdebug(notString) + ' is not a string'
\t\t);
\t};
\tforEach(v.objects.concat(v.numbers), throwsOnNonString);
\tt.ok(is(-0, ES.CanonicalNumericIndexString('-0')), '\"-0\" returns -0');
\tfor (var i = -50; i < 50; i += 10) {
\t\tt.equal(i, ES.CanonicalNumericIndexString(String(i)), '\"' + i + '\" returns ' + i);
\t\tt.equal(undefined, ES.CanonicalNumericIndexString(String(i) + 'a'), '\"' + i + 'a\" returns undefined');
\t}
\tt.end();
});

test('IsConstructor', function (t) {
\tt.equal(true, ES.IsConstructor(function () {}), 'function is constructor');
\tt.equal(false, ES.IsConstructor(/a/g), 'regex is not constructor');
\tforEach(v.objects, function (object) {
\t\tt.equal(false, ES.IsConstructor(object), object + ' object is not constructor');
\t});

\ttry {
\t\tvar foo = Function('return class Foo {}')(); // eslint-disable-line no-new-func
\t\tt.equal(ES.IsConstructor(foo), true, 'class is constructor');
\t} catch (e) {
\t\tt.comment('SKIP: class syntax not supported.');
\t}
\tt.end();
});

test('Call', function (t) {
\tvar receiver = {};
\tvar notFuncs = v.objects.concat(v.primitives).concat([/a/g, new RegExp('a', 'g')]);
\tt.plan(notFuncs.length + 4);
\tvar throwsIfNotCallable = function (notFunc) {
\t\tt['throws'](
\t\t\tfunction () { return ES.Call(notFunc, receiver); },
\t\t\tTypeError,
\t\t\tdebug(notFunc) + ' (' + typeof notFunc + ') is not callable'
\t\t);
\t};
\tforEach(notFuncs, throwsIfNotCallable);
\tES.Call(function (a, b) {
\t\tt.equal(this, receiver, 'context matches expected');
\t\tt.deepEqual([a, b], [1, 2], 'named args are correct');
\t\tt.equal(arguments.length, 3, 'extra argument was passed');
\t\tt.equal(arguments[2], 3, 'extra argument was correct');
\t}, receiver, [1, 2, 3]);
\tt.end();
});

test('GetV', function (t) {
\tt['throws'](function () { return ES.GetV({ 7: 7 }, 7); }, TypeError, 'Throws a TypeError if `P` is not a property key');
\tvar obj = { a: function () {} };
\tt.equal(ES.GetV(obj, 'a'), obj.a, 'returns property if it exists');
\tt.equal(ES.GetV(obj, 'b'), undefined, 'returns undefiend if property does not exist');
\tt.end();
});

test('GetMethod', function (t) {
\tt['throws'](function () { return ES.GetMethod({ 7: 7 }, 7); }, TypeError, 'Throws a TypeError if `P` is not a property key');
\tt.equal(ES.GetMethod({}, 'a'), undefined, 'returns undefined in property is undefined');
\tt.equal(ES.GetMethod({ a: null }, 'a'), undefined, 'returns undefined if property is null');
\tt.equal(ES.GetMethod({ a: undefined }, 'a'), undefined, 'returns undefined if property is undefined');
\tvar obj = { a: function () {} };
\tt['throws'](function () { ES.GetMethod({ a: 'b' }, 'a'); }, TypeError, 'throws TypeError if property exists and is not callable');
\tt.equal(ES.GetMethod(obj, 'a'), obj.a, 'returns property if it is callable');
\tt.end();
});

test('Get', function (t) {
\tt['throws'](function () { return ES.Get('a', 'a'); }, TypeError, 'Throws a TypeError if `O` is not an Object');
\tt['throws'](function () { return ES.Get({ 7: 7 }, 7); }, TypeError, 'Throws a TypeError if `P` is not a property key');

\tvar value = {};
\tt.test('Symbols', { skip: !v.hasSymbols }, function (st) {
\t\tvar sym = Symbol('sym');
\t\tvar obj = {};
\t\tobj[sym] = value;
\t\tst.equal(ES.Get(obj, sym), value, 'returns property `P` if it exists on object `O`');
\t\tst.end();
\t});
\tt.equal(ES.Get({ a: value }, 'a'), value, 'returns property `P` if it exists on object `O`');
\tt.end();
});

test('Type', { skip: !v.hasSymbols }, function (t) {
\tt.equal(ES.Type(Symbol.iterator), 'Symbol', 'Type(Symbol.iterator) is Symbol');
\tt.end();
});

test('SpeciesConstructor', function (t) {
\tt['throws'](function () { ES.SpeciesConstructor(null); }, TypeError);
\tt['throws'](function () { ES.SpeciesConstructor(undefined); }, TypeError);

\tvar defaultConstructor = function Foo() {};

\tt.equal(
\t\tES.SpeciesConstructor({ constructor: undefined }, defaultConstructor),
\t\tdefaultConstructor,
\t\t'undefined constructor returns defaultConstructor'
\t);

\tt['throws'](
\t\tfunction () { return ES.SpeciesConstructor({ constructor: null }, defaultConstructor); },
\t\tTypeError,
\t\t'non-undefined non-object constructor throws'
\t);

\tvar Bar = function Bar() {};
\tvar hasSpecies = v.hasSymbols && Symbol.species;
\tif (hasSpecies) {
\t\tBar[Symbol.species] = null;
\t}
\tt.equal(
\t\tES.SpeciesConstructor(new Bar(), defaultConstructor),
\t\tdefaultConstructor,
\t\t'undefined/null Symbol.species returns default constructor'
\t);

\tt.test('with Symbol.species', { skip: !hasSpecies }, function (st) {
\t\tvar Baz = function Baz() {};
\t\tBaz[Symbol.species] = Bar;
\t\tst.equal(
\t\t\tES.SpeciesConstructor(new Baz(), defaultConstructor),
\t\t\tBar,
\t\t\t'returns Symbol.species constructor value'
\t\t);

\t\tBaz[Symbol.species] = {};
\t\tst['throws'](
\t\t\tfunction () { ES.SpeciesConstructor(new Baz(), defaultConstructor); },
\t\t\tTypeError,
\t\t\t'throws when non-constructor non-null non-undefined species value found'
\t\t);

\t\tst.end();
\t});
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
\t\t'[[Writable]]': false
\t};
};
var genericDescriptor = function () {
\treturn {
\t\t'[[Configurable]]': true,
\t\t'[[Enumerable]]': false
\t};
};

test('IsPropertyDescriptor', function (t) {
\tforEach(v.nonUndefinedPrimitives, function (primitive) {
\t\tt.equal(
\t\t\tES.IsPropertyDescriptor(primitive),
\t\t\tfalse,
\t\t\tdebug(primitive) + ' is not a Property Descriptor'
\t\t);
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
\tforEach(v.nonUndefinedPrimitives, function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.IsAccessorDescriptor(primitive); },
\t\t\tTypeError,
\t\t\tdebug(primitive) + ' is not a Property Descriptor'
\t\t);
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
\tforEach(v.nonUndefinedPrimitives, function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.IsDataDescriptor(primitive); },
\t\t\tTypeError,
\t\t\tdebug(primitive) + ' is not a Property Descriptor'
\t\t);
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
\tforEach(v.nonUndefinedPrimitives, function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.IsGenericDescriptor(primitive); },
\t\t\tTypeError,
\t\t\tdebug(primitive) + ' is not a Property Descriptor'
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

\tforEach(v.nonUndefinedPrimitives, function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.FromPropertyDescriptor(primitive); },
\t\t\tTypeError,
\t\t\tdebug(primitive) + ' is not a Property Descriptor'
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
\tforEach(v.nonUndefinedPrimitives, function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.ToPropertyDescriptor(primitive); },
\t\t\tTypeError,
\t\t\tdebug(primitive) + ' is not an Object'
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
\t}), assign(data, { '[[Configurable]]': false }));

\tvar both = bothDescriptor();
\tt['throws'](
\t\tfunction () {
\t\t\tES.FromPropertyDescriptor({ get: both['[[Get]]'], value: both['[[Value]]'] });
\t\t},
\t\tTypeError,
\t\t'data and accessor descriptors are mutually exclusive'
\t);

\tt.end();
});

test('CompletePropertyDescriptor', function (t) {
\tforEach(v.nonUndefinedPrimitives, function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.CompletePropertyDescriptor(primitive); },
\t\t\tTypeError,
\t\t\tdebug(primitive) + ' is not a Property Descriptor'
\t\t);
\t});

\tvar generic = genericDescriptor();
\tt.deepEqual(ES.CompletePropertyDescriptor(generic), {
\t\t'[[Configurable]]': !!generic['[[Configurable]]'],
\t\t'[[Enumerable]]': !!generic['[[Enumerable]]'],
\t\t'[[Value]]': undefined,
\t\t'[[Writable]]': false
\t}, 'completes a Generic Descriptor');

\tvar data = dataDescriptor();
\tt.deepEqual(ES.CompletePropertyDescriptor(data), {
\t\t'[[Configurable]]': !!data['[[Configurable]]'],
\t\t'[[Enumerable]]': false,
\t\t'[[Value]]': data['[[Value]]'],
\t\t'[[Writable]]': !!data['[[Writable]]']
\t}, 'completes a Data Descriptor');

\tvar accessor = accessorDescriptor();
\tt.deepEqual(ES.CompletePropertyDescriptor(accessor), {
\t\t'[[Get]]': accessor['[[Get]]'],
\t\t'[[Enumerable]]': !!accessor['[[Enumerable]]'],
\t\t'[[Configurable]]': !!accessor['[[Configurable]]'],
\t\t'[[Set]]': undefined
\t}, 'completes an Accessor Descriptor');

\tvar mutator = mutatorDescriptor();
\tt.deepEqual(ES.CompletePropertyDescriptor(mutator), {
\t\t'[[Set]]': mutator['[[Set]]'],
\t\t'[[Enumerable]]': !!mutator['[[Enumerable]]'],
\t\t'[[Configurable]]': !!mutator['[[Configurable]]'],
\t\t'[[Get]]': undefined
\t}, 'completes a mutator Descriptor');

\tt['throws'](
\t\tfunction () { ES.CompletePropertyDescriptor(bothDescriptor()); },
\t\tTypeError,
\t\t'data and accessor descriptors are mutually exclusive'
\t);

\tt.end();
});

test('Set', function (t) {
\tforEach(v.primitives, function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.Set(primitive, '', null, false); },
\t\t\tTypeError,
\t\t\tdebug(primitive) + ' is not an Object'
\t\t);
\t});

\tforEach(v.nonPropertyKeys, function (nonKey) {
\t\tt['throws'](
\t\t\tfunction () { ES.Set({}, nonKey, null, false); },
\t\t\tTypeError,
\t\t\tdebug(nonKey) + ' is not a Property Key'
\t\t);
\t});

\tforEach(v.nonBooleans, function (nonBoolean) {
\t\tt['throws'](
\t\t\tfunction () { ES.Set({}, '', null, nonBoolean); },
\t\t\tTypeError,
\t\t\tdebug(nonBoolean) + ' is not a Boolean'
\t\t);
\t});

\tvar o = {};
\tvar value = {};
\tES.Set(o, 'key', value, true);
\tt.deepEqual(o, { key: value }, 'key is set');

\tt.test('nonwritable', { skip: !Object.defineProperty }, function (st) {
\t\tvar obj = { a: value };
\t\tObject.defineProperty(obj, 'a', { writable: false });

\t\tst['throws'](
\t\t\tfunction () { ES.Set(obj, 'a', value, true); },
\t\t\tTypeError,
\t\t\t'can not Set nonwritable property'
\t\t);

\t\tst.doesNotThrow(
\t\t\tfunction () { ES.Set(obj, 'a', value, false); },
\t\t\t'setting Throw to false prevents an exception'
\t\t);

\t\tst.end();
\t});

\tt.end();
});

test('HasOwnProperty', function (t) {
\tforEach(v.primitives, function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.HasOwnProperty(primitive, 'key'); },
\t\t\tTypeError,
\t\t\tdebug(primitive) + ' is not an Object'
\t\t);
\t});

\tforEach(v.nonPropertyKeys, function (nonKey) {
\t\tt['throws'](
\t\t\tfunction () { ES.HasOwnProperty({}, nonKey); },
\t\t\tTypeError,
\t\t\tdebug(nonKey) + ' is not a Property Key'
\t\t);
\t});

\tt.equal(ES.HasOwnProperty({}, 'toString'), false, 'inherited properties are not own');
\tt.equal(
\t\tES.HasOwnProperty({ toString: 1 }, 'toString'),
\t\ttrue,
\t\t'shadowed inherited own properties are own'
\t);
\tt.equal(ES.HasOwnProperty({ a: 1 }, 'a'), true, 'own properties are own');

\tt.end();
});

test('HasProperty', function (t) {
\tforEach(v.primitives, function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.HasProperty(primitive, 'key'); },
\t\t\tTypeError,
\t\t\tdebug(primitive) + ' is not an Object'
\t\t);
\t});

\tforEach(v.nonPropertyKeys, function (nonKey) {
\t\tt['throws'](
\t\t\tfunction () { ES.HasProperty({}, nonKey); },
\t\t\tTypeError,
\t\t\tdebug(nonKey) + ' is not a Property Key'
\t\t);
\t});

\tt.equal(ES.HasProperty({}, 'nope'), false, 'object does not have nonexistent properties');
\tt.equal(ES.HasProperty({}, 'toString'), true, 'object has inherited properties');
\tt.equal(
\t\tES.HasProperty({ toString: 1 }, 'toString'),
\t\ttrue,
\t\t'object has shadowed inherited own properties'
\t);
\tt.equal(ES.HasProperty({ a: 1 }, 'a'), true, 'object has own properties');

\tt.end();
});

test('IsConcatSpreadable', function (t) {
\tforEach(v.primitives, function (primitive) {
\t\tt.equal(ES.IsConcatSpreadable(primitive), false, debug(primitive) + ' is not an Object');
\t});

\tvar hasSymbolConcatSpreadable = v.hasSymbols && Symbol.isConcatSpreadable;
\tt.test('Symbol.isConcatSpreadable', { skip: !hasSymbolConcatSpreadable }, function (st) {
\t\tforEach(v.falsies, function (falsy) {
\t\t\tvar obj = {};
\t\t\tobj[Symbol.isConcatSpreadable] = falsy;
\t\t\tst.equal(
\t\t\t\tES.IsConcatSpreadable(obj),
\t\t\t\tfalse,
\t\t\t\t'an object with ' + debug(falsy) + ' as Symbol.isConcatSpreadable is not concat spreadable'
\t\t\t);
\t\t});

\t\tforEach(v.truthies, function (truthy) {
\t\t\tvar obj = {};
\t\t\tobj[Symbol.isConcatSpreadable] = truthy;
\t\t\tst.equal(
\t\t\t\tES.IsConcatSpreadable(obj),
\t\t\t\ttrue,
\t\t\t\t'an object with ' + debug(truthy) + ' as Symbol.isConcatSpreadable is concat spreadable'
\t\t\t);
\t\t});

\t\tst.end();
\t});

\tforEach(v.objects, function (object) {
\t\tt.equal(
\t\t\tES.IsConcatSpreadable(object),
\t\t\tfalse,
\t\t\t'non-array without Symbol.isConcatSpreadable is not concat spreadable'
\t\t);
\t});

\tt.equal(ES.IsConcatSpreadable([]), true, 'arrays are concat spreadable');

\tt.end();
});

test('Invoke', function (t) {
\tforEach(v.nonPropertyKeys, function (nonKey) {
\t\tt['throws'](
\t\t\tfunction () { ES.Invoke({}, nonKey); },
\t\t\tTypeError,
\t\t\tdebug(nonKey) + ' is not a Property Key'
\t\t);
\t});

\tt['throws'](function () { ES.Invoke({ o: false }, 'o'); }, TypeError, 'fails on a non-function');

\tt.test('invoked callback', function (st) {
\t\tvar aValue = {};
\t\tvar bValue = {};
\t\tvar obj = {
\t\t\tf: function (a) {
\t\t\t\tst.equal(arguments.length, 2, '2 args passed');
\t\t\t\tst.equal(a, aValue, 'first arg is correct');
\t\t\t\tst.equal(arguments[1], bValue, 'second arg is correct');
\t\t\t}
\t\t};
\t\tst.plan(3);
\t\tES.Invoke(obj, 'f', aValue, bValue);
\t});

\tt.end();
});

test('CreateIterResultObject', function (t) {
\tforEach(v.nonBooleans, function (nonBoolean) {
\t\tt['throws'](
\t\t\tfunction () { ES.CreateIterResultObject({}, nonBoolean); },
\t\t\tTypeError,
\t\t\t'\"done\" argument must be a boolean; ' + debug(nonBoolean) + ' is not'
\t\t);
\t});

\tvar value = {};
\tt.deepEqual(ES.CreateIterResultObject(value, true), {
\t\tvalue: value,
\t\tdone: true
\t}, 'creates a \"done\" iteration result');
\tt.deepEqual(ES.CreateIterResultObject(value, false), {
\t\tvalue: value,
\t\tdone: false
\t}, 'creates a \"not done\" iteration result');

\tt.end();
});

test('RegExpExec', function (t) {
\tforEach(v.primitives, function (primitive) {
\t\tt['throws'](
\t\t\tfunction () { ES.RegExpExec(primitive); },
\t\t\tTypeError,
\t\t\t'\"R\" argument must be an object; ' + debug(primitive) + ' is not'
\t\t);
\t});

\tforEach(v.nonStrings, function (nonString) {
\t\tt['throws'](
\t\t\tfunction () { ES.RegExpExec({}, nonString); },
\t\t\tTypeError,
\t\t\t'\"S\" argument must be a String; ' + debug(nonString) + ' is not'
\t\t);
\t});

\tt.test('gets and calls a callable \"exec\"', function (st) {
\t\tvar str = '123';
\t\tvar o = {
\t\t\texec: function (S) {
\t\t\t\tst.equal(this, o, '\"exec\" receiver is R');
\t\t\t\tst.equal(S, str, '\"exec\" argument is S');

\t\t\t\treturn null;
\t\t\t}
\t\t};
\t\tst.plan(2);
\t\tES.RegExpExec(o, str);
\t\tst.end();
\t});

\tt.test('throws if a callable \"exec\" returns a non-null non-object', function (st) {
\t\tvar str = '123';
\t\tst.plan(v.nonNullPrimitives.length);
\t\tforEach(v.nonNullPrimitives, function (nonNullPrimitive) {
\t\t\tst['throws'](
\t\t\t\tfunction () { ES.RegExpExec({ exec: function () { return nonNullPrimitive; } }, str); },
\t\t\t\tTypeError,
\t\t\t\t'\"exec\" method must return `null` or an Object; ' + debug(nonNullPrimitive) + ' is not'
\t\t\t);
\t\t});
\t\tst.end();
\t});

\tt.test('actual regex that should match against a string', function (st) {
\t\tvar S = 'aabc';
\t\tvar R = /a/g;
\t\tvar match1 = ES.RegExpExec(R, S);
\t\tvar match2 = ES.RegExpExec(R, S);
\t\tvar match3 = ES.RegExpExec(R, S);
\t\tst.deepEqual(match1, assign(['a'], { index: 0, input: S }), 'match object 1 is as expected');
\t\tst.deepEqual(match2, assign(['a'], { index: 1, input: S }), 'match object 2 is as expected');
\t\tst.equal(match3, null, 'match 3 is null as expected');
\t\tst.end();
\t});

\tt.test('actual regex that should match against a string, with shadowed \"exec\"', function (st) {
\t\tvar S = 'aabc';
\t\tvar R = /a/g;
\t\tR.exec = undefined;
\t\tvar match1 = ES.RegExpExec(R, S);
\t\tvar match2 = ES.RegExpExec(R, S);
\t\tvar match3 = ES.RegExpExec(R, S);
\t\tst.deepEqual(match1, assign(['a'], { index: 0, input: S }), 'match object 1 is as expected');
\t\tst.deepEqual(match2, assign(['a'], { index: 1, input: S }), 'match object 2 is as expected');
\t\tst.equal(match3, null, 'match 3 is null as expected');
\t\tst.end();
\t});
\tt.end();
});
", "node_modules/es-abstract/test/es2015.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-abstract/test/es2015.js");
    }
}
