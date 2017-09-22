<?php

/* node_modules/es6-iterator/for-of.js */
class __TwigTemplate_cbbbb2a641142a3dc5876dba697b952430470d892dad3044c6c6cd2e7b70d7c2 extends Twig_Template
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
        $__internal_c9551d27b190f23004ad5b282f2eeb0c7e687e8563fdc20a245232c14cbe3d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9551d27b190f23004ad5b282f2eeb0c7e687e8563fdc20a245232c14cbe3d4d->enter($__internal_c9551d27b190f23004ad5b282f2eeb0c7e687e8563fdc20a245232c14cbe3d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-iterator/for-of.js"));

        // line 1
        echo "'use strict';

var isArguments = require('es5-ext/function/is-arguments')
  , callable    = require('es5-ext/object/valid-callable')
  , isString    = require('es5-ext/string/is-string')
  , get         = require('./get')

  , isArray = Array.isArray, call = Function.prototype.call
  , some = Array.prototype.some;

module.exports = function (iterable, cb/*, thisArg*/) {
\tvar mode, thisArg = arguments[2], result, doBreak, broken, i, l, char, code;
\tif (isArray(iterable) || isArguments(iterable)) mode = 'array';
\telse if (isString(iterable)) mode = 'string';
\telse iterable = get(iterable);

\tcallable(cb);
\tdoBreak = function () { broken = true; };
\tif (mode === 'array') {
\t\tsome.call(iterable, function (value) {
\t\t\tcall.call(cb, thisArg, value, doBreak);
\t\t\tif (broken) return true;
\t\t});
\t\treturn;
\t}
\tif (mode === 'string') {
\t\tl = iterable.length;
\t\tfor (i = 0; i < l; ++i) {
\t\t\tchar = iterable[i];
\t\t\tif ((i + 1) < l) {
\t\t\t\tcode = char.charCodeAt(0);
\t\t\t\tif ((code >= 0xD800) && (code <= 0xDBFF)) char += iterable[++i];
\t\t\t}
\t\t\tcall.call(cb, thisArg, char, doBreak);
\t\t\tif (broken) break;
\t\t}
\t\treturn;
\t}
\tresult = iterable.next();

\twhile (!result.done) {
\t\tcall.call(cb, thisArg, result.value, doBreak);
\t\tif (broken) return;
\t\tresult = iterable.next();
\t}
};
";
        
        $__internal_c9551d27b190f23004ad5b282f2eeb0c7e687e8563fdc20a245232c14cbe3d4d->leave($__internal_c9551d27b190f23004ad5b282f2eeb0c7e687e8563fdc20a245232c14cbe3d4d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-iterator/for-of.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var isArguments = require('es5-ext/function/is-arguments')
  , callable    = require('es5-ext/object/valid-callable')
  , isString    = require('es5-ext/string/is-string')
  , get         = require('./get')

  , isArray = Array.isArray, call = Function.prototype.call
  , some = Array.prototype.some;

module.exports = function (iterable, cb/*, thisArg*/) {
\tvar mode, thisArg = arguments[2], result, doBreak, broken, i, l, char, code;
\tif (isArray(iterable) || isArguments(iterable)) mode = 'array';
\telse if (isString(iterable)) mode = 'string';
\telse iterable = get(iterable);

\tcallable(cb);
\tdoBreak = function () { broken = true; };
\tif (mode === 'array') {
\t\tsome.call(iterable, function (value) {
\t\t\tcall.call(cb, thisArg, value, doBreak);
\t\t\tif (broken) return true;
\t\t});
\t\treturn;
\t}
\tif (mode === 'string') {
\t\tl = iterable.length;
\t\tfor (i = 0; i < l; ++i) {
\t\t\tchar = iterable[i];
\t\t\tif ((i + 1) < l) {
\t\t\t\tcode = char.charCodeAt(0);
\t\t\t\tif ((code >= 0xD800) && (code <= 0xDBFF)) char += iterable[++i];
\t\t\t}
\t\t\tcall.call(cb, thisArg, char, doBreak);
\t\t\tif (broken) break;
\t\t}
\t\treturn;
\t}
\tresult = iterable.next();

\twhile (!result.done) {
\t\tcall.call(cb, thisArg, result.value, doBreak);
\t\tif (broken) return;
\t\tresult = iterable.next();
\t}
};
", "node_modules/es6-iterator/for-of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-iterator/for-of.js");
    }
}
