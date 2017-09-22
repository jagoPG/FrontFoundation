<?php

/* node_modules/browserify-des/test.js */
class __TwigTemplate_5ac3d7d0a2723094d39c782cc50cb0e9e4a1e064dba605ce009ae74c6af96d79 extends Twig_Template
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
        $__internal_6984b59d00e4c737d6822aff856b2537ab9d8eb5bc0a60759cd2aa270b4901d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6984b59d00e4c737d6822aff856b2537ab9d8eb5bc0a60759cd2aa270b4901d7->enter($__internal_6984b59d00e4c737d6822aff856b2537ab9d8eb5bc0a60759cd2aa270b4901d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/browserify-des/test.js"));

        // line 1
        echo "var test = require('tape')
var DES = require('./')
var modes = require('./modes')
var crypto = require('crypto')

Object.keys(modes).forEach(function (mode) {
  test(mode, function (t) {
    var i = 0
    while (++i < 10) {
      runOnce(i)
    }
    function runOnce (i) {
      t.test('run: ' + i, function (t) {
        t.plan(2)
        var key = crypto.randomBytes(modes[mode].key)
        var iv = crypto.randomBytes(modes[mode].iv)
        var text = crypto.randomBytes(200)
        var ourEncrypt
        try {
          ourEncrypt = new DES({
            mode: mode,
            key: key,
            iv: iv
          })
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
        var nodeCipherText = Buffer.concat([nodeEncrypt.update(text), nodeEncrypt.final()])
        t.equals(nodeCipherText.toString('hex'), ourCipherText.toString('hex'))
        var ourDecrypt = new DES({
          mode: mode,
          key: key,
          iv: iv,
          decrypt: true
        })
        var plainText = Buffer.concat([ourDecrypt.update(ourCipherText), ourDecrypt.final()])
        t.equals(text.toString('hex'), plainText.toString('hex'))
      })
    }
  })
})
";
        
        $__internal_6984b59d00e4c737d6822aff856b2537ab9d8eb5bc0a60759cd2aa270b4901d7->leave($__internal_6984b59d00e4c737d6822aff856b2537ab9d8eb5bc0a60759cd2aa270b4901d7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/browserify-des/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape')
var DES = require('./')
var modes = require('./modes')
var crypto = require('crypto')

Object.keys(modes).forEach(function (mode) {
  test(mode, function (t) {
    var i = 0
    while (++i < 10) {
      runOnce(i)
    }
    function runOnce (i) {
      t.test('run: ' + i, function (t) {
        t.plan(2)
        var key = crypto.randomBytes(modes[mode].key)
        var iv = crypto.randomBytes(modes[mode].iv)
        var text = crypto.randomBytes(200)
        var ourEncrypt
        try {
          ourEncrypt = new DES({
            mode: mode,
            key: key,
            iv: iv
          })
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
        var nodeCipherText = Buffer.concat([nodeEncrypt.update(text), nodeEncrypt.final()])
        t.equals(nodeCipherText.toString('hex'), ourCipherText.toString('hex'))
        var ourDecrypt = new DES({
          mode: mode,
          key: key,
          iv: iv,
          decrypt: true
        })
        var plainText = Buffer.concat([ourDecrypt.update(ourCipherText), ourDecrypt.final()])
        t.equals(text.toString('hex'), plainText.toString('hex'))
      })
    }
  })
})
", "node_modules/browserify-des/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/browserify-des/test.js");
    }
}
