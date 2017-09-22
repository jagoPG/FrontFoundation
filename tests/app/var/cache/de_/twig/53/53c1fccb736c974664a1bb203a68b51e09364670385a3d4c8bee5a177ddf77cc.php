<?php

/* node_modules/es5-ext/test/math/log2/shim.js */
class __TwigTemplate_752c0d4396d87888539cd1ced7b8e8ddb208a6ccf2f415435b7dc704d402eeb8 extends Twig_Template
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
        $__internal_c312066674cb31a2347647babe8ad0747e00e2637089a69938d7af7cb52ba47e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c312066674cb31a2347647babe8ad0747e00e2637089a69938d7af7cb52ba47e->enter($__internal_c312066674cb31a2347647babe8ad0747e00e2637089a69938d7af7cb52ba47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/log2/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t({}), NaN, \"NaN\");
\ta(t(-0.5), NaN, \"Less than 0\");
\ta(t(0), -Infinity, \"0\");
\ta(t(1), 0, \"1\");
\ta(t(Infinity), Infinity, \"Infinity\");
\ta(t(3).toFixed(15), \"1.584962500721156\", \"Other\");
};
";
        
        $__internal_c312066674cb31a2347647babe8ad0747e00e2637089a69938d7af7cb52ba47e->leave($__internal_c312066674cb31a2347647babe8ad0747e00e2637089a69938d7af7cb52ba47e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/log2/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t({}), NaN, \"NaN\");
\ta(t(-0.5), NaN, \"Less than 0\");
\ta(t(0), -Infinity, \"0\");
\ta(t(1), 0, \"1\");
\ta(t(Infinity), Infinity, \"Infinity\");
\ta(t(3).toFixed(15), \"1.584962500721156\", \"Other\");
};
", "node_modules/es5-ext/test/math/log2/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/log2/shim.js");
    }
}
