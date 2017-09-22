<?php

/* node_modules/jsbn/example.js */
class __TwigTemplate_3ea95ddd7d8ef1b1d7322fc90e1f6b47a2d72391da8994ac46172d7528911dca extends Twig_Template
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
        $__internal_00d6750581d5810d0f5aa49e00971cd0e222ae18d4241c716c091b3e3bb7d5a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00d6750581d5810d0f5aa49e00971cd0e222ae18d4241c716c091b3e3bb7d5a1->enter($__internal_00d6750581d5810d0f5aa49e00971cd0e222ae18d4241c716c091b3e3bb7d5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jsbn/example.js"));

        // line 1
        echo "var BigInteger = require('./');
var a = new BigInteger('91823918239182398123');
console.log(a.bitLength());";
        
        $__internal_00d6750581d5810d0f5aa49e00971cd0e222ae18d4241c716c091b3e3bb7d5a1->leave($__internal_00d6750581d5810d0f5aa49e00971cd0e222ae18d4241c716c091b3e3bb7d5a1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jsbn/example.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var BigInteger = require('./');
var a = new BigInteger('91823918239182398123');
console.log(a.bitLength());", "node_modules/jsbn/example.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jsbn/example.js");
    }
}
