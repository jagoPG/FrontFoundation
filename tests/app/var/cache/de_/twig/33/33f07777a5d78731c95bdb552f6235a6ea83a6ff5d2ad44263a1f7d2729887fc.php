<?php

/* node_modules/es5-ext/test/math/log10/shim.js */
class __TwigTemplate_9164b707bb569d7f12331d4757104b6877d1059b83bcbdc3a3400c560d147da4 extends Twig_Template
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
        $__internal_822ad46c7c5a4b5434b485b010def8eb3698f4fd577b273d5ff9660dcd728631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_822ad46c7c5a4b5434b485b010def8eb3698f4fd577b273d5ff9660dcd728631->enter($__internal_822ad46c7c5a4b5434b485b010def8eb3698f4fd577b273d5ff9660dcd728631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/log10/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t({}), NaN, \"NaN\");
\ta(t(-0.5), NaN, \"Less than 0\");
\ta(t(0), -Infinity, \"0\");
\ta(t(1), 0, \"1\");
\ta(t(Infinity), Infinity, \"Infinity\");
\ta(t(2), 0.3010299956639812, \"Other\");
};
";
        
        $__internal_822ad46c7c5a4b5434b485b010def8eb3698f4fd577b273d5ff9660dcd728631->leave($__internal_822ad46c7c5a4b5434b485b010def8eb3698f4fd577b273d5ff9660dcd728631_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/log10/shim.js";
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
\ta(t(2), 0.3010299956639812, \"Other\");
};
", "node_modules/es5-ext/test/math/log10/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/log10/shim.js");
    }
}
