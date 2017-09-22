<?php

/* node_modules/es5-ext/test/object/validate-array-like-object.js */
class __TwigTemplate_a30874c78f4f0f88348842dda18ddddc745776c8452aa385e646ca0cd1fc7450 extends Twig_Template
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
        $__internal_1f21bb6c5d0d4e7a8cb68445d42886d9e3aa31dd192bd8c86c7e396a209afb62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f21bb6c5d0d4e7a8cb68445d42886d9e3aa31dd192bd8c86c7e396a209afb62->enter($__internal_1f21bb6c5d0d4e7a8cb68445d42886d9e3aa31dd192bd8c86c7e396a209afb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/validate-array-like-object.js"));

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
\ta.throws(function () {
 t(\"\");
}, TypeError, \"String\");
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
        
        $__internal_1f21bb6c5d0d4e7a8cb68445d42886d9e3aa31dd192bd8c86c7e396a209afb62->leave($__internal_1f21bb6c5d0d4e7a8cb68445d42886d9e3aa31dd192bd8c86c7e396a209afb62_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/validate-array-like-object.js";
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
\ta.throws(function () {
 t(\"\");
}, TypeError, \"String\");
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
", "node_modules/es5-ext/test/object/validate-array-like-object.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/validate-array-like-object.js");
    }
}
