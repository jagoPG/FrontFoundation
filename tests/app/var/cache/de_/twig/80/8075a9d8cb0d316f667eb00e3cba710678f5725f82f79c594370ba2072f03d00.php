<?php

/* node_modules/core-js/library/fn/parse-float.js */
class __TwigTemplate_7e9e2086d2e56c2e9fb3ca424f55bb71d78ee3d9c668dcdaf51ea8e975452b1a extends Twig_Template
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
        $__internal_0a271c49a644c26b4785a87fd7bc27a5561278087bbc26de68d379df168003b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a271c49a644c26b4785a87fd7bc27a5561278087bbc26de68d379df168003b0->enter($__internal_0a271c49a644c26b4785a87fd7bc27a5561278087bbc26de68d379df168003b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/parse-float.js"));

        // line 1
        echo "require('../modules/es6.parse-float');
module.exports = require('../modules/_core').parseFloat;
";
        
        $__internal_0a271c49a644c26b4785a87fd7bc27a5561278087bbc26de68d379df168003b0->leave($__internal_0a271c49a644c26b4785a87fd7bc27a5561278087bbc26de68d379df168003b0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/parse-float.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es6.parse-float');
module.exports = require('../modules/_core').parseFloat;
", "node_modules/core-js/library/fn/parse-float.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/parse-float.js");
    }
}
