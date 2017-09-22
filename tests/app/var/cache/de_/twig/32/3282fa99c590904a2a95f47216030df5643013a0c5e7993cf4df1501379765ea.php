<?php

/* node_modules/node-pre-gyp/bin/node-pre-gyp.cmd */
class __TwigTemplate_cc8b92e6541f7e3ecc02b52466878610ba77a0f0a66b853c1788ce20ed9e3b7c extends Twig_Template
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
        $__internal_71977642b47ea21177b09eed04ad01959ee2d0b747d6e7ee4eb5411353a770f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71977642b47ea21177b09eed04ad01959ee2d0b747d6e7ee4eb5411353a770f0->enter($__internal_71977642b47ea21177b09eed04ad01959ee2d0b747d6e7ee4eb5411353a770f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/node-pre-gyp/bin/node-pre-gyp.cmd"));

        // line 1
        echo "@echo off
node  \"%~dp0\\node-pre-gyp\" %*
";
        
        $__internal_71977642b47ea21177b09eed04ad01959ee2d0b747d6e7ee4eb5411353a770f0->leave($__internal_71977642b47ea21177b09eed04ad01959ee2d0b747d6e7ee4eb5411353a770f0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/node-pre-gyp/bin/node-pre-gyp.cmd";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("@echo off
node  \"%~dp0\\node-pre-gyp\" %*
", "node_modules/node-pre-gyp/bin/node-pre-gyp.cmd", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/node-pre-gyp/bin/node-pre-gyp.cmd");
    }
}
