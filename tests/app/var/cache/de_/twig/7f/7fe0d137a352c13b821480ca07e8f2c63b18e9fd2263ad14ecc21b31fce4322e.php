<?php

/* node_modules/es5-ext/test/reg-exp/#/match/implement.js */
class __TwigTemplate_54c70914d821964ba1903f9ca944ff02aa5d25a3469e5e2e0e7cbfb5bc4a0e5b extends Twig_Template
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
        $__internal_596f19e87351d4d23c0195f31e3ec4ec4e0dd316239d137294c38b142d75731e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596f19e87351d4d23c0195f31e3ec4ec4e0dd316239d137294c38b142d75731e->enter($__internal_596f19e87351d4d23c0195f31e3ec4ec4e0dd316239d137294c38b142d75731e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/reg-exp/#/match/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../../reg-exp/#/match/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_596f19e87351d4d23c0195f31e3ec4ec4e0dd316239d137294c38b142d75731e->leave($__internal_596f19e87351d4d23c0195f31e3ec4ec4e0dd316239d137294c38b142d75731e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/reg-exp/#/match/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../../reg-exp/#/match/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/reg-exp/#/match/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/reg-exp/#/match/implement.js");
    }
}
