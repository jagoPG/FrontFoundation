<?php

/* node_modules/es5-ext/test/object/unserialize.js */
class __TwigTemplate_74ad64c1bf68b5460bf85df3ee3065c51e96e46508c20cfe858cf4a9c411cda3 extends Twig_Template
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
        $__internal_7f87264dad891403701eaf64ef19fd15deefcedd358b9de49514c9c871bec771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f87264dad891403701eaf64ef19fd15deefcedd358b9de49514c9c871bec771->enter($__internal_7f87264dad891403701eaf64ef19fd15deefcedd358b9de49514c9c871bec771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/unserialize.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar fn = function (raz, dwa) {
\t\treturn raz + dwa;
\t};
\ta(t(\"undefined\"), undefined, \"Undefined\");
\ta(t(\"null\"), null, \"Null\");
\ta(t(\"\\\"raz\\\"\"), \"raz\", \"String\");
\ta(t(\"\\\"raz\\\\\\\"ddwa\\\\ntrzy\\\"\"), \"raz\\\"ddwa\\ntrzy\", \"String with escape\");
\ta(t(\"false\"), false, \"Booelean\");
\ta(String(t(String(fn))), String(fn), \"Function\");

\ta.deep(t(\"/raz-dwa/g\"), /raz-dwa/g, \"RegExp\");
\ta.deep(t(\"new Date(1234567)\"), new Date(1234567), \"Date\");
\ta.deep(t(\"[]\"), [], \"Empty array\");
\ta.deep(
\t\tt(\"[undefined,false,null,\\\"raz\\\\\\\"ddwa\\\\ntrzy\\\",/raz/g,new Date(1234567),[\\\"foo\\\"]]\"),
\t\t[undefined, false, null, \"raz\\\"ddwa\\ntrzy\", /raz/g, new Date(1234567), [\"foo\"]],
\t\t\"Rich Array\"
\t);
\ta.deep(t(\"{}\"), {}, \"Empty object\");
\ta.deep(
\t\tt(
\t\t\t\"{\\\"raz\\\":undefined,\\\"dwa\\\":false,\\\"trzy\\\":null,\\\"cztery\\\":\\\"raz\\\\\\\"ddwa\\\\ntrzy\\\",\" +
\t\t\t\t\"\\\"szesc\\\":/raz/g,\\\"siedem\\\":new Date(1234567),\\\"osiem\\\":[\\\"foo\\\",32],\" +
\t\t\t\t\"\\\"dziewiec\\\":{\\\"foo\\\":\\\"bar\\\",\\\"dwa\\\":343}}\"
\t\t),
\t\t{
\t\t\traz: undefined,
\t\t\tdwa: false,
\t\t\ttrzy: null,
\t\t\tcztery: \"raz\\\"ddwa\\ntrzy\",
\t\t\tszesc: /raz/g,
\t\t\tsiedem: new Date(1234567),
\t\t\tosiem: [\"foo\", 32],
\t\t\tdziewiec: { foo: \"bar\", dwa: 343 }
\t\t},
\t\t\"Rich object\"
\t);
};
";
        
        $__internal_7f87264dad891403701eaf64ef19fd15deefcedd358b9de49514c9c871bec771->leave($__internal_7f87264dad891403701eaf64ef19fd15deefcedd358b9de49514c9c871bec771_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/unserialize.js";
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
\ta(t(\"undefined\"), undefined, \"Undefined\");
\ta(t(\"null\"), null, \"Null\");
\ta(t(\"\\\"raz\\\"\"), \"raz\", \"String\");
\ta(t(\"\\\"raz\\\\\\\"ddwa\\\\ntrzy\\\"\"), \"raz\\\"ddwa\\ntrzy\", \"String with escape\");
\ta(t(\"false\"), false, \"Booelean\");
\ta(String(t(String(fn))), String(fn), \"Function\");

\ta.deep(t(\"/raz-dwa/g\"), /raz-dwa/g, \"RegExp\");
\ta.deep(t(\"new Date(1234567)\"), new Date(1234567), \"Date\");
\ta.deep(t(\"[]\"), [], \"Empty array\");
\ta.deep(
\t\tt(\"[undefined,false,null,\\\"raz\\\\\\\"ddwa\\\\ntrzy\\\",/raz/g,new Date(1234567),[\\\"foo\\\"]]\"),
\t\t[undefined, false, null, \"raz\\\"ddwa\\ntrzy\", /raz/g, new Date(1234567), [\"foo\"]],
\t\t\"Rich Array\"
\t);
\ta.deep(t(\"{}\"), {}, \"Empty object\");
\ta.deep(
\t\tt(
\t\t\t\"{\\\"raz\\\":undefined,\\\"dwa\\\":false,\\\"trzy\\\":null,\\\"cztery\\\":\\\"raz\\\\\\\"ddwa\\\\ntrzy\\\",\" +
\t\t\t\t\"\\\"szesc\\\":/raz/g,\\\"siedem\\\":new Date(1234567),\\\"osiem\\\":[\\\"foo\\\",32],\" +
\t\t\t\t\"\\\"dziewiec\\\":{\\\"foo\\\":\\\"bar\\\",\\\"dwa\\\":343}}\"
\t\t),
\t\t{
\t\t\traz: undefined,
\t\t\tdwa: false,
\t\t\ttrzy: null,
\t\t\tcztery: \"raz\\\"ddwa\\ntrzy\",
\t\t\tszesc: /raz/g,
\t\t\tsiedem: new Date(1234567),
\t\t\tosiem: [\"foo\", 32],
\t\t\tdziewiec: { foo: \"bar\", dwa: 343 }
\t\t},
\t\t\"Rich object\"
\t);
};
", "node_modules/es5-ext/test/object/unserialize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/unserialize.js");
    }
}
