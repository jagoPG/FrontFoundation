<?php

/* node_modules/lodash/fp/after.js */
class __TwigTemplate_016c8fef8cc2d6ed2ebfd193110d375fc52667d4d79c0164cc9d946f0f5cebf8 extends Twig_Template
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
        $__internal_c8b2407d91d584fb8ce035539075ccf8f93a55677625023bf5fa2fde159c05e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b2407d91d584fb8ce035539075ccf8f93a55677625023bf5fa2fde159c05e9->enter($__internal_c8b2407d91d584fb8ce035539075ccf8f93a55677625023bf5fa2fde159c05e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/after.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('after', require('../after'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_c8b2407d91d584fb8ce035539075ccf8f93a55677625023bf5fa2fde159c05e9->leave($__internal_c8b2407d91d584fb8ce035539075ccf8f93a55677625023bf5fa2fde159c05e9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/after.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('after', require('../after'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/after.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/after.js");
    }
}
