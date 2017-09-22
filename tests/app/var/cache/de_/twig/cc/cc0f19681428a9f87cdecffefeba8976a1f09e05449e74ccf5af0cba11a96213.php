<?php

/* node_modules/performance-now/test/mocha.opts */
class __TwigTemplate_7b4fe107c69223fc15a4aa34c5e69e9df589248b04194f15616abf49eac5a75e extends Twig_Template
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
        $__internal_212057cd22e8a790d731ea8eec2103c98eb5e278e046199177233bf626b4cf3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212057cd22e8a790d731ea8eec2103c98eb5e278e046199177233bf626b4cf3f->enter($__internal_212057cd22e8a790d731ea8eec2103c98eb5e278e046199177233bf626b4cf3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/performance-now/test/mocha.opts"));

        // line 1
        echo "--require coffee-script/register
--compilers coffee:coffee-script/register
--reporter spec";
        
        $__internal_212057cd22e8a790d731ea8eec2103c98eb5e278e046199177233bf626b4cf3f->leave($__internal_212057cd22e8a790d731ea8eec2103c98eb5e278e046199177233bf626b4cf3f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/performance-now/test/mocha.opts";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("--require coffee-script/register
--compilers coffee:coffee-script/register
--reporter spec", "node_modules/performance-now/test/mocha.opts", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/performance-now/test/mocha.opts");
    }
}
