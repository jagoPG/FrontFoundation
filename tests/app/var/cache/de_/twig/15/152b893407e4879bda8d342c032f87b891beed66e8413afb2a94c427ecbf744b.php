<?php

/* node_modules/core-js/library/fn/date/to-iso-string.js */
class __TwigTemplate_6b383f607a5debbc66657ee274168a44424e13c8b992a6b355fa731c7879aa2f extends Twig_Template
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
        $__internal_cd1b69aa5fb0cd31f32f8731b398ea3aad1c75da4181eacc3154b18a4a8534ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1b69aa5fb0cd31f32f8731b398ea3aad1c75da4181eacc3154b18a4a8534ef->enter($__internal_cd1b69aa5fb0cd31f32f8731b398ea3aad1c75da4181eacc3154b18a4a8534ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/date/to-iso-string.js"));

        // line 1
        echo "require('../../modules/es6.date.to-json');
require('../../modules/es6.date.to-iso-string');
module.exports = require('../../modules/_core').Date.toISOString;
";
        
        $__internal_cd1b69aa5fb0cd31f32f8731b398ea3aad1c75da4181eacc3154b18a4a8534ef->leave($__internal_cd1b69aa5fb0cd31f32f8731b398ea3aad1c75da4181eacc3154b18a4a8534ef_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/date/to-iso-string.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.date.to-json');
require('../../modules/es6.date.to-iso-string');
module.exports = require('../../modules/_core').Date.toISOString;
", "node_modules/core-js/library/fn/date/to-iso-string.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/date/to-iso-string.js");
    }
}
