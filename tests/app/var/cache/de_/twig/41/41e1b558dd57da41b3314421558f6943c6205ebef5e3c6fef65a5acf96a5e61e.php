<?php

/* node_modules/core-js/fn/math/deg-per-rad.js */
class __TwigTemplate_f280136a933918a264cd568be319cdb0301031c877946e58acdbddcb3f03ffb2 extends Twig_Template
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
        $__internal_32c24a231960eeb43c035c8f87d0c50894696153d466ab7bdc761e1d1be95e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c24a231960eeb43c035c8f87d0c50894696153d466ab7bdc761e1d1be95e52->enter($__internal_32c24a231960eeb43c035c8f87d0c50894696153d466ab7bdc761e1d1be95e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/math/deg-per-rad.js"));

        // line 1
        echo "require('../../modules/es7.math.deg-per-rad');
module.exports = Math.PI / 180;
";
        
        $__internal_32c24a231960eeb43c035c8f87d0c50894696153d466ab7bdc761e1d1be95e52->leave($__internal_32c24a231960eeb43c035c8f87d0c50894696153d466ab7bdc761e1d1be95e52_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/math/deg-per-rad.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.math.deg-per-rad');
module.exports = Math.PI / 180;
", "node_modules/core-js/fn/math/deg-per-rad.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/math/deg-per-rad.js");
    }
}
