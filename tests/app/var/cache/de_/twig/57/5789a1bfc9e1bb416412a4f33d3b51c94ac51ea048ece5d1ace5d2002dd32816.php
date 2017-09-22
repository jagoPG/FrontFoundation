<?php

/* node_modules/core-js/fn/string/anchor.js */
class __TwigTemplate_b2bc32871b8b842525c878583981f3d934db838eaebab9ec1d3a0e64467f1a00 extends Twig_Template
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
        $__internal_33ec2743281cded6a9bee692afa61abd845a74c38b7d09af79f4935d357bd798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ec2743281cded6a9bee692afa61abd845a74c38b7d09af79f4935d357bd798->enter($__internal_33ec2743281cded6a9bee692afa61abd845a74c38b7d09af79f4935d357bd798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/anchor.js"));

        // line 1
        echo "require('../../modules/es6.string.anchor');
module.exports = require('../../modules/_core').String.anchor;
";
        
        $__internal_33ec2743281cded6a9bee692afa61abd845a74c38b7d09af79f4935d357bd798->leave($__internal_33ec2743281cded6a9bee692afa61abd845a74c38b7d09af79f4935d357bd798_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/anchor.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.anchor');
module.exports = require('../../modules/_core').String.anchor;
", "node_modules/core-js/fn/string/anchor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/anchor.js");
    }
}
