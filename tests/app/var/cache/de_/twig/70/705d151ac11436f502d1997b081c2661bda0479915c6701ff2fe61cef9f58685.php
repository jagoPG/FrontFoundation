<?php

/* node_modules/es5-ext/test/object/ensure-natural-number-value.js */
class __TwigTemplate_858acefaed7645b63f52ea1bd99525128be734a64dbbcf67688f5ff6f7abc7e2 extends Twig_Template
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
        $__internal_b4b7b9101c4d59ecefba9a163069fbd0be998390bc278ce82d97804d8199bf3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b7b9101c4d59ecefba9a163069fbd0be998390bc278ce82d97804d8199bf3b->enter($__internal_b4b7b9101c4d59ecefba9a163069fbd0be998390bc278ce82d97804d8199bf3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/ensure-natural-number-value.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta.throws(function () {
 t(undefined);
}, TypeError, \"Undefined\");
\ta.throws(function () {
 t(null);
}, TypeError, \"Null\");
\ta(t(2), 2, \"Number\");
\ta.throws(function () {
 t(-2);
}, TypeError, \"Negative\");
\ta.throws(function () {
 t(2.34);
}, TypeError, \"Float\");
\ta(t(\"23\"), 23, \"Numeric string\");
\ta.throws(function () {
 t(NaN);
}, TypeError, \"NaN\");
\ta.throws(function () {
 t(Infinity);
}, TypeError, \"Infinity\");
};
";
        
        $__internal_b4b7b9101c4d59ecefba9a163069fbd0be998390bc278ce82d97804d8199bf3b->leave($__internal_b4b7b9101c4d59ecefba9a163069fbd0be998390bc278ce82d97804d8199bf3b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/ensure-natural-number-value.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta.throws(function () {
 t(undefined);
}, TypeError, \"Undefined\");
\ta.throws(function () {
 t(null);
}, TypeError, \"Null\");
\ta(t(2), 2, \"Number\");
\ta.throws(function () {
 t(-2);
}, TypeError, \"Negative\");
\ta.throws(function () {
 t(2.34);
}, TypeError, \"Float\");
\ta(t(\"23\"), 23, \"Numeric string\");
\ta.throws(function () {
 t(NaN);
}, TypeError, \"NaN\");
\ta.throws(function () {
 t(Infinity);
}, TypeError, \"Infinity\");
};
", "node_modules/es5-ext/test/object/ensure-natural-number-value.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/ensure-natural-number-value.js");
    }
}
