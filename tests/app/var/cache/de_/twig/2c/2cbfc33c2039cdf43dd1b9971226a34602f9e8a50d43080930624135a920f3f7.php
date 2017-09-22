<?php

/* node_modules/core-js/library/fn/object/lookup-setter.js */
class __TwigTemplate_4836f7fcc202f6fcf6c2e0b56fbe48033a7678124444c725373ef73889ef441b extends Twig_Template
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
        $__internal_fd2cebc1dfa74e8d0d686670f42949f8a8f6786135d5f8618d81c9df0adf7e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2cebc1dfa74e8d0d686670f42949f8a8f6786135d5f8618d81c9df0adf7e8f->enter($__internal_fd2cebc1dfa74e8d0d686670f42949f8a8f6786135d5f8618d81c9df0adf7e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/object/lookup-setter.js"));

        // line 1
        echo "require('../../modules/es7.object.lookup-setter');
module.exports = require('../../modules/_core').Object.__lookupSetter__;
";
        
        $__internal_fd2cebc1dfa74e8d0d686670f42949f8a8f6786135d5f8618d81c9df0adf7e8f->leave($__internal_fd2cebc1dfa74e8d0d686670f42949f8a8f6786135d5f8618d81c9df0adf7e8f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/object/lookup-setter.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.object.lookup-setter');
module.exports = require('../../modules/_core').Object.__lookupSetter__;
", "node_modules/core-js/library/fn/object/lookup-setter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/object/lookup-setter.js");
    }
}
