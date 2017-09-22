<?php

/* node_modules/lodash/fp/defaultsDeep.js */
class __TwigTemplate_10fd931dfe5ae19e3c8adcc38de09a06748bb5a16f0fa8c692b480f84603a5c8 extends Twig_Template
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
        $__internal_4057d8e11c4e9df5ebc558476f8c8a393c7d54a466edf0d6ae537bcbe4fda030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4057d8e11c4e9df5ebc558476f8c8a393c7d54a466edf0d6ae537bcbe4fda030->enter($__internal_4057d8e11c4e9df5ebc558476f8c8a393c7d54a466edf0d6ae537bcbe4fda030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/defaultsDeep.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('defaultsDeep', require('../defaultsDeep'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_4057d8e11c4e9df5ebc558476f8c8a393c7d54a466edf0d6ae537bcbe4fda030->leave($__internal_4057d8e11c4e9df5ebc558476f8c8a393c7d54a466edf0d6ae537bcbe4fda030_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/defaultsDeep.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('defaultsDeep', require('../defaultsDeep'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/defaultsDeep.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/defaultsDeep.js");
    }
}
