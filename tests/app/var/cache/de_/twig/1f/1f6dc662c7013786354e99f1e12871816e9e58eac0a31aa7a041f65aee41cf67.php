<?php

/* node_modules/lodash/fp/isFinite.js */
class __TwigTemplate_221b64a342b53f525e8f077f97aee8ecf6e71a18e75a37d604f372ca0b7e9422 extends Twig_Template
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
        $__internal_27e8341764f0e38e18f328fdfa9f223701129982744af6d93c95b2cd98acb1ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e8341764f0e38e18f328fdfa9f223701129982744af6d93c95b2cd98acb1ec->enter($__internal_27e8341764f0e38e18f328fdfa9f223701129982744af6d93c95b2cd98acb1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isFinite.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isFinite', require('../isFinite'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_27e8341764f0e38e18f328fdfa9f223701129982744af6d93c95b2cd98acb1ec->leave($__internal_27e8341764f0e38e18f328fdfa9f223701129982744af6d93c95b2cd98acb1ec_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isFinite.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isFinite', require('../isFinite'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isFinite.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isFinite.js");
    }
}
