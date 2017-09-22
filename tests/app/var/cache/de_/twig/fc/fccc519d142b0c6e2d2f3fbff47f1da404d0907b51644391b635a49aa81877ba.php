<?php

/* node_modules/es5-ext/array/#/slice/shim.js */
class __TwigTemplate_2604d36d55b0363f263dcf70adab853e1e7871fcdc21f843bbbb081ab2a08612 extends Twig_Template
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
        $__internal_c26cdd2b163e4d7e02bfd31dc39f24a28cfc8c9e943372c75d28e3322690648b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c26cdd2b163e4d7e02bfd31dc39f24a28cfc8c9e943372c75d28e3322690648b->enter($__internal_c26cdd2b163e4d7e02bfd31dc39f24a28cfc8c9e943372c75d28e3322690648b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/slice/shim.js"));

        // line 1
        echo "\"use strict\";

var toInteger         = require(\"../../../number/to-integer\")
  , toPosInt          = require(\"../../../number/to-pos-integer\")
  , isPlainArray      = require(\"../../is-plain-array\")
  , isArray           = Array.isArray
  , slice             = Array.prototype.slice
  , objHasOwnProperty = Object.prototype.hasOwnProperty
  , max               = Math.max;

module.exports = function (start, end) {
\tvar length, result, i;
\tif (!this || !isArray(this) || isPlainArray(this)) {
\t\treturn slice.apply(this, arguments);
\t}
\tlength = toPosInt(this.length);
\tstart = toInteger(start);
\tif (start < 0) start = max(length + start, 0);
\telse if (start > length) start = length;
\tif (end === undefined) {
\t\tend = length;
\t} else {
\t\tend = toInteger(end);
\t\tif (end < 0) end = max(length + end, 0);
\t\telse if (end > length) end = length;
\t}
\tif (start > end) start = end;
\tresult = new this.constructor(end - start);
\ti = 0;
\twhile (start !== end) {
\t\tif (objHasOwnProperty.call(this, start)) result[i] = this[start];
\t\t++i;
\t\t++start;
\t}
\treturn result;
};
";
        
        $__internal_c26cdd2b163e4d7e02bfd31dc39f24a28cfc8c9e943372c75d28e3322690648b->leave($__internal_c26cdd2b163e4d7e02bfd31dc39f24a28cfc8c9e943372c75d28e3322690648b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/slice/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var toInteger         = require(\"../../../number/to-integer\")
  , toPosInt          = require(\"../../../number/to-pos-integer\")
  , isPlainArray      = require(\"../../is-plain-array\")
  , isArray           = Array.isArray
  , slice             = Array.prototype.slice
  , objHasOwnProperty = Object.prototype.hasOwnProperty
  , max               = Math.max;

module.exports = function (start, end) {
\tvar length, result, i;
\tif (!this || !isArray(this) || isPlainArray(this)) {
\t\treturn slice.apply(this, arguments);
\t}
\tlength = toPosInt(this.length);
\tstart = toInteger(start);
\tif (start < 0) start = max(length + start, 0);
\telse if (start > length) start = length;
\tif (end === undefined) {
\t\tend = length;
\t} else {
\t\tend = toInteger(end);
\t\tif (end < 0) end = max(length + end, 0);
\t\telse if (end > length) end = length;
\t}
\tif (start > end) start = end;
\tresult = new this.constructor(end - start);
\ti = 0;
\twhile (start !== end) {
\t\tif (objHasOwnProperty.call(this, start)) result[i] = this[start];
\t\t++i;
\t\t++start;
\t}
\treturn result;
};
", "node_modules/es5-ext/array/#/slice/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/slice/shim.js");
    }
}
