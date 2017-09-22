<?php

/* node_modules/core-js/library/modules/es6.typed.int8-array.js */
class __TwigTemplate_c035a66d902c99c30cc6e11603a57f56e90d9a69213aaa643fb5e659a230a465 extends Twig_Template
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
        $__internal_02173e98b14226bff06adfdc2e0767d824198aa4f1cc6f7c65024f689dc686e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02173e98b14226bff06adfdc2e0767d824198aa4f1cc6f7c65024f689dc686e5->enter($__internal_02173e98b14226bff06adfdc2e0767d824198aa4f1cc6f7c65024f689dc686e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.typed.int8-array.js"));

        // line 1
        echo "require('./_typed-array')('Int8', 1, function (init) {
  return function Int8Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
";
        
        $__internal_02173e98b14226bff06adfdc2e0767d824198aa4f1cc6f7c65024f689dc686e5->leave($__internal_02173e98b14226bff06adfdc2e0767d824198aa4f1cc6f7c65024f689dc686e5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.typed.int8-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('./_typed-array')('Int8', 1, function (init) {
  return function Int8Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
", "node_modules/core-js/library/modules/es6.typed.int8-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.typed.int8-array.js");
    }
}
