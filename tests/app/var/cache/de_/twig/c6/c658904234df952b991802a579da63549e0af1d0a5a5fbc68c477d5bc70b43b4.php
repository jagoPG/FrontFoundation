<?php

/* node_modules/core-js/library/fn/symbol/for.js */
class __TwigTemplate_321a754cb346d4a7cdf68f9fcab0a139076eeef8afb73293d1a1ce71df7cf363 extends Twig_Template
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
        $__internal_c2823bff21e035e546c29adbd746a0b380b88e4a796479625e5cfaaa5e839238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2823bff21e035e546c29adbd746a0b380b88e4a796479625e5cfaaa5e839238->enter($__internal_c2823bff21e035e546c29adbd746a0b380b88e4a796479625e5cfaaa5e839238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/symbol/for.js"));

        // line 1
        echo "require('../../modules/es6.symbol');
module.exports = require('../../modules/_core').Symbol['for'];
";
        
        $__internal_c2823bff21e035e546c29adbd746a0b380b88e4a796479625e5cfaaa5e839238->leave($__internal_c2823bff21e035e546c29adbd746a0b380b88e4a796479625e5cfaaa5e839238_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/symbol/for.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.symbol');
module.exports = require('../../modules/_core').Symbol['for'];
", "node_modules/core-js/library/fn/symbol/for.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/symbol/for.js");
    }
}
