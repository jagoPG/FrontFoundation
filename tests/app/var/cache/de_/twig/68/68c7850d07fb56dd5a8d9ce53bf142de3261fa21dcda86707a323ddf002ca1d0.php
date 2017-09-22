<?php

/* node_modules/es6-map/polyfill.js */
class __TwigTemplate_843ea9a8257cd8d285fe65c5683b8a4b94018d072de44167369e3bf6154602d7 extends Twig_Template
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
        $__internal_eb2edf3426dd27d8e66af733eaba2c51803bef1ff5e338504870572013301fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb2edf3426dd27d8e66af733eaba2c51803bef1ff5e338504870572013301fe0->enter($__internal_eb2edf3426dd27d8e66af733eaba2c51803bef1ff5e338504870572013301fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-map/polyfill.js"));

        // line 1
        echo "'use strict';

var clear          = require('es5-ext/array/#/clear')
  , eIndexOf       = require('es5-ext/array/#/e-index-of')
  , setPrototypeOf = require('es5-ext/object/set-prototype-of')
  , callable       = require('es5-ext/object/valid-callable')
  , validValue     = require('es5-ext/object/valid-value')
  , d              = require('d')
  , ee             = require('event-emitter')
  , Symbol         = require('es6-symbol')
  , iterator       = require('es6-iterator/valid-iterable')
  , forOf          = require('es6-iterator/for-of')
  , Iterator       = require('./lib/iterator')
  , isNative       = require('./is-native-implemented')

  , call = Function.prototype.call
  , defineProperties = Object.defineProperties, getPrototypeOf = Object.getPrototypeOf
  , MapPoly;

module.exports = MapPoly = function (/*iterable*/) {
\tvar iterable = arguments[0], keys, values, self;
\tif (!(this instanceof MapPoly)) throw new TypeError('Constructor requires \\'new\\'');
\tif (isNative && setPrototypeOf && (Map !== MapPoly)) {
\t\tself = setPrototypeOf(new Map(), getPrototypeOf(this));
\t} else {
\t\tself = this;
\t}
\tif (iterable != null) iterator(iterable);
\tdefineProperties(self, {
\t\t__mapKeysData__: d('c', keys = []),
\t\t__mapValuesData__: d('c', values = [])
\t});
\tif (!iterable) return self;
\tforOf(iterable, function (value) {
\t\tvar key = validValue(value)[0];
\t\tvalue = value[1];
\t\tif (eIndexOf.call(keys, key) !== -1) return;
\t\tkeys.push(key);
\t\tvalues.push(value);
\t}, self);
\treturn self;
};

if (isNative) {
\tif (setPrototypeOf) setPrototypeOf(MapPoly, Map);
\tMapPoly.prototype = Object.create(Map.prototype, {
\t\tconstructor: d(MapPoly)
\t});
}

ee(defineProperties(MapPoly.prototype, {
\tclear: d(function () {
\t\tif (!this.__mapKeysData__.length) return;
\t\tclear.call(this.__mapKeysData__);
\t\tclear.call(this.__mapValuesData__);
\t\tthis.emit('_clear');
\t}),
\tdelete: d(function (key) {
\t\tvar index = eIndexOf.call(this.__mapKeysData__, key);
\t\tif (index === -1) return false;
\t\tthis.__mapKeysData__.splice(index, 1);
\t\tthis.__mapValuesData__.splice(index, 1);
\t\tthis.emit('_delete', index, key);
\t\treturn true;
\t}),
\tentries: d(function () { return new Iterator(this, 'key+value'); }),
\tforEach: d(function (cb/*, thisArg*/) {
\t\tvar thisArg = arguments[1], iterator, result;
\t\tcallable(cb);
\t\titerator = this.entries();
\t\tresult = iterator._next();
\t\twhile (result !== undefined) {
\t\t\tcall.call(cb, thisArg, this.__mapValuesData__[result],
\t\t\t\tthis.__mapKeysData__[result], this);
\t\t\tresult = iterator._next();
\t\t}
\t}),
\tget: d(function (key) {
\t\tvar index = eIndexOf.call(this.__mapKeysData__, key);
\t\tif (index === -1) return;
\t\treturn this.__mapValuesData__[index];
\t}),
\thas: d(function (key) {
\t\treturn (eIndexOf.call(this.__mapKeysData__, key) !== -1);
\t}),
\tkeys: d(function () { return new Iterator(this, 'key'); }),
\tset: d(function (key, value) {
\t\tvar index = eIndexOf.call(this.__mapKeysData__, key), emit;
\t\tif (index === -1) {
\t\t\tindex = this.__mapKeysData__.push(key) - 1;
\t\t\temit = true;
\t\t}
\t\tthis.__mapValuesData__[index] = value;
\t\tif (emit) this.emit('_add', index, key);
\t\treturn this;
\t}),
\tsize: d.gs(function () { return this.__mapKeysData__.length; }),
\tvalues: d(function () { return new Iterator(this, 'value'); }),
\ttoString: d(function () { return '[object Map]'; })
}));
Object.defineProperty(MapPoly.prototype, Symbol.iterator, d(function () {
\treturn this.entries();
}));
Object.defineProperty(MapPoly.prototype, Symbol.toStringTag, d('c', 'Map'));
";
        
        $__internal_eb2edf3426dd27d8e66af733eaba2c51803bef1ff5e338504870572013301fe0->leave($__internal_eb2edf3426dd27d8e66af733eaba2c51803bef1ff5e338504870572013301fe0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-map/polyfill.js";
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
  , validValue     = require('es5-ext/object/valid-value')
  , d              = require('d')
  , ee             = require('event-emitter')
  , Symbol         = require('es6-symbol')
  , iterator       = require('es6-iterator/valid-iterable')
  , forOf          = require('es6-iterator/for-of')
  , Iterator       = require('./lib/iterator')
  , isNative       = require('./is-native-implemented')

  , call = Function.prototype.call
  , defineProperties = Object.defineProperties, getPrototypeOf = Object.getPrototypeOf
  , MapPoly;

module.exports = MapPoly = function (/*iterable*/) {
\tvar iterable = arguments[0], keys, values, self;
\tif (!(this instanceof MapPoly)) throw new TypeError('Constructor requires \\'new\\'');
\tif (isNative && setPrototypeOf && (Map !== MapPoly)) {
\t\tself = setPrototypeOf(new Map(), getPrototypeOf(this));
\t} else {
\t\tself = this;
\t}
\tif (iterable != null) iterator(iterable);
\tdefineProperties(self, {
\t\t__mapKeysData__: d('c', keys = []),
\t\t__mapValuesData__: d('c', values = [])
\t});
\tif (!iterable) return self;
\tforOf(iterable, function (value) {
\t\tvar key = validValue(value)[0];
\t\tvalue = value[1];
\t\tif (eIndexOf.call(keys, key) !== -1) return;
\t\tkeys.push(key);
\t\tvalues.push(value);
\t}, self);
\treturn self;
};

if (isNative) {
\tif (setPrototypeOf) setPrototypeOf(MapPoly, Map);
\tMapPoly.prototype = Object.create(Map.prototype, {
\t\tconstructor: d(MapPoly)
\t});
}

ee(defineProperties(MapPoly.prototype, {
\tclear: d(function () {
\t\tif (!this.__mapKeysData__.length) return;
\t\tclear.call(this.__mapKeysData__);
\t\tclear.call(this.__mapValuesData__);
\t\tthis.emit('_clear');
\t}),
\tdelete: d(function (key) {
\t\tvar index = eIndexOf.call(this.__mapKeysData__, key);
\t\tif (index === -1) return false;
\t\tthis.__mapKeysData__.splice(index, 1);
\t\tthis.__mapValuesData__.splice(index, 1);
\t\tthis.emit('_delete', index, key);
\t\treturn true;
\t}),
\tentries: d(function () { return new Iterator(this, 'key+value'); }),
\tforEach: d(function (cb/*, thisArg*/) {
\t\tvar thisArg = arguments[1], iterator, result;
\t\tcallable(cb);
\t\titerator = this.entries();
\t\tresult = iterator._next();
\t\twhile (result !== undefined) {
\t\t\tcall.call(cb, thisArg, this.__mapValuesData__[result],
\t\t\t\tthis.__mapKeysData__[result], this);
\t\t\tresult = iterator._next();
\t\t}
\t}),
\tget: d(function (key) {
\t\tvar index = eIndexOf.call(this.__mapKeysData__, key);
\t\tif (index === -1) return;
\t\treturn this.__mapValuesData__[index];
\t}),
\thas: d(function (key) {
\t\treturn (eIndexOf.call(this.__mapKeysData__, key) !== -1);
\t}),
\tkeys: d(function () { return new Iterator(this, 'key'); }),
\tset: d(function (key, value) {
\t\tvar index = eIndexOf.call(this.__mapKeysData__, key), emit;
\t\tif (index === -1) {
\t\t\tindex = this.__mapKeysData__.push(key) - 1;
\t\t\temit = true;
\t\t}
\t\tthis.__mapValuesData__[index] = value;
\t\tif (emit) this.emit('_add', index, key);
\t\treturn this;
\t}),
\tsize: d.gs(function () { return this.__mapKeysData__.length; }),
\tvalues: d(function () { return new Iterator(this, 'value'); }),
\ttoString: d(function () { return '[object Map]'; })
}));
Object.defineProperty(MapPoly.prototype, Symbol.iterator, d(function () {
\treturn this.entries();
}));
Object.defineProperty(MapPoly.prototype, Symbol.toStringTag, d('c', 'Map'));
", "node_modules/es6-map/polyfill.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-map/polyfill.js");
    }
}
