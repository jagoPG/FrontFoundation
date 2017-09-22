<?php

/* node_modules/core-js/library/fn/date/index.js */
class __TwigTemplate_bf5bc6376c8b56193ff07eacfdbc76adf963a4742131eff4e720a8e03b9e0623 extends Twig_Template
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
        $__internal_a60d7a7e13d46e4d32c85b2a7fca0d20d6ebb302b733475664d28d5c81b58f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a60d7a7e13d46e4d32c85b2a7fca0d20d6ebb302b733475664d28d5c81b58f4c->enter($__internal_a60d7a7e13d46e4d32c85b2a7fca0d20d6ebb302b733475664d28d5c81b58f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/date/index.js"));

        // line 1
        echo "require('../../modules/es6.date.now');
require('../../modules/es6.date.to-json');
require('../../modules/es6.date.to-iso-string');
require('../../modules/es6.date.to-string');
require('../../modules/es6.date.to-primitive');
module.exports = require('../../modules/_core').Date;
";
        
        $__internal_a60d7a7e13d46e4d32c85b2a7fca0d20d6ebb302b733475664d28d5c81b58f4c->leave($__internal_a60d7a7e13d46e4d32c85b2a7fca0d20d6ebb302b733475664d28d5c81b58f4c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/date/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.date.now');
require('../../modules/es6.date.to-json');
require('../../modules/es6.date.to-iso-string');
require('../../modules/es6.date.to-string');
require('../../modules/es6.date.to-primitive');
module.exports = require('../../modules/_core').Date;
", "node_modules/core-js/library/fn/date/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/date/index.js");
    }
}
