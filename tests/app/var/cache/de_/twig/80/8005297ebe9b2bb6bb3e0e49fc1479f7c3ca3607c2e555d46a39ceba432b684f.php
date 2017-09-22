<?php

/* node_modules/core-js/library/fn/array/entries.js */
class __TwigTemplate_46a28c2b16604e4e7a61d22fe721a70e5c14862ff4f668b7cb60e80638dac702 extends Twig_Template
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
        $__internal_94d52804a863df9ea8df97b6a6ce46c6116b989b9d22ebee93f1ecef99219ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d52804a863df9ea8df97b6a6ce46c6116b989b9d22ebee93f1ecef99219ad1->enter($__internal_94d52804a863df9ea8df97b6a6ce46c6116b989b9d22ebee93f1ecef99219ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/entries.js"));

        // line 1
        echo "require('../../modules/es6.array.iterator');
module.exports = require('../../modules/_core').Array.entries;
";
        
        $__internal_94d52804a863df9ea8df97b6a6ce46c6116b989b9d22ebee93f1ecef99219ad1->leave($__internal_94d52804a863df9ea8df97b6a6ce46c6116b989b9d22ebee93f1ecef99219ad1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/entries.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.array.iterator');
module.exports = require('../../modules/_core').Array.entries;
", "node_modules/core-js/library/fn/array/entries.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/entries.js");
    }
}
