<?php

/* node_modules/lodash/fp/escapeRegExp.js */
class __TwigTemplate_05ce4e1fec145f0d6edc3cf2e2f973510ae8f1cf3df13158cfd681cb1b67eefb extends Twig_Template
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
        $__internal_7abc072b458bf65d069b4bd0e2673604137d404b08cae4c63aeb2d57c617e963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7abc072b458bf65d069b4bd0e2673604137d404b08cae4c63aeb2d57c617e963->enter($__internal_7abc072b458bf65d069b4bd0e2673604137d404b08cae4c63aeb2d57c617e963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/escapeRegExp.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('escapeRegExp', require('../escapeRegExp'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_7abc072b458bf65d069b4bd0e2673604137d404b08cae4c63aeb2d57c617e963->leave($__internal_7abc072b458bf65d069b4bd0e2673604137d404b08cae4c63aeb2d57c617e963_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/escapeRegExp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('escapeRegExp', require('../escapeRegExp'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/escapeRegExp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/escapeRegExp.js");
    }
}
