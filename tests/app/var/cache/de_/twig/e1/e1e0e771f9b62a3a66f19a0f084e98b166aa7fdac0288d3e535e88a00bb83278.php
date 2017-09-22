<?php

/* node_modules/buffer/test/compare.js */
class __TwigTemplate_4fa62075b5449a8075235bc63fbc3191f1d2d60a3c96ee919ce51918cbefd8f9 extends Twig_Template
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
        $__internal_d1a7524b485534b3e0ad7773d3298c77be20b5fafadd7af30d58612dd8c7ec7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a7524b485534b3e0ad7773d3298c77be20b5fafadd7af30d58612dd8c7ec7a->enter($__internal_d1a7524b485534b3e0ad7773d3298c77be20b5fafadd7af30d58612dd8c7ec7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer/test/compare.js"));

        // line 1
        echo "if (process.env.OBJECT_IMPL) global.TYPED_ARRAY_SUPPORT = false
var B = require('../').Buffer
var test = require('tape')

test('buffer.compare', function (t) {
  var b = new B(1).fill('a')
  var c = new B(1).fill('c')
  var d = new B(2).fill('aa')

  t.equal(b.compare(c), -1)
  t.equal(c.compare(d), 1)
  t.equal(d.compare(b), 1)
  t.equal(b.compare(d), -1)

  // static method
  t.equal(B.compare(b, c), -1)
  t.equal(B.compare(c, d), 1)
  t.equal(B.compare(d, b), 1)
  t.equal(B.compare(b, d), -1)
  t.end()
})

test('buffer.compare argument validation', function (t) {
  t.throws(function () {
    var b = new B(1)
    B.compare(b, 'abc')
  })

  t.throws(function () {
    var b = new B(1)
    B.compare('abc', b)
  })

  t.throws(function () {
    var b = new B(1)
    b.compare('abc')
  })
  t.end()
})

test('buffer.equals', function (t) {
  var b = new B(5).fill('abcdf')
  var c = new B(5).fill('abcdf')
  var d = new B(5).fill('abcde')
  var e = new B(6).fill('abcdef')

  t.ok(b.equals(c))
  t.ok(!c.equals(d))
  t.ok(!d.equals(e))
  t.end()
})

test('buffer.equals argument validation', function (t) {
  t.throws(function () {
    var b = new B(1)
    b.equals('abc')
  })
  t.end()
})
";
        
        $__internal_d1a7524b485534b3e0ad7773d3298c77be20b5fafadd7af30d58612dd8c7ec7a->leave($__internal_d1a7524b485534b3e0ad7773d3298c77be20b5fafadd7af30d58612dd8c7ec7a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer/test/compare.js";
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

test('buffer.compare', function (t) {
  var b = new B(1).fill('a')
  var c = new B(1).fill('c')
  var d = new B(2).fill('aa')

  t.equal(b.compare(c), -1)
  t.equal(c.compare(d), 1)
  t.equal(d.compare(b), 1)
  t.equal(b.compare(d), -1)

  // static method
  t.equal(B.compare(b, c), -1)
  t.equal(B.compare(c, d), 1)
  t.equal(B.compare(d, b), 1)
  t.equal(B.compare(b, d), -1)
  t.end()
})

test('buffer.compare argument validation', function (t) {
  t.throws(function () {
    var b = new B(1)
    B.compare(b, 'abc')
  })

  t.throws(function () {
    var b = new B(1)
    B.compare('abc', b)
  })

  t.throws(function () {
    var b = new B(1)
    b.compare('abc')
  })
  t.end()
})

test('buffer.equals', function (t) {
  var b = new B(5).fill('abcdf')
  var c = new B(5).fill('abcdf')
  var d = new B(5).fill('abcde')
  var e = new B(6).fill('abcdef')

  t.ok(b.equals(c))
  t.ok(!c.equals(d))
  t.ok(!d.equals(e))
  t.end()
})

test('buffer.equals argument validation', function (t) {
  t.throws(function () {
    var b = new B(1)
    b.equals('abc')
  })
  t.end()
})
", "node_modules/buffer/test/compare.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer/test/compare.js");
    }
}
