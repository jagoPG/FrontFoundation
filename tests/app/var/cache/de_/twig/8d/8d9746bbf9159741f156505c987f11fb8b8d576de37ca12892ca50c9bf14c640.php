<?php

/* node_modules/core-js/library/modules/_array-species-create.js */
class __TwigTemplate_3c14e14dd05adb86779ebbd3ad320416900a04e8f1a5bc70abdfd28221a75b47 extends Twig_Template
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
        $__internal_b53272cd2692d9e4e4fa7931a9a571765bd8b8c04c03074f0117dbf2e54e4999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b53272cd2692d9e4e4fa7931a9a571765bd8b8c04c03074f0117dbf2e54e4999->enter($__internal_b53272cd2692d9e4e4fa7931a9a571765bd8b8c04c03074f0117dbf2e54e4999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_array-species-create.js"));

        // line 1
        echo "// 9.4.2.3 ArraySpeciesCreate(originalArray, length)
var speciesConstructor = require('./_array-species-constructor');

module.exports = function (original, length) {
  return new (speciesConstructor(original))(length);
};
";
        
        $__internal_b53272cd2692d9e4e4fa7931a9a571765bd8b8c04c03074f0117dbf2e54e4999->leave($__internal_b53272cd2692d9e4e4fa7931a9a571765bd8b8c04c03074f0117dbf2e54e4999_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_array-species-create.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 9.4.2.3 ArraySpeciesCreate(originalArray, length)
var speciesConstructor = require('./_array-species-constructor');

module.exports = function (original, length) {
  return new (speciesConstructor(original))(length);
};
", "node_modules/core-js/library/modules/_array-species-create.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_array-species-create.js");
    }
}
