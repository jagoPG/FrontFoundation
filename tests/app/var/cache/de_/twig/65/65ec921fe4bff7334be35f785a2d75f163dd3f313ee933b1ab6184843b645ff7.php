<?php

/* node_modules/core-js/fn/array/virtual/includes.js */
class __TwigTemplate_edced92d2199bfd46847e3246455005b5ab669080c2ce7630936dabe64e26226 extends Twig_Template
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
        $__internal_8cd9d0b7890a20976753f76ff3867d79696ed415ce5831f9ac235b9f33528f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd9d0b7890a20976753f76ff3867d79696ed415ce5831f9ac235b9f33528f61->enter($__internal_8cd9d0b7890a20976753f76ff3867d79696ed415ce5831f9ac235b9f33528f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/array/virtual/includes.js"));

        // line 1
        echo "require('../../../modules/es7.array.includes');
module.exports = require('../../../modules/_entry-virtual')('Array').includes;
";
        
        $__internal_8cd9d0b7890a20976753f76ff3867d79696ed415ce5831f9ac235b9f33528f61->leave($__internal_8cd9d0b7890a20976753f76ff3867d79696ed415ce5831f9ac235b9f33528f61_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/array/virtual/includes.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es7.array.includes');
module.exports = require('../../../modules/_entry-virtual')('Array').includes;
", "node_modules/core-js/fn/array/virtual/includes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/array/virtual/includes.js");
    }
}
