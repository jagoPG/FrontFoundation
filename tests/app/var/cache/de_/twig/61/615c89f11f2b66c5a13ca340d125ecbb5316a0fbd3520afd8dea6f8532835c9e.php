<?php

/* node_modules/core-js/library/fn/array/virtual/copy-within.js */
class __TwigTemplate_f71201fa44a9296e97e7fd1a52b0694e6855faba4df06495c70aa2170dbe1ccc extends Twig_Template
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
        $__internal_3d0c855a54e1b23f99ddcba842b981bc7c68ed09a48dbd4cb89c4ae37a3d02e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0c855a54e1b23f99ddcba842b981bc7c68ed09a48dbd4cb89c4ae37a3d02e0->enter($__internal_3d0c855a54e1b23f99ddcba842b981bc7c68ed09a48dbd4cb89c4ae37a3d02e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/virtual/copy-within.js"));

        // line 1
        echo "require('../../../modules/es6.array.copy-within');
module.exports = require('../../../modules/_entry-virtual')('Array').copyWithin;
";
        
        $__internal_3d0c855a54e1b23f99ddcba842b981bc7c68ed09a48dbd4cb89c4ae37a3d02e0->leave($__internal_3d0c855a54e1b23f99ddcba842b981bc7c68ed09a48dbd4cb89c4ae37a3d02e0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/virtual/copy-within.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.array.copy-within');
module.exports = require('../../../modules/_entry-virtual')('Array').copyWithin;
", "node_modules/core-js/library/fn/array/virtual/copy-within.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/virtual/copy-within.js");
    }
}
