<?php

/* node_modules/core-js/library/modules/_same-value.js */
class __TwigTemplate_16e8bd85f2696ea872c0fa8c21ab8fe63863d2c927a747db9777b5722b88cd95 extends Twig_Template
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
        $__internal_7351dc75669e157d5ec1539c52ffedff53f6119037afd879ecd2c158d99d1cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7351dc75669e157d5ec1539c52ffedff53f6119037afd879ecd2c158d99d1cb4->enter($__internal_7351dc75669e157d5ec1539c52ffedff53f6119037afd879ecd2c158d99d1cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_same-value.js"));

        // line 1
        echo "// 7.2.9 SameValue(x, y)
module.exports = Object.is || function is(x, y) {
  // eslint-disable-next-line no-self-compare
  return x === y ? x !== 0 || 1 / x === 1 / y : x != x && y != y;
};
";
        
        $__internal_7351dc75669e157d5ec1539c52ffedff53f6119037afd879ecd2c158d99d1cb4->leave($__internal_7351dc75669e157d5ec1539c52ffedff53f6119037afd879ecd2c158d99d1cb4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_same-value.js";
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
", "node_modules/core-js/library/modules/_same-value.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_same-value.js");
    }
}
