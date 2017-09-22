<?php

/* node_modules/core-js/fn/math/clamp.js */
class __TwigTemplate_1e7db2612b02ef848815cbb86d4db4adcd0e13e9d8389b5fb4efee271ece2c86 extends Twig_Template
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
        $__internal_655cba5a4004e2d8c41df624a1a2ded95001e4cc13366fa2ac58cc1fd42b5f3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655cba5a4004e2d8c41df624a1a2ded95001e4cc13366fa2ac58cc1fd42b5f3a->enter($__internal_655cba5a4004e2d8c41df624a1a2ded95001e4cc13366fa2ac58cc1fd42b5f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/math/clamp.js"));

        // line 1
        echo "require('../../modules/es7.math.clamp');
module.exports = require('../../modules/_core').Math.clamp;
";
        
        $__internal_655cba5a4004e2d8c41df624a1a2ded95001e4cc13366fa2ac58cc1fd42b5f3a->leave($__internal_655cba5a4004e2d8c41df624a1a2ded95001e4cc13366fa2ac58cc1fd42b5f3a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/math/clamp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.math.clamp');
module.exports = require('../../modules/_core').Math.clamp;
", "node_modules/core-js/fn/math/clamp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/math/clamp.js");
    }
}
