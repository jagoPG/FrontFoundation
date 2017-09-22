<?php

/* node_modules/core-js/fn/string/trim-start.js */
class __TwigTemplate_c855b599af45b089b1ce090a6b2c915badab358c0129b610707e77abc98b17c7 extends Twig_Template
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
        $__internal_732ac5e44cd5aaffc8e92b3c2719ae09617d3e2eb87789ad65013bcc0fdc745b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_732ac5e44cd5aaffc8e92b3c2719ae09617d3e2eb87789ad65013bcc0fdc745b->enter($__internal_732ac5e44cd5aaffc8e92b3c2719ae09617d3e2eb87789ad65013bcc0fdc745b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/trim-start.js"));

        // line 1
        echo "require('../../modules/es7.string.trim-left');
module.exports = require('../../modules/_core').String.trimLeft;
";
        
        $__internal_732ac5e44cd5aaffc8e92b3c2719ae09617d3e2eb87789ad65013bcc0fdc745b->leave($__internal_732ac5e44cd5aaffc8e92b3c2719ae09617d3e2eb87789ad65013bcc0fdc745b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/trim-start.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.string.trim-left');
module.exports = require('../../modules/_core').String.trimLeft;
", "node_modules/core-js/fn/string/trim-start.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/trim-start.js");
    }
}
