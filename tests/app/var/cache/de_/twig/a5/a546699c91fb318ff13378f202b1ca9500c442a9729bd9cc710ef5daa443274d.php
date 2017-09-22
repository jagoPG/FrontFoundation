<?php

/* node_modules/lodash/fp/takeRightWhile.js */
class __TwigTemplate_4923ae29e5cada4f3c8e4176e48482b043e2a9bd710564a6a187d3fe35f9afc5 extends Twig_Template
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
        $__internal_263a435bf08fe9725fe82b0d753347f57512c02bae02f9015a9be3524e9e784a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263a435bf08fe9725fe82b0d753347f57512c02bae02f9015a9be3524e9e784a->enter($__internal_263a435bf08fe9725fe82b0d753347f57512c02bae02f9015a9be3524e9e784a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/takeRightWhile.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('takeRightWhile', require('../takeRightWhile'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_263a435bf08fe9725fe82b0d753347f57512c02bae02f9015a9be3524e9e784a->leave($__internal_263a435bf08fe9725fe82b0d753347f57512c02bae02f9015a9be3524e9e784a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/takeRightWhile.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('takeRightWhile', require('../takeRightWhile'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/takeRightWhile.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/takeRightWhile.js");
    }
}
