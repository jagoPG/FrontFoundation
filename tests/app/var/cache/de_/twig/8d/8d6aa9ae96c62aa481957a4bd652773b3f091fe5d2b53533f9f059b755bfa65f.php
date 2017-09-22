<?php

/* node_modules/lodash/fp/floor.js */
class __TwigTemplate_e17fb4dde7cd76d31790f0c780690ece942132118affbfb3aa188f837151039e extends Twig_Template
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
        $__internal_952c0dbeb11f487f46673d89f75c0ee051cbc5f70890d5318b02671f8bce058e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_952c0dbeb11f487f46673d89f75c0ee051cbc5f70890d5318b02671f8bce058e->enter($__internal_952c0dbeb11f487f46673d89f75c0ee051cbc5f70890d5318b02671f8bce058e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/floor.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('floor', require('../floor'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_952c0dbeb11f487f46673d89f75c0ee051cbc5f70890d5318b02671f8bce058e->leave($__internal_952c0dbeb11f487f46673d89f75c0ee051cbc5f70890d5318b02671f8bce058e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/floor.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('floor', require('../floor'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/floor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/floor.js");
    }
}
