<?php

/* node_modules/lodash/fp/merge.js */
class __TwigTemplate_7c56291fd9805b5009077f5d00c7f999a664e60ed3940adfe5b7eeb36a9adba2 extends Twig_Template
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
        $__internal_a987e9eab79965b3ee4c417924b319e5a7b2d469f9af0bf4babb1cbb9618a8d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a987e9eab79965b3ee4c417924b319e5a7b2d469f9af0bf4babb1cbb9618a8d6->enter($__internal_a987e9eab79965b3ee4c417924b319e5a7b2d469f9af0bf4babb1cbb9618a8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/merge.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('merge', require('../merge'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_a987e9eab79965b3ee4c417924b319e5a7b2d469f9af0bf4babb1cbb9618a8d6->leave($__internal_a987e9eab79965b3ee4c417924b319e5a7b2d469f9af0bf4babb1cbb9618a8d6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/merge.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('merge', require('../merge'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/merge.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/merge.js");
    }
}
