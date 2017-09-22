<?php

/* node_modules/base64-js/test/url-safe.js */
class __TwigTemplate_108e06ceec019b4c023d01b504f37ff889161808576f87832cb7ababd226ca03 extends Twig_Template
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
        $__internal_0b8fd0b08c2d5472d99d8e0d3e6d255dd85ab310ca9371db665669cf62e5d754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8fd0b08c2d5472d99d8e0d3e6d255dd85ab310ca9371db665669cf62e5d754->enter($__internal_0b8fd0b08c2d5472d99d8e0d3e6d255dd85ab310ca9371db665669cf62e5d754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/base64-js/test/url-safe.js"));

        // line 1
        echo "var test = require('tape')
var b64 = require('../')

test('decode url-safe style base64 strings', function (t) {
  var expected = [0xff, 0xff, 0xbe, 0xff, 0xef, 0xbf, 0xfb, 0xef, 0xff]

  var actual = b64.toByteArray('//++/++/++//')
  for (var i = 0; i < actual.length; i++) {
    t.equal(actual[i], expected[i])
  }

  actual = b64.toByteArray('__--_--_--__')
  for (i = 0; i < actual.length; i++) {
    t.equal(actual[i], expected[i])
  }

  t.end()
})
";
        
        $__internal_0b8fd0b08c2d5472d99d8e0d3e6d255dd85ab310ca9371db665669cf62e5d754->leave($__internal_0b8fd0b08c2d5472d99d8e0d3e6d255dd85ab310ca9371db665669cf62e5d754_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/base64-js/test/url-safe.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape')
var b64 = require('../')

test('decode url-safe style base64 strings', function (t) {
  var expected = [0xff, 0xff, 0xbe, 0xff, 0xef, 0xbf, 0xfb, 0xef, 0xff]

  var actual = b64.toByteArray('//++/++/++//')
  for (var i = 0; i < actual.length; i++) {
    t.equal(actual[i], expected[i])
  }

  actual = b64.toByteArray('__--_--_--__')
  for (i = 0; i < actual.length; i++) {
    t.equal(actual[i], expected[i])
  }

  t.end()
})
", "node_modules/base64-js/test/url-safe.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/base64-js/test/url-safe.js");
    }
}
