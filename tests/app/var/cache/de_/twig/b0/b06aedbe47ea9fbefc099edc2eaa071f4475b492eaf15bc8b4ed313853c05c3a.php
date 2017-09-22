<?php

/* node_modules/lodash/fp/camelCase.js */
class __TwigTemplate_e7c2e3a0aba9d977aa4698db8c232900c6b111b9bcb4e45d7dc3b0597d08d05c extends Twig_Template
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
        $__internal_8e3142e977b6702766b2d432af0cfbb4d6ff7ffd4fdbe3efe9f45167b92bbf36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3142e977b6702766b2d432af0cfbb4d6ff7ffd4fdbe3efe9f45167b92bbf36->enter($__internal_8e3142e977b6702766b2d432af0cfbb4d6ff7ffd4fdbe3efe9f45167b92bbf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/camelCase.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('camelCase', require('../camelCase'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_8e3142e977b6702766b2d432af0cfbb4d6ff7ffd4fdbe3efe9f45167b92bbf36->leave($__internal_8e3142e977b6702766b2d432af0cfbb4d6ff7ffd4fdbe3efe9f45167b92bbf36_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/camelCase.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('camelCase', require('../camelCase'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/camelCase.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/camelCase.js");
    }
}
