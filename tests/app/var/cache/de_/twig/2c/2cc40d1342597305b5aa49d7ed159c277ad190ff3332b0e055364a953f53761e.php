<?php

/* node_modules/es5-ext/test/object/is-array-like.js */
class __TwigTemplate_47785f0ccc207e96f5e130b9b81e9cab5f23fab9cd2a91946ca98192fc62fb7d extends Twig_Template
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
        $__internal_c89e2011c49a12fdaface259f7b36af74f8a36fa796a923ba75c0e2391629e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c89e2011c49a12fdaface259f7b36af74f8a36fa796a923ba75c0e2391629e09->enter($__internal_c89e2011c49a12fdaface259f7b36af74f8a36fa796a923ba75c0e2391629e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/is-array-like.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t([]), true, \"Array\");
\ta(t(\"\"), true, \"String\");
\ta(t((function () {
 return arguments;
}())), true, \"Arguments\");
\ta(t({ length: 0 }), true, \"List object\");
\ta(t(function () {}), false, \"Function\");
\ta(t({}), false, \"Plain object\");
\ta(t(/raz/), false, \"Regexp\");
\ta(t(), false, \"No argument\");
\ta(t(null), false, \"Null\");
\ta(t(undefined), false, \"Undefined\");
};
";
        
        $__internal_c89e2011c49a12fdaface259f7b36af74f8a36fa796a923ba75c0e2391629e09->leave($__internal_c89e2011c49a12fdaface259f7b36af74f8a36fa796a923ba75c0e2391629e09_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/is-array-like.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t([]), true, \"Array\");
\ta(t(\"\"), true, \"String\");
\ta(t((function () {
 return arguments;
}())), true, \"Arguments\");
\ta(t({ length: 0 }), true, \"List object\");
\ta(t(function () {}), false, \"Function\");
\ta(t({}), false, \"Plain object\");
\ta(t(/raz/), false, \"Regexp\");
\ta(t(), false, \"No argument\");
\ta(t(null), false, \"Null\");
\ta(t(undefined), false, \"Undefined\");
};
", "node_modules/es5-ext/test/object/is-array-like.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/is-array-like.js");
    }
}
