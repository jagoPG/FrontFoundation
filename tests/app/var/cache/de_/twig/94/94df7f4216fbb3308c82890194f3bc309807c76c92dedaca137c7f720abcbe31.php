<?php

/* node_modules/core-js/fn/math/tanh.js */
class __TwigTemplate_21b0dfc8baabd41f50a2681cf53337c1b4538f4568ac94e002575fda4a105c1c extends Twig_Template
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
        $__internal_89c294878ca4f102e93c5a2482fc8054dbf1fb38cb92a90012a7886a2c83f0a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c294878ca4f102e93c5a2482fc8054dbf1fb38cb92a90012a7886a2c83f0a1->enter($__internal_89c294878ca4f102e93c5a2482fc8054dbf1fb38cb92a90012a7886a2c83f0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/math/tanh.js"));

        // line 1
        echo "require('../../modules/es6.math.tanh');
module.exports = require('../../modules/_core').Math.tanh;
";
        
        $__internal_89c294878ca4f102e93c5a2482fc8054dbf1fb38cb92a90012a7886a2c83f0a1->leave($__internal_89c294878ca4f102e93c5a2482fc8054dbf1fb38cb92a90012a7886a2c83f0a1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/math/tanh.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.math.tanh');
module.exports = require('../../modules/_core').Math.tanh;
", "node_modules/core-js/fn/math/tanh.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/math/tanh.js");
    }
}
