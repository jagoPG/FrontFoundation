<?php

/* node_modules/browserify-aes/streamCipher.js */
class __TwigTemplate_5511fe0a43cf868fa5f2292c806ed2409678cef58b2d4d4378cb2502097d96dd extends Twig_Template
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
        $__internal_516242a46c3281d813f281db50bea59e0ade3015900b6b2de0759a0ef25ca29f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516242a46c3281d813f281db50bea59e0ade3015900b6b2de0759a0ef25ca29f->enter($__internal_516242a46c3281d813f281db50bea59e0ade3015900b6b2de0759a0ef25ca29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/browserify-aes/streamCipher.js"));

        // line 1
        echo "var aes = require('./aes')
var Buffer = require('safe-buffer').Buffer
var Transform = require('cipher-base')
var inherits = require('inherits')

function StreamCipher (mode, key, iv, decrypt) {
  Transform.call(this)

  this._cipher = new aes.AES(key)
  this._prev = Buffer.from(iv)
  this._cache = Buffer.allocUnsafe(0)
  this._secCache = Buffer.allocUnsafe(0)
  this._decrypt = decrypt
  this._mode = mode
}

inherits(StreamCipher, Transform)

StreamCipher.prototype._update = function (chunk) {
  return this._mode.encrypt(this, chunk, this._decrypt)
}

StreamCipher.prototype._final = function () {
  this._cipher.scrub()
}

module.exports = StreamCipher
";
        
        $__internal_516242a46c3281d813f281db50bea59e0ade3015900b6b2de0759a0ef25ca29f->leave($__internal_516242a46c3281d813f281db50bea59e0ade3015900b6b2de0759a0ef25ca29f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/browserify-aes/streamCipher.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var aes = require('./aes')
var Buffer = require('safe-buffer').Buffer
var Transform = require('cipher-base')
var inherits = require('inherits')

function StreamCipher (mode, key, iv, decrypt) {
  Transform.call(this)

  this._cipher = new aes.AES(key)
  this._prev = Buffer.from(iv)
  this._cache = Buffer.allocUnsafe(0)
  this._secCache = Buffer.allocUnsafe(0)
  this._decrypt = decrypt
  this._mode = mode
}

inherits(StreamCipher, Transform)

StreamCipher.prototype._update = function (chunk) {
  return this._mode.encrypt(this, chunk, this._decrypt)
}

StreamCipher.prototype._final = function () {
  this._cipher.scrub()
}

module.exports = StreamCipher
", "node_modules/browserify-aes/streamCipher.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/browserify-aes/streamCipher.js");
    }
}
