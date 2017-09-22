<?php

/* node_modules/core-js/library/fn/string/virtual/pad-start.js */
class __TwigTemplate_1b24d53a6bb1ec3946f69d8b1a26eb1a0034800d37a2aa4a2aef872ee777d08d extends Twig_Template
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
        $__internal_70a15f203ee1142685219164bd8d10da4c2c744842c3792f0afe300af3f12739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a15f203ee1142685219164bd8d10da4c2c744842c3792f0afe300af3f12739->enter($__internal_70a15f203ee1142685219164bd8d10da4c2c744842c3792f0afe300af3f12739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/virtual/pad-start.js"));

        // line 1
        echo "require('../../../modules/es7.string.pad-start');
module.exports = require('../../../modules/_entry-virtual')('String').padStart;
";
        
        $__internal_70a15f203ee1142685219164bd8d10da4c2c744842c3792f0afe300af3f12739->leave($__internal_70a15f203ee1142685219164bd8d10da4c2c744842c3792f0afe300af3f12739_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/virtual/pad-start.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es7.string.pad-start');
module.exports = require('../../../modules/_entry-virtual')('String').padStart;
", "node_modules/core-js/library/fn/string/virtual/pad-start.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/virtual/pad-start.js");
    }
}
