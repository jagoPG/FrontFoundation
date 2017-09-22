<?php

/* node_modules/es5-ext/array/from/shim.js */
class __TwigTemplate_f9e4df79d9649abfbcaf209edd4b05ca96ba97db5774c748b569213d24edf9bf extends Twig_Template
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
        $__internal_3199d4b5cf014635b2cb18947c10316f686f1f8bf321ea7ebc9a99ae97ed747e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3199d4b5cf014635b2cb18947c10316f686f1f8bf321ea7ebc9a99ae97ed747e->enter($__internal_3199d4b5cf014635b2cb18947c10316f686f1f8bf321ea7ebc9a99ae97ed747e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/from/shim.js"));

        // line 1
        echo "\"use strict\";

var iteratorSymbol = require(\"es6-symbol\").iterator
  , isArguments    = require(\"../../function/is-arguments\")
  , isFunction     = require(\"../../function/is-function\")
  , toPosInt       = require(\"../../number/to-pos-integer\")
  , callable       = require(\"../../object/valid-callable\")
  , validValue     = require(\"../../object/valid-value\")
  , isValue        = require(\"../../object/is-value\")
  , isString       = require(\"../../string/is-string\")
  , isArray        = Array.isArray
  , call           = Function.prototype.call
  , desc           = { configurable: true, enumerable: true, writable: true, value: null }
  , defineProperty = Object.defineProperty;

// eslint-disable-next-line complexity
module.exports = function (arrayLike /*, mapFn, thisArg*/) {
\tvar mapFn = arguments[1]
\t  , thisArg = arguments[2]
\t  , Context
\t  , i
\t  , j
\t  , arr
\t  , length
\t  , code
\t  , iterator
\t  , result
\t  , getIterator
\t  , value;

\tarrayLike = Object(validValue(arrayLike));

\tif (isValue(mapFn)) callable(mapFn);
\tif (!this || this === Array || !isFunction(this)) {
\t\t// Result: Plain array
\t\tif (!mapFn) {
\t\t\tif (isArguments(arrayLike)) {
\t\t\t\t// Source: Arguments
\t\t\t\tlength = arrayLike.length;
\t\t\t\tif (length !== 1) return Array.apply(null, arrayLike);
\t\t\t\tarr = new Array(1);
\t\t\t\tarr[0] = arrayLike[0];
\t\t\t\treturn arr;
\t\t\t}
\t\t\tif (isArray(arrayLike)) {
\t\t\t\t// Source: Array
\t\t\t\tarr = new Array(length = arrayLike.length);
\t\t\t\tfor (i = 0; i < length; ++i) arr[i] = arrayLike[i];
\t\t\t\treturn arr;
\t\t\t}
\t\t}
\t\tarr = [];
\t} else {
\t\t// Result: Non plain array
\t\tContext = this;
\t}

\tif (!isArray(arrayLike)) {
\t\tif ((getIterator = arrayLike[iteratorSymbol]) !== undefined) {
\t\t\t// Source: Iterator
\t\t\titerator = callable(getIterator).call(arrayLike);
\t\t\tif (Context) arr = new Context();
\t\t\tresult = iterator.next();
\t\t\ti = 0;
\t\t\twhile (!result.done) {
\t\t\t\tvalue = mapFn ? call.call(mapFn, thisArg, result.value, i) : result.value;
\t\t\t\tif (Context) {
\t\t\t\t\tdesc.value = value;
\t\t\t\t\tdefineProperty(arr, i, desc);
\t\t\t\t} else {
\t\t\t\t\tarr[i] = value;
\t\t\t\t}
\t\t\t\tresult = iterator.next();
\t\t\t\t++i;
\t\t\t}
\t\t\tlength = i;
\t\t} else if (isString(arrayLike)) {
\t\t\t// Source: String
\t\t\tlength = arrayLike.length;
\t\t\tif (Context) arr = new Context();
\t\t\tfor (i = 0, j = 0; i < length; ++i) {
\t\t\t\tvalue = arrayLike[i];
\t\t\t\tif (i + 1 < length) {
\t\t\t\t\tcode = value.charCodeAt(0);
\t\t\t\t\t// eslint-disable-next-line max-depth
\t\t\t\t\tif (code >= 0xd800 && code <= 0xdbff) value += arrayLike[++i];
\t\t\t\t}
\t\t\t\tvalue = mapFn ? call.call(mapFn, thisArg, value, j) : value;
\t\t\t\tif (Context) {
\t\t\t\t\tdesc.value = value;
\t\t\t\t\tdefineProperty(arr, j, desc);
\t\t\t\t} else {
\t\t\t\t\tarr[j] = value;
\t\t\t\t}
\t\t\t\t++j;
\t\t\t}
\t\t\tlength = j;
\t\t}
\t}
\tif (length === undefined) {
\t\t// Source: array or array-like
\t\tlength = toPosInt(arrayLike.length);
\t\tif (Context) arr = new Context(length);
\t\tfor (i = 0; i < length; ++i) {
\t\t\tvalue = mapFn ? call.call(mapFn, thisArg, arrayLike[i], i) : arrayLike[i];
\t\t\tif (Context) {
\t\t\t\tdesc.value = value;
\t\t\t\tdefineProperty(arr, i, desc);
\t\t\t} else {
\t\t\t\tarr[i] = value;
\t\t\t}
\t\t}
\t}
\tif (Context) {
\t\tdesc.value = null;
\t\tarr.length = length;
\t}
\treturn arr;
};
";
        
        $__internal_3199d4b5cf014635b2cb18947c10316f686f1f8bf321ea7ebc9a99ae97ed747e->leave($__internal_3199d4b5cf014635b2cb18947c10316f686f1f8bf321ea7ebc9a99ae97ed747e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/from/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var iteratorSymbol = require(\"es6-symbol\").iterator
  , isArguments    = require(\"../../function/is-arguments\")
  , isFunction     = require(\"../../function/is-function\")
  , toPosInt       = require(\"../../number/to-pos-integer\")
  , callable       = require(\"../../object/valid-callable\")
  , validValue     = require(\"../../object/valid-value\")
  , isValue        = require(\"../../object/is-value\")
  , isString       = require(\"../../string/is-string\")
  , isArray        = Array.isArray
  , call           = Function.prototype.call
  , desc           = { configurable: true, enumerable: true, writable: true, value: null }
  , defineProperty = Object.defineProperty;

// eslint-disable-next-line complexity
module.exports = function (arrayLike /*, mapFn, thisArg*/) {
\tvar mapFn = arguments[1]
\t  , thisArg = arguments[2]
\t  , Context
\t  , i
\t  , j
\t  , arr
\t  , length
\t  , code
\t  , iterator
\t  , result
\t  , getIterator
\t  , value;

\tarrayLike = Object(validValue(arrayLike));

\tif (isValue(mapFn)) callable(mapFn);
\tif (!this || this === Array || !isFunction(this)) {
\t\t// Result: Plain array
\t\tif (!mapFn) {
\t\t\tif (isArguments(arrayLike)) {
\t\t\t\t// Source: Arguments
\t\t\t\tlength = arrayLike.length;
\t\t\t\tif (length !== 1) return Array.apply(null, arrayLike);
\t\t\t\tarr = new Array(1);
\t\t\t\tarr[0] = arrayLike[0];
\t\t\t\treturn arr;
\t\t\t}
\t\t\tif (isArray(arrayLike)) {
\t\t\t\t// Source: Array
\t\t\t\tarr = new Array(length = arrayLike.length);
\t\t\t\tfor (i = 0; i < length; ++i) arr[i] = arrayLike[i];
\t\t\t\treturn arr;
\t\t\t}
\t\t}
\t\tarr = [];
\t} else {
\t\t// Result: Non plain array
\t\tContext = this;
\t}

\tif (!isArray(arrayLike)) {
\t\tif ((getIterator = arrayLike[iteratorSymbol]) !== undefined) {
\t\t\t// Source: Iterator
\t\t\titerator = callable(getIterator).call(arrayLike);
\t\t\tif (Context) arr = new Context();
\t\t\tresult = iterator.next();
\t\t\ti = 0;
\t\t\twhile (!result.done) {
\t\t\t\tvalue = mapFn ? call.call(mapFn, thisArg, result.value, i) : result.value;
\t\t\t\tif (Context) {
\t\t\t\t\tdesc.value = value;
\t\t\t\t\tdefineProperty(arr, i, desc);
\t\t\t\t} else {
\t\t\t\t\tarr[i] = value;
\t\t\t\t}
\t\t\t\tresult = iterator.next();
\t\t\t\t++i;
\t\t\t}
\t\t\tlength = i;
\t\t} else if (isString(arrayLike)) {
\t\t\t// Source: String
\t\t\tlength = arrayLike.length;
\t\t\tif (Context) arr = new Context();
\t\t\tfor (i = 0, j = 0; i < length; ++i) {
\t\t\t\tvalue = arrayLike[i];
\t\t\t\tif (i + 1 < length) {
\t\t\t\t\tcode = value.charCodeAt(0);
\t\t\t\t\t// eslint-disable-next-line max-depth
\t\t\t\t\tif (code >= 0xd800 && code <= 0xdbff) value += arrayLike[++i];
\t\t\t\t}
\t\t\t\tvalue = mapFn ? call.call(mapFn, thisArg, value, j) : value;
\t\t\t\tif (Context) {
\t\t\t\t\tdesc.value = value;
\t\t\t\t\tdefineProperty(arr, j, desc);
\t\t\t\t} else {
\t\t\t\t\tarr[j] = value;
\t\t\t\t}
\t\t\t\t++j;
\t\t\t}
\t\t\tlength = j;
\t\t}
\t}
\tif (length === undefined) {
\t\t// Source: array or array-like
\t\tlength = toPosInt(arrayLike.length);
\t\tif (Context) arr = new Context(length);
\t\tfor (i = 0; i < length; ++i) {
\t\t\tvalue = mapFn ? call.call(mapFn, thisArg, arrayLike[i], i) : arrayLike[i];
\t\t\tif (Context) {
\t\t\t\tdesc.value = value;
\t\t\t\tdefineProperty(arr, i, desc);
\t\t\t} else {
\t\t\t\tarr[i] = value;
\t\t\t}
\t\t}
\t}
\tif (Context) {
\t\tdesc.value = null;
\t\tarr.length = length;
\t}
\treturn arr;
};
", "node_modules/es5-ext/array/from/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/from/shim.js");
    }
}
