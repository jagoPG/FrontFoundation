<?php

/* node_modules/es5-ext/test/object/_iterate.js */
class __TwigTemplate_eb72ab9592a5ea9ad4c5441e114b98f2b0c0d5dbdcefc142afa3fa76075d4ff0 extends Twig_Template
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
        $__internal_e0a3edcb10e9872ccd33c4bbe5d929e0766e2255c57a262feb90639aff287548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a3edcb10e9872ccd33c4bbe5d929e0766e2255c57a262feb90639aff287548->enter($__internal_e0a3edcb10e9872ccd33c4bbe5d929e0766e2255c57a262feb90639aff287548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/_iterate.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar o = { raz: 1, dwa: 2, trzy: 3 }
\t  , o2 = {}, o3 = {}, arr, i = -1;

\tt = t(\"forEach\");
\tt(o, function (value, name, self, index) {
\t\to2[name] = value;
\t\ta(index, ++i, \"Index\");
\t\ta(self, o, \"Self\");
\t\ta(this, o3, \"Scope\");
\t}, o3);
\ta.deep(o2, o);

\tarr = [];
\to2 = {};
\ti = -1;
\tt(o, function (value, name, self, index) {
\t\tarr.push(value);
\t\to2[name] = value;
\t\ta(index, ++i, \"Index\");
\t\ta(self, o, \"Self\");
\t\ta(this, o3, \"Scope\");
\t}, o3, function (a, b) {
\t\treturn o[b] - o[a];
\t});
\ta.deep(o2, o, \"Sort by Values: Content\");
\ta.deep(arr, [3, 2, 1], \"Sort by Values: Order\");
};
";
        
        $__internal_e0a3edcb10e9872ccd33c4bbe5d929e0766e2255c57a262feb90639aff287548->leave($__internal_e0a3edcb10e9872ccd33c4bbe5d929e0766e2255c57a262feb90639aff287548_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/_iterate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar o = { raz: 1, dwa: 2, trzy: 3 }
\t  , o2 = {}, o3 = {}, arr, i = -1;

\tt = t(\"forEach\");
\tt(o, function (value, name, self, index) {
\t\to2[name] = value;
\t\ta(index, ++i, \"Index\");
\t\ta(self, o, \"Self\");
\t\ta(this, o3, \"Scope\");
\t}, o3);
\ta.deep(o2, o);

\tarr = [];
\to2 = {};
\ti = -1;
\tt(o, function (value, name, self, index) {
\t\tarr.push(value);
\t\to2[name] = value;
\t\ta(index, ++i, \"Index\");
\t\ta(self, o, \"Self\");
\t\ta(this, o3, \"Scope\");
\t}, o3, function (a, b) {
\t\treturn o[b] - o[a];
\t});
\ta.deep(o2, o, \"Sort by Values: Content\");
\ta.deep(arr, [3, 2, 1], \"Sort by Values: Order\");
};
", "node_modules/es5-ext/test/object/_iterate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/_iterate.js");
    }
}
