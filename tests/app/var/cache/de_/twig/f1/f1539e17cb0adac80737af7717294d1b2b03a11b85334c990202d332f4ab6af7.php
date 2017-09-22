<?php

/* node_modules/tar-pack/test/fixtures/packed-file.txt */
class __TwigTemplate_00131e915109126511186d3c8b5b555be7b5619c0899c74e425ab335c9733a5d extends Twig_Template
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
        $__internal_9d8833ac7cdf855cdd574275ad819d3ba2b6770b3cabc72866ffb2a7c705e3da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8833ac7cdf855cdd574275ad819d3ba2b6770b3cabc72866ffb2a7c705e3da->enter($__internal_9d8833ac7cdf855cdd574275ad819d3ba2b6770b3cabc72866ffb2a7c705e3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tar-pack/test/fixtures/packed-file.txt"));

        // line 1
        echo "bar";
        
        $__internal_9d8833ac7cdf855cdd574275ad819d3ba2b6770b3cabc72866ffb2a7c705e3da->leave($__internal_9d8833ac7cdf855cdd574275ad819d3ba2b6770b3cabc72866ffb2a7c705e3da_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tar-pack/test/fixtures/packed-file.txt";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("bar", "node_modules/tar-pack/test/fixtures/packed-file.txt", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tar-pack/test/fixtures/packed-file.txt");
    }
}
