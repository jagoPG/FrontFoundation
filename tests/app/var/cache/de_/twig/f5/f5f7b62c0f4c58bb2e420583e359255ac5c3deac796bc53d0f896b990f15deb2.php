<?php

/* node_modules/core-js/library/fn/promise/finally.js */
class __TwigTemplate_41659b13a22e128f60d926a3e6a6092d08b12dc8012c8f5b97c708ec6d08d61d extends Twig_Template
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
        $__internal_5738d628e20134a62482847ac5ca8c2a1a54bbf48789bda189f87c48cff0bb68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5738d628e20134a62482847ac5ca8c2a1a54bbf48789bda189f87c48cff0bb68->enter($__internal_5738d628e20134a62482847ac5ca8c2a1a54bbf48789bda189f87c48cff0bb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/promise/finally.js"));

        // line 1
        echo "'use strict';
require('../../modules/es6.promise');
require('../../modules/es7.promise.finally');
module.exports = require('../../modules/_core').Promise['finally'];
";
        
        $__internal_5738d628e20134a62482847ac5ca8c2a1a54bbf48789bda189f87c48cff0bb68->leave($__internal_5738d628e20134a62482847ac5ca8c2a1a54bbf48789bda189f87c48cff0bb68_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/promise/finally.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
require('../../modules/es6.promise');
require('../../modules/es7.promise.finally');
module.exports = require('../../modules/_core').Promise['finally'];
", "node_modules/core-js/library/fn/promise/finally.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/promise/finally.js");
    }
}
