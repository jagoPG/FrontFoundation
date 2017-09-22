<?php

/* node_modules/core-js/library/fn/string/trim-right.js */
class __TwigTemplate_9056c5dfe9bed8999bbfab9609c4d8ff1650f204536953c633458d17bf894dfd extends Twig_Template
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
        $__internal_f4a6a1d4915b1579bb4f43507c4f055d16a3a606f638696cc7ebf4a0fa15a872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a6a1d4915b1579bb4f43507c4f055d16a3a606f638696cc7ebf4a0fa15a872->enter($__internal_f4a6a1d4915b1579bb4f43507c4f055d16a3a606f638696cc7ebf4a0fa15a872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/trim-right.js"));

        // line 1
        echo "require('../../modules/es7.string.trim-right');
module.exports = require('../../modules/_core').String.trimRight;
";
        
        $__internal_f4a6a1d4915b1579bb4f43507c4f055d16a3a606f638696cc7ebf4a0fa15a872->leave($__internal_f4a6a1d4915b1579bb4f43507c4f055d16a3a606f638696cc7ebf4a0fa15a872_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/trim-right.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.string.trim-right');
module.exports = require('../../modules/_core').String.trimRight;
", "node_modules/core-js/library/fn/string/trim-right.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/trim-right.js");
    }
}
