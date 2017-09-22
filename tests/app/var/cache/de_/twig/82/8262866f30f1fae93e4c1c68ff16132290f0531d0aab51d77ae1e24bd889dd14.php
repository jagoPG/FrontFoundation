<?php

/* node_modules/es-to-primitive/es6.js */
class __TwigTemplate_4339caed9bb0c954685b616ec4c6827baa15ebb7ed0cd07996b6f5650b251ba9 extends Twig_Template
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
        $__internal_85fb13b3bd81374c92a2a4c1fb4ec3119b0039402831b5ac3ca41e7e6a3da715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85fb13b3bd81374c92a2a4c1fb4ec3119b0039402831b5ac3ca41e7e6a3da715->enter($__internal_85fb13b3bd81374c92a2a4c1fb4ec3119b0039402831b5ac3ca41e7e6a3da715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-to-primitive/es6.js"));

        // line 1
        echo "'use strict';

var hasSymbols = typeof Symbol === 'function' && typeof Symbol.iterator === 'symbol';

var isPrimitive = require('./helpers/isPrimitive');
var isCallable = require('is-callable');
var isDate = require('is-date-object');
var isSymbol = require('is-symbol');

var ordinaryToPrimitive = function OrdinaryToPrimitive(O, hint) {
\tif (typeof O === 'undefined' || O === null) {
\t\tthrow new TypeError('Cannot call method on ' + O);
\t}
\tif (typeof hint !== 'string' || (hint !== 'number' && hint !== 'string')) {
\t\tthrow new TypeError('hint must be \"string\" or \"number\"');
\t}
\tvar methodNames = hint === 'string' ? ['toString', 'valueOf'] : ['valueOf', 'toString'];
\tvar method, result, i;
\tfor (i = 0; i < methodNames.length; ++i) {
\t\tmethod = O[methodNames[i]];
\t\tif (isCallable(method)) {
\t\t\tresult = method.call(O);
\t\t\tif (isPrimitive(result)) {
\t\t\t\treturn result;
\t\t\t}
\t\t}
\t}
\tthrow new TypeError('No default value');
};

var GetMethod = function GetMethod(O, P) {
\tvar func = O[P];
\tif (func !== null && typeof func !== 'undefined') {
\t\tif (!isCallable(func)) {
\t\t\tthrow new TypeError(func + ' returned for property ' + P + ' of object ' + O + ' is not a function');
\t\t}
\t\treturn func;
\t}
};

// http://www.ecma-international.org/ecma-262/6.0/#sec-toprimitive
module.exports = function ToPrimitive(input, PreferredType) {
\tif (isPrimitive(input)) {
\t\treturn input;
\t}
\tvar hint = 'default';
\tif (arguments.length > 1) {
\t\tif (PreferredType === String) {
\t\t\thint = 'string';
\t\t} else if (PreferredType === Number) {
\t\t\thint = 'number';
\t\t}
\t}

\tvar exoticToPrim;
\tif (hasSymbols) {
\t\tif (Symbol.toPrimitive) {
\t\t\texoticToPrim = GetMethod(input, Symbol.toPrimitive);
\t\t} else if (isSymbol(input)) {
\t\t\texoticToPrim = Symbol.prototype.valueOf;
\t\t}
\t}
\tif (typeof exoticToPrim !== 'undefined') {
\t\tvar result = exoticToPrim.call(input, hint);
\t\tif (isPrimitive(result)) {
\t\t\treturn result;
\t\t}
\t\tthrow new TypeError('unable to convert exotic object to primitive');
\t}
\tif (hint === 'default' && (isDate(input) || isSymbol(input))) {
\t\thint = 'string';
\t}
\treturn ordinaryToPrimitive(input, hint === 'default' ? 'number' : hint);
};
";
        
        $__internal_85fb13b3bd81374c92a2a4c1fb4ec3119b0039402831b5ac3ca41e7e6a3da715->leave($__internal_85fb13b3bd81374c92a2a4c1fb4ec3119b0039402831b5ac3ca41e7e6a3da715_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-to-primitive/es6.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var hasSymbols = typeof Symbol === 'function' && typeof Symbol.iterator === 'symbol';

var isPrimitive = require('./helpers/isPrimitive');
var isCallable = require('is-callable');
var isDate = require('is-date-object');
var isSymbol = require('is-symbol');

var ordinaryToPrimitive = function OrdinaryToPrimitive(O, hint) {
\tif (typeof O === 'undefined' || O === null) {
\t\tthrow new TypeError('Cannot call method on ' + O);
\t}
\tif (typeof hint !== 'string' || (hint !== 'number' && hint !== 'string')) {
\t\tthrow new TypeError('hint must be \"string\" or \"number\"');
\t}
\tvar methodNames = hint === 'string' ? ['toString', 'valueOf'] : ['valueOf', 'toString'];
\tvar method, result, i;
\tfor (i = 0; i < methodNames.length; ++i) {
\t\tmethod = O[methodNames[i]];
\t\tif (isCallable(method)) {
\t\t\tresult = method.call(O);
\t\t\tif (isPrimitive(result)) {
\t\t\t\treturn result;
\t\t\t}
\t\t}
\t}
\tthrow new TypeError('No default value');
};

var GetMethod = function GetMethod(O, P) {
\tvar func = O[P];
\tif (func !== null && typeof func !== 'undefined') {
\t\tif (!isCallable(func)) {
\t\t\tthrow new TypeError(func + ' returned for property ' + P + ' of object ' + O + ' is not a function');
\t\t}
\t\treturn func;
\t}
};

// http://www.ecma-international.org/ecma-262/6.0/#sec-toprimitive
module.exports = function ToPrimitive(input, PreferredType) {
\tif (isPrimitive(input)) {
\t\treturn input;
\t}
\tvar hint = 'default';
\tif (arguments.length > 1) {
\t\tif (PreferredType === String) {
\t\t\thint = 'string';
\t\t} else if (PreferredType === Number) {
\t\t\thint = 'number';
\t\t}
\t}

\tvar exoticToPrim;
\tif (hasSymbols) {
\t\tif (Symbol.toPrimitive) {
\t\t\texoticToPrim = GetMethod(input, Symbol.toPrimitive);
\t\t} else if (isSymbol(input)) {
\t\t\texoticToPrim = Symbol.prototype.valueOf;
\t\t}
\t}
\tif (typeof exoticToPrim !== 'undefined') {
\t\tvar result = exoticToPrim.call(input, hint);
\t\tif (isPrimitive(result)) {
\t\t\treturn result;
\t\t}
\t\tthrow new TypeError('unable to convert exotic object to primitive');
\t}
\tif (hint === 'default' && (isDate(input) || isSymbol(input))) {
\t\thint = 'string';
\t}
\treturn ordinaryToPrimitive(input, hint === 'default' ? 'number' : hint);
};
", "node_modules/es-to-primitive/es6.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-to-primitive/es6.js");
    }
}
