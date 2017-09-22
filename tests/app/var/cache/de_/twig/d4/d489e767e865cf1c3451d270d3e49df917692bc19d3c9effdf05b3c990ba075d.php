<?php

/* node_modules/buffer-xor/inline.js */
class __TwigTemplate_a81e451f670507a2ba9563583647305d621854dfdc7ef43501c257fe8cdb597e extends Twig_Template
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
        $__internal_fcbd700f009b43855b8fbb22068991488df95f2ad7b47d39403107792d1e0b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcbd700f009b43855b8fbb22068991488df95f2ad7b47d39403107792d1e0b75->enter($__internal_fcbd700f009b43855b8fbb22068991488df95f2ad7b47d39403107792d1e0b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer-xor/inline.js"));

        // line 1
        echo "module.exports = require('./inplace')
";
        
        $__internal_fcbd700f009b43855b8fbb22068991488df95f2ad7b47d39403107792d1e0b75->leave($__internal_fcbd700f009b43855b8fbb22068991488df95f2ad7b47d39403107792d1e0b75_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer-xor/inline.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require('./inplace')
", "node_modules/buffer-xor/inline.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer-xor/inline.js");
    }
}
