<?php

/* node_modules/es5-ext/test/reg-exp/#/search/implement.js */
class __TwigTemplate_a9d8dd0b57a1d40b9ac3e6dbdddf04d4a356c0b9a5e564db4b15226e2810ae43 extends Twig_Template
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
        $__internal_31c02be91029d151b115fc1bdad1c7b46f9eeafca0c763ef18c55e1a8f5059ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c02be91029d151b115fc1bdad1c7b46f9eeafca0c763ef18c55e1a8f5059ae->enter($__internal_31c02be91029d151b115fc1bdad1c7b46f9eeafca0c763ef18c55e1a8f5059ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/reg-exp/#/search/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../../reg-exp/#/search/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_31c02be91029d151b115fc1bdad1c7b46f9eeafca0c763ef18c55e1a8f5059ae->leave($__internal_31c02be91029d151b115fc1bdad1c7b46f9eeafca0c763ef18c55e1a8f5059ae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/reg-exp/#/search/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../../reg-exp/#/search/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/reg-exp/#/search/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/reg-exp/#/search/implement.js");
    }
}
