<?php

/* node_modules/fsevents/node_modules/isarray/index.js */
class __TwigTemplate_a4f86388ba04b38ff7141273b8df93a917052467b1bd2ae8b658ea0a9dcc031d extends Twig_Template
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
        $__internal_32e89b9b40619411764836873e0e347063ae95141c9b2e844f736b2cc04ea427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e89b9b40619411764836873e0e347063ae95141c9b2e844f736b2cc04ea427->enter($__internal_32e89b9b40619411764836873e0e347063ae95141c9b2e844f736b2cc04ea427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/isarray/index.js"));

        // line 1
        echo "var toString = {}.toString;

module.exports = Array.isArray || function (arr) {
  return toString.call(arr) == '[object Array]';
};
";
        
        $__internal_32e89b9b40619411764836873e0e347063ae95141c9b2e844f736b2cc04ea427->leave($__internal_32e89b9b40619411764836873e0e347063ae95141c9b2e844f736b2cc04ea427_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/isarray/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var toString = {}.toString;

module.exports = Array.isArray || function (arr) {
  return toString.call(arr) == '[object Array]';
};
", "node_modules/fsevents/node_modules/isarray/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/isarray/index.js");
    }
}
