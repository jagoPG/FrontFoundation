<?php

/* node_modules/es5-ext/test/reg-exp/#/unicode/implement.js */
class __TwigTemplate_2198a160140552767842fe1f4a3a4f6afb230d4955560fd7d897e61a561389de extends Twig_Template
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
        $__internal_d7abe8907543ca2632a11780ce3deb6f7f86eb7e02d7da4efa978f7819748b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7abe8907543ca2632a11780ce3deb6f7f86eb7e02d7da4efa978f7819748b6b->enter($__internal_d7abe8907543ca2632a11780ce3deb6f7f86eb7e02d7da4efa978f7819748b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/reg-exp/#/unicode/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../../reg-exp/#/unicode/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_d7abe8907543ca2632a11780ce3deb6f7f86eb7e02d7da4efa978f7819748b6b->leave($__internal_d7abe8907543ca2632a11780ce3deb6f7f86eb7e02d7da4efa978f7819748b6b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/reg-exp/#/unicode/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../../reg-exp/#/unicode/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/reg-exp/#/unicode/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/reg-exp/#/unicode/implement.js");
    }
}
