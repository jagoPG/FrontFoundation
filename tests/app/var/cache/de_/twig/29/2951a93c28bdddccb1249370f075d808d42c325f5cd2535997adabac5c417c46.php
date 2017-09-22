<?php

/* node_modules/core-js/modules/_same-value.js */
class __TwigTemplate_575a1e338f5b725dcfdcac110baf54087056d2e597e7554893ff9ae54715eb75 extends Twig_Template
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
        $__internal_898bb2611da659ac19c8c02442df784871fa0b048e5e4d1f1a4b63cffb82dde9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_898bb2611da659ac19c8c02442df784871fa0b048e5e4d1f1a4b63cffb82dde9->enter($__internal_898bb2611da659ac19c8c02442df784871fa0b048e5e4d1f1a4b63cffb82dde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_same-value.js"));

        // line 1
        echo "// 7.2.9 SameValue(x, y)
module.exports = Object.is || function is(x, y) {
  // eslint-disable-next-line no-self-compare
  return x === y ? x !== 0 || 1 / x === 1 / y : x != x && y != y;
};
";
        
        $__internal_898bb2611da659ac19c8c02442df784871fa0b048e5e4d1f1a4b63cffb82dde9->leave($__internal_898bb2611da659ac19c8c02442df784871fa0b048e5e4d1f1a4b63cffb82dde9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_same-value.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 7.2.9 SameValue(x, y)
module.exports = Object.is || function is(x, y) {
  // eslint-disable-next-line no-self-compare
  return x === y ? x !== 0 || 1 / x === 1 / y : x != x && y != y;
};
", "node_modules/core-js/modules/_same-value.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_same-value.js");
    }
}
