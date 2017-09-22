<?php

/* node_modules/core-js/library/fn/math/log10.js */
class __TwigTemplate_543d1596d853fd0e0a4e7ea5f2d7fb9185a47013d4bea3c5ad90338462e5c32d extends Twig_Template
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
        $__internal_eb88a506d118bccf51c417874962569a75965440b18038099fc8c37b082709a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb88a506d118bccf51c417874962569a75965440b18038099fc8c37b082709a9->enter($__internal_eb88a506d118bccf51c417874962569a75965440b18038099fc8c37b082709a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/math/log10.js"));

        // line 1
        echo "require('../../modules/es6.math.log10');
module.exports = require('../../modules/_core').Math.log10;
";
        
        $__internal_eb88a506d118bccf51c417874962569a75965440b18038099fc8c37b082709a9->leave($__internal_eb88a506d118bccf51c417874962569a75965440b18038099fc8c37b082709a9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/math/log10.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.math.log10');
module.exports = require('../../modules/_core').Math.log10;
", "node_modules/core-js/library/fn/math/log10.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/math/log10.js");
    }
}
