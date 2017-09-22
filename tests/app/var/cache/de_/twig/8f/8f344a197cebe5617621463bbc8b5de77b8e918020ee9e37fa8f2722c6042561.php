<?php

/* node_modules/es5-ext/test/array/#/diff.js */
class __TwigTemplate_1352cf34dbeca81246694e4ad88789f110abe9a0119a5e2d8d30a3447a39cd5e extends Twig_Template
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
        $__internal_cf8ea9dbe768ff3fdaa3b161f1705fadfe29701b7d1390c3c33363fd01de5a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf8ea9dbe768ff3fdaa3b161f1705fadfe29701b7d1390c3c33363fd01de5a21->enter($__internal_cf8ea9dbe768ff3fdaa3b161f1705fadfe29701b7d1390c3c33363fd01de5a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/diff.js"));

        // line 1
        echo "\"use strict\";

module.exports = {
\t\"__generic\": function (t, a) {
\t\ta.deep(t.call(this, this), []);
\t},
\t\"\": function (t, a) {
\t\tvar x = {}, y = {};

\t\ta.deep(t.call([1, \"raz\", x, 2, \"trzy\", y], [x, 2, \"trzy\"]), [1, \"raz\", y],
\t\t\t\"Scope longer\");
\t\ta.deep(t.call([1, \"raz\", x], [x, 2, \"trzy\", 1, y]), [\"raz\"],
\t\t\t\"Arg longer\");
\t\ta.deep(t.call([1, \"raz\", x], []), [1, \"raz\", x], \"Empty arg\");
\t\ta.deep(t.call([], [1, y, \"sdfs\"]), [], \"Empty scope\");
\t}
};
";
        
        $__internal_cf8ea9dbe768ff3fdaa3b161f1705fadfe29701b7d1390c3c33363fd01de5a21->leave($__internal_cf8ea9dbe768ff3fdaa3b161f1705fadfe29701b7d1390c3c33363fd01de5a21_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/diff.js";
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
\t\ta.deep(t.call(this, this), []);
\t},
\t\"\": function (t, a) {
\t\tvar x = {}, y = {};

\t\ta.deep(t.call([1, \"raz\", x, 2, \"trzy\", y], [x, 2, \"trzy\"]), [1, \"raz\", y],
\t\t\t\"Scope longer\");
\t\ta.deep(t.call([1, \"raz\", x], [x, 2, \"trzy\", 1, y]), [\"raz\"],
\t\t\t\"Arg longer\");
\t\ta.deep(t.call([1, \"raz\", x], []), [1, \"raz\", x], \"Empty arg\");
\t\ta.deep(t.call([], [1, y, \"sdfs\"]), [], \"Empty scope\");
\t}
};
", "node_modules/es5-ext/test/array/#/diff.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/diff.js");
    }
}
