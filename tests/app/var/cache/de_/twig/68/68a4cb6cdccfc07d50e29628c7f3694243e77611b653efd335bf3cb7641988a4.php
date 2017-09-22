<?php

/* node_modules/es5-ext/object/serialize.js */
class __TwigTemplate_aef28e265bac463a047be071030677fbb0e9f90758cef8fd2a4a6882946655f2 extends Twig_Template
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
        $__internal_9484ecf755b8e5e147ed849963e69768aa72a7970d8a2f7f112a265126384d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9484ecf755b8e5e147ed849963e69768aa72a7970d8a2f7f112a265126384d65->enter($__internal_9484ecf755b8e5e147ed849963e69768aa72a7970d8a2f7f112a265126384d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/serialize.js"));

        // line 1
        echo "\"use strict\";

var toArray  = require(\"./to-array\")
  , isDate   = require(\"../date/is-date\")
  , isValue  = require(\"../object/is-value\")
  , isRegExp = require(\"../reg-exp/is-reg-exp\");

var isArray = Array.isArray
  , stringify = JSON.stringify
  , objHasOwnProperty = Object.prototype.hasOwnProperty;
var keyValueToString = function (value, key) {
\treturn stringify(key) + \":\" + exports(value);
};

var sparseMap = function (arr) {
\tvar i, length = arr.length, result = new Array(length);
\tfor (i = 0; i < length; ++i) {
\t\tif (!objHasOwnProperty.call(arr, i)) continue;
\t\tresult[i] = exports(arr[i]);
\t}
\treturn result;
};

module.exports = exports = function (obj) {
\tif (!isValue(obj)) return String(obj);
\tswitch (typeof obj) {
\t\tcase \"string\":
\t\t\treturn stringify(obj);
\t\tcase \"number\":
\t\tcase \"boolean\":
\t\tcase \"function\":
\t\t\treturn String(obj);
\t\tcase \"object\":
\t\t\tif (isArray(obj)) return \"[\" + sparseMap(obj) + \"]\";
\t\t\tif (isRegExp(obj)) return String(obj);
\t\t\tif (isDate(obj)) return \"new Date(\" + obj.valueOf() + \")\";
\t\t\treturn \"{\" + toArray(obj, keyValueToString) + \"}\";
\t\tdefault:
\t\t\tthrow new TypeError(\"Serialization of \" + String(obj) + \"is unsupported\");
\t}
};
";
        
        $__internal_9484ecf755b8e5e147ed849963e69768aa72a7970d8a2f7f112a265126384d65->leave($__internal_9484ecf755b8e5e147ed849963e69768aa72a7970d8a2f7f112a265126384d65_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/serialize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var toArray  = require(\"./to-array\")
  , isDate   = require(\"../date/is-date\")
  , isValue  = require(\"../object/is-value\")
  , isRegExp = require(\"../reg-exp/is-reg-exp\");

var isArray = Array.isArray
  , stringify = JSON.stringify
  , objHasOwnProperty = Object.prototype.hasOwnProperty;
var keyValueToString = function (value, key) {
\treturn stringify(key) + \":\" + exports(value);
};

var sparseMap = function (arr) {
\tvar i, length = arr.length, result = new Array(length);
\tfor (i = 0; i < length; ++i) {
\t\tif (!objHasOwnProperty.call(arr, i)) continue;
\t\tresult[i] = exports(arr[i]);
\t}
\treturn result;
};

module.exports = exports = function (obj) {
\tif (!isValue(obj)) return String(obj);
\tswitch (typeof obj) {
\t\tcase \"string\":
\t\t\treturn stringify(obj);
\t\tcase \"number\":
\t\tcase \"boolean\":
\t\tcase \"function\":
\t\t\treturn String(obj);
\t\tcase \"object\":
\t\t\tif (isArray(obj)) return \"[\" + sparseMap(obj) + \"]\";
\t\t\tif (isRegExp(obj)) return String(obj);
\t\t\tif (isDate(obj)) return \"new Date(\" + obj.valueOf() + \")\";
\t\t\treturn \"{\" + toArray(obj, keyValueToString) + \"}\";
\t\tdefault:
\t\t\tthrow new TypeError(\"Serialization of \" + String(obj) + \"is unsupported\");
\t}
};
", "node_modules/es5-ext/object/serialize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/serialize.js");
    }
}
