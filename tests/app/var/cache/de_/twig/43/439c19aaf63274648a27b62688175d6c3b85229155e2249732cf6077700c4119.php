<?php

/* node_modules/core-js/modules/es6.typed.uint16-array.js */
class __TwigTemplate_45b82ecef02db83324fc5cfbf6fe5b2b68e40ec31c1272646fb911a72bf0b0c5 extends Twig_Template
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
        $__internal_b507b52f7c56093696fd373ef43f492f38dac1fa5c110ce42e595f7b6f9bcdc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b507b52f7c56093696fd373ef43f492f38dac1fa5c110ce42e595f7b6f9bcdc4->enter($__internal_b507b52f7c56093696fd373ef43f492f38dac1fa5c110ce42e595f7b6f9bcdc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.typed.uint16-array.js"));

        // line 1
        echo "require('./_typed-array')('Uint16', 2, function (init) {
  return function Uint16Array(data, byteOffset, length) {
    return init(this, data, byteOffset, length);
  };
});
";
        
        $__internal_b507b52f7c56093696fd373ef43f492f38dac1fa5c110ce42e595f7b6f9bcdc4->leave($__internal_b507b52f7c56093696fd373ef43f492f38dac1fa5c110ce42e595f7b6f9bcdc4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.typed.uint16-array.js";
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
", "node_modules/core-js/modules/es6.typed.uint16-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.typed.uint16-array.js");
    }
}
