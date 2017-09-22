<?php

/* node_modules/crypto-browserify/test/aes.js */
class __TwigTemplate_20e758a609602fadc850c54e7c044ab541ceb6271f4af97c078b97bbf3f381b0 extends Twig_Template
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
        $__internal_c6080bed82640985cf0d9f3fda454bdd3e4ce1b6cc694411e59e3e1441c3b75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6080bed82640985cf0d9f3fda454bdd3e4ce1b6cc694411e59e3e1441c3b75d->enter($__internal_c6080bed82640985cf0d9f3fda454bdd3e4ce1b6cc694411e59e3e1441c3b75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/crypto-browserify/test/aes.js"));

        // line 1
        echo "var test = require('tape')
var crypto = require('browserify-cipher/browser')
var randomBytes = require('pseudorandombytes')

function runIt (i) {
  crypto.listCiphers().forEach(function (cipher) {
    test('run: ' + i, function (t) {
      t.test('ciphers: ' + cipher, function (t) {
        t.plan(1)
        var data = randomBytes(562)
        var password = randomBytes(20)
        var crypter = crypto.createCipher(cipher, password)
        var decrypter = crypto.createDecipher(cipher, password)
        var out = []
        out.push(decrypter.update(crypter.update(data)))
        out.push(decrypter.update(crypter.final()))
        if (cipher.indexOf('gcm') > -1) {
          decrypter.setAuthTag(crypter.getAuthTag())
        }
        out.push(decrypter.final())
        t.equals(data.toString('hex'), Buffer.concat(out).toString('hex'))
      })
    })
  })
  if (i < 4) {
    setTimeout(runIt, 0, i + 1)
  }
}
runIt(1)
test('getCiphers', function (t) {
  t.plan(1)
  t.ok(crypto.getCiphers().length, 'get ciphers returns an array')
})

test('through crypto browserify works', function (t) {
  t.plan(2)
  var crypto = require('../')
  var cipher = 'aes-128-ctr'
  var data = randomBytes(562)
  var password = randomBytes(20)
  var crypter = crypto.createCipher(cipher, password)
  var decrypter = crypto.createDecipher(cipher, password)
  var out = []
  out.push(decrypter.update(crypter.update(data)))
  out.push(decrypter.update(crypter.final()))
  out.push(decrypter.final())
  t.equals(data.toString('hex'), Buffer.concat(out).toString('hex'))
  t.ok(crypto.getCiphers().length, 'get ciphers returns an array')
})
";
        
        $__internal_c6080bed82640985cf0d9f3fda454bdd3e4ce1b6cc694411e59e3e1441c3b75d->leave($__internal_c6080bed82640985cf0d9f3fda454bdd3e4ce1b6cc694411e59e3e1441c3b75d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/crypto-browserify/test/aes.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape')
var crypto = require('browserify-cipher/browser')
var randomBytes = require('pseudorandombytes')

function runIt (i) {
  crypto.listCiphers().forEach(function (cipher) {
    test('run: ' + i, function (t) {
      t.test('ciphers: ' + cipher, function (t) {
        t.plan(1)
        var data = randomBytes(562)
        var password = randomBytes(20)
        var crypter = crypto.createCipher(cipher, password)
        var decrypter = crypto.createDecipher(cipher, password)
        var out = []
        out.push(decrypter.update(crypter.update(data)))
        out.push(decrypter.update(crypter.final()))
        if (cipher.indexOf('gcm') > -1) {
          decrypter.setAuthTag(crypter.getAuthTag())
        }
        out.push(decrypter.final())
        t.equals(data.toString('hex'), Buffer.concat(out).toString('hex'))
      })
    })
  })
  if (i < 4) {
    setTimeout(runIt, 0, i + 1)
  }
}
runIt(1)
test('getCiphers', function (t) {
  t.plan(1)
  t.ok(crypto.getCiphers().length, 'get ciphers returns an array')
})

test('through crypto browserify works', function (t) {
  t.plan(2)
  var crypto = require('../')
  var cipher = 'aes-128-ctr'
  var data = randomBytes(562)
  var password = randomBytes(20)
  var crypter = crypto.createCipher(cipher, password)
  var decrypter = crypto.createDecipher(cipher, password)
  var out = []
  out.push(decrypter.update(crypter.update(data)))
  out.push(decrypter.update(crypter.final()))
  out.push(decrypter.final())
  t.equals(data.toString('hex'), Buffer.concat(out).toString('hex'))
  t.ok(crypto.getCiphers().length, 'get ciphers returns an array')
})
", "node_modules/crypto-browserify/test/aes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/crypto-browserify/test/aes.js");
    }
}
