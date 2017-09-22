<?php

/* node_modules/es5-ext/test/array/#/contains.js */
class __TwigTemplate_4ede36201df82ccd69e0d663f42587bc74bba4c7aa2b32e2489bbe7a4f9cd60a extends Twig_Template
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
        $__internal_9cd86466f528586207f825f7667e038d8d08ddf1d5f6517af57f51b87e4e5779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd86466f528586207f825f7667e038d8d08ddf1d5f6517af57f51b87e4e5779->enter($__internal_9cd86466f528586207f825f7667e038d8d08ddf1d5f6517af57f51b87e4e5779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/contains.js"));

        // line 1
        echo "\"use strict\";

module.exports = {
\t\"__generic\": function (t, a) {
\t\ta(t.call(this, this[1]), true, \"Contains\");
\t\ta(t.call(this, {}), false, \"Does Not contain\");
\t},
\t\"\": function (t, a) {
\t\tvar o, x = {}, y = {};

\t\to = [1, \"raz\", x];

\t\ta(t.call(o, 1), true, \"First\");
\t\ta(t.call(o, \"1\"), false, \"Type coercion\");
\t\ta(t.call(o, \"raz\"), true, \"Primitive\");
\t\ta(t.call(o, \"foo\"), false, \"Primitive not found\");
\t\ta(t.call(o, x), true, \"Object found\");
\t\ta(t.call(o, y), false, \"Object not found\");
\t\ta(t.call(o, 1, 1), false, \"Position\");
\t}
};
";
        
        $__internal_9cd86466f528586207f825f7667e038d8d08ddf1d5f6517af57f51b87e4e5779->leave($__internal_9cd86466f528586207f825f7667e038d8d08ddf1d5f6517af57f51b87e4e5779_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/contains.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = {
\t\"__generic\": function (t, a) {
\t\ta(t.call(this, this[1]), true, \"Contains\");
\t\ta(t.call(this, {}), false, \"Does Not contain\");
\t},
\t\"\": function (t, a) {
\t\tvar o, x = {}, y = {};

\t\to = [1, \"raz\", x];

\t\ta(t.call(o, 1), true, \"First\");
\t\ta(t.call(o, \"1\"), false, \"Type coercion\");
\t\ta(t.call(o, \"raz\"), true, \"Primitive\");
\t\ta(t.call(o, \"foo\"), false, \"Primitive not found\");
\t\ta(t.call(o, x), true, \"Object found\");
\t\ta(t.call(o, y), false, \"Object not found\");
\t\ta(t.call(o, 1, 1), false, \"Position\");
\t}
};
", "node_modules/es5-ext/test/array/#/contains.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/contains.js");
    }
}
