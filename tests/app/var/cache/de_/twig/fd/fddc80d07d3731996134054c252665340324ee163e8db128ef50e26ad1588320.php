<?php

/* node_modules/core-js/fn/promise/finally.js */
class __TwigTemplate_a255b4280d0bcf87f046132897f5553e042dcb296a2a9af843f6fd9c483b6184 extends Twig_Template
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
        $__internal_f28456f6650a4a4e92b6a671eab6a035ab5a55b9c227fc96f8226c6be60b236a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28456f6650a4a4e92b6a671eab6a035ab5a55b9c227fc96f8226c6be60b236a->enter($__internal_f28456f6650a4a4e92b6a671eab6a035ab5a55b9c227fc96f8226c6be60b236a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/promise/finally.js"));

        // line 1
        echo "'use strict';
require('../../modules/es6.promise');
require('../../modules/es7.promise.finally');
module.exports = require('../../modules/_core').Promise['finally'];
";
        
        $__internal_f28456f6650a4a4e92b6a671eab6a035ab5a55b9c227fc96f8226c6be60b236a->leave($__internal_f28456f6650a4a4e92b6a671eab6a035ab5a55b9c227fc96f8226c6be60b236a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/promise/finally.js";
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
", "node_modules/core-js/fn/promise/finally.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/promise/finally.js");
    }
}
