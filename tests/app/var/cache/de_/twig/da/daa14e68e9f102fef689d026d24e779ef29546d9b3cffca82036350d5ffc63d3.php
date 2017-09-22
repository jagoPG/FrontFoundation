<?php

/* node_modules/globals/index.js */
class __TwigTemplate_ae84ee072fd9f1914402b0081943b2df0c5681fae21ae5040723dccbdb98fa22 extends Twig_Template
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
        $__internal_e7f743ea0bfe3816ed05f313724df3096d0ce26d014d95e988d4626366b55482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f743ea0bfe3816ed05f313724df3096d0ce26d014d95e988d4626366b55482->enter($__internal_e7f743ea0bfe3816ed05f313724df3096d0ce26d014d95e988d4626366b55482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/globals/index.js"));

        // line 1
        echo "module.exports = require('./globals.json');
";
        
        $__internal_e7f743ea0bfe3816ed05f313724df3096d0ce26d014d95e988d4626366b55482->leave($__internal_e7f743ea0bfe3816ed05f313724df3096d0ce26d014d95e988d4626366b55482_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/globals/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require('./globals.json');
", "node_modules/globals/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/globals/index.js");
    }
}
