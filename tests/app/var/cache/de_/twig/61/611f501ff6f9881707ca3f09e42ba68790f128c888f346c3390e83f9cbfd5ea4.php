<?php

/* node_modules/lodash/fp/add.js */
class __TwigTemplate_ceaa891d9c64e5ab335bf7b1835f997f6fe0baa982bc1677dfeb47a8d10b9007 extends Twig_Template
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
        $__internal_9f0f9b5fc0732570698de1b68b931df946d96a475f9e71bbe783e55eb96e0184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f0f9b5fc0732570698de1b68b931df946d96a475f9e71bbe783e55eb96e0184->enter($__internal_9f0f9b5fc0732570698de1b68b931df946d96a475f9e71bbe783e55eb96e0184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/add.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('add', require('../add'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_9f0f9b5fc0732570698de1b68b931df946d96a475f9e71bbe783e55eb96e0184->leave($__internal_9f0f9b5fc0732570698de1b68b931df946d96a475f9e71bbe783e55eb96e0184_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/add.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('add', require('../add'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/add.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/add.js");
    }
}
