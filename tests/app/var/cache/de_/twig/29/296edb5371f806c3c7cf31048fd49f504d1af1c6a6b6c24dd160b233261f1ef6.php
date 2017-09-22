<?php

/* node_modules/lodash/fp/isDate.js */
class __TwigTemplate_4519d58061bf1d9a0a1fd279d348d0160483fac7e6cc1a4ab4ef5b685f685275 extends Twig_Template
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
        $__internal_f0b1f0633f1ba04233f1ab5be16f3d55bbac0a6255a6003947532fe3622f704a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b1f0633f1ba04233f1ab5be16f3d55bbac0a6255a6003947532fe3622f704a->enter($__internal_f0b1f0633f1ba04233f1ab5be16f3d55bbac0a6255a6003947532fe3622f704a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isDate.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isDate', require('../isDate'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_f0b1f0633f1ba04233f1ab5be16f3d55bbac0a6255a6003947532fe3622f704a->leave($__internal_f0b1f0633f1ba04233f1ab5be16f3d55bbac0a6255a6003947532fe3622f704a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isDate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isDate', require('../isDate'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isDate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isDate.js");
    }
}
