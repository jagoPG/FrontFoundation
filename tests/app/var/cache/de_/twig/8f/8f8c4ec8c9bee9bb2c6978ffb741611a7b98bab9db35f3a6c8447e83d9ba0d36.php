<?php

/* node_modules/babel-runtime/core-js.js */
class __TwigTemplate_f67b332ee57ebfee10640a6d18bcb02765e2d83eb7631147fdb6159bd17bfd73 extends Twig_Template
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
        $__internal_98334a6357b86d709840018418c5f57a486d7c9502827b4105d0cf010746b587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98334a6357b86d709840018418c5f57a486d7c9502827b4105d0cf010746b587->enter($__internal_98334a6357b86d709840018418c5f57a486d7c9502827b4105d0cf010746b587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/core-js.js"));

        // line 1
        echo "module.exports = {
  \"default\": require(\"core-js/library\"),
  __esModule: true
};
";
        
        $__internal_98334a6357b86d709840018418c5f57a486d7c9502827b4105d0cf010746b587->leave($__internal_98334a6357b86d709840018418c5f57a486d7c9502827b4105d0cf010746b587_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/core-js.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = {
  \"default\": require(\"core-js/library\"),
  __esModule: true
};
", "node_modules/babel-runtime/core-js.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/core-js.js");
    }
}
