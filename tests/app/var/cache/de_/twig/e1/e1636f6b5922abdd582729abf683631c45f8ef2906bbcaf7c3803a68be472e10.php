<?php

/* node_modules/es5-ext/test/string/from-code-point/implement.js */
class __TwigTemplate_80fca63c408d7878b5985e6d3709c989cbaded61cd4bd9b06483f8ea0614e4a3 extends Twig_Template
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
        $__internal_404229a2086c8a43e7ff7f51d70bc6e025c5323a9ce00795d173224a889ebf5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404229a2086c8a43e7ff7f51d70bc6e025c5323a9ce00795d173224a889ebf5d->enter($__internal_404229a2086c8a43e7ff7f51d70bc6e025c5323a9ce00795d173224a889ebf5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/from-code-point/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../string/from-code-point/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_404229a2086c8a43e7ff7f51d70bc6e025c5323a9ce00795d173224a889ebf5d->leave($__internal_404229a2086c8a43e7ff7f51d70bc6e025c5323a9ce00795d173224a889ebf5d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/from-code-point/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../string/from-code-point/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/string/from-code-point/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/from-code-point/implement.js");
    }
}
