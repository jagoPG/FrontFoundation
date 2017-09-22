<?php

/* node_modules/core-js/fn/array/virtual/for-each.js */
class __TwigTemplate_8d1deb8fe9981c1872eeef988189c94cedf2df9bdc4decd4f5ff2e12274b66e5 extends Twig_Template
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
        $__internal_c72463454b39184a36458ed50e7b6bc839a92af012ed10d6efbeeb90aad37650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72463454b39184a36458ed50e7b6bc839a92af012ed10d6efbeeb90aad37650->enter($__internal_c72463454b39184a36458ed50e7b6bc839a92af012ed10d6efbeeb90aad37650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/array/virtual/for-each.js"));

        // line 1
        echo "require('../../../modules/es6.array.for-each');
module.exports = require('../../../modules/_entry-virtual')('Array').forEach;
";
        
        $__internal_c72463454b39184a36458ed50e7b6bc839a92af012ed10d6efbeeb90aad37650->leave($__internal_c72463454b39184a36458ed50e7b6bc839a92af012ed10d6efbeeb90aad37650_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/array/virtual/for-each.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.array.for-each');
module.exports = require('../../../modules/_entry-virtual')('Array').forEach;
", "node_modules/core-js/fn/array/virtual/for-each.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/array/virtual/for-each.js");
    }
}
