<?php

/* node_modules/function-bind/index.js */
class __TwigTemplate_bb072cab1ecf947e8e30fd06e14c1f3ad7b8194f7b06ea2f0bb577d1e2427723 extends Twig_Template
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
        $__internal_35542a8864def2e5114133ce8268e570ba8a732d44104794ce324a130a218b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35542a8864def2e5114133ce8268e570ba8a732d44104794ce324a130a218b44->enter($__internal_35542a8864def2e5114133ce8268e570ba8a732d44104794ce324a130a218b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/function-bind/index.js"));

        // line 1
        echo "'use strict';

var implementation = require('./implementation');

module.exports = Function.prototype.bind || implementation;
";
        
        $__internal_35542a8864def2e5114133ce8268e570ba8a732d44104794ce324a130a218b44->leave($__internal_35542a8864def2e5114133ce8268e570ba8a732d44104794ce324a130a218b44_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/function-bind/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var implementation = require('./implementation');

module.exports = Function.prototype.bind || implementation;
", "node_modules/function-bind/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/function-bind/index.js");
    }
}
