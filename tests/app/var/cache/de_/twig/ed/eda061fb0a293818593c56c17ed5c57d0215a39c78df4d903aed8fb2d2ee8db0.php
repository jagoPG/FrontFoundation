<?php

/* node_modules/buffer/test/slice.js */
class __TwigTemplate_6a4420432d9a0f48b59d8740d0a340ca8faaafd7b25c3623f49e0d21f5b8148d extends Twig_Template
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
        $__internal_e4d2331ddcae123c3875b37c3c3504bd44e4a894c83866fc5e773b2cb77e17d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d2331ddcae123c3875b37c3c3504bd44e4a894c83866fc5e773b2cb77e17d8->enter($__internal_e4d2331ddcae123c3875b37c3c3504bd44e4a894c83866fc5e773b2cb77e17d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer/test/slice.js"));

        // line 1
        echo "if (process.env.OBJECT_IMPL) global.TYPED_ARRAY_SUPPORT = false
var B = require('../').Buffer
var test = require('tape')

test('modifying buffer created by .slice() modifies original memory', function (t) {
  if (!B.TYPED_ARRAY_SUPPORT) return t.end()

  var buf1 = new B(26)
  for (var i = 0; i < 26; i++) {
    buf1[i] = i + 97 // 97 is ASCII a
  }

  var buf2 = buf1.slice(0, 3)
  t.equal(buf2.toString('ascii', 0, buf2.length), 'abc')

  buf2[0] = '!'.charCodeAt(0)
  t.equal(buf1.toString('ascii', 0, buf2.length), '!bc')

  t.end()
})

test('modifying parent buffer modifies .slice() buffer\\'s memory', function (t) {
  if (!B.TYPED_ARRAY_SUPPORT) return t.end()

  var buf1 = new B(26)
  for (var i = 0; i < 26; i++) {
    buf1[i] = i + 97 // 97 is ASCII a
  }

  var buf2 = buf1.slice(0, 3)
  t.equal(buf2.toString('ascii', 0, buf2.length), 'abc')

  buf1[0] = '!'.charCodeAt(0)
  t.equal(buf2.toString('ascii', 0, buf2.length), '!bc')

  t.end()
})
";
        
        $__internal_e4d2331ddcae123c3875b37c3c3504bd44e4a894c83866fc5e773b2cb77e17d8->leave($__internal_e4d2331ddcae123c3875b37c3c3504bd44e4a894c83866fc5e773b2cb77e17d8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer/test/slice.js";
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

test('modifying buffer created by .slice() modifies original memory', function (t) {
  if (!B.TYPED_ARRAY_SUPPORT) return t.end()

  var buf1 = new B(26)
  for (var i = 0; i < 26; i++) {
    buf1[i] = i + 97 // 97 is ASCII a
  }

  var buf2 = buf1.slice(0, 3)
  t.equal(buf2.toString('ascii', 0, buf2.length), 'abc')

  buf2[0] = '!'.charCodeAt(0)
  t.equal(buf1.toString('ascii', 0, buf2.length), '!bc')

  t.end()
})

test('modifying parent buffer modifies .slice() buffer\\'s memory', function (t) {
  if (!B.TYPED_ARRAY_SUPPORT) return t.end()

  var buf1 = new B(26)
  for (var i = 0; i < 26; i++) {
    buf1[i] = i + 97 // 97 is ASCII a
  }

  var buf2 = buf1.slice(0, 3)
  t.equal(buf2.toString('ascii', 0, buf2.length), 'abc')

  buf1[0] = '!'.charCodeAt(0)
  t.equal(buf2.toString('ascii', 0, buf2.length), '!bc')

  t.end()
})
", "node_modules/buffer/test/slice.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer/test/slice.js");
    }
}
