<?php

/* node_modules/fsevents/node_modules/process-nextick-args/test.js */
class __TwigTemplate_afd85764a60e1d98fb3db8c5425db9f87f04afa6db557e8ab08c62615bcda105 extends Twig_Template
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
        $__internal_72899fa6e22656cdd8bb5f2dcb49c79cfefd3c5569310ecd0dec73f98620c3c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72899fa6e22656cdd8bb5f2dcb49c79cfefd3c5569310ecd0dec73f98620c3c0->enter($__internal_72899fa6e22656cdd8bb5f2dcb49c79cfefd3c5569310ecd0dec73f98620c3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/process-nextick-args/test.js"));

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
        
        $__internal_72899fa6e22656cdd8bb5f2dcb49c79cfefd3c5569310ecd0dec73f98620c3c0->leave($__internal_72899fa6e22656cdd8bb5f2dcb49c79cfefd3c5569310ecd0dec73f98620c3c0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/process-nextick-args/test.js";
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
", "node_modules/fsevents/node_modules/process-nextick-args/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/process-nextick-args/test.js");
    }
}
