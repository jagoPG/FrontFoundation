<?php

/* node_modules/tape/test/only-twice.js */
class __TwigTemplate_56a4fc570bc30ff3704bfdc318e573ff9b5c6c549f189e79c4f13c953123eb9c extends Twig_Template
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
        $__internal_5edc1592db2896a176068de55bef9dc2eb8f0779d160ccc48acb35c7fcdf5b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5edc1592db2896a176068de55bef9dc2eb8f0779d160ccc48acb35c7fcdf5b24->enter($__internal_5edc1592db2896a176068de55bef9dc2eb8f0779d160ccc48acb35c7fcdf5b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/only-twice.js"));

        // line 1
        echo "var tape = require('../');
var tap = require('tap');

tap.test('only twice error', function (assert) {
  var test = tape.createHarness({ exit : false });

  test.only(\"first only\", function (t) {
    t.end()
  });

  assert.throws(function() {
    test.only('second only', function(t) {
      t.end();
    });
  }, {
    name: 'Error',
    message: 'there can only be one only test'
  });
  assert.end();
});

";
        
        $__internal_5edc1592db2896a176068de55bef9dc2eb8f0779d160ccc48acb35c7fcdf5b24->leave($__internal_5edc1592db2896a176068de55bef9dc2eb8f0779d160ccc48acb35c7fcdf5b24_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/only-twice.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var tape = require('../');
var tap = require('tap');

tap.test('only twice error', function (assert) {
  var test = tape.createHarness({ exit : false });

  test.only(\"first only\", function (t) {
    t.end()
  });

  assert.throws(function() {
    test.only('second only', function(t) {
      t.end();
    });
  }, {
    name: 'Error',
    message: 'there can only be one only test'
  });
  assert.end();
});

", "node_modules/tape/test/only-twice.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/only-twice.js");
    }
}
