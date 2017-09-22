<?php

/* node_modules/babel-runtime/helpers/possible-constructor-return.js */
class __TwigTemplate_7907f4089eea70fae6b6c913adc11d00e0fd2c5b8387843740852777108f3e9f extends Twig_Template
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
        $__internal_0ed42caa3523b4984a640d997a913c2ff6c78b418760e7dede8284629d5fb105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed42caa3523b4984a640d997a913c2ff6c78b418760e7dede8284629d5fb105->enter($__internal_0ed42caa3523b4984a640d997a913c2ff6c78b418760e7dede8284629d5fb105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/possible-constructor-return.js"));

        // line 1
        echo "module.exports = require(\"./possibleConstructorReturn.js\");";
        
        $__internal_0ed42caa3523b4984a640d997a913c2ff6c78b418760e7dede8284629d5fb105->leave($__internal_0ed42caa3523b4984a640d997a913c2ff6c78b418760e7dede8284629d5fb105_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/possible-constructor-return.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./possibleConstructorReturn.js\");", "node_modules/babel-runtime/helpers/possible-constructor-return.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/possible-constructor-return.js");
    }
}
