<?php

/* node_modules/es5-ext/test/object/is-copy.js */
class __TwigTemplate_147fbe102791179be8a56281615e8450b17fbeb7a6de9bddfa9c830329df665f extends Twig_Template
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
        $__internal_e92822ba2bcfa475c09ca63e5a6bc9f6b1f38cd6ef6bde561648832d0d091f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92822ba2bcfa475c09ca63e5a6bc9f6b1f38cd6ef6bde561648832d0d091f2e->enter($__internal_e92822ba2bcfa475c09ca63e5a6bc9f6b1f38cd6ef6bde561648832d0d091f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/is-copy.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t({ 1: 1, 2: 2, 3: 3 }, { 1: 1, 2: 2, 3: 3 }), true, \"Same\");
\ta(t({ 1: 1, 2: 2, 3: 3 }, { 1: 1, 2: 2, 3: 4 }), false,
\t\t\"Different property value\");
\ta(t({ 1: 1, 2: 2, 3: 3 }, { 1: 1, 2: 2 }), false,
\t\t\"Property only in source\");
\ta(t({ 1: 1, 2: 2 }, { 1: 1, 2: 2, 3: 4 }), false,
\t\t\"Property only in target\");

\ta(t(\"raz\", \"dwa\"), false, \"String: diff\");
\ta(t(\"raz\", \"raz\"), true, \"String: same\");
\ta(t(\"32\", 32), false, \"String & Number\");

\ta(t([1, \"raz\", true], [1, \"raz\", true]), true, \"Array: same\");
\ta(t([1, \"raz\", undefined], [1, \"raz\"]), false, \"Array: diff\");
};
";
        
        $__internal_e92822ba2bcfa475c09ca63e5a6bc9f6b1f38cd6ef6bde561648832d0d091f2e->leave($__internal_e92822ba2bcfa475c09ca63e5a6bc9f6b1f38cd6ef6bde561648832d0d091f2e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/is-copy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t({ 1: 1, 2: 2, 3: 3 }, { 1: 1, 2: 2, 3: 3 }), true, \"Same\");
\ta(t({ 1: 1, 2: 2, 3: 3 }, { 1: 1, 2: 2, 3: 4 }), false,
\t\t\"Different property value\");
\ta(t({ 1: 1, 2: 2, 3: 3 }, { 1: 1, 2: 2 }), false,
\t\t\"Property only in source\");
\ta(t({ 1: 1, 2: 2 }, { 1: 1, 2: 2, 3: 4 }), false,
\t\t\"Property only in target\");

\ta(t(\"raz\", \"dwa\"), false, \"String: diff\");
\ta(t(\"raz\", \"raz\"), true, \"String: same\");
\ta(t(\"32\", 32), false, \"String & Number\");

\ta(t([1, \"raz\", true], [1, \"raz\", true]), true, \"Array: same\");
\ta(t([1, \"raz\", undefined], [1, \"raz\"]), false, \"Array: diff\");
};
", "node_modules/es5-ext/test/object/is-copy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/is-copy.js");
    }
}
