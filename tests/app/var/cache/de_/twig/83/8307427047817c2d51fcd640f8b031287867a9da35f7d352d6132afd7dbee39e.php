<?php

/* node_modules/core-js/es7/symbol.js */
class __TwigTemplate_f48d29beb50f8f394b5c31d0bfadf2eb6782c31b43f7b405bae73de1916cba92 extends Twig_Template
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
        $__internal_430787e302677cfe6b27197af75879d7e923cdb0cec3a16d5e056112257c7ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430787e302677cfe6b27197af75879d7e923cdb0cec3a16d5e056112257c7ae9->enter($__internal_430787e302677cfe6b27197af75879d7e923cdb0cec3a16d5e056112257c7ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/es7/symbol.js"));

        // line 1
        echo "require('../modules/es7.symbol.async-iterator');
require('../modules/es7.symbol.observable');
module.exports = require('../modules/_core').Symbol;
";
        
        $__internal_430787e302677cfe6b27197af75879d7e923cdb0cec3a16d5e056112257c7ae9->leave($__internal_430787e302677cfe6b27197af75879d7e923cdb0cec3a16d5e056112257c7ae9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/es7/symbol.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.symbol.async-iterator');
require('../modules/es7.symbol.observable');
module.exports = require('../modules/_core').Symbol;
", "node_modules/core-js/es7/symbol.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/es7/symbol.js");
    }
}
