<?php

/* node_modules/core-js/modules/es6.typed.float32-array.js */
class __TwigTemplate_cdacec7387c135ca149d5f6a1b06e8b319c96c5df079a0c3a916ded97a106221 extends Twig_Template
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
        $__internal_75a74643d87c5e1827d10e181e2a7465630de10ecc0287e1120206c0f06ab76c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75a74643d87c5e1827d10e181e2a7465630de10ecc0287e1120206c0f06ab76c->enter($__internal_75a74643d87c5e1827d10e181e2a7465630de10ecc0287e1120206c0f06ab76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.typed.float32-array.js"));

        // line 1
        echo "require('./_typed-array')('Float32', 4, function (init) {
  return function Float32Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
";
        
        $__internal_75a74643d87c5e1827d10e181e2a7465630de10ecc0287e1120206c0f06ab76c->leave($__internal_75a74643d87c5e1827d10e181e2a7465630de10ecc0287e1120206c0f06ab76c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.typed.float32-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('./_typed-array')('Float32', 4, function (init) {
  return function Float32Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
", "node_modules/core-js/modules/es6.typed.float32-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.typed.float32-array.js");
    }
}
