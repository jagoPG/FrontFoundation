<?php

/* node_modules/browserify-aes/modes/ofb.js */
class __TwigTemplate_c8e02620049159c04dbc421895b8708731d3ce28c08794b4633c38b7e7d7cbf1 extends Twig_Template
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
        $__internal_14f816c8e5a51df500c67fb22d182db5c3e66a96a8d37619164bf931313acba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f816c8e5a51df500c67fb22d182db5c3e66a96a8d37619164bf931313acba0->enter($__internal_14f816c8e5a51df500c67fb22d182db5c3e66a96a8d37619164bf931313acba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/browserify-aes/modes/ofb.js"));

        // line 1
        echo "var xor = require('buffer-xor')

function getBlock (self) {
  self._prev = self._cipher.encryptBlock(self._prev)
  return self._prev
}

exports.encrypt = function (self, chunk) {
  while (self._cache.length < chunk.length) {
    self._cache = Buffer.concat([self._cache, getBlock(self)])
  }

  var pad = self._cache.slice(0, chunk.length)
  self._cache = self._cache.slice(chunk.length)
  return xor(chunk, pad)
}
";
        
        $__internal_14f816c8e5a51df500c67fb22d182db5c3e66a96a8d37619164bf931313acba0->leave($__internal_14f816c8e5a51df500c67fb22d182db5c3e66a96a8d37619164bf931313acba0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/browserify-aes/modes/ofb.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var xor = require('buffer-xor')

function getBlock (self) {
  self._prev = self._cipher.encryptBlock(self._prev)
  return self._prev
}

exports.encrypt = function (self, chunk) {
  while (self._cache.length < chunk.length) {
    self._cache = Buffer.concat([self._cache, getBlock(self)])
  }

  var pad = self._cache.slice(0, chunk.length)
  self._cache = self._cache.slice(chunk.length)
  return xor(chunk, pad)
}
", "node_modules/browserify-aes/modes/ofb.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/browserify-aes/modes/ofb.js");
    }
}
