<?php

/* node_modules/babel-runtime/helpers/_extends.js */
class __TwigTemplate_ecc399b63ea65307ada935a0a999d669bdfccc2768518a639081b681faf98fc2 extends Twig_Template
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
        $__internal_94e04e94baadb6711cf6e77381efc6e7a4caa2b925e6ab129ae19b06c7b9c018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e04e94baadb6711cf6e77381efc6e7a4caa2b925e6ab129ae19b06c7b9c018->enter($__internal_94e04e94baadb6711cf6e77381efc6e7a4caa2b925e6ab129ae19b06c7b9c018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/_extends.js"));

        // line 1
        echo "module.exports = require(\"./extends.js\");";
        
        $__internal_94e04e94baadb6711cf6e77381efc6e7a4caa2b925e6ab129ae19b06c7b9c018->leave($__internal_94e04e94baadb6711cf6e77381efc6e7a4caa2b925e6ab129ae19b06c7b9c018_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/_extends.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./extends.js\");", "node_modules/babel-runtime/helpers/_extends.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/_extends.js");
    }
}
