<?php

/* node_modules/core-js/fn/array/virtual/keys.js */
class __TwigTemplate_110d0ff13fedfa96ce7f1ac86d78555fd1c1a33aac15099d480c6c946f2019c0 extends Twig_Template
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
        $__internal_94172badf679bb80c657ca4d27a069b56276be57d672c15cd1501f965979761b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94172badf679bb80c657ca4d27a069b56276be57d672c15cd1501f965979761b->enter($__internal_94172badf679bb80c657ca4d27a069b56276be57d672c15cd1501f965979761b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/array/virtual/keys.js"));

        // line 1
        echo "require('../../../modules/es6.array.iterator');
module.exports = require('../../../modules/_entry-virtual')('Array').keys;
";
        
        $__internal_94172badf679bb80c657ca4d27a069b56276be57d672c15cd1501f965979761b->leave($__internal_94172badf679bb80c657ca4d27a069b56276be57d672c15cd1501f965979761b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/array/virtual/keys.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.array.iterator');
module.exports = require('../../../modules/_entry-virtual')('Array').keys;
", "node_modules/core-js/fn/array/virtual/keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/array/virtual/keys.js");
    }
}
