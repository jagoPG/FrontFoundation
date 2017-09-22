<?php

/* node_modules/es5-ext/test/math/asinh/shim.js */
class __TwigTemplate_bba00592287d8e7c3b909089493da6f25d3625ee74786ebb417d939ba0946677 extends Twig_Template
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
        $__internal_ecde4adfb4d3a02d382645d79bca5c9e91912dfc6ca017c6eeaf32e50f9e18e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecde4adfb4d3a02d382645d79bca5c9e91912dfc6ca017c6eeaf32e50f9e18e1->enter($__internal_ecde4adfb4d3a02d382645d79bca5c9e91912dfc6ca017c6eeaf32e50f9e18e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/asinh/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t({}), NaN, \"NaN\");
\ta(t(0), 0, \"Zero\");
\ta(t(Infinity), Infinity, \"Infinity\");
\ta(t(-Infinity), -Infinity, \"-Infinity\");
\ta(t(-2), -1.4436354751788103, \"Negative\");
\ta(t(2), 1.4436354751788103, \"Positive\");
};
";
        
        $__internal_ecde4adfb4d3a02d382645d79bca5c9e91912dfc6ca017c6eeaf32e50f9e18e1->leave($__internal_ecde4adfb4d3a02d382645d79bca5c9e91912dfc6ca017c6eeaf32e50f9e18e1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/asinh/shim.js";
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
\ta(t(0), 0, \"Zero\");
\ta(t(Infinity), Infinity, \"Infinity\");
\ta(t(-Infinity), -Infinity, \"-Infinity\");
\ta(t(-2), -1.4436354751788103, \"Negative\");
\ta(t(2), 1.4436354751788103, \"Positive\");
};
", "node_modules/es5-ext/test/math/asinh/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/asinh/shim.js");
    }
}
