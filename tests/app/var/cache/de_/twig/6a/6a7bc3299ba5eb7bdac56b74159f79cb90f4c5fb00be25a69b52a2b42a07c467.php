<?php

/* node_modules/core-js/modules/es6.typed.uint8-clamped-array.js */
class __TwigTemplate_f8b296eb7d430ff4b50ef1cbc3413cc9dd68fe20370203a9cbd6a69088eb1cf5 extends Twig_Template
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
        $__internal_ac9a57bc7afb78eabab0060b29ecec1fbcbd3d8085bd0db2e990319e930ed958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9a57bc7afb78eabab0060b29ecec1fbcbd3d8085bd0db2e990319e930ed958->enter($__internal_ac9a57bc7afb78eabab0060b29ecec1fbcbd3d8085bd0db2e990319e930ed958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.typed.uint8-clamped-array.js"));

        // line 1
        echo "require('./_typed-array')('Uint8', 1, function (init) {
  return function Uint8ClampedArray(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
}, true);
";
        
        $__internal_ac9a57bc7afb78eabab0060b29ecec1fbcbd3d8085bd0db2e990319e930ed958->leave($__internal_ac9a57bc7afb78eabab0060b29ecec1fbcbd3d8085bd0db2e990319e930ed958_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.typed.uint8-clamped-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('./_typed-array')('Uint8', 1, function (init) {
  return function Uint8ClampedArray(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
}, true);
", "node_modules/core-js/modules/es6.typed.uint8-clamped-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.typed.uint8-clamped-array.js");
    }
}
