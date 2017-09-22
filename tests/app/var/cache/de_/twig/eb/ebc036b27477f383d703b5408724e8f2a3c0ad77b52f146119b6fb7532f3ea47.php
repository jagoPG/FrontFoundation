<?php

/* node_modules/es5-ext/number/is-finite/shim.js */
class __TwigTemplate_cea52cb639b6f382048eb6cfbb5cbf8142423f7d818f8d3245454eb4d17acd9b extends Twig_Template
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
        $__internal_69e645abd6d87ac3a71552e2f7fa48ef8c080e2512e16fdfbfe144373b94696c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e645abd6d87ac3a71552e2f7fa48ef8c080e2512e16fdfbfe144373b94696c->enter($__internal_69e645abd6d87ac3a71552e2f7fa48ef8c080e2512e16fdfbfe144373b94696c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/is-finite/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (value) {
\treturn (typeof value === \"number\") && isFinite(value);
};
";
        
        $__internal_69e645abd6d87ac3a71552e2f7fa48ef8c080e2512e16fdfbfe144373b94696c->leave($__internal_69e645abd6d87ac3a71552e2f7fa48ef8c080e2512e16fdfbfe144373b94696c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/is-finite/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (value) {
\treturn (typeof value === \"number\") && isFinite(value);
};
", "node_modules/es5-ext/number/is-finite/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/is-finite/shim.js");
    }
}
