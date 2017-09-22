<?php

/* node_modules/core-js/fn/math/rad-per-deg.js */
class __TwigTemplate_68fc0a36b517a4f9897079530aea4a4c0f6a033479d54a7db4f26bb205015c48 extends Twig_Template
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
        $__internal_3641bf0e27933e4d421e062fbfe33732627627c1d53e74e538272f9ab69b04ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3641bf0e27933e4d421e062fbfe33732627627c1d53e74e538272f9ab69b04ca->enter($__internal_3641bf0e27933e4d421e062fbfe33732627627c1d53e74e538272f9ab69b04ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/math/rad-per-deg.js"));

        // line 1
        echo "require('../../modules/es7.math.rad-per-deg');
module.exports = 180 / Math.PI;
";
        
        $__internal_3641bf0e27933e4d421e062fbfe33732627627c1d53e74e538272f9ab69b04ca->leave($__internal_3641bf0e27933e4d421e062fbfe33732627627c1d53e74e538272f9ab69b04ca_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/math/rad-per-deg.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.math.rad-per-deg');
module.exports = 180 / Math.PI;
", "node_modules/core-js/fn/math/rad-per-deg.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/math/rad-per-deg.js");
    }
}
