<?php

/* node_modules/lodash/fp/chain.js */
class __TwigTemplate_da86a17f0f168075b79ef0067d8c556bc51d06add74f2ab50a98cda3fd0464f1 extends Twig_Template
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
        $__internal_99e3656dfbd544ef7a341b8a74dd49d9edfb40e538870f053e0d5b3c07b3ec23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e3656dfbd544ef7a341b8a74dd49d9edfb40e538870f053e0d5b3c07b3ec23->enter($__internal_99e3656dfbd544ef7a341b8a74dd49d9edfb40e538870f053e0d5b3c07b3ec23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/chain.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('chain', require('../chain'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_99e3656dfbd544ef7a341b8a74dd49d9edfb40e538870f053e0d5b3c07b3ec23->leave($__internal_99e3656dfbd544ef7a341b8a74dd49d9edfb40e538870f053e0d5b3c07b3ec23_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/chain.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('chain', require('../chain'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/chain.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/chain.js");
    }
}
