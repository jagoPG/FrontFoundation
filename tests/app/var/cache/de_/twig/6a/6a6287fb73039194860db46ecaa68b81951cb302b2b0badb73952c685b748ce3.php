<?php

/* node_modules/core-js/library/fn/string/virtual/fixed.js */
class __TwigTemplate_3a38878701a4c9a65b568bdae07c91d0a6eb5be99dda9b2bde1d213d8b16ef61 extends Twig_Template
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
        $__internal_3993eb1dbdd6c9f8bf2670f19fb93a6fb5c3ec13df577dcd4d8a512a28cce341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3993eb1dbdd6c9f8bf2670f19fb93a6fb5c3ec13df577dcd4d8a512a28cce341->enter($__internal_3993eb1dbdd6c9f8bf2670f19fb93a6fb5c3ec13df577dcd4d8a512a28cce341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/virtual/fixed.js"));

        // line 1
        echo "require('../../../modules/es6.string.fixed');
module.exports = require('../../../modules/_entry-virtual')('String').fixed;
";
        
        $__internal_3993eb1dbdd6c9f8bf2670f19fb93a6fb5c3ec13df577dcd4d8a512a28cce341->leave($__internal_3993eb1dbdd6c9f8bf2670f19fb93a6fb5c3ec13df577dcd4d8a512a28cce341_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/virtual/fixed.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.fixed');
module.exports = require('../../../modules/_entry-virtual')('String').fixed;
", "node_modules/core-js/library/fn/string/virtual/fixed.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/virtual/fixed.js");
    }
}
