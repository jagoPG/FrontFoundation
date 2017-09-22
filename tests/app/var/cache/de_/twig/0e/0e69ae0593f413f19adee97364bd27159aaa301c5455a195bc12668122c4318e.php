<?php

/* node_modules/core-js/fn/function/virtual/bind.js */
class __TwigTemplate_0298fdb7ed4e600c2637446e050e7da4cc6f3ff5cfebf2b2eac7ab0067503846 extends Twig_Template
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
        $__internal_0d66f58c92c21168446ac87651973387c8ce643322d75d071958a593f9818db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d66f58c92c21168446ac87651973387c8ce643322d75d071958a593f9818db7->enter($__internal_0d66f58c92c21168446ac87651973387c8ce643322d75d071958a593f9818db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/function/virtual/bind.js"));

        // line 1
        echo "require('../../../modules/es6.function.bind');
module.exports = require('../../../modules/_entry-virtual')('Function').bind;
";
        
        $__internal_0d66f58c92c21168446ac87651973387c8ce643322d75d071958a593f9818db7->leave($__internal_0d66f58c92c21168446ac87651973387c8ce643322d75d071958a593f9818db7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/function/virtual/bind.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.function.bind');
module.exports = require('../../../modules/_entry-virtual')('Function').bind;
", "node_modules/core-js/fn/function/virtual/bind.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/function/virtual/bind.js");
    }
}
