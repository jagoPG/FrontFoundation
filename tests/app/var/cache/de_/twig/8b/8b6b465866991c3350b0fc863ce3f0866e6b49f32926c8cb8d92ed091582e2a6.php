<?php

/* node_modules/es5-ext/test/iterable/validate.js */
class __TwigTemplate_ffb6ceeaaac325bfb244b97e98fe55193fe96950fdb2a9fdb0a42ada212d8ab9 extends Twig_Template
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
        $__internal_671c75a2a60ceebf3f6c75ec786cb76f31585effc919610281457878fa4cce35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_671c75a2a60ceebf3f6c75ec786cb76f31585effc919610281457878fa4cce35->enter($__internal_671c75a2a60ceebf3f6c75ec786cb76f31585effc919610281457878fa4cce35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/iterable/validate.js"));

        // line 1
        echo "\"use strict\";

var iteratorSymbol = require(\"es6-symbol\").iterator;

module.exports = function (t, a) {
\tvar x;
\ta.throws(function () {
 t(0);
}, TypeError, \"0\");
\ta.throws(function () {
 t(false);
}, TypeError, \"false\");
\ta(t(\"\"), \"\", \"''\");
\ta.throws(function () {
 t({});
}, TypeError, \"Plain Object\");
\ta.throws(function () {
 t(function () {});
}, TypeError, \"Function\");
\ta(t(x = new String(\"raz\")), x, \"String object\"); // Jslint: ignore

\ta(t(x = { length: 1 }), x, \"Array like\");
\ta.throws(function () {
 t();
}, TypeError, \"Undefined\");
\ta.throws(function () {
 t(null);
}, TypeError, \"null\");
\tx = {};
\tx[iteratorSymbol] = function () {};
\ta(t(x), x, \"Iterable\");
};
";
        
        $__internal_671c75a2a60ceebf3f6c75ec786cb76f31585effc919610281457878fa4cce35->leave($__internal_671c75a2a60ceebf3f6c75ec786cb76f31585effc919610281457878fa4cce35_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/iterable/validate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var iteratorSymbol = require(\"es6-symbol\").iterator;

module.exports = function (t, a) {
\tvar x;
\ta.throws(function () {
 t(0);
}, TypeError, \"0\");
\ta.throws(function () {
 t(false);
}, TypeError, \"false\");
\ta(t(\"\"), \"\", \"''\");
\ta.throws(function () {
 t({});
}, TypeError, \"Plain Object\");
\ta.throws(function () {
 t(function () {});
}, TypeError, \"Function\");
\ta(t(x = new String(\"raz\")), x, \"String object\"); // Jslint: ignore

\ta(t(x = { length: 1 }), x, \"Array like\");
\ta.throws(function () {
 t();
}, TypeError, \"Undefined\");
\ta.throws(function () {
 t(null);
}, TypeError, \"null\");
\tx = {};
\tx[iteratorSymbol] = function () {};
\ta(t(x), x, \"Iterable\");
};
", "node_modules/es5-ext/test/iterable/validate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/iterable/validate.js");
    }
}
