<?php

/* node_modules/core-js/library/fn/string/italics.js */
class __TwigTemplate_5f358531549b90eac83bb265327c44bc66ef5aa569b3d44101a8c5a2ef086fee extends Twig_Template
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
        $__internal_0249967a390f68faf05ecaa1a44faa4e9c705376e250c181e9d1e313699c3a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0249967a390f68faf05ecaa1a44faa4e9c705376e250c181e9d1e313699c3a7a->enter($__internal_0249967a390f68faf05ecaa1a44faa4e9c705376e250c181e9d1e313699c3a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/italics.js"));

        // line 1
        echo "require('../../modules/es6.string.italics');
module.exports = require('../../modules/_core').String.italics;
";
        
        $__internal_0249967a390f68faf05ecaa1a44faa4e9c705376e250c181e9d1e313699c3a7a->leave($__internal_0249967a390f68faf05ecaa1a44faa4e9c705376e250c181e9d1e313699c3a7a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/italics.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.italics');
module.exports = require('../../modules/_core').String.italics;
", "node_modules/core-js/library/fn/string/italics.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/italics.js");
    }
}
