<?php

/* node_modules/core-js/library/fn/function/virtual/part.js */
class __TwigTemplate_6245a7d9ee6323ff8c4a507b69f3579fba881edbac4e40b4c2df58c265839627 extends Twig_Template
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
        $__internal_eb75b0f2f49237a80b1e4e897df399b2b78a5efd12f4425f7ad36a1aa325e07d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb75b0f2f49237a80b1e4e897df399b2b78a5efd12f4425f7ad36a1aa325e07d->enter($__internal_eb75b0f2f49237a80b1e4e897df399b2b78a5efd12f4425f7ad36a1aa325e07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/function/virtual/part.js"));

        // line 1
        echo "require('../../../modules/core.function.part');
module.exports = require('../../../modules/_entry-virtual')('Function').part;
";
        
        $__internal_eb75b0f2f49237a80b1e4e897df399b2b78a5efd12f4425f7ad36a1aa325e07d->leave($__internal_eb75b0f2f49237a80b1e4e897df399b2b78a5efd12f4425f7ad36a1aa325e07d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/function/virtual/part.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/core.function.part');
module.exports = require('../../../modules/_entry-virtual')('Function').part;
", "node_modules/core-js/library/fn/function/virtual/part.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/function/virtual/part.js");
    }
}
