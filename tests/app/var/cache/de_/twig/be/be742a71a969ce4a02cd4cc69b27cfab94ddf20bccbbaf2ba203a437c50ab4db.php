<?php

/* node_modules/core-js/library/modules/_to-integer.js */
class __TwigTemplate_4c60495c4239197422015a08869ef9951ef235ee568f9b3b836b81d9c8928c87 extends Twig_Template
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
        $__internal_0f9122f49c12b9ad30e90b1579fff00d7f47095a0115b9bbae5a6fb5bae245c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f9122f49c12b9ad30e90b1579fff00d7f47095a0115b9bbae5a6fb5bae245c7->enter($__internal_0f9122f49c12b9ad30e90b1579fff00d7f47095a0115b9bbae5a6fb5bae245c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_to-integer.js"));

        // line 1
        echo "// 7.1.4 ToInteger
var ceil = Math.ceil;
var floor = Math.floor;
module.exports = function (it) {
  return isNaN(it = +it) ? 0 : (it > 0 ? floor : ceil)(it);
};
";
        
        $__internal_0f9122f49c12b9ad30e90b1579fff00d7f47095a0115b9bbae5a6fb5bae245c7->leave($__internal_0f9122f49c12b9ad30e90b1579fff00d7f47095a0115b9bbae5a6fb5bae245c7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_to-integer.js";
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
", "node_modules/core-js/library/modules/_to-integer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_to-integer.js");
    }
}
