<?php

/* node_modules/crypto-browserify/test/create-hash.js */
class __TwigTemplate_2ca72857a4fa1fd5de300d9a4d392215db9d97af4129b10c7d894b2a1f3cf24e extends Twig_Template
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
        $__internal_2e96f892ae6baf81a016c8740e2b0784e88d6653cf7927d69d8ad012de35c4ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e96f892ae6baf81a016c8740e2b0784e88d6653cf7927d69d8ad012de35c4ad->enter($__internal_2e96f892ae6baf81a016c8740e2b0784e88d6653cf7927d69d8ad012de35c4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/crypto-browserify/test/create-hash.js"));

        // line 1
        echo "var test = require('tape')

var algorithms = ['sha1', 'sha224', 'sha256', 'sha384', 'sha512', 'md5', 'rmd160']
var encodings = ['hex', 'base64'] // FIXME: test binary
var vectors = require('hash-test-vectors')

testLib('createHash in crypto-browserify', require('../').createHash)
testLib('create-hash/browser', require('create-hash/browser'))

function testLib (name, createHash) {
  algorithms.forEach(function (algorithm) {
    runTest(name, createHash, algorithm)
  })
}
function runTest (name, createHash, algorithm) {
  test(name + ' test ' + algorithm + ' against test vectors', function (t) {
    run(0)
    function run (i) {
      if (i >= vectors.length) {
        return t.end()
      }
      var obj = vectors[i]

      var input = new Buffer(obj.input, 'base64')
      var node = obj[algorithm]
      var js = createHash(algorithm).update(input).digest('hex')
      if (js !== node) {
        t.equal(js, node, algorithm + '(testVector[' + i + ']) == ' + node)
      }

      encodings.forEach(function (encoding) {
        var input = new Buffer(obj.input, 'base64').toString(encoding)
        var node = obj[algorithm]
        var js = createHash(algorithm).update(input, encoding).digest('hex')
        if (js !== node) {
          t.equal(js, node, algorithm + '(testVector[' + i + '], ' + encoding + ') == ' + node)
        }
      })
      input = new Buffer(obj.input, 'base64')
      node = obj[algorithm]
      var hash = createHash(algorithm)
      hash.end(input)
      js = hash.read().toString('hex')
      if (js !== node) {
        t.equal(js, node, algorithm + '(testVector[' + i + ']) == ' + node)
      }
      setTimeout(run, 0, i + 1)
    }
  })
}
";
        
        $__internal_2e96f892ae6baf81a016c8740e2b0784e88d6653cf7927d69d8ad012de35c4ad->leave($__internal_2e96f892ae6baf81a016c8740e2b0784e88d6653cf7927d69d8ad012de35c4ad_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/crypto-browserify/test/create-hash.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape')

var algorithms = ['sha1', 'sha224', 'sha256', 'sha384', 'sha512', 'md5', 'rmd160']
var encodings = ['hex', 'base64'] // FIXME: test binary
var vectors = require('hash-test-vectors')

testLib('createHash in crypto-browserify', require('../').createHash)
testLib('create-hash/browser', require('create-hash/browser'))

function testLib (name, createHash) {
  algorithms.forEach(function (algorithm) {
    runTest(name, createHash, algorithm)
  })
}
function runTest (name, createHash, algorithm) {
  test(name + ' test ' + algorithm + ' against test vectors', function (t) {
    run(0)
    function run (i) {
      if (i >= vectors.length) {
        return t.end()
      }
      var obj = vectors[i]

      var input = new Buffer(obj.input, 'base64')
      var node = obj[algorithm]
      var js = createHash(algorithm).update(input).digest('hex')
      if (js !== node) {
        t.equal(js, node, algorithm + '(testVector[' + i + ']) == ' + node)
      }

      encodings.forEach(function (encoding) {
        var input = new Buffer(obj.input, 'base64').toString(encoding)
        var node = obj[algorithm]
        var js = createHash(algorithm).update(input, encoding).digest('hex')
        if (js !== node) {
          t.equal(js, node, algorithm + '(testVector[' + i + '], ' + encoding + ') == ' + node)
        }
      })
      input = new Buffer(obj.input, 'base64')
      node = obj[algorithm]
      var hash = createHash(algorithm)
      hash.end(input)
      js = hash.read().toString('hex')
      if (js !== node) {
        t.equal(js, node, algorithm + '(testVector[' + i + ']) == ' + node)
      }
      setTimeout(run, 0, i + 1)
    }
  })
}
", "node_modules/crypto-browserify/test/create-hash.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/crypto-browserify/test/create-hash.js");
    }
}
