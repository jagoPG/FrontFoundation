<?php

/* node_modules/es5-ext/reg-exp/#/split/is-implemented.js */
class __TwigTemplate_30f211f37303efb652023a9ac09aa998b216baf5d01bbde87e6444baf8d0f7ff extends Twig_Template
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
        $__internal_e55cdfe9bfe6f9ffd83c40b8b61d7f6677bd545702d3e2c90d0e129b0360bcf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55cdfe9bfe6f9ffd83c40b8b61d7f6677bd545702d3e2c90d0e129b0360bcf3->enter($__internal_e55cdfe9bfe6f9ffd83c40b8b61d7f6677bd545702d3e2c90d0e129b0360bcf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/#/split/is-implemented.js"));

        // line 1
        echo "\"use strict\";

var re = /\\|/;

module.exports = function () {
\tif (typeof re.split !== \"function\") return false;
\treturn re.split(\"bar|foo\")[1] === \"foo\";
};
";
        
        $__internal_e55cdfe9bfe6f9ffd83c40b8b61d7f6677bd545702d3e2c90d0e129b0360bcf3->leave($__internal_e55cdfe9bfe6f9ffd83c40b8b61d7f6677bd545702d3e2c90d0e129b0360bcf3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/#/split/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var re = /\\|/;

module.exports = function () {
\tif (typeof re.split !== \"function\") return false;
\treturn re.split(\"bar|foo\")[1] === \"foo\";
};
", "node_modules/es5-ext/reg-exp/#/split/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/#/split/is-implemented.js");
    }
}
