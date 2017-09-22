<?php

/* node_modules/core-js/fn/function/part.js */
class __TwigTemplate_39dd99be5ff547ef97f9236dd2b85605597bfdcb4d9a65f229eac1364e63b865 extends Twig_Template
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
        $__internal_0b145489b234a775ac5018530dca94c16005dcc5ed4ef277748558e367a91acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b145489b234a775ac5018530dca94c16005dcc5ed4ef277748558e367a91acb->enter($__internal_0b145489b234a775ac5018530dca94c16005dcc5ed4ef277748558e367a91acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/function/part.js"));

        // line 1
        echo "require('../../modules/core.function.part');
module.exports = require('../../modules/_core').Function.part;
";
        
        $__internal_0b145489b234a775ac5018530dca94c16005dcc5ed4ef277748558e367a91acb->leave($__internal_0b145489b234a775ac5018530dca94c16005dcc5ed4ef277748558e367a91acb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/function/part.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/core.function.part');
module.exports = require('../../modules/_core').Function.part;
", "node_modules/core-js/fn/function/part.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/function/part.js");
    }
}
