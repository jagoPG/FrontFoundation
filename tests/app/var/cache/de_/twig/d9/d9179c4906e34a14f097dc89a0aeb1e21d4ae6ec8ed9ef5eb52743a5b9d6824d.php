<?php

/* node_modules/core-js/fn/array/is-array.js */
class __TwigTemplate_255393f8d44d101e9061c0fff585c23aa02b0c5fa8455ae07c527b3b0c122ce8 extends Twig_Template
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
        $__internal_5fdf7ca1c86925aeffaafa1cbdd6a70b139c6bd5d04cb03f08b514dc3f7a9c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fdf7ca1c86925aeffaafa1cbdd6a70b139c6bd5d04cb03f08b514dc3f7a9c6a->enter($__internal_5fdf7ca1c86925aeffaafa1cbdd6a70b139c6bd5d04cb03f08b514dc3f7a9c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/array/is-array.js"));

        // line 1
        echo "require('../../modules/es6.array.is-array');
module.exports = require('../../modules/_core').Array.isArray;
";
        
        $__internal_5fdf7ca1c86925aeffaafa1cbdd6a70b139c6bd5d04cb03f08b514dc3f7a9c6a->leave($__internal_5fdf7ca1c86925aeffaafa1cbdd6a70b139c6bd5d04cb03f08b514dc3f7a9c6a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/array/is-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.array.is-array');
module.exports = require('../../modules/_core').Array.isArray;
", "node_modules/core-js/fn/array/is-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/array/is-array.js");
    }
}
