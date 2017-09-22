<?php

/* node_modules/core-js/library/fn/weak-map/index.js */
class __TwigTemplate_eb73b0a67fb800cb5ce1f9a1104987c4899b9f3290aea8119211c1c3d244695d extends Twig_Template
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
        $__internal_329f2b0eb89cbb5c37d13e7f1f7c01a92e72577dfd4ce68d5e3a5d821eb0bbbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329f2b0eb89cbb5c37d13e7f1f7c01a92e72577dfd4ce68d5e3a5d821eb0bbbc->enter($__internal_329f2b0eb89cbb5c37d13e7f1f7c01a92e72577dfd4ce68d5e3a5d821eb0bbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/weak-map/index.js"));

        // line 1
        echo "require('../../modules/es6.object.to-string');
require('../../modules/web.dom.iterable');
require('../../modules/es6.weak-map');
require('../../modules/es7.weak-map.of');
require('../../modules/es7.weak-map.from');
module.exports = require('../../modules/_core').WeakMap;
";
        
        $__internal_329f2b0eb89cbb5c37d13e7f1f7c01a92e72577dfd4ce68d5e3a5d821eb0bbbc->leave($__internal_329f2b0eb89cbb5c37d13e7f1f7c01a92e72577dfd4ce68d5e3a5d821eb0bbbc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/weak-map/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.to-string');
require('../../modules/web.dom.iterable');
require('../../modules/es6.weak-map');
require('../../modules/es7.weak-map.of');
require('../../modules/es7.weak-map.from');
module.exports = require('../../modules/_core').WeakMap;
", "node_modules/core-js/library/fn/weak-map/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/weak-map/index.js");
    }
}
