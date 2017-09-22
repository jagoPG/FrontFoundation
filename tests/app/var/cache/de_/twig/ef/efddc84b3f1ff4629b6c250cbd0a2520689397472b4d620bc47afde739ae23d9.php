<?php

/* node_modules/through/test/auto-destroy.js */
class __TwigTemplate_fc1e8955a6829514420497de8427c7a1c47fa82f6be68330fb71117543607095 extends Twig_Template
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
        $__internal_503172f392350e7d23862ce52891b5ae94db420f9ab6d1efbb204ce84afc14e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503172f392350e7d23862ce52891b5ae94db420f9ab6d1efbb204ce84afc14e6->enter($__internal_503172f392350e7d23862ce52891b5ae94db420f9ab6d1efbb204ce84afc14e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/through/test/auto-destroy.js"));

        // line 1
        echo "var test = require('tape')
var through = require('../')

// must emit end before close.

test('end before close', function (assert) {
  var ts = through()
  ts.autoDestroy = false
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
  assert.notOk(closed)
  ts.destroy()
  assert.ok(closed)
  assert.end()
})

";
        
        $__internal_503172f392350e7d23862ce52891b5ae94db420f9ab6d1efbb204ce84afc14e6->leave($__internal_503172f392350e7d23862ce52891b5ae94db420f9ab6d1efbb204ce84afc14e6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/through/test/auto-destroy.js";
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
  ts.autoDestroy = false
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
  assert.notOk(closed)
  ts.destroy()
  assert.ok(closed)
  assert.end()
})

", "node_modules/through/test/auto-destroy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/through/test/auto-destroy.js");
    }
}
