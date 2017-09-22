<?php

/* node_modules/create-hash/make-hash.js */
class __TwigTemplate_f7dbec7fb367db0d9cb67531b0620c0298ce5284594b2c2ea4642c590f259596 extends Twig_Template
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
        $__internal_fffe455794a78913efd42243f8939d21a5db70151c3bdec6b2e64622ed9aa82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fffe455794a78913efd42243f8939d21a5db70151c3bdec6b2e64622ed9aa82f->enter($__internal_fffe455794a78913efd42243f8939d21a5db70151c3bdec6b2e64622ed9aa82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/create-hash/make-hash.js"));

        // line 1
        echo "'use strict'
var intSize = 4
var zeroBuffer = new Buffer(intSize)
zeroBuffer.fill(0)

var charSize = 8
var hashSize = 16

function toArray (buf) {
  if ((buf.length % intSize) !== 0) {
    var len = buf.length + (intSize - (buf.length % intSize))
    buf = Buffer.concat([buf, zeroBuffer], len)
  }

  var arr = new Array(buf.length >>> 2)
  for (var i = 0, j = 0; i < buf.length; i += intSize, j++) {
    arr[j] = buf.readInt32LE(i)
  }

  return arr
}

module.exports = function hash (buf, fn) {
  var arr = fn(toArray(buf), buf.length * charSize)
  buf = new Buffer(hashSize)
  for (var i = 0; i < arr.length; i++) {
    buf.writeInt32LE(arr[i], i << 2, true)
  }
  return buf
}
";
        
        $__internal_fffe455794a78913efd42243f8939d21a5db70151c3bdec6b2e64622ed9aa82f->leave($__internal_fffe455794a78913efd42243f8939d21a5db70151c3bdec6b2e64622ed9aa82f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/create-hash/make-hash.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'
var intSize = 4
var zeroBuffer = new Buffer(intSize)
zeroBuffer.fill(0)

var charSize = 8
var hashSize = 16

function toArray (buf) {
  if ((buf.length % intSize) !== 0) {
    var len = buf.length + (intSize - (buf.length % intSize))
    buf = Buffer.concat([buf, zeroBuffer], len)
  }

  var arr = new Array(buf.length >>> 2)
  for (var i = 0, j = 0; i < buf.length; i += intSize, j++) {
    arr[j] = buf.readInt32LE(i)
  }

  return arr
}

module.exports = function hash (buf, fn) {
  var arr = fn(toArray(buf), buf.length * charSize)
  buf = new Buffer(hashSize)
  for (var i = 0; i < arr.length; i++) {
    buf.writeInt32LE(arr[i], i << 2, true)
  }
  return buf
}
", "node_modules/create-hash/make-hash.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/create-hash/make-hash.js");
    }
}
