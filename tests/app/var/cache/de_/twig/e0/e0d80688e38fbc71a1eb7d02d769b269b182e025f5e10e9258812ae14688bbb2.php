<?php

/* node_modules/sha.js/test/vectors.js */
class __TwigTemplate_7de4e454d2b262abe0ea0e312deda6cf28da629e0e14530701f90ff04f78752c extends Twig_Template
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
        $__internal_747fc1142a97e4ce2e3638cdf60f3e6f9e5ca503f13b00a68b0bcf8c0aeefe0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_747fc1142a97e4ce2e3638cdf60f3e6f9e5ca503f13b00a68b0bcf8c0aeefe0b->enter($__internal_747fc1142a97e4ce2e3638cdf60f3e6f9e5ca503f13b00a68b0bcf8c0aeefe0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sha.js/test/vectors.js"));

        // line 1
        echo "var tape = require('tape')
var vectors = require('hash-test-vectors')
// var from = require('bops/typedarray/from')
var Buffer = require('buffer').Buffer
var hexpp = require('../hexpp')

var createHash = require('../')

function makeTest (alg, i, verbose) {
  var v = vectors[i]

  tape(alg + ': NIST vector ' + i, function (t) {
    if (verbose) {
      console.log(v)
      console.log('VECTOR', i)
      console.log('INPUT', v.input)
      console.log(hexpp(new Buffer(v.input, 'base64')))
      console.log(new Buffer(v.input, 'base64').toString('hex'))
    }

    var buf = new Buffer(v.input, 'base64')
    t.equal(createHash(alg).update(buf).digest('hex'), v[alg])

    i = ~~(buf.length / 2)
    var buf1 = buf.slice(0, i)
    var buf2 = buf.slice(i, buf.length)

    console.log(buf1.length, buf2.length, buf.length)
    console.log(createHash(alg)._block.length)

    t.equal(
      createHash(alg)
        .update(buf1)
        .update(buf2)
        .digest('hex'),
      v[alg]
    )

    var j, buf3

    i = ~~(buf.length / 3)
    j = ~~(buf.length * 2 / 3)
    buf1 = buf.slice(0, i)
    buf2 = buf.slice(i, j)
    buf3 = buf.slice(j, buf.length)

    t.equal(
      createHash(alg)
        .update(buf1)
        .update(buf2)
        .update(buf3)
        .digest('hex'),
      v[alg]
    )

    setTimeout(function () {
      // avoid \"too much recursion\" errors in tape in firefox
      t.end()
    })
  })

}

if (process.argv[2]) {
  makeTest(process.argv[2], parseInt(process.argv[3], 10), true)

} else {
  vectors.forEach(function (v, i) {
    makeTest('sha', i)
    makeTest('sha1', i)
    makeTest('sha224', i)
    makeTest('sha256', i)
    makeTest('sha384', i)
    makeTest('sha512', i)
  })
}
";
        
        $__internal_747fc1142a97e4ce2e3638cdf60f3e6f9e5ca503f13b00a68b0bcf8c0aeefe0b->leave($__internal_747fc1142a97e4ce2e3638cdf60f3e6f9e5ca503f13b00a68b0bcf8c0aeefe0b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sha.js/test/vectors.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var tape = require('tape')
var vectors = require('hash-test-vectors')
// var from = require('bops/typedarray/from')
var Buffer = require('buffer').Buffer
var hexpp = require('../hexpp')

var createHash = require('../')

function makeTest (alg, i, verbose) {
  var v = vectors[i]

  tape(alg + ': NIST vector ' + i, function (t) {
    if (verbose) {
      console.log(v)
      console.log('VECTOR', i)
      console.log('INPUT', v.input)
      console.log(hexpp(new Buffer(v.input, 'base64')))
      console.log(new Buffer(v.input, 'base64').toString('hex'))
    }

    var buf = new Buffer(v.input, 'base64')
    t.equal(createHash(alg).update(buf).digest('hex'), v[alg])

    i = ~~(buf.length / 2)
    var buf1 = buf.slice(0, i)
    var buf2 = buf.slice(i, buf.length)

    console.log(buf1.length, buf2.length, buf.length)
    console.log(createHash(alg)._block.length)

    t.equal(
      createHash(alg)
        .update(buf1)
        .update(buf2)
        .digest('hex'),
      v[alg]
    )

    var j, buf3

    i = ~~(buf.length / 3)
    j = ~~(buf.length * 2 / 3)
    buf1 = buf.slice(0, i)
    buf2 = buf.slice(i, j)
    buf3 = buf.slice(j, buf.length)

    t.equal(
      createHash(alg)
        .update(buf1)
        .update(buf2)
        .update(buf3)
        .digest('hex'),
      v[alg]
    )

    setTimeout(function () {
      // avoid \"too much recursion\" errors in tape in firefox
      t.end()
    })
  })

}

if (process.argv[2]) {
  makeTest(process.argv[2], parseInt(process.argv[3], 10), true)

} else {
  vectors.forEach(function (v, i) {
    makeTest('sha', i)
    makeTest('sha1', i)
    makeTest('sha224', i)
    makeTest('sha256', i)
    makeTest('sha384', i)
    makeTest('sha512', i)
  })
}
", "node_modules/sha.js/test/vectors.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sha.js/test/vectors.js");
    }
}
