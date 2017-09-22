<?php

/* node_modules/base64-js/test/convert.js */
class __TwigTemplate_74cc53320e3199299d34b700e0af40443718a517aec15ad585b5ffdb715a9b16 extends Twig_Template
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
        $__internal_4a782b17fdaf2e3bb2f086b42c7b0718886fbe49bee5afafd4f303c89f1569f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a782b17fdaf2e3bb2f086b42c7b0718886fbe49bee5afafd4f303c89f1569f4->enter($__internal_4a782b17fdaf2e3bb2f086b42c7b0718886fbe49bee5afafd4f303c89f1569f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/base64-js/test/convert.js"));

        // line 1
        echo "var test = require('tape')
var b64 = require('../')
var checks = [
  'a',
  'aa',
  'aaa',
  'hi',
  'hi!',
  'hi!!',
  'sup',
  'sup?',
  'sup?!'
]

test('convert to base64 and back', function (t) {
  t.plan(checks.length * 2)

  for (var i = 0; i < checks.length; i++) {
    var check = checks[i]
    var b64Str, arr, str

    b64Str = b64.fromByteArray(map(check, function (char) { return char.charCodeAt(0) }))

    arr = b64.toByteArray(b64Str)
    str = map(arr, function (byte) { return String.fromCharCode(byte) }).join('')

    t.equal(check, str, 'Checked ' + check)
    t.equal(b64.byteLength(b64Str), arr.length, 'Checked length for ' + check)
  }
})

function map (arr, callback) {
  var res = []
  var kValue, mappedValue

  for (var k = 0, len = arr.length; k < len; k++) {
    if ((typeof arr === 'string' && !!arr.charAt(k))) {
      kValue = arr.charAt(k)
      mappedValue = callback(kValue, k, arr)
      res[k] = mappedValue
    } else if (typeof arr !== 'string' && k in arr) {
      kValue = arr[k]
      mappedValue = callback(kValue, k, arr)
      res[k] = mappedValue
    }
  }
  return res
}
";
        
        $__internal_4a782b17fdaf2e3bb2f086b42c7b0718886fbe49bee5afafd4f303c89f1569f4->leave($__internal_4a782b17fdaf2e3bb2f086b42c7b0718886fbe49bee5afafd4f303c89f1569f4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/base64-js/test/convert.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape')
var b64 = require('../')
var checks = [
  'a',
  'aa',
  'aaa',
  'hi',
  'hi!',
  'hi!!',
  'sup',
  'sup?',
  'sup?!'
]

test('convert to base64 and back', function (t) {
  t.plan(checks.length * 2)

  for (var i = 0; i < checks.length; i++) {
    var check = checks[i]
    var b64Str, arr, str

    b64Str = b64.fromByteArray(map(check, function (char) { return char.charCodeAt(0) }))

    arr = b64.toByteArray(b64Str)
    str = map(arr, function (byte) { return String.fromCharCode(byte) }).join('')

    t.equal(check, str, 'Checked ' + check)
    t.equal(b64.byteLength(b64Str), arr.length, 'Checked length for ' + check)
  }
})

function map (arr, callback) {
  var res = []
  var kValue, mappedValue

  for (var k = 0, len = arr.length; k < len; k++) {
    if ((typeof arr === 'string' && !!arr.charAt(k))) {
      kValue = arr.charAt(k)
      mappedValue = callback(kValue, k, arr)
      res[k] = mappedValue
    } else if (typeof arr !== 'string' && k in arr) {
      kValue = arr[k]
      mappedValue = callback(kValue, k, arr)
      res[k] = mappedValue
    }
  }
  return res
}
", "node_modules/base64-js/test/convert.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/base64-js/test/convert.js");
    }
}
