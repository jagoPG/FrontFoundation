<?php

/* node_modules/es5-ext/test/reg-exp/#/sticky/implement.js */
class __TwigTemplate_3ba94481bea8727b30690b0be382eeb8d58b2ee477ddb15b3579132d64e05442 extends Twig_Template
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
        $__internal_891559f17f9bf650bbb1a1267135ef133f76226d09d028d069588323dd0f09f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891559f17f9bf650bbb1a1267135ef133f76226d09d028d069588323dd0f09f1->enter($__internal_891559f17f9bf650bbb1a1267135ef133f76226d09d028d069588323dd0f09f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/reg-exp/#/sticky/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../../reg-exp/#/sticky/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_891559f17f9bf650bbb1a1267135ef133f76226d09d028d069588323dd0f09f1->leave($__internal_891559f17f9bf650bbb1a1267135ef133f76226d09d028d069588323dd0f09f1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/reg-exp/#/sticky/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../../reg-exp/#/sticky/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/reg-exp/#/sticky/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/reg-exp/#/sticky/implement.js");
    }
}
