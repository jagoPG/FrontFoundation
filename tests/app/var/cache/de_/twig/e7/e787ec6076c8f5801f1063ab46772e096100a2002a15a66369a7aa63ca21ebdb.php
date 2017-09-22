<?php

/* node_modules/es5-ext/object/copy.js */
class __TwigTemplate_524d50a8fe5bc62aac2f8e19692d66183c76d401ae964f6637f8c0f8de907e12 extends Twig_Template
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
        $__internal_034176ed875e284c3811831b838a6bb0170ff5e913269380a28680f52b6fae63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034176ed875e284c3811831b838a6bb0170ff5e913269380a28680f52b6fae63->enter($__internal_034176ed875e284c3811831b838a6bb0170ff5e913269380a28680f52b6fae63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/copy.js"));

        // line 1
        echo "\"use strict\";

var aFrom  = require(\"../array/from\")
  , assign = require(\"./assign\")
  , value  = require(\"./valid-value\");

module.exports = function (obj/*, propertyNames, options*/) {
\tvar copy = Object(value(obj)), propertyNames = arguments[1], options = Object(arguments[2]);
\tif (copy !== obj && !propertyNames) return copy;
\tvar result = {};
\tif (propertyNames) {
\t\taFrom(propertyNames, function (propertyName) {
\t\t\tif (options.ensure || propertyName in obj) result[propertyName] = obj[propertyName];
\t\t});
\t} else {
\t\tassign(result, obj);
\t}
\treturn result;
};
";
        
        $__internal_034176ed875e284c3811831b838a6bb0170ff5e913269380a28680f52b6fae63->leave($__internal_034176ed875e284c3811831b838a6bb0170ff5e913269380a28680f52b6fae63_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/copy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var aFrom  = require(\"../array/from\")
  , assign = require(\"./assign\")
  , value  = require(\"./valid-value\");

module.exports = function (obj/*, propertyNames, options*/) {
\tvar copy = Object(value(obj)), propertyNames = arguments[1], options = Object(arguments[2]);
\tif (copy !== obj && !propertyNames) return copy;
\tvar result = {};
\tif (propertyNames) {
\t\taFrom(propertyNames, function (propertyName) {
\t\t\tif (options.ensure || propertyName in obj) result[propertyName] = obj[propertyName];
\t\t});
\t} else {
\t\tassign(result, obj);
\t}
\treturn result;
};
", "node_modules/es5-ext/object/copy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/copy.js");
    }
}
