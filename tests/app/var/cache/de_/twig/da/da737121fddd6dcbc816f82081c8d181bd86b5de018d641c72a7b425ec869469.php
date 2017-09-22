<?php

/* node_modules/core-js/fn/math/log10.js */
class __TwigTemplate_8bc26810d35f94d67e1889206dd2949446d1bce9131efa75d2e25e51543d48c4 extends Twig_Template
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
        $__internal_59b8dcea6318bb3ae9f21d9438d3da48da520a929742eebf1f24dce837ebe303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b8dcea6318bb3ae9f21d9438d3da48da520a929742eebf1f24dce837ebe303->enter($__internal_59b8dcea6318bb3ae9f21d9438d3da48da520a929742eebf1f24dce837ebe303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/math/log10.js"));

        // line 1
        echo "require('../../modules/es6.math.log10');
module.exports = require('../../modules/_core').Math.log10;
";
        
        $__internal_59b8dcea6318bb3ae9f21d9438d3da48da520a929742eebf1f24dce837ebe303->leave($__internal_59b8dcea6318bb3ae9f21d9438d3da48da520a929742eebf1f24dce837ebe303_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/math/log10.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.math.log10');
module.exports = require('../../modules/_core').Math.log10;
", "node_modules/core-js/fn/math/log10.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/math/log10.js");
    }
}
