<?php

/* node_modules/jsesc/jsesc.js */
class __TwigTemplate_04eba2f244b2463dd6707cfe128950a3ac5528fc63c4d46601eb939186562c79 extends Twig_Template
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
        $__internal_a550e44a56a226a317853b338f8805d4febb5a555728432ee468e1754b6eda28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a550e44a56a226a317853b338f8805d4febb5a555728432ee468e1754b6eda28->enter($__internal_a550e44a56a226a317853b338f8805d4febb5a555728432ee468e1754b6eda28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jsesc/jsesc.js"));

        // line 1
        echo "/*! http://mths.be/jsesc v0.5.0 by @mathias */
;(function(root) {

\t// Detect free variables `exports`
\tvar freeExports = typeof exports == 'object' && exports;

\t// Detect free variable `module`
\tvar freeModule = typeof module == 'object' && module &&
\t\tmodule.exports == freeExports && module;

\t// Detect free variable `global`, from Node.js or Browserified code,
\t// and use it as `root`
\tvar freeGlobal = typeof global == 'object' && global;
\tif (freeGlobal.global === freeGlobal || freeGlobal.window === freeGlobal) {
\t\troot = freeGlobal;
\t}

\t/*--------------------------------------------------------------------------*/

\tvar object = {};
\tvar hasOwnProperty = object.hasOwnProperty;
\tvar forOwn = function(object, callback) {
\t\tvar key;
\t\tfor (key in object) {
\t\t\tif (hasOwnProperty.call(object, key)) {
\t\t\t\tcallback(key, object[key]);
\t\t\t}
\t\t}
\t};

\tvar extend = function(destination, source) {
\t\tif (!source) {
\t\t\treturn destination;
\t\t}
\t\tforOwn(source, function(key, value) {
\t\t\tdestination[key] = value;
\t\t});
\t\treturn destination;
\t};

\tvar forEach = function(array, callback) {
\t\tvar length = array.length;
\t\tvar index = -1;
\t\twhile (++index < length) {
\t\t\tcallback(array[index]);
\t\t}
\t};

\tvar toString = object.toString;
\tvar isArray = function(value) {
\t\treturn toString.call(value) == '[object Array]';
\t};
\tvar isObject = function(value) {
\t\t// This is a very simple check, but it’s good enough for what we need.
\t\treturn toString.call(value) == '[object Object]';
\t};
\tvar isString = function(value) {
\t\treturn typeof value == 'string' ||
\t\t\ttoString.call(value) == '[object String]';
\t};
\tvar isFunction = function(value) {
\t\t// In a perfect world, the `typeof` check would be sufficient. However,
\t\t// in Chrome 1–12, `typeof /x/ == 'object'`, and in IE 6–8
\t\t// `typeof alert == 'object'` and similar for other host objects.
\t\treturn typeof value == 'function' ||
\t\t\ttoString.call(value) == '[object Function]';
\t};

\t/*--------------------------------------------------------------------------*/

\t// http://mathiasbynens.be/notes/javascript-escapes#single
\tvar singleEscapes = {
\t\t'\"': '\\\\\"',
\t\t'\\'': '\\\\\\'',
\t\t'\\\\': '\\\\\\\\',
\t\t'\\b': '\\\\b',
\t\t'\\f': '\\\\f',
\t\t'\\n': '\\\\n',
\t\t'\\r': '\\\\r',
\t\t'\\t': '\\\\t'
\t\t// `\\v` is omitted intentionally, because in IE < 9, '\\v' == 'v'.
\t\t// '\\v': '\\\\x0B'
\t};
\tvar regexSingleEscape = /[\"'\\\\\\b\\f\\n\\r\\t]/;

\tvar regexDigit = /[0-9]/;
\tvar regexWhitelist = /[ !#-&\\(-\\[\\]-~]/;

\tvar jsesc = function(argument, options) {
\t\t// Handle options
\t\tvar defaults = {
\t\t\t'escapeEverything': false,
\t\t\t'quotes': 'single',
\t\t\t'wrap': false,
\t\t\t'es6': false,
\t\t\t'json': false,
\t\t\t'compact': true,
\t\t\t'indent': '\\t',
\t\t\t'__indent__': ''
\t\t};
\t\tvar json = options && options.json;
\t\tif (json) {
\t\t\tdefaults.quotes = 'double';
\t\t\tdefaults.wrap = true;
\t\t}
\t\toptions = extend(defaults, options);
\t\tif (options.quotes != 'single' && options.quotes != 'double') {
\t\t\toptions.quotes = 'single';
\t\t}
\t\tvar quote = options.quotes == 'double' ? '\"' : '\\'';
\t\tvar compact = options.compact;
\t\tvar indent = options.indent;
\t\tvar oldIndent;
\t\tvar newLine = compact ? '' : '\\n';
\t\tvar result;
\t\tvar isEmpty = true;

\t\tif (json && argument && isFunction(argument.toJSON)) {
\t\t\targument = argument.toJSON();
\t\t}

\t\tif (!isString(argument)) {
\t\t\tif (isArray(argument)) {
\t\t\t\tresult = [];
\t\t\t\toptions.wrap = true;
\t\t\t\toldIndent = options.__indent__;
\t\t\t\tindent += oldIndent;
\t\t\t\toptions.__indent__ = indent;
\t\t\t\tforEach(argument, function(value) {
\t\t\t\t\tisEmpty = false;
\t\t\t\t\tresult.push(
\t\t\t\t\t\t(compact ? '' : indent) +
\t\t\t\t\t\tjsesc(value, options)
\t\t\t\t\t);
\t\t\t\t});
\t\t\t\tif (isEmpty) {
\t\t\t\t\treturn '[]';
\t\t\t\t}
\t\t\t\treturn '[' + newLine + result.join(',' + newLine) + newLine +
\t\t\t\t\t(compact ? '' : oldIndent) + ']';
\t\t\t} else if (!isObject(argument)) {
\t\t\t\tif (json) {
\t\t\t\t\t// For some values (e.g. `undefined`, `function` objects),
\t\t\t\t\t// `JSON.stringify(value)` returns `undefined` (which isn’t valid
\t\t\t\t\t// JSON) instead of `'null'`.
\t\t\t\t\treturn JSON.stringify(argument) || 'null';
\t\t\t\t}
\t\t\t\treturn String(argument);
\t\t\t} else { // it’s an object
\t\t\t\tresult = [];
\t\t\t\toptions.wrap = true;
\t\t\t\toldIndent = options.__indent__;
\t\t\t\tindent += oldIndent;
\t\t\t\toptions.__indent__ = indent;
\t\t\t\tforOwn(argument, function(key, value) {
\t\t\t\t\tisEmpty = false;
\t\t\t\t\tresult.push(
\t\t\t\t\t\t(compact ? '' : indent) +
\t\t\t\t\t\tjsesc(key, options) + ':' +
\t\t\t\t\t\t(compact ? '' : ' ') +
\t\t\t\t\t\tjsesc(value, options)
\t\t\t\t\t);
\t\t\t\t});
\t\t\t\tif (isEmpty) {
\t\t\t\t\treturn '{}';
\t\t\t\t}
\t\t\t\treturn '{' + newLine + result.join(',' + newLine) + newLine +
\t\t\t\t\t(compact ? '' : oldIndent) + '}';
\t\t\t}
\t\t}

\t\tvar string = argument;
\t\t// Loop over each code unit in the string and escape it
\t\tvar index = -1;
\t\tvar length = string.length;
\t\tvar first;
\t\tvar second;
\t\tvar codePoint;
\t\tresult = '';
\t\twhile (++index < length) {
\t\t\tvar character = string.charAt(index);
\t\t\tif (options.es6) {
\t\t\t\tfirst = string.charCodeAt(index);
\t\t\t\tif ( // check if it’s the start of a surrogate pair
\t\t\t\t\tfirst >= 0xD800 && first <= 0xDBFF && // high surrogate
\t\t\t\t\tlength > index + 1 // there is a next code unit
\t\t\t\t) {
\t\t\t\t\tsecond = string.charCodeAt(index + 1);
\t\t\t\t\tif (second >= 0xDC00 && second <= 0xDFFF) { // low surrogate
\t\t\t\t\t\t// http://mathiasbynens.be/notes/javascript-encoding#surrogate-formulae
\t\t\t\t\t\tcodePoint = (first - 0xD800) * 0x400 + second - 0xDC00 + 0x10000;
\t\t\t\t\t\tresult += '\\\\u{' + codePoint.toString(16).toUpperCase() + '}';
\t\t\t\t\t\tindex++;
\t\t\t\t\t\tcontinue;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\tif (!options.escapeEverything) {
\t\t\t\tif (regexWhitelist.test(character)) {
\t\t\t\t\t// It’s a printable ASCII character that is not `\"`, `'` or `\\`,
\t\t\t\t\t// so don’t escape it.
\t\t\t\t\tresult += character;
\t\t\t\t\tcontinue;
\t\t\t\t}
\t\t\t\tif (character == '\"') {
\t\t\t\t\tresult += quote == character ? '\\\\\"' : character;
\t\t\t\t\tcontinue;
\t\t\t\t}
\t\t\t\tif (character == '\\'') {
\t\t\t\t\tresult += quote == character ? '\\\\\\'' : character;
\t\t\t\t\tcontinue;
\t\t\t\t}
\t\t\t}
\t\t\tif (
\t\t\t\tcharacter == '\\0' &&
\t\t\t\t!json &&
\t\t\t\t!regexDigit.test(string.charAt(index + 1))
\t\t\t) {
\t\t\t\tresult += '\\\\0';
\t\t\t\tcontinue;
\t\t\t}
\t\t\tif (regexSingleEscape.test(character)) {
\t\t\t\t// no need for a `hasOwnProperty` check here
\t\t\t\tresult += singleEscapes[character];
\t\t\t\tcontinue;
\t\t\t}
\t\t\tvar charCode = character.charCodeAt(0);
\t\t\tvar hexadecimal = charCode.toString(16).toUpperCase();
\t\t\tvar longhand = hexadecimal.length > 2 || json;
\t\t\tvar escaped = '\\\\' + (longhand ? 'u' : 'x') +
\t\t\t\t('0000' + hexadecimal).slice(longhand ? -4 : -2);
\t\t\tresult += escaped;
\t\t\tcontinue;
\t\t}
\t\tif (options.wrap) {
\t\t\tresult = quote + result + quote;
\t\t}
\t\treturn result;
\t};

\tjsesc.version = '0.5.0';

\t/*--------------------------------------------------------------------------*/

\t// Some AMD build optimizers, like r.js, check for specific condition patterns
\t// like the following:
\tif (
\t\ttypeof define == 'function' &&
\t\ttypeof define.amd == 'object' &&
\t\tdefine.amd
\t) {
\t\tdefine(function() {
\t\t\treturn jsesc;
\t\t});
\t}\telse if (freeExports && !freeExports.nodeType) {
\t\tif (freeModule) { // in Node.js or RingoJS v0.8.0+
\t\t\tfreeModule.exports = jsesc;
\t\t} else { // in Narwhal or RingoJS v0.7.0-
\t\t\tfreeExports.jsesc = jsesc;
\t\t}
\t} else { // in Rhino or a web browser
\t\troot.jsesc = jsesc;
\t}

}(this));
";
        
        $__internal_a550e44a56a226a317853b338f8805d4febb5a555728432ee468e1754b6eda28->leave($__internal_a550e44a56a226a317853b338f8805d4febb5a555728432ee468e1754b6eda28_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jsesc/jsesc.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*! http://mths.be/jsesc v0.5.0 by @mathias */
;(function(root) {

\t// Detect free variables `exports`
\tvar freeExports = typeof exports == 'object' && exports;

\t// Detect free variable `module`
\tvar freeModule = typeof module == 'object' && module &&
\t\tmodule.exports == freeExports && module;

\t// Detect free variable `global`, from Node.js or Browserified code,
\t// and use it as `root`
\tvar freeGlobal = typeof global == 'object' && global;
\tif (freeGlobal.global === freeGlobal || freeGlobal.window === freeGlobal) {
\t\troot = freeGlobal;
\t}

\t/*--------------------------------------------------------------------------*/

\tvar object = {};
\tvar hasOwnProperty = object.hasOwnProperty;
\tvar forOwn = function(object, callback) {
\t\tvar key;
\t\tfor (key in object) {
\t\t\tif (hasOwnProperty.call(object, key)) {
\t\t\t\tcallback(key, object[key]);
\t\t\t}
\t\t}
\t};

\tvar extend = function(destination, source) {
\t\tif (!source) {
\t\t\treturn destination;
\t\t}
\t\tforOwn(source, function(key, value) {
\t\t\tdestination[key] = value;
\t\t});
\t\treturn destination;
\t};

\tvar forEach = function(array, callback) {
\t\tvar length = array.length;
\t\tvar index = -1;
\t\twhile (++index < length) {
\t\t\tcallback(array[index]);
\t\t}
\t};

\tvar toString = object.toString;
\tvar isArray = function(value) {
\t\treturn toString.call(value) == '[object Array]';
\t};
\tvar isObject = function(value) {
\t\t// This is a very simple check, but it’s good enough for what we need.
\t\treturn toString.call(value) == '[object Object]';
\t};
\tvar isString = function(value) {
\t\treturn typeof value == 'string' ||
\t\t\ttoString.call(value) == '[object String]';
\t};
\tvar isFunction = function(value) {
\t\t// In a perfect world, the `typeof` check would be sufficient. However,
\t\t// in Chrome 1–12, `typeof /x/ == 'object'`, and in IE 6–8
\t\t// `typeof alert == 'object'` and similar for other host objects.
\t\treturn typeof value == 'function' ||
\t\t\ttoString.call(value) == '[object Function]';
\t};

\t/*--------------------------------------------------------------------------*/

\t// http://mathiasbynens.be/notes/javascript-escapes#single
\tvar singleEscapes = {
\t\t'\"': '\\\\\"',
\t\t'\\'': '\\\\\\'',
\t\t'\\\\': '\\\\\\\\',
\t\t'\\b': '\\\\b',
\t\t'\\f': '\\\\f',
\t\t'\\n': '\\\\n',
\t\t'\\r': '\\\\r',
\t\t'\\t': '\\\\t'
\t\t// `\\v` is omitted intentionally, because in IE < 9, '\\v' == 'v'.
\t\t// '\\v': '\\\\x0B'
\t};
\tvar regexSingleEscape = /[\"'\\\\\\b\\f\\n\\r\\t]/;

\tvar regexDigit = /[0-9]/;
\tvar regexWhitelist = /[ !#-&\\(-\\[\\]-~]/;

\tvar jsesc = function(argument, options) {
\t\t// Handle options
\t\tvar defaults = {
\t\t\t'escapeEverything': false,
\t\t\t'quotes': 'single',
\t\t\t'wrap': false,
\t\t\t'es6': false,
\t\t\t'json': false,
\t\t\t'compact': true,
\t\t\t'indent': '\\t',
\t\t\t'__indent__': ''
\t\t};
\t\tvar json = options && options.json;
\t\tif (json) {
\t\t\tdefaults.quotes = 'double';
\t\t\tdefaults.wrap = true;
\t\t}
\t\toptions = extend(defaults, options);
\t\tif (options.quotes != 'single' && options.quotes != 'double') {
\t\t\toptions.quotes = 'single';
\t\t}
\t\tvar quote = options.quotes == 'double' ? '\"' : '\\'';
\t\tvar compact = options.compact;
\t\tvar indent = options.indent;
\t\tvar oldIndent;
\t\tvar newLine = compact ? '' : '\\n';
\t\tvar result;
\t\tvar isEmpty = true;

\t\tif (json && argument && isFunction(argument.toJSON)) {
\t\t\targument = argument.toJSON();
\t\t}

\t\tif (!isString(argument)) {
\t\t\tif (isArray(argument)) {
\t\t\t\tresult = [];
\t\t\t\toptions.wrap = true;
\t\t\t\toldIndent = options.__indent__;
\t\t\t\tindent += oldIndent;
\t\t\t\toptions.__indent__ = indent;
\t\t\t\tforEach(argument, function(value) {
\t\t\t\t\tisEmpty = false;
\t\t\t\t\tresult.push(
\t\t\t\t\t\t(compact ? '' : indent) +
\t\t\t\t\t\tjsesc(value, options)
\t\t\t\t\t);
\t\t\t\t});
\t\t\t\tif (isEmpty) {
\t\t\t\t\treturn '[]';
\t\t\t\t}
\t\t\t\treturn '[' + newLine + result.join(',' + newLine) + newLine +
\t\t\t\t\t(compact ? '' : oldIndent) + ']';
\t\t\t} else if (!isObject(argument)) {
\t\t\t\tif (json) {
\t\t\t\t\t// For some values (e.g. `undefined`, `function` objects),
\t\t\t\t\t// `JSON.stringify(value)` returns `undefined` (which isn’t valid
\t\t\t\t\t// JSON) instead of `'null'`.
\t\t\t\t\treturn JSON.stringify(argument) || 'null';
\t\t\t\t}
\t\t\t\treturn String(argument);
\t\t\t} else { // it’s an object
\t\t\t\tresult = [];
\t\t\t\toptions.wrap = true;
\t\t\t\toldIndent = options.__indent__;
\t\t\t\tindent += oldIndent;
\t\t\t\toptions.__indent__ = indent;
\t\t\t\tforOwn(argument, function(key, value) {
\t\t\t\t\tisEmpty = false;
\t\t\t\t\tresult.push(
\t\t\t\t\t\t(compact ? '' : indent) +
\t\t\t\t\t\tjsesc(key, options) + ':' +
\t\t\t\t\t\t(compact ? '' : ' ') +
\t\t\t\t\t\tjsesc(value, options)
\t\t\t\t\t);
\t\t\t\t});
\t\t\t\tif (isEmpty) {
\t\t\t\t\treturn '{}';
\t\t\t\t}
\t\t\t\treturn '{' + newLine + result.join(',' + newLine) + newLine +
\t\t\t\t\t(compact ? '' : oldIndent) + '}';
\t\t\t}
\t\t}

\t\tvar string = argument;
\t\t// Loop over each code unit in the string and escape it
\t\tvar index = -1;
\t\tvar length = string.length;
\t\tvar first;
\t\tvar second;
\t\tvar codePoint;
\t\tresult = '';
\t\twhile (++index < length) {
\t\t\tvar character = string.charAt(index);
\t\t\tif (options.es6) {
\t\t\t\tfirst = string.charCodeAt(index);
\t\t\t\tif ( // check if it’s the start of a surrogate pair
\t\t\t\t\tfirst >= 0xD800 && first <= 0xDBFF && // high surrogate
\t\t\t\t\tlength > index + 1 // there is a next code unit
\t\t\t\t) {
\t\t\t\t\tsecond = string.charCodeAt(index + 1);
\t\t\t\t\tif (second >= 0xDC00 && second <= 0xDFFF) { // low surrogate
\t\t\t\t\t\t// http://mathiasbynens.be/notes/javascript-encoding#surrogate-formulae
\t\t\t\t\t\tcodePoint = (first - 0xD800) * 0x400 + second - 0xDC00 + 0x10000;
\t\t\t\t\t\tresult += '\\\\u{' + codePoint.toString(16).toUpperCase() + '}';
\t\t\t\t\t\tindex++;
\t\t\t\t\t\tcontinue;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\tif (!options.escapeEverything) {
\t\t\t\tif (regexWhitelist.test(character)) {
\t\t\t\t\t// It’s a printable ASCII character that is not `\"`, `'` or `\\`,
\t\t\t\t\t// so don’t escape it.
\t\t\t\t\tresult += character;
\t\t\t\t\tcontinue;
\t\t\t\t}
\t\t\t\tif (character == '\"') {
\t\t\t\t\tresult += quote == character ? '\\\\\"' : character;
\t\t\t\t\tcontinue;
\t\t\t\t}
\t\t\t\tif (character == '\\'') {
\t\t\t\t\tresult += quote == character ? '\\\\\\'' : character;
\t\t\t\t\tcontinue;
\t\t\t\t}
\t\t\t}
\t\t\tif (
\t\t\t\tcharacter == '\\0' &&
\t\t\t\t!json &&
\t\t\t\t!regexDigit.test(string.charAt(index + 1))
\t\t\t) {
\t\t\t\tresult += '\\\\0';
\t\t\t\tcontinue;
\t\t\t}
\t\t\tif (regexSingleEscape.test(character)) {
\t\t\t\t// no need for a `hasOwnProperty` check here
\t\t\t\tresult += singleEscapes[character];
\t\t\t\tcontinue;
\t\t\t}
\t\t\tvar charCode = character.charCodeAt(0);
\t\t\tvar hexadecimal = charCode.toString(16).toUpperCase();
\t\t\tvar longhand = hexadecimal.length > 2 || json;
\t\t\tvar escaped = '\\\\' + (longhand ? 'u' : 'x') +
\t\t\t\t('0000' + hexadecimal).slice(longhand ? -4 : -2);
\t\t\tresult += escaped;
\t\t\tcontinue;
\t\t}
\t\tif (options.wrap) {
\t\t\tresult = quote + result + quote;
\t\t}
\t\treturn result;
\t};

\tjsesc.version = '0.5.0';

\t/*--------------------------------------------------------------------------*/

\t// Some AMD build optimizers, like r.js, check for specific condition patterns
\t// like the following:
\tif (
\t\ttypeof define == 'function' &&
\t\ttypeof define.amd == 'object' &&
\t\tdefine.amd
\t) {
\t\tdefine(function() {
\t\t\treturn jsesc;
\t\t});
\t}\telse if (freeExports && !freeExports.nodeType) {
\t\tif (freeModule) { // in Node.js or RingoJS v0.8.0+
\t\t\tfreeModule.exports = jsesc;
\t\t} else { // in Narwhal or RingoJS v0.7.0-
\t\t\tfreeExports.jsesc = jsesc;
\t\t}
\t} else { // in Rhino or a web browser
\t\troot.jsesc = jsesc;
\t}

}(this));
", "node_modules/jsesc/jsesc.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jsesc/jsesc.js");
    }
}
