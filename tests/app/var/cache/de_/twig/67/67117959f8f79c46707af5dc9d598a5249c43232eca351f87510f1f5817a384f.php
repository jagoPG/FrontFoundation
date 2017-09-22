<?php

/* node_modules/is-buffer/test/basic.js */
class __TwigTemplate_c6dc546e0361341ef179ad4513cd976647d3e8acaedff92c40a7378cc0a87c7a extends Twig_Template
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
        $__internal_c69f73badad1041d113804e7de30961ca71a055b0d041b4980e2e47f46e23623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69f73badad1041d113804e7de30961ca71a055b0d041b4980e2e47f46e23623->enter($__internal_c69f73badad1041d113804e7de30961ca71a055b0d041b4980e2e47f46e23623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-buffer/test/basic.js"));

        // line 1
        echo "var buffer = require('buffer')
var isBuffer = require('../')
var test = require('tape')

test('is-buffer', function (t) {
  t.equal(isBuffer(new Buffer(4)), true, 'new Buffer(4)')
  t.equal(isBuffer(buffer.SlowBuffer(100)), true, 'SlowBuffer(100)')

  t.equal(isBuffer(undefined), false, 'undefined')
  t.equal(isBuffer(null), false, 'null')
  t.equal(isBuffer(''), false, 'empty string')
  t.equal(isBuffer(true), false, 'true')
  t.equal(isBuffer(false), false, 'false')
  t.equal(isBuffer(0), false, '0')
  t.equal(isBuffer(1), false, '1')
  t.equal(isBuffer(1.0), false, '1.0')
  t.equal(isBuffer('string'), false, 'string')
  t.equal(isBuffer({}), false, '{}')
  t.equal(isBuffer([]), false, '[]')
  t.equal(isBuffer(function foo () {}), false, 'function foo () {}')
  t.equal(isBuffer({ isBuffer: null }), false, '{ isBuffer: null }')
  t.equal(isBuffer({ isBuffer: function () { throw new Error() } }), false, '{ isBuffer: function () { throw new Error() } }')

  t.end()
})
";
        
        $__internal_c69f73badad1041d113804e7de30961ca71a055b0d041b4980e2e47f46e23623->leave($__internal_c69f73badad1041d113804e7de30961ca71a055b0d041b4980e2e47f46e23623_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-buffer/test/basic.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var buffer = require('buffer')
var isBuffer = require('../')
var test = require('tape')

test('is-buffer', function (t) {
  t.equal(isBuffer(new Buffer(4)), true, 'new Buffer(4)')
  t.equal(isBuffer(buffer.SlowBuffer(100)), true, 'SlowBuffer(100)')

  t.equal(isBuffer(undefined), false, 'undefined')
  t.equal(isBuffer(null), false, 'null')
  t.equal(isBuffer(''), false, 'empty string')
  t.equal(isBuffer(true), false, 'true')
  t.equal(isBuffer(false), false, 'false')
  t.equal(isBuffer(0), false, '0')
  t.equal(isBuffer(1), false, '1')
  t.equal(isBuffer(1.0), false, '1.0')
  t.equal(isBuffer('string'), false, 'string')
  t.equal(isBuffer({}), false, '{}')
  t.equal(isBuffer([]), false, '[]')
  t.equal(isBuffer(function foo () {}), false, 'function foo () {}')
  t.equal(isBuffer({ isBuffer: null }), false, '{ isBuffer: null }')
  t.equal(isBuffer({ isBuffer: function () { throw new Error() } }), false, '{ isBuffer: function () { throw new Error() } }')

  t.end()
})
", "node_modules/is-buffer/test/basic.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-buffer/test/basic.js");
    }
}
