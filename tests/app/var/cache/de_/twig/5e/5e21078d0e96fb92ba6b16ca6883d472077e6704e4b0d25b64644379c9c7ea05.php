<?php

/* node_modules/core-js/library/fn/array/reverse.js */
class __TwigTemplate_b14fd2343ca306e88e6760cac72e57fe8f31f4c2f0244ea943c7985437988dca extends Twig_Template
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
        $__internal_40dcb7d4adfc2c8e77baa877f4e6ec78c724af81150ce5f0b84caea677be7433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40dcb7d4adfc2c8e77baa877f4e6ec78c724af81150ce5f0b84caea677be7433->enter($__internal_40dcb7d4adfc2c8e77baa877f4e6ec78c724af81150ce5f0b84caea677be7433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/reverse.js"));

        // line 1
        echo "// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.reverse, arguments);
};
";
        
        $__internal_40dcb7d4adfc2c8e77baa877f4e6ec78c724af81150ce5f0b84caea677be7433->leave($__internal_40dcb7d4adfc2c8e77baa877f4e6ec78c724af81150ce5f0b84caea677be7433_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/reverse.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.reverse, arguments);
};
", "node_modules/core-js/library/fn/array/reverse.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/reverse.js");
    }
}
