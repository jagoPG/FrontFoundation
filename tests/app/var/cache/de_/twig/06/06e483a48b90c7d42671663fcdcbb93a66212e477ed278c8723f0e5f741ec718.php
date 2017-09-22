<?php

/* node_modules/es5-ext/test/object/validate-stringifiable.js */
class __TwigTemplate_fe9deb11122aefa17ed3609e60cfefca37972a2a1260cfe06307f12aeafa3200 extends Twig_Template
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
        $__internal_26bfae980d5da9fa20181ba25cfdac35caeeef74d35506e9af6dfacb1600d465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26bfae980d5da9fa20181ba25cfdac35caeeef74d35506e9af6dfacb1600d465->enter($__internal_26bfae980d5da9fa20181ba25cfdac35caeeef74d35506e9af6dfacb1600d465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/validate-stringifiable.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar x;
\ta(t(), \"undefined\", \"Undefined\");
\ta(t(null), \"null\", \"Null\");
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
        
        $__internal_26bfae980d5da9fa20181ba25cfdac35caeeef74d35506e9af6dfacb1600d465->leave($__internal_26bfae980d5da9fa20181ba25cfdac35caeeef74d35506e9af6dfacb1600d465_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/validate-stringifiable.js";
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
\ta(t(), \"undefined\", \"Undefined\");
\ta(t(null), \"null\", \"Null\");
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
", "node_modules/es5-ext/test/object/validate-stringifiable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/validate-stringifiable.js");
    }
}
