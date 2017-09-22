<?php

/* node_modules/core-js/fn/array/from.js */
class __TwigTemplate_0f1fdfbe48192affe4e4bca68c73d9caa671902ad981253f028270d4fb573b3e extends Twig_Template
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
        $__internal_cc7ab7e402b40948706faed9a6d2021b5a8ff524bdd9e555d6f82aa298e5f1c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7ab7e402b40948706faed9a6d2021b5a8ff524bdd9e555d6f82aa298e5f1c6->enter($__internal_cc7ab7e402b40948706faed9a6d2021b5a8ff524bdd9e555d6f82aa298e5f1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/array/from.js"));

        // line 1
        echo "require('../../modules/es6.string.iterator');
require('../../modules/es6.array.from');
module.exports = require('../../modules/_core').Array.from;
";
        
        $__internal_cc7ab7e402b40948706faed9a6d2021b5a8ff524bdd9e555d6f82aa298e5f1c6->leave($__internal_cc7ab7e402b40948706faed9a6d2021b5a8ff524bdd9e555d6f82aa298e5f1c6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/array/from.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.iterator');
require('../../modules/es6.array.from');
module.exports = require('../../modules/_core').Array.from;
", "node_modules/core-js/fn/array/from.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/array/from.js");
    }
}
