<?php

/* node_modules/fsevents/node_modules/jsbn/example.js */
class __TwigTemplate_f4d960dac5616816b1c0051705d4920ae152a3b7c3c4458990e0d68252b7f563 extends Twig_Template
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
        $__internal_c9949eeecad5e8af54d9e1fc1d27faa960283dae04f5d4c31b11e3b9e47936df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9949eeecad5e8af54d9e1fc1d27faa960283dae04f5d4c31b11e3b9e47936df->enter($__internal_c9949eeecad5e8af54d9e1fc1d27faa960283dae04f5d4c31b11e3b9e47936df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/jsbn/example.js"));

        // line 1
        echo "var BigInteger = require('./');
var a = new BigInteger('91823918239182398123');
console.log(a.bitLength());";
        
        $__internal_c9949eeecad5e8af54d9e1fc1d27faa960283dae04f5d4c31b11e3b9e47936df->leave($__internal_c9949eeecad5e8af54d9e1fc1d27faa960283dae04f5d4c31b11e3b9e47936df_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/jsbn/example.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var BigInteger = require('./');
var a = new BigInteger('91823918239182398123');
console.log(a.bitLength());", "node_modules/fsevents/node_modules/jsbn/example.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/jsbn/example.js");
    }
}
