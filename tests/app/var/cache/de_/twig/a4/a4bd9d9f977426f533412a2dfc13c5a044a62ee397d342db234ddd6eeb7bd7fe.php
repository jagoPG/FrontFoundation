<?php

/* node_modules/es5-ext/test/iterable/for-each.js */
class __TwigTemplate_13fb688941bac71690e0b2637b2b5826015cdfefdbca7755d5e735ae9ec5ab9b extends Twig_Template
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
        $__internal_5b490cd1966739c5efabd8b29060c76f7aa3ab3525f6cdb992db999a260f3986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b490cd1966739c5efabd8b29060c76f7aa3ab3525f6cdb992db999a260f3986->enter($__internal_5b490cd1966739c5efabd8b29060c76f7aa3ab3525f6cdb992db999a260f3986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/iterable/for-each.js"));

        // line 1
        echo "\"use strict\";

var ArrayIterator = require(\"es6-iterator/array\")

  , slice = Array.prototype.slice;

module.exports = function (t, a) {
\tvar i = 0, x = [\"raz\", \"dwa\", \"trzy\"], y = {};
\tt(x, function () {
\t\ta.deep(slice.call(arguments, 0, 1), [x[i]], \"Array \" + i + \"#\");
\t\ta(this, y, \"Array: context:  \" + i++ + \"#\");
\t}, y);
\ti = 0;
\tt((function () {
 return arguments;
}(\"raz\", \"dwa\", \"trzy\")), function () {
\t\ta.deep(slice.call(arguments, 0, 1), [x[i]], \"Arguments\" + i + \"#\");
\t\ta(this, y, \"Arguments: context:  \" + i++ + \"#\");
\t}, y);
\ti = 0;
\tt({ 0: \"raz\", 1: \"dwa\", 2: \"trzy\", length: 3 }, function () {
\t\ta.deep(slice.call(arguments, 0, 1), [x[i]], \"Array-like\" + i + \"#\");
\t\ta(this, y, \"Array-like: context:  \" + i++ + \"#\");
\t}, y);
\ti = 0;
\tt(x = \"foo\", function () {
\t\ta.deep(slice.call(arguments, 0, 1), [x[i]], \"String \" + i + \"#\");
\t\ta(this, y, \"Regular String: context:  \" + i++ + \"#\");
\t}, y);
\ti = 0;
\tx = [\"r\", \"💩\", \"z\"];
\tt(\"r💩z\", function () {
\t\ta.deep(slice.call(arguments, 0, 1), [x[i]], \"String \" + i + \"#\");
\t\ta(this, y, \"Unicode String: context:  \" + i++ + \"#\");
\t}, y);
\ti = 0;
\tt(new ArrayIterator(x), function () {
\t\ta.deep(slice.call(arguments, 0, 1), [x[i]], \"Iterator \" + i + \"#\");
\t\ta(this, y, \"Iterator: context:  \" + i++ + \"#\");
\t}, y);

};
";
        
        $__internal_5b490cd1966739c5efabd8b29060c76f7aa3ab3525f6cdb992db999a260f3986->leave($__internal_5b490cd1966739c5efabd8b29060c76f7aa3ab3525f6cdb992db999a260f3986_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/iterable/for-each.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var ArrayIterator = require(\"es6-iterator/array\")

  , slice = Array.prototype.slice;

module.exports = function (t, a) {
\tvar i = 0, x = [\"raz\", \"dwa\", \"trzy\"], y = {};
\tt(x, function () {
\t\ta.deep(slice.call(arguments, 0, 1), [x[i]], \"Array \" + i + \"#\");
\t\ta(this, y, \"Array: context:  \" + i++ + \"#\");
\t}, y);
\ti = 0;
\tt((function () {
 return arguments;
}(\"raz\", \"dwa\", \"trzy\")), function () {
\t\ta.deep(slice.call(arguments, 0, 1), [x[i]], \"Arguments\" + i + \"#\");
\t\ta(this, y, \"Arguments: context:  \" + i++ + \"#\");
\t}, y);
\ti = 0;
\tt({ 0: \"raz\", 1: \"dwa\", 2: \"trzy\", length: 3 }, function () {
\t\ta.deep(slice.call(arguments, 0, 1), [x[i]], \"Array-like\" + i + \"#\");
\t\ta(this, y, \"Array-like: context:  \" + i++ + \"#\");
\t}, y);
\ti = 0;
\tt(x = \"foo\", function () {
\t\ta.deep(slice.call(arguments, 0, 1), [x[i]], \"String \" + i + \"#\");
\t\ta(this, y, \"Regular String: context:  \" + i++ + \"#\");
\t}, y);
\ti = 0;
\tx = [\"r\", \"💩\", \"z\"];
\tt(\"r💩z\", function () {
\t\ta.deep(slice.call(arguments, 0, 1), [x[i]], \"String \" + i + \"#\");
\t\ta(this, y, \"Unicode String: context:  \" + i++ + \"#\");
\t}, y);
\ti = 0;
\tt(new ArrayIterator(x), function () {
\t\ta.deep(slice.call(arguments, 0, 1), [x[i]], \"Iterator \" + i + \"#\");
\t\ta(this, y, \"Iterator: context:  \" + i++ + \"#\");
\t}, y);

};
", "node_modules/es5-ext/test/iterable/for-each.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/iterable/for-each.js");
    }
}
