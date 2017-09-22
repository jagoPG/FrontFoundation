<?php

/* node_modules/lodash/fp/unary.js */
class __TwigTemplate_9899a0b19ac15ec42fb07f7dd37f134ce307ff5eb568da33164baa4217606544 extends Twig_Template
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
        $__internal_d0cac53e373bc54bfc33d985c743d6dfa6f4f1d83f81dc9e10156c3250ba5f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0cac53e373bc54bfc33d985c743d6dfa6f4f1d83f81dc9e10156c3250ba5f45->enter($__internal_d0cac53e373bc54bfc33d985c743d6dfa6f4f1d83f81dc9e10156c3250ba5f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/unary.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('unary', require('../unary'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_d0cac53e373bc54bfc33d985c743d6dfa6f4f1d83f81dc9e10156c3250ba5f45->leave($__internal_d0cac53e373bc54bfc33d985c743d6dfa6f4f1d83f81dc9e10156c3250ba5f45_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/unary.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('unary', require('../unary'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/unary.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/unary.js");
    }
}
