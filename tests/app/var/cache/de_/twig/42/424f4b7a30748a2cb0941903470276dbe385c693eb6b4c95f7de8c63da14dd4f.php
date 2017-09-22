<?php

/* node_modules/es5-ext/test/object/validate-array-like.js */
class __TwigTemplate_0bf3bab8266dbc2d6fe86d1204c3dc3a88054fc0aaee1aec8de12e4efa5a49b7 extends Twig_Template
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
        $__internal_3015a816cc9e7d92088d203f6a3619099d37f7d6b8e72ae18c2b96571b9d01c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3015a816cc9e7d92088d203f6a3619099d37f7d6b8e72ae18c2b96571b9d01c5->enter($__internal_3015a816cc9e7d92088d203f6a3619099d37f7d6b8e72ae18c2b96571b9d01c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/validate-array-like.js"));

        // line 1
        echo "\"use strict\";

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
};
";
        
        $__internal_3015a816cc9e7d92088d203f6a3619099d37f7d6b8e72ae18c2b96571b9d01c5->leave($__internal_3015a816cc9e7d92088d203f6a3619099d37f7d6b8e72ae18c2b96571b9d01c5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/validate-array-like.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

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
};
", "node_modules/es5-ext/test/object/validate-array-like.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/validate-array-like.js");
    }
}
