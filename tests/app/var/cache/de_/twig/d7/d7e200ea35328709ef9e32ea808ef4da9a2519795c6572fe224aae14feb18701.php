<?php

/* node_modules/core-js/library/fn/number/virtual/to-fixed.js */
class __TwigTemplate_1304a644a3fdefbff144f435080f43315d5c60e81213036df0f7e8521f336aca extends Twig_Template
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
        $__internal_11590a2e470a2e705bb612b6aa9a7a8b3c92634fc6e02465118d47182f92494b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11590a2e470a2e705bb612b6aa9a7a8b3c92634fc6e02465118d47182f92494b->enter($__internal_11590a2e470a2e705bb612b6aa9a7a8b3c92634fc6e02465118d47182f92494b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/number/virtual/to-fixed.js"));

        // line 1
        echo "require('../../../modules/es6.number.to-fixed');
module.exports = require('../../../modules/_entry-virtual')('Number').toFixed;
";
        
        $__internal_11590a2e470a2e705bb612b6aa9a7a8b3c92634fc6e02465118d47182f92494b->leave($__internal_11590a2e470a2e705bb612b6aa9a7a8b3c92634fc6e02465118d47182f92494b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/number/virtual/to-fixed.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.number.to-fixed');
module.exports = require('../../../modules/_entry-virtual')('Number').toFixed;
", "node_modules/core-js/library/fn/number/virtual/to-fixed.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/number/virtual/to-fixed.js");
    }
}
