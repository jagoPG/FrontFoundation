<?php

/* node_modules/core-js/fn/object/lookup-getter.js */
class __TwigTemplate_a5c276cb3271ae8fe12af466b3d0ec1ff26836738e0e8087286b6a82f9c05e3b extends Twig_Template
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
        $__internal_f0f1b97fe8f8ffa7bbdc1575f6efb4e39d6d119dfd1ad9fc675266133e466424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f1b97fe8f8ffa7bbdc1575f6efb4e39d6d119dfd1ad9fc675266133e466424->enter($__internal_f0f1b97fe8f8ffa7bbdc1575f6efb4e39d6d119dfd1ad9fc675266133e466424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/object/lookup-getter.js"));

        // line 1
        echo "require('../../modules/es7.object.lookup-setter');
module.exports = require('../../modules/_core').Object.__lookupGetter__;
";
        
        $__internal_f0f1b97fe8f8ffa7bbdc1575f6efb4e39d6d119dfd1ad9fc675266133e466424->leave($__internal_f0f1b97fe8f8ffa7bbdc1575f6efb4e39d6d119dfd1ad9fc675266133e466424_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/object/lookup-getter.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.object.lookup-setter');
module.exports = require('../../modules/_core').Object.__lookupGetter__;
", "node_modules/core-js/fn/object/lookup-getter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/object/lookup-getter.js");
    }
}
