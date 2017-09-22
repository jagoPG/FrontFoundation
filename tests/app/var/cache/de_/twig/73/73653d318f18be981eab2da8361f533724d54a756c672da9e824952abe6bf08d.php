<?php

/* node_modules/crypto-browserify/test/create-hmac.js */
class __TwigTemplate_76a0b18168fe4b888ebdb6e5c38dd5fd2925eed5dcadbde2ea510fcc4c557165 extends Twig_Template
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
        $__internal_a9125c0198c582380fe5e2efd13070d67b7d376e6e4d134c89bc0f5ecb55d4eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9125c0198c582380fe5e2efd13070d67b7d376e6e4d134c89bc0f5ecb55d4eb->enter($__internal_a9125c0198c582380fe5e2efd13070d67b7d376e6e4d134c89bc0f5ecb55d4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/crypto-browserify/test/create-hmac.js"));

        // line 1
        echo "var test = require('tape')

var algorithms = ['sha1', 'sha224', 'sha256', 'sha384', 'sha512', 'md5', 'rmd160']
var vectors = require('hash-test-vectors/hmac')
testLib('createHmac in crypto-browserify', require('../').createHmac)
testLib('create-hmac/browser', require('create-hmac/browser'))

function testLib (name, createHmac) {
  algorithms.forEach(function (alg) {
    test(name + ' hmac(' + alg + ')', function (t) {
      run(0)
      function run (i) {
        if (i >= vectors.length) {
          return t.end()
        }
        var input = vectors[i]
        var output = createHmac(alg, new Buffer(input.key, 'hex'))
          .update(input.data, 'hex').digest()

        output = input.truncate ? output.slice(0, input.truncate) : output
        output = output.toString('hex')
        if (output !== input[alg]) {
          t.equal(output, input[alg])
        }
        setTimeout(run, 0, i + 1)
      }
    })

    test('hmac(' + alg + ')', function (t) {
      run(0)
      function run (i) {
        if (i >= vectors.length) {
          return t.end()
        }
        var input = vectors[i]
        var hmac = createHmac(alg, new Buffer(input.key, 'hex'))

        hmac.end(input.data, 'hex')
        var output = hmac.read()

        output = input.truncate ? output.slice(0, input.truncate) : output
        output = output.toString('hex')
        if (output !== input[alg]) {
          t.equal(output, input[alg])
        }
        setTimeout(run, 0, i + 1)
      }
    })
  })
}
";
        
        $__internal_a9125c0198c582380fe5e2efd13070d67b7d376e6e4d134c89bc0f5ecb55d4eb->leave($__internal_a9125c0198c582380fe5e2efd13070d67b7d376e6e4d134c89bc0f5ecb55d4eb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/crypto-browserify/test/create-hmac.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape')

var algorithms = ['sha1', 'sha224', 'sha256', 'sha384', 'sha512', 'md5', 'rmd160']
var vectors = require('hash-test-vectors/hmac')
testLib('createHmac in crypto-browserify', require('../').createHmac)
testLib('create-hmac/browser', require('create-hmac/browser'))

function testLib (name, createHmac) {
  algorithms.forEach(function (alg) {
    test(name + ' hmac(' + alg + ')', function (t) {
      run(0)
      function run (i) {
        if (i >= vectors.length) {
          return t.end()
        }
        var input = vectors[i]
        var output = createHmac(alg, new Buffer(input.key, 'hex'))
          .update(input.data, 'hex').digest()

        output = input.truncate ? output.slice(0, input.truncate) : output
        output = output.toString('hex')
        if (output !== input[alg]) {
          t.equal(output, input[alg])
        }
        setTimeout(run, 0, i + 1)
      }
    })

    test('hmac(' + alg + ')', function (t) {
      run(0)
      function run (i) {
        if (i >= vectors.length) {
          return t.end()
        }
        var input = vectors[i]
        var hmac = createHmac(alg, new Buffer(input.key, 'hex'))

        hmac.end(input.data, 'hex')
        var output = hmac.read()

        output = input.truncate ? output.slice(0, input.truncate) : output
        output = output.toString('hex')
        if (output !== input[alg]) {
          t.equal(output, input[alg])
        }
        setTimeout(run, 0, i + 1)
      }
    })
  })
}
", "node_modules/crypto-browserify/test/create-hmac.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/crypto-browserify/test/create-hmac.js");
    }
}
