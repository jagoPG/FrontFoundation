<?php

/* node_modules/lodash/fp/stubFalse.js */
class __TwigTemplate_8acb31dfdd565815d7963051c765014001ef642ee97b12b4314995d3e302bb66 extends Twig_Template
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
        $__internal_d683d86419a950e72194e57233d5aecde1a5b2e06b88169b41d6cf4a6ed6a38c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d683d86419a950e72194e57233d5aecde1a5b2e06b88169b41d6cf4a6ed6a38c->enter($__internal_d683d86419a950e72194e57233d5aecde1a5b2e06b88169b41d6cf4a6ed6a38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/stubFalse.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('stubFalse', require('../stubFalse'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_d683d86419a950e72194e57233d5aecde1a5b2e06b88169b41d6cf4a6ed6a38c->leave($__internal_d683d86419a950e72194e57233d5aecde1a5b2e06b88169b41d6cf4a6ed6a38c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/stubFalse.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('stubFalse', require('../stubFalse'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/stubFalse.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/stubFalse.js");
    }
}
