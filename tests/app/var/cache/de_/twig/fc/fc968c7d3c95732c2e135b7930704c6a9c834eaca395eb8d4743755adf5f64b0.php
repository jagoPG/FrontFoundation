<?php

/* node_modules/core-js/modules/_to-integer.js */
class __TwigTemplate_aca5747c38f1d9ebdbe147ea093908d731d307c6ca76915e053e0115531fab5d extends Twig_Template
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
        $__internal_115bc33b92787047b55d6f50440eba5225c3a7f5c29c70bfd50b24aab8aaa143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115bc33b92787047b55d6f50440eba5225c3a7f5c29c70bfd50b24aab8aaa143->enter($__internal_115bc33b92787047b55d6f50440eba5225c3a7f5c29c70bfd50b24aab8aaa143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_to-integer.js"));

        // line 1
        echo "// 7.1.4 ToInteger
var ceil = Math.ceil;
var floor = Math.floor;
module.exports = function (it) {
  return isNaN(it = +it) ? 0 : (it > 0 ? floor : ceil)(it);
};
";
        
        $__internal_115bc33b92787047b55d6f50440eba5225c3a7f5c29c70bfd50b24aab8aaa143->leave($__internal_115bc33b92787047b55d6f50440eba5225c3a7f5c29c70bfd50b24aab8aaa143_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_to-integer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 7.1.4 ToInteger
var ceil = Math.ceil;
var floor = Math.floor;
module.exports = function (it) {
  return isNaN(it = +it) ? 0 : (it > 0 ? floor : ceil)(it);
};
", "node_modules/core-js/modules/_to-integer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_to-integer.js");
    }
}
