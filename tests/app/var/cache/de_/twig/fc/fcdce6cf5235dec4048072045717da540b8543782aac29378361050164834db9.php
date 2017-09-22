<?php

/* node_modules/es5-ext/array/#/intersection.js */
class __TwigTemplate_9605d2d543ee71dfba47f695e3abe1a2cff6254876c83ae4414f87ffc945b398 extends Twig_Template
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
        $__internal_6a79fc02e8d14979009013f23e88715a4f79db2037a2c8c68d2de4a2469322e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a79fc02e8d14979009013f23e88715a4f79db2037a2c8c68d2de4a2469322e9->enter($__internal_6a79fc02e8d14979009013f23e88715a4f79db2037a2c8c68d2de4a2469322e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/intersection.js"));

        // line 1
        echo "\"use strict\";

var value    = require(\"../../object/valid-value\")
  , contains = require(\"./contains\")
  , byLength = require(\"./_compare-by-length\")
  , filter   = Array.prototype.filter
  , push     = Array.prototype.push
  , slice    = Array.prototype.slice;

module.exports = function (/* …list*/) {
\tvar lists;
\tif (!arguments.length) slice.call(this);
\tpush.apply(lists = [this], arguments);
\tlists.forEach(value);
\tlists.sort(byLength);
\treturn lists.reduce(function (list1, list2) {
\t\treturn filter.call(list1, function (item) {
\t\t\treturn contains.call(list2, item);
\t\t});
\t});
};
";
        
        $__internal_6a79fc02e8d14979009013f23e88715a4f79db2037a2c8c68d2de4a2469322e9->leave($__internal_6a79fc02e8d14979009013f23e88715a4f79db2037a2c8c68d2de4a2469322e9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/intersection.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var value    = require(\"../../object/valid-value\")
  , contains = require(\"./contains\")
  , byLength = require(\"./_compare-by-length\")
  , filter   = Array.prototype.filter
  , push     = Array.prototype.push
  , slice    = Array.prototype.slice;

module.exports = function (/* …list*/) {
\tvar lists;
\tif (!arguments.length) slice.call(this);
\tpush.apply(lists = [this], arguments);
\tlists.forEach(value);
\tlists.sort(byLength);
\treturn lists.reduce(function (list1, list2) {
\t\treturn filter.call(list1, function (item) {
\t\t\treturn contains.call(list2, item);
\t\t});
\t});
};
", "node_modules/es5-ext/array/#/intersection.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/intersection.js");
    }
}
