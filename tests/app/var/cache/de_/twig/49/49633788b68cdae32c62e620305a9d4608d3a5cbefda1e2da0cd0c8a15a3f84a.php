<?php

/* node_modules/core-js/library/fn/array/map.js */
class __TwigTemplate_d33280d2e8400bf4e7993874f09817a23465b589a9c91629e875c9ebd27a623e extends Twig_Template
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
        $__internal_1ed866f5b097717b4d621e5400c898bd6c87561310b6b8e96ba095fe41a1953a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ed866f5b097717b4d621e5400c898bd6c87561310b6b8e96ba095fe41a1953a->enter($__internal_1ed866f5b097717b4d621e5400c898bd6c87561310b6b8e96ba095fe41a1953a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/map.js"));

        // line 1
        echo "require('../../modules/es6.array.map');
module.exports = require('../../modules/_core').Array.map;
";
        
        $__internal_1ed866f5b097717b4d621e5400c898bd6c87561310b6b8e96ba095fe41a1953a->leave($__internal_1ed866f5b097717b4d621e5400c898bd6c87561310b6b8e96ba095fe41a1953a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.array.map');
module.exports = require('../../modules/_core').Array.map;
", "node_modules/core-js/library/fn/array/map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/map.js");
    }
}
