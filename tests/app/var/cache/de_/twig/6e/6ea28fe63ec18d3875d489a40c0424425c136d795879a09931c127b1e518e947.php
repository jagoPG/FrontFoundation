<?php

/* node_modules/es-abstract/es2015.js */
class __TwigTemplate_d891ec2b112d698c91d8edcc552e0b09a5f92bc4ef04c8ce69b0421f3560be0a extends Twig_Template
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
        $__internal_6602168bca8e5b4e388514b9ad1f34f377ff002b6bfa061404374b78e252790e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6602168bca8e5b4e388514b9ad1f34f377ff002b6bfa061404374b78e252790e->enter($__internal_6602168bca8e5b4e388514b9ad1f34f377ff002b6bfa061404374b78e252790e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-abstract/es2015.js"));

        // line 1
        echo "'use strict';

var has = require('has');

var toStr = Object.prototype.toString;
var hasSymbols = typeof Symbol === 'function' && typeof Symbol.iterator === 'symbol';

var \$isNaN = require('./helpers/isNaN');
var \$isFinite = require('./helpers/isFinite');
var MAX_SAFE_INTEGER = Number.MAX_SAFE_INTEGER || Math.pow(2, 53) - 1;

var assign = require('./helpers/assign');
var sign = require('./helpers/sign');
var mod = require('./helpers/mod');
var isPrimitive = require('./helpers/isPrimitive');
var toPrimitive = require('es-to-primitive/es6');
var parseInteger = parseInt;
var bind = require('function-bind');
var arraySlice = bind.call(Function.call, Array.prototype.slice);
var strSlice = bind.call(Function.call, String.prototype.slice);
var isBinary = bind.call(Function.call, RegExp.prototype.test, /^0b[01]+\$/i);
var isOctal = bind.call(Function.call, RegExp.prototype.test, /^0o[0-7]+\$/i);
var regexExec = bind.call(Function.call, RegExp.prototype.exec);
var nonWS = ['\\u0085', '\\u200b', '\\ufffe'].join('');
var nonWSregex = new RegExp('[' + nonWS + ']', 'g');
var hasNonWS = bind.call(Function.call, RegExp.prototype.test, nonWSregex);
var invalidHexLiteral = /^[-+]0x[0-9a-f]+\$/i;
var isInvalidHexLiteral = bind.call(Function.call, RegExp.prototype.test, invalidHexLiteral);

// whitespace from: http://es5.github.io/#x15.5.4.20
// implementation from https://github.com/es-shims/es5-shim/blob/v3.4.0/es5-shim.js#L1304-L1324
var ws = [
\t'\\x09\\x0A\\x0B\\x0C\\x0D\\x20\\xA0\\u1680\\u180E\\u2000\\u2001\\u2002\\u2003',
\t'\\u2004\\u2005\\u2006\\u2007\\u2008\\u2009\\u200A\\u202F\\u205F\\u3000\\u2028',
\t'\\u2029\\uFEFF'
].join('');
var trimRegex = new RegExp('(^[' + ws + ']+)|([' + ws + ']+\$)', 'g');
var replace = bind.call(Function.call, String.prototype.replace);
var trim = function (value) {
\treturn replace(value, trimRegex, '');
};

var ES5 = require('./es5');

var hasRegExpMatcher = require('is-regex');

// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-abstract-operations
var ES6 = assign(assign({}, ES5), {

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-call-f-v-args
\tCall: function Call(F, V) {
\t\tvar args = arguments.length > 2 ? arguments[2] : [];
\t\tif (!this.IsCallable(F)) {
\t\t\tthrow new TypeError(F + ' is not a function');
\t\t}
\t\treturn F.apply(V, args);
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-toprimitive
\tToPrimitive: toPrimitive,

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-toboolean
\t// ToBoolean: ES5.ToBoolean,

\t// http://www.ecma-international.org/ecma-262/6.0/#sec-tonumber
\tToNumber: function ToNumber(argument) {
\t\tvar value = isPrimitive(argument) ? argument : toPrimitive(argument, Number);
\t\tif (typeof value === 'symbol') {
\t\t\tthrow new TypeError('Cannot convert a Symbol value to a number');
\t\t}
\t\tif (typeof value === 'string') {
\t\t\tif (isBinary(value)) {
\t\t\t\treturn this.ToNumber(parseInteger(strSlice(value, 2), 2));
\t\t\t} else if (isOctal(value)) {
\t\t\t\treturn this.ToNumber(parseInteger(strSlice(value, 2), 8));
\t\t\t} else if (hasNonWS(value) || isInvalidHexLiteral(value)) {
\t\t\t\treturn NaN;
\t\t\t} else {
\t\t\t\tvar trimmed = trim(value);
\t\t\t\tif (trimmed !== value) {
\t\t\t\t\treturn this.ToNumber(trimmed);
\t\t\t\t}
\t\t\t}
\t\t}
\t\treturn Number(value);
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-tointeger
\t// ToInteger: ES5.ToNumber,

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-toint32
\t// ToInt32: ES5.ToInt32,

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-touint32
\t// ToUint32: ES5.ToUint32,

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-toint16
\tToInt16: function ToInt16(argument) {
\t\tvar int16bit = this.ToUint16(argument);
\t\treturn int16bit >= 0x8000 ? int16bit - 0x10000 : int16bit;
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-touint16
\t// ToUint16: ES5.ToUint16,

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-toint8
\tToInt8: function ToInt8(argument) {
\t\tvar int8bit = this.ToUint8(argument);
\t\treturn int8bit >= 0x80 ? int8bit - 0x100 : int8bit;
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-touint8
\tToUint8: function ToUint8(argument) {
\t\tvar number = this.ToNumber(argument);
\t\tif (\$isNaN(number) || number === 0 || !\$isFinite(number)) { return 0; }
\t\tvar posInt = sign(number) * Math.floor(Math.abs(number));
\t\treturn mod(posInt, 0x100);
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-touint8clamp
\tToUint8Clamp: function ToUint8Clamp(argument) {
\t\tvar number = this.ToNumber(argument);
\t\tif (\$isNaN(number) || number <= 0) { return 0; }
\t\tif (number >= 0xFF) { return 0xFF; }
\t\tvar f = Math.floor(argument);
\t\tif (f + 0.5 < number) { return f + 1; }
\t\tif (number < f + 0.5) { return f; }
\t\tif (f % 2 !== 0) { return f + 1; }
\t\treturn f;
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-tostring
\tToString: function ToString(argument) {
\t\tif (typeof argument === 'symbol') {
\t\t\tthrow new TypeError('Cannot convert a Symbol value to a string');
\t\t}
\t\treturn String(argument);
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-toobject
\tToObject: function ToObject(value) {
\t\tthis.RequireObjectCoercible(value);
\t\treturn Object(value);
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-topropertykey
\tToPropertyKey: function ToPropertyKey(argument) {
\t\tvar key = this.ToPrimitive(argument, String);
\t\treturn typeof key === 'symbol' ? key : this.ToString(key);
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-tolength
\tToLength: function ToLength(argument) {
\t\tvar len = this.ToInteger(argument);
\t\tif (len <= 0) { return 0; } // includes converting -0 to +0
\t\tif (len > MAX_SAFE_INTEGER) { return MAX_SAFE_INTEGER; }
\t\treturn len;
\t},

\t// http://www.ecma-international.org/ecma-262/6.0/#sec-canonicalnumericindexstring
\tCanonicalNumericIndexString: function CanonicalNumericIndexString(argument) {
\t\tif (toStr.call(argument) !== '[object String]') {
\t\t\tthrow new TypeError('must be a string');
\t\t}
\t\tif (argument === '-0') { return -0; }
\t\tvar n = this.ToNumber(argument);
\t\tif (this.SameValue(this.ToString(n), argument)) { return n; }
\t\treturn void 0;
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-requireobjectcoercible
\tRequireObjectCoercible: ES5.CheckObjectCoercible,

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-isarray
\tIsArray: Array.isArray || function IsArray(argument) {
\t\treturn toStr.call(argument) === '[object Array]';
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-iscallable
\t// IsCallable: ES5.IsCallable,

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-isconstructor
\tIsConstructor: function IsConstructor(argument) {
\t\treturn typeof argument === 'function' && !!argument.prototype; // unfortunately there's no way to truly check this without try/catch `new argument`
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-isextensible-o
\tIsExtensible: function IsExtensible(obj) {
\t\tif (!Object.preventExtensions) { return true; }
\t\tif (isPrimitive(obj)) {
\t\t\treturn false;
\t\t}
\t\treturn Object.isExtensible(obj);
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-isinteger
\tIsInteger: function IsInteger(argument) {
\t\tif (typeof argument !== 'number' || \$isNaN(argument) || !\$isFinite(argument)) {
\t\t\treturn false;
\t\t}
\t\tvar abs = Math.abs(argument);
\t\treturn Math.floor(abs) === abs;
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-ispropertykey
\tIsPropertyKey: function IsPropertyKey(argument) {
\t\treturn typeof argument === 'string' || typeof argument === 'symbol';
\t},

\t// http://www.ecma-international.org/ecma-262/6.0/#sec-isregexp
\tIsRegExp: function IsRegExp(argument) {
\t\tif (!argument || typeof argument !== 'object') {
\t\t\treturn false;
\t\t}
\t\tif (hasSymbols) {
\t\t\tvar isRegExp = argument[Symbol.match];
\t\t\tif (typeof isRegExp !== 'undefined') {
\t\t\t\treturn ES5.ToBoolean(isRegExp);
\t\t\t}
\t\t}
\t\treturn hasRegExpMatcher(argument);
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-samevalue
\t// SameValue: ES5.SameValue,

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-samevaluezero
\tSameValueZero: function SameValueZero(x, y) {
\t\treturn (x === y) || (\$isNaN(x) && \$isNaN(y));
\t},

\t/**
\t * 7.3.2 GetV (V, P)
\t * 1. Assert: IsPropertyKey(P) is true.
\t * 2. Let O be ToObject(V).
\t * 3. ReturnIfAbrupt(O).
\t * 4. Return O.[[Get]](P, V).
\t */
\tGetV: function GetV(V, P) {
\t\t// 7.3.2.1
\t\tif (!this.IsPropertyKey(P)) {
\t\t\tthrow new TypeError('Assertion failed: IsPropertyKey(P) is not true');
\t\t}

\t\t// 7.3.2.2-3
\t\tvar O = this.ToObject(V);

\t\t// 7.3.2.4
\t\treturn O[P];
\t},

\t/**
\t * 7.3.9 - http://www.ecma-international.org/ecma-262/6.0/#sec-getmethod
\t * 1. Assert: IsPropertyKey(P) is true.
\t * 2. Let func be GetV(O, P).
\t * 3. ReturnIfAbrupt(func).
\t * 4. If func is either undefined or null, return undefined.
\t * 5. If IsCallable(func) is false, throw a TypeError exception.
\t * 6. Return func.
\t */
\tGetMethod: function GetMethod(O, P) {
\t\t// 7.3.9.1
\t\tif (!this.IsPropertyKey(P)) {
\t\t\tthrow new TypeError('Assertion failed: IsPropertyKey(P) is not true');
\t\t}

\t\t// 7.3.9.2
\t\tvar func = this.GetV(O, P);

\t\t// 7.3.9.4
\t\tif (func == null) {
\t\t\treturn undefined;
\t\t}

\t\t// 7.3.9.5
\t\tif (!this.IsCallable(func)) {
\t\t\tthrow new TypeError(P + 'is not a function');
\t\t}

\t\t// 7.3.9.6
\t\treturn func;
\t},

\t/**
\t * 7.3.1 Get (O, P) - http://www.ecma-international.org/ecma-262/6.0/#sec-get-o-p
\t * 1. Assert: Type(O) is Object.
\t * 2. Assert: IsPropertyKey(P) is true.
\t * 3. Return O.[[Get]](P, O).
\t */
\tGet: function Get(O, P) {
\t\t// 7.3.1.1
\t\tif (this.Type(O) !== 'Object') {
\t\t\tthrow new TypeError('Assertion failed: Type(O) is not Object');
\t\t}
\t\t// 7.3.1.2
\t\tif (!this.IsPropertyKey(P)) {
\t\t\tthrow new TypeError('Assertion failed: IsPropertyKey(P) is not true');
\t\t}
\t\t// 7.3.1.3
\t\treturn O[P];
\t},

\tType: function Type(x) {
\t\tif (typeof x === 'symbol') {
\t\t\treturn 'Symbol';
\t\t}
\t\treturn ES5.Type(x);
\t},

\t// http://www.ecma-international.org/ecma-262/6.0/#sec-speciesconstructor
\tSpeciesConstructor: function SpeciesConstructor(O, defaultConstructor) {
\t\tif (this.Type(O) !== 'Object') {
\t\t\tthrow new TypeError('Assertion failed: Type(O) is not Object');
\t\t}
\t\tvar C = O.constructor;
\t\tif (typeof C === 'undefined') {
\t\t\treturn defaultConstructor;
\t\t}
\t\tif (this.Type(C) !== 'Object') {
\t\t\tthrow new TypeError('O.constructor is not an Object');
\t\t}
\t\tvar S = hasSymbols && Symbol.species ? C[Symbol.species] : undefined;
\t\tif (S == null) {
\t\t\treturn defaultConstructor;
\t\t}
\t\tif (this.IsConstructor(S)) {
\t\t\treturn S;
\t\t}
\t\tthrow new TypeError('no constructor found');
\t},

\t// http://ecma-international.org/ecma-262/6.0/#sec-completepropertydescriptor
\tCompletePropertyDescriptor: function CompletePropertyDescriptor(Desc) {
\t\tif (!this.IsPropertyDescriptor(Desc)) {
\t\t\tthrow new TypeError('Desc must be a Property Descriptor');
\t\t}

\t\tif (this.IsGenericDescriptor(Desc) || this.IsDataDescriptor(Desc)) {
\t\t\tif (!has(Desc, '[[Value]]')) {
\t\t\t\tDesc['[[Value]]'] = void 0;
\t\t\t}
\t\t\tif (!has(Desc, '[[Writable]]')) {
\t\t\t\tDesc['[[Writable]]'] = false;
\t\t\t}
\t\t} else {
\t\t\tif (!has(Desc, '[[Get]]')) {
\t\t\t\tDesc['[[Get]]'] = void 0;
\t\t\t}
\t\t\tif (!has(Desc, '[[Set]]')) {
\t\t\t\tDesc['[[Set]]'] = void 0;
\t\t\t}
\t\t}
\t\tif (!has(Desc, '[[Enumerable]]')) {
\t\t\tDesc['[[Enumerable]]'] = false;
\t\t}
\t\tif (!has(Desc, '[[Configurable]]')) {
\t\t\tDesc['[[Configurable]]'] = false;
\t\t}
\t\treturn Desc;
\t},

\t// http://ecma-international.org/ecma-262/6.0/#sec-set-o-p-v-throw
\tSet: function Set(O, P, V, Throw) {
\t\tif (this.Type(O) !== 'Object') {
\t\t\tthrow new TypeError('O must be an Object');
\t\t}
\t\tif (!this.IsPropertyKey(P)) {
\t\t\tthrow new TypeError('P must be a Property Key');
\t\t}
\t\tif (this.Type(Throw) !== 'Boolean') {
\t\t\tthrow new TypeError('Throw must be a Boolean');
\t\t}
\t\tif (Throw) {
\t\t\tO[P] = V;
\t\t\treturn true;
\t\t} else {
\t\t\ttry {
\t\t\t\tO[P] = V;
\t\t\t} catch (e) {
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t},

\t// http://ecma-international.org/ecma-262/6.0/#sec-hasownproperty
\tHasOwnProperty: function HasOwnProperty(O, P) {
\t\tif (this.Type(O) !== 'Object') {
\t\t\tthrow new TypeError('O must be an Object');
\t\t}
\t\tif (!this.IsPropertyKey(P)) {
\t\t\tthrow new TypeError('P must be a Property Key');
\t\t}
\t\treturn has(O, P);
\t},

\t// http://ecma-international.org/ecma-262/6.0/#sec-hasproperty
\tHasProperty: function HasProperty(O, P) {
\t\tif (this.Type(O) !== 'Object') {
\t\t\tthrow new TypeError('O must be an Object');
\t\t}
\t\tif (!this.IsPropertyKey(P)) {
\t\t\tthrow new TypeError('P must be a Property Key');
\t\t}
\t\treturn P in O;
\t},

\t// http://ecma-international.org/ecma-262/6.0/#sec-isconcatspreadable
\tIsConcatSpreadable: function IsConcatSpreadable(O) {
\t\tif (this.Type(O) !== 'Object') {
\t\t\treturn false;
\t\t}
\t\tif (hasSymbols && typeof Symbol.isConcatSpreadable === 'symbol') {
\t\t\tvar spreadable = this.Get(O, Symbol.isConcatSpreadable);
\t\t\tif (typeof spreadable !== 'undefined') {
\t\t\t\treturn this.ToBoolean(spreadable);
\t\t\t}
\t\t}
\t\treturn this.IsArray(O);
\t},

\t// http://ecma-international.org/ecma-262/6.0/#sec-invoke
\tInvoke: function Invoke(O, P) {
\t\tif (!this.IsPropertyKey(P)) {
\t\t\tthrow new TypeError('P must be a Property Key');
\t\t}
\t\tvar argumentsList = arraySlice(arguments, 2);
\t\tvar func = this.GetV(O, P);
\t\treturn this.Call(func, O, argumentsList);
\t},

\t// http://ecma-international.org/ecma-262/6.0/#sec-createiterresultobject
\tCreateIterResultObject: function CreateIterResultObject(value, done) {
\t\tif (this.Type(done) !== 'Boolean') {
\t\t\tthrow new TypeError('Assertion failed: Type(done) is not Boolean');
\t\t}
\t\treturn {
\t\t\tvalue: value,
\t\t\tdone: done
\t\t};
\t},

\t// http://ecma-international.org/ecma-262/6.0/#sec-regexpexec
\tRegExpExec: function RegExpExec(R, S) {
\t\tif (this.Type(R) !== 'Object') {
\t\t\tthrow new TypeError('R must be an Object');
\t\t}
\t\tif (this.Type(S) !== 'String') {
\t\t\tthrow new TypeError('S must be a String');
\t\t}
\t\tvar exec = this.Get(R, 'exec');
\t\tif (this.IsCallable(exec)) {
\t\t\tvar result = this.Call(exec, R, [S]);
\t\t\tif (result === null || this.Type(result) === 'Object') {
\t\t\t\treturn result;
\t\t\t}
\t\t\tthrow new TypeError('\"exec\" method must return `null` or an Object');
\t\t}
\t\treturn regexExec(R, S);
\t}
});

delete ES6.CheckObjectCoercible; // renamed in ES6 to RequireObjectCoercible

module.exports = ES6;
";
        
        $__internal_6602168bca8e5b4e388514b9ad1f34f377ff002b6bfa061404374b78e252790e->leave($__internal_6602168bca8e5b4e388514b9ad1f34f377ff002b6bfa061404374b78e252790e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-abstract/es2015.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var has = require('has');

var toStr = Object.prototype.toString;
var hasSymbols = typeof Symbol === 'function' && typeof Symbol.iterator === 'symbol';

var \$isNaN = require('./helpers/isNaN');
var \$isFinite = require('./helpers/isFinite');
var MAX_SAFE_INTEGER = Number.MAX_SAFE_INTEGER || Math.pow(2, 53) - 1;

var assign = require('./helpers/assign');
var sign = require('./helpers/sign');
var mod = require('./helpers/mod');
var isPrimitive = require('./helpers/isPrimitive');
var toPrimitive = require('es-to-primitive/es6');
var parseInteger = parseInt;
var bind = require('function-bind');
var arraySlice = bind.call(Function.call, Array.prototype.slice);
var strSlice = bind.call(Function.call, String.prototype.slice);
var isBinary = bind.call(Function.call, RegExp.prototype.test, /^0b[01]+\$/i);
var isOctal = bind.call(Function.call, RegExp.prototype.test, /^0o[0-7]+\$/i);
var regexExec = bind.call(Function.call, RegExp.prototype.exec);
var nonWS = ['\\u0085', '\\u200b', '\\ufffe'].join('');
var nonWSregex = new RegExp('[' + nonWS + ']', 'g');
var hasNonWS = bind.call(Function.call, RegExp.prototype.test, nonWSregex);
var invalidHexLiteral = /^[-+]0x[0-9a-f]+\$/i;
var isInvalidHexLiteral = bind.call(Function.call, RegExp.prototype.test, invalidHexLiteral);

// whitespace from: http://es5.github.io/#x15.5.4.20
// implementation from https://github.com/es-shims/es5-shim/blob/v3.4.0/es5-shim.js#L1304-L1324
var ws = [
\t'\\x09\\x0A\\x0B\\x0C\\x0D\\x20\\xA0\\u1680\\u180E\\u2000\\u2001\\u2002\\u2003',
\t'\\u2004\\u2005\\u2006\\u2007\\u2008\\u2009\\u200A\\u202F\\u205F\\u3000\\u2028',
\t'\\u2029\\uFEFF'
].join('');
var trimRegex = new RegExp('(^[' + ws + ']+)|([' + ws + ']+\$)', 'g');
var replace = bind.call(Function.call, String.prototype.replace);
var trim = function (value) {
\treturn replace(value, trimRegex, '');
};

var ES5 = require('./es5');

var hasRegExpMatcher = require('is-regex');

// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-abstract-operations
var ES6 = assign(assign({}, ES5), {

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-call-f-v-args
\tCall: function Call(F, V) {
\t\tvar args = arguments.length > 2 ? arguments[2] : [];
\t\tif (!this.IsCallable(F)) {
\t\t\tthrow new TypeError(F + ' is not a function');
\t\t}
\t\treturn F.apply(V, args);
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-toprimitive
\tToPrimitive: toPrimitive,

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-toboolean
\t// ToBoolean: ES5.ToBoolean,

\t// http://www.ecma-international.org/ecma-262/6.0/#sec-tonumber
\tToNumber: function ToNumber(argument) {
\t\tvar value = isPrimitive(argument) ? argument : toPrimitive(argument, Number);
\t\tif (typeof value === 'symbol') {
\t\t\tthrow new TypeError('Cannot convert a Symbol value to a number');
\t\t}
\t\tif (typeof value === 'string') {
\t\t\tif (isBinary(value)) {
\t\t\t\treturn this.ToNumber(parseInteger(strSlice(value, 2), 2));
\t\t\t} else if (isOctal(value)) {
\t\t\t\treturn this.ToNumber(parseInteger(strSlice(value, 2), 8));
\t\t\t} else if (hasNonWS(value) || isInvalidHexLiteral(value)) {
\t\t\t\treturn NaN;
\t\t\t} else {
\t\t\t\tvar trimmed = trim(value);
\t\t\t\tif (trimmed !== value) {
\t\t\t\t\treturn this.ToNumber(trimmed);
\t\t\t\t}
\t\t\t}
\t\t}
\t\treturn Number(value);
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-tointeger
\t// ToInteger: ES5.ToNumber,

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-toint32
\t// ToInt32: ES5.ToInt32,

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-touint32
\t// ToUint32: ES5.ToUint32,

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-toint16
\tToInt16: function ToInt16(argument) {
\t\tvar int16bit = this.ToUint16(argument);
\t\treturn int16bit >= 0x8000 ? int16bit - 0x10000 : int16bit;
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-touint16
\t// ToUint16: ES5.ToUint16,

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-toint8
\tToInt8: function ToInt8(argument) {
\t\tvar int8bit = this.ToUint8(argument);
\t\treturn int8bit >= 0x80 ? int8bit - 0x100 : int8bit;
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-touint8
\tToUint8: function ToUint8(argument) {
\t\tvar number = this.ToNumber(argument);
\t\tif (\$isNaN(number) || number === 0 || !\$isFinite(number)) { return 0; }
\t\tvar posInt = sign(number) * Math.floor(Math.abs(number));
\t\treturn mod(posInt, 0x100);
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-touint8clamp
\tToUint8Clamp: function ToUint8Clamp(argument) {
\t\tvar number = this.ToNumber(argument);
\t\tif (\$isNaN(number) || number <= 0) { return 0; }
\t\tif (number >= 0xFF) { return 0xFF; }
\t\tvar f = Math.floor(argument);
\t\tif (f + 0.5 < number) { return f + 1; }
\t\tif (number < f + 0.5) { return f; }
\t\tif (f % 2 !== 0) { return f + 1; }
\t\treturn f;
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-tostring
\tToString: function ToString(argument) {
\t\tif (typeof argument === 'symbol') {
\t\t\tthrow new TypeError('Cannot convert a Symbol value to a string');
\t\t}
\t\treturn String(argument);
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-toobject
\tToObject: function ToObject(value) {
\t\tthis.RequireObjectCoercible(value);
\t\treturn Object(value);
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-topropertykey
\tToPropertyKey: function ToPropertyKey(argument) {
\t\tvar key = this.ToPrimitive(argument, String);
\t\treturn typeof key === 'symbol' ? key : this.ToString(key);
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-tolength
\tToLength: function ToLength(argument) {
\t\tvar len = this.ToInteger(argument);
\t\tif (len <= 0) { return 0; } // includes converting -0 to +0
\t\tif (len > MAX_SAFE_INTEGER) { return MAX_SAFE_INTEGER; }
\t\treturn len;
\t},

\t// http://www.ecma-international.org/ecma-262/6.0/#sec-canonicalnumericindexstring
\tCanonicalNumericIndexString: function CanonicalNumericIndexString(argument) {
\t\tif (toStr.call(argument) !== '[object String]') {
\t\t\tthrow new TypeError('must be a string');
\t\t}
\t\tif (argument === '-0') { return -0; }
\t\tvar n = this.ToNumber(argument);
\t\tif (this.SameValue(this.ToString(n), argument)) { return n; }
\t\treturn void 0;
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-requireobjectcoercible
\tRequireObjectCoercible: ES5.CheckObjectCoercible,

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-isarray
\tIsArray: Array.isArray || function IsArray(argument) {
\t\treturn toStr.call(argument) === '[object Array]';
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-iscallable
\t// IsCallable: ES5.IsCallable,

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-isconstructor
\tIsConstructor: function IsConstructor(argument) {
\t\treturn typeof argument === 'function' && !!argument.prototype; // unfortunately there's no way to truly check this without try/catch `new argument`
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-isextensible-o
\tIsExtensible: function IsExtensible(obj) {
\t\tif (!Object.preventExtensions) { return true; }
\t\tif (isPrimitive(obj)) {
\t\t\treturn false;
\t\t}
\t\treturn Object.isExtensible(obj);
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-isinteger
\tIsInteger: function IsInteger(argument) {
\t\tif (typeof argument !== 'number' || \$isNaN(argument) || !\$isFinite(argument)) {
\t\t\treturn false;
\t\t}
\t\tvar abs = Math.abs(argument);
\t\treturn Math.floor(abs) === abs;
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-ispropertykey
\tIsPropertyKey: function IsPropertyKey(argument) {
\t\treturn typeof argument === 'string' || typeof argument === 'symbol';
\t},

\t// http://www.ecma-international.org/ecma-262/6.0/#sec-isregexp
\tIsRegExp: function IsRegExp(argument) {
\t\tif (!argument || typeof argument !== 'object') {
\t\t\treturn false;
\t\t}
\t\tif (hasSymbols) {
\t\t\tvar isRegExp = argument[Symbol.match];
\t\t\tif (typeof isRegExp !== 'undefined') {
\t\t\t\treturn ES5.ToBoolean(isRegExp);
\t\t\t}
\t\t}
\t\treturn hasRegExpMatcher(argument);
\t},

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-samevalue
\t// SameValue: ES5.SameValue,

\t// https://people.mozilla.org/~jorendorff/es6-draft.html#sec-samevaluezero
\tSameValueZero: function SameValueZero(x, y) {
\t\treturn (x === y) || (\$isNaN(x) && \$isNaN(y));
\t},

\t/**
\t * 7.3.2 GetV (V, P)
\t * 1. Assert: IsPropertyKey(P) is true.
\t * 2. Let O be ToObject(V).
\t * 3. ReturnIfAbrupt(O).
\t * 4. Return O.[[Get]](P, V).
\t */
\tGetV: function GetV(V, P) {
\t\t// 7.3.2.1
\t\tif (!this.IsPropertyKey(P)) {
\t\t\tthrow new TypeError('Assertion failed: IsPropertyKey(P) is not true');
\t\t}

\t\t// 7.3.2.2-3
\t\tvar O = this.ToObject(V);

\t\t// 7.3.2.4
\t\treturn O[P];
\t},

\t/**
\t * 7.3.9 - http://www.ecma-international.org/ecma-262/6.0/#sec-getmethod
\t * 1. Assert: IsPropertyKey(P) is true.
\t * 2. Let func be GetV(O, P).
\t * 3. ReturnIfAbrupt(func).
\t * 4. If func is either undefined or null, return undefined.
\t * 5. If IsCallable(func) is false, throw a TypeError exception.
\t * 6. Return func.
\t */
\tGetMethod: function GetMethod(O, P) {
\t\t// 7.3.9.1
\t\tif (!this.IsPropertyKey(P)) {
\t\t\tthrow new TypeError('Assertion failed: IsPropertyKey(P) is not true');
\t\t}

\t\t// 7.3.9.2
\t\tvar func = this.GetV(O, P);

\t\t// 7.3.9.4
\t\tif (func == null) {
\t\t\treturn undefined;
\t\t}

\t\t// 7.3.9.5
\t\tif (!this.IsCallable(func)) {
\t\t\tthrow new TypeError(P + 'is not a function');
\t\t}

\t\t// 7.3.9.6
\t\treturn func;
\t},

\t/**
\t * 7.3.1 Get (O, P) - http://www.ecma-international.org/ecma-262/6.0/#sec-get-o-p
\t * 1. Assert: Type(O) is Object.
\t * 2. Assert: IsPropertyKey(P) is true.
\t * 3. Return O.[[Get]](P, O).
\t */
\tGet: function Get(O, P) {
\t\t// 7.3.1.1
\t\tif (this.Type(O) !== 'Object') {
\t\t\tthrow new TypeError('Assertion failed: Type(O) is not Object');
\t\t}
\t\t// 7.3.1.2
\t\tif (!this.IsPropertyKey(P)) {
\t\t\tthrow new TypeError('Assertion failed: IsPropertyKey(P) is not true');
\t\t}
\t\t// 7.3.1.3
\t\treturn O[P];
\t},

\tType: function Type(x) {
\t\tif (typeof x === 'symbol') {
\t\t\treturn 'Symbol';
\t\t}
\t\treturn ES5.Type(x);
\t},

\t// http://www.ecma-international.org/ecma-262/6.0/#sec-speciesconstructor
\tSpeciesConstructor: function SpeciesConstructor(O, defaultConstructor) {
\t\tif (this.Type(O) !== 'Object') {
\t\t\tthrow new TypeError('Assertion failed: Type(O) is not Object');
\t\t}
\t\tvar C = O.constructor;
\t\tif (typeof C === 'undefined') {
\t\t\treturn defaultConstructor;
\t\t}
\t\tif (this.Type(C) !== 'Object') {
\t\t\tthrow new TypeError('O.constructor is not an Object');
\t\t}
\t\tvar S = hasSymbols && Symbol.species ? C[Symbol.species] : undefined;
\t\tif (S == null) {
\t\t\treturn defaultConstructor;
\t\t}
\t\tif (this.IsConstructor(S)) {
\t\t\treturn S;
\t\t}
\t\tthrow new TypeError('no constructor found');
\t},

\t// http://ecma-international.org/ecma-262/6.0/#sec-completepropertydescriptor
\tCompletePropertyDescriptor: function CompletePropertyDescriptor(Desc) {
\t\tif (!this.IsPropertyDescriptor(Desc)) {
\t\t\tthrow new TypeError('Desc must be a Property Descriptor');
\t\t}

\t\tif (this.IsGenericDescriptor(Desc) || this.IsDataDescriptor(Desc)) {
\t\t\tif (!has(Desc, '[[Value]]')) {
\t\t\t\tDesc['[[Value]]'] = void 0;
\t\t\t}
\t\t\tif (!has(Desc, '[[Writable]]')) {
\t\t\t\tDesc['[[Writable]]'] = false;
\t\t\t}
\t\t} else {
\t\t\tif (!has(Desc, '[[Get]]')) {
\t\t\t\tDesc['[[Get]]'] = void 0;
\t\t\t}
\t\t\tif (!has(Desc, '[[Set]]')) {
\t\t\t\tDesc['[[Set]]'] = void 0;
\t\t\t}
\t\t}
\t\tif (!has(Desc, '[[Enumerable]]')) {
\t\t\tDesc['[[Enumerable]]'] = false;
\t\t}
\t\tif (!has(Desc, '[[Configurable]]')) {
\t\t\tDesc['[[Configurable]]'] = false;
\t\t}
\t\treturn Desc;
\t},

\t// http://ecma-international.org/ecma-262/6.0/#sec-set-o-p-v-throw
\tSet: function Set(O, P, V, Throw) {
\t\tif (this.Type(O) !== 'Object') {
\t\t\tthrow new TypeError('O must be an Object');
\t\t}
\t\tif (!this.IsPropertyKey(P)) {
\t\t\tthrow new TypeError('P must be a Property Key');
\t\t}
\t\tif (this.Type(Throw) !== 'Boolean') {
\t\t\tthrow new TypeError('Throw must be a Boolean');
\t\t}
\t\tif (Throw) {
\t\t\tO[P] = V;
\t\t\treturn true;
\t\t} else {
\t\t\ttry {
\t\t\t\tO[P] = V;
\t\t\t} catch (e) {
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t},

\t// http://ecma-international.org/ecma-262/6.0/#sec-hasownproperty
\tHasOwnProperty: function HasOwnProperty(O, P) {
\t\tif (this.Type(O) !== 'Object') {
\t\t\tthrow new TypeError('O must be an Object');
\t\t}
\t\tif (!this.IsPropertyKey(P)) {
\t\t\tthrow new TypeError('P must be a Property Key');
\t\t}
\t\treturn has(O, P);
\t},

\t// http://ecma-international.org/ecma-262/6.0/#sec-hasproperty
\tHasProperty: function HasProperty(O, P) {
\t\tif (this.Type(O) !== 'Object') {
\t\t\tthrow new TypeError('O must be an Object');
\t\t}
\t\tif (!this.IsPropertyKey(P)) {
\t\t\tthrow new TypeError('P must be a Property Key');
\t\t}
\t\treturn P in O;
\t},

\t// http://ecma-international.org/ecma-262/6.0/#sec-isconcatspreadable
\tIsConcatSpreadable: function IsConcatSpreadable(O) {
\t\tif (this.Type(O) !== 'Object') {
\t\t\treturn false;
\t\t}
\t\tif (hasSymbols && typeof Symbol.isConcatSpreadable === 'symbol') {
\t\t\tvar spreadable = this.Get(O, Symbol.isConcatSpreadable);
\t\t\tif (typeof spreadable !== 'undefined') {
\t\t\t\treturn this.ToBoolean(spreadable);
\t\t\t}
\t\t}
\t\treturn this.IsArray(O);
\t},

\t// http://ecma-international.org/ecma-262/6.0/#sec-invoke
\tInvoke: function Invoke(O, P) {
\t\tif (!this.IsPropertyKey(P)) {
\t\t\tthrow new TypeError('P must be a Property Key');
\t\t}
\t\tvar argumentsList = arraySlice(arguments, 2);
\t\tvar func = this.GetV(O, P);
\t\treturn this.Call(func, O, argumentsList);
\t},

\t// http://ecma-international.org/ecma-262/6.0/#sec-createiterresultobject
\tCreateIterResultObject: function CreateIterResultObject(value, done) {
\t\tif (this.Type(done) !== 'Boolean') {
\t\t\tthrow new TypeError('Assertion failed: Type(done) is not Boolean');
\t\t}
\t\treturn {
\t\t\tvalue: value,
\t\t\tdone: done
\t\t};
\t},

\t// http://ecma-international.org/ecma-262/6.0/#sec-regexpexec
\tRegExpExec: function RegExpExec(R, S) {
\t\tif (this.Type(R) !== 'Object') {
\t\t\tthrow new TypeError('R must be an Object');
\t\t}
\t\tif (this.Type(S) !== 'String') {
\t\t\tthrow new TypeError('S must be a String');
\t\t}
\t\tvar exec = this.Get(R, 'exec');
\t\tif (this.IsCallable(exec)) {
\t\t\tvar result = this.Call(exec, R, [S]);
\t\t\tif (result === null || this.Type(result) === 'Object') {
\t\t\t\treturn result;
\t\t\t}
\t\t\tthrow new TypeError('\"exec\" method must return `null` or an Object');
\t\t}
\t\treturn regexExec(R, S);
\t}
});

delete ES6.CheckObjectCoercible; // renamed in ES6 to RequireObjectCoercible

module.exports = ES6;
", "node_modules/es-abstract/es2015.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-abstract/es2015.js");
    }
}
