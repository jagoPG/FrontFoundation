<?php

/* node_modules/core-js/fn/function/virtual/index.js */
class __TwigTemplate_a4179d7781fa1b11b79d5139f192758e68c83b9981d7240378a378e7216217b9 extends Twig_Template
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
        $__internal_c8e281ef60ba574d5f2918a81ba785b4c83119d0f527ef377bf4c507b6feec77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e281ef60ba574d5f2918a81ba785b4c83119d0f527ef377bf4c507b6feec77->enter($__internal_c8e281ef60ba574d5f2918a81ba785b4c83119d0f527ef377bf4c507b6feec77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/function/virtual/index.js"));

        // line 1
        echo "require('../../../modules/es6.function.bind');
require('../../../modules/core.function.part');
module.exports = require('../../../modules/_entry-virtual')('Function');
";
        
        $__internal_c8e281ef60ba574d5f2918a81ba785b4c83119d0f527ef377bf4c507b6feec77->leave($__internal_c8e281ef60ba574d5f2918a81ba785b4c83119d0f527ef377bf4c507b6feec77_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/function/virtual/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.function.bind');
require('../../../modules/core.function.part');
module.exports = require('../../../modules/_entry-virtual')('Function');
", "node_modules/core-js/fn/function/virtual/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/function/virtual/index.js");
    }
}
