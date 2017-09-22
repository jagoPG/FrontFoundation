<?php

/* node_modules/es5-ext/test/math/imul/is-implemented.js */
class __TwigTemplate_fcf6f66590fc20901f2509f452b2c16f49fe49ec4f27e02473f9119a0e79308f extends Twig_Template
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
        $__internal_a3f03e576c51badec43cd72e10c4f2ca3cf84ee480df0a3a3e9e56541aba26e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f03e576c51badec43cd72e10c4f2ca3cf84ee480df0a3a3e9e56541aba26e9->enter($__internal_a3f03e576c51badec43cd72e10c4f2ca3cf84ee480df0a3a3e9e56541aba26e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/imul/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_a3f03e576c51badec43cd72e10c4f2ca3cf84ee480df0a3a3e9e56541aba26e9->leave($__internal_a3f03e576c51badec43cd72e10c4f2ca3cf84ee480df0a3a3e9e56541aba26e9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/imul/is-implemented.js";
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
", "node_modules/es5-ext/test/math/imul/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/imul/is-implemented.js");
    }
}
