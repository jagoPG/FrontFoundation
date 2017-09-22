<?php

/* node_modules/fsevents/node_modules/request/lib/multipart.js */
class __TwigTemplate_f720cbdc10248eb49e54e151e7587520114321dd692718ac63d70627e5be4ac5 extends Twig_Template
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
        $__internal_bd847bdaaf96d73fc96dfbba40c7408cf8db0e46be0160aa3493d927bb403cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd847bdaaf96d73fc96dfbba40c7408cf8db0e46be0160aa3493d927bb403cd5->enter($__internal_bd847bdaaf96d73fc96dfbba40c7408cf8db0e46be0160aa3493d927bb403cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/request/lib/multipart.js"));

        // line 1
        echo "'use strict'

var uuid = require('uuid')
  , CombinedStream = require('combined-stream')
  , isstream = require('isstream')
  , Buffer = require('safe-buffer').Buffer


function Multipart (request) {
  this.request = request
  this.boundary = uuid()
  this.chunked = false
  this.body = null
}

Multipart.prototype.isChunked = function (options) {
  var self = this
    , chunked = false
    , parts = options.data || options

  if (!parts.forEach) {
    self.request.emit('error', new Error('Argument error, options.multipart.'))
  }

  if (options.chunked !== undefined) {
    chunked = options.chunked
  }

  if (self.request.getHeader('transfer-encoding') === 'chunked') {
    chunked = true
  }

  if (!chunked) {
    parts.forEach(function (part) {
      if (typeof part.body === 'undefined') {
        self.request.emit('error', new Error('Body attribute missing in multipart.'))
      }
      if (isstream(part.body)) {
        chunked = true
      }
    })
  }

  return chunked
}

Multipart.prototype.setHeaders = function (chunked) {
  var self = this

  if (chunked && !self.request.hasHeader('transfer-encoding')) {
    self.request.setHeader('transfer-encoding', 'chunked')
  }

  var header = self.request.getHeader('content-type')

  if (!header || header.indexOf('multipart') === -1) {
    self.request.setHeader('content-type', 'multipart/related; boundary=' + self.boundary)
  } else {
    if (header.indexOf('boundary') !== -1) {
      self.boundary = header.replace(/.*boundary=([^\\s;]+).*/, '\$1')
    } else {
      self.request.setHeader('content-type', header + '; boundary=' + self.boundary)
    }
  }
}

Multipart.prototype.build = function (parts, chunked) {
  var self = this
  var body = chunked ? new CombinedStream() : []

  function add (part) {
    if (typeof part === 'number') {
      part = part.toString()
    }
    return chunked ? body.append(part) : body.push(Buffer.from(part))
  }

  if (self.request.preambleCRLF) {
    add('\\r\\n')
  }

  parts.forEach(function (part) {
    var preamble = '--' + self.boundary + '\\r\\n'
    Object.keys(part).forEach(function (key) {
      if (key === 'body') { return }
      preamble += key + ': ' + part[key] + '\\r\\n'
    })
    preamble += '\\r\\n'
    add(preamble)
    add(part.body)
    add('\\r\\n')
  })
  add('--' + self.boundary + '--')

  if (self.request.postambleCRLF) {
    add('\\r\\n')
  }

  return body
}

Multipart.prototype.onRequest = function (options) {
  var self = this

  var chunked = self.isChunked(options)
    , parts = options.data || options

  self.setHeaders(chunked)
  self.chunked = chunked
  self.body = self.build(parts, chunked)
}

exports.Multipart = Multipart
";
        
        $__internal_bd847bdaaf96d73fc96dfbba40c7408cf8db0e46be0160aa3493d927bb403cd5->leave($__internal_bd847bdaaf96d73fc96dfbba40c7408cf8db0e46be0160aa3493d927bb403cd5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/request/lib/multipart.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'

var uuid = require('uuid')
  , CombinedStream = require('combined-stream')
  , isstream = require('isstream')
  , Buffer = require('safe-buffer').Buffer


function Multipart (request) {
  this.request = request
  this.boundary = uuid()
  this.chunked = false
  this.body = null
}

Multipart.prototype.isChunked = function (options) {
  var self = this
    , chunked = false
    , parts = options.data || options

  if (!parts.forEach) {
    self.request.emit('error', new Error('Argument error, options.multipart.'))
  }

  if (options.chunked !== undefined) {
    chunked = options.chunked
  }

  if (self.request.getHeader('transfer-encoding') === 'chunked') {
    chunked = true
  }

  if (!chunked) {
    parts.forEach(function (part) {
      if (typeof part.body === 'undefined') {
        self.request.emit('error', new Error('Body attribute missing in multipart.'))
      }
      if (isstream(part.body)) {
        chunked = true
      }
    })
  }

  return chunked
}

Multipart.prototype.setHeaders = function (chunked) {
  var self = this

  if (chunked && !self.request.hasHeader('transfer-encoding')) {
    self.request.setHeader('transfer-encoding', 'chunked')
  }

  var header = self.request.getHeader('content-type')

  if (!header || header.indexOf('multipart') === -1) {
    self.request.setHeader('content-type', 'multipart/related; boundary=' + self.boundary)
  } else {
    if (header.indexOf('boundary') !== -1) {
      self.boundary = header.replace(/.*boundary=([^\\s;]+).*/, '\$1')
    } else {
      self.request.setHeader('content-type', header + '; boundary=' + self.boundary)
    }
  }
}

Multipart.prototype.build = function (parts, chunked) {
  var self = this
  var body = chunked ? new CombinedStream() : []

  function add (part) {
    if (typeof part === 'number') {
      part = part.toString()
    }
    return chunked ? body.append(part) : body.push(Buffer.from(part))
  }

  if (self.request.preambleCRLF) {
    add('\\r\\n')
  }

  parts.forEach(function (part) {
    var preamble = '--' + self.boundary + '\\r\\n'
    Object.keys(part).forEach(function (key) {
      if (key === 'body') { return }
      preamble += key + ': ' + part[key] + '\\r\\n'
    })
    preamble += '\\r\\n'
    add(preamble)
    add(part.body)
    add('\\r\\n')
  })
  add('--' + self.boundary + '--')

  if (self.request.postambleCRLF) {
    add('\\r\\n')
  }

  return body
}

Multipart.prototype.onRequest = function (options) {
  var self = this

  var chunked = self.isChunked(options)
    , parts = options.data || options

  self.setHeaders(chunked)
  self.chunked = chunked
  self.body = self.build(parts, chunked)
}

exports.Multipart = Multipart
", "node_modules/fsevents/node_modules/request/lib/multipart.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/request/lib/multipart.js");
    }
}