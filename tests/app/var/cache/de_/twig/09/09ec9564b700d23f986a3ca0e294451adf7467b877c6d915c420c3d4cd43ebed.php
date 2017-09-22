<?php

/* node_modules/fsevents/node_modules/node-pre-gyp/bin/node-pre-gyp.cmd */
class __TwigTemplate_141136f30d4d22e0b5f7d2450f325a9713b9f597dcdd6ae11ccefa12b27aa66d extends Twig_Template
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
        $__internal_999de921cf3d8b07027c4e2c4a3f8cb33d65389608f984b66d631aabd18b661b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_999de921cf3d8b07027c4e2c4a3f8cb33d65389608f984b66d631aabd18b661b->enter($__internal_999de921cf3d8b07027c4e2c4a3f8cb33d65389608f984b66d631aabd18b661b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/node-pre-gyp/bin/node-pre-gyp.cmd"));

        // line 1
        echo "@echo off
node  \"%~dp0\\node-pre-gyp\" %*
";
        
        $__internal_999de921cf3d8b07027c4e2c4a3f8cb33d65389608f984b66d631aabd18b661b->leave($__internal_999de921cf3d8b07027c4e2c4a3f8cb33d65389608f984b66d631aabd18b661b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/node-pre-gyp/bin/node-pre-gyp.cmd";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("@echo off
node  \"%~dp0\\node-pre-gyp\" %*
", "node_modules/fsevents/node_modules/node-pre-gyp/bin/node-pre-gyp.cmd", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/node-pre-gyp/bin/node-pre-gyp.cmd");
    }
}
