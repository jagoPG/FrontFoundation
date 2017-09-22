<?php

/* node_modules/es5-ext/test/string/#/normalize/implement.js */
class __TwigTemplate_b88c401c2c5712d2db4f69305a392b904f759062aadccd12db3802babe19d443 extends Twig_Template
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
        $__internal_089da87db33ce27b66cce4359734fc379ca12964cab67b48c7a645e98368a97c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_089da87db33ce27b66cce4359734fc379ca12964cab67b48c7a645e98368a97c->enter($__internal_089da87db33ce27b66cce4359734fc379ca12964cab67b48c7a645e98368a97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/normalize/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../../string/#/normalize/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_089da87db33ce27b66cce4359734fc379ca12964cab67b48c7a645e98368a97c->leave($__internal_089da87db33ce27b66cce4359734fc379ca12964cab67b48c7a645e98368a97c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/normalize/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../../string/#/normalize/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/string/#/normalize/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/normalize/implement.js");
    }
}
