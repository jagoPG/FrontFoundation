<?php

/* node_modules/es5-ext/array/#/concat/shim.js */
class __TwigTemplate_be2b024ff4d4cebdda930d426c54f63d78b33efa495ce307768c37b43ef7b993 extends Twig_Template
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
        $__internal_824fcbfed95de4773586bbf19148aa42bede17ba76d1e8db3cb7159e3da1f7ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_824fcbfed95de4773586bbf19148aa42bede17ba76d1e8db3cb7159e3da1f7ed->enter($__internal_824fcbfed95de4773586bbf19148aa42bede17ba76d1e8db3cb7159e3da1f7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/concat/shim.js"));

        // line 1
        echo "\"use strict\";

var isPlainArray       = require(\"../../is-plain-array\")
  , toPosInt           = require(\"../../../number/to-pos-integer\")
  , isObject           = require(\"../../../object/is-object\")
  , isConcatSpreadable = require(\"es6-symbol\").isConcatSpreadable
  , isArray            = Array.isArray
  , concat             = Array.prototype.concat
  , forEach            = Array.prototype.forEach
  , isSpreadable;

isSpreadable = function (value) {
\tif (!value) return false;
\tif (!isObject(value)) return false;
\tif (value[isConcatSpreadable] !== undefined) {
\t\treturn Boolean(value[isConcatSpreadable]);
\t}
\treturn isArray(value);
};

// eslint-disable-next-line no-unused-vars
module.exports = function (item /*, …items*/) {
\tvar result;
\tif (!this || !isArray(this) || isPlainArray(this)) {
\t\treturn concat.apply(this, arguments);
\t}
\tresult = new this.constructor();
\tif (isSpreadable(this)) {
\t\tforEach.call(this, function (val, i) {
\t\t\tresult[i] = val;
\t\t});
\t} else {
\t\tresult[0] = this;
\t}
\tforEach.call(arguments, function (arg) {
\t\tvar base;
\t\tif (isSpreadable(arg)) {
\t\t\tbase = result.length;
\t\t\tresult.length += toPosInt(arg.length);
\t\t\tforEach.call(arg, function (val, i) {
\t\t\t\tresult[base + i] = val;
\t\t\t});
\t\t\treturn;
\t\t}
\t\tresult.push(arg);
\t});
\treturn result;
};
";
        
        $__internal_824fcbfed95de4773586bbf19148aa42bede17ba76d1e8db3cb7159e3da1f7ed->leave($__internal_824fcbfed95de4773586bbf19148aa42bede17ba76d1e8db3cb7159e3da1f7ed_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/concat/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isPlainArray       = require(\"../../is-plain-array\")
  , toPosInt           = require(\"../../../number/to-pos-integer\")
  , isObject           = require(\"../../../object/is-object\")
  , isConcatSpreadable = require(\"es6-symbol\").isConcatSpreadable
  , isArray            = Array.isArray
  , concat             = Array.prototype.concat
  , forEach            = Array.prototype.forEach
  , isSpreadable;

isSpreadable = function (value) {
\tif (!value) return false;
\tif (!isObject(value)) return false;
\tif (value[isConcatSpreadable] !== undefined) {
\t\treturn Boolean(value[isConcatSpreadable]);
\t}
\treturn isArray(value);
};

// eslint-disable-next-line no-unused-vars
module.exports = function (item /*, …items*/) {
\tvar result;
\tif (!this || !isArray(this) || isPlainArray(this)) {
\t\treturn concat.apply(this, arguments);
\t}
\tresult = new this.constructor();
\tif (isSpreadable(this)) {
\t\tforEach.call(this, function (val, i) {
\t\t\tresult[i] = val;
\t\t});
\t} else {
\t\tresult[0] = this;
\t}
\tforEach.call(arguments, function (arg) {
\t\tvar base;
\t\tif (isSpreadable(arg)) {
\t\t\tbase = result.length;
\t\t\tresult.length += toPosInt(arg.length);
\t\t\tforEach.call(arg, function (val, i) {
\t\t\t\tresult[base + i] = val;
\t\t\t});
\t\t\treturn;
\t\t}
\t\tresult.push(arg);
\t});
\treturn result;
};
", "node_modules/es5-ext/array/#/concat/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/concat/shim.js");
    }
}
