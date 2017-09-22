<?php

/* node_modules/lodash/fp/random.js */
class __TwigTemplate_33694577eebedfb8ce8ccc47fe99b90411b014c76bdf1f96a8940563e92b3d45 extends Twig_Template
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
        $__internal_6b611080288a864c947a82692286d5411e13a694dfe03ed6b0ef64bbfe9da4b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b611080288a864c947a82692286d5411e13a694dfe03ed6b0ef64bbfe9da4b4->enter($__internal_6b611080288a864c947a82692286d5411e13a694dfe03ed6b0ef64bbfe9da4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/random.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('random', require('../random'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_6b611080288a864c947a82692286d5411e13a694dfe03ed6b0ef64bbfe9da4b4->leave($__internal_6b611080288a864c947a82692286d5411e13a694dfe03ed6b0ef64bbfe9da4b4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/random.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('random', require('../random'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/random.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/random.js");
    }
}
