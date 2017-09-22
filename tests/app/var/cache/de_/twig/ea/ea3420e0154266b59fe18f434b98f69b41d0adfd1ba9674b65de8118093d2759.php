<?php

/* node_modules/d/lazy.js */
class __TwigTemplate_0f73d9df7bf43d81fab237acc4e95e8f17d0ae03eac475c280fdf169bb4b4c3a extends Twig_Template
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
        $__internal_8267655c35185414a176e14b0923cb390b3924f47544e264b39dda1d740d5ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8267655c35185414a176e14b0923cb390b3924f47544e264b39dda1d740d5ef8->enter($__internal_8267655c35185414a176e14b0923cb390b3924f47544e264b39dda1d740d5ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/d/lazy.js"));

        // line 1
        echo "'use strict';

var map        = require('es5-ext/object/map')
  , isCallable = require('es5-ext/object/is-callable')
  , validValue = require('es5-ext/object/valid-value')
  , contains   = require('es5-ext/string/#/contains')

  , call = Function.prototype.call
  , defineProperty = Object.defineProperty
  , getOwnPropertyDescriptor = Object.getOwnPropertyDescriptor
  , getPrototypeOf = Object.getPrototypeOf
  , hasOwnProperty = Object.prototype.hasOwnProperty
  , cacheDesc = { configurable: false, enumerable: false, writable: false,
\t\tvalue: null }
  , define;

define = function (name, options) {
\tvar value, dgs, cacheName, desc, writable = false, resolvable
\t  , flat;
\toptions = Object(validValue(options));
\tcacheName = options.cacheName;
\tflat = options.flat;
\tif (cacheName == null) cacheName = name;
\tdelete options.cacheName;
\tvalue = options.value;
\tresolvable = isCallable(value);
\tdelete options.value;
\tdgs = { configurable: Boolean(options.configurable),
\t\tenumerable: Boolean(options.enumerable) };
\tif (name !== cacheName) {
\t\tdgs.get = function () {
\t\t\tif (hasOwnProperty.call(this, cacheName)) return this[cacheName];
\t\t\tcacheDesc.value = resolvable ? call.call(value, this, options) : value;
\t\t\tcacheDesc.writable = writable;
\t\t\tdefineProperty(this, cacheName, cacheDesc);
\t\t\tcacheDesc.value = null;
\t\t\tif (desc) defineProperty(this, name, desc);
\t\t\treturn this[cacheName];
\t\t};
\t} else if (!flat) {
\t\tdgs.get = function self() {
\t\t\tvar ownDesc;
\t\t\tif (hasOwnProperty.call(this, name)) {
\t\t\t\townDesc = getOwnPropertyDescriptor(this, name);
\t\t\t\t// It happens in Safari, that getter is still called after property
\t\t\t\t// was defined with a value, following workarounds that
\t\t\t\t// While in IE11 it may happen that here ownDesc is undefined (go figure)
\t\t\t\tif (ownDesc) {
\t\t\t\t\tif (ownDesc.hasOwnProperty('value')) return ownDesc.value;
\t\t\t\t\tif ((typeof ownDesc.get === 'function') && (ownDesc.get !== self)) {
\t\t\t\t\t\treturn ownDesc.get.call(this);
\t\t\t\t\t}
\t\t\t\t\treturn value;
\t\t\t\t}
\t\t\t}
\t\t\tdesc.value = resolvable ? call.call(value, this, options) : value;
\t\t\tdefineProperty(this, name, desc);
\t\t\tdesc.value = null;
\t\t\treturn this[name];
\t\t};
\t} else {
\t\tdgs.get = function self() {
\t\t\tvar base = this, ownDesc;
\t\t\tif (hasOwnProperty.call(this, name)) {
\t\t\t\t// It happens in Safari, that getter is still called after property
\t\t\t\t// was defined with a value, following workarounds that
\t\t\t\townDesc = getOwnPropertyDescriptor(this, name);
\t\t\t\tif (ownDesc.hasOwnProperty('value')) return ownDesc.value;
\t\t\t\tif ((typeof ownDesc.get === 'function') && (ownDesc.get !== self)) {
\t\t\t\t\treturn ownDesc.get.call(this);
\t\t\t\t}
\t\t\t}
\t\t\twhile (!hasOwnProperty.call(base, name)) base = getPrototypeOf(base);
\t\t\tdesc.value = resolvable ? call.call(value, base, options) : value;
\t\t\tdefineProperty(base, name, desc);
\t\t\tdesc.value = null;
\t\t\treturn base[name];
\t\t};
\t}
\tdgs.set = function (value) {
\t\tif (hasOwnProperty.call(this, name)) {
\t\t\tthrow new TypeError(\"Cannot assign to lazy defined '\" + name + \"' property of \" + this);
\t\t}
\t\tdgs.get.call(this);
\t\tthis[cacheName] = value;
\t};
\tif (options.desc) {
\t\tdesc = {
\t\t\tconfigurable: contains.call(options.desc, 'c'),
\t\t\tenumerable: contains.call(options.desc, 'e')
\t\t};
\t\tif (cacheName === name) {
\t\t\tdesc.writable = contains.call(options.desc, 'w');
\t\t\tdesc.value = null;
\t\t} else {
\t\t\twritable = contains.call(options.desc, 'w');
\t\t\tdesc.get = dgs.get;
\t\t\tdesc.set = dgs.set;
\t\t}
\t\tdelete options.desc;
\t} else if (cacheName === name) {
\t\tdesc = {
\t\t\tconfigurable: Boolean(options.configurable),
\t\t\tenumerable: Boolean(options.enumerable),
\t\t\twritable: Boolean(options.writable),
\t\t\tvalue: null
\t\t};
\t}
\tdelete options.configurable;
\tdelete options.enumerable;
\tdelete options.writable;
\treturn dgs;
};

module.exports = function (props) {
\treturn map(props, function (desc, name) { return define(name, desc); });
};
";
        
        $__internal_8267655c35185414a176e14b0923cb390b3924f47544e264b39dda1d740d5ef8->leave($__internal_8267655c35185414a176e14b0923cb390b3924f47544e264b39dda1d740d5ef8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/d/lazy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var map        = require('es5-ext/object/map')
  , isCallable = require('es5-ext/object/is-callable')
  , validValue = require('es5-ext/object/valid-value')
  , contains   = require('es5-ext/string/#/contains')

  , call = Function.prototype.call
  , defineProperty = Object.defineProperty
  , getOwnPropertyDescriptor = Object.getOwnPropertyDescriptor
  , getPrototypeOf = Object.getPrototypeOf
  , hasOwnProperty = Object.prototype.hasOwnProperty
  , cacheDesc = { configurable: false, enumerable: false, writable: false,
\t\tvalue: null }
  , define;

define = function (name, options) {
\tvar value, dgs, cacheName, desc, writable = false, resolvable
\t  , flat;
\toptions = Object(validValue(options));
\tcacheName = options.cacheName;
\tflat = options.flat;
\tif (cacheName == null) cacheName = name;
\tdelete options.cacheName;
\tvalue = options.value;
\tresolvable = isCallable(value);
\tdelete options.value;
\tdgs = { configurable: Boolean(options.configurable),
\t\tenumerable: Boolean(options.enumerable) };
\tif (name !== cacheName) {
\t\tdgs.get = function () {
\t\t\tif (hasOwnProperty.call(this, cacheName)) return this[cacheName];
\t\t\tcacheDesc.value = resolvable ? call.call(value, this, options) : value;
\t\t\tcacheDesc.writable = writable;
\t\t\tdefineProperty(this, cacheName, cacheDesc);
\t\t\tcacheDesc.value = null;
\t\t\tif (desc) defineProperty(this, name, desc);
\t\t\treturn this[cacheName];
\t\t};
\t} else if (!flat) {
\t\tdgs.get = function self() {
\t\t\tvar ownDesc;
\t\t\tif (hasOwnProperty.call(this, name)) {
\t\t\t\townDesc = getOwnPropertyDescriptor(this, name);
\t\t\t\t// It happens in Safari, that getter is still called after property
\t\t\t\t// was defined with a value, following workarounds that
\t\t\t\t// While in IE11 it may happen that here ownDesc is undefined (go figure)
\t\t\t\tif (ownDesc) {
\t\t\t\t\tif (ownDesc.hasOwnProperty('value')) return ownDesc.value;
\t\t\t\t\tif ((typeof ownDesc.get === 'function') && (ownDesc.get !== self)) {
\t\t\t\t\t\treturn ownDesc.get.call(this);
\t\t\t\t\t}
\t\t\t\t\treturn value;
\t\t\t\t}
\t\t\t}
\t\t\tdesc.value = resolvable ? call.call(value, this, options) : value;
\t\t\tdefineProperty(this, name, desc);
\t\t\tdesc.value = null;
\t\t\treturn this[name];
\t\t};
\t} else {
\t\tdgs.get = function self() {
\t\t\tvar base = this, ownDesc;
\t\t\tif (hasOwnProperty.call(this, name)) {
\t\t\t\t// It happens in Safari, that getter is still called after property
\t\t\t\t// was defined with a value, following workarounds that
\t\t\t\townDesc = getOwnPropertyDescriptor(this, name);
\t\t\t\tif (ownDesc.hasOwnProperty('value')) return ownDesc.value;
\t\t\t\tif ((typeof ownDesc.get === 'function') && (ownDesc.get !== self)) {
\t\t\t\t\treturn ownDesc.get.call(this);
\t\t\t\t}
\t\t\t}
\t\t\twhile (!hasOwnProperty.call(base, name)) base = getPrototypeOf(base);
\t\t\tdesc.value = resolvable ? call.call(value, base, options) : value;
\t\t\tdefineProperty(base, name, desc);
\t\t\tdesc.value = null;
\t\t\treturn base[name];
\t\t};
\t}
\tdgs.set = function (value) {
\t\tif (hasOwnProperty.call(this, name)) {
\t\t\tthrow new TypeError(\"Cannot assign to lazy defined '\" + name + \"' property of \" + this);
\t\t}
\t\tdgs.get.call(this);
\t\tthis[cacheName] = value;
\t};
\tif (options.desc) {
\t\tdesc = {
\t\t\tconfigurable: contains.call(options.desc, 'c'),
\t\t\tenumerable: contains.call(options.desc, 'e')
\t\t};
\t\tif (cacheName === name) {
\t\t\tdesc.writable = contains.call(options.desc, 'w');
\t\t\tdesc.value = null;
\t\t} else {
\t\t\twritable = contains.call(options.desc, 'w');
\t\t\tdesc.get = dgs.get;
\t\t\tdesc.set = dgs.set;
\t\t}
\t\tdelete options.desc;
\t} else if (cacheName === name) {
\t\tdesc = {
\t\t\tconfigurable: Boolean(options.configurable),
\t\t\tenumerable: Boolean(options.enumerable),
\t\t\twritable: Boolean(options.writable),
\t\t\tvalue: null
\t\t};
\t}
\tdelete options.configurable;
\tdelete options.enumerable;
\tdelete options.writable;
\treturn dgs;
};

module.exports = function (props) {
\treturn map(props, function (desc, name) { return define(name, desc); });
};
", "node_modules/d/lazy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/d/lazy.js");
    }
}
