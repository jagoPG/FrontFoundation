<?php

/* node_modules/es5-ext/test/string/raw/implement.js */
class __TwigTemplate_a755e5edf847f390283d087e7ece268a63e91d5b589acbed22b9da38bf32d35d extends Twig_Template
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
        $__internal_19ec5d603f93d107581cd7e17b7c9af90b0cba448e7d109f9c6c25a791cf5658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ec5d603f93d107581cd7e17b7c9af90b0cba448e7d109f9c6c25a791cf5658->enter($__internal_19ec5d603f93d107581cd7e17b7c9af90b0cba448e7d109f9c6c25a791cf5658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/raw/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../string/raw/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_19ec5d603f93d107581cd7e17b7c9af90b0cba448e7d109f9c6c25a791cf5658->leave($__internal_19ec5d603f93d107581cd7e17b7c9af90b0cba448e7d109f9c6c25a791cf5658_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/raw/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../string/raw/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/string/raw/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/raw/implement.js");
    }
}
