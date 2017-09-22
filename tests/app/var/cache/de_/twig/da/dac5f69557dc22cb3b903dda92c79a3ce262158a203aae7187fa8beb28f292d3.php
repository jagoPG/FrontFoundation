<?php

/* node_modules/es5-ext/test/math/trunc/is-implemented.js */
class __TwigTemplate_06a495dec9e2a4a500bef3be7c4c5af4c61a7d6edcc9788ff80c4d252bbebb89 extends Twig_Template
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
        $__internal_ff9fc9ddfa4729ad2ba9f231b17476f5282333a95b76b92369901168e1ceb485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff9fc9ddfa4729ad2ba9f231b17476f5282333a95b76b92369901168e1ceb485->enter($__internal_ff9fc9ddfa4729ad2ba9f231b17476f5282333a95b76b92369901168e1ceb485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/trunc/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_ff9fc9ddfa4729ad2ba9f231b17476f5282333a95b76b92369901168e1ceb485->leave($__internal_ff9fc9ddfa4729ad2ba9f231b17476f5282333a95b76b92369901168e1ceb485_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/trunc/is-implemented.js";
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
", "node_modules/es5-ext/test/math/trunc/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/trunc/is-implemented.js");
    }
}
