<?php

/* node_modules/core-js/library/fn/asap.js */
class __TwigTemplate_d5176c8e5ebd4a0706f9021ff65227d3f5238d388d8868e1a0a42375bf610621 extends Twig_Template
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
        $__internal_ea1720fad2046bae0de4dee577797d0665e52665bf2094752f16a47c0dbbb6fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1720fad2046bae0de4dee577797d0665e52665bf2094752f16a47c0dbbb6fa->enter($__internal_ea1720fad2046bae0de4dee577797d0665e52665bf2094752f16a47c0dbbb6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/asap.js"));

        // line 1
        echo "require('../modules/es7.asap');
module.exports = require('../modules/_core').asap;
";
        
        $__internal_ea1720fad2046bae0de4dee577797d0665e52665bf2094752f16a47c0dbbb6fa->leave($__internal_ea1720fad2046bae0de4dee577797d0665e52665bf2094752f16a47c0dbbb6fa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/asap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.asap');
module.exports = require('../modules/_core').asap;
", "node_modules/core-js/library/fn/asap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/asap.js");
    }
}
