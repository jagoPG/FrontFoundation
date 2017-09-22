<?php

/* node_modules/core-js/fn/array/virtual/some.js */
class __TwigTemplate_00d09d4266acdf4f1dc33d4f6ecdc55791f091a0befa16f140ab35cadb72717d extends Twig_Template
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
        $__internal_a6eff3a5e6601bbef05a48f2802324c91bf107541b1a0308bfec018f61ad7e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6eff3a5e6601bbef05a48f2802324c91bf107541b1a0308bfec018f61ad7e5c->enter($__internal_a6eff3a5e6601bbef05a48f2802324c91bf107541b1a0308bfec018f61ad7e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/array/virtual/some.js"));

        // line 1
        echo "require('../../../modules/es6.array.some');
module.exports = require('../../../modules/_entry-virtual')('Array').some;
";
        
        $__internal_a6eff3a5e6601bbef05a48f2802324c91bf107541b1a0308bfec018f61ad7e5c->leave($__internal_a6eff3a5e6601bbef05a48f2802324c91bf107541b1a0308bfec018f61ad7e5c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/array/virtual/some.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.array.some');
module.exports = require('../../../modules/_entry-virtual')('Array').some;
", "node_modules/core-js/fn/array/virtual/some.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/array/virtual/some.js");
    }
}
