<?php

/* node_modules/es6-set/polyfill.js */
class __TwigTemplate_ca4b27a6bcc40034f3564ef90957f96b030fb925c3a327a4544b61fd858dc5c1 extends Twig_Template
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
        $__internal_bff703d2a15ee2c12f2ba030c7d2b9b441a09a7b2657b299dd4845016ad679cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bff703d2a15ee2c12f2ba030c7d2b9b441a09a7b2657b299dd4845016ad679cd->enter($__internal_bff703d2a15ee2c12f2ba030c7d2b9b441a09a7b2657b299dd4845016ad679cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/polyfill.js"));

        // line 1
        echo "'use strict';

var clear          = require('es5-ext/array/#/clear')
  , eIndexOf       = require('es5-ext/array/#/e-index-of')
  , setPrototypeOf = require('es5-ext/object/set-prototype-of')
  , callable       = require('es5-ext/object/valid-callable')
  , d              = require('d')
  , ee             = require('event-emitter')
  , Symbol         = require('es6-symbol')
  , iterator       = require('es6-iterator/valid-iterable')
  , forOf          = require('es6-iterator/for-of')
  , Iterator       = require('./lib/iterator')
  , isNative       = require('./is-native-implemented')

  , call = Function.prototype.call
  , defineProperty = Object.defineProperty, getPrototypeOf = Object.getPrototypeOf
  , SetPoly, getValues, NativeSet;

if (isNative) NativeSet = Set;

module.exports = SetPoly = function Set(/*iterable*/) {
\tvar iterable = arguments[0], self;
\tif (!(this instanceof SetPoly)) throw new TypeError('Constructor requires \\'new\\'');
\tif (isNative && setPrototypeOf) self = setPrototypeOf(new NativeSet(), getPrototypeOf(this));
\telse self = this;
\tif (iterable != null) iterator(iterable);
\tdefineProperty(self, '__setData__', d('c', []));
\tif (!iterable) return self;
\tforOf(iterable, function (value) {
\t\tif (eIndexOf.call(this, value) !== -1) return;
\t\tthis.push(value);
\t}, self.__setData__);
\treturn self;
};

if (isNative) {
\tif (setPrototypeOf) setPrototypeOf(SetPoly, NativeSet);
\tSetPoly.prototype = Object.create(NativeSet.prototype, { constructor: d(SetPoly) });
}

ee(Object.defineProperties(SetPoly.prototype, {
\tadd: d(function (value) {
\t\tif (this.has(value)) return this;
\t\tthis.emit('_add', this.__setData__.push(value) - 1, value);
\t\treturn this;
\t}),
\tclear: d(function () {
\t\tif (!this.__setData__.length) return;
\t\tclear.call(this.__setData__);
\t\tthis.emit('_clear');
\t}),
\tdelete: d(function (value) {
\t\tvar index = eIndexOf.call(this.__setData__, value);
\t\tif (index === -1) return false;
\t\tthis.__setData__.splice(index, 1);
\t\tthis.emit('_delete', index, value);
\t\treturn true;
\t}),
\tentries: d(function () { return new Iterator(this, 'key+value'); }),
\tforEach: d(function (cb/*, thisArg*/) {
\t\tvar thisArg = arguments[1], iterator, result, value;
\t\tcallable(cb);
\t\titerator = this.values();
\t\tresult = iterator._next();
\t\twhile (result !== undefined) {
\t\t\tvalue = iterator._resolve(result);
\t\t\tcall.call(cb, thisArg, value, value, this);
\t\t\tresult = iterator._next();
\t\t}
\t}),
\thas: d(function (value) {
\t\treturn (eIndexOf.call(this.__setData__, value) !== -1);
\t}),
\tkeys: d(getValues = function () { return this.values(); }),
\tsize: d.gs(function () { return this.__setData__.length; }),
\tvalues: d(function () { return new Iterator(this); }),
\ttoString: d(function () { return '[object Set]'; })
}));
defineProperty(SetPoly.prototype, Symbol.iterator, d(getValues));
defineProperty(SetPoly.prototype, Symbol.toStringTag, d('c', 'Set'));
";
        
        $__internal_bff703d2a15ee2c12f2ba030c7d2b9b441a09a7b2657b299dd4845016ad679cd->leave($__internal_bff703d2a15ee2c12f2ba030c7d2b9b441a09a7b2657b299dd4845016ad679cd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/polyfill.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var clear          = require('es5-ext/array/#/clear')
  , eIndexOf       = require('es5-ext/array/#/e-index-of')
  , setPrototypeOf = require('es5-ext/object/set-prototype-of')
  , callable       = require('es5-ext/object/valid-callable')
  , d              = require('d')
  , ee             = require('event-emitter')
  , Symbol         = require('es6-symbol')
  , iterator       = require('es6-iterator/valid-iterable')
  , forOf          = require('es6-iterator/for-of')
  , Iterator       = require('./lib/iterator')
  , isNative       = require('./is-native-implemented')

  , call = Function.prototype.call
  , defineProperty = Object.defineProperty, getPrototypeOf = Object.getPrototypeOf
  , SetPoly, getValues, NativeSet;

if (isNative) NativeSet = Set;

module.exports = SetPoly = function Set(/*iterable*/) {
\tvar iterable = arguments[0], self;
\tif (!(this instanceof SetPoly)) throw new TypeError('Constructor requires \\'new\\'');
\tif (isNative && setPrototypeOf) self = setPrototypeOf(new NativeSet(), getPrototypeOf(this));
\telse self = this;
\tif (iterable != null) iterator(iterable);
\tdefineProperty(self, '__setData__', d('c', []));
\tif (!iterable) return self;
\tforOf(iterable, function (value) {
\t\tif (eIndexOf.call(this, value) !== -1) return;
\t\tthis.push(value);
\t}, self.__setData__);
\treturn self;
};

if (isNative) {
\tif (setPrototypeOf) setPrototypeOf(SetPoly, NativeSet);
\tSetPoly.prototype = Object.create(NativeSet.prototype, { constructor: d(SetPoly) });
}

ee(Object.defineProperties(SetPoly.prototype, {
\tadd: d(function (value) {
\t\tif (this.has(value)) return this;
\t\tthis.emit('_add', this.__setData__.push(value) - 1, value);
\t\treturn this;
\t}),
\tclear: d(function () {
\t\tif (!this.__setData__.length) return;
\t\tclear.call(this.__setData__);
\t\tthis.emit('_clear');
\t}),
\tdelete: d(function (value) {
\t\tvar index = eIndexOf.call(this.__setData__, value);
\t\tif (index === -1) return false;
\t\tthis.__setData__.splice(index, 1);
\t\tthis.emit('_delete', index, value);
\t\treturn true;
\t}),
\tentries: d(function () { return new Iterator(this, 'key+value'); }),
\tforEach: d(function (cb/*, thisArg*/) {
\t\tvar thisArg = arguments[1], iterator, result, value;
\t\tcallable(cb);
\t\titerator = this.values();
\t\tresult = iterator._next();
\t\twhile (result !== undefined) {
\t\t\tvalue = iterator._resolve(result);
\t\t\tcall.call(cb, thisArg, value, value, this);
\t\t\tresult = iterator._next();
\t\t}
\t}),
\thas: d(function (value) {
\t\treturn (eIndexOf.call(this.__setData__, value) !== -1);
\t}),
\tkeys: d(getValues = function () { return this.values(); }),
\tsize: d.gs(function () { return this.__setData__.length; }),
\tvalues: d(function () { return new Iterator(this); }),
\ttoString: d(function () { return '[object Set]'; })
}));
defineProperty(SetPoly.prototype, Symbol.iterator, d(getValues));
defineProperty(SetPoly.prototype, Symbol.toStringTag, d('c', 'Set'));
", "node_modules/es6-set/polyfill.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/polyfill.js");
    }
}
