<?php

/* node_modules/lodash/fp/startCase.js */
class __TwigTemplate_03ffb53288bf2a6073e4813aa36198d669d03c561d05bec3ff5519121df71a47 extends Twig_Template
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
        $__internal_8d3d22d669417e78cb997d0c8380bf7d90c967d6eb66c6c97a20dd5da6e315e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3d22d669417e78cb997d0c8380bf7d90c967d6eb66c6c97a20dd5da6e315e5->enter($__internal_8d3d22d669417e78cb997d0c8380bf7d90c967d6eb66c6c97a20dd5da6e315e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/startCase.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('startCase', require('../startCase'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_8d3d22d669417e78cb997d0c8380bf7d90c967d6eb66c6c97a20dd5da6e315e5->leave($__internal_8d3d22d669417e78cb997d0c8380bf7d90c967d6eb66c6c97a20dd5da6e315e5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/startCase.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('startCase', require('../startCase'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/startCase.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/startCase.js");
    }
}
