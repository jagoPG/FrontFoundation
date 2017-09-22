<?php

/* node_modules/core-js/fn/array/virtual/copy-within.js */
class __TwigTemplate_2e9e2e6ef81ce0a65b023fd3bbe0c896ed91e6ae36468ca3df171d90c0cd00ea extends Twig_Template
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
        $__internal_296fda3f45b5d873c941b10b842069d7e24d94d98e6d1fc78cfe10f07e2725b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_296fda3f45b5d873c941b10b842069d7e24d94d98e6d1fc78cfe10f07e2725b9->enter($__internal_296fda3f45b5d873c941b10b842069d7e24d94d98e6d1fc78cfe10f07e2725b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/array/virtual/copy-within.js"));

        // line 1
        echo "require('../../../modules/es6.array.copy-within');
module.exports = require('../../../modules/_entry-virtual')('Array').copyWithin;
";
        
        $__internal_296fda3f45b5d873c941b10b842069d7e24d94d98e6d1fc78cfe10f07e2725b9->leave($__internal_296fda3f45b5d873c941b10b842069d7e24d94d98e6d1fc78cfe10f07e2725b9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/array/virtual/copy-within.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.array.copy-within');
module.exports = require('../../../modules/_entry-virtual')('Array').copyWithin;
", "node_modules/core-js/fn/array/virtual/copy-within.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/array/virtual/copy-within.js");
    }
}
