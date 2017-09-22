<?php

/* node_modules/lodash/fp/split.js */
class __TwigTemplate_b3e03681d1fa18e5d2bd8ec82ba4aa4625c4d07ff09591ba60f2211f8b039887 extends Twig_Template
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
        $__internal_8151189d919f70710f390d6a4b3ae71be1ba0c72fe05b979a167895f62740bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8151189d919f70710f390d6a4b3ae71be1ba0c72fe05b979a167895f62740bb5->enter($__internal_8151189d919f70710f390d6a4b3ae71be1ba0c72fe05b979a167895f62740bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/split.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('split', require('../split'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_8151189d919f70710f390d6a4b3ae71be1ba0c72fe05b979a167895f62740bb5->leave($__internal_8151189d919f70710f390d6a4b3ae71be1ba0c72fe05b979a167895f62740bb5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/split.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('split', require('../split'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/split.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/split.js");
    }
}
