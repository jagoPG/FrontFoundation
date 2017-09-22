<?php

/* node_modules/es6-weak-map/polyfill.js */
class __TwigTemplate_11f878b3adbe8b9920a1351111b5e0a54d4e54cba450922b842aa846e67f3418 extends Twig_Template
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
        $__internal_1287d0a2ebfddfcc387177fef1cdec244e0825ea43ce1ff54574b8739b0b901c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1287d0a2ebfddfcc387177fef1cdec244e0825ea43ce1ff54574b8739b0b901c->enter($__internal_1287d0a2ebfddfcc387177fef1cdec244e0825ea43ce1ff54574b8739b0b901c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-weak-map/polyfill.js"));

        // line 1
        echo "'use strict';

var setPrototypeOf    = require('es5-ext/object/set-prototype-of')
  , object            = require('es5-ext/object/valid-object')
  , value             = require('es5-ext/object/valid-value')
  , randomUniq        = require('es5-ext/string/random-uniq')
  , d                 = require('d')
  , getIterator       = require('es6-iterator/get')
  , forOf             = require('es6-iterator/for-of')
  , toStringTagSymbol = require('es6-symbol').toStringTag
  , isNative          = require('./is-native-implemented')

  , isArray = Array.isArray, defineProperty = Object.defineProperty
  , hasOwnProperty = Object.prototype.hasOwnProperty, getPrototypeOf = Object.getPrototypeOf
  , WeakMapPoly;

module.exports = WeakMapPoly = function (/*iterable*/) {
\tvar iterable = arguments[0], self;
\tif (!(this instanceof WeakMapPoly)) throw new TypeError('Constructor requires \\'new\\'');
\tif (isNative && setPrototypeOf && (WeakMap !== WeakMapPoly)) {
\t\tself = setPrototypeOf(new WeakMap(), getPrototypeOf(this));
\t} else {
\t\tself = this;
\t}
\tif (iterable != null) {
\t\tif (!isArray(iterable)) iterable = getIterator(iterable);
\t}
\tdefineProperty(self, '__weakMapData__', d('c', '\$weakMap\$' + randomUniq()));
\tif (!iterable) return self;
\tforOf(iterable, function (val) {
\t\tvalue(val);
\t\tself.set(val[0], val[1]);
\t});
\treturn self;
};

if (isNative) {
\tif (setPrototypeOf) setPrototypeOf(WeakMapPoly, WeakMap);
\tWeakMapPoly.prototype = Object.create(WeakMap.prototype, {
\t\tconstructor: d(WeakMapPoly)
\t});
}

Object.defineProperties(WeakMapPoly.prototype, {
\tdelete: d(function (key) {
\t\tif (hasOwnProperty.call(object(key), this.__weakMapData__)) {
\t\t\tdelete key[this.__weakMapData__];
\t\t\treturn true;
\t\t}
\t\treturn false;
\t}),
\tget: d(function (key) {
\t\tif (hasOwnProperty.call(object(key), this.__weakMapData__)) {
\t\t\treturn key[this.__weakMapData__];
\t\t}
\t}),
\thas: d(function (key) {
\t\treturn hasOwnProperty.call(object(key), this.__weakMapData__);
\t}),
\tset: d(function (key, value) {
\t\tdefineProperty(object(key), this.__weakMapData__, d('c', value));
\t\treturn this;
\t}),
\ttoString: d(function () { return '[object WeakMap]'; })
});
defineProperty(WeakMapPoly.prototype, toStringTagSymbol, d('c', 'WeakMap'));
";
        
        $__internal_1287d0a2ebfddfcc387177fef1cdec244e0825ea43ce1ff54574b8739b0b901c->leave($__internal_1287d0a2ebfddfcc387177fef1cdec244e0825ea43ce1ff54574b8739b0b901c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-weak-map/polyfill.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var setPrototypeOf    = require('es5-ext/object/set-prototype-of')
  , object            = require('es5-ext/object/valid-object')
  , value             = require('es5-ext/object/valid-value')
  , randomUniq        = require('es5-ext/string/random-uniq')
  , d                 = require('d')
  , getIterator       = require('es6-iterator/get')
  , forOf             = require('es6-iterator/for-of')
  , toStringTagSymbol = require('es6-symbol').toStringTag
  , isNative          = require('./is-native-implemented')

  , isArray = Array.isArray, defineProperty = Object.defineProperty
  , hasOwnProperty = Object.prototype.hasOwnProperty, getPrototypeOf = Object.getPrototypeOf
  , WeakMapPoly;

module.exports = WeakMapPoly = function (/*iterable*/) {
\tvar iterable = arguments[0], self;
\tif (!(this instanceof WeakMapPoly)) throw new TypeError('Constructor requires \\'new\\'');
\tif (isNative && setPrototypeOf && (WeakMap !== WeakMapPoly)) {
\t\tself = setPrototypeOf(new WeakMap(), getPrototypeOf(this));
\t} else {
\t\tself = this;
\t}
\tif (iterable != null) {
\t\tif (!isArray(iterable)) iterable = getIterator(iterable);
\t}
\tdefineProperty(self, '__weakMapData__', d('c', '\$weakMap\$' + randomUniq()));
\tif (!iterable) return self;
\tforOf(iterable, function (val) {
\t\tvalue(val);
\t\tself.set(val[0], val[1]);
\t});
\treturn self;
};

if (isNative) {
\tif (setPrototypeOf) setPrototypeOf(WeakMapPoly, WeakMap);
\tWeakMapPoly.prototype = Object.create(WeakMap.prototype, {
\t\tconstructor: d(WeakMapPoly)
\t});
}

Object.defineProperties(WeakMapPoly.prototype, {
\tdelete: d(function (key) {
\t\tif (hasOwnProperty.call(object(key), this.__weakMapData__)) {
\t\t\tdelete key[this.__weakMapData__];
\t\t\treturn true;
\t\t}
\t\treturn false;
\t}),
\tget: d(function (key) {
\t\tif (hasOwnProperty.call(object(key), this.__weakMapData__)) {
\t\t\treturn key[this.__weakMapData__];
\t\t}
\t}),
\thas: d(function (key) {
\t\treturn hasOwnProperty.call(object(key), this.__weakMapData__);
\t}),
\tset: d(function (key, value) {
\t\tdefineProperty(object(key), this.__weakMapData__, d('c', value));
\t\treturn this;
\t}),
\ttoString: d(function () { return '[object WeakMap]'; })
});
defineProperty(WeakMapPoly.prototype, toStringTagSymbol, d('c', 'WeakMap'));
", "node_modules/es6-weak-map/polyfill.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-weak-map/polyfill.js");
    }
}
