<?php

/* node_modules/es5-ext/test/object/to-array.js */
class __TwigTemplate_fb95d1c53c3874ed81d8c832b04a8821dc9c67b314476bb473755e52477826e3 extends Twig_Template
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
        $__internal_dec18ed6c1bc066b58b9a26201052237cb46a556c51bbd53df2dd33b93848f94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec18ed6c1bc066b58b9a26201052237cb46a556c51bbd53df2dd33b93848f94->enter($__internal_dec18ed6c1bc066b58b9a26201052237cb46a556c51bbd53df2dd33b93848f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/to-array.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar o = { 1: 1, 2: 2, 3: 3 }, o1 = {}
\t  , o2 = t(o, function (value, name, self) {
\t\ta(self, o, \"Self\");
\t\ta(this, o1, \"Scope\");
\t\treturn value + Number(name);
\t}, o1);
\ta.deep(o2, [2, 4, 6]);

\tt(o).sort().forEach(function (item) {
\t\ta.deep(item, [item[0], o[item[0]]], \"Default\");
\t});
};
";
        
        $__internal_dec18ed6c1bc066b58b9a26201052237cb46a556c51bbd53df2dd33b93848f94->leave($__internal_dec18ed6c1bc066b58b9a26201052237cb46a556c51bbd53df2dd33b93848f94_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/to-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar o = { 1: 1, 2: 2, 3: 3 }, o1 = {}
\t  , o2 = t(o, function (value, name, self) {
\t\ta(self, o, \"Self\");
\t\ta(this, o1, \"Scope\");
\t\treturn value + Number(name);
\t}, o1);
\ta.deep(o2, [2, 4, 6]);

\tt(o).sort().forEach(function (item) {
\t\ta.deep(item, [item[0], o[item[0]]], \"Default\");
\t});
};
", "node_modules/es5-ext/test/object/to-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/to-array.js");
    }
}
