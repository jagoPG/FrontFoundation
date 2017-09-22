<?php

/* node_modules/core-js/fn/object/values.js */
class __TwigTemplate_e7389297c41f702f15b3daf3422a2e29ec1403e61176e1505b83dba549185568 extends Twig_Template
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
        $__internal_b417970e9fb02d84c665e899d5d14d6e9817229eaae405b14d39dd081a9fc08d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b417970e9fb02d84c665e899d5d14d6e9817229eaae405b14d39dd081a9fc08d->enter($__internal_b417970e9fb02d84c665e899d5d14d6e9817229eaae405b14d39dd081a9fc08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/object/values.js"));

        // line 1
        echo "require('../../modules/es7.object.values');
module.exports = require('../../modules/_core').Object.values;
";
        
        $__internal_b417970e9fb02d84c665e899d5d14d6e9817229eaae405b14d39dd081a9fc08d->leave($__internal_b417970e9fb02d84c665e899d5d14d6e9817229eaae405b14d39dd081a9fc08d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/object/values.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.object.values');
module.exports = require('../../modules/_core').Object.values;
", "node_modules/core-js/fn/object/values.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/object/values.js");
    }
}
