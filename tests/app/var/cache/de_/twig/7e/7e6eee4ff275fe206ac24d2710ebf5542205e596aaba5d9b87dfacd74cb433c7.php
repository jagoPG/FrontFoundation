<?php

/* node_modules/object-keys/index.js */
class __TwigTemplate_f93adfc163f09b92de7fd9d9a81f558284905217ca51749c821f584ddaabfec2 extends Twig_Template
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
        $__internal_5f814becc91cd40912db767c96d2436b85436054fe8a74ce7491f05b23b47397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f814becc91cd40912db767c96d2436b85436054fe8a74ce7491f05b23b47397->enter($__internal_5f814becc91cd40912db767c96d2436b85436054fe8a74ce7491f05b23b47397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/object-keys/index.js"));

        // line 1
        echo "'use strict';

// modified from https://github.com/es-shims/es5-shim
var has = Object.prototype.hasOwnProperty;
var toStr = Object.prototype.toString;
var slice = Array.prototype.slice;
var isArgs = require('./isArguments');
var isEnumerable = Object.prototype.propertyIsEnumerable;
var hasDontEnumBug = !isEnumerable.call({ toString: null }, 'toString');
var hasProtoEnumBug = isEnumerable.call(function () {}, 'prototype');
var dontEnums = [
\t'toString',
\t'toLocaleString',
\t'valueOf',
\t'hasOwnProperty',
\t'isPrototypeOf',
\t'propertyIsEnumerable',
\t'constructor'
];
var equalsConstructorPrototype = function (o) {
\tvar ctor = o.constructor;
\treturn ctor && ctor.prototype === o;
};
var excludedKeys = {
\t\$console: true,
\t\$external: true,
\t\$frame: true,
\t\$frameElement: true,
\t\$frames: true,
\t\$innerHeight: true,
\t\$innerWidth: true,
\t\$outerHeight: true,
\t\$outerWidth: true,
\t\$pageXOffset: true,
\t\$pageYOffset: true,
\t\$parent: true,
\t\$scrollLeft: true,
\t\$scrollTop: true,
\t\$scrollX: true,
\t\$scrollY: true,
\t\$self: true,
\t\$webkitIndexedDB: true,
\t\$webkitStorageInfo: true,
\t\$window: true
};
var hasAutomationEqualityBug = (function () {
\t/* global window */
\tif (typeof window === 'undefined') { return false; }
\tfor (var k in window) {
\t\ttry {
\t\t\tif (!excludedKeys['\$' + k] && has.call(window, k) && window[k] !== null && typeof window[k] === 'object') {
\t\t\t\ttry {
\t\t\t\t\tequalsConstructorPrototype(window[k]);
\t\t\t\t} catch (e) {
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t} catch (e) {
\t\t\treturn true;
\t\t}
\t}
\treturn false;
}());
var equalsConstructorPrototypeIfNotBuggy = function (o) {
\t/* global window */
\tif (typeof window === 'undefined' || !hasAutomationEqualityBug) {
\t\treturn equalsConstructorPrototype(o);
\t}
\ttry {
\t\treturn equalsConstructorPrototype(o);
\t} catch (e) {
\t\treturn false;
\t}
};

var keysShim = function keys(object) {
\tvar isObject = object !== null && typeof object === 'object';
\tvar isFunction = toStr.call(object) === '[object Function]';
\tvar isArguments = isArgs(object);
\tvar isString = isObject && toStr.call(object) === '[object String]';
\tvar theKeys = [];

\tif (!isObject && !isFunction && !isArguments) {
\t\tthrow new TypeError('Object.keys called on a non-object');
\t}

\tvar skipProto = hasProtoEnumBug && isFunction;
\tif (isString && object.length > 0 && !has.call(object, 0)) {
\t\tfor (var i = 0; i < object.length; ++i) {
\t\t\ttheKeys.push(String(i));
\t\t}
\t}

\tif (isArguments && object.length > 0) {
\t\tfor (var j = 0; j < object.length; ++j) {
\t\t\ttheKeys.push(String(j));
\t\t}
\t} else {
\t\tfor (var name in object) {
\t\t\tif (!(skipProto && name === 'prototype') && has.call(object, name)) {
\t\t\t\ttheKeys.push(String(name));
\t\t\t}
\t\t}
\t}

\tif (hasDontEnumBug) {
\t\tvar skipConstructor = equalsConstructorPrototypeIfNotBuggy(object);

\t\tfor (var k = 0; k < dontEnums.length; ++k) {
\t\t\tif (!(skipConstructor && dontEnums[k] === 'constructor') && has.call(object, dontEnums[k])) {
\t\t\t\ttheKeys.push(dontEnums[k]);
\t\t\t}
\t\t}
\t}
\treturn theKeys;
};

keysShim.shim = function shimObjectKeys() {
\tif (Object.keys) {
\t\tvar keysWorksWithArguments = (function () {
\t\t\t// Safari 5.0 bug
\t\t\treturn (Object.keys(arguments) || '').length === 2;
\t\t}(1, 2));
\t\tif (!keysWorksWithArguments) {
\t\t\tvar originalKeys = Object.keys;
\t\t\tObject.keys = function keys(object) {
\t\t\t\tif (isArgs(object)) {
\t\t\t\t\treturn originalKeys(slice.call(object));
\t\t\t\t} else {
\t\t\t\t\treturn originalKeys(object);
\t\t\t\t}
\t\t\t};
\t\t}
\t} else {
\t\tObject.keys = keysShim;
\t}
\treturn Object.keys || keysShim;
};

module.exports = keysShim;
";
        
        $__internal_5f814becc91cd40912db767c96d2436b85436054fe8a74ce7491f05b23b47397->leave($__internal_5f814becc91cd40912db767c96d2436b85436054fe8a74ce7491f05b23b47397_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/object-keys/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

// modified from https://github.com/es-shims/es5-shim
var has = Object.prototype.hasOwnProperty;
var toStr = Object.prototype.toString;
var slice = Array.prototype.slice;
var isArgs = require('./isArguments');
var isEnumerable = Object.prototype.propertyIsEnumerable;
var hasDontEnumBug = !isEnumerable.call({ toString: null }, 'toString');
var hasProtoEnumBug = isEnumerable.call(function () {}, 'prototype');
var dontEnums = [
\t'toString',
\t'toLocaleString',
\t'valueOf',
\t'hasOwnProperty',
\t'isPrototypeOf',
\t'propertyIsEnumerable',
\t'constructor'
];
var equalsConstructorPrototype = function (o) {
\tvar ctor = o.constructor;
\treturn ctor && ctor.prototype === o;
};
var excludedKeys = {
\t\$console: true,
\t\$external: true,
\t\$frame: true,
\t\$frameElement: true,
\t\$frames: true,
\t\$innerHeight: true,
\t\$innerWidth: true,
\t\$outerHeight: true,
\t\$outerWidth: true,
\t\$pageXOffset: true,
\t\$pageYOffset: true,
\t\$parent: true,
\t\$scrollLeft: true,
\t\$scrollTop: true,
\t\$scrollX: true,
\t\$scrollY: true,
\t\$self: true,
\t\$webkitIndexedDB: true,
\t\$webkitStorageInfo: true,
\t\$window: true
};
var hasAutomationEqualityBug = (function () {
\t/* global window */
\tif (typeof window === 'undefined') { return false; }
\tfor (var k in window) {
\t\ttry {
\t\t\tif (!excludedKeys['\$' + k] && has.call(window, k) && window[k] !== null && typeof window[k] === 'object') {
\t\t\t\ttry {
\t\t\t\t\tequalsConstructorPrototype(window[k]);
\t\t\t\t} catch (e) {
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t} catch (e) {
\t\t\treturn true;
\t\t}
\t}
\treturn false;
}());
var equalsConstructorPrototypeIfNotBuggy = function (o) {
\t/* global window */
\tif (typeof window === 'undefined' || !hasAutomationEqualityBug) {
\t\treturn equalsConstructorPrototype(o);
\t}
\ttry {
\t\treturn equalsConstructorPrototype(o);
\t} catch (e) {
\t\treturn false;
\t}
};

var keysShim = function keys(object) {
\tvar isObject = object !== null && typeof object === 'object';
\tvar isFunction = toStr.call(object) === '[object Function]';
\tvar isArguments = isArgs(object);
\tvar isString = isObject && toStr.call(object) === '[object String]';
\tvar theKeys = [];

\tif (!isObject && !isFunction && !isArguments) {
\t\tthrow new TypeError('Object.keys called on a non-object');
\t}

\tvar skipProto = hasProtoEnumBug && isFunction;
\tif (isString && object.length > 0 && !has.call(object, 0)) {
\t\tfor (var i = 0; i < object.length; ++i) {
\t\t\ttheKeys.push(String(i));
\t\t}
\t}

\tif (isArguments && object.length > 0) {
\t\tfor (var j = 0; j < object.length; ++j) {
\t\t\ttheKeys.push(String(j));
\t\t}
\t} else {
\t\tfor (var name in object) {
\t\t\tif (!(skipProto && name === 'prototype') && has.call(object, name)) {
\t\t\t\ttheKeys.push(String(name));
\t\t\t}
\t\t}
\t}

\tif (hasDontEnumBug) {
\t\tvar skipConstructor = equalsConstructorPrototypeIfNotBuggy(object);

\t\tfor (var k = 0; k < dontEnums.length; ++k) {
\t\t\tif (!(skipConstructor && dontEnums[k] === 'constructor') && has.call(object, dontEnums[k])) {
\t\t\t\ttheKeys.push(dontEnums[k]);
\t\t\t}
\t\t}
\t}
\treturn theKeys;
};

keysShim.shim = function shimObjectKeys() {
\tif (Object.keys) {
\t\tvar keysWorksWithArguments = (function () {
\t\t\t// Safari 5.0 bug
\t\t\treturn (Object.keys(arguments) || '').length === 2;
\t\t}(1, 2));
\t\tif (!keysWorksWithArguments) {
\t\t\tvar originalKeys = Object.keys;
\t\t\tObject.keys = function keys(object) {
\t\t\t\tif (isArgs(object)) {
\t\t\t\t\treturn originalKeys(slice.call(object));
\t\t\t\t} else {
\t\t\t\t\treturn originalKeys(object);
\t\t\t\t}
\t\t\t};
\t\t}
\t} else {
\t\tObject.keys = keysShim;
\t}
\treturn Object.keys || keysShim;
};

module.exports = keysShim;
", "node_modules/object-keys/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/object-keys/index.js");
    }
}
