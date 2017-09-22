<?php

/* node_modules/buffer/test/basic.js */
class __TwigTemplate_9f815c41e7d35f71d19297663be4e2398e50eec081e732f8fedcc963ae9a6feb extends Twig_Template
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
        $__internal_b286a731479027a3ef3c135f6b6690c6d122409b7f142cb1cf344efebdd20f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b286a731479027a3ef3c135f6b6690c6d122409b7f142cb1cf344efebdd20f5b->enter($__internal_b286a731479027a3ef3c135f6b6690c6d122409b7f142cb1cf344efebdd20f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer/test/basic.js"));

        // line 1
        echo "if (process.env.OBJECT_IMPL) global.TYPED_ARRAY_SUPPORT = false
var B = require('../').Buffer
var test = require('tape')

test('instanceof Buffer', function (t) {
  var buf = new B([1, 2])
  t.ok(buf instanceof B)
  t.end()
})

test('convert to Uint8Array in modern browsers', function (t) {
  if (B.TYPED_ARRAY_SUPPORT) {
    var buf = new B([1, 2])
    var uint8array = new Uint8Array(buf.buffer)
    t.ok(uint8array instanceof Uint8Array)
    t.equal(uint8array[0], 1)
    t.equal(uint8array[1], 2)
  } else {
    t.pass('object impl: skipping test')
  }
  t.end()
})

test('indexes from a string', function (t) {
  var buf = new B('abc')
  t.equal(buf[0], 97)
  t.equal(buf[1], 98)
  t.equal(buf[2], 99)
  t.end()
})

test('indexes from an array', function (t) {
  var buf = new B([ 97, 98, 99 ])
  t.equal(buf[0], 97)
  t.equal(buf[1], 98)
  t.equal(buf[2], 99)
  t.end()
})

test('setting index value should modify buffer contents', function (t) {
  var buf = new B([ 97, 98, 99 ])
  t.equal(buf[2], 99)
  t.equal(buf.toString(), 'abc')

  buf[2] += 10
  t.equal(buf[2], 109)
  t.equal(buf.toString(), 'abm')
  t.end()
})

test('storing negative number should cast to unsigned', function (t) {
  var buf = new B(1)

  if (B.TYPED_ARRAY_SUPPORT) {
    // This does not work with the object implementation -- nothing we can do!
    buf[0] = -3
    t.equal(buf[0], 253)
  }

  buf = new B(1)
  buf.writeInt8(-3, 0)
  t.equal(buf[0], 253)

  t.end()
})

test('test that memory is copied from array-like', function (t) {
  if (B.TYPED_ARRAY_SUPPORT) {
    var u = new Uint8Array(4)
    var b = new B(u)
    b[0] = 1
    b[1] = 2
    b[2] = 3
    b[3] = 4

    t.equal(u[0], 0)
    t.equal(u[1], 0)
    t.equal(u[2], 0)
    t.equal(u[3], 0)
  } else {
    t.pass('object impl: skipping test')
  }

  t.end()
})
";
        
        $__internal_b286a731479027a3ef3c135f6b6690c6d122409b7f142cb1cf344efebdd20f5b->leave($__internal_b286a731479027a3ef3c135f6b6690c6d122409b7f142cb1cf344efebdd20f5b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer/test/basic.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("if (process.env.OBJECT_IMPL) global.TYPED_ARRAY_SUPPORT = false
var B = require('../').Buffer
var test = require('tape')

test('instanceof Buffer', function (t) {
  var buf = new B([1, 2])
  t.ok(buf instanceof B)
  t.end()
})

test('convert to Uint8Array in modern browsers', function (t) {
  if (B.TYPED_ARRAY_SUPPORT) {
    var buf = new B([1, 2])
    var uint8array = new Uint8Array(buf.buffer)
    t.ok(uint8array instanceof Uint8Array)
    t.equal(uint8array[0], 1)
    t.equal(uint8array[1], 2)
  } else {
    t.pass('object impl: skipping test')
  }
  t.end()
})

test('indexes from a string', function (t) {
  var buf = new B('abc')
  t.equal(buf[0], 97)
  t.equal(buf[1], 98)
  t.equal(buf[2], 99)
  t.end()
})

test('indexes from an array', function (t) {
  var buf = new B([ 97, 98, 99 ])
  t.equal(buf[0], 97)
  t.equal(buf[1], 98)
  t.equal(buf[2], 99)
  t.end()
})

test('setting index value should modify buffer contents', function (t) {
  var buf = new B([ 97, 98, 99 ])
  t.equal(buf[2], 99)
  t.equal(buf.toString(), 'abc')

  buf[2] += 10
  t.equal(buf[2], 109)
  t.equal(buf.toString(), 'abm')
  t.end()
})

test('storing negative number should cast to unsigned', function (t) {
  var buf = new B(1)

  if (B.TYPED_ARRAY_SUPPORT) {
    // This does not work with the object implementation -- nothing we can do!
    buf[0] = -3
    t.equal(buf[0], 253)
  }

  buf = new B(1)
  buf.writeInt8(-3, 0)
  t.equal(buf[0], 253)

  t.end()
})

test('test that memory is copied from array-like', function (t) {
  if (B.TYPED_ARRAY_SUPPORT) {
    var u = new Uint8Array(4)
    var b = new B(u)
    b[0] = 1
    b[1] = 2
    b[2] = 3
    b[3] = 4

    t.equal(u[0], 0)
    t.equal(u[1], 0)
    t.equal(u[2], 0)
    t.equal(u[3], 0)
  } else {
    t.pass('object impl: skipping test')
  }

  t.end()
})
", "node_modules/buffer/test/basic.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer/test/basic.js");
    }
}
