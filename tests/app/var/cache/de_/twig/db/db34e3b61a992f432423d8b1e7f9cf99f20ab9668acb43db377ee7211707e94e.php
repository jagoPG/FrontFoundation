<?php

/* node_modules/lodash/fp/unset.js */
class __TwigTemplate_d81270c136542030312149943987f9b86930fcdbc8b6fd8c4caa0357646457d6 extends Twig_Template
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
        $__internal_a7f34d42968bd4d0dae343605b381663b2f315d9313f9cb2cfbd4313a53fab11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f34d42968bd4d0dae343605b381663b2f315d9313f9cb2cfbd4313a53fab11->enter($__internal_a7f34d42968bd4d0dae343605b381663b2f315d9313f9cb2cfbd4313a53fab11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/unset.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('unset', require('../unset'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_a7f34d42968bd4d0dae343605b381663b2f315d9313f9cb2cfbd4313a53fab11->leave($__internal_a7f34d42968bd4d0dae343605b381663b2f315d9313f9cb2cfbd4313a53fab11_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/unset.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('unset', require('../unset'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/unset.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/unset.js");
    }
}
