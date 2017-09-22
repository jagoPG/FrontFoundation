<?php

/* node_modules/core-js/library/fn/string/starts-with.js */
class __TwigTemplate_3f4dc29e0c5a8eca096b727f9a704ae86136bf52d4c6db153e7c59a8041cdc20 extends Twig_Template
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
        $__internal_cf023a049405a334b1313777340e99042f7006576ea95b8f831fa61560a67a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf023a049405a334b1313777340e99042f7006576ea95b8f831fa61560a67a6d->enter($__internal_cf023a049405a334b1313777340e99042f7006576ea95b8f831fa61560a67a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/starts-with.js"));

        // line 1
        echo "require('../../modules/es6.string.starts-with');
module.exports = require('../../modules/_core').String.startsWith;
";
        
        $__internal_cf023a049405a334b1313777340e99042f7006576ea95b8f831fa61560a67a6d->leave($__internal_cf023a049405a334b1313777340e99042f7006576ea95b8f831fa61560a67a6d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/starts-with.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.starts-with');
module.exports = require('../../modules/_core').String.startsWith;
", "node_modules/core-js/library/fn/string/starts-with.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/starts-with.js");
    }
}
