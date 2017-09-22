<?php

/* node_modules/es5-ext/test/math/cbrt/implement.js */
class __TwigTemplate_d4fa4b9394e303aed104b3a301cbf75c1c18c10ece372ab23e526bca41f2885e extends Twig_Template
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
        $__internal_546298e0ae399365ea726564b726ff23c9173e9181b9d3a43fd683f4c2e536bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546298e0ae399365ea726564b726ff23c9173e9181b9d3a43fd683f4c2e536bb->enter($__internal_546298e0ae399365ea726564b726ff23c9173e9181b9d3a43fd683f4c2e536bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/cbrt/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../math/cbrt/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_546298e0ae399365ea726564b726ff23c9173e9181b9d3a43fd683f4c2e536bb->leave($__internal_546298e0ae399365ea726564b726ff23c9173e9181b9d3a43fd683f4c2e536bb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/cbrt/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../math/cbrt/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/math/cbrt/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/cbrt/implement.js");
    }
}
