<?php

/* node_modules/core-js/fn/string/trim-left.js */
class __TwigTemplate_86606f58bdfe5dab25818e95a3f483957e2dcd4599fc5f1da923a9a9e4efe03c extends Twig_Template
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
        $__internal_e0f54c8b6ea49bf45ddc766879d591f418faecacdceec112bd7042f1e532c9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f54c8b6ea49bf45ddc766879d591f418faecacdceec112bd7042f1e532c9f2->enter($__internal_e0f54c8b6ea49bf45ddc766879d591f418faecacdceec112bd7042f1e532c9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/trim-left.js"));

        // line 1
        echo "require('../../modules/es7.string.trim-left');
module.exports = require('../../modules/_core').String.trimLeft;
";
        
        $__internal_e0f54c8b6ea49bf45ddc766879d591f418faecacdceec112bd7042f1e532c9f2->leave($__internal_e0f54c8b6ea49bf45ddc766879d591f418faecacdceec112bd7042f1e532c9f2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/trim-left.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.string.trim-left');
module.exports = require('../../modules/_core').String.trimLeft;
", "node_modules/core-js/fn/string/trim-left.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/trim-left.js");
    }
}
