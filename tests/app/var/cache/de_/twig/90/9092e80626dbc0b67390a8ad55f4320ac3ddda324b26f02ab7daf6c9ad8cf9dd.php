<?php

/* node_modules/core-js/library/es7/weak-set.js */
class __TwigTemplate_d0dd9dcd1cce79aa819c4e36d9f80caef2997ccb72e745f8fe203d175f1965f9 extends Twig_Template
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
        $__internal_77db4ca63a99734d0589ca18a008736b05b003ff6bc4c5aeb1b5540f27ef3e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77db4ca63a99734d0589ca18a008736b05b003ff6bc4c5aeb1b5540f27ef3e01->enter($__internal_77db4ca63a99734d0589ca18a008736b05b003ff6bc4c5aeb1b5540f27ef3e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/es7/weak-set.js"));

        // line 1
        echo "require('../modules/es7.weak-set.of');
require('../modules/es7.weak-set.from');
module.exports = require('../modules/_core').WeakSet;
";
        
        $__internal_77db4ca63a99734d0589ca18a008736b05b003ff6bc4c5aeb1b5540f27ef3e01->leave($__internal_77db4ca63a99734d0589ca18a008736b05b003ff6bc4c5aeb1b5540f27ef3e01_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/es7/weak-set.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.weak-set.of');
require('../modules/es7.weak-set.from');
module.exports = require('../modules/_core').WeakSet;
", "node_modules/core-js/library/es7/weak-set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/es7/weak-set.js");
    }
}
