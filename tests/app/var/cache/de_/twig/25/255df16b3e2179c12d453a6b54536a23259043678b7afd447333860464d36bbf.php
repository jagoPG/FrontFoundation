<?php

/* node_modules/core-js/modules/_defined.js */
class __TwigTemplate_55d800ed41f99a2210c1912bd696ee35ff7bb15e93873f71f1c70cc78b9a181e extends Twig_Template
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
        $__internal_2ec4bc5eeb9beb075ab7023d6118fe6e2d996cf284128b099c3dc5231bebd1e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec4bc5eeb9beb075ab7023d6118fe6e2d996cf284128b099c3dc5231bebd1e0->enter($__internal_2ec4bc5eeb9beb075ab7023d6118fe6e2d996cf284128b099c3dc5231bebd1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_defined.js"));

        // line 1
        echo "// 7.2.1 RequireObjectCoercible(argument)
module.exports = function (it) {
  if (it == undefined) throw TypeError(\"Can't call method on  \" + it);
  return it;
};
";
        
        $__internal_2ec4bc5eeb9beb075ab7023d6118fe6e2d996cf284128b099c3dc5231bebd1e0->leave($__internal_2ec4bc5eeb9beb075ab7023d6118fe6e2d996cf284128b099c3dc5231bebd1e0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_defined.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 7.2.1 RequireObjectCoercible(argument)
module.exports = function (it) {
  if (it == undefined) throw TypeError(\"Can't call method on  \" + it);
  return it;
};
", "node_modules/core-js/modules/_defined.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_defined.js");
    }
}
