<?php

/* node_modules/sha.js/test/test.js */
class __TwigTemplate_8037be08019eea157c50ff2e26a2f3f044329a9bac61500071a0c461a4522c9d extends Twig_Template
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
        $__internal_f4393ba14a2ad673f87a445dae95f0849ff8b3340b39cd82f0efbc8978dcd5a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4393ba14a2ad673f87a445dae95f0849ff8b3340b39cd82f0efbc8978dcd5a9->enter($__internal_f4393ba14a2ad673f87a445dae95f0849ff8b3340b39cd82f0efbc8978dcd5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sha.js/test/test.js"));

        // line 1
        echo "var crypto = require('crypto')
var tape = require('tape')
var Sha1 = require('../').sha1

var inputs = [
  ['', 'ascii'],
  ['abc', 'ascii'],
  ['123', 'ascii'],
  ['123456789abcdef123456789abcdef123456789abcdef123456789abcdef', 'ascii'],
  ['123456789abcdef123456789abcdef123456789abcdef123456789abc', 'ascii'],
  ['123456789abcdef123456789abcdef123456789abcdef123456789ab', 'ascii'],
  ['0123456789abcdef0123456789abcdef0123456789abcdef0123456789abcde', 'ascii'],
  ['0123456789abcdef0123456789abcdef0123456789abcdef0123456789abcdef', 'ascii'],
  ['foobarbaz', 'ascii']
]

tape(\"hash is the same as node's crypto\", function (t) {
  inputs.forEach(function (v) {
    var a = new Sha1().update(v[0], v[1]).digest('hex')
    var e = crypto.createHash('sha1').update(v[0], v[1]).digest('hex')
    console.log(a, '==', e)
    t.equal(a, e)
  })

  t.end()
})

tape('call update multiple times', function (t) {
  inputs.forEach(function (v) {
    var hash = new Sha1()
    var _hash = crypto.createHash('sha1')

    for (var i = 0; i < v[0].length; i = (i + 1) * 2) {
      var s = v[0].substring(i, (i + 1) * 2)
      hash.update(s, v[1])
      _hash.update(s, v[1])
    }

    var a = hash.digest('hex')
    var e = _hash.digest('hex')
    console.log(a, '==', e)
    t.equal(a, e)
  })
  t.end()
})

tape('call update twice', function (t) {
  var _hash = crypto.createHash('sha1')
  var hash = new Sha1()

  _hash.update('foo', 'ascii')
  hash.update('foo', 'ascii')

  _hash.update('bar', 'ascii')
  hash.update('bar', 'ascii')

  _hash.update('baz', 'ascii')
  hash.update('baz', 'ascii')

  var a = hash.digest('hex')
  var e = _hash.digest('hex')

  t.equal(a, e)
  t.end()
})

tape('hex encoding', function (t) {
  inputs.forEach(function (v) {
    var hash = new Sha1()
    var _hash = crypto.createHash('sha1')

    for (var i = 0; i < v[0].length; i = (i + 1) * 2) {
      var s = v[0].substring(i, (i + 1) * 2)
      hash.update(new Buffer(s, 'ascii').toString('hex'), 'hex')
      _hash.update(new Buffer(s, 'ascii').toString('hex'), 'hex')
    }
    var a = hash.digest('hex')
    var e = _hash.digest('hex')

    console.log(a, '==', e)
    t.equal(a, e)
  })

  t.end()
})
";
        
        $__internal_f4393ba14a2ad673f87a445dae95f0849ff8b3340b39cd82f0efbc8978dcd5a9->leave($__internal_f4393ba14a2ad673f87a445dae95f0849ff8b3340b39cd82f0efbc8978dcd5a9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sha.js/test/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var crypto = require('crypto')
var tape = require('tape')
var Sha1 = require('../').sha1

var inputs = [
  ['', 'ascii'],
  ['abc', 'ascii'],
  ['123', 'ascii'],
  ['123456789abcdef123456789abcdef123456789abcdef123456789abcdef', 'ascii'],
  ['123456789abcdef123456789abcdef123456789abcdef123456789abc', 'ascii'],
  ['123456789abcdef123456789abcdef123456789abcdef123456789ab', 'ascii'],
  ['0123456789abcdef0123456789abcdef0123456789abcdef0123456789abcde', 'ascii'],
  ['0123456789abcdef0123456789abcdef0123456789abcdef0123456789abcdef', 'ascii'],
  ['foobarbaz', 'ascii']
]

tape(\"hash is the same as node's crypto\", function (t) {
  inputs.forEach(function (v) {
    var a = new Sha1().update(v[0], v[1]).digest('hex')
    var e = crypto.createHash('sha1').update(v[0], v[1]).digest('hex')
    console.log(a, '==', e)
    t.equal(a, e)
  })

  t.end()
})

tape('call update multiple times', function (t) {
  inputs.forEach(function (v) {
    var hash = new Sha1()
    var _hash = crypto.createHash('sha1')

    for (var i = 0; i < v[0].length; i = (i + 1) * 2) {
      var s = v[0].substring(i, (i + 1) * 2)
      hash.update(s, v[1])
      _hash.update(s, v[1])
    }

    var a = hash.digest('hex')
    var e = _hash.digest('hex')
    console.log(a, '==', e)
    t.equal(a, e)
  })
  t.end()
})

tape('call update twice', function (t) {
  var _hash = crypto.createHash('sha1')
  var hash = new Sha1()

  _hash.update('foo', 'ascii')
  hash.update('foo', 'ascii')

  _hash.update('bar', 'ascii')
  hash.update('bar', 'ascii')

  _hash.update('baz', 'ascii')
  hash.update('baz', 'ascii')

  var a = hash.digest('hex')
  var e = _hash.digest('hex')

  t.equal(a, e)
  t.end()
})

tape('hex encoding', function (t) {
  inputs.forEach(function (v) {
    var hash = new Sha1()
    var _hash = crypto.createHash('sha1')

    for (var i = 0; i < v[0].length; i = (i + 1) * 2) {
      var s = v[0].substring(i, (i + 1) * 2)
      hash.update(new Buffer(s, 'ascii').toString('hex'), 'hex')
      _hash.update(new Buffer(s, 'ascii').toString('hex'), 'hex')
    }
    var a = hash.digest('hex')
    var e = _hash.digest('hex')

    console.log(a, '==', e)
    t.equal(a, e)
  })

  t.end()
})
", "node_modules/sha.js/test/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sha.js/test/test.js");
    }
}
