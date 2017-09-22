<?php

/* node_modules/lodash/_Set.js */
class __TwigTemplate_de56ad1819987eecdaf8a5387e2c58a4d4ccb53611f4d1530881c16130bcd5ac extends Twig_Template
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
        $__internal_680596898e9fb5e457f72e61d6f09cf0c0805decd9eed5f867d07e22456a5c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680596898e9fb5e457f72e61d6f09cf0c0805decd9eed5f867d07e22456a5c58->enter($__internal_680596898e9fb5e457f72e61d6f09cf0c0805decd9eed5f867d07e22456a5c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_Set.js"));

        // line 1
        echo "var getNative = require('./_getNative'),
    root = require('./_root');

/* Built-in method references that are verified to be native. */
var Set = getNative(root, 'Set');

module.exports = Set;
";
        
        $__internal_680596898e9fb5e457f72e61d6f09cf0c0805decd9eed5f867d07e22456a5c58->leave($__internal_680596898e9fb5e457f72e61d6f09cf0c0805decd9eed5f867d07e22456a5c58_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_Set.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var getNative = require('./_getNative'),
    root = require('./_root');

/* Built-in method references that are verified to be native. */
var Set = getNative(root, 'Set');

module.exports = Set;
", "node_modules/lodash/_Set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_Set.js");
    }
}
