<?php

/* node_modules/babel-runtime/helpers/_inherits.js */
class __TwigTemplate_fca83f417889b8c14ed08d9f322a406b995acb2c30c64143d0b9c328fbdd843b extends Twig_Template
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
        $__internal_65d36358f6a110c0626460548ce2dd4a47ece77ec6ee2cd0a96a3d1cad62279e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d36358f6a110c0626460548ce2dd4a47ece77ec6ee2cd0a96a3d1cad62279e->enter($__internal_65d36358f6a110c0626460548ce2dd4a47ece77ec6ee2cd0a96a3d1cad62279e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/_inherits.js"));

        // line 1
        echo "module.exports = require(\"./inherits.js\");";
        
        $__internal_65d36358f6a110c0626460548ce2dd4a47ece77ec6ee2cd0a96a3d1cad62279e->leave($__internal_65d36358f6a110c0626460548ce2dd4a47ece77ec6ee2cd0a96a3d1cad62279e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/_inherits.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./inherits.js\");", "node_modules/babel-runtime/helpers/_inherits.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/_inherits.js");
    }
}
