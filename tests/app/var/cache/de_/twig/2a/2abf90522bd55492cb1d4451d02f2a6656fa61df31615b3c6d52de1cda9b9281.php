<?php

/* node_modules/es6-map/primitive/index.js */
class __TwigTemplate_4bfefdf5a56fe9ce249cc652776619937f21a419b05de7892526fb8dd18e3533 extends Twig_Template
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
        $__internal_fca74c750f381828fbf6b21f92d122fdeb9b8b2ffa0e6d023e7383158911cc28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca74c750f381828fbf6b21f92d122fdeb9b8b2ffa0e6d023e7383158911cc28->enter($__internal_fca74c750f381828fbf6b21f92d122fdeb9b8b2ffa0e6d023e7383158911cc28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-map/primitive/index.js"));

        // line 1
        echo "'use strict';

var clear          = require('es5-ext/object/clear')
  , setPrototypeOf = require('es5-ext/object/set-prototype-of')
  , validValue     = require('es5-ext/object/valid-value')
  , callable       = require('es5-ext/object/valid-callable')
  , d              = require('d')
  , iterator       = require('es6-iterator/valid-iterable')
  , forOf          = require('es6-iterator/for-of')
  , isNative       = require('../is-native-implemented')
  , MapPolyfill    = require('../polyfill')
  , Iterator       = require('../lib/primitive-iterator')

  , call = Function.prototype.call
  , create = Object.create, defineProperty = Object.defineProperty
  , defineProperties = Object.defineProperties, getPrototypeOf = Object.getPrototypeOf
  , hasOwnProperty = Object.prototype.hasOwnProperty
  , PrimitiveMap;

module.exports = PrimitiveMap = function (/*iterable, serialize*/) {
\tvar iterable = arguments[0], serialize = arguments[1], self;
\tif (!(this instanceof PrimitiveMap)) throw new TypeError('Constructor requires \\'new\\'');
\tif (isNative && setPrototypeOf && (Map !== MapPolyfill)) {
\t\tself = setPrototypeOf(new Map(), getPrototypeOf(this));
\t} else {
\t\tself = this;
\t}
\tif (iterable != null) iterator(iterable);
\tif (serialize !== undefined) {
\t\tcallable(serialize);
\t\tdefineProperty(self, '_serialize', d('', serialize));
\t}
\tdefineProperties(self, {
\t\t__mapKeysData__: d('c', create(null)),
\t\t__mapValuesData__: d('c', create(null)),
\t\t__size__: d('w', 0)
\t});
\tif (!iterable) return self;
\tforOf(iterable, function (value) {
\t\tvar key = validValue(value)[0], sKey = self._serialize(key);
\t\tif (sKey == null) throw new TypeError(key + \" cannot be serialized\");
\t\tvalue = value[1];
\t\tif (hasOwnProperty.call(self.__mapKeysData__, sKey)) {
\t\t\tif (self.__mapValuesData__[sKey] === value) return;
\t\t} else {
\t\t\t++self.__size__;
\t\t}
\t\tself.__mapKeysData__[sKey] = key;
\t\tself.__mapValuesData__[sKey] = value;
\t});
\treturn self;
};
if (setPrototypeOf) setPrototypeOf(PrimitiveMap, MapPolyfill);

PrimitiveMap.prototype = create(MapPolyfill.prototype, {
\tconstructor: d(PrimitiveMap),
\t_serialize: d(function (value) {
\t\tif (value && (typeof value.toString !== 'function')) return null;
\t\treturn String(value);
\t}),
\tclear: d(function () {
\t\tif (!this.__size__) return;
\t\tclear(this.__mapKeysData__);
\t\tclear(this.__mapValuesData__);
\t\tthis.__size__ = 0;
\t\tthis.emit('_clear');
\t}),
\tdelete: d(function (key) {
\t\tvar sKey = this._serialize(key);
\t\tif (sKey == null) return false;
\t\tif (!hasOwnProperty.call(this.__mapKeysData__, sKey)) return false;
\t\tdelete this.__mapKeysData__[sKey];
\t\tdelete this.__mapValuesData__[sKey];
\t\t--this.__size__;
\t\tthis.emit('_delete', sKey);
\t\treturn true;
\t}),
\tentries: d(function () { return new Iterator(this, 'key+value'); }),
\tforEach: d(function (cb/*, thisArg*/) {
\t\tvar thisArg = arguments[1], iterator, result, sKey;
\t\tcallable(cb);
\t\titerator = this.entries();
\t\tresult = iterator._next();
\t\twhile (result !== undefined) {
\t\t\tsKey = iterator.__list__[result];
\t\t\tcall.call(cb, thisArg, this.__mapValuesData__[sKey],
\t\t\t\tthis.__mapKeysData__[sKey], this);
\t\t\tresult = iterator._next();
\t\t}
\t}),
\tget: d(function (key) {
\t\tvar sKey = this._serialize(key);
\t\tif (sKey == null) return;
\t\treturn this.__mapValuesData__[sKey];
\t}),
\thas: d(function (key) {
\t\tvar sKey = this._serialize(key);
\t\tif (sKey == null) return false;
\t\treturn hasOwnProperty.call(this.__mapKeysData__, sKey);
\t}),
\tkeys: d(function () { return new Iterator(this, 'key'); }),
\tsize: d.gs(function () { return this.__size__; }),
\tset: d(function (key, value) {
\t\tvar sKey = this._serialize(key);
\t\tif (sKey == null) throw new TypeError(key + \" cannot be serialized\");
\t\tif (hasOwnProperty.call(this.__mapKeysData__, sKey)) {
\t\t\tif (this.__mapValuesData__[sKey] === value) return this;
\t\t} else {
\t\t\t++this.__size__;
\t\t}
\t\tthis.__mapKeysData__[sKey] = key;
\t\tthis.__mapValuesData__[sKey] = value;
\t\tthis.emit('_add', sKey);
\t\treturn this;
\t}),
\tvalues: d(function () { return new Iterator(this, 'value'); })
});
";
        
        $__internal_fca74c750f381828fbf6b21f92d122fdeb9b8b2ffa0e6d023e7383158911cc28->leave($__internal_fca74c750f381828fbf6b21f92d122fdeb9b8b2ffa0e6d023e7383158911cc28_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-map/primitive/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var clear          = require('es5-ext/object/clear')
  , setPrototypeOf = require('es5-ext/object/set-prototype-of')
  , validValue     = require('es5-ext/object/valid-value')
  , callable       = require('es5-ext/object/valid-callable')
  , d              = require('d')
  , iterator       = require('es6-iterator/valid-iterable')
  , forOf          = require('es6-iterator/for-of')
  , isNative       = require('../is-native-implemented')
  , MapPolyfill    = require('../polyfill')
  , Iterator       = require('../lib/primitive-iterator')

  , call = Function.prototype.call
  , create = Object.create, defineProperty = Object.defineProperty
  , defineProperties = Object.defineProperties, getPrototypeOf = Object.getPrototypeOf
  , hasOwnProperty = Object.prototype.hasOwnProperty
  , PrimitiveMap;

module.exports = PrimitiveMap = function (/*iterable, serialize*/) {
\tvar iterable = arguments[0], serialize = arguments[1], self;
\tif (!(this instanceof PrimitiveMap)) throw new TypeError('Constructor requires \\'new\\'');
\tif (isNative && setPrototypeOf && (Map !== MapPolyfill)) {
\t\tself = setPrototypeOf(new Map(), getPrototypeOf(this));
\t} else {
\t\tself = this;
\t}
\tif (iterable != null) iterator(iterable);
\tif (serialize !== undefined) {
\t\tcallable(serialize);
\t\tdefineProperty(self, '_serialize', d('', serialize));
\t}
\tdefineProperties(self, {
\t\t__mapKeysData__: d('c', create(null)),
\t\t__mapValuesData__: d('c', create(null)),
\t\t__size__: d('w', 0)
\t});
\tif (!iterable) return self;
\tforOf(iterable, function (value) {
\t\tvar key = validValue(value)[0], sKey = self._serialize(key);
\t\tif (sKey == null) throw new TypeError(key + \" cannot be serialized\");
\t\tvalue = value[1];
\t\tif (hasOwnProperty.call(self.__mapKeysData__, sKey)) {
\t\t\tif (self.__mapValuesData__[sKey] === value) return;
\t\t} else {
\t\t\t++self.__size__;
\t\t}
\t\tself.__mapKeysData__[sKey] = key;
\t\tself.__mapValuesData__[sKey] = value;
\t});
\treturn self;
};
if (setPrototypeOf) setPrototypeOf(PrimitiveMap, MapPolyfill);

PrimitiveMap.prototype = create(MapPolyfill.prototype, {
\tconstructor: d(PrimitiveMap),
\t_serialize: d(function (value) {
\t\tif (value && (typeof value.toString !== 'function')) return null;
\t\treturn String(value);
\t}),
\tclear: d(function () {
\t\tif (!this.__size__) return;
\t\tclear(this.__mapKeysData__);
\t\tclear(this.__mapValuesData__);
\t\tthis.__size__ = 0;
\t\tthis.emit('_clear');
\t}),
\tdelete: d(function (key) {
\t\tvar sKey = this._serialize(key);
\t\tif (sKey == null) return false;
\t\tif (!hasOwnProperty.call(this.__mapKeysData__, sKey)) return false;
\t\tdelete this.__mapKeysData__[sKey];
\t\tdelete this.__mapValuesData__[sKey];
\t\t--this.__size__;
\t\tthis.emit('_delete', sKey);
\t\treturn true;
\t}),
\tentries: d(function () { return new Iterator(this, 'key+value'); }),
\tforEach: d(function (cb/*, thisArg*/) {
\t\tvar thisArg = arguments[1], iterator, result, sKey;
\t\tcallable(cb);
\t\titerator = this.entries();
\t\tresult = iterator._next();
\t\twhile (result !== undefined) {
\t\t\tsKey = iterator.__list__[result];
\t\t\tcall.call(cb, thisArg, this.__mapValuesData__[sKey],
\t\t\t\tthis.__mapKeysData__[sKey], this);
\t\t\tresult = iterator._next();
\t\t}
\t}),
\tget: d(function (key) {
\t\tvar sKey = this._serialize(key);
\t\tif (sKey == null) return;
\t\treturn this.__mapValuesData__[sKey];
\t}),
\thas: d(function (key) {
\t\tvar sKey = this._serialize(key);
\t\tif (sKey == null) return false;
\t\treturn hasOwnProperty.call(this.__mapKeysData__, sKey);
\t}),
\tkeys: d(function () { return new Iterator(this, 'key'); }),
\tsize: d.gs(function () { return this.__size__; }),
\tset: d(function (key, value) {
\t\tvar sKey = this._serialize(key);
\t\tif (sKey == null) throw new TypeError(key + \" cannot be serialized\");
\t\tif (hasOwnProperty.call(this.__mapKeysData__, sKey)) {
\t\t\tif (this.__mapValuesData__[sKey] === value) return this;
\t\t} else {
\t\t\t++this.__size__;
\t\t}
\t\tthis.__mapKeysData__[sKey] = key;
\t\tthis.__mapValuesData__[sKey] = value;
\t\tthis.emit('_add', sKey);
\t\treturn this;
\t}),
\tvalues: d(function () { return new Iterator(this, 'value'); })
});
", "node_modules/es6-map/primitive/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-map/primitive/index.js");
    }
}
