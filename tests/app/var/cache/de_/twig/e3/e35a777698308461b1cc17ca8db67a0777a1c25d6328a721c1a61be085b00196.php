<?php

/* node_modules/es5-ext/test/function/noop.js */
class __TwigTemplate_806d4e7995d50dbb677b1ca8843c0eea00e879304f51821332f0e424fab7c90d extends Twig_Template
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
        $__internal_77497b1203e3f35fa3753aa2b03419a0e315cff548c693c7d34a45c12ce1daba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77497b1203e3f35fa3753aa2b03419a0e315cff548c693c7d34a45c12ce1daba->enter($__internal_77497b1203e3f35fa3753aa2b03419a0e315cff548c693c7d34a45c12ce1daba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/function/noop.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(typeof t(1, 2, 3), \"undefined\");
};
";
        
        $__internal_77497b1203e3f35fa3753aa2b03419a0e315cff548c693c7d34a45c12ce1daba->leave($__internal_77497b1203e3f35fa3753aa2b03419a0e315cff548c693c7d34a45c12ce1daba_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/function/noop.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(typeof t(1, 2, 3), \"undefined\");
};
", "node_modules/es5-ext/test/function/noop.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/function/noop.js");
    }
}
