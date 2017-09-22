<?php

/* node_modules/es5-ext/test/array/#/keys/implement.js */
class __TwigTemplate_6fc5eeff4d7783961371cbf5fab8cf28abfa9e7580b5abcca5c8509717c7fbac extends Twig_Template
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
        $__internal_d8e44f4726bad3debfddafb0cb6f0fe3f462dd2ad41970b80e891bb52b29406e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e44f4726bad3debfddafb0cb6f0fe3f462dd2ad41970b80e891bb52b29406e->enter($__internal_d8e44f4726bad3debfddafb0cb6f0fe3f462dd2ad41970b80e891bb52b29406e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/keys/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../../array/#/keys/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_d8e44f4726bad3debfddafb0cb6f0fe3f462dd2ad41970b80e891bb52b29406e->leave($__internal_d8e44f4726bad3debfddafb0cb6f0fe3f462dd2ad41970b80e891bb52b29406e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/keys/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../../array/#/keys/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/array/#/keys/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/keys/implement.js");
    }
}
