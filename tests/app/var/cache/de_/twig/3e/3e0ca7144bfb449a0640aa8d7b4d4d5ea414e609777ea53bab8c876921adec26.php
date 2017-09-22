<?php

/* node_modules/core-js/fn/array/unshift.js */
class __TwigTemplate_920d77089988d4f8a5e88fecda0c58bcb1f2b9f5686732b1800c3eac93495222 extends Twig_Template
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
        $__internal_2776f46bdfbb6a46f331b432e59bffe3894728dae56a1580095fe04578da636c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2776f46bdfbb6a46f331b432e59bffe3894728dae56a1580095fe04578da636c->enter($__internal_2776f46bdfbb6a46f331b432e59bffe3894728dae56a1580095fe04578da636c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/array/unshift.js"));

        // line 1
        echo "// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.unshift, arguments);
};
";
        
        $__internal_2776f46bdfbb6a46f331b432e59bffe3894728dae56a1580095fe04578da636c->leave($__internal_2776f46bdfbb6a46f331b432e59bffe3894728dae56a1580095fe04578da636c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/array/unshift.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.unshift, arguments);
};
", "node_modules/core-js/fn/array/unshift.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/array/unshift.js");
    }
}
