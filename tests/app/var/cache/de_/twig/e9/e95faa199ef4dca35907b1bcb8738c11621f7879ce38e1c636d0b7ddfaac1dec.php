<?php

/* node_modules/core-js/fn/parse-float.js */
class __TwigTemplate_bcf95559c9c30c33de560b1dd14e35225d37ebf2d422f76bee01f5001901c145 extends Twig_Template
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
        $__internal_a995678c35a481755dfc61bb83bf260cadbf86a1f1c4fdf0ce33b51c20ababe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a995678c35a481755dfc61bb83bf260cadbf86a1f1c4fdf0ce33b51c20ababe8->enter($__internal_a995678c35a481755dfc61bb83bf260cadbf86a1f1c4fdf0ce33b51c20ababe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/parse-float.js"));

        // line 1
        echo "require('../modules/es6.parse-float');
module.exports = require('../modules/_core').parseFloat;
";
        
        $__internal_a995678c35a481755dfc61bb83bf260cadbf86a1f1c4fdf0ce33b51c20ababe8->leave($__internal_a995678c35a481755dfc61bb83bf260cadbf86a1f1c4fdf0ce33b51c20ababe8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/parse-float.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es6.parse-float');
module.exports = require('../modules/_core').parseFloat;
", "node_modules/core-js/fn/parse-float.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/parse-float.js");
    }
}
