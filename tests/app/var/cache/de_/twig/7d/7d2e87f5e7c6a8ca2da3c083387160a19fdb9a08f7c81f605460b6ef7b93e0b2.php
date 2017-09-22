<?php

/* node_modules/browserify-des/index.js */
class __TwigTemplate_c48963c15cae479e75efdf819548528e832cd100b625ac8d89c9845008fabf37 extends Twig_Template
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
        $__internal_1de02a4f1af04556463079186581eeafd6f85c3307df0d6544b11310c1f39352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de02a4f1af04556463079186581eeafd6f85c3307df0d6544b11310c1f39352->enter($__internal_1de02a4f1af04556463079186581eeafd6f85c3307df0d6544b11310c1f39352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/browserify-des/index.js"));

        // line 1
        echo "var CipherBase = require('cipher-base')
var des = require('des.js')
var inherits = require('inherits')

var modes = {
  'des-ede3-cbc': des.CBC.instantiate(des.EDE),
  'des-ede3': des.EDE,
  'des-ede-cbc': des.CBC.instantiate(des.EDE),
  'des-ede': des.EDE,
  'des-cbc': des.CBC.instantiate(des.DES),
  'des-ecb': des.DES
}
modes.des = modes['des-cbc']
modes.des3 = modes['des-ede3-cbc']
module.exports = DES
inherits(DES, CipherBase)
function DES (opts) {
  CipherBase.call(this)
  var modeName = opts.mode.toLowerCase()
  var mode = modes[modeName]
  var type
  if (opts.decrypt) {
    type = 'decrypt'
  } else {
    type = 'encrypt'
  }
  var key = opts.key
  if (modeName === 'des-ede' || modeName === 'des-ede-cbc') {
    key = Buffer.concat([key, key.slice(0, 8)])
  }
  var iv = opts.iv
  this._des = mode.create({
    key: key,
    iv: iv,
    type: type
  })
}
DES.prototype._update = function (data) {
  return new Buffer(this._des.update(data))
}
DES.prototype._final = function () {
  return new Buffer(this._des.final())
}
";
        
        $__internal_1de02a4f1af04556463079186581eeafd6f85c3307df0d6544b11310c1f39352->leave($__internal_1de02a4f1af04556463079186581eeafd6f85c3307df0d6544b11310c1f39352_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/browserify-des/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var CipherBase = require('cipher-base')
var des = require('des.js')
var inherits = require('inherits')

var modes = {
  'des-ede3-cbc': des.CBC.instantiate(des.EDE),
  'des-ede3': des.EDE,
  'des-ede-cbc': des.CBC.instantiate(des.EDE),
  'des-ede': des.EDE,
  'des-cbc': des.CBC.instantiate(des.DES),
  'des-ecb': des.DES
}
modes.des = modes['des-cbc']
modes.des3 = modes['des-ede3-cbc']
module.exports = DES
inherits(DES, CipherBase)
function DES (opts) {
  CipherBase.call(this)
  var modeName = opts.mode.toLowerCase()
  var mode = modes[modeName]
  var type
  if (opts.decrypt) {
    type = 'decrypt'
  } else {
    type = 'encrypt'
  }
  var key = opts.key
  if (modeName === 'des-ede' || modeName === 'des-ede-cbc') {
    key = Buffer.concat([key, key.slice(0, 8)])
  }
  var iv = opts.iv
  this._des = mode.create({
    key: key,
    iv: iv,
    type: type
  })
}
DES.prototype._update = function (data) {
  return new Buffer(this._des.update(data))
}
DES.prototype._final = function () {
  return new Buffer(this._des.final())
}
", "node_modules/browserify-des/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/browserify-des/index.js");
    }
}
