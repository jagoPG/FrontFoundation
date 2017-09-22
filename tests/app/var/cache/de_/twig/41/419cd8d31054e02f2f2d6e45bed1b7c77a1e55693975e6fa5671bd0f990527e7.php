<?php

/* node_modules/core-js/library/modules/es6.typed.uint8-clamped-array.js */
class __TwigTemplate_daaf028c05b96369af1380768c1592f513edf1f2e071e80142dfc17e252a0e61 extends Twig_Template
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
        $__internal_f6f494013145843b15763b3523369d8c488e6ae8653e9f77a91c3e41b9db80a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f494013145843b15763b3523369d8c488e6ae8653e9f77a91c3e41b9db80a8->enter($__internal_f6f494013145843b15763b3523369d8c488e6ae8653e9f77a91c3e41b9db80a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.typed.uint8-clamped-array.js"));

        // line 1
        echo "require('./_typed-array')('Uint8', 1, function (init) {
  return function Uint8ClampedArray(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
}, true);
";
        
        $__internal_f6f494013145843b15763b3523369d8c488e6ae8653e9f77a91c3e41b9db80a8->leave($__internal_f6f494013145843b15763b3523369d8c488e6ae8653e9f77a91c3e41b9db80a8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.typed.uint8-clamped-array.js";
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
", "node_modules/core-js/library/modules/es6.typed.uint8-clamped-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.typed.uint8-clamped-array.js");
    }
}
