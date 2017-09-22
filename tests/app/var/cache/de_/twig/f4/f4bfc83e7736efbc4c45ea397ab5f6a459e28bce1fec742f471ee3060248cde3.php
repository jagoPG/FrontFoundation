<?php

/* node_modules/core-js/fn/math/trunc.js */
class __TwigTemplate_00b70d253656aceb60e2d7fbdac29910a486e51106e6e3622697d0cba0ecd86b extends Twig_Template
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
        $__internal_f0013296bf49ab0f0bb4297cb617823b5f919282433add4f89dd5940c730e872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0013296bf49ab0f0bb4297cb617823b5f919282433add4f89dd5940c730e872->enter($__internal_f0013296bf49ab0f0bb4297cb617823b5f919282433add4f89dd5940c730e872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/math/trunc.js"));

        // line 1
        echo "require('../../modules/es6.math.trunc');
module.exports = require('../../modules/_core').Math.trunc;
";
        
        $__internal_f0013296bf49ab0f0bb4297cb617823b5f919282433add4f89dd5940c730e872->leave($__internal_f0013296bf49ab0f0bb4297cb617823b5f919282433add4f89dd5940c730e872_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/math/trunc.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.math.trunc');
module.exports = require('../../modules/_core').Math.trunc;
", "node_modules/core-js/fn/math/trunc.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/math/trunc.js");
    }
}
