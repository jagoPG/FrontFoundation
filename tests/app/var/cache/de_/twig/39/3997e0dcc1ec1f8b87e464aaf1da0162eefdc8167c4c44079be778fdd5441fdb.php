<?php

/* node_modules/core-js/library/fn/object/make.js */
class __TwigTemplate_be02649221405c411fbbf25c2e4875ad0ee4608a9b40bc44bfd10d70f061d182 extends Twig_Template
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
        $__internal_89697be7a9ed39918bc3f87b3c5c5ae77a148621bd42bc9b07d795257bc8ba0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89697be7a9ed39918bc3f87b3c5c5ae77a148621bd42bc9b07d795257bc8ba0e->enter($__internal_89697be7a9ed39918bc3f87b3c5c5ae77a148621bd42bc9b07d795257bc8ba0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/object/make.js"));

        // line 1
        echo "require('../../modules/core.object.make');
module.exports = require('../../modules/_core').Object.make;
";
        
        $__internal_89697be7a9ed39918bc3f87b3c5c5ae77a148621bd42bc9b07d795257bc8ba0e->leave($__internal_89697be7a9ed39918bc3f87b3c5c5ae77a148621bd42bc9b07d795257bc8ba0e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/object/make.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/core.object.make');
module.exports = require('../../modules/_core').Object.make;
", "node_modules/core-js/library/fn/object/make.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/object/make.js");
    }
}
