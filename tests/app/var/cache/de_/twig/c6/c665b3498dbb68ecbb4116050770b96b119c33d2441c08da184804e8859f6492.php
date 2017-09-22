<?php

/* node_modules/core-js/modules/es6.typed.uint8-array.js */
class __TwigTemplate_a27cc07796830bd9558b2ef29417273146b3c58cb218a0a36f1d9ae522371db3 extends Twig_Template
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
        $__internal_cd5f1e9a1854e5b9a6aceb4c80c4ca102332fde8eb908638464de21db2249a94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5f1e9a1854e5b9a6aceb4c80c4ca102332fde8eb908638464de21db2249a94->enter($__internal_cd5f1e9a1854e5b9a6aceb4c80c4ca102332fde8eb908638464de21db2249a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.typed.uint8-array.js"));

        // line 1
        echo "require('./_typed-array')('Uint8', 1, function (init) {
  return function Uint8Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
";
        
        $__internal_cd5f1e9a1854e5b9a6aceb4c80c4ca102332fde8eb908638464de21db2249a94->leave($__internal_cd5f1e9a1854e5b9a6aceb4c80c4ca102332fde8eb908638464de21db2249a94_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.typed.uint8-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('./_typed-array')('Uint8', 1, function (init) {
  return function Uint8Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
", "node_modules/core-js/modules/es6.typed.uint8-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.typed.uint8-array.js");
    }
}
