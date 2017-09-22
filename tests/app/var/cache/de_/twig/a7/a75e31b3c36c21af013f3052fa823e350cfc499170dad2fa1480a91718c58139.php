<?php

/* node_modules/core-js/library/modules/es6.typed.float64-array.js */
class __TwigTemplate_23a507f1779e0f6eee7576572c2565924ec73a7ab11ca219aef4c19178704647 extends Twig_Template
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
        $__internal_d35e0668c1e32ffdda6c82e300d48c737e68c6085b3fc9006df3bf67a1adc04e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35e0668c1e32ffdda6c82e300d48c737e68c6085b3fc9006df3bf67a1adc04e->enter($__internal_d35e0668c1e32ffdda6c82e300d48c737e68c6085b3fc9006df3bf67a1adc04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.typed.float64-array.js"));

        // line 1
        echo "require('./_typed-array')('Float64', 8, function (init) {
  return function Float64Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
";
        
        $__internal_d35e0668c1e32ffdda6c82e300d48c737e68c6085b3fc9006df3bf67a1adc04e->leave($__internal_d35e0668c1e32ffdda6c82e300d48c737e68c6085b3fc9006df3bf67a1adc04e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.typed.float64-array.js";
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
", "node_modules/core-js/library/modules/es6.typed.float64-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.typed.float64-array.js");
    }
}
