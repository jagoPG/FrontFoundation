<?php

/* node_modules/diffie-hellman/browser.js */
class __TwigTemplate_d793a23bb8a49c4c5219f6f9d3711dd73b8898643877dbc93a7fdfef7be3135b extends Twig_Template
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
        $__internal_be170184ace7ffc9467f53327cf0e7b8feb7dba0f260cfdbafe0b42ec3fed24b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be170184ace7ffc9467f53327cf0e7b8feb7dba0f260cfdbafe0b42ec3fed24b->enter($__internal_be170184ace7ffc9467f53327cf0e7b8feb7dba0f260cfdbafe0b42ec3fed24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/diffie-hellman/browser.js"));

        // line 1
        echo "var generatePrime = require('./lib/generatePrime')
var primes = require('./lib/primes.json')

var DH = require('./lib/dh')

function getDiffieHellman (mod) {
  var prime = new Buffer(primes[mod].prime, 'hex')
  var gen = new Buffer(primes[mod].gen, 'hex')

  return new DH(prime, gen)
}

var ENCODINGS = {
  'binary': true, 'hex': true, 'base64': true
}

function createDiffieHellman (prime, enc, generator, genc) {
  if (Buffer.isBuffer(enc) || ENCODINGS[enc] === undefined) {
    return createDiffieHellman(prime, 'binary', enc, generator)
  }

  enc = enc || 'binary'
  genc = genc || 'binary'
  generator = generator || new Buffer([2])

  if (!Buffer.isBuffer(generator)) {
    generator = new Buffer(generator, genc)
  }

  if (typeof prime === 'number') {
    return new DH(generatePrime(prime, generator), generator, true)
  }

  if (!Buffer.isBuffer(prime)) {
    prime = new Buffer(prime, enc)
  }

  return new DH(prime, generator, true)
}

exports.DiffieHellmanGroup = exports.createDiffieHellmanGroup = exports.getDiffieHellman = getDiffieHellman
exports.createDiffieHellman = exports.DiffieHellman = createDiffieHellman
";
        
        $__internal_be170184ace7ffc9467f53327cf0e7b8feb7dba0f260cfdbafe0b42ec3fed24b->leave($__internal_be170184ace7ffc9467f53327cf0e7b8feb7dba0f260cfdbafe0b42ec3fed24b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/diffie-hellman/browser.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var generatePrime = require('./lib/generatePrime')
var primes = require('./lib/primes.json')

var DH = require('./lib/dh')

function getDiffieHellman (mod) {
  var prime = new Buffer(primes[mod].prime, 'hex')
  var gen = new Buffer(primes[mod].gen, 'hex')

  return new DH(prime, gen)
}

var ENCODINGS = {
  'binary': true, 'hex': true, 'base64': true
}

function createDiffieHellman (prime, enc, generator, genc) {
  if (Buffer.isBuffer(enc) || ENCODINGS[enc] === undefined) {
    return createDiffieHellman(prime, 'binary', enc, generator)
  }

  enc = enc || 'binary'
  genc = genc || 'binary'
  generator = generator || new Buffer([2])

  if (!Buffer.isBuffer(generator)) {
    generator = new Buffer(generator, genc)
  }

  if (typeof prime === 'number') {
    return new DH(generatePrime(prime, generator), generator, true)
  }

  if (!Buffer.isBuffer(prime)) {
    prime = new Buffer(prime, enc)
  }

  return new DH(prime, generator, true)
}

exports.DiffieHellmanGroup = exports.createDiffieHellmanGroup = exports.getDiffieHellman = getDiffieHellman
exports.createDiffieHellman = exports.DiffieHellman = createDiffieHellman
", "node_modules/diffie-hellman/browser.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/diffie-hellman/browser.js");
    }
}
