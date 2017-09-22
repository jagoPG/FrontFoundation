<?php

/* node_modules/core-js/library/fn/reflect/metadata.js */
class __TwigTemplate_b68aace02e29e6f94db10f2004329dab4f02b5bc89a095de9032c641700c3390 extends Twig_Template
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
        $__internal_e857a9063964467dbe4601b2dfd8be238f1d847ed292be0a00a3e154c57bb115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e857a9063964467dbe4601b2dfd8be238f1d847ed292be0a00a3e154c57bb115->enter($__internal_e857a9063964467dbe4601b2dfd8be238f1d847ed292be0a00a3e154c57bb115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/reflect/metadata.js"));

        // line 1
        echo "require('../../modules/es7.reflect.metadata');
module.exports = require('../../modules/_core').Reflect.metadata;
";
        
        $__internal_e857a9063964467dbe4601b2dfd8be238f1d847ed292be0a00a3e154c57bb115->leave($__internal_e857a9063964467dbe4601b2dfd8be238f1d847ed292be0a00a3e154c57bb115_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/reflect/metadata.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.reflect.metadata');
module.exports = require('../../modules/_core').Reflect.metadata;
", "node_modules/core-js/library/fn/reflect/metadata.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/reflect/metadata.js");
    }
}
