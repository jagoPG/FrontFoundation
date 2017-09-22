<?php

/* node_modules/core-js/fn/math/radians.js */
class __TwigTemplate_2af97d069f09c56757d0d2bd24e2b2c5970ea28348b17daf438a92789dd803f7 extends Twig_Template
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
        $__internal_c474e2eeff1450c89d3abdee78ec6fc56c7c81b274c2fbca5b7189ca7eec95f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c474e2eeff1450c89d3abdee78ec6fc56c7c81b274c2fbca5b7189ca7eec95f3->enter($__internal_c474e2eeff1450c89d3abdee78ec6fc56c7c81b274c2fbca5b7189ca7eec95f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/math/radians.js"));

        // line 1
        echo "require('../../modules/es7.math.radians');
module.exports = require('../../modules/_core').Math.radians;
";
        
        $__internal_c474e2eeff1450c89d3abdee78ec6fc56c7c81b274c2fbca5b7189ca7eec95f3->leave($__internal_c474e2eeff1450c89d3abdee78ec6fc56c7c81b274c2fbca5b7189ca7eec95f3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/math/radians.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.math.radians');
module.exports = require('../../modules/_core').Math.radians;
", "node_modules/core-js/fn/math/radians.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/math/radians.js");
    }
}
