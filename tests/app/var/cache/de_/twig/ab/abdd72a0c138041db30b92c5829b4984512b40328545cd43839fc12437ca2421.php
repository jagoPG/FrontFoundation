<?php

/* node_modules/core-js/library/fn/array/keys.js */
class __TwigTemplate_a10757a2ed18e10b7c20125ce18cfaf084cfb107325cc33e2fe5671d0b72a771 extends Twig_Template
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
        $__internal_7bd7ed797f86991a6e7aa3efeff5364c557b340ead657c84cbc49b403323b753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd7ed797f86991a6e7aa3efeff5364c557b340ead657c84cbc49b403323b753->enter($__internal_7bd7ed797f86991a6e7aa3efeff5364c557b340ead657c84cbc49b403323b753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/keys.js"));

        // line 1
        echo "require('../../modules/es6.array.iterator');
module.exports = require('../../modules/_core').Array.keys;
";
        
        $__internal_7bd7ed797f86991a6e7aa3efeff5364c557b340ead657c84cbc49b403323b753->leave($__internal_7bd7ed797f86991a6e7aa3efeff5364c557b340ead657c84cbc49b403323b753_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/keys.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.array.iterator');
module.exports = require('../../modules/_core').Array.keys;
", "node_modules/core-js/library/fn/array/keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/keys.js");
    }
}
