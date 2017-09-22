<?php

/* node_modules/es5-ext/test/math/cosh/shim.js */
class __TwigTemplate_10f4dadbbbc3498006b9a3d265d1111454579889c0ebbb0cc109330af5223a2d extends Twig_Template
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
        $__internal_44e6f3bf0e6619f201366574d7cb009c07d29b556040fb29c1400f6fde10f4f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e6f3bf0e6619f201366574d7cb009c07d29b556040fb29c1400f6fde10f4f0->enter($__internal_44e6f3bf0e6619f201366574d7cb009c07d29b556040fb29c1400f6fde10f4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/cosh/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t({}), NaN, \"NaN\");
\ta(t(0), 1, \"Zero\");
\ta(t(Infinity), Infinity, \"Infinity\");
\ta(t(-Infinity), Infinity, \"-Infinity\");
\ta(t(1), 1.5430806348152437, \"1\");
\ta(t(Number.MAX_VALUE), Infinity);
\ta(t(-Number.MAX_VALUE), Infinity);
\ta(t(Number.MIN_VALUE), 1);
\ta(t(-Number.MIN_VALUE), 1);
};
";
        
        $__internal_44e6f3bf0e6619f201366574d7cb009c07d29b556040fb29c1400f6fde10f4f0->leave($__internal_44e6f3bf0e6619f201366574d7cb009c07d29b556040fb29c1400f6fde10f4f0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/cosh/shim.js";
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
\ta(t(0), 1, \"Zero\");
\ta(t(Infinity), Infinity, \"Infinity\");
\ta(t(-Infinity), Infinity, \"-Infinity\");
\ta(t(1), 1.5430806348152437, \"1\");
\ta(t(Number.MAX_VALUE), Infinity);
\ta(t(-Number.MAX_VALUE), Infinity);
\ta(t(Number.MIN_VALUE), 1);
\ta(t(-Number.MIN_VALUE), 1);
};
", "node_modules/es5-ext/test/math/cosh/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/cosh/shim.js");
    }
}
