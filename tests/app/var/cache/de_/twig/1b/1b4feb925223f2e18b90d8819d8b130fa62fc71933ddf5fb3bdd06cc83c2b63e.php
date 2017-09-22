<?php

/* node_modules/es5-ext/test/object/copy-deep.js */
class __TwigTemplate_e95f131c6813cf0b1140875f1e04583973405f0b981cacb809bda01e78d89ae6 extends Twig_Template
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
        $__internal_db07397f178f082faa6b090159359ba6a5be01563c1f53a6add67b10582c3562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db07397f178f082faa6b090159359ba6a5be01563c1f53a6add67b10582c3562->enter($__internal_db07397f178f082faa6b090159359ba6a5be01563c1f53a6add67b10582c3562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/copy-deep.js"));

        // line 1
        echo "\"use strict\";

var stringify = JSON.stringify;

module.exports = function (t, a) {
\tvar o = { 1: \"raz\", 2: \"dwa\", 3: \"trzy\" }
\t  , no = t(o);

\ta.not(no, o, \"Return different object\");
\ta(stringify(no), stringify(o), \"Match properties and values\");

\to = { foo: \"bar\",
raz: { dwa: \"dwa\",
\t\ttrzy: { cztery: \"pięć\", sześć: \"siedem\" },
osiem: {},
\t\tdziewięć: function () { } },
\t\tdziesięć: 10,
jedenaście: [\"raz\", [\"dwa\", \"trzy\", { elo: \"true\" }]] };
\to.raz.rec = o;

\tno = t(o);
\ta.not(o.raz, no.raz, \"Deep\");
\ta.not(o.raz.trzy, no.raz.trzy, \"Deep #2\");
\ta(stringify(o.raz.trzy), stringify(no.raz.trzy), \"Deep content\");
\ta(no.raz.rec, no, \"Recursive\");
\ta.not(o.raz.osiem, no.raz.osiem, \"Empty object\");
\ta(o.raz[\"dziewięć\"], no.raz[\"dziewięć\"], \"Function\");
\ta.not(o[\"jedenaście\"], no[\"jedenaście\"]);
\ta.not(o[\"jedenaście\"][1], no[\"jedenaście\"][1]);
\ta.not(o[\"jedenaście\"][1][2], no[\"jedenaście\"][1][2]);
};
";
        
        $__internal_db07397f178f082faa6b090159359ba6a5be01563c1f53a6add67b10582c3562->leave($__internal_db07397f178f082faa6b090159359ba6a5be01563c1f53a6add67b10582c3562_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/copy-deep.js";
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
\tvar o = { 1: \"raz\", 2: \"dwa\", 3: \"trzy\" }
\t  , no = t(o);

\ta.not(no, o, \"Return different object\");
\ta(stringify(no), stringify(o), \"Match properties and values\");

\to = { foo: \"bar\",
raz: { dwa: \"dwa\",
\t\ttrzy: { cztery: \"pięć\", sześć: \"siedem\" },
osiem: {},
\t\tdziewięć: function () { } },
\t\tdziesięć: 10,
jedenaście: [\"raz\", [\"dwa\", \"trzy\", { elo: \"true\" }]] };
\to.raz.rec = o;

\tno = t(o);
\ta.not(o.raz, no.raz, \"Deep\");
\ta.not(o.raz.trzy, no.raz.trzy, \"Deep #2\");
\ta(stringify(o.raz.trzy), stringify(no.raz.trzy), \"Deep content\");
\ta(no.raz.rec, no, \"Recursive\");
\ta.not(o.raz.osiem, no.raz.osiem, \"Empty object\");
\ta(o.raz[\"dziewięć\"], no.raz[\"dziewięć\"], \"Function\");
\ta.not(o[\"jedenaście\"], no[\"jedenaście\"]);
\ta.not(o[\"jedenaście\"][1], no[\"jedenaście\"][1]);
\ta.not(o[\"jedenaście\"][1][2], no[\"jedenaście\"][1][2]);
};
", "node_modules/es5-ext/test/object/copy-deep.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/copy-deep.js");
    }
}
