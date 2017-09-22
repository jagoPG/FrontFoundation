<?php

/* node_modules/core-js/library/fn/math/radians.js */
class __TwigTemplate_3093a7e0904f052e07f6faeb79aeccde5cb05bb985ff6d2b6cae916ccd3b3974 extends Twig_Template
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
        $__internal_a6edd50de7999dad8cb98f529d299d3e9bc4b2147568b01c80cdfa95553ce18a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6edd50de7999dad8cb98f529d299d3e9bc4b2147568b01c80cdfa95553ce18a->enter($__internal_a6edd50de7999dad8cb98f529d299d3e9bc4b2147568b01c80cdfa95553ce18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/math/radians.js"));

        // line 1
        echo "require('../../modules/es7.math.radians');
module.exports = require('../../modules/_core').Math.radians;
";
        
        $__internal_a6edd50de7999dad8cb98f529d299d3e9bc4b2147568b01c80cdfa95553ce18a->leave($__internal_a6edd50de7999dad8cb98f529d299d3e9bc4b2147568b01c80cdfa95553ce18a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/math/radians.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.math.radians');
module.exports = require('../../modules/_core').Math.radians;
", "node_modules/core-js/library/fn/math/radians.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/math/radians.js");
    }
}
