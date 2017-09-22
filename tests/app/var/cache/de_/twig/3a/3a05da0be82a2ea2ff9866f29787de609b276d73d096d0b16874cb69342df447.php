<?php

/* node_modules/es5-ext/math/acosh/is-implemented.js */
class __TwigTemplate_e3eedb07630518c5c165561fe2e27ba4607da736380e79cd0b29753f5a455fd8 extends Twig_Template
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
        $__internal_59f349585c1fc9c16099883c0d3569ea0a0965958cb152467b5b564b0a7d067a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f349585c1fc9c16099883c0d3569ea0a0965958cb152467b5b564b0a7d067a->enter($__internal_59f349585c1fc9c16099883c0d3569ea0a0965958cb152467b5b564b0a7d067a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/acosh/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar acosh = Math.acosh;
\tif (typeof acosh !== \"function\") return false;
\treturn acosh(2) === 1.3169578969248166;
};
";
        
        $__internal_59f349585c1fc9c16099883c0d3569ea0a0965958cb152467b5b564b0a7d067a->leave($__internal_59f349585c1fc9c16099883c0d3569ea0a0965958cb152467b5b564b0a7d067a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/acosh/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar acosh = Math.acosh;
\tif (typeof acosh !== \"function\") return false;
\treturn acosh(2) === 1.3169578969248166;
};
", "node_modules/es5-ext/math/acosh/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/acosh/is-implemented.js");
    }
}
