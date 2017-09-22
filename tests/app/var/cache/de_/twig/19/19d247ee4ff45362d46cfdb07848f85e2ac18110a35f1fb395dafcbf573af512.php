<?php

/* node_modules/core-js/fn/number/is-integer.js */
class __TwigTemplate_7a8000bcb8f3b3f7580a575f41d32c2cfb10dbe7512d2d14eaab31a546b4c286 extends Twig_Template
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
        $__internal_38aed4d61178eae7139657e9c051095d7486b04b8122d92089fb5c6dba9202b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38aed4d61178eae7139657e9c051095d7486b04b8122d92089fb5c6dba9202b2->enter($__internal_38aed4d61178eae7139657e9c051095d7486b04b8122d92089fb5c6dba9202b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/number/is-integer.js"));

        // line 1
        echo "require('../../modules/es6.number.is-integer');
module.exports = require('../../modules/_core').Number.isInteger;
";
        
        $__internal_38aed4d61178eae7139657e9c051095d7486b04b8122d92089fb5c6dba9202b2->leave($__internal_38aed4d61178eae7139657e9c051095d7486b04b8122d92089fb5c6dba9202b2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/number/is-integer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.number.is-integer');
module.exports = require('../../modules/_core').Number.isInteger;
", "node_modules/core-js/fn/number/is-integer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/number/is-integer.js");
    }
}
