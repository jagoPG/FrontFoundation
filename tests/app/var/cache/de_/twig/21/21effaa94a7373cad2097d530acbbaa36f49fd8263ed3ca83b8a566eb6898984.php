<?php

/* node_modules/core-js/modules/es6.typed.int16-array.js */
class __TwigTemplate_e63739a847db987ef184c06df294d701c6387574619817c53b93793daef439ab extends Twig_Template
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
        $__internal_a5e4e869243543e2aae26e208d683bd057e7839ce2d6f3b38ad92534acaa9049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e4e869243543e2aae26e208d683bd057e7839ce2d6f3b38ad92534acaa9049->enter($__internal_a5e4e869243543e2aae26e208d683bd057e7839ce2d6f3b38ad92534acaa9049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.typed.int16-array.js"));

        // line 1
        echo "require('./_typed-array')('Int16', 2, function (init) {
  return function Int16Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
";
        
        $__internal_a5e4e869243543e2aae26e208d683bd057e7839ce2d6f3b38ad92534acaa9049->leave($__internal_a5e4e869243543e2aae26e208d683bd057e7839ce2d6f3b38ad92534acaa9049_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.typed.int16-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('./_typed-array')('Int16', 2, function (init) {
  return function Int16Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
", "node_modules/core-js/modules/es6.typed.int16-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.typed.int16-array.js");
    }
}
