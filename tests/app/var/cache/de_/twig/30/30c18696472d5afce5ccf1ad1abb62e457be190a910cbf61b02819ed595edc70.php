<?php

/* node_modules/core-js/library/fn/reflect/get.js */
class __TwigTemplate_dffa505e0dfe3b79e280701067a4109faa6f1bc309e76c8b98b92154cdd110b3 extends Twig_Template
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
        $__internal_7267e6dc73a4b5952276b5de958982b19343f3124d68ba5278e8bbf5444841e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7267e6dc73a4b5952276b5de958982b19343f3124d68ba5278e8bbf5444841e9->enter($__internal_7267e6dc73a4b5952276b5de958982b19343f3124d68ba5278e8bbf5444841e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/reflect/get.js"));

        // line 1
        echo "require('../../modules/es6.reflect.get');
module.exports = require('../../modules/_core').Reflect.get;
";
        
        $__internal_7267e6dc73a4b5952276b5de958982b19343f3124d68ba5278e8bbf5444841e9->leave($__internal_7267e6dc73a4b5952276b5de958982b19343f3124d68ba5278e8bbf5444841e9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/reflect/get.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.reflect.get');
module.exports = require('../../modules/_core').Reflect.get;
", "node_modules/core-js/library/fn/reflect/get.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/reflect/get.js");
    }
}
