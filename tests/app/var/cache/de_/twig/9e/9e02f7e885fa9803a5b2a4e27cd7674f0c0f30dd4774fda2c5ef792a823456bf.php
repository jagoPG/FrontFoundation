<?php

/* node_modules/es5-ext/test/string/#/starts-with/is-implemented.js */
class __TwigTemplate_8c6562b3312dd9654d0d388668f7983b0188885f155c994d36a0af9b838f2941 extends Twig_Template
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
        $__internal_ff53c72875cd8335afaf484a491645f16c32d88a32faa8ca4ac84eb4d013c335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff53c72875cd8335afaf484a491645f16c32d88a32faa8ca4ac84eb4d013c335->enter($__internal_ff53c72875cd8335afaf484a491645f16c32d88a32faa8ca4ac84eb4d013c335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/starts-with/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_ff53c72875cd8335afaf484a491645f16c32d88a32faa8ca4ac84eb4d013c335->leave($__internal_ff53c72875cd8335afaf484a491645f16c32d88a32faa8ca4ac84eb4d013c335_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/starts-with/is-implemented.js";
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
", "node_modules/es5-ext/test/string/#/starts-with/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/starts-with/is-implemented.js");
    }
}
