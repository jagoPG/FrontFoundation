<?php

/* node_modules/es5-ext/test/string/#/ends-with/is-implemented.js */
class __TwigTemplate_29594cea80cac0fd3424f760807bbfdbf74376f5725f8c387776462a0d7a2aff extends Twig_Template
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
        $__internal_b5d43eda09f28718ca638363d0fca51dec02a2967061be0aa59699f3ab6aa834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d43eda09f28718ca638363d0fca51dec02a2967061be0aa59699f3ab6aa834->enter($__internal_b5d43eda09f28718ca638363d0fca51dec02a2967061be0aa59699f3ab6aa834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/ends-with/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_b5d43eda09f28718ca638363d0fca51dec02a2967061be0aa59699f3ab6aa834->leave($__internal_b5d43eda09f28718ca638363d0fca51dec02a2967061be0aa59699f3ab6aa834_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/ends-with/is-implemented.js";
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
", "node_modules/es5-ext/test/string/#/ends-with/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/ends-with/is-implemented.js");
    }
}
