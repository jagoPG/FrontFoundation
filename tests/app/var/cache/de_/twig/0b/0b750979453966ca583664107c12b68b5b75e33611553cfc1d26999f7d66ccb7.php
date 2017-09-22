<?php

/* node_modules/core-js/fn/array/virtual/entries.js */
class __TwigTemplate_beafc24419b9940528b8ecb5b570a477191ac0fb66c1a692ab6f3f77032b4509 extends Twig_Template
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
        $__internal_f8fe630dc57a41c1619f83704ff327056bdb9030429f384eec424201b891057b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8fe630dc57a41c1619f83704ff327056bdb9030429f384eec424201b891057b->enter($__internal_f8fe630dc57a41c1619f83704ff327056bdb9030429f384eec424201b891057b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/array/virtual/entries.js"));

        // line 1
        echo "require('../../../modules/es6.array.iterator');
module.exports = require('../../../modules/_entry-virtual')('Array').entries;
";
        
        $__internal_f8fe630dc57a41c1619f83704ff327056bdb9030429f384eec424201b891057b->leave($__internal_f8fe630dc57a41c1619f83704ff327056bdb9030429f384eec424201b891057b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/array/virtual/entries.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.array.iterator');
module.exports = require('../../../modules/_entry-virtual')('Array').entries;
", "node_modules/core-js/fn/array/virtual/entries.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/array/virtual/entries.js");
    }
}
