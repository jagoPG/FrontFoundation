<?php

/* node_modules/browserify-cipher/test.js */
class __TwigTemplate_a1d7e9b48301d843ae19c550b5481968667ae1885787f19d8d7ac7d54973ae92 extends Twig_Template
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
        $__internal_59a1eb84be023a46e606745938a53a49cad415badde389f704b04459fdd80fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a1eb84be023a46e606745938a53a49cad415badde389f704b04459fdd80fa2->enter($__internal_59a1eb84be023a46e606745938a53a49cad415badde389f704b04459fdd80fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/browserify-cipher/test.js"));

        // line 1
        echo "var test = require('tape')
var crypto = require('crypto')
var desModes = require('browserify-des/modes')
var aesModes = require('browserify-aes/modes')
var ourCrypto = require('./browser')

function runIvTest (mode, keyLen, ivLen) {
  test('mode: ' + mode, function (t) {
    var i = 0
    while (++i < 10) {
      run(i)
    }
    function run (i) {
      t.test('run: ' + i, function (t) {
        t.plan(2)
        var key = crypto.randomBytes(keyLen)
        var iv = crypto.randomBytes(ivLen)
        var text = crypto.randomBytes(200)
        var ourEncrypt
        try {
          ourEncrypt = ourCrypto.createCipheriv(mode, key, iv)
        } catch (e) {
          t.notOk(e, e.stack)
        }
        var nodeEncrypt
        try {
          nodeEncrypt = crypto.createCipheriv(mode, key, iv)
        } catch (e) {
          t.notOk(e, e.stack)
        }
        var ourCipherText = Buffer.concat([ourEncrypt.update(text), ourEncrypt.final()])
        var authTag
        if (mode.slice(-3) === 'gcm') {
          authTag = ourEncrypt.getAuthTag()
        }
        var nodeCipherText = Buffer.concat([nodeEncrypt.update(text), nodeEncrypt.final()])
        t.equals(nodeCipherText.toString('hex'), ourCipherText.toString('hex'))
        var ourDecrypt = ourCrypto.createDecipheriv(mode, key, iv)
        if (mode.slice(-3) === 'gcm') {
          ourDecrypt.setAuthTag(authTag)
        }
        var plainText = Buffer.concat([ourDecrypt.update(ourCipherText), ourDecrypt.final()])
        t.equals(text.toString('hex'), plainText.toString('hex'))
      })
    }
  })
}
Object.keys(aesModes).forEach(function (modeName) {
  var mode = aesModes[modeName]
  runIvTest(modeName, mode.key / 8, mode.iv)
})
Object.keys(desModes).forEach(function (modeName) {
  var mode = desModes[modeName]
  runIvTest(modeName, mode.key, mode.iv)
})
";
        
        $__internal_59a1eb84be023a46e606745938a53a49cad415badde389f704b04459fdd80fa2->leave($__internal_59a1eb84be023a46e606745938a53a49cad415badde389f704b04459fdd80fa2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/browserify-cipher/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape')
var crypto = require('crypto')
var desModes = require('browserify-des/modes')
var aesModes = require('browserify-aes/modes')
var ourCrypto = require('./browser')

function runIvTest (mode, keyLen, ivLen) {
  test('mode: ' + mode, function (t) {
    var i = 0
    while (++i < 10) {
      run(i)
    }
    function run (i) {
      t.test('run: ' + i, function (t) {
        t.plan(2)
        var key = crypto.randomBytes(keyLen)
        var iv = crypto.randomBytes(ivLen)
        var text = crypto.randomBytes(200)
        var ourEncrypt
        try {
          ourEncrypt = ourCrypto.createCipheriv(mode, key, iv)
        } catch (e) {
          t.notOk(e, e.stack)
        }
        var nodeEncrypt
        try {
          nodeEncrypt = crypto.createCipheriv(mode, key, iv)
        } catch (e) {
          t.notOk(e, e.stack)
        }
        var ourCipherText = Buffer.concat([ourEncrypt.update(text), ourEncrypt.final()])
        var authTag
        if (mode.slice(-3) === 'gcm') {
          authTag = ourEncrypt.getAuthTag()
        }
        var nodeCipherText = Buffer.concat([nodeEncrypt.update(text), nodeEncrypt.final()])
        t.equals(nodeCipherText.toString('hex'), ourCipherText.toString('hex'))
        var ourDecrypt = ourCrypto.createDecipheriv(mode, key, iv)
        if (mode.slice(-3) === 'gcm') {
          ourDecrypt.setAuthTag(authTag)
        }
        var plainText = Buffer.concat([ourDecrypt.update(ourCipherText), ourDecrypt.final()])
        t.equals(text.toString('hex'), plainText.toString('hex'))
      })
    }
  })
}
Object.keys(aesModes).forEach(function (modeName) {
  var mode = aesModes[modeName]
  runIvTest(modeName, mode.key / 8, mode.iv)
})
Object.keys(desModes).forEach(function (modeName) {
  var mode = desModes[modeName]
  runIvTest(modeName, mode.key, mode.iv)
})
", "node_modules/browserify-cipher/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/browserify-cipher/test.js");
    }
}
