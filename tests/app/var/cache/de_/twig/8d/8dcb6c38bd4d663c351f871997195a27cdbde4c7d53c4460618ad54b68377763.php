<?php

/* node_modules/buffer-xor/test/index.js */
class __TwigTemplate_66b8bffb4663e65fe9dc44ee9e44541e5d16f1f9f3fab031347cf42a38a65189 extends Twig_Template
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
        $__internal_f0cd205967e28fd87ec82d0f9d880ed7e9d9a00482777b072bb041cb45e4d08d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0cd205967e28fd87ec82d0f9d880ed7e9d9a00482777b072bb041cb45e4d08d->enter($__internal_f0cd205967e28fd87ec82d0f9d880ed7e9d9a00482777b072bb041cb45e4d08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer-xor/test/index.js"));

        // line 1
        echo "/* global describe, it */

var assert = require('assert')
var xor = require('../')
var xorInplace = require('../inplace')
var fixtures = require('./fixtures')

describe('xor', function () {
  fixtures.forEach(function (f) {
    it('returns ' + f.expected + ' for ' + f.a + '/' + f.b, function () {
      var a = new Buffer(f.a, 'hex')
      var b = new Buffer(f.b, 'hex')
      var actual = xor(a, b)

      assert.equal(actual.toString('hex'), f.expected)

      // a/b unchanged
      assert.equal(a.toString('hex'), f.a)
      assert.equal(b.toString('hex'), f.b)
    })
  })
})

describe('xor/inplace', function () {
  fixtures.forEach(function (f) {
    it('returns ' + f.expected + ' for ' + f.a + '/' + f.b, function () {
      var a = new Buffer(f.a, 'hex')
      var b = new Buffer(f.b, 'hex')
      var actual = xorInplace(a, b)

      assert.equal(actual.toString('hex'), f.expected)

      // a mutated, b unchanged
      assert.equal(a.toString('hex'), f.mutated || f.expected)
      assert.equal(b.toString('hex'), f.b)
    })
  })
})
";
        
        $__internal_f0cd205967e28fd87ec82d0f9d880ed7e9d9a00482777b072bb041cb45e4d08d->leave($__internal_f0cd205967e28fd87ec82d0f9d880ed7e9d9a00482777b072bb041cb45e4d08d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer-xor/test/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* global describe, it */

var assert = require('assert')
var xor = require('../')
var xorInplace = require('../inplace')
var fixtures = require('./fixtures')

describe('xor', function () {
  fixtures.forEach(function (f) {
    it('returns ' + f.expected + ' for ' + f.a + '/' + f.b, function () {
      var a = new Buffer(f.a, 'hex')
      var b = new Buffer(f.b, 'hex')
      var actual = xor(a, b)

      assert.equal(actual.toString('hex'), f.expected)

      // a/b unchanged
      assert.equal(a.toString('hex'), f.a)
      assert.equal(b.toString('hex'), f.b)
    })
  })
})

describe('xor/inplace', function () {
  fixtures.forEach(function (f) {
    it('returns ' + f.expected + ' for ' + f.a + '/' + f.b, function () {
      var a = new Buffer(f.a, 'hex')
      var b = new Buffer(f.b, 'hex')
      var actual = xorInplace(a, b)

      assert.equal(actual.toString('hex'), f.expected)

      // a mutated, b unchanged
      assert.equal(a.toString('hex'), f.mutated || f.expected)
      assert.equal(b.toString('hex'), f.b)
    })
  })
})
", "node_modules/buffer-xor/test/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer-xor/test/index.js");
    }
}
