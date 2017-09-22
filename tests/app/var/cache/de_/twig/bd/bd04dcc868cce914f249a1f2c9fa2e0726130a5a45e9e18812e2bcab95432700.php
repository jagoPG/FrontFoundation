<?php

/* node_modules/es5-ext/array/#/filter/shim.js */
class __TwigTemplate_4ef28910d8e57a40aac403b38fdddf73df9fb7806ece3b2ebaca7bd11be99c28 extends Twig_Template
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
        $__internal_64b37b1679bb74a90fabf5c621e0fc79b2c506b917db881f6d3b7998b21ea244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b37b1679bb74a90fabf5c621e0fc79b2c506b917db881f6d3b7998b21ea244->enter($__internal_64b37b1679bb74a90fabf5c621e0fc79b2c506b917db881f6d3b7998b21ea244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/filter/shim.js"));

        // line 1
        echo "\"use strict\";

var isPlainArray = require(\"../../is-plain-array\")
  , callable     = require(\"../../../object/valid-callable\")
  , isArray      = Array.isArray
  , filter       = Array.prototype.filter
  , forEach      = Array.prototype.forEach
  , call         = Function.prototype.call;

module.exports = function (callbackFn /*, thisArg*/) {
\tvar result, thisArg, i;
\tif (!this || !isArray(this) || isPlainArray(this)) {
\t\treturn filter.apply(this, arguments);
\t}
\tcallable(callbackFn);
\tthisArg = arguments[1];
\tresult = new this.constructor();
\ti = 0;
\tforEach.call(this, function (val, j, self) {
\t\tif (call.call(callbackFn, thisArg, val, j, self)) result[i++] = val;
\t});
\treturn result;
};
";
        
        $__internal_64b37b1679bb74a90fabf5c621e0fc79b2c506b917db881f6d3b7998b21ea244->leave($__internal_64b37b1679bb74a90fabf5c621e0fc79b2c506b917db881f6d3b7998b21ea244_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/filter/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isPlainArray = require(\"../../is-plain-array\")
  , callable     = require(\"../../../object/valid-callable\")
  , isArray      = Array.isArray
  , filter       = Array.prototype.filter
  , forEach      = Array.prototype.forEach
  , call         = Function.prototype.call;

module.exports = function (callbackFn /*, thisArg*/) {
\tvar result, thisArg, i;
\tif (!this || !isArray(this) || isPlainArray(this)) {
\t\treturn filter.apply(this, arguments);
\t}
\tcallable(callbackFn);
\tthisArg = arguments[1];
\tresult = new this.constructor();
\ti = 0;
\tforEach.call(this, function (val, j, self) {
\t\tif (call.call(callbackFn, thisArg, val, j, self)) result[i++] = val;
\t});
\treturn result;
};
", "node_modules/es5-ext/array/#/filter/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/filter/shim.js");
    }
}
