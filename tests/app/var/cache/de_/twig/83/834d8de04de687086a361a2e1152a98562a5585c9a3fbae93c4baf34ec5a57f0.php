<?php

/* node_modules/es5-ext/test/math/cbrt/is-implemented.js */
class __TwigTemplate_6b9b2fc6734080e664f2f91eb46fadcdd1b02c09ae83134a71a869204cd38bf2 extends Twig_Template
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
        $__internal_a4aba7a7323581a660ce917f6eb58b097a2543b85e48718c08e834c752801fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4aba7a7323581a660ce917f6eb58b097a2543b85e48718c08e834c752801fe3->enter($__internal_a4aba7a7323581a660ce917f6eb58b097a2543b85e48718c08e834c752801fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/cbrt/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_a4aba7a7323581a660ce917f6eb58b097a2543b85e48718c08e834c752801fe3->leave($__internal_a4aba7a7323581a660ce917f6eb58b097a2543b85e48718c08e834c752801fe3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/cbrt/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
", "node_modules/es5-ext/test/math/cbrt/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/cbrt/is-implemented.js");
    }
}
