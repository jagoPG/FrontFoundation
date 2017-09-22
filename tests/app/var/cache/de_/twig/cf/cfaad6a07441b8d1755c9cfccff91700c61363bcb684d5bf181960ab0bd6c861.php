<?php

/* node_modules/buffer/test/write_infinity.js */
class __TwigTemplate_6e98c6fe326b7bfc99d80342c5b6f3ae54f175a84a2c2a41eb059ae2ec8c0bd3 extends Twig_Template
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
        $__internal_be515170e5a3799bb89411d344b485e323363676ee06fca0f95ff56c3a580df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be515170e5a3799bb89411d344b485e323363676ee06fca0f95ff56c3a580df3->enter($__internal_be515170e5a3799bb89411d344b485e323363676ee06fca0f95ff56c3a580df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer/test/write_infinity.js"));

        // line 1
        echo "if (process.env.OBJECT_IMPL) global.TYPED_ARRAY_SUPPORT = false
var B = require('../').Buffer
var test = require('tape')

test('write/read Infinity as a float', function (t) {
  var buf = new B(4)
  t.equal(buf.writeFloatBE(Infinity, 0), 4)
  t.equal(buf.readFloatBE(0), Infinity)
  t.end()
})

test('write/read -Infinity as a float', function (t) {
  var buf = new B(4)
  t.equal(buf.writeFloatBE(-Infinity, 0), 4)
  t.equal(buf.readFloatBE(0), -Infinity)
  t.end()
})

test('write/read Infinity as a double', function (t) {
  var buf = new B(8)
  t.equal(buf.writeDoubleBE(Infinity, 0), 8)
  t.equal(buf.readDoubleBE(0), Infinity)
  t.end()
})

test('write/read -Infinity as a double', function (t) {
  var buf = new B(8)
  t.equal(buf.writeDoubleBE(-Infinity, 0), 8)
  t.equal(buf.readDoubleBE(0), -Infinity)
  t.end()
})

test('write/read float greater than max', function (t) {
  var buf = new B(4)
  t.equal(buf.writeFloatBE(4e38, 0), 4)
  t.equal(buf.readFloatBE(0), Infinity)
  t.end()
})

test('write/read float less than min', function (t) {
  var buf = new B(4)
  t.equal(buf.writeFloatBE(-4e40, 0), 4)
  t.equal(buf.readFloatBE(0), -Infinity)
  t.end()
})
";
        
        $__internal_be515170e5a3799bb89411d344b485e323363676ee06fca0f95ff56c3a580df3->leave($__internal_be515170e5a3799bb89411d344b485e323363676ee06fca0f95ff56c3a580df3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer/test/write_infinity.js";
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

test('write/read Infinity as a float', function (t) {
  var buf = new B(4)
  t.equal(buf.writeFloatBE(Infinity, 0), 4)
  t.equal(buf.readFloatBE(0), Infinity)
  t.end()
})

test('write/read -Infinity as a float', function (t) {
  var buf = new B(4)
  t.equal(buf.writeFloatBE(-Infinity, 0), 4)
  t.equal(buf.readFloatBE(0), -Infinity)
  t.end()
})

test('write/read Infinity as a double', function (t) {
  var buf = new B(8)
  t.equal(buf.writeDoubleBE(Infinity, 0), 8)
  t.equal(buf.readDoubleBE(0), Infinity)
  t.end()
})

test('write/read -Infinity as a double', function (t) {
  var buf = new B(8)
  t.equal(buf.writeDoubleBE(-Infinity, 0), 8)
  t.equal(buf.readDoubleBE(0), -Infinity)
  t.end()
})

test('write/read float greater than max', function (t) {
  var buf = new B(4)
  t.equal(buf.writeFloatBE(4e38, 0), 4)
  t.equal(buf.readFloatBE(0), Infinity)
  t.end()
})

test('write/read float less than min', function (t) {
  var buf = new B(4)
  t.equal(buf.writeFloatBE(-4e40, 0), 4)
  t.equal(buf.readFloatBE(0), -Infinity)
  t.end()
})
", "node_modules/buffer/test/write_infinity.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer/test/write_infinity.js");
    }
}
