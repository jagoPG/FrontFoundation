<?php

/* node_modules/es5-ext/test/math/sinh/implement.js */
class __TwigTemplate_b42df06d20a46945ae1696ff35498da20a29fa5110a3d630dba1fb9b6174b5de extends Twig_Template
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
        $__internal_b98845dd4823092283d802d8d86bb45923c0c3533708c45d9aff086a4808e0da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b98845dd4823092283d802d8d86bb45923c0c3533708c45d9aff086a4808e0da->enter($__internal_b98845dd4823092283d802d8d86bb45923c0c3533708c45d9aff086a4808e0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/sinh/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../math/sinh/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_b98845dd4823092283d802d8d86bb45923c0c3533708c45d9aff086a4808e0da->leave($__internal_b98845dd4823092283d802d8d86bb45923c0c3533708c45d9aff086a4808e0da_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/sinh/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../math/sinh/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/math/sinh/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/sinh/implement.js");
    }
}
