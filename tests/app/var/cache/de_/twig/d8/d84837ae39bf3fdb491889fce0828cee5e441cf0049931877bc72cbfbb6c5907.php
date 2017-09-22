<?php

/* node_modules/core-js/fn/number/to-precision.js */
class __TwigTemplate_0a45bba0314cb63abaa144a549d3c6d4cb20dcfe0528755a8d7e1048ed82c8ef extends Twig_Template
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
        $__internal_bfeba93aea3ff25d24d0ce15f688733b8b562dd5829a3d5216db5d068dabfe20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfeba93aea3ff25d24d0ce15f688733b8b562dd5829a3d5216db5d068dabfe20->enter($__internal_bfeba93aea3ff25d24d0ce15f688733b8b562dd5829a3d5216db5d068dabfe20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/number/to-precision.js"));

        // line 1
        echo "require('../../modules/es6.number.to-precision');
module.exports = require('../../modules/_core').Number.toPrecision;
";
        
        $__internal_bfeba93aea3ff25d24d0ce15f688733b8b562dd5829a3d5216db5d068dabfe20->leave($__internal_bfeba93aea3ff25d24d0ce15f688733b8b562dd5829a3d5216db5d068dabfe20_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/number/to-precision.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.number.to-precision');
module.exports = require('../../modules/_core').Number.toPrecision;
", "node_modules/core-js/fn/number/to-precision.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/number/to-precision.js");
    }
}
