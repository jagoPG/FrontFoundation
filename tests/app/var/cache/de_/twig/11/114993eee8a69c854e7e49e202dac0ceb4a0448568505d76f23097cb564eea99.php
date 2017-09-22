<?php

/* node_modules/core-js/fn/reflect/metadata.js */
class __TwigTemplate_3b97c09644f05b51717914380982f84ff744f2523a561bc703be545e1dd0b023 extends Twig_Template
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
        $__internal_9fda656003be994592ebd65b4ece62bb2ec5290846f35107d740eb98aece9aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fda656003be994592ebd65b4ece62bb2ec5290846f35107d740eb98aece9aee->enter($__internal_9fda656003be994592ebd65b4ece62bb2ec5290846f35107d740eb98aece9aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/reflect/metadata.js"));

        // line 1
        echo "require('../../modules/es7.reflect.metadata');
module.exports = require('../../modules/_core').Reflect.metadata;
";
        
        $__internal_9fda656003be994592ebd65b4ece62bb2ec5290846f35107d740eb98aece9aee->leave($__internal_9fda656003be994592ebd65b4ece62bb2ec5290846f35107d740eb98aece9aee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/reflect/metadata.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.reflect.metadata');
module.exports = require('../../modules/_core').Reflect.metadata;
", "node_modules/core-js/fn/reflect/metadata.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/reflect/metadata.js");
    }
}
