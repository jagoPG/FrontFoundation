<?php

/* node_modules/es5-ext/json/safe-stringify.js */
class __TwigTemplate_425c6466fe57a50cc794211fa58deec37d879aa302131146800ebd07ffad2a12 extends Twig_Template
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
        $__internal_15483734c7c65ec3b6e915bdd9a0d3512938f165703fe25a8be42d0de2c34d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15483734c7c65ec3b6e915bdd9a0d3512938f165703fe25a8be42d0de2c34d82->enter($__internal_15483734c7c65ec3b6e915bdd9a0d3512938f165703fe25a8be42d0de2c34d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/json/safe-stringify.js"));

        // line 1
        echo "\"use strict\";

var compact   = require(\"../array/#/compact\")
  , isObject  = require(\"../object/is-object\")
  , toArray   = require(\"../object/to-array\")
  , isArray   = Array.isArray
  , stringify = JSON.stringify;

module.exports = function self (value /*, replacer, space*/) {
\tvar replacer = arguments[1], space = arguments[2];
\ttry {
\t\treturn stringify(value, replacer, space);
\t} catch (e) {
\t\tif (!isObject(value)) return null;
\t\tif (typeof value.toJSON === \"function\") return null;
\t\tif (isArray(value)) {
\t\t\treturn (
\t\t\t\t\"[\" +
\t\t\t\tcompact.call(
\t\t\t\t\tvalue.map(function (item) {
\t\t\t\t\t\treturn self(item, replacer, space);
\t\t\t\t\t})
\t\t\t\t) +
\t\t\t\t\"]\"
\t\t\t);
\t\t}
\t\treturn (
\t\t\t\"{\" +
\t\t\tcompact
\t\t\t\t.call(
\t\t\t\t\ttoArray(value, function (item, key) {
\t\t\t\t\t\titem = self(item, replacer, space);
\t\t\t\t\t\tif (!item) return null;
\t\t\t\t\t\treturn stringify(key) + \":\" + item;
\t\t\t\t\t})
\t\t\t\t)
\t\t\t\t.join(\",\") +
\t\t\t\"}\"
\t\t);
\t}
};
";
        
        $__internal_15483734c7c65ec3b6e915bdd9a0d3512938f165703fe25a8be42d0de2c34d82->leave($__internal_15483734c7c65ec3b6e915bdd9a0d3512938f165703fe25a8be42d0de2c34d82_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/json/safe-stringify.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var compact   = require(\"../array/#/compact\")
  , isObject  = require(\"../object/is-object\")
  , toArray   = require(\"../object/to-array\")
  , isArray   = Array.isArray
  , stringify = JSON.stringify;

module.exports = function self (value /*, replacer, space*/) {
\tvar replacer = arguments[1], space = arguments[2];
\ttry {
\t\treturn stringify(value, replacer, space);
\t} catch (e) {
\t\tif (!isObject(value)) return null;
\t\tif (typeof value.toJSON === \"function\") return null;
\t\tif (isArray(value)) {
\t\t\treturn (
\t\t\t\t\"[\" +
\t\t\t\tcompact.call(
\t\t\t\t\tvalue.map(function (item) {
\t\t\t\t\t\treturn self(item, replacer, space);
\t\t\t\t\t})
\t\t\t\t) +
\t\t\t\t\"]\"
\t\t\t);
\t\t}
\t\treturn (
\t\t\t\"{\" +
\t\t\tcompact
\t\t\t\t.call(
\t\t\t\t\ttoArray(value, function (item, key) {
\t\t\t\t\t\titem = self(item, replacer, space);
\t\t\t\t\t\tif (!item) return null;
\t\t\t\t\t\treturn stringify(key) + \":\" + item;
\t\t\t\t\t})
\t\t\t\t)
\t\t\t\t.join(\",\") +
\t\t\t\"}\"
\t\t);
\t}
};
", "node_modules/es5-ext/json/safe-stringify.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/json/safe-stringify.js");
    }
}
