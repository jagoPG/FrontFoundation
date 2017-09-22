<?php

/* node_modules/es5-ext/test/object/is-object.js */
class __TwigTemplate_0f34283461ab99eff333862d2f2f36ac11779a70571ddc7f438758c505cc2f2a extends Twig_Template
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
        $__internal_d064385aaeb7fc8192d3675ffe3fdf3540b217b2d1af80cdac269814247facfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d064385aaeb7fc8192d3675ffe3fdf3540b217b2d1af80cdac269814247facfd->enter($__internal_d064385aaeb7fc8192d3675ffe3fdf3540b217b2d1af80cdac269814247facfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/is-object.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t(\"arar\"), false, \"String\");
\ta(t(12), false, \"Number\");
\ta(t(true), false, \"Boolean\");
\ta(t(null), false, \"Null\");
\ta(t(new Date()), true, \"Date\");
\ta(t(new String(\"raz\")), true, \"String object\");
\ta(t({}), true, \"Plain object\");
\ta(t(/a/), true, \"Regular expression\");
\ta(t(function () {}), true, \"Function\");
};
";
        
        $__internal_d064385aaeb7fc8192d3675ffe3fdf3540b217b2d1af80cdac269814247facfd->leave($__internal_d064385aaeb7fc8192d3675ffe3fdf3540b217b2d1af80cdac269814247facfd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/is-object.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t(\"arar\"), false, \"String\");
\ta(t(12), false, \"Number\");
\ta(t(true), false, \"Boolean\");
\ta(t(null), false, \"Null\");
\ta(t(new Date()), true, \"Date\");
\ta(t(new String(\"raz\")), true, \"String object\");
\ta(t({}), true, \"Plain object\");
\ta(t(/a/), true, \"Regular expression\");
\ta(t(function () {}), true, \"Function\");
};
", "node_modules/es5-ext/test/object/is-object.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/is-object.js");
    }
}
