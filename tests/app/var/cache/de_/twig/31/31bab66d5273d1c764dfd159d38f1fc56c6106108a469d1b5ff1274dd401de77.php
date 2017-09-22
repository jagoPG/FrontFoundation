<?php

/* node_modules/es5-ext/test/object/validate-stringifiable-value.js */
class __TwigTemplate_87f1dff0bc1cdb773737cde06ffd6620be819639eb28bb3d161c44caa94facf7 extends Twig_Template
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
        $__internal_6a514e54566ed7c245cd3d9a6efc32157fd21e886f111bf9cf14f6688fc2b1cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a514e54566ed7c245cd3d9a6efc32157fd21e886f111bf9cf14f6688fc2b1cb->enter($__internal_6a514e54566ed7c245cd3d9a6efc32157fd21e886f111bf9cf14f6688fc2b1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/validate-stringifiable-value.js"));

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
\ta(t(0), \"0\");
\ta(t(false), \"false\");
\ta(t(\"\"), \"\");
\ta(t({}), String({}), \"Object\");
\ta(t(x = function () {}), String(x), \"Function\");
\ta(t(x = new String(\"raz\")), String(x), \"String object\"); // Jslint: ignore
\ta(t(x = new Date()), String(x), \"Date\");

\ta.throws(function () {
 t(Object.create(null));
}, TypeError, \"Null prototype object\");
};
";
        
        $__internal_6a514e54566ed7c245cd3d9a6efc32157fd21e886f111bf9cf14f6688fc2b1cb->leave($__internal_6a514e54566ed7c245cd3d9a6efc32157fd21e886f111bf9cf14f6688fc2b1cb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/validate-stringifiable-value.js";
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
\ta(t(0), \"0\");
\ta(t(false), \"false\");
\ta(t(\"\"), \"\");
\ta(t({}), String({}), \"Object\");
\ta(t(x = function () {}), String(x), \"Function\");
\ta(t(x = new String(\"raz\")), String(x), \"String object\"); // Jslint: ignore
\ta(t(x = new Date()), String(x), \"Date\");

\ta.throws(function () {
 t(Object.create(null));
}, TypeError, \"Null prototype object\");
};
", "node_modules/es5-ext/test/object/validate-stringifiable-value.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/validate-stringifiable-value.js");
    }
}
