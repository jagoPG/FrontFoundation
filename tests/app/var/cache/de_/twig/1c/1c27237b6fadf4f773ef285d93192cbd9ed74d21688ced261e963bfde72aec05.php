<?php

/* node_modules/core-js/library/modules/es6.typed.uint32-array.js */
class __TwigTemplate_2a8a11573d250468d07d6da3da58f74b591a6e9736ce84684ccc570d285d2488 extends Twig_Template
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
        $__internal_4c778c57cf2face7d98ba901da20ab6f052aa3139d1cdf5aa8171ce5b9712e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c778c57cf2face7d98ba901da20ab6f052aa3139d1cdf5aa8171ce5b9712e6d->enter($__internal_4c778c57cf2face7d98ba901da20ab6f052aa3139d1cdf5aa8171ce5b9712e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.typed.uint32-array.js"));

        // line 1
        echo "require('./_typed-array')('Uint32', 4, function (init) {
  return function Uint32Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
";
        
        $__internal_4c778c57cf2face7d98ba901da20ab6f052aa3139d1cdf5aa8171ce5b9712e6d->leave($__internal_4c778c57cf2face7d98ba901da20ab6f052aa3139d1cdf5aa8171ce5b9712e6d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.typed.uint32-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('./_typed-array')('Uint32', 4, function (init) {
  return function Uint32Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
", "node_modules/core-js/library/modules/es6.typed.uint32-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.typed.uint32-array.js");
    }
}
