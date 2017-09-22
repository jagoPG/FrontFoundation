<?php

/* node_modules/es5-ext/test/array/#/uniq.js */
class __TwigTemplate_2a69128e993454e5eae8a34425d0611f8fc3761beccc3d270ec131a1a70502ca extends Twig_Template
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
        $__internal_d0a061a5d2b8be4321ea64c6bf16902a3c90a67f957d0ca34b5e1bcff4b30cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a061a5d2b8be4321ea64c6bf16902a3c90a67f957d0ca34b5e1bcff4b30cc7->enter($__internal_d0a061a5d2b8be4321ea64c6bf16902a3c90a67f957d0ca34b5e1bcff4b30cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/uniq.js"));

        // line 1
        echo "\"use strict\";

module.exports = {
\t\"__generic\": function (t, a) {
\t\ta(t.call(this).length, 3);
\t},
\t\"\": function (t, a) {
\t\tvar o, x = {}, y = {}, z = {}, w;
\t\to = [1, 2, x, 3, 1, \"raz\", \"1\", y, x, \"trzy\", z, \"raz\"];

\t\ta.not(w = t.call(o), o, \"Returns different object\");
\t\ta.deep(w, [1, 2, x, 3, \"raz\", \"1\", y, \"trzy\", z], \"Result\");
\t}
};
";
        
        $__internal_d0a061a5d2b8be4321ea64c6bf16902a3c90a67f957d0ca34b5e1bcff4b30cc7->leave($__internal_d0a061a5d2b8be4321ea64c6bf16902a3c90a67f957d0ca34b5e1bcff4b30cc7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/uniq.js";
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
\t\ta(t.call(this).length, 3);
\t},
\t\"\": function (t, a) {
\t\tvar o, x = {}, y = {}, z = {}, w;
\t\to = [1, 2, x, 3, 1, \"raz\", \"1\", y, x, \"trzy\", z, \"raz\"];

\t\ta.not(w = t.call(o), o, \"Returns different object\");
\t\ta.deep(w, [1, 2, x, 3, \"raz\", \"1\", y, \"trzy\", z], \"Result\");
\t}
};
", "node_modules/es5-ext/test/array/#/uniq.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/uniq.js");
    }
}
