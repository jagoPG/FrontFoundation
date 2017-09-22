<?php

/* node_modules/tape/test/require/test-a.js */
class __TwigTemplate_7cfc98832b3d29d4da1940a2b02ce9a09805da30f5268c22c3b99095caffec6a extends Twig_Template
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
        $__internal_64548604dfb4677c5e2a858d6dc530a4a644589d11aa7dbc79c253e2d3ac94ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64548604dfb4677c5e2a858d6dc530a4a644589d11aa7dbc79c253e2d3ac94ea->enter($__internal_64548604dfb4677c5e2a858d6dc530a4a644589d11aa7dbc79c253e2d3ac94ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/require/test-a.js"));

        // line 1
        echo "var tape = require('../..');

tape.test('test-a', function(t) {
  t.ok(global.module_a, 'module-a loaded in same context')
  t.pass('test ran after module-a was loaded')
  t.end()
})";
        
        $__internal_64548604dfb4677c5e2a858d6dc530a4a644589d11aa7dbc79c253e2d3ac94ea->leave($__internal_64548604dfb4677c5e2a858d6dc530a4a644589d11aa7dbc79c253e2d3ac94ea_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/require/test-a.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var tape = require('../..');

tape.test('test-a', function(t) {
  t.ok(global.module_a, 'module-a loaded in same context')
  t.pass('test ran after module-a was loaded')
  t.end()
})", "node_modules/tape/test/require/test-a.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/require/test-a.js");
    }
}
