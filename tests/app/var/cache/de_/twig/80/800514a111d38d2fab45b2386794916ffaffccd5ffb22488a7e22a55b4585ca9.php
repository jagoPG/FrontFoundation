<?php

/* node_modules/tape/test/no_callback.js */
class __TwigTemplate_8c3bc48f0424bbd9f6902392c16bcdfb82e2e5972dd589a9a5b2481921473944 extends Twig_Template
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
        $__internal_85dc86efb7d4c7c46dddc104ebeaa1579382b85acdb4382488be03cb9a271abb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85dc86efb7d4c7c46dddc104ebeaa1579382b85acdb4382488be03cb9a271abb->enter($__internal_85dc86efb7d4c7c46dddc104ebeaa1579382b85acdb4382488be03cb9a271abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/no_callback.js"));

        // line 1
        echo "var test = require('../');

test('No callback.');
";
        
        $__internal_85dc86efb7d4c7c46dddc104ebeaa1579382b85acdb4382488be03cb9a271abb->leave($__internal_85dc86efb7d4c7c46dddc104ebeaa1579382b85acdb4382488be03cb9a271abb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/no_callback.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../');

test('No callback.');
", "node_modules/tape/test/no_callback.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/no_callback.js");
    }
}
