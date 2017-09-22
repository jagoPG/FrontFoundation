<?php

/* node_modules/crypto-browserify/test/node/dh.js */
class __TwigTemplate_bc316560a5c864762d42b1700cdf2239ea4f629db8d5714f8d225485a0c86bc2 extends Twig_Template
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
        $__internal_dfe8c28f399f1a54a565882f1af36569c30011d6f9ffdf49f32c0f839811f919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe8c28f399f1a54a565882f1af36569c30011d6f9ffdf49f32c0f839811f919->enter($__internal_dfe8c28f399f1a54a565882f1af36569c30011d6f9ffdf49f32c0f839811f919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/crypto-browserify/test/node/dh.js"));

        // line 1
        echo "var test = require('tape')
var cryptoB = require('../../')
var crypto = require('crypto')

test('diffie-hellman mod groups', function (t) {
  [
    'modp1', 'modp2', 'modp5', 'modp14', 'modp15', 'modp16'
  ].forEach(function (mod) {
    t.test(mod, function (t) {
      t.plan(3)
      var dh1 = cryptoB.getDiffieHellman(mod)
      var p1 = dh1.getPrime().toString('hex')
      dh1.generateKeys()

      var dh2 = crypto.getDiffieHellman(mod)
      var p2 = dh2.getPrime().toString('hex')
      dh2.generateKeys()
      t.equals(p1, p2, 'equal primes')
      var pubk1 = dh1.getPublicKey()
      var pubk2 = dh2.getPublicKey()
      t.notEquals(pubk1, pubk2, 'diff public keys')
      var pub1 = dh1.computeSecret(pubk2).toString('hex')
      var pub2 = dh2.computeSecret(pubk1).toString('hex')
      t.equals(pub1, pub2, 'equal secrets')
    })
  })
})

test('diffie-hellman key lengths', function (t) {
  [
    64, 65, 192
  ].forEach(function (len) {
    t.test('' + len, function (t) {
      t.plan(3)
      var dh2 = cryptoB.createDiffieHellman(len)
      var prime2 = dh2.getPrime()
      var p2 = prime2.toString('hex')
      var dh1 = crypto.createDiffieHellman(prime2)
      var p1 = dh1.getPrime().toString('hex')
      dh1.generateKeys()
      dh2.generateKeys()
      t.equals(p1, p2, 'equal primes')
      var pubk1 = dh1.getPublicKey()
      var pubk2 = dh2.getPublicKey()
      t.notEquals(pubk1, pubk2, 'diff public keys')
      var pub1 = dh1.computeSecret(pubk2).toString('hex')
      var pub2 = dh2.computeSecret(dh1.getPublicKey()).toString('hex')
      t.equals(pub1, pub2, 'equal secrets')
    })
  })
})
";
        
        $__internal_dfe8c28f399f1a54a565882f1af36569c30011d6f9ffdf49f32c0f839811f919->leave($__internal_dfe8c28f399f1a54a565882f1af36569c30011d6f9ffdf49f32c0f839811f919_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/crypto-browserify/test/node/dh.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape')
var cryptoB = require('../../')
var crypto = require('crypto')

test('diffie-hellman mod groups', function (t) {
  [
    'modp1', 'modp2', 'modp5', 'modp14', 'modp15', 'modp16'
  ].forEach(function (mod) {
    t.test(mod, function (t) {
      t.plan(3)
      var dh1 = cryptoB.getDiffieHellman(mod)
      var p1 = dh1.getPrime().toString('hex')
      dh1.generateKeys()

      var dh2 = crypto.getDiffieHellman(mod)
      var p2 = dh2.getPrime().toString('hex')
      dh2.generateKeys()
      t.equals(p1, p2, 'equal primes')
      var pubk1 = dh1.getPublicKey()
      var pubk2 = dh2.getPublicKey()
      t.notEquals(pubk1, pubk2, 'diff public keys')
      var pub1 = dh1.computeSecret(pubk2).toString('hex')
      var pub2 = dh2.computeSecret(pubk1).toString('hex')
      t.equals(pub1, pub2, 'equal secrets')
    })
  })
})

test('diffie-hellman key lengths', function (t) {
  [
    64, 65, 192
  ].forEach(function (len) {
    t.test('' + len, function (t) {
      t.plan(3)
      var dh2 = cryptoB.createDiffieHellman(len)
      var prime2 = dh2.getPrime()
      var p2 = prime2.toString('hex')
      var dh1 = crypto.createDiffieHellman(prime2)
      var p1 = dh1.getPrime().toString('hex')
      dh1.generateKeys()
      dh2.generateKeys()
      t.equals(p1, p2, 'equal primes')
      var pubk1 = dh1.getPublicKey()
      var pubk2 = dh2.getPublicKey()
      t.notEquals(pubk1, pubk2, 'diff public keys')
      var pub1 = dh1.computeSecret(pubk2).toString('hex')
      var pub2 = dh2.computeSecret(dh1.getPublicKey()).toString('hex')
      t.equals(pub1, pub2, 'equal secrets')
    })
  })
})
", "node_modules/crypto-browserify/test/node/dh.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/crypto-browserify/test/node/dh.js");
    }
}
