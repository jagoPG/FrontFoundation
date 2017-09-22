<?php

/* node_modules/core-js/fn/reflect/get-metadata.js */
class __TwigTemplate_79b824fefa66f96c13994c47a7f72816003fbc96a2ab708a03252214f5df28ae extends Twig_Template
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
        $__internal_86262aeee3489d05fe910ccba335b710d266849eb6c62a6ae2f8809d6d2acb0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86262aeee3489d05fe910ccba335b710d266849eb6c62a6ae2f8809d6d2acb0a->enter($__internal_86262aeee3489d05fe910ccba335b710d266849eb6c62a6ae2f8809d6d2acb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/reflect/get-metadata.js"));

        // line 1
        echo "require('../../modules/es7.reflect.get-metadata');
module.exports = require('../../modules/_core').Reflect.getMetadata;
";
        
        $__internal_86262aeee3489d05fe910ccba335b710d266849eb6c62a6ae2f8809d6d2acb0a->leave($__internal_86262aeee3489d05fe910ccba335b710d266849eb6c62a6ae2f8809d6d2acb0a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/reflect/get-metadata.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.reflect.get-metadata');
module.exports = require('../../modules/_core').Reflect.getMetadata;
", "node_modules/core-js/fn/reflect/get-metadata.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/reflect/get-metadata.js");
    }
}
