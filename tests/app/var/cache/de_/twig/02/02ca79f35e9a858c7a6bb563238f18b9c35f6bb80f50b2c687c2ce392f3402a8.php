<?php

/* node_modules/core-js/library/fn/reflect/get-own-property-descriptor.js */
class __TwigTemplate_0f4bc321e26dec0610c4b6220cf86d6cef60ec957437bbe67d1d93a3cd5f3c7e extends Twig_Template
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
        $__internal_b95a12cf1941c4bac84d1da2987b533cd8d37e47bce2d1360e93daa44723657b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95a12cf1941c4bac84d1da2987b533cd8d37e47bce2d1360e93daa44723657b->enter($__internal_b95a12cf1941c4bac84d1da2987b533cd8d37e47bce2d1360e93daa44723657b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/reflect/get-own-property-descriptor.js"));

        // line 1
        echo "require('../../modules/es6.reflect.get-own-property-descriptor');
module.exports = require('../../modules/_core').Reflect.getOwnPropertyDescriptor;
";
        
        $__internal_b95a12cf1941c4bac84d1da2987b533cd8d37e47bce2d1360e93daa44723657b->leave($__internal_b95a12cf1941c4bac84d1da2987b533cd8d37e47bce2d1360e93daa44723657b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/reflect/get-own-property-descriptor.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.reflect.get-own-property-descriptor');
module.exports = require('../../modules/_core').Reflect.getOwnPropertyDescriptor;
", "node_modules/core-js/library/fn/reflect/get-own-property-descriptor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/reflect/get-own-property-descriptor.js");
    }
}
