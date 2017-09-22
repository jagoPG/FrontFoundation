<?php

/* node_modules/lodash/fp/pick.js */
class __TwigTemplate_ed178a317c2725eb66b22f8820548a51e71f8de296d07d85594d652de8feebb4 extends Twig_Template
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
        $__internal_7e82d808de67400e48822164d6a1778e5c562e1d273e1c046d0e38765e7f7d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e82d808de67400e48822164d6a1778e5c562e1d273e1c046d0e38765e7f7d12->enter($__internal_7e82d808de67400e48822164d6a1778e5c562e1d273e1c046d0e38765e7f7d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/pick.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('pick', require('../pick'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_7e82d808de67400e48822164d6a1778e5c562e1d273e1c046d0e38765e7f7d12->leave($__internal_7e82d808de67400e48822164d6a1778e5c562e1d273e1c046d0e38765e7f7d12_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/pick.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('pick', require('../pick'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/pick.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/pick.js");
    }
}
