<?php

/* node_modules/core-js/library/modules/es6.typed.uint16-array.js */
class __TwigTemplate_b4fd04e647333d7c140a0b42c3979e600a4776ee6b8137d416831552bc4ce3b7 extends Twig_Template
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
        $__internal_104e0d7416a2905ae9cd3451fd000a847fedda3b796df0a6759e99f0e182d87b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104e0d7416a2905ae9cd3451fd000a847fedda3b796df0a6759e99f0e182d87b->enter($__internal_104e0d7416a2905ae9cd3451fd000a847fedda3b796df0a6759e99f0e182d87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.typed.uint16-array.js"));

        // line 1
        echo "require('./_typed-array')('Uint16', 2, function (init) {
  return function Uint16Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
";
        
        $__internal_104e0d7416a2905ae9cd3451fd000a847fedda3b796df0a6759e99f0e182d87b->leave($__internal_104e0d7416a2905ae9cd3451fd000a847fedda3b796df0a6759e99f0e182d87b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.typed.uint16-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('./_typed-array')('Uint16', 2, function (init) {
  return function Uint16Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
", "node_modules/core-js/library/modules/es6.typed.uint16-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.typed.uint16-array.js");
    }
}
