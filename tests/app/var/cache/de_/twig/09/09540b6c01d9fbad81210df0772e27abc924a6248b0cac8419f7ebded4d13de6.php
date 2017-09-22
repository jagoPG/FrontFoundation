<?php

/* node_modules/es5-ext/test/array/#/intersection.js */
class __TwigTemplate_2a27f69114179b9731344e42177ec205c6dd6ec275fe3671b82fa6324b418538 extends Twig_Template
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
        $__internal_4d2b3fad3046defaadedef427112f937276609f249153690c8dea216fe799c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2b3fad3046defaadedef427112f937276609f249153690c8dea216fe799c85->enter($__internal_4d2b3fad3046defaadedef427112f937276609f249153690c8dea216fe799c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/intersection.js"));

        // line 1
        echo "\"use strict\";

var toArray = require(\"../../../array/to-array\");

module.exports = {
\t\"__generic\": function (t, a) {
\t\ta.deep(t.call(this, this, this), toArray(this));
\t},
\t\"\": function (t, a) {
\t\tvar x = {}, y = {}, p, r;
\t\ta.deep(t.call([], [2, 3, 4]), [], \"Empty #1\");
\t\ta.deep(t.call([2, 3, 4], []), [], \"Empty #2\");
\t\ta.deep(t.call([2, 3, x], [y, 5, 7]), [], \"Different\");
\t\tp = t.call([3, 5, \"raz\", {}, \"dwa\", x], [1, 3, \"raz\", \"dwa\", \"trzy\", x, {}],
\t\t\t[3, \"raz\", x, 65]);
\t\tr = [3, \"raz\", x];
\t\tp.sort();
\t\tr.sort();
\t\ta.deep(p, r, \"Same parts\");
\t\ta.deep(t.call(r, r), r, \"Same\");
\t\ta.deep(t.call([1, 2, x, 4, 5, y, 7], [7, y, 5, 4, x, 2, 1]),
\t\t\t[1, 2, x, 4, 5, y, 7], \"Long reverse same\");
\t}
};
";
        
        $__internal_4d2b3fad3046defaadedef427112f937276609f249153690c8dea216fe799c85->leave($__internal_4d2b3fad3046defaadedef427112f937276609f249153690c8dea216fe799c85_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/intersection.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var toArray = require(\"../../../array/to-array\");

module.exports = {
\t\"__generic\": function (t, a) {
\t\ta.deep(t.call(this, this, this), toArray(this));
\t},
\t\"\": function (t, a) {
\t\tvar x = {}, y = {}, p, r;
\t\ta.deep(t.call([], [2, 3, 4]), [], \"Empty #1\");
\t\ta.deep(t.call([2, 3, 4], []), [], \"Empty #2\");
\t\ta.deep(t.call([2, 3, x], [y, 5, 7]), [], \"Different\");
\t\tp = t.call([3, 5, \"raz\", {}, \"dwa\", x], [1, 3, \"raz\", \"dwa\", \"trzy\", x, {}],
\t\t\t[3, \"raz\", x, 65]);
\t\tr = [3, \"raz\", x];
\t\tp.sort();
\t\tr.sort();
\t\ta.deep(p, r, \"Same parts\");
\t\ta.deep(t.call(r, r), r, \"Same\");
\t\ta.deep(t.call([1, 2, x, 4, 5, y, 7], [7, y, 5, 4, x, 2, 1]),
\t\t\t[1, 2, x, 4, 5, y, 7], \"Long reverse same\");
\t}
};
", "node_modules/es5-ext/test/array/#/intersection.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/intersection.js");
    }
}
