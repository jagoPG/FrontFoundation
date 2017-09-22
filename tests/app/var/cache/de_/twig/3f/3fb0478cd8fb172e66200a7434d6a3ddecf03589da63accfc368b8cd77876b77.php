<?php

/* node_modules/es5-ext/test/number/is-safe-integer/shim.js */
class __TwigTemplate_4331c4d5de6e1291bd8cbfaa7ff3a788799dc845627f6a13d1a2d34c6215abad extends Twig_Template
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
        $__internal_ecbcc3498bc7abb8ceeb143f7b1158b88a935e6708629c94e3d0e9849f9e7074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecbcc3498bc7abb8ceeb143f7b1158b88a935e6708629c94e3d0e9849f9e7074->enter($__internal_ecbcc3498bc7abb8ceeb143f7b1158b88a935e6708629c94e3d0e9849f9e7074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/number/is-safe-integer/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t(2), true, \"Number\");
\ta(t(2.34), false, \"Float\");
\ta(t(Math.pow(2, 53)), false, \"Too large\");
\ta(t(Math.pow(2, 53) - 1), true, \"Maximum\");
\ta(t(\"23\"), false, \"Not numeric\");
\ta(t(NaN), false, \"NaN\");
\ta(t(Infinity), false, \"Infinity\");
};
";
        
        $__internal_ecbcc3498bc7abb8ceeb143f7b1158b88a935e6708629c94e3d0e9849f9e7074->leave($__internal_ecbcc3498bc7abb8ceeb143f7b1158b88a935e6708629c94e3d0e9849f9e7074_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/number/is-safe-integer/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t(2), true, \"Number\");
\ta(t(2.34), false, \"Float\");
\ta(t(Math.pow(2, 53)), false, \"Too large\");
\ta(t(Math.pow(2, 53) - 1), true, \"Maximum\");
\ta(t(\"23\"), false, \"Not numeric\");
\ta(t(NaN), false, \"NaN\");
\ta(t(Infinity), false, \"Infinity\");
};
", "node_modules/es5-ext/test/number/is-safe-integer/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/number/is-safe-integer/shim.js");
    }
}
