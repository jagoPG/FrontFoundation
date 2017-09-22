<?php

/* node_modules/core-js/fn/array/shift.js */
class __TwigTemplate_93ac4317aeb46349db6db1ac07ec6b1dd35810e6f409d2729a857fe60d0b0385 extends Twig_Template
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
        $__internal_caac80863a896210ea3119c1c739db86aed7aa56783f9bf71531caef37abc3ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caac80863a896210ea3119c1c739db86aed7aa56783f9bf71531caef37abc3ba->enter($__internal_caac80863a896210ea3119c1c739db86aed7aa56783f9bf71531caef37abc3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/array/shift.js"));

        // line 1
        echo "// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.shift, arguments);
};
";
        
        $__internal_caac80863a896210ea3119c1c739db86aed7aa56783f9bf71531caef37abc3ba->leave($__internal_caac80863a896210ea3119c1c739db86aed7aa56783f9bf71531caef37abc3ba_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/array/shift.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.shift, arguments);
};
", "node_modules/core-js/fn/array/shift.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/array/shift.js");
    }
}
