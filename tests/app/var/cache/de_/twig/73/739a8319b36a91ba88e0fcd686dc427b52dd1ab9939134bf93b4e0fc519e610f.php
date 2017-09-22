<?php

/* node_modules/through/test/end.js */
class __TwigTemplate_b60b40b710c38d01be1855da27ceb103bc200783d23a2e244c8b5e5663699943 extends Twig_Template
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
        $__internal_9320a1c2c1c6e8706cd44742ddc20e96672aac5606401cdd83e71796a0e4030d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9320a1c2c1c6e8706cd44742ddc20e96672aac5606401cdd83e71796a0e4030d->enter($__internal_9320a1c2c1c6e8706cd44742ddc20e96672aac5606401cdd83e71796a0e4030d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/through/test/end.js"));

        // line 1
        echo "var test = require('tape')
var through = require('../')

// must emit end before close.

test('end before close', function (assert) {
  var ts = through()
  var ended = false, closed = false

  ts.on('end', function () {
    assert.ok(!closed)
    ended = true
  })
  ts.on('close', function () {
    assert.ok(ended)
    closed = true
  })

  ts.write(1)
  ts.write(2)
  ts.write(3)
  ts.end()
  assert.ok(ended)
  assert.ok(closed)
  assert.end()
})

test('end only once', function (t) {

  var ts = through()
  var ended = false, closed = false

  ts.on('end', function () {
    t.equal(ended, false)
    ended = true
  })

  ts.queue(null)
  ts.queue(null)
  ts.queue(null)

  ts.resume()

  t.end()
})
";
        
        $__internal_9320a1c2c1c6e8706cd44742ddc20e96672aac5606401cdd83e71796a0e4030d->leave($__internal_9320a1c2c1c6e8706cd44742ddc20e96672aac5606401cdd83e71796a0e4030d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/through/test/end.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape')
var through = require('../')

// must emit end before close.

test('end before close', function (assert) {
  var ts = through()
  var ended = false, closed = false

  ts.on('end', function () {
    assert.ok(!closed)
    ended = true
  })
  ts.on('close', function () {
    assert.ok(ended)
    closed = true
  })

  ts.write(1)
  ts.write(2)
  ts.write(3)
  ts.end()
  assert.ok(ended)
  assert.ok(closed)
  assert.end()
})

test('end only once', function (t) {

  var ts = through()
  var ended = false, closed = false

  ts.on('end', function () {
    t.equal(ended, false)
    ended = true
  })

  ts.queue(null)
  ts.queue(null)
  ts.queue(null)

  ts.resume()

  t.end()
})
", "node_modules/through/test/end.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/through/test/end.js");
    }
}
