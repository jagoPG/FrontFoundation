<?php

/* node_modules/core-js/fn/array/for-each.js */
class __TwigTemplate_fe23c45a2063a6b096b45e272c5938a8fb9ea80ae8d040247dd2d7bf921508f5 extends Twig_Template
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
        $__internal_c46fd9ff6c9bff074624b10d006c3354dcbcdfceb5669760034f2eb1c9b312b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c46fd9ff6c9bff074624b10d006c3354dcbcdfceb5669760034f2eb1c9b312b0->enter($__internal_c46fd9ff6c9bff074624b10d006c3354dcbcdfceb5669760034f2eb1c9b312b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/array/for-each.js"));

        // line 1
        echo "require('../../modules/es6.array.for-each');
module.exports = require('../../modules/_core').Array.forEach;
";
        
        $__internal_c46fd9ff6c9bff074624b10d006c3354dcbcdfceb5669760034f2eb1c9b312b0->leave($__internal_c46fd9ff6c9bff074624b10d006c3354dcbcdfceb5669760034f2eb1c9b312b0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/array/for-each.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.array.for-each');
module.exports = require('../../modules/_core').Array.forEach;
", "node_modules/core-js/fn/array/for-each.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/array/for-each.js");
    }
}
