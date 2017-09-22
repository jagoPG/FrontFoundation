<?php

/* node_modules/lodash/fp/wrapperAt.js */
class __TwigTemplate_896f90f8940469f2407aa0b1514f317e48dc90c51027f2f69bf144a6407c1801 extends Twig_Template
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
        $__internal_99bdca6787b6a72cdf1e81dcf234e7ee05757a8e6f89654855214912bb12f599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99bdca6787b6a72cdf1e81dcf234e7ee05757a8e6f89654855214912bb12f599->enter($__internal_99bdca6787b6a72cdf1e81dcf234e7ee05757a8e6f89654855214912bb12f599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/wrapperAt.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('wrapperAt', require('../wrapperAt'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_99bdca6787b6a72cdf1e81dcf234e7ee05757a8e6f89654855214912bb12f599->leave($__internal_99bdca6787b6a72cdf1e81dcf234e7ee05757a8e6f89654855214912bb12f599_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/wrapperAt.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('wrapperAt', require('../wrapperAt'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/wrapperAt.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/wrapperAt.js");
    }
}
