<?php

/* node_modules/es5-ext/test/array/#/filter/implement.js */
class __TwigTemplate_a36bc7136abfb6bb9fbaeb4ffab7269791ab305a618e88f659d2d551bf432665 extends Twig_Template
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
        $__internal_d652f46a107bfd6d3891ae5359ec25f3ed2f40a79ed88d7096327dc0163e0467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d652f46a107bfd6d3891ae5359ec25f3ed2f40a79ed88d7096327dc0163e0467->enter($__internal_d652f46a107bfd6d3891ae5359ec25f3ed2f40a79ed88d7096327dc0163e0467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/filter/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../../array/#/filter/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_d652f46a107bfd6d3891ae5359ec25f3ed2f40a79ed88d7096327dc0163e0467->leave($__internal_d652f46a107bfd6d3891ae5359ec25f3ed2f40a79ed88d7096327dc0163e0467_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/filter/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../../array/#/filter/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/array/#/filter/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/filter/implement.js");
    }
}
