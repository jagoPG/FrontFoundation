<?php

/* node_modules/browserify-aes/modes/cfb.js */
class __TwigTemplate_b4e642138bcb6b676a154d4ee66c1a476cacee977f327dbb60c51671c366abdd extends Twig_Template
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
        $__internal_f2edbe331452adc3ced301dc136cccf80248fd2aace58a581616c7400cecd9dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2edbe331452adc3ced301dc136cccf80248fd2aace58a581616c7400cecd9dc->enter($__internal_f2edbe331452adc3ced301dc136cccf80248fd2aace58a581616c7400cecd9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/browserify-aes/modes/cfb.js"));

        // line 1
        echo "var Buffer = require('safe-buffer').Buffer
var xor = require('buffer-xor')

function encryptStart (self, data, decrypt) {
  var len = data.length
  var out = xor(data, self._cache)
  self._cache = self._cache.slice(len)
  self._prev = Buffer.concat([self._prev, decrypt ? data : out])
  return out
}

exports.encrypt = function (self, data, decrypt) {
  var out = Buffer.allocUnsafe(0)
  var len

  while (data.length) {
    if (self._cache.length === 0) {
      self._cache = self._cipher.encryptBlock(self._prev)
      self._prev = Buffer.allocUnsafe(0)
    }

    if (self._cache.length <= data.length) {
      len = self._cache.length
      out = Buffer.concat([out, encryptStart(self, data.slice(0, len), decrypt)])
      data = data.slice(len)
    } else {
      out = Buffer.concat([out, encryptStart(self, data, decrypt)])
      break
    }
  }

  return out
}
";
        
        $__internal_f2edbe331452adc3ced301dc136cccf80248fd2aace58a581616c7400cecd9dc->leave($__internal_f2edbe331452adc3ced301dc136cccf80248fd2aace58a581616c7400cecd9dc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/browserify-aes/modes/cfb.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var Buffer = require('safe-buffer').Buffer
var xor = require('buffer-xor')

function encryptStart (self, data, decrypt) {
  var len = data.length
  var out = xor(data, self._cache)
  self._cache = self._cache.slice(len)
  self._prev = Buffer.concat([self._prev, decrypt ? data : out])
  return out
}

exports.encrypt = function (self, data, decrypt) {
  var out = Buffer.allocUnsafe(0)
  var len

  while (data.length) {
    if (self._cache.length === 0) {
      self._cache = self._cipher.encryptBlock(self._prev)
      self._prev = Buffer.allocUnsafe(0)
    }

    if (self._cache.length <= data.length) {
      len = self._cache.length
      out = Buffer.concat([out, encryptStart(self, data.slice(0, len), decrypt)])
      data = data.slice(len)
    } else {
      out = Buffer.concat([out, encryptStart(self, data, decrypt)])
      break
    }
  }

  return out
}
", "node_modules/browserify-aes/modes/cfb.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/browserify-aes/modes/cfb.js");
    }
}
