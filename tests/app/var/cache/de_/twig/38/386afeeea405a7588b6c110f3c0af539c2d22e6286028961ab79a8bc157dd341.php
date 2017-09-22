<?php

/* node_modules/es5-ext/test/function/valid-function.js */
class __TwigTemplate_93a64dba541b9edb77dfeb8be4980c0939914e3489a510dcb0a2d7344d8d011f extends Twig_Template
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
        $__internal_65cc8acd8e9357f8b820011370cf6e91d01e48b0f448731ff96a983a05daae1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65cc8acd8e9357f8b820011370cf6e91d01e48b0f448731ff96a983a05daae1b->enter($__internal_65cc8acd8e9357f8b820011370cf6e91d01e48b0f448731ff96a983a05daae1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/function/valid-function.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar f = function () {};
\ta(t(f), f, \"Function\");
\t// eslint-disable-next-line no-new-func
\tf = new Function();
\ta(t(f), f, \"Function\");
\ta.throws(function () {
\t\tt({});
\t}, \"Object\");
\ta.throws(function () {
\t\tt(/re/);
\t}, \"RegExp\");
\ta.throws(function () {
\t\tt({
\t\t\tcall: function () {
\t\t\t\treturn 20;
\t\t\t}
\t\t});
\t}, \"Plain object\");
};
";
        
        $__internal_65cc8acd8e9357f8b820011370cf6e91d01e48b0f448731ff96a983a05daae1b->leave($__internal_65cc8acd8e9357f8b820011370cf6e91d01e48b0f448731ff96a983a05daae1b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/function/valid-function.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar f = function () {};
\ta(t(f), f, \"Function\");
\t// eslint-disable-next-line no-new-func
\tf = new Function();
\ta(t(f), f, \"Function\");
\ta.throws(function () {
\t\tt({});
\t}, \"Object\");
\ta.throws(function () {
\t\tt(/re/);
\t}, \"RegExp\");
\ta.throws(function () {
\t\tt({
\t\t\tcall: function () {
\t\t\t\treturn 20;
\t\t\t}
\t\t});
\t}, \"Plain object\");
};
", "node_modules/es5-ext/test/function/valid-function.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/function/valid-function.js");
    }
}
