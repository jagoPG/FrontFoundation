<?php

/* node_modules/es5-ext/test/array/of/is-implemented.js */
class __TwigTemplate_63919e8cc6a1bd34d3e49beca76cff9c3f8ea4b0091eff4d6e77cb43ba989610 extends Twig_Template
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
        $__internal_6f88387052df8472d1a78431209a75d2302a85dcbbe0d860709baf169160c403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f88387052df8472d1a78431209a75d2302a85dcbbe0d860709baf169160c403->enter($__internal_6f88387052df8472d1a78431209a75d2302a85dcbbe0d860709baf169160c403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/of/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_6f88387052df8472d1a78431209a75d2302a85dcbbe0d860709baf169160c403->leave($__internal_6f88387052df8472d1a78431209a75d2302a85dcbbe0d860709baf169160c403_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/of/is-implemented.js";
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
", "node_modules/es5-ext/test/array/of/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/of/is-implemented.js");
    }
}
