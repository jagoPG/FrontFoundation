<?php

/* node_modules/create-hash/browser.js */
class __TwigTemplate_798911b0d0b9a1d4b0eade9ebff4bfc5979ddc44e69d87ee04ad5999fb9f6253 extends Twig_Template
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
        $__internal_2aa9779813d8b1a2ec267e04454572ed2a421f6e9ec2ed8690c92b62b958724c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa9779813d8b1a2ec267e04454572ed2a421f6e9ec2ed8690c92b62b958724c->enter($__internal_2aa9779813d8b1a2ec267e04454572ed2a421f6e9ec2ed8690c92b62b958724c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/create-hash/browser.js"));

        // line 1
        echo "'use strict'
var inherits = require('inherits')
var md5 = require('./md5')
var RIPEMD160 = require('ripemd160')
var sha = require('sha.js')

var Base = require('cipher-base')

function HashNoConstructor (hash) {
  Base.call(this, 'digest')

  this._hash = hash
  this.buffers = []
}

inherits(HashNoConstructor, Base)

HashNoConstructor.prototype._update = function (data) {
  this.buffers.push(data)
}

HashNoConstructor.prototype._final = function () {
  var buf = Buffer.concat(this.buffers)
  var r = this._hash(buf)
  this.buffers = null

  return r
}

function Hash (hash) {
  Base.call(this, 'digest')

  this._hash = hash
}

inherits(Hash, Base)

Hash.prototype._update = function (data) {
  this._hash.update(data)
}

Hash.prototype._final = function () {
  return this._hash.digest()
}

module.exports = function createHash (alg) {
  alg = alg.toLowerCase()
  if (alg === 'md5') return new HashNoConstructor(md5)
  if (alg === 'rmd160' || alg === 'ripemd160') return new Hash(new RIPEMD160())

  return new Hash(sha(alg))
}
";
        
        $__internal_2aa9779813d8b1a2ec267e04454572ed2a421f6e9ec2ed8690c92b62b958724c->leave($__internal_2aa9779813d8b1a2ec267e04454572ed2a421f6e9ec2ed8690c92b62b958724c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/create-hash/browser.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'
var inherits = require('inherits')
var md5 = require('./md5')
var RIPEMD160 = require('ripemd160')
var sha = require('sha.js')

var Base = require('cipher-base')

function HashNoConstructor (hash) {
  Base.call(this, 'digest')

  this._hash = hash
  this.buffers = []
}

inherits(HashNoConstructor, Base)

HashNoConstructor.prototype._update = function (data) {
  this.buffers.push(data)
}

HashNoConstructor.prototype._final = function () {
  var buf = Buffer.concat(this.buffers)
  var r = this._hash(buf)
  this.buffers = null

  return r
}

function Hash (hash) {
  Base.call(this, 'digest')

  this._hash = hash
}

inherits(Hash, Base)

Hash.prototype._update = function (data) {
  this._hash.update(data)
}

Hash.prototype._final = function () {
  return this._hash.digest()
}

module.exports = function createHash (alg) {
  alg = alg.toLowerCase()
  if (alg === 'md5') return new HashNoConstructor(md5)
  if (alg === 'rmd160' || alg === 'ripemd160') return new Hash(new RIPEMD160())

  return new Hash(sha(alg))
}
", "node_modules/create-hash/browser.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/create-hash/browser.js");
    }
}
