<?php

/* node_modules/core-js/library/modules/_a-number-value.js */
class __TwigTemplate_b8fe6b748f7b45de4025a7db83438b4805699bf6868559f480094d64a344d9ed extends Twig_Template
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
        $__internal_39328780aae19ee164d934b7bbdf170b10416a8feb7e06f610764b39b7c52ebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39328780aae19ee164d934b7bbdf170b10416a8feb7e06f610764b39b7c52ebf->enter($__internal_39328780aae19ee164d934b7bbdf170b10416a8feb7e06f610764b39b7c52ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_a-number-value.js"));

        // line 1
        echo "var cof = require('./_cof');
module.exports = function (it, msg) {
  if (typeof it != 'number' && cof(it) != 'Number') throw TypeError(msg);
  return +it;
};
";
        
        $__internal_39328780aae19ee164d934b7bbdf170b10416a8feb7e06f610764b39b7c52ebf->leave($__internal_39328780aae19ee164d934b7bbdf170b10416a8feb7e06f610764b39b7c52ebf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_a-number-value.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var cof = require('./_cof');
module.exports = function (it, msg) {
  if (typeof it != 'number' && cof(it) != 'Number') throw TypeError(msg);
  return +it;
};
", "node_modules/core-js/library/modules/_a-number-value.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_a-number-value.js");
    }
}
