<?php

/* node_modules/core-js/library/fn/math/deg-per-rad.js */
class __TwigTemplate_ad34d60ae7002a5cebc1a302ccdce697ab389f7295cfbe511e1b542c57e6374f extends Twig_Template
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
        $__internal_a7db0cfddc53626100a8e598d74a22ebd94eb7ba4bd57c737828d07d16f64fef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7db0cfddc53626100a8e598d74a22ebd94eb7ba4bd57c737828d07d16f64fef->enter($__internal_a7db0cfddc53626100a8e598d74a22ebd94eb7ba4bd57c737828d07d16f64fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/math/deg-per-rad.js"));

        // line 1
        echo "require('../../modules/es7.math.deg-per-rad');
module.exports = Math.PI / 180;
";
        
        $__internal_a7db0cfddc53626100a8e598d74a22ebd94eb7ba4bd57c737828d07d16f64fef->leave($__internal_a7db0cfddc53626100a8e598d74a22ebd94eb7ba4bd57c737828d07d16f64fef_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/math/deg-per-rad.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.math.deg-per-rad');
module.exports = Math.PI / 180;
", "node_modules/core-js/library/fn/math/deg-per-rad.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/math/deg-per-rad.js");
    }
}
