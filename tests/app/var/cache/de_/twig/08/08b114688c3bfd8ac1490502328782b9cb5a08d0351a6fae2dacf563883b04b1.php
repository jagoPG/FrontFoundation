<?php

/* node_modules/crypto-browserify/test/dh.js */
class __TwigTemplate_348b4474990795e1abcb72d5dcc2f63ff05c21142715e214ceed27e9b304113c extends Twig_Template
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
        $__internal_c7fb4e24c7373349b3b6eed626b7bb2eb2da1987c9c9d7ce77b22e356ac64230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7fb4e24c7373349b3b6eed626b7bb2eb2da1987c9c9d7ce77b22e356ac64230->enter($__internal_c7fb4e24c7373349b3b6eed626b7bb2eb2da1987c9c9d7ce77b22e356ac64230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/crypto-browserify/test/dh.js"));

        // line 1
        echo "var test = require('tape')
var crypto = require('diffie-hellman/browser')

test('diffie-hellman mod groups', function (t) {
  [
    'modp1', 'modp2', 'modp5', 'modp14', 'modp15', 'modp16'
  ].forEach(function (mod) {
    t.test(mod, function (t) {
      t.plan(3)
      var dh1 = crypto.getDiffieHellman(mod)
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
      var pub2 = dh2.computeSecret(dh1.getPublicKey()).toString('hex')
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
      var dh2 = crypto.createDiffieHellman(len)
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
        
        $__internal_c7fb4e24c7373349b3b6eed626b7bb2eb2da1987c9c9d7ce77b22e356ac64230->leave($__internal_c7fb4e24c7373349b3b6eed626b7bb2eb2da1987c9c9d7ce77b22e356ac64230_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/crypto-browserify/test/dh.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape')
var crypto = require('diffie-hellman/browser')

test('diffie-hellman mod groups', function (t) {
  [
    'modp1', 'modp2', 'modp5', 'modp14', 'modp15', 'modp16'
  ].forEach(function (mod) {
    t.test(mod, function (t) {
      t.plan(3)
      var dh1 = crypto.getDiffieHellman(mod)
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
      var pub2 = dh2.computeSecret(dh1.getPublicKey()).toString('hex')
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
      var dh2 = crypto.createDiffieHellman(len)
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
", "node_modules/crypto-browserify/test/dh.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/crypto-browserify/test/dh.js");
    }
}
