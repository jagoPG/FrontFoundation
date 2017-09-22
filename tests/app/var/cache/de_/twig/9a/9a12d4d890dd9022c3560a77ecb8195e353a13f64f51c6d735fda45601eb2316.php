<?php

/* node_modules/babel-runtime/helpers/_typeof.js */
class __TwigTemplate_f172ecd0a64cad17b69d7259450a6ac33906f1202ca17dcc3f77ce611635f9e1 extends Twig_Template
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
        $__internal_32d0b82f62775bd32d2ba2d2f7cbfec5262128db25d43753a6d744ae08fcf881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32d0b82f62775bd32d2ba2d2f7cbfec5262128db25d43753a6d744ae08fcf881->enter($__internal_32d0b82f62775bd32d2ba2d2f7cbfec5262128db25d43753a6d744ae08fcf881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/_typeof.js"));

        // line 1
        echo "module.exports = require(\"./typeof.js\");";
        
        $__internal_32d0b82f62775bd32d2ba2d2f7cbfec5262128db25d43753a6d744ae08fcf881->leave($__internal_32d0b82f62775bd32d2ba2d2f7cbfec5262128db25d43753a6d744ae08fcf881_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/_typeof.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./typeof.js\");", "node_modules/babel-runtime/helpers/_typeof.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/_typeof.js");
    }
}
