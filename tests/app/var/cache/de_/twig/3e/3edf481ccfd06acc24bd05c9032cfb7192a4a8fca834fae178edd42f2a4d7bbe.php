<?php

/* node_modules/core-js/modules/_wks-ext.js */
class __TwigTemplate_57aaa5bc591530a5f97a4baca5e025a4858d9b99a26bddb8b6366a4500a39da5 extends Twig_Template
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
        $__internal_ae1d19aa35e67329622dfc0476abdbb077a3ddd4f54589199c89fde5c145f417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1d19aa35e67329622dfc0476abdbb077a3ddd4f54589199c89fde5c145f417->enter($__internal_ae1d19aa35e67329622dfc0476abdbb077a3ddd4f54589199c89fde5c145f417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_wks-ext.js"));

        // line 1
        echo "exports.f = require('./_wks');
";
        
        $__internal_ae1d19aa35e67329622dfc0476abdbb077a3ddd4f54589199c89fde5c145f417->leave($__internal_ae1d19aa35e67329622dfc0476abdbb077a3ddd4f54589199c89fde5c145f417_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_wks-ext.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("exports.f = require('./_wks');
", "node_modules/core-js/modules/_wks-ext.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_wks-ext.js");
    }
}
