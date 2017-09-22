<?php

/* node_modules/core-js/fn/date/now.js */
class __TwigTemplate_ac4ef8c93360d5365eac2b8005cc44f9053c1ca56a40f693ead51bded6c0fc3e extends Twig_Template
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
        $__internal_4dfbde15e030c26f6271e0dceecb0ec48a5bd25d294e6971e111cf6cdc1f7b3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfbde15e030c26f6271e0dceecb0ec48a5bd25d294e6971e111cf6cdc1f7b3b->enter($__internal_4dfbde15e030c26f6271e0dceecb0ec48a5bd25d294e6971e111cf6cdc1f7b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/date/now.js"));

        // line 1
        echo "require('../../modules/es6.date.now');
module.exports = require('../../modules/_core').Date.now;
";
        
        $__internal_4dfbde15e030c26f6271e0dceecb0ec48a5bd25d294e6971e111cf6cdc1f7b3b->leave($__internal_4dfbde15e030c26f6271e0dceecb0ec48a5bd25d294e6971e111cf6cdc1f7b3b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/date/now.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.date.now');
module.exports = require('../../modules/_core').Date.now;
", "node_modules/core-js/fn/date/now.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/date/now.js");
    }
}
