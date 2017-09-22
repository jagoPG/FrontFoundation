<?php

/* node_modules/es5-ext/test/math/clz32/shim.js */
class __TwigTemplate_99ec82c730d17f6e42242256e65156337fc7915d85c3817db637573d65efa181 extends Twig_Template
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
        $__internal_d0f1279c5b7b5908357544d68afe546fa69b93d9b29e368739b90e227b632a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f1279c5b7b5908357544d68afe546fa69b93d9b29e368739b90e227b632a7a->enter($__internal_d0f1279c5b7b5908357544d68afe546fa69b93d9b29e368739b90e227b632a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/clz32/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t(1), 31, \"1\");
\ta(t(1000), 22, \"1000\");
\ta(t(), 32, \"No arguments\");
\ta(t(Infinity), 32, \"Infinity\");
\ta(t(-Infinity), 32, \"-Infinity\");
\ta(t(\"foo\"), 32, \"String\");
\ta(t(true), 31, \"Boolean\");
\ta(t(3.5), 30, \"Float\");
};
";
        
        $__internal_d0f1279c5b7b5908357544d68afe546fa69b93d9b29e368739b90e227b632a7a->leave($__internal_d0f1279c5b7b5908357544d68afe546fa69b93d9b29e368739b90e227b632a7a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/clz32/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t(1), 31, \"1\");
\ta(t(1000), 22, \"1000\");
\ta(t(), 32, \"No arguments\");
\ta(t(Infinity), 32, \"Infinity\");
\ta(t(-Infinity), 32, \"-Infinity\");
\ta(t(\"foo\"), 32, \"String\");
\ta(t(true), 31, \"Boolean\");
\ta(t(3.5), 30, \"Float\");
};
", "node_modules/es5-ext/test/math/clz32/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/clz32/shim.js");
    }
}
