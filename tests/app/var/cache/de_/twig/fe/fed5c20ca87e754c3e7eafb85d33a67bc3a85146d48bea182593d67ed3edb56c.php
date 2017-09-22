<?php

/* node_modules/core-js/fn/array/some.js */
class __TwigTemplate_764205664bfb2a1fd16f050aa50155d21e280e858a68e7466587ecf0acf74d36 extends Twig_Template
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
        $__internal_6ae23c546306b7c9fa947adb9b37792023aafb3adc982d40ec5ad8fefb091cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae23c546306b7c9fa947adb9b37792023aafb3adc982d40ec5ad8fefb091cbb->enter($__internal_6ae23c546306b7c9fa947adb9b37792023aafb3adc982d40ec5ad8fefb091cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/array/some.js"));

        // line 1
        echo "require('../../modules/es6.array.some');
module.exports = require('../../modules/_core').Array.some;
";
        
        $__internal_6ae23c546306b7c9fa947adb9b37792023aafb3adc982d40ec5ad8fefb091cbb->leave($__internal_6ae23c546306b7c9fa947adb9b37792023aafb3adc982d40ec5ad8fefb091cbb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/array/some.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.array.some');
module.exports = require('../../modules/_core').Array.some;
", "node_modules/core-js/fn/array/some.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/array/some.js");
    }
}
