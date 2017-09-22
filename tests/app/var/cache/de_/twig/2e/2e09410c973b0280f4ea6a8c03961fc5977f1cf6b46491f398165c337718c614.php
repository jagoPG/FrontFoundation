<?php

/* node_modules/core-js/fn/array/splice.js */
class __TwigTemplate_5695ab027bf7740cba42b02f35f9b134d8bff006b974e27601433760a8f7f543 extends Twig_Template
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
        $__internal_f0d0504bd14d00644a45c6f69654ae44b82646459abba4b7828072997c0fa48a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d0504bd14d00644a45c6f69654ae44b82646459abba4b7828072997c0fa48a->enter($__internal_f0d0504bd14d00644a45c6f69654ae44b82646459abba4b7828072997c0fa48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/array/splice.js"));

        // line 1
        echo "// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.splice, arguments);
};
";
        
        $__internal_f0d0504bd14d00644a45c6f69654ae44b82646459abba4b7828072997c0fa48a->leave($__internal_f0d0504bd14d00644a45c6f69654ae44b82646459abba4b7828072997c0fa48a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/array/splice.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.splice, arguments);
};
", "node_modules/core-js/fn/array/splice.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/array/splice.js");
    }
}
