<?php

/* node_modules/es5-ext/test/object/is.js */
class __TwigTemplate_4be9f4cd65199ed6c8b7d80086468166d02dbbe1a0aa624aad95a5423700b0fb extends Twig_Template
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
        $__internal_f8889dbf7f2f900315d0a1ac1eec25c39fe8629219cd85fbc1f66b146e761ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8889dbf7f2f900315d0a1ac1eec25c39fe8629219cd85fbc1f66b146e761ac2->enter($__internal_f8889dbf7f2f900315d0a1ac1eec25c39fe8629219cd85fbc1f66b146e761ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/is.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar o = {};
\ta(t(o, {}), false, \"Different objects\");
\ta(t(o, o), true, \"Same objects\");
\ta(t(\"1\", \"1\"), true, \"Same primitive\");
\ta(t(\"1\", 1), false, \"Different primitive types\");
\ta(t(NaN, NaN), true, \"NaN\");
\ta(t(0, 0), true, \"0,0\");
\ta(t(0, -0), false, \"0,-0\");
};
";
        
        $__internal_f8889dbf7f2f900315d0a1ac1eec25c39fe8629219cd85fbc1f66b146e761ac2->leave($__internal_f8889dbf7f2f900315d0a1ac1eec25c39fe8629219cd85fbc1f66b146e761ac2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/is.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar o = {};
\ta(t(o, {}), false, \"Different objects\");
\ta(t(o, o), true, \"Same objects\");
\ta(t(\"1\", \"1\"), true, \"Same primitive\");
\ta(t(\"1\", 1), false, \"Different primitive types\");
\ta(t(NaN, NaN), true, \"NaN\");
\ta(t(0, 0), true, \"0,0\");
\ta(t(0, -0), false, \"0,-0\");
};
", "node_modules/es5-ext/test/object/is.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/is.js");
    }
}
