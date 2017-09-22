<?php

/* node_modules/es5-ext/test/array/#/map/implement.js */
class __TwigTemplate_baf8c974b8905382af2ec4df42c265a6a1c3dfd8f529fcc06aba0b0e6b8f01ca extends Twig_Template
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
        $__internal_cf7c7a7067d2bc725ad7616a3a4b6afd16ff3eb87c5eb4e7cfc82fa062f389c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7c7a7067d2bc725ad7616a3a4b6afd16ff3eb87c5eb4e7cfc82fa062f389c7->enter($__internal_cf7c7a7067d2bc725ad7616a3a4b6afd16ff3eb87c5eb4e7cfc82fa062f389c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/map/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../../array/#/map/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_cf7c7a7067d2bc725ad7616a3a4b6afd16ff3eb87c5eb4e7cfc82fa062f389c7->leave($__internal_cf7c7a7067d2bc725ad7616a3a4b6afd16ff3eb87c5eb4e7cfc82fa062f389c7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/map/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../../array/#/map/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/array/#/map/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/map/implement.js");
    }
}
