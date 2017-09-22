<?php

/* node_modules/core-js/modules/_array-species-create.js */
class __TwigTemplate_bb3c5b01965b2e25a32d7d3412c0c0780e7c3d9431a1a63e9bcbbf64a1ea4a41 extends Twig_Template
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
        $__internal_5be47c200396d12f30425b447811a2f666db58699619ab3241c525d00def9f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be47c200396d12f30425b447811a2f666db58699619ab3241c525d00def9f38->enter($__internal_5be47c200396d12f30425b447811a2f666db58699619ab3241c525d00def9f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_array-species-create.js"));

        // line 1
        echo "// 9.4.2.3 ArraySpeciesCreate(originalArray, length)
var speciesConstructor = require('./_array-species-constructor');

module.exports = function (original, length) {
  return new (speciesConstructor(original))(length);
};
";
        
        $__internal_5be47c200396d12f30425b447811a2f666db58699619ab3241c525d00def9f38->leave($__internal_5be47c200396d12f30425b447811a2f666db58699619ab3241c525d00def9f38_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_array-species-create.js";
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
", "node_modules/core-js/modules/_array-species-create.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_array-species-create.js");
    }
}
