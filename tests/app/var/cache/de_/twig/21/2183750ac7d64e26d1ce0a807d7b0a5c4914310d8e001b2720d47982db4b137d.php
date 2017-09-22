<?php

/* node_modules/es5-ext/test/math/expm1/implement.js */
class __TwigTemplate_643dfcde9a170e9a81eea65f9f81365bf593712a1078eae61e628003b3374c4d extends Twig_Template
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
        $__internal_44f98bcd823ddd711a17432e73920e3f2d9855bcda06cb26cc610775e3fcd31e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f98bcd823ddd711a17432e73920e3f2d9855bcda06cb26cc610775e3fcd31e->enter($__internal_44f98bcd823ddd711a17432e73920e3f2d9855bcda06cb26cc610775e3fcd31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/expm1/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../math/expm1/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_44f98bcd823ddd711a17432e73920e3f2d9855bcda06cb26cc610775e3fcd31e->leave($__internal_44f98bcd823ddd711a17432e73920e3f2d9855bcda06cb26cc610775e3fcd31e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/expm1/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../math/expm1/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/math/expm1/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/expm1/implement.js");
    }
}
