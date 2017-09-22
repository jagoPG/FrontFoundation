<?php

/* node_modules/process-nextick-args/test.js */
class __TwigTemplate_f0c91f343730edcc5e59fff7143b5daf3a71eeafe83d0e8d240cbb4e78ce74cd extends Twig_Template
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
        $__internal_dc1a10f36963b03535025e7c836907d4588ee355bf84be0696f5ae2283a9b7de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1a10f36963b03535025e7c836907d4588ee355bf84be0696f5ae2283a9b7de->enter($__internal_dc1a10f36963b03535025e7c836907d4588ee355bf84be0696f5ae2283a9b7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/process-nextick-args/test.js"));

        // line 1
        echo "var test = require(\"tap\").test;
var nextTick = require('./');

test('should work', function (t) {
  t.plan(5);
  nextTick(function (a) {
    t.ok(a);
    nextTick(function (thing) {
      t.equals(thing, 7);
    }, 7);
  }, true);
  nextTick(function (a, b, c) {
    t.equals(a, 'step');
    t.equals(b, 3);
    t.equals(c, 'profit');
  }, 'step', 3,  'profit');
});

test('correct number of arguments', function (t) {
  t.plan(1);
  nextTick(function () {
    t.equals(2, arguments.length, 'correct number');
  }, 1, 2);
});
";
        
        $__internal_dc1a10f36963b03535025e7c836907d4588ee355bf84be0696f5ae2283a9b7de->leave($__internal_dc1a10f36963b03535025e7c836907d4588ee355bf84be0696f5ae2283a9b7de_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/process-nextick-args/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require(\"tap\").test;
var nextTick = require('./');

test('should work', function (t) {
  t.plan(5);
  nextTick(function (a) {
    t.ok(a);
    nextTick(function (thing) {
      t.equals(thing, 7);
    }, 7);
  }, true);
  nextTick(function (a, b, c) {
    t.equals(a, 'step');
    t.equals(b, 3);
    t.equals(c, 'profit');
  }, 'step', 3,  'profit');
});

test('correct number of arguments', function (t) {
  t.plan(1);
  nextTick(function () {
    t.equals(2, arguments.length, 'correct number');
  }, 1, 2);
});
", "node_modules/process-nextick-args/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/process-nextick-args/test.js");
    }
}
