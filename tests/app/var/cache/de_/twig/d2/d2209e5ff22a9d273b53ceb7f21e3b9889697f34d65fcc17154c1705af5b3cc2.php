<?php

/* node_modules/ieee754/test/basic.js */
class __TwigTemplate_d290e3a6cca3a17b72e58900513739a00f2946a54358ac6482308428556e0846 extends Twig_Template
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
        $__internal_4f7e05c4dba1d6613f42e694a7289123ee43d9755008e4be773dc066b47f7921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f7e05c4dba1d6613f42e694a7289123ee43d9755008e4be773dc066b47f7921->enter($__internal_4f7e05c4dba1d6613f42e694a7289123ee43d9755008e4be773dc066b47f7921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ieee754/test/basic.js"));

        // line 1
        echo "var ieee754 = require('../')
var test = require('tape')

var EPSILON = 0.00001

test('read float', function (t) {
  var buf = new Buffer(4)
  buf.writeFloatLE(42.42, 0)
  var num = ieee754.read(buf, 0, true, 23, 4)
  t.ok(Math.abs(num - 42.42) < EPSILON)

  t.end()
})

test('write float', function (t) {
  var buf = new Buffer(4)
  ieee754.write(buf, 42.42, 0, true, 23, 4)

  var num = buf.readFloatLE(0)
  t.ok(Math.abs(num - 42.42) < EPSILON)

  t.end()
})
";
        
        $__internal_4f7e05c4dba1d6613f42e694a7289123ee43d9755008e4be773dc066b47f7921->leave($__internal_4f7e05c4dba1d6613f42e694a7289123ee43d9755008e4be773dc066b47f7921_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ieee754/test/basic.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var ieee754 = require('../')
var test = require('tape')

var EPSILON = 0.00001

test('read float', function (t) {
  var buf = new Buffer(4)
  buf.writeFloatLE(42.42, 0)
  var num = ieee754.read(buf, 0, true, 23, 4)
  t.ok(Math.abs(num - 42.42) < EPSILON)

  t.end()
})

test('write float', function (t) {
  var buf = new Buffer(4)
  ieee754.write(buf, 42.42, 0, true, 23, 4)

  var num = buf.readFloatLE(0)
  t.ok(Math.abs(num - 42.42) < EPSILON)

  t.end()
})
", "node_modules/ieee754/test/basic.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ieee754/test/basic.js");
    }
}
