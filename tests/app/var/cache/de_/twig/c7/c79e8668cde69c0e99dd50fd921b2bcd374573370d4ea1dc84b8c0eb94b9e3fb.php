<?php

/* node_modules/lodash/fp/stubTrue.js */
class __TwigTemplate_f7e46f8feb879fb41139c8daec51fd3182e8111f5019c95ba84d0ff518b634dd extends Twig_Template
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
        $__internal_5c52c36c62233b601f774917ccc29f6d5ad004ac08ad3228746f81bee3f53aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c52c36c62233b601f774917ccc29f6d5ad004ac08ad3228746f81bee3f53aef->enter($__internal_5c52c36c62233b601f774917ccc29f6d5ad004ac08ad3228746f81bee3f53aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/stubTrue.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('stubTrue', require('../stubTrue'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_5c52c36c62233b601f774917ccc29f6d5ad004ac08ad3228746f81bee3f53aef->leave($__internal_5c52c36c62233b601f774917ccc29f6d5ad004ac08ad3228746f81bee3f53aef_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/stubTrue.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('stubTrue', require('../stubTrue'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/stubTrue.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/stubTrue.js");
    }
}
