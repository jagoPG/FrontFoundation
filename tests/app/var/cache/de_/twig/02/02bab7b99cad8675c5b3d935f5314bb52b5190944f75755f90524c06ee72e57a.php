<?php

/* node_modules/es5-ext/test/object/is-value.js */
class __TwigTemplate_fbcbbb1ab6946c16532caec227ec83145a172380ba9a3c2434234d90d283f6e5 extends Twig_Template
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
        $__internal_3992c0d0c2d352c63f6356b91b81fa8f2111d762c6c6f486184d33d6d679db91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3992c0d0c2d352c63f6356b91b81fa8f2111d762c6c6f486184d33d6d679db91->enter($__internal_3992c0d0c2d352c63f6356b91b81fa8f2111d762c6c6f486184d33d6d679db91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/is-value.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t(), false);
\ta(t(undefined), false);
\ta(t(null), false);
\ta(t(NaN), true);
\ta(t(0), true);
\ta(t(false), true);
\ta(t(\"null\"), true);
\ta(t(\"\"), true);
\ta(t({}), true);
\ta(t(Object.prototype), true);
};
";
        
        $__internal_3992c0d0c2d352c63f6356b91b81fa8f2111d762c6c6f486184d33d6d679db91->leave($__internal_3992c0d0c2d352c63f6356b91b81fa8f2111d762c6c6f486184d33d6d679db91_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/is-value.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t(), false);
\ta(t(undefined), false);
\ta(t(null), false);
\ta(t(NaN), true);
\ta(t(0), true);
\ta(t(false), true);
\ta(t(\"null\"), true);
\ta(t(\"\"), true);
\ta(t({}), true);
\ta(t(Object.prototype), true);
};
", "node_modules/es5-ext/test/object/is-value.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/is-value.js");
    }
}
