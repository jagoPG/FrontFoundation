<?php

/* node_modules/es5-ext/test/number/to-integer.js */
class __TwigTemplate_8d59e6dd9fd5ff16fcea346b8edfaf0b4917cdf15fc3d855a88235c45e45a60d extends Twig_Template
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
        $__internal_cc26ed2311a251b205a0be68fb8e7f38dc762d10351aa1c80d7116afbca4ea4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc26ed2311a251b205a0be68fb8e7f38dc762d10351aa1c80d7116afbca4ea4e->enter($__internal_cc26ed2311a251b205a0be68fb8e7f38dc762d10351aa1c80d7116afbca4ea4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/number/to-integer.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t({}), 0, \"NaN\");
\ta(t(20), 20, \"Positive integer\");
\ta(t(\"-20\"), -20, \"String negative integer\");
\ta(t(Infinity), Infinity, \"Infinity\");
\ta(t(15.343), 15, \"Float\");
\ta(t(-15.343), -15, \"Negative float\");
};
";
        
        $__internal_cc26ed2311a251b205a0be68fb8e7f38dc762d10351aa1c80d7116afbca4ea4e->leave($__internal_cc26ed2311a251b205a0be68fb8e7f38dc762d10351aa1c80d7116afbca4ea4e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/number/to-integer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t({}), 0, \"NaN\");
\ta(t(20), 20, \"Positive integer\");
\ta(t(\"-20\"), -20, \"String negative integer\");
\ta(t(Infinity), Infinity, \"Infinity\");
\ta(t(15.343), 15, \"Float\");
\ta(t(-15.343), -15, \"Negative float\");
};
", "node_modules/es5-ext/test/number/to-integer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/number/to-integer.js");
    }
}
