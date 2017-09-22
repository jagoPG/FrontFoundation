<?php

/* node_modules/es5-ext/test/object/serialize.js */
class __TwigTemplate_ca934d4b5cd7153bc1a2607887ddf398fa2ad8ec71ecffc35318defd36b605d0 extends Twig_Template
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
        $__internal_515a4682e3c054c01734738ecf79b7950a57c3d9168a845743efdaef60de6d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_515a4682e3c054c01734738ecf79b7950a57c3d9168a845743efdaef60de6d1a->enter($__internal_515a4682e3c054c01734738ecf79b7950a57c3d9168a845743efdaef60de6d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/serialize.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar fn = function (raz, dwa) {
\t\treturn raz + dwa;
\t};
\ta(t(), \"undefined\", \"Undefined\");
\ta(t(null), \"null\", \"Null\");
\ta(t(null), \"null\", \"Null\");
\ta(t(\"raz\"), \"\\\"raz\\\"\", \"String\");
\ta(t(\"raz\\\"ddwa\\ntrzy\"), \"\\\"raz\\\\\\\"ddwa\\\\ntrzy\\\"\", \"String with escape\");
\ta(t(false), \"false\", \"Booelean\");
\ta(t(fn), String(fn), \"Function\");

\ta(t(/raz-dwa/g), \"/raz-dwa/g\", \"RegExp\");
\ta(t(new Date(1234567)), \"new Date(1234567)\", \"Date\");
\ta(t([]), \"[]\", \"Empty array\");
\ta(
\t\tt([undefined, false, null, \"raz\\\"ddwa\\ntrzy\", fn, /raz/g, new Date(1234567), [\"foo\"]]),
\t\t\"[undefined,false,null,\\\"raz\\\\\\\"ddwa\\\\ntrzy\\\",\" +
\t\t\tString(fn) +
\t\t\t\",/raz/g,new Date(1234567),[\\\"foo\\\"]]\",
\t\t\"Rich Array\"
\t);
\ta(t({}), \"{}\", \"Empty object\");
\ta(
\t\tt({
\t\t\traz: undefined,
\t\t\tdwa: false,
\t\t\ttrzy: null,
\t\t\tcztery: \"raz\\\"ddwa\\ntrzy\",
\t\t\tpiec: fn,
\t\t\tszesc: /raz/g,
\t\t\tsiedem: new Date(1234567),
\t\t\tosiem: [\"foo\", 32],
\t\t\tdziewiec: { foo: \"bar\", dwa: 343 }
\t\t}),
\t\t\"{\\\"raz\\\":undefined,\\\"dwa\\\":false,\\\"trzy\\\":null,\\\"cztery\\\":\\\"raz\\\\\\\"ddwa\\\\ntrzy\\\",\" +
\t\t\t\"\\\"piec\\\":\" +
\t\t\tString(fn) +
\t\t\t\",\\\"szesc\\\":/raz/g,\\\"siedem\\\":new Date(1234567),\\\"osiem\\\":[\\\"foo\\\",32],\" +
\t\t\t\"\\\"dziewiec\\\":{\\\"foo\\\":\\\"bar\\\",\\\"dwa\\\":343}}\",
\t\t\"Rich object\"
\t);
};
";
        
        $__internal_515a4682e3c054c01734738ecf79b7950a57c3d9168a845743efdaef60de6d1a->leave($__internal_515a4682e3c054c01734738ecf79b7950a57c3d9168a845743efdaef60de6d1a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/serialize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar fn = function (raz, dwa) {
\t\treturn raz + dwa;
\t};
\ta(t(), \"undefined\", \"Undefined\");
\ta(t(null), \"null\", \"Null\");
\ta(t(null), \"null\", \"Null\");
\ta(t(\"raz\"), \"\\\"raz\\\"\", \"String\");
\ta(t(\"raz\\\"ddwa\\ntrzy\"), \"\\\"raz\\\\\\\"ddwa\\\\ntrzy\\\"\", \"String with escape\");
\ta(t(false), \"false\", \"Booelean\");
\ta(t(fn), String(fn), \"Function\");

\ta(t(/raz-dwa/g), \"/raz-dwa/g\", \"RegExp\");
\ta(t(new Date(1234567)), \"new Date(1234567)\", \"Date\");
\ta(t([]), \"[]\", \"Empty array\");
\ta(
\t\tt([undefined, false, null, \"raz\\\"ddwa\\ntrzy\", fn, /raz/g, new Date(1234567), [\"foo\"]]),
\t\t\"[undefined,false,null,\\\"raz\\\\\\\"ddwa\\\\ntrzy\\\",\" +
\t\t\tString(fn) +
\t\t\t\",/raz/g,new Date(1234567),[\\\"foo\\\"]]\",
\t\t\"Rich Array\"
\t);
\ta(t({}), \"{}\", \"Empty object\");
\ta(
\t\tt({
\t\t\traz: undefined,
\t\t\tdwa: false,
\t\t\ttrzy: null,
\t\t\tcztery: \"raz\\\"ddwa\\ntrzy\",
\t\t\tpiec: fn,
\t\t\tszesc: /raz/g,
\t\t\tsiedem: new Date(1234567),
\t\t\tosiem: [\"foo\", 32],
\t\t\tdziewiec: { foo: \"bar\", dwa: 343 }
\t\t}),
\t\t\"{\\\"raz\\\":undefined,\\\"dwa\\\":false,\\\"trzy\\\":null,\\\"cztery\\\":\\\"raz\\\\\\\"ddwa\\\\ntrzy\\\",\" +
\t\t\t\"\\\"piec\\\":\" +
\t\t\tString(fn) +
\t\t\t\",\\\"szesc\\\":/raz/g,\\\"siedem\\\":new Date(1234567),\\\"osiem\\\":[\\\"foo\\\",32],\" +
\t\t\t\"\\\"dziewiec\\\":{\\\"foo\\\":\\\"bar\\\",\\\"dwa\\\":343}}\",
\t\t\"Rich object\"
\t);
};
", "node_modules/es5-ext/test/object/serialize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/serialize.js");
    }
}
