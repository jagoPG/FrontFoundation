<?php

/* node_modules/core-js/library/fn/object/is-object.js */
class __TwigTemplate_302bd4afd7e5620505158a3906d023c2426f22b03bdc0770099f5d9620f98eaf extends Twig_Template
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
        $__internal_8e7e08d5956283fd6fbbd4e583dc3c8628bb73219d3f5f76dd99d69be72645cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7e08d5956283fd6fbbd4e583dc3c8628bb73219d3f5f76dd99d69be72645cb->enter($__internal_8e7e08d5956283fd6fbbd4e583dc3c8628bb73219d3f5f76dd99d69be72645cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/object/is-object.js"));

        // line 1
        echo "require('../../modules/core.object.is-object');
module.exports = require('../../modules/_core').Object.isObject;
";
        
        $__internal_8e7e08d5956283fd6fbbd4e583dc3c8628bb73219d3f5f76dd99d69be72645cb->leave($__internal_8e7e08d5956283fd6fbbd4e583dc3c8628bb73219d3f5f76dd99d69be72645cb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/object/is-object.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/core.object.is-object');
module.exports = require('../../modules/_core').Object.isObject;
", "node_modules/core-js/library/fn/object/is-object.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/object/is-object.js");
    }
}
