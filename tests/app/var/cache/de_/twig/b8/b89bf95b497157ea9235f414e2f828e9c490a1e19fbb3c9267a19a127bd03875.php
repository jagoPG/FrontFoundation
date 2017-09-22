<?php

/* node_modules/lodash/fp/join.js */
class __TwigTemplate_f7ed7246c09652a91a4a050f359283c2765ee312c1c90b3838a4357ab12c1d2e extends Twig_Template
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
        $__internal_7d603162a9489c2949fd5f9dac60410018cd73d640abe374f57247448e0157ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d603162a9489c2949fd5f9dac60410018cd73d640abe374f57247448e0157ba->enter($__internal_7d603162a9489c2949fd5f9dac60410018cd73d640abe374f57247448e0157ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/join.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('join', require('../join'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_7d603162a9489c2949fd5f9dac60410018cd73d640abe374f57247448e0157ba->leave($__internal_7d603162a9489c2949fd5f9dac60410018cd73d640abe374f57247448e0157ba_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/join.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('join', require('../join'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/join.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/join.js");
    }
}
