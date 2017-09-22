<?php

/* node_modules/core-js/fn/regexp/flags.js */
class __TwigTemplate_7529793b66fc7186e96ecea0fe903e6b50bde05ea1b1e3e826abf6f476152915 extends Twig_Template
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
        $__internal_9f15ff03c8f3065be4c2eb1afccb1996bab0339743c508ff01613995a188fc70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f15ff03c8f3065be4c2eb1afccb1996bab0339743c508ff01613995a188fc70->enter($__internal_9f15ff03c8f3065be4c2eb1afccb1996bab0339743c508ff01613995a188fc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/regexp/flags.js"));

        // line 1
        echo "require('../../modules/es6.regexp.flags');
var flags = require('../../modules/_flags');
module.exports = function (it) {
  return flags.call(it);
};
";
        
        $__internal_9f15ff03c8f3065be4c2eb1afccb1996bab0339743c508ff01613995a188fc70->leave($__internal_9f15ff03c8f3065be4c2eb1afccb1996bab0339743c508ff01613995a188fc70_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/regexp/flags.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.regexp.flags');
var flags = require('../../modules/_flags');
module.exports = function (it) {
  return flags.call(it);
};
", "node_modules/core-js/fn/regexp/flags.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/regexp/flags.js");
    }
}
