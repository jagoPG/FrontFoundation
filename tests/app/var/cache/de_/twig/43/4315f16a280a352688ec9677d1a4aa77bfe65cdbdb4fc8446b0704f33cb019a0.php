<?php

/* node_modules/es-abstract/es6.js */
class __TwigTemplate_cfb458a763be8a647406538e7caac8f9fccb607aeb11c90980c3a5731a25d174 extends Twig_Template
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
        $__internal_46f3c85f472c022d55d6e1bbb640a46b2040b7ed91be30ab0c48335234179406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f3c85f472c022d55d6e1bbb640a46b2040b7ed91be30ab0c48335234179406->enter($__internal_46f3c85f472c022d55d6e1bbb640a46b2040b7ed91be30ab0c48335234179406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-abstract/es6.js"));

        // line 1
        echo "'use strict';

module.exports = require('./es2015');
";
        
        $__internal_46f3c85f472c022d55d6e1bbb640a46b2040b7ed91be30ab0c48335234179406->leave($__internal_46f3c85f472c022d55d6e1bbb640a46b2040b7ed91be30ab0c48335234179406_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-abstract/es6.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = require('./es2015');
", "node_modules/es-abstract/es6.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-abstract/es6.js");
    }
}
