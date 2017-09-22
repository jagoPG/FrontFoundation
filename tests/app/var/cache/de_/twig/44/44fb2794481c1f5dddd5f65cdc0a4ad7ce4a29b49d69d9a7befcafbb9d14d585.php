<?php

/* node_modules/es5-ext/test/number/is-natural.js */
class __TwigTemplate_35e7c2decfc530a45ec1fba712c22df89b860376a910a2deff71528a33a9c3e1 extends Twig_Template
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
        $__internal_5bc6bde844ba8bf4a35baa84b6a345dde990032979eb3e7044b55e613c2df409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc6bde844ba8bf4a35baa84b6a345dde990032979eb3e7044b55e613c2df409->enter($__internal_5bc6bde844ba8bf4a35baa84b6a345dde990032979eb3e7044b55e613c2df409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/number/is-natural.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t(2), true, \"Number\");
\ta(t(-2), false, \"Negative\");
\ta(t(2.34), false, \"Float\");
\ta(t(\"23\"), false, \"Not numeric\");
\ta(t(NaN), false, \"NaN\");
\ta(t(Infinity), false, \"Infinity\");
};
";
        
        $__internal_5bc6bde844ba8bf4a35baa84b6a345dde990032979eb3e7044b55e613c2df409->leave($__internal_5bc6bde844ba8bf4a35baa84b6a345dde990032979eb3e7044b55e613c2df409_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/number/is-natural.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t(2), true, \"Number\");
\ta(t(-2), false, \"Negative\");
\ta(t(2.34), false, \"Float\");
\ta(t(\"23\"), false, \"Not numeric\");
\ta(t(NaN), false, \"NaN\");
\ta(t(Infinity), false, \"Infinity\");
};
", "node_modules/es5-ext/test/number/is-natural.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/number/is-natural.js");
    }
}
