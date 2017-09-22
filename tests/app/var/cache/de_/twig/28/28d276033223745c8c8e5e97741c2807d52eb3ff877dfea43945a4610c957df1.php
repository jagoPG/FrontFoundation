<?php

/* node_modules/core-js/fn/reflect/has-own-metadata.js */
class __TwigTemplate_08242f2fbe67601392e0839cee07eee372af8773bbd6f7636a2922e0feba411c extends Twig_Template
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
        $__internal_253ba139e57a637e40836b7f16badf7e99e07c5e77e544cde1f1d132bbfab130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253ba139e57a637e40836b7f16badf7e99e07c5e77e544cde1f1d132bbfab130->enter($__internal_253ba139e57a637e40836b7f16badf7e99e07c5e77e544cde1f1d132bbfab130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/reflect/has-own-metadata.js"));

        // line 1
        echo "require('../../modules/es7.reflect.has-own-metadata');
module.exports = require('../../modules/_core').Reflect.hasOwnMetadata;
";
        
        $__internal_253ba139e57a637e40836b7f16badf7e99e07c5e77e544cde1f1d132bbfab130->leave($__internal_253ba139e57a637e40836b7f16badf7e99e07c5e77e544cde1f1d132bbfab130_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/reflect/has-own-metadata.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.reflect.has-own-metadata');
module.exports = require('../../modules/_core').Reflect.hasOwnMetadata;
", "node_modules/core-js/fn/reflect/has-own-metadata.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/reflect/has-own-metadata.js");
    }
}
