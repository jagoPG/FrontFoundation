<?php

/* node_modules/lodash/fp/round.js */
class __TwigTemplate_3a05bf7fa8d762dee9c0ba7a7b17965291737390387b7e10b2f106f0a61afe3e extends Twig_Template
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
        $__internal_aafb8975204c0bd445798b26dca45e0eded406646d761bd08e48adf9d9f329c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aafb8975204c0bd445798b26dca45e0eded406646d761bd08e48adf9d9f329c9->enter($__internal_aafb8975204c0bd445798b26dca45e0eded406646d761bd08e48adf9d9f329c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/round.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('round', require('../round'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_aafb8975204c0bd445798b26dca45e0eded406646d761bd08e48adf9d9f329c9->leave($__internal_aafb8975204c0bd445798b26dca45e0eded406646d761bd08e48adf9d9f329c9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/round.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('round', require('../round'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/round.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/round.js");
    }
}
