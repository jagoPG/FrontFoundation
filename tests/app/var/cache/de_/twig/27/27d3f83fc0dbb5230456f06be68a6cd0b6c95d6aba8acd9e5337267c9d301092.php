<?php

/* node_modules/es5-ext/test/array/#/find/implement.js */
class __TwigTemplate_fff312f7f4f7869d187c7f9fed1e44bab7d79266987c91699a5743f1e3b7100b extends Twig_Template
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
        $__internal_abcf30add59ab0a407e38a9f84b3559e2f4ecbf063ac6207d27996645fbd7ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abcf30add59ab0a407e38a9f84b3559e2f4ecbf063ac6207d27996645fbd7ea3->enter($__internal_abcf30add59ab0a407e38a9f84b3559e2f4ecbf063ac6207d27996645fbd7ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/find/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../../array/#/find/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_abcf30add59ab0a407e38a9f84b3559e2f4ecbf063ac6207d27996645fbd7ea3->leave($__internal_abcf30add59ab0a407e38a9f84b3559e2f4ecbf063ac6207d27996645fbd7ea3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/find/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../../array/#/find/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/array/#/find/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/find/implement.js");
    }
}
