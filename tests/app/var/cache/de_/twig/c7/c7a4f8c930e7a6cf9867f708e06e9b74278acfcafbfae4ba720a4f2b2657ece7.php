<?php

/* node_modules/es5-ext/array/#/exclusion.js */
class __TwigTemplate_ec7c9194d98caabc9b888912c0d7a271c5eb6a08e31f67594835c21ec85a4ced extends Twig_Template
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
        $__internal_82e3e78ac74e14420e20755e101f4389943863913f9852d00293fc5970e7d56a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e3e78ac74e14420e20755e101f4389943863913f9852d00293fc5970e7d56a->enter($__internal_82e3e78ac74e14420e20755e101f4389943863913f9852d00293fc5970e7d56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/exclusion.js"));

        // line 1
        echo "\"use strict\";

var value    = require(\"../../object/valid-value\")
  , aFrom    = require(\"../from\")
  , toArray  = require(\"../to-array\")
  , contains = require(\"./contains\")
  , byLength = require(\"./_compare-by-length\")
  , filter   = Array.prototype.filter
  , push     = Array.prototype.push;

module.exports = function (/* …lists*/) {
\tvar lists, seen, result;
\tif (!arguments.length) return aFrom(this);
\tpush.apply(lists = [this], arguments);
\tlists.forEach(value);
\tseen = [];
\tresult = [];
\tlists.sort(byLength).forEach(function (list) {
\t\tresult = result
\t\t\t.filter(function (item) {
\t\t\t\treturn !contains.call(list, item);
\t\t\t})
\t\t\t.concat(
\t\t\t\tfilter.call(list, function (item) {
\t\t\t\t\treturn !contains.call(seen, item);
\t\t\t\t})
\t\t\t);
\t\tpush.apply(seen, toArray(list));
\t});
\treturn result;
};
";
        
        $__internal_82e3e78ac74e14420e20755e101f4389943863913f9852d00293fc5970e7d56a->leave($__internal_82e3e78ac74e14420e20755e101f4389943863913f9852d00293fc5970e7d56a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/exclusion.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var value    = require(\"../../object/valid-value\")
  , aFrom    = require(\"../from\")
  , toArray  = require(\"../to-array\")
  , contains = require(\"./contains\")
  , byLength = require(\"./_compare-by-length\")
  , filter   = Array.prototype.filter
  , push     = Array.prototype.push;

module.exports = function (/* …lists*/) {
\tvar lists, seen, result;
\tif (!arguments.length) return aFrom(this);
\tpush.apply(lists = [this], arguments);
\tlists.forEach(value);
\tseen = [];
\tresult = [];
\tlists.sort(byLength).forEach(function (list) {
\t\tresult = result
\t\t\t.filter(function (item) {
\t\t\t\treturn !contains.call(list, item);
\t\t\t})
\t\t\t.concat(
\t\t\t\tfilter.call(list, function (item) {
\t\t\t\t\treturn !contains.call(seen, item);
\t\t\t\t})
\t\t\t);
\t\tpush.apply(seen, toArray(list));
\t});
\treturn result;
};
", "node_modules/es5-ext/array/#/exclusion.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/exclusion.js");
    }
}
