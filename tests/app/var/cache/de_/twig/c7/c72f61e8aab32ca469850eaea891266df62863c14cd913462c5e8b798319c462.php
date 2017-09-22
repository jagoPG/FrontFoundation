<?php

/* node_modules/core-js/fn/math/hypot.js */
class __TwigTemplate_8bf5850097a44a1ef0ef2ccfe2a02fa3fcfb93f26011eb3051c08fdae0dd1039 extends Twig_Template
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
        $__internal_6cb4904e3ed3c910f3a2eb7778d64dd2034ab41bb7f49fa68a3ec3814ee3b9cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb4904e3ed3c910f3a2eb7778d64dd2034ab41bb7f49fa68a3ec3814ee3b9cc->enter($__internal_6cb4904e3ed3c910f3a2eb7778d64dd2034ab41bb7f49fa68a3ec3814ee3b9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/math/hypot.js"));

        // line 1
        echo "require('../../modules/es6.math.hypot');
module.exports = require('../../modules/_core').Math.hypot;
";
        
        $__internal_6cb4904e3ed3c910f3a2eb7778d64dd2034ab41bb7f49fa68a3ec3814ee3b9cc->leave($__internal_6cb4904e3ed3c910f3a2eb7778d64dd2034ab41bb7f49fa68a3ec3814ee3b9cc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/math/hypot.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.math.hypot');
module.exports = require('../../modules/_core').Math.hypot;
", "node_modules/core-js/fn/math/hypot.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/math/hypot.js");
    }
}
