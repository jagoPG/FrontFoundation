<?php

/* node_modules/core-js/library/fn/string/trim-start.js */
class __TwigTemplate_3a93f7546c379c1696249f11481e9b3d82391fc2c0b1cdabd9f310447742870c extends Twig_Template
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
        $__internal_36ff473b0f6d707f774ef2b4ce5a465cbee911d4354ef0db4fcc83f46176f8a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ff473b0f6d707f774ef2b4ce5a465cbee911d4354ef0db4fcc83f46176f8a9->enter($__internal_36ff473b0f6d707f774ef2b4ce5a465cbee911d4354ef0db4fcc83f46176f8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/trim-start.js"));

        // line 1
        echo "require('../../modules/es7.string.trim-left');
module.exports = require('../../modules/_core').String.trimLeft;
";
        
        $__internal_36ff473b0f6d707f774ef2b4ce5a465cbee911d4354ef0db4fcc83f46176f8a9->leave($__internal_36ff473b0f6d707f774ef2b4ce5a465cbee911d4354ef0db4fcc83f46176f8a9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/trim-start.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.string.trim-left');
module.exports = require('../../modules/_core').String.trimLeft;
", "node_modules/core-js/library/fn/string/trim-start.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/trim-start.js");
    }
}
