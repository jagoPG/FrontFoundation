<?php

/* node_modules/core-js/fn/object/is-object.js */
class __TwigTemplate_af3689fbabd58a82b292262add2ed3d4f12307f19faf643e0d4899df1cd9baaf extends Twig_Template
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
        $__internal_3b77c266b91c92b85284da492cceacda100246625bc0a4abcf9cd9538dbd83d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b77c266b91c92b85284da492cceacda100246625bc0a4abcf9cd9538dbd83d0->enter($__internal_3b77c266b91c92b85284da492cceacda100246625bc0a4abcf9cd9538dbd83d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/object/is-object.js"));

        // line 1
        echo "require('../../modules/core.object.is-object');
module.exports = require('../../modules/_core').Object.isObject;
";
        
        $__internal_3b77c266b91c92b85284da492cceacda100246625bc0a4abcf9cd9538dbd83d0->leave($__internal_3b77c266b91c92b85284da492cceacda100246625bc0a4abcf9cd9538dbd83d0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/object/is-object.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/core.object.is-object');
module.exports = require('../../modules/_core').Object.isObject;
", "node_modules/core-js/fn/object/is-object.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/object/is-object.js");
    }
}
