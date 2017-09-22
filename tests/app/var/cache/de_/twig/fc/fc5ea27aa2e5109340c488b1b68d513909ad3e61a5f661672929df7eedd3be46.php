<?php

/* node_modules/es5-ext/test/array/valid-array.js */
class __TwigTemplate_2c80abdb194f4e6561499e04049d5b503dfeaac90a7ff2f366e43df906149772 extends Twig_Template
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
        $__internal_c5af55c58769dd5241c5c3af4886aa752b00a9829cedcc2b73c8a2ae3b14a225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5af55c58769dd5241c5c3af4886aa752b00a9829cedcc2b73c8a2ae3b14a225->enter($__internal_c5af55c58769dd5241c5c3af4886aa752b00a9829cedcc2b73c8a2ae3b14a225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/valid-array.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar x;
\ta.throws(function () {
 t();
}, TypeError, \"Undefined\");
\ta.throws(function () {
 t(null);
}, TypeError, \"Null\");
\ta.throws(function () {
 t(0);
}, TypeError, \"Number\");
\ta.throws(function () {
 t(true);
}, TypeError, \"Boolean\");
\ta.throws(function () {
 t(\"raz\");
}, TypeError, \"String\");
\ta.throws(function () {
 t(function () {});
}, TypeError, \"Function\");
\ta.throws(function () {
 t({});
}, TypeError, \"Object\");
\ta.throws(function () {
 t({ length: 0 });
}, TypeError, \"Array-like\");
\ta(t(x = []), x, \"Array\");
};
";
        
        $__internal_c5af55c58769dd5241c5c3af4886aa752b00a9829cedcc2b73c8a2ae3b14a225->leave($__internal_c5af55c58769dd5241c5c3af4886aa752b00a9829cedcc2b73c8a2ae3b14a225_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/valid-array.js";
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
 t();
}, TypeError, \"Undefined\");
\ta.throws(function () {
 t(null);
}, TypeError, \"Null\");
\ta.throws(function () {
 t(0);
}, TypeError, \"Number\");
\ta.throws(function () {
 t(true);
}, TypeError, \"Boolean\");
\ta.throws(function () {
 t(\"raz\");
}, TypeError, \"String\");
\ta.throws(function () {
 t(function () {});
}, TypeError, \"Function\");
\ta.throws(function () {
 t({});
}, TypeError, \"Object\");
\ta.throws(function () {
 t({ length: 0 });
}, TypeError, \"Array-like\");
\ta(t(x = []), x, \"Array\");
};
", "node_modules/es5-ext/test/array/valid-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/valid-array.js");
    }
}
