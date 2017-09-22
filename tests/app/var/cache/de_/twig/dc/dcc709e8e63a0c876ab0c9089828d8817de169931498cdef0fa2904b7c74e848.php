<?php

/* node_modules/core-js/fn/array/flatten.js */
class __TwigTemplate_51c01304b563ca27e78013e900e5468c940bb47320f724e58e308b4628fa636a extends Twig_Template
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
        $__internal_56c45479db52f4116811d287ac68d7a764d24dd0fc2f892bbae1738e1f5b37a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c45479db52f4116811d287ac68d7a764d24dd0fc2f892bbae1738e1f5b37a7->enter($__internal_56c45479db52f4116811d287ac68d7a764d24dd0fc2f892bbae1738e1f5b37a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/array/flatten.js"));

        // line 1
        echo "require('../../modules/es7.array.flatten');
module.exports = require('../../modules/_core').Array.flatten;
";
        
        $__internal_56c45479db52f4116811d287ac68d7a764d24dd0fc2f892bbae1738e1f5b37a7->leave($__internal_56c45479db52f4116811d287ac68d7a764d24dd0fc2f892bbae1738e1f5b37a7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/array/flatten.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.array.flatten');
module.exports = require('../../modules/_core').Array.flatten;
", "node_modules/core-js/fn/array/flatten.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/array/flatten.js");
    }
}
