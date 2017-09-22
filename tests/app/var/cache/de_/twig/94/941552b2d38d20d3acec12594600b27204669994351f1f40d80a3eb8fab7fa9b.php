<?php

/* node_modules/es5-ext/test/object/copy.js */
class __TwigTemplate_463f94787173880ec038467fef96f83d994ed269b16b568f7ab30c6663435456 extends Twig_Template
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
        $__internal_b605c665e3c8f2d98a1f9f2bc3989f725a9695cae8c18c1f13da61fa82bc677b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b605c665e3c8f2d98a1f9f2bc3989f725a9695cae8c18c1f13da61fa82bc677b->enter($__internal_b605c665e3c8f2d98a1f9f2bc3989f725a9695cae8c18c1f13da61fa82bc677b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/copy.js"));

        // line 1
        echo "\"use strict\";

var stringify = JSON.stringify;

module.exports = function (t, a) {
\tvar o = { 1: \"raz\", 2: \"dwa\", 3: \"trzy\" }, no = t(o);

\ta.not(no, o, \"Return different object\");
\ta(stringify(no), stringify(o), \"Match properties and values\");

\to = {
\t\tfoo: \"bar\",
\t\traz: {
\t\t\tdwa: \"dwa\",
\t\t\ttrzy: { cztery: \"pięć\", sześć: \"siedem\" },
\t\t\tosiem: {},
\t\t\tdziewięć: function () {}
\t\t},
\t\tdziesięć: 10
\t};
\to.raz.rec = o;

\tno = t(o);
\ta(o.raz, no.raz, \"Shallow\");

\ta.deep(t(o, [\"foo\"]), { foo: \"bar\" });
\ta.deep(t(Object.create(o), [\"foo\"]), { foo: \"bar\" });
\ta.deep(t(o, [\"foo\", \"habla\"]), { foo: \"bar\" });
\ta.deep(t(o, [\"foo\", \"habla\"], { ensure: true }), { foo: \"bar\", habla: undefined });
};
";
        
        $__internal_b605c665e3c8f2d98a1f9f2bc3989f725a9695cae8c18c1f13da61fa82bc677b->leave($__internal_b605c665e3c8f2d98a1f9f2bc3989f725a9695cae8c18c1f13da61fa82bc677b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/copy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var stringify = JSON.stringify;

module.exports = function (t, a) {
\tvar o = { 1: \"raz\", 2: \"dwa\", 3: \"trzy\" }, no = t(o);

\ta.not(no, o, \"Return different object\");
\ta(stringify(no), stringify(o), \"Match properties and values\");

\to = {
\t\tfoo: \"bar\",
\t\traz: {
\t\t\tdwa: \"dwa\",
\t\t\ttrzy: { cztery: \"pięć\", sześć: \"siedem\" },
\t\t\tosiem: {},
\t\t\tdziewięć: function () {}
\t\t},
\t\tdziesięć: 10
\t};
\to.raz.rec = o;

\tno = t(o);
\ta(o.raz, no.raz, \"Shallow\");

\ta.deep(t(o, [\"foo\"]), { foo: \"bar\" });
\ta.deep(t(Object.create(o), [\"foo\"]), { foo: \"bar\" });
\ta.deep(t(o, [\"foo\", \"habla\"]), { foo: \"bar\" });
\ta.deep(t(o, [\"foo\", \"habla\"], { ensure: true }), { foo: \"bar\", habla: undefined });
};
", "node_modules/es5-ext/test/object/copy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/copy.js");
    }
}
