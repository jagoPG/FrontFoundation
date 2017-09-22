<?php

/* node_modules/core-js/library/fn/string/virtual/italics.js */
class __TwigTemplate_c7f0f5a2b7b3aafd5fe69359594fd2cb3f3119ef99d7cccdbb28871f461de38c extends Twig_Template
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
        $__internal_8267636abbeb59313ab8a65eda94bdf946b37401c2e37ba8a8e19a64f3661bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8267636abbeb59313ab8a65eda94bdf946b37401c2e37ba8a8e19a64f3661bae->enter($__internal_8267636abbeb59313ab8a65eda94bdf946b37401c2e37ba8a8e19a64f3661bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/virtual/italics.js"));

        // line 1
        echo "require('../../../modules/es6.string.italics');
module.exports = require('../../../modules/_entry-virtual')('String').italics;
";
        
        $__internal_8267636abbeb59313ab8a65eda94bdf946b37401c2e37ba8a8e19a64f3661bae->leave($__internal_8267636abbeb59313ab8a65eda94bdf946b37401c2e37ba8a8e19a64f3661bae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/virtual/italics.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.italics');
module.exports = require('../../../modules/_entry-virtual')('String').italics;
", "node_modules/core-js/library/fn/string/virtual/italics.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/virtual/italics.js");
    }
}
