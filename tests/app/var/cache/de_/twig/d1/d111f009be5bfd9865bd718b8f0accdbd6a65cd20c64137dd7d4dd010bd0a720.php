<?php

/* node_modules/base64-js/test/big-data.js */
class __TwigTemplate_a580c43060fc8f0a54665a40aa1986a75988aea73ff05d2d876be97ae93991a2 extends Twig_Template
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
        $__internal_b0513ab7a5ba936925eed190537a39fee581722c87370055e25cebc086b61142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0513ab7a5ba936925eed190537a39fee581722c87370055e25cebc086b61142->enter($__internal_b0513ab7a5ba936925eed190537a39fee581722c87370055e25cebc086b61142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/base64-js/test/big-data.js"));

        // line 1
        echo "var test = require('tape')
var b64 = require('../')

test('convert big data to base64', function (t) {
  var b64str, arr, i, length
  var big = new Uint8Array(64 * 1024 * 1024)
  for (i = 0, length = big.length; i < length; ++i) {
    big[i] = i % 256
  }
  b64str = b64.fromByteArray(big)
  arr = b64.toByteArray(b64str)
  t.ok(equal(arr, big))
  t.end()
})

function equal (a, b) {
  var i
  var length = a.length
  if (length !== b.length) return false
  for (i = 0; i < length; ++i) {
    if (a[i] !== b[i]) return false
  }
  return true
}
";
        
        $__internal_b0513ab7a5ba936925eed190537a39fee581722c87370055e25cebc086b61142->leave($__internal_b0513ab7a5ba936925eed190537a39fee581722c87370055e25cebc086b61142_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/base64-js/test/big-data.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape')
var b64 = require('../')

test('convert big data to base64', function (t) {
  var b64str, arr, i, length
  var big = new Uint8Array(64 * 1024 * 1024)
  for (i = 0, length = big.length; i < length; ++i) {
    big[i] = i % 256
  }
  b64str = b64.fromByteArray(big)
  arr = b64.toByteArray(b64str)
  t.ok(equal(arr, big))
  t.end()
})

function equal (a, b) {
  var i
  var length = a.length
  if (length !== b.length) return false
  for (i = 0; i < length; ++i) {
    if (a[i] !== b[i]) return false
  }
  return true
}
", "node_modules/base64-js/test/big-data.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/base64-js/test/big-data.js");
    }
}
