<?php

/* node_modules/es5-ext/test/math/sinh/shim.js */
class __TwigTemplate_f73cffbabce4dbccde15033f26534b9777c89918acb28a8ec1149987933fc1b7 extends Twig_Template
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
        $__internal_c3f5619be245a1c0cd3f24b2a3a60fe875f8b138987b3ba36fa5c436aaf3cb3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f5619be245a1c0cd3f24b2a3a60fe875f8b138987b3ba36fa5c436aaf3cb3f->enter($__internal_c3f5619be245a1c0cd3f24b2a3a60fe875f8b138987b3ba36fa5c436aaf3cb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/sinh/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t({}), NaN, \"NaN\");
\ta(t(0), 0, \"Zero\");
\ta(t(Infinity), Infinity, \"Infinity\");
\ta(t(-Infinity), -Infinity, \"-Infinity\");
\ta(t(1), 1.1752011936438014, \"1\");
\ta(t(Number.MAX_VALUE), Infinity);
\ta(t(-Number.MAX_VALUE), -Infinity);
\ta(t(Number.MIN_VALUE), 5e-324);
\ta(t(-Number.MIN_VALUE), -5e-324);
};
";
        
        $__internal_c3f5619be245a1c0cd3f24b2a3a60fe875f8b138987b3ba36fa5c436aaf3cb3f->leave($__internal_c3f5619be245a1c0cd3f24b2a3a60fe875f8b138987b3ba36fa5c436aaf3cb3f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/sinh/shim.js";
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
\ta(t(1), 1.1752011936438014, \"1\");
\ta(t(Number.MAX_VALUE), Infinity);
\ta(t(-Number.MAX_VALUE), -Infinity);
\ta(t(Number.MIN_VALUE), 5e-324);
\ta(t(-Number.MIN_VALUE), -5e-324);
};
", "node_modules/es5-ext/test/math/sinh/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/sinh/shim.js");
    }
}
