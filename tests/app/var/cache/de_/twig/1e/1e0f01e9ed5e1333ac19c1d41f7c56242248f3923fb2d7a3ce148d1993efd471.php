<?php

/* node_modules/request/lib/helpers.js */
class __TwigTemplate_f764003c75da32371c27c6d8bd8a91593712a162b5ef2bd5023782077e774c88 extends Twig_Template
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
        $__internal_a61865a0cf9c869c0ac3780f2581a1c31bcd28fb8950cdeec24e8e7f8300e8ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a61865a0cf9c869c0ac3780f2581a1c31bcd28fb8950cdeec24e8e7f8300e8ab->enter($__internal_a61865a0cf9c869c0ac3780f2581a1c31bcd28fb8950cdeec24e8e7f8300e8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/request/lib/helpers.js"));

        // line 1
        echo "'use strict'

var jsonSafeStringify = require('json-stringify-safe')
  , crypto = require('crypto')
  , Buffer = require('safe-buffer').Buffer

var defer = typeof setImmediate === 'undefined'
  ? process.nextTick
  : setImmediate

function paramsHaveRequestBody(params) {
  return (
    params.body ||
    params.requestBodyStream ||
    (params.json && typeof params.json !== 'boolean') ||
    params.multipart
  )
}

function safeStringify (obj, replacer) {
  var ret
  try {
    ret = JSON.stringify(obj, replacer)
  } catch (e) {
    ret = jsonSafeStringify(obj, replacer)
  }
  return ret
}

function md5 (str) {
  return crypto.createHash('md5').update(str).digest('hex')
}

function isReadStream (rs) {
  return rs.readable && rs.path && rs.mode
}

function toBase64 (str) {
  return Buffer.from(str || '', 'utf8').toString('base64')
}

function copy (obj) {
  var o = {}
  Object.keys(obj).forEach(function (i) {
    o[i] = obj[i]
  })
  return o
}

function version () {
  var numbers = process.version.replace('v', '').split('.')
  return {
    major: parseInt(numbers[0], 10),
    minor: parseInt(numbers[1], 10),
    patch: parseInt(numbers[2], 10)
  }
}

exports.paramsHaveRequestBody = paramsHaveRequestBody
exports.safeStringify         = safeStringify
exports.md5                   = md5
exports.isReadStream          = isReadStream
exports.toBase64              = toBase64
exports.copy                  = copy
exports.version               = version
exports.defer                 = defer
";
        
        $__internal_a61865a0cf9c869c0ac3780f2581a1c31bcd28fb8950cdeec24e8e7f8300e8ab->leave($__internal_a61865a0cf9c869c0ac3780f2581a1c31bcd28fb8950cdeec24e8e7f8300e8ab_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/request/lib/helpers.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'

var jsonSafeStringify = require('json-stringify-safe')
  , crypto = require('crypto')
  , Buffer = require('safe-buffer').Buffer

var defer = typeof setImmediate === 'undefined'
  ? process.nextTick
  : setImmediate

function paramsHaveRequestBody(params) {
  return (
    params.body ||
    params.requestBodyStream ||
    (params.json && typeof params.json !== 'boolean') ||
    params.multipart
  )
}

function safeStringify (obj, replacer) {
  var ret
  try {
    ret = JSON.stringify(obj, replacer)
  } catch (e) {
    ret = jsonSafeStringify(obj, replacer)
  }
  return ret
}

function md5 (str) {
  return crypto.createHash('md5').update(str).digest('hex')
}

function isReadStream (rs) {
  return rs.readable && rs.path && rs.mode
}

function toBase64 (str) {
  return Buffer.from(str || '', 'utf8').toString('base64')
}

function copy (obj) {
  var o = {}
  Object.keys(obj).forEach(function (i) {
    o[i] = obj[i]
  })
  return o
}

function version () {
  var numbers = process.version.replace('v', '').split('.')
  return {
    major: parseInt(numbers[0], 10),
    minor: parseInt(numbers[1], 10),
    patch: parseInt(numbers[2], 10)
  }
}

exports.paramsHaveRequestBody = paramsHaveRequestBody
exports.safeStringify         = safeStringify
exports.md5                   = md5
exports.isReadStream          = isReadStream
exports.toBase64              = toBase64
exports.copy                  = copy
exports.version               = version
exports.defer                 = defer
", "node_modules/request/lib/helpers.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/request/lib/helpers.js");
    }
}
