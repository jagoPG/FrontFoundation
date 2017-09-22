<?php

/* node_modules/core-js/library/fn/math/rad-per-deg.js */
class __TwigTemplate_c47439f3b2855101e9281f553af950eb93ce784323bbfcbcfe691451c0f7967a extends Twig_Template
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
        $__internal_f729dd71b83befafcda5f851afa60da64e134b81386c549f10345c772b87b207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f729dd71b83befafcda5f851afa60da64e134b81386c549f10345c772b87b207->enter($__internal_f729dd71b83befafcda5f851afa60da64e134b81386c549f10345c772b87b207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/math/rad-per-deg.js"));

        // line 1
        echo "require('../../modules/es7.math.rad-per-deg');
module.exports = 180 / Math.PI;
";
        
        $__internal_f729dd71b83befafcda5f851afa60da64e134b81386c549f10345c772b87b207->leave($__internal_f729dd71b83befafcda5f851afa60da64e134b81386c549f10345c772b87b207_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/math/rad-per-deg.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.math.rad-per-deg');
module.exports = 180 / Math.PI;
", "node_modules/core-js/library/fn/math/rad-per-deg.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/math/rad-per-deg.js");
    }
}
