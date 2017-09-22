<?php

/* node_modules/core-js/fn/math/signbit.js */
class __TwigTemplate_ff4bbabb67ac39f4fdeeaf49b10f0f4ce5c6adafc6095b1935df302531fd2f49 extends Twig_Template
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
        $__internal_9aa8d1ebd97ec14319164869f7d5bac2806310df586455a60268e0532b8cca80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa8d1ebd97ec14319164869f7d5bac2806310df586455a60268e0532b8cca80->enter($__internal_9aa8d1ebd97ec14319164869f7d5bac2806310df586455a60268e0532b8cca80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/math/signbit.js"));

        // line 1
        echo "require('../../modules/es7.math.signbit');

module.exports = require('../../modules/_core').Math.signbit;
";
        
        $__internal_9aa8d1ebd97ec14319164869f7d5bac2806310df586455a60268e0532b8cca80->leave($__internal_9aa8d1ebd97ec14319164869f7d5bac2806310df586455a60268e0532b8cca80_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/math/signbit.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.math.signbit');

module.exports = require('../../modules/_core').Math.signbit;
", "node_modules/core-js/fn/math/signbit.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/math/signbit.js");
    }
}
