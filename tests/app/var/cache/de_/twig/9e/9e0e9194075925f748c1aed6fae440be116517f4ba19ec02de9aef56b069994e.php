<?php

/* node_modules/lodash/fp/templateSettings.js */
class __TwigTemplate_76280d80e3ea3206ac5d1b77f1432971e4207a1f989ad9cd24eddd033c2be0c7 extends Twig_Template
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
        $__internal_a6d908cd1d652e14a20c693bb44a9e9d563d5783e3fd21b5d32492d6ba840380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d908cd1d652e14a20c693bb44a9e9d563d5783e3fd21b5d32492d6ba840380->enter($__internal_a6d908cd1d652e14a20c693bb44a9e9d563d5783e3fd21b5d32492d6ba840380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/templateSettings.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('templateSettings', require('../templateSettings'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_a6d908cd1d652e14a20c693bb44a9e9d563d5783e3fd21b5d32492d6ba840380->leave($__internal_a6d908cd1d652e14a20c693bb44a9e9d563d5783e3fd21b5d32492d6ba840380_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/templateSettings.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('templateSettings', require('../templateSettings'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/templateSettings.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/templateSettings.js");
    }
}
