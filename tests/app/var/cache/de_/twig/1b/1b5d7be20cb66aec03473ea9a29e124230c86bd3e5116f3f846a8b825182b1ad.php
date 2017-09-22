<?php

/* node_modules/es5-ext/test/math/fround/shim.js */
class __TwigTemplate_cedc67db65edba917d98a3ca3bf5fa936873a236648e81c48914cb3ad779e493 extends Twig_Template
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
        $__internal_d02dc874a71e72cea70d1ee4de1946a34d756fb15ba370f4797a04adf1df38f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02dc874a71e72cea70d1ee4de1946a34d756fb15ba370f4797a04adf1df38f9->enter($__internal_d02dc874a71e72cea70d1ee4de1946a34d756fb15ba370f4797a04adf1df38f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/fround/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t({}), NaN, \"NaN\");
\ta(t(0), 0, \"Zero\");
\ta(t(Infinity), Infinity, \"Infinity\");
\ta(t(-Infinity), -Infinity, \"-Infinity\");
\ta(t(1.337), 1.3370000123977661, \"1\");
};
";
        
        $__internal_d02dc874a71e72cea70d1ee4de1946a34d756fb15ba370f4797a04adf1df38f9->leave($__internal_d02dc874a71e72cea70d1ee4de1946a34d756fb15ba370f4797a04adf1df38f9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/fround/shim.js";
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
\ta(t(1.337), 1.3370000123977661, \"1\");
};
", "node_modules/es5-ext/test/math/fround/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/fround/shim.js");
    }
}
