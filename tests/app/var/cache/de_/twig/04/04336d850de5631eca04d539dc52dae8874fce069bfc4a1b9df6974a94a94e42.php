<?php

/* node_modules/core-js/library/fn/array/virtual/keys.js */
class __TwigTemplate_a92e9580a71523598ca97e95e97e6888e07c34a060a65268c62e0afb08c43f3f extends Twig_Template
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
        $__internal_36cf7fb1477035f5f1fbebabeff89329f2f60f90a9262c7b8d3bef2783ac36a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36cf7fb1477035f5f1fbebabeff89329f2f60f90a9262c7b8d3bef2783ac36a4->enter($__internal_36cf7fb1477035f5f1fbebabeff89329f2f60f90a9262c7b8d3bef2783ac36a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/virtual/keys.js"));

        // line 1
        echo "require('../../../modules/es6.array.iterator');
module.exports = require('../../../modules/_entry-virtual')('Array').keys;
";
        
        $__internal_36cf7fb1477035f5f1fbebabeff89329f2f60f90a9262c7b8d3bef2783ac36a4->leave($__internal_36cf7fb1477035f5f1fbebabeff89329f2f60f90a9262c7b8d3bef2783ac36a4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/virtual/keys.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.array.iterator');
module.exports = require('../../../modules/_entry-virtual')('Array').keys;
", "node_modules/core-js/library/fn/array/virtual/keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/virtual/keys.js");
    }
}
