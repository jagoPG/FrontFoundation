<?php

/* node_modules/lodash/fp/toInteger.js */
class __TwigTemplate_a53b538680ba614b510d174bb6e58d434cd660ec002dcb495c62a6d206a46eda extends Twig_Template
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
        $__internal_81b8653dcb150abd048dedf8923d1fda2c770bc0143bbb2ceab7a57ad99a28d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81b8653dcb150abd048dedf8923d1fda2c770bc0143bbb2ceab7a57ad99a28d3->enter($__internal_81b8653dcb150abd048dedf8923d1fda2c770bc0143bbb2ceab7a57ad99a28d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/toInteger.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('toInteger', require('../toInteger'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_81b8653dcb150abd048dedf8923d1fda2c770bc0143bbb2ceab7a57ad99a28d3->leave($__internal_81b8653dcb150abd048dedf8923d1fda2c770bc0143bbb2ceab7a57ad99a28d3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/toInteger.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('toInteger', require('../toInteger'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/toInteger.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/toInteger.js");
    }
}
