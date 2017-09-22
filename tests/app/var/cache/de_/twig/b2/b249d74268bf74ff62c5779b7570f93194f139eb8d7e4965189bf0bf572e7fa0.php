<?php

/* node_modules/lodash/fp/defaultTo.js */
class __TwigTemplate_86c0a82fda1aa390dfc5b856f23ed0f428ed7cfcb5d9bcfe3932c77786a796be extends Twig_Template
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
        $__internal_38f8259d553deabf6fc57283f306ca28ad4e54a902728191cba2df4411f5e171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f8259d553deabf6fc57283f306ca28ad4e54a902728191cba2df4411f5e171->enter($__internal_38f8259d553deabf6fc57283f306ca28ad4e54a902728191cba2df4411f5e171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/defaultTo.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('defaultTo', require('../defaultTo'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_38f8259d553deabf6fc57283f306ca28ad4e54a902728191cba2df4411f5e171->leave($__internal_38f8259d553deabf6fc57283f306ca28ad4e54a902728191cba2df4411f5e171_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/defaultTo.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('defaultTo', require('../defaultTo'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/defaultTo.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/defaultTo.js");
    }
}
