<?php

/* node_modules/core-js/fn/object/define.js */
class __TwigTemplate_f5611e56a4420f84a4c970f12fb4c22d7d802489f2858384cebf14b3d8ddc8fc extends Twig_Template
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
        $__internal_90ab0b100af428faa27f048b06bc391a0b4605ee94edb7e9970382d513414ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ab0b100af428faa27f048b06bc391a0b4605ee94edb7e9970382d513414ce6->enter($__internal_90ab0b100af428faa27f048b06bc391a0b4605ee94edb7e9970382d513414ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/object/define.js"));

        // line 1
        echo "require('../../modules/core.object.define');
module.exports = require('../../modules/_core').Object.define;
";
        
        $__internal_90ab0b100af428faa27f048b06bc391a0b4605ee94edb7e9970382d513414ce6->leave($__internal_90ab0b100af428faa27f048b06bc391a0b4605ee94edb7e9970382d513414ce6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/object/define.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/core.object.define');
module.exports = require('../../modules/_core').Object.define;
", "node_modules/core-js/fn/object/define.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/object/define.js");
    }
}
