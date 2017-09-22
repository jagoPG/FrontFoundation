<?php

/* node_modules/lodash/fp/transform.js */
class __TwigTemplate_533766e5d43f8d8b87184aa621ee279960f6871633732da60f7dcf08a5928034 extends Twig_Template
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
        $__internal_597fb8b5af3d71d41de5ca669702d8c551083e54d5a7d3c6641db940b360109c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597fb8b5af3d71d41de5ca669702d8c551083e54d5a7d3c6641db940b360109c->enter($__internal_597fb8b5af3d71d41de5ca669702d8c551083e54d5a7d3c6641db940b360109c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/transform.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('transform', require('../transform'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_597fb8b5af3d71d41de5ca669702d8c551083e54d5a7d3c6641db940b360109c->leave($__internal_597fb8b5af3d71d41de5ca669702d8c551083e54d5a7d3c6641db940b360109c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/transform.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('transform', require('../transform'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/transform.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/transform.js");
    }
}
