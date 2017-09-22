<?php

/* node_modules/babel-runtime/helpers/async-generator.js */
class __TwigTemplate_e96c0390a0dc8285c5255b2a702858b6b2a39b0ec473cba24f8b52ef4b673edd extends Twig_Template
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
        $__internal_cb83e1f2cb2f17dcddd5c9d11181b10d131d4c0e91c99e87d9a3f9ddf44423d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb83e1f2cb2f17dcddd5c9d11181b10d131d4c0e91c99e87d9a3f9ddf44423d1->enter($__internal_cb83e1f2cb2f17dcddd5c9d11181b10d131d4c0e91c99e87d9a3f9ddf44423d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/async-generator.js"));

        // line 1
        echo "module.exports = require(\"./asyncGenerator.js\");";
        
        $__internal_cb83e1f2cb2f17dcddd5c9d11181b10d131d4c0e91c99e87d9a3f9ddf44423d1->leave($__internal_cb83e1f2cb2f17dcddd5c9d11181b10d131d4c0e91c99e87d9a3f9ddf44423d1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/async-generator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./asyncGenerator.js\");", "node_modules/babel-runtime/helpers/async-generator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/async-generator.js");
    }
}
