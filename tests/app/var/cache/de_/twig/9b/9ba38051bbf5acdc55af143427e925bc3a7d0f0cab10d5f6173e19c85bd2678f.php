<?php

/* node_modules/core-js/es6/symbol.js */
class __TwigTemplate_29ed382140c4237ba7c3c00f673b0d0337362be43179cdbf557274aa0e927a46 extends Twig_Template
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
        $__internal_2a1861da81f288f90204815e10b15a8b81a153deb22cf3f421b88d21a60e8692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1861da81f288f90204815e10b15a8b81a153deb22cf3f421b88d21a60e8692->enter($__internal_2a1861da81f288f90204815e10b15a8b81a153deb22cf3f421b88d21a60e8692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/es6/symbol.js"));

        // line 1
        echo "require('../modules/es6.symbol');
require('../modules/es6.object.to-string');
module.exports = require('../modules/_core').Symbol;
";
        
        $__internal_2a1861da81f288f90204815e10b15a8b81a153deb22cf3f421b88d21a60e8692->leave($__internal_2a1861da81f288f90204815e10b15a8b81a153deb22cf3f421b88d21a60e8692_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/es6/symbol.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es6.symbol');
require('../modules/es6.object.to-string');
module.exports = require('../modules/_core').Symbol;
", "node_modules/core-js/es6/symbol.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/es6/symbol.js");
    }
}
