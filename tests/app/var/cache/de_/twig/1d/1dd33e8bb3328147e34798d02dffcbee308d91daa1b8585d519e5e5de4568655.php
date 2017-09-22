<?php

/* node_modules/core-js/library/fn/array/concat.js */
class __TwigTemplate_d0454c5405f1a24034e0d3abd2fe5e98bf591d31d3653f9e3ad67fbbfddc8c54 extends Twig_Template
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
        $__internal_27ed5d40a550d8bde08567d0b4622069912a9d7c7a1bc39cd68227470e81780e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ed5d40a550d8bde08567d0b4622069912a9d7c7a1bc39cd68227470e81780e->enter($__internal_27ed5d40a550d8bde08567d0b4622069912a9d7c7a1bc39cd68227470e81780e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/concat.js"));

        // line 1
        echo "// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.concat, arguments);
};
";
        
        $__internal_27ed5d40a550d8bde08567d0b4622069912a9d7c7a1bc39cd68227470e81780e->leave($__internal_27ed5d40a550d8bde08567d0b4622069912a9d7c7a1bc39cd68227470e81780e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/concat.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.concat, arguments);
};
", "node_modules/core-js/library/fn/array/concat.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/concat.js");
    }
}
