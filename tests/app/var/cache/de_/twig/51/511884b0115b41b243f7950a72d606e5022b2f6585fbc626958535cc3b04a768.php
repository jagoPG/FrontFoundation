<?php

/* node_modules/es5-ext/test/object/valid-object.js */
class __TwigTemplate_7e44c9873052e6c2f738b38df559315efec8d1861635c18cedad6aa1a3dbc3c0 extends Twig_Template
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
        $__internal_1ee24bab43d989d48bc090d4ed4960fb8d97d334b544e34f3a4d8811c2f5e684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ee24bab43d989d48bc090d4ed4960fb8d97d334b544e34f3a4d8811c2f5e684->enter($__internal_1ee24bab43d989d48bc090d4ed4960fb8d97d334b544e34f3a4d8811c2f5e684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/valid-object.js"));

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
}, TypeError, \"''\");
\ta(t(x = {}), x, \"Object\");
\ta(t(x = function () {}), x, \"Function\");
\ta(t(x = new String(\"raz\")), x, \"String object\"); // Jslint: ignore
\ta(t(x = new Date()), x, \"Date\");

\ta.throws(function () {
 t();
}, TypeError, \"Undefined\");
\ta.throws(function () {
 t(null);
}, TypeError, \"null\");
};
";
        
        $__internal_1ee24bab43d989d48bc090d4ed4960fb8d97d334b544e34f3a4d8811c2f5e684->leave($__internal_1ee24bab43d989d48bc090d4ed4960fb8d97d334b544e34f3a4d8811c2f5e684_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/valid-object.js";
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
}, TypeError, \"''\");
\ta(t(x = {}), x, \"Object\");
\ta(t(x = function () {}), x, \"Function\");
\ta(t(x = new String(\"raz\")), x, \"String object\"); // Jslint: ignore
\ta(t(x = new Date()), x, \"Date\");

\ta.throws(function () {
 t();
}, TypeError, \"Undefined\");
\ta.throws(function () {
 t(null);
}, TypeError, \"null\");
};
", "node_modules/es5-ext/test/object/valid-object.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/valid-object.js");
    }
}
