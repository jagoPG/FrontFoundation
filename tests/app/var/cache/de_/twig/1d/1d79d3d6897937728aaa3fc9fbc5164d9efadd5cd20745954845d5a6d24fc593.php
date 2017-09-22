<?php

/* node_modules/es5-ext/test/array/#/fill/is-implemented.js */
class __TwigTemplate_936b02db97dfc6287691826df8b33f65f00ea852f02b962ec552c6cce1c1b70d extends Twig_Template
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
        $__internal_65a9f959f46a6aa7e37e10db3e407c0e0e12a5a6de445836e22b5c438bd1f583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65a9f959f46a6aa7e37e10db3e407c0e0e12a5a6de445836e22b5c438bd1f583->enter($__internal_65a9f959f46a6aa7e37e10db3e407c0e0e12a5a6de445836e22b5c438bd1f583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/fill/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_65a9f959f46a6aa7e37e10db3e407c0e0e12a5a6de445836e22b5c438bd1f583->leave($__internal_65a9f959f46a6aa7e37e10db3e407c0e0e12a5a6de445836e22b5c438bd1f583_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/fill/is-implemented.js";
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
", "node_modules/es5-ext/test/array/#/fill/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/fill/is-implemented.js");
    }
}
