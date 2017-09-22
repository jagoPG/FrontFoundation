<?php

/* node_modules/lodash/fp/toNumber.js */
class __TwigTemplate_569f966baf3db29b92a612c7373b4e8a773f5aa428ca176ed1d1b0226a6b3475 extends Twig_Template
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
        $__internal_ccb97ab67d4c39ac17e212e64848d7fdd18a42598660b0c19e4b9f5d2d24f9f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb97ab67d4c39ac17e212e64848d7fdd18a42598660b0c19e4b9f5d2d24f9f6->enter($__internal_ccb97ab67d4c39ac17e212e64848d7fdd18a42598660b0c19e4b9f5d2d24f9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/toNumber.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('toNumber', require('../toNumber'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_ccb97ab67d4c39ac17e212e64848d7fdd18a42598660b0c19e4b9f5d2d24f9f6->leave($__internal_ccb97ab67d4c39ac17e212e64848d7fdd18a42598660b0c19e4b9f5d2d24f9f6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/toNumber.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('toNumber', require('../toNumber'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/toNumber.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/toNumber.js");
    }
}
