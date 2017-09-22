<?php

/* node_modules/es5-ext/object/is-copy-deep.js */
class __TwigTemplate_57e53310136c9d535df2e5978d58ca159d7eb0a1f1de16fad7ea4c1731bfa4da extends Twig_Template
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
        $__internal_0ee81e9d0d587caaaa9666ea3b597e94d3065557dd99abdd92072b2c9618bc27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee81e9d0d587caaaa9666ea3b597e94d3065557dd99abdd92072b2c9618bc27->enter($__internal_0ee81e9d0d587caaaa9666ea3b597e94d3065557dd99abdd92072b2c9618bc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/is-copy-deep.js"));

        // line 1
        echo "\"use strict\";

var eq            = require(\"./eq\")
  , isPlainObject = require(\"./is-plain-object\")
  , value         = require(\"./valid-value\");

var isArray = Array.isArray
  , keys = Object.keys
  , objPropertyIsEnumerable = Object.prototype.propertyIsEnumerable
  , objHasOwnProperty = Object.prototype.hasOwnProperty
  , eqArr
  , eqVal
  , eqObj;

eqArr = function (arr1, arr2, recMap) {
\tvar i, length = arr1.length;
\tif (length !== arr2.length) return false;
\tfor (i = 0; i < length; ++i) {
\t\tif (objHasOwnProperty.call(arr1, i) !== objHasOwnProperty.call(arr2, i)) return false;
\t\tif (!eqVal(arr1[i], arr2[i], recMap)) return false;
\t}
\treturn true;
};

eqObj = function (obj1, obj2, recMap) {
\tvar k1 = keys(obj1), k2 = keys(obj2);
\tif (k1.length !== k2.length) return false;
\treturn k1.every(function (key) {
\t\tif (!objPropertyIsEnumerable.call(obj2, key)) return false;
\t\treturn eqVal(obj1[key], obj2[key], recMap);
\t});
};

eqVal = function (val1, val2, recMap) {
\tvar i, eqX, c1, c2;
\tif (eq(val1, val2)) return true;
\tif (isPlainObject(val1)) {
\t\tif (!isPlainObject(val2)) return false;
\t\teqX = eqObj;
\t} else if (isArray(val1) && isArray(val2)) {
\t\teqX = eqArr;
\t} else {
\t\treturn false;
\t}
\tc1 = recMap[0];
\tc2 = recMap[1];
\ti = c1.indexOf(val1);
\tif (i === -1) {
\t\ti = c1.push(val1) - 1;
\t\tc2[i] = [];
\t} else if (c2[i].indexOf(val2) !== -1) return true;
\tc2[i].push(val2);
\treturn eqX(val1, val2, recMap);
};

module.exports = function (val1, val2) {
\tif (eq(value(val1), value(val2))) return true;
\treturn eqVal(Object(val1), Object(val2), [[], []]);
};
";
        
        $__internal_0ee81e9d0d587caaaa9666ea3b597e94d3065557dd99abdd92072b2c9618bc27->leave($__internal_0ee81e9d0d587caaaa9666ea3b597e94d3065557dd99abdd92072b2c9618bc27_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/is-copy-deep.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var eq            = require(\"./eq\")
  , isPlainObject = require(\"./is-plain-object\")
  , value         = require(\"./valid-value\");

var isArray = Array.isArray
  , keys = Object.keys
  , objPropertyIsEnumerable = Object.prototype.propertyIsEnumerable
  , objHasOwnProperty = Object.prototype.hasOwnProperty
  , eqArr
  , eqVal
  , eqObj;

eqArr = function (arr1, arr2, recMap) {
\tvar i, length = arr1.length;
\tif (length !== arr2.length) return false;
\tfor (i = 0; i < length; ++i) {
\t\tif (objHasOwnProperty.call(arr1, i) !== objHasOwnProperty.call(arr2, i)) return false;
\t\tif (!eqVal(arr1[i], arr2[i], recMap)) return false;
\t}
\treturn true;
};

eqObj = function (obj1, obj2, recMap) {
\tvar k1 = keys(obj1), k2 = keys(obj2);
\tif (k1.length !== k2.length) return false;
\treturn k1.every(function (key) {
\t\tif (!objPropertyIsEnumerable.call(obj2, key)) return false;
\t\treturn eqVal(obj1[key], obj2[key], recMap);
\t});
};

eqVal = function (val1, val2, recMap) {
\tvar i, eqX, c1, c2;
\tif (eq(val1, val2)) return true;
\tif (isPlainObject(val1)) {
\t\tif (!isPlainObject(val2)) return false;
\t\teqX = eqObj;
\t} else if (isArray(val1) && isArray(val2)) {
\t\teqX = eqArr;
\t} else {
\t\treturn false;
\t}
\tc1 = recMap[0];
\tc2 = recMap[1];
\ti = c1.indexOf(val1);
\tif (i === -1) {
\t\ti = c1.push(val1) - 1;
\t\tc2[i] = [];
\t} else if (c2[i].indexOf(val2) !== -1) return true;
\tc2[i].push(val2);
\treturn eqX(val1, val2, recMap);
};

module.exports = function (val1, val2) {
\tif (eq(value(val1), value(val2))) return true;
\treturn eqVal(Object(val1), Object(val2), [[], []]);
};
", "node_modules/es5-ext/object/is-copy-deep.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/is-copy-deep.js");
    }
}
