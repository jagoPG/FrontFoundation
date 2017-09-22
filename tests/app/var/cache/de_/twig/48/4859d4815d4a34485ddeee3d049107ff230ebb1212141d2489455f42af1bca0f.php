<?php

/* node_modules/core-js/library/fn/reflect/has-own-metadata.js */
class __TwigTemplate_541d5c35b2ec6da1f6dabc325ca9d4e0ebcac0e72dd80f41809b75bb86d1724c extends Twig_Template
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
        $__internal_69d78383e30879882eaa855e813db995c636e43548ab37ef09e78bdeaeeb4cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d78383e30879882eaa855e813db995c636e43548ab37ef09e78bdeaeeb4cdd->enter($__internal_69d78383e30879882eaa855e813db995c636e43548ab37ef09e78bdeaeeb4cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/reflect/has-own-metadata.js"));

        // line 1
        echo "require('../../modules/es7.reflect.has-own-metadata');
module.exports = require('../../modules/_core').Reflect.hasOwnMetadata;
";
        
        $__internal_69d78383e30879882eaa855e813db995c636e43548ab37ef09e78bdeaeeb4cdd->leave($__internal_69d78383e30879882eaa855e813db995c636e43548ab37ef09e78bdeaeeb4cdd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/reflect/has-own-metadata.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.reflect.has-own-metadata');
module.exports = require('../../modules/_core').Reflect.hasOwnMetadata;
", "node_modules/core-js/library/fn/reflect/has-own-metadata.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/reflect/has-own-metadata.js");
    }
}
