<?php

/* node_modules/babel-runtime/helpers/create-class.js */
class __TwigTemplate_da73fd9ccd230cc5bceb26726d343e2885f5bf4e9236dd7bfb4ffa51e6a2f6ef extends Twig_Template
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
        $__internal_36aa9990427f7befaef297f23473f928878c44d30e73d5100e1229f26ca19496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36aa9990427f7befaef297f23473f928878c44d30e73d5100e1229f26ca19496->enter($__internal_36aa9990427f7befaef297f23473f928878c44d30e73d5100e1229f26ca19496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/create-class.js"));

        // line 1
        echo "module.exports = require(\"./createClass.js\");";
        
        $__internal_36aa9990427f7befaef297f23473f928878c44d30e73d5100e1229f26ca19496->leave($__internal_36aa9990427f7befaef297f23473f928878c44d30e73d5100e1229f26ca19496_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/create-class.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./createClass.js\");", "node_modules/babel-runtime/helpers/create-class.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/create-class.js");
    }
}
