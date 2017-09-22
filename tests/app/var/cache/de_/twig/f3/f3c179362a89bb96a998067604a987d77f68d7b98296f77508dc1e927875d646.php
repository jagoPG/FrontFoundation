<?php

/* node_modules/core-js/library/fn/array/includes.js */
class __TwigTemplate_2515d00ec67f078e23afcd1c0e6e758b03ac372b2cc0460843223bc4ae8e95cc extends Twig_Template
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
        $__internal_044cf209f3900bf2dee1d16fa260845652e58ac77234a75dc1ebda896a63dd94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044cf209f3900bf2dee1d16fa260845652e58ac77234a75dc1ebda896a63dd94->enter($__internal_044cf209f3900bf2dee1d16fa260845652e58ac77234a75dc1ebda896a63dd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/includes.js"));

        // line 1
        echo "require('../../modules/es7.array.includes');
module.exports = require('../../modules/_core').Array.includes;
";
        
        $__internal_044cf209f3900bf2dee1d16fa260845652e58ac77234a75dc1ebda896a63dd94->leave($__internal_044cf209f3900bf2dee1d16fa260845652e58ac77234a75dc1ebda896a63dd94_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/includes.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.array.includes');
module.exports = require('../../modules/_core').Array.includes;
", "node_modules/core-js/library/fn/array/includes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/includes.js");
    }
}
