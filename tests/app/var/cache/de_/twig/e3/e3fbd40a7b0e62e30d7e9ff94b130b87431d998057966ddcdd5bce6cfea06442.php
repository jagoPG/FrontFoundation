<?php

/* node_modules/es5-ext/test/math/tanh/implement.js */
class __TwigTemplate_600bac8302f83e0b21e5838853dfa8e55fc1093cebad8919ed53e8ddb097503b extends Twig_Template
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
        $__internal_0e05ec59381624fbdd973c50afb1ec6aff84bb5e8d1abc59ba8db2fd28412335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e05ec59381624fbdd973c50afb1ec6aff84bb5e8d1abc59ba8db2fd28412335->enter($__internal_0e05ec59381624fbdd973c50afb1ec6aff84bb5e8d1abc59ba8db2fd28412335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/tanh/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../math/tanh/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_0e05ec59381624fbdd973c50afb1ec6aff84bb5e8d1abc59ba8db2fd28412335->leave($__internal_0e05ec59381624fbdd973c50afb1ec6aff84bb5e8d1abc59ba8db2fd28412335_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/tanh/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../math/tanh/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/math/tanh/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/tanh/implement.js");
    }
}
