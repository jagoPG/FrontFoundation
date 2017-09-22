<?php

/* node_modules/core-js/library/fn/array/shift.js */
class __TwigTemplate_128b215de804d5c5ddca217e0ccd2bf848e389842407cf25141a2e55fb4119f3 extends Twig_Template
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
        $__internal_2a0cd2591090dfe3517e19ec6eca14fedcb5b1f3d6411dd81739f35ea9ce935c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a0cd2591090dfe3517e19ec6eca14fedcb5b1f3d6411dd81739f35ea9ce935c->enter($__internal_2a0cd2591090dfe3517e19ec6eca14fedcb5b1f3d6411dd81739f35ea9ce935c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/shift.js"));

        // line 1
        echo "// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.shift, arguments);
};
";
        
        $__internal_2a0cd2591090dfe3517e19ec6eca14fedcb5b1f3d6411dd81739f35ea9ce935c->leave($__internal_2a0cd2591090dfe3517e19ec6eca14fedcb5b1f3d6411dd81739f35ea9ce935c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/shift.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.shift, arguments);
};
", "node_modules/core-js/library/fn/array/shift.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/shift.js");
    }
}
