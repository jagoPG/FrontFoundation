<?php

/* node_modules/babel-runtime/helpers/tagged-template-literal.js */
class __TwigTemplate_f9d385694ff42546b14c9a1a3148ed27583c2960786b9c5ffba1275a487fb108 extends Twig_Template
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
        $__internal_a6b713083d2c19f7dbf31756ba6eee0a4da77054fd364a24d18f8cbe58ad5bb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b713083d2c19f7dbf31756ba6eee0a4da77054fd364a24d18f8cbe58ad5bb0->enter($__internal_a6b713083d2c19f7dbf31756ba6eee0a4da77054fd364a24d18f8cbe58ad5bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/tagged-template-literal.js"));

        // line 1
        echo "module.exports = require(\"./taggedTemplateLiteral.js\");";
        
        $__internal_a6b713083d2c19f7dbf31756ba6eee0a4da77054fd364a24d18f8cbe58ad5bb0->leave($__internal_a6b713083d2c19f7dbf31756ba6eee0a4da77054fd364a24d18f8cbe58ad5bb0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/tagged-template-literal.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./taggedTemplateLiteral.js\");", "node_modules/babel-runtime/helpers/tagged-template-literal.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/tagged-template-literal.js");
    }
}
