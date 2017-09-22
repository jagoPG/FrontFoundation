<?php

/* node_modules/es5-ext/test/number/max-safe-integer/is-implemented.js */
class __TwigTemplate_126ddf98b633b4c08769231012191c6a64a55c03b25c7c78746e1ba7c294ac94 extends Twig_Template
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
        $__internal_ea04925435dcc0595ebaaed033b85c454cfaccc62140f4dd0d80c858a3255d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea04925435dcc0595ebaaed033b85c454cfaccc62140f4dd0d80c858a3255d74->enter($__internal_ea04925435dcc0595ebaaed033b85c454cfaccc62140f4dd0d80c858a3255d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/number/max-safe-integer/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_ea04925435dcc0595ebaaed033b85c454cfaccc62140f4dd0d80c858a3255d74->leave($__internal_ea04925435dcc0595ebaaed033b85c454cfaccc62140f4dd0d80c858a3255d74_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/number/max-safe-integer/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
", "node_modules/es5-ext/test/number/max-safe-integer/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/number/max-safe-integer/is-implemented.js");
    }
}
