<?php

/* node_modules/core-js/library/fn/object/is-frozen.js */
class __TwigTemplate_fef8bf13dfc3b8f69e673f4603748b5adf08f88569f72beaa084e085e2593bc0 extends Twig_Template
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
        $__internal_09660d25c510208b752c557a6ee7226aa5f174f3e66c8b3df64d4bb846e0ffc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09660d25c510208b752c557a6ee7226aa5f174f3e66c8b3df64d4bb846e0ffc2->enter($__internal_09660d25c510208b752c557a6ee7226aa5f174f3e66c8b3df64d4bb846e0ffc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/object/is-frozen.js"));

        // line 1
        echo "require('../../modules/es6.object.is-frozen');
module.exports = require('../../modules/_core').Object.isFrozen;
";
        
        $__internal_09660d25c510208b752c557a6ee7226aa5f174f3e66c8b3df64d4bb846e0ffc2->leave($__internal_09660d25c510208b752c557a6ee7226aa5f174f3e66c8b3df64d4bb846e0ffc2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/object/is-frozen.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.is-frozen');
module.exports = require('../../modules/_core').Object.isFrozen;
", "node_modules/core-js/library/fn/object/is-frozen.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/object/is-frozen.js");
    }
}
