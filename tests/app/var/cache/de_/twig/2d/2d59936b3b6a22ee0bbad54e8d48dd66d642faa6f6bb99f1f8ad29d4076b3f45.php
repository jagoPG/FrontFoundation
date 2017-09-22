<?php

/* node_modules/core-js/modules/es6.typed.uint32-array.js */
class __TwigTemplate_1f287e6d13aba8d488978d47f64494bc1bd11b77f5c4212eb76414261e0c2526 extends Twig_Template
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
        $__internal_b75478e7c7f21a53ad2aabd437421ce49e6cf01189e27ffd76d5b86f0dcded60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b75478e7c7f21a53ad2aabd437421ce49e6cf01189e27ffd76d5b86f0dcded60->enter($__internal_b75478e7c7f21a53ad2aabd437421ce49e6cf01189e27ffd76d5b86f0dcded60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.typed.uint32-array.js"));

        // line 1
        echo "require('./_typed-array')('Uint32', 4, function (init) {
  return function Uint32Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
";
        
        $__internal_b75478e7c7f21a53ad2aabd437421ce49e6cf01189e27ffd76d5b86f0dcded60->leave($__internal_b75478e7c7f21a53ad2aabd437421ce49e6cf01189e27ffd76d5b86f0dcded60_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.typed.uint32-array.js";
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
", "node_modules/core-js/modules/es6.typed.uint32-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.typed.uint32-array.js");
    }
}
