<?php

/* node_modules/lodash/fp/eq.js */
class __TwigTemplate_a9ef799616a98a1b276bf3991bd380d2adc38ce62d9172f0a20a4cfe835f891d extends Twig_Template
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
        $__internal_e2effb1e570e418ad0f4ca7f4366e331be78162771751ec8adaca2169bbef50d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2effb1e570e418ad0f4ca7f4366e331be78162771751ec8adaca2169bbef50d->enter($__internal_e2effb1e570e418ad0f4ca7f4366e331be78162771751ec8adaca2169bbef50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/eq.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('eq', require('../eq'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_e2effb1e570e418ad0f4ca7f4366e331be78162771751ec8adaca2169bbef50d->leave($__internal_e2effb1e570e418ad0f4ca7f4366e331be78162771751ec8adaca2169bbef50d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/eq.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('eq', require('../eq'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/eq.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/eq.js");
    }
}
