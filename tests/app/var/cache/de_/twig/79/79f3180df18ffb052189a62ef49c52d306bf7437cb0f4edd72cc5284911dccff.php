<?php

/* node_modules/es5-ext/test/reg-exp/#/replace/is-implemented.js */
class __TwigTemplate_a60f95544c02e3811bcd891910448705787d4b5220989175d130741354bd68bf extends Twig_Template
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
        $__internal_72c7757252b7e0e15af5e0a3f3961813d28b0afa522e32d16d1af6025c9c065f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c7757252b7e0e15af5e0a3f3961813d28b0afa522e32d16d1af6025c9c065f->enter($__internal_72c7757252b7e0e15af5e0a3f3961813d28b0afa522e32d16d1af6025c9c065f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/reg-exp/#/replace/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_72c7757252b7e0e15af5e0a3f3961813d28b0afa522e32d16d1af6025c9c065f->leave($__internal_72c7757252b7e0e15af5e0a3f3961813d28b0afa522e32d16d1af6025c9c065f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/reg-exp/#/replace/is-implemented.js";
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
", "node_modules/es5-ext/test/reg-exp/#/replace/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/reg-exp/#/replace/is-implemented.js");
    }
}
