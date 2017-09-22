<?php

/* node_modules/lodash/fp/pullAll.js */
class __TwigTemplate_99d899f467fc9038a13614a56712cf7bd968ab7ae5ba7cd19ab9218550b04dc7 extends Twig_Template
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
        $__internal_75b597fa99afd86734a422aa6c3620bb491be3697532c8df6cdbd1cb93032c31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b597fa99afd86734a422aa6c3620bb491be3697532c8df6cdbd1cb93032c31->enter($__internal_75b597fa99afd86734a422aa6c3620bb491be3697532c8df6cdbd1cb93032c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/pullAll.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('pullAll', require('../pullAll'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_75b597fa99afd86734a422aa6c3620bb491be3697532c8df6cdbd1cb93032c31->leave($__internal_75b597fa99afd86734a422aa6c3620bb491be3697532c8df6cdbd1cb93032c31_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/pullAll.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('pullAll', require('../pullAll'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/pullAll.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/pullAll.js");
    }
}
