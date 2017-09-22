<?php

/* node_modules/lodash/fp/upperCase.js */
class __TwigTemplate_e22ec032caa4c9e1b3325a61b737ba33c9d826874adb9b5113b4c1cd3a7339d1 extends Twig_Template
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
        $__internal_b4d0f5ed0c85ca9c4b8ee3547b47ed629537cd3182482259d1fec05102c3bf6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d0f5ed0c85ca9c4b8ee3547b47ed629537cd3182482259d1fec05102c3bf6e->enter($__internal_b4d0f5ed0c85ca9c4b8ee3547b47ed629537cd3182482259d1fec05102c3bf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/upperCase.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('upperCase', require('../upperCase'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_b4d0f5ed0c85ca9c4b8ee3547b47ed629537cd3182482259d1fec05102c3bf6e->leave($__internal_b4d0f5ed0c85ca9c4b8ee3547b47ed629537cd3182482259d1fec05102c3bf6e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/upperCase.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('upperCase', require('../upperCase'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/upperCase.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/upperCase.js");
    }
}
