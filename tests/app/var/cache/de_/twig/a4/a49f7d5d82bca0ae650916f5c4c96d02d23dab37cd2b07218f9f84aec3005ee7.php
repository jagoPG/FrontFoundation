<?php

/* node_modules/object-assign/index.js */
class __TwigTemplate_454d2df1bebd7744b3dc9906f4b67b54d3b4a90d81cf223c25aaedffeaaf70b8 extends Twig_Template
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
        $__internal_e3d2dea7dc5400fc7dbcbe1aa3da7ce888c0486151cb551e0c8d216f9b991247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d2dea7dc5400fc7dbcbe1aa3da7ce888c0486151cb551e0c8d216f9b991247->enter($__internal_e3d2dea7dc5400fc7dbcbe1aa3da7ce888c0486151cb551e0c8d216f9b991247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/object-assign/index.js"));

        // line 1
        echo "/*
object-assign
(c) Sindre Sorhus
@license MIT
*/

'use strict';
/* eslint-disable no-unused-vars */
var getOwnPropertySymbols = Object.getOwnPropertySymbols;
var hasOwnProperty = Object.prototype.hasOwnProperty;
var propIsEnumerable = Object.prototype.propertyIsEnumerable;

function toObject(val) {
\tif (val === null || val === undefined) {
\t\tthrow new TypeError('Object.assign cannot be called with null or undefined');
\t}

\treturn Object(val);
}

function shouldUseNative() {
\ttry {
\t\tif (!Object.assign) {
\t\t\treturn false;
\t\t}

\t\t// Detect buggy property enumeration order in older V8 versions.

\t\t// https://bugs.chromium.org/p/v8/issues/detail?id=4118
\t\tvar test1 = new String('abc');  // eslint-disable-line no-new-wrappers
\t\ttest1[5] = 'de';
\t\tif (Object.getOwnPropertyNames(test1)[0] === '5') {
\t\t\treturn false;
\t\t}

\t\t// https://bugs.chromium.org/p/v8/issues/detail?id=3056
\t\tvar test2 = {};
\t\tfor (var i = 0; i < 10; i++) {
\t\t\ttest2['_' + String.fromCharCode(i)] = i;
\t\t}
\t\tvar order2 = Object.getOwnPropertyNames(test2).map(function (n) {
\t\t\treturn test2[n];
\t\t});
\t\tif (order2.join('') !== '0123456789') {
\t\t\treturn false;
\t\t}

\t\t// https://bugs.chromium.org/p/v8/issues/detail?id=3056
\t\tvar test3 = {};
\t\t'abcdefghijklmnopqrst'.split('').forEach(function (letter) {
\t\t\ttest3[letter] = letter;
\t\t});
\t\tif (Object.keys(Object.assign({}, test3)).join('') !==
\t\t\t\t'abcdefghijklmnopqrst') {
\t\t\treturn false;
\t\t}

\t\treturn true;
\t} catch (err) {
\t\t// We don't expect any of the above to throw, but better to be safe.
\t\treturn false;
\t}
}

module.exports = shouldUseNative() ? Object.assign : function (target, source) {
\tvar from;
\tvar to = toObject(target);
\tvar symbols;

\tfor (var s = 1; s < arguments.length; s++) {
\t\tfrom = Object(arguments[s]);

\t\tfor (var key in from) {
\t\t\tif (hasOwnProperty.call(from, key)) {
\t\t\t\tto[key] = from[key];
\t\t\t}
\t\t}

\t\tif (getOwnPropertySymbols) {
\t\t\tsymbols = getOwnPropertySymbols(from);
\t\t\tfor (var i = 0; i < symbols.length; i++) {
\t\t\t\tif (propIsEnumerable.call(from, symbols[i])) {
\t\t\t\t\tto[symbols[i]] = from[symbols[i]];
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn to;
};
";
        
        $__internal_e3d2dea7dc5400fc7dbcbe1aa3da7ce888c0486151cb551e0c8d216f9b991247->leave($__internal_e3d2dea7dc5400fc7dbcbe1aa3da7ce888c0486151cb551e0c8d216f9b991247_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/object-assign/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
object-assign
(c) Sindre Sorhus
@license MIT
*/

'use strict';
/* eslint-disable no-unused-vars */
var getOwnPropertySymbols = Object.getOwnPropertySymbols;
var hasOwnProperty = Object.prototype.hasOwnProperty;
var propIsEnumerable = Object.prototype.propertyIsEnumerable;

function toObject(val) {
\tif (val === null || val === undefined) {
\t\tthrow new TypeError('Object.assign cannot be called with null or undefined');
\t}

\treturn Object(val);
}

function shouldUseNative() {
\ttry {
\t\tif (!Object.assign) {
\t\t\treturn false;
\t\t}

\t\t// Detect buggy property enumeration order in older V8 versions.

\t\t// https://bugs.chromium.org/p/v8/issues/detail?id=4118
\t\tvar test1 = new String('abc');  // eslint-disable-line no-new-wrappers
\t\ttest1[5] = 'de';
\t\tif (Object.getOwnPropertyNames(test1)[0] === '5') {
\t\t\treturn false;
\t\t}

\t\t// https://bugs.chromium.org/p/v8/issues/detail?id=3056
\t\tvar test2 = {};
\t\tfor (var i = 0; i < 10; i++) {
\t\t\ttest2['_' + String.fromCharCode(i)] = i;
\t\t}
\t\tvar order2 = Object.getOwnPropertyNames(test2).map(function (n) {
\t\t\treturn test2[n];
\t\t});
\t\tif (order2.join('') !== '0123456789') {
\t\t\treturn false;
\t\t}

\t\t// https://bugs.chromium.org/p/v8/issues/detail?id=3056
\t\tvar test3 = {};
\t\t'abcdefghijklmnopqrst'.split('').forEach(function (letter) {
\t\t\ttest3[letter] = letter;
\t\t});
\t\tif (Object.keys(Object.assign({}, test3)).join('') !==
\t\t\t\t'abcdefghijklmnopqrst') {
\t\t\treturn false;
\t\t}

\t\treturn true;
\t} catch (err) {
\t\t// We don't expect any of the above to throw, but better to be safe.
\t\treturn false;
\t}
}

module.exports = shouldUseNative() ? Object.assign : function (target, source) {
\tvar from;
\tvar to = toObject(target);
\tvar symbols;

\tfor (var s = 1; s < arguments.length; s++) {
\t\tfrom = Object(arguments[s]);

\t\tfor (var key in from) {
\t\t\tif (hasOwnProperty.call(from, key)) {
\t\t\t\tto[key] = from[key];
\t\t\t}
\t\t}

\t\tif (getOwnPropertySymbols) {
\t\t\tsymbols = getOwnPropertySymbols(from);
\t\t\tfor (var i = 0; i < symbols.length; i++) {
\t\t\t\tif (propIsEnumerable.call(from, symbols[i])) {
\t\t\t\t\tto[symbols[i]] = from[symbols[i]];
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn to;
};
", "node_modules/object-assign/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/object-assign/index.js");
    }
}
