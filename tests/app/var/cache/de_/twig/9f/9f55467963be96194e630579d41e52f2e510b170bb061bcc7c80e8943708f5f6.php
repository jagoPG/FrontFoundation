<?php

/* node_modules/es5-ext/test/math/clz32/implement.js */
class __TwigTemplate_621001814d471b066fb6d1386f737010baa7a291426a04d7a6b24228bde4a09e extends Twig_Template
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
        $__internal_1ebc4de7ee1927bac609979e14cff36937d7b7ff062e7e358e665dcda5f2ae34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ebc4de7ee1927bac609979e14cff36937d7b7ff062e7e358e665dcda5f2ae34->enter($__internal_1ebc4de7ee1927bac609979e14cff36937d7b7ff062e7e358e665dcda5f2ae34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/clz32/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../math/clz32/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_1ebc4de7ee1927bac609979e14cff36937d7b7ff062e7e358e665dcda5f2ae34->leave($__internal_1ebc4de7ee1927bac609979e14cff36937d7b7ff062e7e358e665dcda5f2ae34_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/clz32/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../math/clz32/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/math/clz32/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/clz32/implement.js");
    }
}
