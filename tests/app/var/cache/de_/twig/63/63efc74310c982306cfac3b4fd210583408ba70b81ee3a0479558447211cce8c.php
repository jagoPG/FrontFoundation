<?php

/* node_modules/es5-ext/test/function/invoke.js */
class __TwigTemplate_8975e7d9dc57f94c0c8d30f8f3b2b2ca45b9150ad1299d0d367e0a7af34d302a extends Twig_Template
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
        $__internal_d205fd53f81398bce3e08c8355c37704d6449650a3a0859e991d3c142126f247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d205fd53f81398bce3e08c8355c37704d6449650a3a0859e991d3c142126f247->enter($__internal_d205fd53f81398bce3e08c8355c37704d6449650a3a0859e991d3c142126f247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/function/invoke.js"));

        // line 1
        echo "\"use strict\";

var constant = require(\"../../function/constant\")

  , o = { b: constant(\"c\") };

module.exports = function (t, a) {
\ta(t(\"b\")(o), \"c\");
};
";
        
        $__internal_d205fd53f81398bce3e08c8355c37704d6449650a3a0859e991d3c142126f247->leave($__internal_d205fd53f81398bce3e08c8355c37704d6449650a3a0859e991d3c142126f247_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/function/invoke.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var constant = require(\"../../function/constant\")

  , o = { b: constant(\"c\") };

module.exports = function (t, a) {
\ta(t(\"b\")(o), \"c\");
};
", "node_modules/es5-ext/test/function/invoke.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/function/invoke.js");
    }
}
