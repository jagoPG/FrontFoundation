<?php

/* node_modules/es5-ext/test/math/log10/implement.js */
class __TwigTemplate_4d22fc9041abb40eeff0ec2b18fd43034929ece4b832e386a31998da8010ea34 extends Twig_Template
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
        $__internal_cbe6d5814be8f0444f385e227474a11b65bea84345a25c10386ede83a4c6c50e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe6d5814be8f0444f385e227474a11b65bea84345a25c10386ede83a4c6c50e->enter($__internal_cbe6d5814be8f0444f385e227474a11b65bea84345a25c10386ede83a4c6c50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/log10/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../math/log10/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_cbe6d5814be8f0444f385e227474a11b65bea84345a25c10386ede83a4c6c50e->leave($__internal_cbe6d5814be8f0444f385e227474a11b65bea84345a25c10386ede83a4c6c50e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/log10/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../math/log10/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/math/log10/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/log10/implement.js");
    }
}
