<?php

/* node_modules/core-js/modules/es6.typed.float64-array.js */
class __TwigTemplate_109e7fe24a9e9f96cdbbf97ae3521bb1ea8888c4a413b4b600b214285cb7b2f0 extends Twig_Template
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
        $__internal_b0b626e6f84294d24a899f0c5585febf0d8c7feed26aa9d7e3e98a8a3e4b9c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b626e6f84294d24a899f0c5585febf0d8c7feed26aa9d7e3e98a8a3e4b9c0b->enter($__internal_b0b626e6f84294d24a899f0c5585febf0d8c7feed26aa9d7e3e98a8a3e4b9c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.typed.float64-array.js"));

        // line 1
        echo "require('./_typed-array')('Float64', 8, function (init) {
  return function Float64Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
";
        
        $__internal_b0b626e6f84294d24a899f0c5585febf0d8c7feed26aa9d7e3e98a8a3e4b9c0b->leave($__internal_b0b626e6f84294d24a899f0c5585febf0d8c7feed26aa9d7e3e98a8a3e4b9c0b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.typed.float64-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('./_typed-array')('Float64', 8, function (init) {
  return function Float64Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
", "node_modules/core-js/modules/es6.typed.float64-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.typed.float64-array.js");
    }
}
