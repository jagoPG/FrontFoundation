<?php

/* node_modules/lodash/fp/isFunction.js */
class __TwigTemplate_c6cd411903435809928dfe67caf449dc5abb1e2b5efde8b09d34d6e9b0bc1140 extends Twig_Template
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
        $__internal_0728af30ef84035678a71fa83ccbdfabbfa75c3af8d360bda01fd543686c736f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0728af30ef84035678a71fa83ccbdfabbfa75c3af8d360bda01fd543686c736f->enter($__internal_0728af30ef84035678a71fa83ccbdfabbfa75c3af8d360bda01fd543686c736f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isFunction.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isFunction', require('../isFunction'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_0728af30ef84035678a71fa83ccbdfabbfa75c3af8d360bda01fd543686c736f->leave($__internal_0728af30ef84035678a71fa83ccbdfabbfa75c3af8d360bda01fd543686c736f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isFunction.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isFunction', require('../isFunction'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isFunction.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isFunction.js");
    }
}
