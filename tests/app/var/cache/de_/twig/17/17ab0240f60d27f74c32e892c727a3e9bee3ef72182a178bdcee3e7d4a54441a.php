<?php

/* node_modules/core-js/fn/string/virtual/link.js */
class __TwigTemplate_5261e0c760264c75dd80e7c881ce9d4b896c25f2dd1aef81b20f40f0df8e350f extends Twig_Template
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
        $__internal_05d8563b76837a7a7f6f83792c2d342cd06e5957643668e1e260c3cc4876d305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d8563b76837a7a7f6f83792c2d342cd06e5957643668e1e260c3cc4876d305->enter($__internal_05d8563b76837a7a7f6f83792c2d342cd06e5957643668e1e260c3cc4876d305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/virtual/link.js"));

        // line 1
        echo "require('../../../modules/es6.string.link');
module.exports = require('../../../modules/_entry-virtual')('String').link;
";
        
        $__internal_05d8563b76837a7a7f6f83792c2d342cd06e5957643668e1e260c3cc4876d305->leave($__internal_05d8563b76837a7a7f6f83792c2d342cd06e5957643668e1e260c3cc4876d305_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/virtual/link.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.link');
module.exports = require('../../../modules/_entry-virtual')('String').link;
", "node_modules/core-js/fn/string/virtual/link.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/virtual/link.js");
    }
}
