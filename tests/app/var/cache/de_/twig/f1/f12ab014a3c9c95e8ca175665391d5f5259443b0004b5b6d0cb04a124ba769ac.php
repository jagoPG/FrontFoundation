<?php

/* node_modules/es6-set/primitive/index.js */
class __TwigTemplate_c421d1ce1fb32ad3c345d062cf8239e976b4a7c1a0155717cd9f9ef71d57be9f extends Twig_Template
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
        $__internal_29058d18a55be9a7bf75895f5e31261b22b44ee617cc27610f8e4693e2071e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29058d18a55be9a7bf75895f5e31261b22b44ee617cc27610f8e4693e2071e13->enter($__internal_29058d18a55be9a7bf75895f5e31261b22b44ee617cc27610f8e4693e2071e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/primitive/index.js"));

        // line 1
        echo "'use strict';

var callable       = require('es5-ext/object/valid-callable')
  , clear          = require('es5-ext/object/clear')
  , setPrototypeOf = require('es5-ext/object/set-prototype-of')
  , d              = require('d')
  , iterator       = require('es6-iterator/valid-iterable')
  , forOf          = require('es6-iterator/for-of')
  , Set            = require('../polyfill')
  , Iterator       = require('../lib/primitive-iterator')
  , isNative       = require('../is-native-implemented')

  , create = Object.create, defineProperties = Object.defineProperties
  , defineProperty = Object.defineProperty, getPrototypeOf = Object.getPrototypeOf
  , hasOwnProperty = Object.prototype.hasOwnProperty
  , PrimitiveSet;

module.exports = PrimitiveSet = function (/*iterable, serialize*/) {
\tvar iterable = arguments[0], serialize = arguments[1], self;
\tif (!(this instanceof PrimitiveSet)) throw new TypeError('Constructor requires \\'new\\'');
\tif (isNative && setPrototypeOf) self = setPrototypeOf(new Set(), getPrototypeOf(this));
\telse self = this;
\tif (iterable != null) iterator(iterable);
\tif (serialize !== undefined) {
\t\tcallable(serialize);
\t\tdefineProperty(self, '_serialize', d('', serialize));
\t}
\tdefineProperties(self, {
\t\t__setData__: d('c', create(null)),
\t\t__size__: d('w', 0)
\t});
\tif (!iterable) return self;
\tforOf(iterable, function (value) {
\t\tvar key = self._serialize(value);
\t\tif (key == null) throw new TypeError(value + \" cannot be serialized\");
\t\tif (hasOwnProperty.call(self.__setData__, key)) return;
\t\tself.__setData__[key] = value;
\t\t++self.__size__;
\t});
\treturn self;
};
if (setPrototypeOf) setPrototypeOf(PrimitiveSet, Set);

PrimitiveSet.prototype = create(Set.prototype, {
\tconstructor: d(PrimitiveSet),
\t_serialize: d(function (value) {
\t\tif (value && (typeof value.toString !== 'function')) return null;
\t\treturn String(value);
\t}),
\tadd: d(function (value) {
\t\tvar key = this._serialize(value);
\t\tif (key == null) throw new TypeError(value + \" cannot be serialized\");
\t\tif (hasOwnProperty.call(this.__setData__, key)) return this;
\t\tthis.__setData__[key] = value;
\t\t++this.__size__;
\t\tthis.emit('_add', key);
\t\treturn this;
\t}),
\tclear: d(function () {
\t\tif (!this.__size__) return;
\t\tclear(this.__setData__);
\t\tthis.__size__ = 0;
\t\tthis.emit('_clear');
\t}),
\tdelete: d(function (value) {
\t\tvar key = this._serialize(value);
\t\tif (key == null) return false;
\t\tif (!hasOwnProperty.call(this.__setData__, key)) return false;
\t\tdelete this.__setData__[key];
\t\t--this.__size__;
\t\tthis.emit('_delete', key);
\t\treturn true;
\t}),
\tentries: d(function () { return new Iterator(this, 'key+value'); }),
\tget: d(function (key) {
\t\tkey = this._serialize(key);
\t\tif (key == null) return;
\t\treturn this.__setData__[key];
\t}),
\thas: d(function (value) {
\t\tvar key = this._serialize(value);
\t\tif (key == null) return false;
\t\treturn hasOwnProperty.call(this.__setData__, key);
\t}),
\tsize: d.gs(function () { return this.__size__; }),
\tvalues: d(function () { return new Iterator(this); })
});
";
        
        $__internal_29058d18a55be9a7bf75895f5e31261b22b44ee617cc27610f8e4693e2071e13->leave($__internal_29058d18a55be9a7bf75895f5e31261b22b44ee617cc27610f8e4693e2071e13_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/primitive/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var callable       = require('es5-ext/object/valid-callable')
  , clear          = require('es5-ext/object/clear')
  , setPrototypeOf = require('es5-ext/object/set-prototype-of')
  , d              = require('d')
  , iterator       = require('es6-iterator/valid-iterable')
  , forOf          = require('es6-iterator/for-of')
  , Set            = require('../polyfill')
  , Iterator       = require('../lib/primitive-iterator')
  , isNative       = require('../is-native-implemented')

  , create = Object.create, defineProperties = Object.defineProperties
  , defineProperty = Object.defineProperty, getPrototypeOf = Object.getPrototypeOf
  , hasOwnProperty = Object.prototype.hasOwnProperty
  , PrimitiveSet;

module.exports = PrimitiveSet = function (/*iterable, serialize*/) {
\tvar iterable = arguments[0], serialize = arguments[1], self;
\tif (!(this instanceof PrimitiveSet)) throw new TypeError('Constructor requires \\'new\\'');
\tif (isNative && setPrototypeOf) self = setPrototypeOf(new Set(), getPrototypeOf(this));
\telse self = this;
\tif (iterable != null) iterator(iterable);
\tif (serialize !== undefined) {
\t\tcallable(serialize);
\t\tdefineProperty(self, '_serialize', d('', serialize));
\t}
\tdefineProperties(self, {
\t\t__setData__: d('c', create(null)),
\t\t__size__: d('w', 0)
\t});
\tif (!iterable) return self;
\tforOf(iterable, function (value) {
\t\tvar key = self._serialize(value);
\t\tif (key == null) throw new TypeError(value + \" cannot be serialized\");
\t\tif (hasOwnProperty.call(self.__setData__, key)) return;
\t\tself.__setData__[key] = value;
\t\t++self.__size__;
\t});
\treturn self;
};
if (setPrototypeOf) setPrototypeOf(PrimitiveSet, Set);

PrimitiveSet.prototype = create(Set.prototype, {
\tconstructor: d(PrimitiveSet),
\t_serialize: d(function (value) {
\t\tif (value && (typeof value.toString !== 'function')) return null;
\t\treturn String(value);
\t}),
\tadd: d(function (value) {
\t\tvar key = this._serialize(value);
\t\tif (key == null) throw new TypeError(value + \" cannot be serialized\");
\t\tif (hasOwnProperty.call(this.__setData__, key)) return this;
\t\tthis.__setData__[key] = value;
\t\t++this.__size__;
\t\tthis.emit('_add', key);
\t\treturn this;
\t}),
\tclear: d(function () {
\t\tif (!this.__size__) return;
\t\tclear(this.__setData__);
\t\tthis.__size__ = 0;
\t\tthis.emit('_clear');
\t}),
\tdelete: d(function (value) {
\t\tvar key = this._serialize(value);
\t\tif (key == null) return false;
\t\tif (!hasOwnProperty.call(this.__setData__, key)) return false;
\t\tdelete this.__setData__[key];
\t\t--this.__size__;
\t\tthis.emit('_delete', key);
\t\treturn true;
\t}),
\tentries: d(function () { return new Iterator(this, 'key+value'); }),
\tget: d(function (key) {
\t\tkey = this._serialize(key);
\t\tif (key == null) return;
\t\treturn this.__setData__[key];
\t}),
\thas: d(function (value) {
\t\tvar key = this._serialize(value);
\t\tif (key == null) return false;
\t\treturn hasOwnProperty.call(this.__setData__, key);
\t}),
\tsize: d.gs(function () { return this.__size__; }),
\tvalues: d(function () { return new Iterator(this); })
});
", "node_modules/es6-set/primitive/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/primitive/index.js");
    }
}
