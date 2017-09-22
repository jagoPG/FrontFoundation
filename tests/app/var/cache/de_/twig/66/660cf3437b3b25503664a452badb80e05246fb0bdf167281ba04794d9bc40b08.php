<?php

/* node_modules/es5-ext/test/reg-exp/is-reg-exp.js */
class __TwigTemplate_82603afc24e45da93e478e1fa9723b94ab8d8aa1bb1a621e8152df3328a5666f extends Twig_Template
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
        $__internal_c62bbfb95134ff53438319b1f32e8af38926c1b480697c030c2bd36f425598e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c62bbfb95134ff53438319b1f32e8af38926c1b480697c030c2bd36f425598e4->enter($__internal_c62bbfb95134ff53438319b1f32e8af38926c1b480697c030c2bd36f425598e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/reg-exp/is-reg-exp.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t(\"arar\"), false, \"String\");
\ta(t(12), false, \"Number\");
\ta(t(true), false, \"Boolean\");
\ta(t(new Date()), false, \"Date\");
\ta(t(new String(\"raz\")), false, \"String object\");
\ta(t({}), false, \"Plain object\");
\ta(t(/a/), true, \"Regular expression\");
\ta(t(new RegExp(\"a\")), true, \"Regular expression via constructor\");
};
";
        
        $__internal_c62bbfb95134ff53438319b1f32e8af38926c1b480697c030c2bd36f425598e4->leave($__internal_c62bbfb95134ff53438319b1f32e8af38926c1b480697c030c2bd36f425598e4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/reg-exp/is-reg-exp.js";
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
\ta(t(new Date()), false, \"Date\");
\ta(t(new String(\"raz\")), false, \"String object\");
\ta(t({}), false, \"Plain object\");
\ta(t(/a/), true, \"Regular expression\");
\ta(t(new RegExp(\"a\")), true, \"Regular expression via constructor\");
};
", "node_modules/es5-ext/test/reg-exp/is-reg-exp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/reg-exp/is-reg-exp.js");
    }
}
