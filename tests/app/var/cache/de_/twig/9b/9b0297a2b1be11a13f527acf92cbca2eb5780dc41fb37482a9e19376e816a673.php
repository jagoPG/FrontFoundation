<?php

/* node_modules/core-js/fn/function/bind.js */
class __TwigTemplate_d90687c8880dc0240882762534759da31a9a9ceccecb56f1c9bfde76ba595d60 extends Twig_Template
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
        $__internal_c7e4236eacd87b7098aea77ceece3c759a07ee0b65781a5c5d01c317b466eb51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e4236eacd87b7098aea77ceece3c759a07ee0b65781a5c5d01c317b466eb51->enter($__internal_c7e4236eacd87b7098aea77ceece3c759a07ee0b65781a5c5d01c317b466eb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/function/bind.js"));

        // line 1
        echo "require('../../modules/es6.function.bind');
module.exports = require('../../modules/_core').Function.bind;
";
        
        $__internal_c7e4236eacd87b7098aea77ceece3c759a07ee0b65781a5c5d01c317b466eb51->leave($__internal_c7e4236eacd87b7098aea77ceece3c759a07ee0b65781a5c5d01c317b466eb51_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/function/bind.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.function.bind');
module.exports = require('../../modules/_core').Function.bind;
", "node_modules/core-js/fn/function/bind.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/function/bind.js");
    }
}
