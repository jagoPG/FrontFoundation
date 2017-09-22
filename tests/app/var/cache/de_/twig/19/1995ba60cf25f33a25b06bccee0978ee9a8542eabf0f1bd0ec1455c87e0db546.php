<?php

/* node_modules/babel-runtime/helpers/_async-iterator.js */
class __TwigTemplate_2269d2ba1da225cc20e4e03bbab9ac2bc2e189afaa150f7534060c3af0403e4e extends Twig_Template
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
        $__internal_2fee133cf85e1b4cd8f6522fe2ca18db9ae1ed474697c4392a3e1b1c2bb1f49d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fee133cf85e1b4cd8f6522fe2ca18db9ae1ed474697c4392a3e1b1c2bb1f49d->enter($__internal_2fee133cf85e1b4cd8f6522fe2ca18db9ae1ed474697c4392a3e1b1c2bb1f49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/_async-iterator.js"));

        // line 1
        echo "module.exports = require(\"./asyncIterator.js\");";
        
        $__internal_2fee133cf85e1b4cd8f6522fe2ca18db9ae1ed474697c4392a3e1b1c2bb1f49d->leave($__internal_2fee133cf85e1b4cd8f6522fe2ca18db9ae1ed474697c4392a3e1b1c2bb1f49d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/_async-iterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./asyncIterator.js\");", "node_modules/babel-runtime/helpers/_async-iterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/_async-iterator.js");
    }
}
