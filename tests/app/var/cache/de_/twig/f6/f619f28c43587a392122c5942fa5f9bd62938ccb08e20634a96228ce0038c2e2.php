<?php

/* node_modules/es5-ext/test/boolean/is-boolean.js */
class __TwigTemplate_59c1d863b9733b2604460b386d93b5677f027e56a5b16b06a95b7793ebef518d extends Twig_Template
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
        $__internal_be1a72df8292b59292154623e187e417bc7d47706d9674176cdc2db7bbe966e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be1a72df8292b59292154623e187e417bc7d47706d9674176cdc2db7bbe966e4->enter($__internal_be1a72df8292b59292154623e187e417bc7d47706d9674176cdc2db7bbe966e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/boolean/is-boolean.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t(\"arar\"), false, \"String\");
\ta(t(12), false, \"Number\");
\ta(t(false), true, \"Boolean\");
\ta(t(new Boolean(false)), true, \"Boolean object\");
\ta(t(new Date()), false, \"Date\");
\ta(t(new String(\"raz\")), false, \"String object\");
\ta(t({}), false, \"Plain object\");
\ta(t(/a/), false, \"Regular expression\");
};
";
        
        $__internal_be1a72df8292b59292154623e187e417bc7d47706d9674176cdc2db7bbe966e4->leave($__internal_be1a72df8292b59292154623e187e417bc7d47706d9674176cdc2db7bbe966e4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/boolean/is-boolean.js";
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
\ta(t(false), true, \"Boolean\");
\ta(t(new Boolean(false)), true, \"Boolean object\");
\ta(t(new Date()), false, \"Date\");
\ta(t(new String(\"raz\")), false, \"String object\");
\ta(t({}), false, \"Plain object\");
\ta(t(/a/), false, \"Regular expression\");
};
", "node_modules/es5-ext/test/boolean/is-boolean.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/boolean/is-boolean.js");
    }
}
