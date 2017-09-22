<?php

/* node_modules/lodash/fp/once.js */
class __TwigTemplate_8479b41b14e6c832554786359c016fc6eb5a20bf7394bc8f0ec497bed5c07e50 extends Twig_Template
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
        $__internal_143f3055d93f4e06490d104a334e69a5b7b82f72c6d209cd9523ee33b5a266bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_143f3055d93f4e06490d104a334e69a5b7b82f72c6d209cd9523ee33b5a266bd->enter($__internal_143f3055d93f4e06490d104a334e69a5b7b82f72c6d209cd9523ee33b5a266bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/once.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('once', require('../once'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_143f3055d93f4e06490d104a334e69a5b7b82f72c6d209cd9523ee33b5a266bd->leave($__internal_143f3055d93f4e06490d104a334e69a5b7b82f72c6d209cd9523ee33b5a266bd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/once.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('once', require('../once'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/once.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/once.js");
    }
}
