<?php

/* node_modules/lodash/fp/unionBy.js */
class __TwigTemplate_5d292d1afb1ce5dd45aa5173f30c16a69ed6111939ea3463b252e09d2405ef08 extends Twig_Template
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
        $__internal_bd13aa7e446a09c1c67c33acb5118b8035244f9171e2fc7ef9d0819b45f06c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd13aa7e446a09c1c67c33acb5118b8035244f9171e2fc7ef9d0819b45f06c92->enter($__internal_bd13aa7e446a09c1c67c33acb5118b8035244f9171e2fc7ef9d0819b45f06c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/unionBy.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('unionBy', require('../unionBy'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_bd13aa7e446a09c1c67c33acb5118b8035244f9171e2fc7ef9d0819b45f06c92->leave($__internal_bd13aa7e446a09c1c67c33acb5118b8035244f9171e2fc7ef9d0819b45f06c92_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/unionBy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('unionBy', require('../unionBy'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/unionBy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/unionBy.js");
    }
}
