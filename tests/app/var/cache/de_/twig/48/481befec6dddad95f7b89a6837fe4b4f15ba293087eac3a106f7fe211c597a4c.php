<?php

/* node_modules/lodash/fp/isNumber.js */
class __TwigTemplate_af1e666a98bd598e5734d86738950d4926c12f491686de4ec81d92ef32a85c85 extends Twig_Template
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
        $__internal_40d06e579acd1316ff6779f4bb5ab8a8542a57e9624f279126dc3044ccdede02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d06e579acd1316ff6779f4bb5ab8a8542a57e9624f279126dc3044ccdede02->enter($__internal_40d06e579acd1316ff6779f4bb5ab8a8542a57e9624f279126dc3044ccdede02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isNumber.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isNumber', require('../isNumber'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_40d06e579acd1316ff6779f4bb5ab8a8542a57e9624f279126dc3044ccdede02->leave($__internal_40d06e579acd1316ff6779f4bb5ab8a8542a57e9624f279126dc3044ccdede02_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isNumber.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isNumber', require('../isNumber'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isNumber.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isNumber.js");
    }
}
