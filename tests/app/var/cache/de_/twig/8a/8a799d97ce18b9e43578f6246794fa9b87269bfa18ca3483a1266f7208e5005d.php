<?php

/* node_modules/es5-ext/test/object/compare.js */
class __TwigTemplate_63b397c7f8de0e1420b1304ee0f51b90156be4b0a00bea8418887ac35f691896 extends Twig_Template
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
        $__internal_90eaaeb68b958f9dd5520c5562f1e43a394a4385b93df41c31775f4237db65a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90eaaeb68b958f9dd5520c5562f1e43a394a4385b93df41c31775f4237db65a1->enter($__internal_90eaaeb68b958f9dd5520c5562f1e43a394a4385b93df41c31775f4237db65a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/compare.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar d = new Date();

\ta.ok(t(12, 3) > 0, \"Numbers\");
\ta.ok(t(2, 13) < 0, \"Numbers #2\");
\ta.ok(t(\"aaa\", \"aa\") > 0, \"Strings\");
\ta.ok(t(\"aa\", \"ab\") < 0, \"Strings #2\");
\ta(t(\"aa\", \"aa\"), 0, \"Strings same\");
\ta(t(d, new Date(d.getTime())), 0, \"Same date\");
\ta.ok(t(d, new Date(d.getTime() + 1)) < 0, \"Different date\");
};
";
        
        $__internal_90eaaeb68b958f9dd5520c5562f1e43a394a4385b93df41c31775f4237db65a1->leave($__internal_90eaaeb68b958f9dd5520c5562f1e43a394a4385b93df41c31775f4237db65a1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/compare.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar d = new Date();

\ta.ok(t(12, 3) > 0, \"Numbers\");
\ta.ok(t(2, 13) < 0, \"Numbers #2\");
\ta.ok(t(\"aaa\", \"aa\") > 0, \"Strings\");
\ta.ok(t(\"aa\", \"ab\") < 0, \"Strings #2\");
\ta(t(\"aa\", \"aa\"), 0, \"Strings same\");
\ta(t(d, new Date(d.getTime())), 0, \"Same date\");
\ta.ok(t(d, new Date(d.getTime() + 1)) < 0, \"Different date\");
};
", "node_modules/es5-ext/test/object/compare.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/compare.js");
    }
}
