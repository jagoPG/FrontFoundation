<?php

/* node_modules/es-abstract/es5.js */
class __TwigTemplate_ae1b952a4bcb417db0cad9e8521e3aa2f17d224a12f441daf20248c601861b4b extends Twig_Template
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
        $__internal_2d09b80513672fff26a9b8b77db3ec12a447ffc86b2f9a9a555d6c8a1e2a8fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d09b80513672fff26a9b8b77db3ec12a447ffc86b2f9a9a555d6c8a1e2a8fdc->enter($__internal_2d09b80513672fff26a9b8b77db3ec12a447ffc86b2f9a9a555d6c8a1e2a8fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-abstract/es5.js"));

        // line 1
        echo "'use strict';

var \$isNaN = require('./helpers/isNaN');
var \$isFinite = require('./helpers/isFinite');

var sign = require('./helpers/sign');
var mod = require('./helpers/mod');

var IsCallable = require('is-callable');
var toPrimitive = require('es-to-primitive/es5');

var has = require('has');

// https://es5.github.io/#x9
var ES5 = {
\tToPrimitive: toPrimitive,

\tToBoolean: function ToBoolean(value) {
\t\treturn !!value;
\t},
\tToNumber: function ToNumber(value) {
\t\treturn Number(value);
\t},
\tToInteger: function ToInteger(value) {
\t\tvar number = this.ToNumber(value);
\t\tif (\$isNaN(number)) { return 0; }
\t\tif (number === 0 || !\$isFinite(number)) { return number; }
\t\treturn sign(number) * Math.floor(Math.abs(number));
\t},
\tToInt32: function ToInt32(x) {
\t\treturn this.ToNumber(x) >> 0;
\t},
\tToUint32: function ToUint32(x) {
\t\treturn this.ToNumber(x) >>> 0;
\t},
\tToUint16: function ToUint16(value) {
\t\tvar number = this.ToNumber(value);
\t\tif (\$isNaN(number) || number === 0 || !\$isFinite(number)) { return 0; }
\t\tvar posInt = sign(number) * Math.floor(Math.abs(number));
\t\treturn mod(posInt, 0x10000);
\t},
\tToString: function ToString(value) {
\t\treturn String(value);
\t},
\tToObject: function ToObject(value) {
\t\tthis.CheckObjectCoercible(value);
\t\treturn Object(value);
\t},
\tCheckObjectCoercible: function CheckObjectCoercible(value, optMessage) {
\t\t/* jshint eqnull:true */
\t\tif (value == null) {
\t\t\tthrow new TypeError(optMessage || 'Cannot call method on ' + value);
\t\t}
\t\treturn value;
\t},
\tIsCallable: IsCallable,
\tSameValue: function SameValue(x, y) {
\t\tif (x === y) { // 0 === -0, but they are not identical.
\t\t\tif (x === 0) { return 1 / x === 1 / y; }
\t\t\treturn true;
\t\t}
\t\treturn \$isNaN(x) && \$isNaN(y);
\t},

\t// http://www.ecma-international.org/ecma-262/5.1/#sec-8
\tType: function Type(x) {
\t\tif (x === null) {
\t\t\treturn 'Null';
\t\t}
\t\tif (typeof x === 'undefined') {
\t\t\treturn 'Undefined';
\t\t}
\t\tif (typeof x === 'function' || typeof x === 'object') {
\t\t\treturn 'Object';
\t\t}
\t\tif (typeof x === 'number') {
\t\t\treturn 'Number';
\t\t}
\t\tif (typeof x === 'boolean') {
\t\t\treturn 'Boolean';
\t\t}
\t\tif (typeof x === 'string') {
\t\t\treturn 'String';
\t\t}
\t},

\t// http://ecma-international.org/ecma-262/6.0/#sec-property-descriptor-specification-type
\tIsPropertyDescriptor: function IsPropertyDescriptor(Desc) {
\t\tif (this.Type(Desc) !== 'Object') {
\t\t\treturn false;
\t\t}
\t\tvar allowed = {
\t\t\t'[[Configurable]]': true,
\t\t\t'[[Enumerable]]': true,
\t\t\t'[[Get]]': true,
\t\t\t'[[Set]]': true,
\t\t\t'[[Value]]': true,
\t\t\t'[[Writable]]': true
\t\t};
\t\t// jscs:disable
\t\tfor (var key in Desc) { // eslint-disable-line
\t\t\tif (has(Desc, key) && !allowed[key]) {
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\t// jscs:enable
\t\tvar isData = has(Desc, '[[Value]]');
\t\tvar IsAccessor = has(Desc, '[[Get]]') || has(Desc, '[[Set]]');
\t\tif (isData && IsAccessor) {
\t\t\tthrow new TypeError('Property Descriptors may not be both accessor and data descriptors');
\t\t}
\t\treturn true;
\t},

\t// http://ecma-international.org/ecma-262/5.1/#sec-8.10.1
\tIsAccessorDescriptor: function IsAccessorDescriptor(Desc) {
\t\tif (typeof Desc === 'undefined') {
\t\t\treturn false;
\t\t}

\t\tif (!this.IsPropertyDescriptor(Desc)) {
\t\t\tthrow new TypeError('Desc must be a Property Descriptor');
\t\t}

\t\tif (!has(Desc, '[[Get]]') && !has(Desc, '[[Set]]')) {
\t\t\treturn false;
\t\t}

\t\treturn true;
\t},

\t// http://ecma-international.org/ecma-262/5.1/#sec-8.10.2
\tIsDataDescriptor: function IsDataDescriptor(Desc) {
\t\tif (typeof Desc === 'undefined') {
\t\t\treturn false;
\t\t}

\t\tif (!this.IsPropertyDescriptor(Desc)) {
\t\t\tthrow new TypeError('Desc must be a Property Descriptor');
\t\t}

\t\tif (!has(Desc, '[[Value]]') && !has(Desc, '[[Writable]]')) {
\t\t\treturn false;
\t\t}

\t\treturn true;
\t},

\t// http://ecma-international.org/ecma-262/5.1/#sec-8.10.3
\tIsGenericDescriptor: function IsGenericDescriptor(Desc) {
\t\tif (typeof Desc === 'undefined') {
\t\t\treturn false;
\t\t}

\t\tif (!this.IsPropertyDescriptor(Desc)) {
\t\t\tthrow new TypeError('Desc must be a Property Descriptor');
\t\t}

\t\tif (!this.IsAccessorDescriptor(Desc) && !this.IsDataDescriptor(Desc)) {
\t\t\treturn true;
\t\t}

\t\treturn false;
\t},

\t// http://ecma-international.org/ecma-262/5.1/#sec-8.10.4
\tFromPropertyDescriptor: function FromPropertyDescriptor(Desc) {
\t\tif (typeof Desc === 'undefined') {
\t\t\treturn Desc;
\t\t}

\t\tif (!this.IsPropertyDescriptor(Desc)) {
\t\t\tthrow new TypeError('Desc must be a Property Descriptor');
\t\t}

\t\tif (this.IsDataDescriptor(Desc)) {
\t\t\treturn {
\t\t\t\tvalue: Desc['[[Value]]'],
\t\t\t\twritable: !!Desc['[[Writable]]'],
\t\t\t\tenumerable: !!Desc['[[Enumerable]]'],
\t\t\t\tconfigurable: !!Desc['[[Configurable]]']
\t\t\t};
\t\t} else if (this.IsAccessorDescriptor(Desc)) {
\t\t\treturn {
\t\t\t\tget: Desc['[[Get]]'],
\t\t\t\tset: Desc['[[Set]]'],
\t\t\t\tenumerable: !!Desc['[[Enumerable]]'],
\t\t\t\tconfigurable: !!Desc['[[Configurable]]']
\t\t\t};
\t\t} else {
\t\t\tthrow new TypeError('FromPropertyDescriptor must be called with a fully populated Property Descriptor');
\t\t}
\t},

\t// http://ecma-international.org/ecma-262/5.1/#sec-8.10.5
\tToPropertyDescriptor: function ToPropertyDescriptor(Obj) {
\t\tif (this.Type(Obj) !== 'Object') {
\t\t\tthrow new TypeError('ToPropertyDescriptor requires an object');
\t\t}

\t\tvar desc = {};
\t\tif (has(Obj, 'enumerable')) {
\t\t\tdesc['[[Enumerable]]'] = this.ToBoolean(Obj.enumerable);
\t\t}
\t\tif (has(Obj, 'configurable')) {
\t\t\tdesc['[[Configurable]]'] = this.ToBoolean(Obj.configurable);
\t\t}
\t\tif (has(Obj, 'value')) {
\t\t\tdesc['[[Value]]'] = Obj.value;
\t\t}
\t\tif (has(Obj, 'writable')) {
\t\t\tdesc['[[Writable]]'] = this.ToBoolean(Obj.writable);
\t\t}
\t\tif (has(Obj, 'get')) {
\t\t\tvar getter = Obj.get;
\t\t\tif (typeof getter !== 'undefined' && !this.IsCallable(getter)) {
\t\t\t\tthrow new TypeError('getter must be a function');
\t\t\t}
\t\t\tdesc['[[Get]]'] = getter;
\t\t}
\t\tif (has(Obj, 'set')) {
\t\t\tvar setter = Obj.set;
\t\t\tif (typeof setter !== 'undefined' && !this.IsCallable(setter)) {
\t\t\t\tthrow new TypeError('setter must be a function');
\t\t\t}
\t\t\tdesc['[[Set]]'] = setter;
\t\t}

\t\tif ((has(desc, '[[Get]]') || has(desc, '[[Set]]')) && (has(desc, '[[Value]]') || has(desc, '[[Writable]]'))) {
\t\t\tthrow new TypeError('Invalid property descriptor. Cannot both specify accessors and a value or writable attribute');
\t\t}
\t\treturn desc;
\t}
};

module.exports = ES5;
";
        
        $__internal_2d09b80513672fff26a9b8b77db3ec12a447ffc86b2f9a9a555d6c8a1e2a8fdc->leave($__internal_2d09b80513672fff26a9b8b77db3ec12a447ffc86b2f9a9a555d6c8a1e2a8fdc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-abstract/es5.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var \$isNaN = require('./helpers/isNaN');
var \$isFinite = require('./helpers/isFinite');

var sign = require('./helpers/sign');
var mod = require('./helpers/mod');

var IsCallable = require('is-callable');
var toPrimitive = require('es-to-primitive/es5');

var has = require('has');

// https://es5.github.io/#x9
var ES5 = {
\tToPrimitive: toPrimitive,

\tToBoolean: function ToBoolean(value) {
\t\treturn !!value;
\t},
\tToNumber: function ToNumber(value) {
\t\treturn Number(value);
\t},
\tToInteger: function ToInteger(value) {
\t\tvar number = this.ToNumber(value);
\t\tif (\$isNaN(number)) { return 0; }
\t\tif (number === 0 || !\$isFinite(number)) { return number; }
\t\treturn sign(number) * Math.floor(Math.abs(number));
\t},
\tToInt32: function ToInt32(x) {
\t\treturn this.ToNumber(x) >> 0;
\t},
\tToUint32: function ToUint32(x) {
\t\treturn this.ToNumber(x) >>> 0;
\t},
\tToUint16: function ToUint16(value) {
\t\tvar number = this.ToNumber(value);
\t\tif (\$isNaN(number) || number === 0 || !\$isFinite(number)) { return 0; }
\t\tvar posInt = sign(number) * Math.floor(Math.abs(number));
\t\treturn mod(posInt, 0x10000);
\t},
\tToString: function ToString(value) {
\t\treturn String(value);
\t},
\tToObject: function ToObject(value) {
\t\tthis.CheckObjectCoercible(value);
\t\treturn Object(value);
\t},
\tCheckObjectCoercible: function CheckObjectCoercible(value, optMessage) {
\t\t/* jshint eqnull:true */
\t\tif (value == null) {
\t\t\tthrow new TypeError(optMessage || 'Cannot call method on ' + value);
\t\t}
\t\treturn value;
\t},
\tIsCallable: IsCallable,
\tSameValue: function SameValue(x, y) {
\t\tif (x === y) { // 0 === -0, but they are not identical.
\t\t\tif (x === 0) { return 1 / x === 1 / y; }
\t\t\treturn true;
\t\t}
\t\treturn \$isNaN(x) && \$isNaN(y);
\t},

\t// http://www.ecma-international.org/ecma-262/5.1/#sec-8
\tType: function Type(x) {
\t\tif (x === null) {
\t\t\treturn 'Null';
\t\t}
\t\tif (typeof x === 'undefined') {
\t\t\treturn 'Undefined';
\t\t}
\t\tif (typeof x === 'function' || typeof x === 'object') {
\t\t\treturn 'Object';
\t\t}
\t\tif (typeof x === 'number') {
\t\t\treturn 'Number';
\t\t}
\t\tif (typeof x === 'boolean') {
\t\t\treturn 'Boolean';
\t\t}
\t\tif (typeof x === 'string') {
\t\t\treturn 'String';
\t\t}
\t},

\t// http://ecma-international.org/ecma-262/6.0/#sec-property-descriptor-specification-type
\tIsPropertyDescriptor: function IsPropertyDescriptor(Desc) {
\t\tif (this.Type(Desc) !== 'Object') {
\t\t\treturn false;
\t\t}
\t\tvar allowed = {
\t\t\t'[[Configurable]]': true,
\t\t\t'[[Enumerable]]': true,
\t\t\t'[[Get]]': true,
\t\t\t'[[Set]]': true,
\t\t\t'[[Value]]': true,
\t\t\t'[[Writable]]': true
\t\t};
\t\t// jscs:disable
\t\tfor (var key in Desc) { // eslint-disable-line
\t\t\tif (has(Desc, key) && !allowed[key]) {
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\t// jscs:enable
\t\tvar isData = has(Desc, '[[Value]]');
\t\tvar IsAccessor = has(Desc, '[[Get]]') || has(Desc, '[[Set]]');
\t\tif (isData && IsAccessor) {
\t\t\tthrow new TypeError('Property Descriptors may not be both accessor and data descriptors');
\t\t}
\t\treturn true;
\t},

\t// http://ecma-international.org/ecma-262/5.1/#sec-8.10.1
\tIsAccessorDescriptor: function IsAccessorDescriptor(Desc) {
\t\tif (typeof Desc === 'undefined') {
\t\t\treturn false;
\t\t}

\t\tif (!this.IsPropertyDescriptor(Desc)) {
\t\t\tthrow new TypeError('Desc must be a Property Descriptor');
\t\t}

\t\tif (!has(Desc, '[[Get]]') && !has(Desc, '[[Set]]')) {
\t\t\treturn false;
\t\t}

\t\treturn true;
\t},

\t// http://ecma-international.org/ecma-262/5.1/#sec-8.10.2
\tIsDataDescriptor: function IsDataDescriptor(Desc) {
\t\tif (typeof Desc === 'undefined') {
\t\t\treturn false;
\t\t}

\t\tif (!this.IsPropertyDescriptor(Desc)) {
\t\t\tthrow new TypeError('Desc must be a Property Descriptor');
\t\t}

\t\tif (!has(Desc, '[[Value]]') && !has(Desc, '[[Writable]]')) {
\t\t\treturn false;
\t\t}

\t\treturn true;
\t},

\t// http://ecma-international.org/ecma-262/5.1/#sec-8.10.3
\tIsGenericDescriptor: function IsGenericDescriptor(Desc) {
\t\tif (typeof Desc === 'undefined') {
\t\t\treturn false;
\t\t}

\t\tif (!this.IsPropertyDescriptor(Desc)) {
\t\t\tthrow new TypeError('Desc must be a Property Descriptor');
\t\t}

\t\tif (!this.IsAccessorDescriptor(Desc) && !this.IsDataDescriptor(Desc)) {
\t\t\treturn true;
\t\t}

\t\treturn false;
\t},

\t// http://ecma-international.org/ecma-262/5.1/#sec-8.10.4
\tFromPropertyDescriptor: function FromPropertyDescriptor(Desc) {
\t\tif (typeof Desc === 'undefined') {
\t\t\treturn Desc;
\t\t}

\t\tif (!this.IsPropertyDescriptor(Desc)) {
\t\t\tthrow new TypeError('Desc must be a Property Descriptor');
\t\t}

\t\tif (this.IsDataDescriptor(Desc)) {
\t\t\treturn {
\t\t\t\tvalue: Desc['[[Value]]'],
\t\t\t\twritable: !!Desc['[[Writable]]'],
\t\t\t\tenumerable: !!Desc['[[Enumerable]]'],
\t\t\t\tconfigurable: !!Desc['[[Configurable]]']
\t\t\t};
\t\t} else if (this.IsAccessorDescriptor(Desc)) {
\t\t\treturn {
\t\t\t\tget: Desc['[[Get]]'],
\t\t\t\tset: Desc['[[Set]]'],
\t\t\t\tenumerable: !!Desc['[[Enumerable]]'],
\t\t\t\tconfigurable: !!Desc['[[Configurable]]']
\t\t\t};
\t\t} else {
\t\t\tthrow new TypeError('FromPropertyDescriptor must be called with a fully populated Property Descriptor');
\t\t}
\t},

\t// http://ecma-international.org/ecma-262/5.1/#sec-8.10.5
\tToPropertyDescriptor: function ToPropertyDescriptor(Obj) {
\t\tif (this.Type(Obj) !== 'Object') {
\t\t\tthrow new TypeError('ToPropertyDescriptor requires an object');
\t\t}

\t\tvar desc = {};
\t\tif (has(Obj, 'enumerable')) {
\t\t\tdesc['[[Enumerable]]'] = this.ToBoolean(Obj.enumerable);
\t\t}
\t\tif (has(Obj, 'configurable')) {
\t\t\tdesc['[[Configurable]]'] = this.ToBoolean(Obj.configurable);
\t\t}
\t\tif (has(Obj, 'value')) {
\t\t\tdesc['[[Value]]'] = Obj.value;
\t\t}
\t\tif (has(Obj, 'writable')) {
\t\t\tdesc['[[Writable]]'] = this.ToBoolean(Obj.writable);
\t\t}
\t\tif (has(Obj, 'get')) {
\t\t\tvar getter = Obj.get;
\t\t\tif (typeof getter !== 'undefined' && !this.IsCallable(getter)) {
\t\t\t\tthrow new TypeError('getter must be a function');
\t\t\t}
\t\t\tdesc['[[Get]]'] = getter;
\t\t}
\t\tif (has(Obj, 'set')) {
\t\t\tvar setter = Obj.set;
\t\t\tif (typeof setter !== 'undefined' && !this.IsCallable(setter)) {
\t\t\t\tthrow new TypeError('setter must be a function');
\t\t\t}
\t\t\tdesc['[[Set]]'] = setter;
\t\t}

\t\tif ((has(desc, '[[Get]]') || has(desc, '[[Set]]')) && (has(desc, '[[Value]]') || has(desc, '[[Writable]]'))) {
\t\t\tthrow new TypeError('Invalid property descriptor. Cannot both specify accessors and a value or writable attribute');
\t\t}
\t\treturn desc;
\t}
};

module.exports = ES5;
", "node_modules/es-abstract/es5.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-abstract/es5.js");
    }
}
