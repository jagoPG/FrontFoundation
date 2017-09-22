<?php

/* node_modules/babel-runtime/helpers/async-iterator.js */
class __TwigTemplate_9a815693d3f73b6883569efe84750c361e35fbcfb5b6a3ba003d140d75fd7633 extends Twig_Template
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
        $__internal_ef6f5c2bed1e0df031fc48ab60c547f819608e3586bf96ed374f327583afd922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6f5c2bed1e0df031fc48ab60c547f819608e3586bf96ed374f327583afd922->enter($__internal_ef6f5c2bed1e0df031fc48ab60c547f819608e3586bf96ed374f327583afd922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/async-iterator.js"));

        // line 1
        echo "module.exports = require(\"./asyncIterator.js\");";
        
        $__internal_ef6f5c2bed1e0df031fc48ab60c547f819608e3586bf96ed374f327583afd922->leave($__internal_ef6f5c2bed1e0df031fc48ab60c547f819608e3586bf96ed374f327583afd922_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/async-iterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./asyncIterator.js\");", "node_modules/babel-runtime/helpers/async-iterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/async-iterator.js");
    }
}
