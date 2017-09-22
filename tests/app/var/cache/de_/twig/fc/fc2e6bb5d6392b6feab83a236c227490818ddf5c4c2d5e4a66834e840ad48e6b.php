<?php

/* node_modules/core-js/library/modules/es6.typed.uint8-array.js */
class __TwigTemplate_e2bfc3b69331e1b170d95715510ccecb271af02bc23ffc5d7e62f3fc1dfd60ad extends Twig_Template
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
        $__internal_2d8fb3f0ad19db9525dbcc3564addac93268dd4735476ff95fc71827b8b1d770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8fb3f0ad19db9525dbcc3564addac93268dd4735476ff95fc71827b8b1d770->enter($__internal_2d8fb3f0ad19db9525dbcc3564addac93268dd4735476ff95fc71827b8b1d770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.typed.uint8-array.js"));

        // line 1
        echo "require('./_typed-array')('Uint8', 1, function (init) {
  return function Uint8Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
";
        
        $__internal_2d8fb3f0ad19db9525dbcc3564addac93268dd4735476ff95fc71827b8b1d770->leave($__internal_2d8fb3f0ad19db9525dbcc3564addac93268dd4735476ff95fc71827b8b1d770_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.typed.uint8-array.js";
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
", "node_modules/core-js/library/modules/es6.typed.uint8-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.typed.uint8-array.js");
    }
}
