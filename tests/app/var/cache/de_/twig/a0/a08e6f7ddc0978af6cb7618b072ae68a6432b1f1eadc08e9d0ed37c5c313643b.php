<?php

/* node_modules/es5-ext/array/#/map/shim.js */
class __TwigTemplate_85d50def4791f9d9acbee476021d45c64d39401b35a9de8888b99cd257bb0fd7 extends Twig_Template
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
        $__internal_cf51fdb28953356eaf897e3d841862dbe0a0285eb374a610df26c9033d33cb07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf51fdb28953356eaf897e3d841862dbe0a0285eb374a610df26c9033d33cb07->enter($__internal_cf51fdb28953356eaf897e3d841862dbe0a0285eb374a610df26c9033d33cb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/map/shim.js"));

        // line 1
        echo "\"use strict\";

var isPlainArray = require(\"../../is-plain-array\")
  , callable     = require(\"../../../object/valid-callable\")

  , isArray = Array.isArray, map = Array.prototype.map
  , forEach = Array.prototype.forEach, call = Function.prototype.call;

module.exports = function (callbackFn/*, thisArg*/) {
\tvar result, thisArg;
\tif (!this || !isArray(this) || isPlainArray(this)) {
\t\treturn map.apply(this, arguments);
\t}
\tcallable(callbackFn);
\tthisArg = arguments[1];
\tresult = new this.constructor(this.length);
\tforEach.call(this, function (val, i, self) {
\t\tresult[i] = call.call(callbackFn, thisArg, val, i, self);
\t});
\treturn result;
};
";
        
        $__internal_cf51fdb28953356eaf897e3d841862dbe0a0285eb374a610df26c9033d33cb07->leave($__internal_cf51fdb28953356eaf897e3d841862dbe0a0285eb374a610df26c9033d33cb07_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/map/shim.js";
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

  , isArray = Array.isArray, map = Array.prototype.map
  , forEach = Array.prototype.forEach, call = Function.prototype.call;

module.exports = function (callbackFn/*, thisArg*/) {
\tvar result, thisArg;
\tif (!this || !isArray(this) || isPlainArray(this)) {
\t\treturn map.apply(this, arguments);
\t}
\tcallable(callbackFn);
\tthisArg = arguments[1];
\tresult = new this.constructor(this.length);
\tforEach.call(this, function (val, i, self) {
\t\tresult[i] = call.call(callbackFn, thisArg, val, i, self);
\t});
\treturn result;
};
", "node_modules/es5-ext/array/#/map/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/map/shim.js");
    }
}
