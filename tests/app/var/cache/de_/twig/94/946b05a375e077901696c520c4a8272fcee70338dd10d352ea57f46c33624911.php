<?php

/* node_modules/core-js/fn/string/includes.js */
class __TwigTemplate_73f48251219a83da1769a6e07b5d1a2402f9fbff7f3fb1e324081c97e4b8261b extends Twig_Template
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
        $__internal_d9c0fdedd843f1aa10a9a21fc20c33b1a332c8eab99b337409e4f234972032a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c0fdedd843f1aa10a9a21fc20c33b1a332c8eab99b337409e4f234972032a4->enter($__internal_d9c0fdedd843f1aa10a9a21fc20c33b1a332c8eab99b337409e4f234972032a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/includes.js"));

        // line 1
        echo "require('../../modules/es6.string.includes');
module.exports = require('../../modules/_core').String.includes;
";
        
        $__internal_d9c0fdedd843f1aa10a9a21fc20c33b1a332c8eab99b337409e4f234972032a4->leave($__internal_d9c0fdedd843f1aa10a9a21fc20c33b1a332c8eab99b337409e4f234972032a4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/includes.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.includes');
module.exports = require('../../modules/_core').String.includes;
", "node_modules/core-js/fn/string/includes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/includes.js");
    }
}
