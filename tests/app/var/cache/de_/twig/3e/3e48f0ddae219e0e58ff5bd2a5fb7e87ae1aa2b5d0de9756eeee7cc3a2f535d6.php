<?php

/* node_modules/create-hash/test.js */
class __TwigTemplate_802287970fb73bb121c67909cb1a2e148be0bc0321739b7205eb800cc86c5928 extends Twig_Template
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
        $__internal_20dd9be078eb5dbd876cc24f7adc9c4d544083ab884238ec2abaf89c91b0e5c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20dd9be078eb5dbd876cc24f7adc9c4d544083ab884238ec2abaf89c91b0e5c8->enter($__internal_20dd9be078eb5dbd876cc24f7adc9c4d544083ab884238ec2abaf89c91b0e5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/create-hash/test.js"));

        // line 1
        echo "var test = require('tape')

var algorithms = ['sha1', 'sha224', 'sha256', 'sha384', 'sha512', 'md5', 'rmd160', 'ripemd160']
var encodings = ['hex', 'base64'] // ignore binary
var vectors = require('hash-test-vectors')
vectors.forEach(function (vector) {
  vector.ripemd160 = vector.rmd160
})
var createHash = require('./browser')

algorithms.forEach(function (algorithm) {
  test('test ' + algorithm + ' against test vectors', function (t) {
    vectors.forEach(function (obj, i) {
      var input = new Buffer(obj.input, 'base64')
      var node = obj[algorithm]
      var js = createHash(algorithm).update(input).digest('hex')
      t.equal(js, node, algorithm + '(testVector[' + i + ']) == ' + node)
    })

    encodings.forEach(function (encoding) {
      vectors.forEach(function (obj, i) {
        var input = new Buffer(obj.input, 'base64').toString(encoding)
        var node = obj[algorithm]
        var js = createHash(algorithm).update(input, encoding).digest('hex')
        t.equal(js, node, algorithm + '(testVector[' + i + '], ' + encoding + ') == ' + node)
      })
    })

    vectors.forEach(function (obj, i) {
      var input = new Buffer(obj.input, 'base64')
      var node = obj[algorithm]
      var hash = createHash(algorithm)
      hash.end(input)
      var js = hash.read().toString('hex')
      t.equal(js, node, algorithm + '(testVector[' + i + ']) == ' + node)
    })

    t.end()
  })
})
";
        
        $__internal_20dd9be078eb5dbd876cc24f7adc9c4d544083ab884238ec2abaf89c91b0e5c8->leave($__internal_20dd9be078eb5dbd876cc24f7adc9c4d544083ab884238ec2abaf89c91b0e5c8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/create-hash/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape')

var algorithms = ['sha1', 'sha224', 'sha256', 'sha384', 'sha512', 'md5', 'rmd160', 'ripemd160']
var encodings = ['hex', 'base64'] // ignore binary
var vectors = require('hash-test-vectors')
vectors.forEach(function (vector) {
  vector.ripemd160 = vector.rmd160
})
var createHash = require('./browser')

algorithms.forEach(function (algorithm) {
  test('test ' + algorithm + ' against test vectors', function (t) {
    vectors.forEach(function (obj, i) {
      var input = new Buffer(obj.input, 'base64')
      var node = obj[algorithm]
      var js = createHash(algorithm).update(input).digest('hex')
      t.equal(js, node, algorithm + '(testVector[' + i + ']) == ' + node)
    })

    encodings.forEach(function (encoding) {
      vectors.forEach(function (obj, i) {
        var input = new Buffer(obj.input, 'base64').toString(encoding)
        var node = obj[algorithm]
        var js = createHash(algorithm).update(input, encoding).digest('hex')
        t.equal(js, node, algorithm + '(testVector[' + i + '], ' + encoding + ') == ' + node)
      })
    })

    vectors.forEach(function (obj, i) {
      var input = new Buffer(obj.input, 'base64')
      var node = obj[algorithm]
      var hash = createHash(algorithm)
      hash.end(input)
      var js = hash.read().toString('hex')
      t.equal(js, node, algorithm + '(testVector[' + i + ']) == ' + node)
    })

    t.end()
  })
})
", "node_modules/create-hash/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/create-hash/test.js");
    }
}
