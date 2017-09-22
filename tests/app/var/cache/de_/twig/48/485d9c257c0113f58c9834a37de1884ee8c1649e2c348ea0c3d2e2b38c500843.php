<?php

/* node_modules/es5-ext/test/number/to-pos-integer.js */
class __TwigTemplate_f680f238fafb3596a89d98ead88518f4893f71e7f13397ca1f1d48c3d8d3a14a extends Twig_Template
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
        $__internal_cf743ddbe2c9f01fbe762bd622448ecf26df9a0ecb9911d244c8f5dd5cedee6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf743ddbe2c9f01fbe762bd622448ecf26df9a0ecb9911d244c8f5dd5cedee6a->enter($__internal_cf743ddbe2c9f01fbe762bd622448ecf26df9a0ecb9911d244c8f5dd5cedee6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/number/to-pos-integer.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t({}), 0, \"NaN\");
\ta(t(20), 20, \"Positive integer\");
\ta(t(-20), 0, \"Negative integer\");
\ta(t(Infinity), Infinity, \"Infinity\");
\ta(t(15.343), 15, \"Float\");
\ta(t(-15.343), 0, \"Negative float\");
};
";
        
        $__internal_cf743ddbe2c9f01fbe762bd622448ecf26df9a0ecb9911d244c8f5dd5cedee6a->leave($__internal_cf743ddbe2c9f01fbe762bd622448ecf26df9a0ecb9911d244c8f5dd5cedee6a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/number/to-pos-integer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t({}), 0, \"NaN\");
\ta(t(20), 20, \"Positive integer\");
\ta(t(-20), 0, \"Negative integer\");
\ta(t(Infinity), Infinity, \"Infinity\");
\ta(t(15.343), 15, \"Float\");
\ta(t(-15.343), 0, \"Negative float\");
};
", "node_modules/es5-ext/test/number/to-pos-integer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/number/to-pos-integer.js");
    }
}
