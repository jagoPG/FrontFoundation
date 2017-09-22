<?php

/* node_modules/es5-ext/test/math/log2/is-implemented.js */
class __TwigTemplate_e482dc41c2cab5629eda4b3e1481bc9d67d7fe6bf88b6ef1944b1330c68a9c4d extends Twig_Template
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
        $__internal_7edbaded7ccd6c39b606ec39148ff40e6411eee9e5f3996e54170c471a84bc38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7edbaded7ccd6c39b606ec39148ff40e6411eee9e5f3996e54170c471a84bc38->enter($__internal_7edbaded7ccd6c39b606ec39148ff40e6411eee9e5f3996e54170c471a84bc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/log2/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_7edbaded7ccd6c39b606ec39148ff40e6411eee9e5f3996e54170c471a84bc38->leave($__internal_7edbaded7ccd6c39b606ec39148ff40e6411eee9e5f3996e54170c471a84bc38_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/log2/is-implemented.js";
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
", "node_modules/es5-ext/test/math/log2/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/log2/is-implemented.js");
    }
}
