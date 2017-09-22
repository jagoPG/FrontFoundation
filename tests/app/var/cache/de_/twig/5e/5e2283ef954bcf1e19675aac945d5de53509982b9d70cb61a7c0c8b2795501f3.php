<?php

/* node_modules/fstream/lib/proxy-reader.js */
class __TwigTemplate_23b8474c229cb52f359453332c2fce49daca351c404fa960fb12865b7d4ac4ba extends Twig_Template
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
        $__internal_05cb9f1b43f8d7bb51a6193d11aba4540cc1a07519bd4b6844db4b921cced6eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05cb9f1b43f8d7bb51a6193d11aba4540cc1a07519bd4b6844db4b921cced6eb->enter($__internal_05cb9f1b43f8d7bb51a6193d11aba4540cc1a07519bd4b6844db4b921cced6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fstream/lib/proxy-reader.js"));

        // line 1
        echo "// A reader for when we don't yet know what kind of thing
// the thing is.

module.exports = ProxyReader

var Reader = require('./reader.js')
var getType = require('./get-type.js')
var inherits = require('inherits')
var fs = require('graceful-fs')

inherits(ProxyReader, Reader)

function ProxyReader (props) {
  var self = this
  if (!(self instanceof ProxyReader)) {
    throw new Error('ProxyReader must be called as constructor.')
  }

  self.props = props
  self._buffer = []
  self.ready = false

  Reader.call(self, props)
}

ProxyReader.prototype._stat = function () {
  var self = this
  var props = self.props
  // stat the thing to see what the proxy should be.
  var stat = props.follow ? 'stat' : 'lstat'

  fs[stat](props.path, function (er, current) {
    var type
    if (er || !current) {
      type = 'File'
    } else {
      type = getType(current)
    }

    props[type] = true
    props.type = self.type = type

    self._old = current
    self._addProxy(Reader(props, current))
  })
}

ProxyReader.prototype._addProxy = function (proxy) {
  var self = this
  if (self._proxyTarget) {
    return self.error('proxy already set')
  }

  self._proxyTarget = proxy
  proxy._proxy = self

  ;[
    'error',
    'data',
    'end',
    'close',
    'linkpath',
    'entry',
    'entryEnd',
    'child',
    'childEnd',
    'warn',
    'stat'
  ].forEach(function (ev) {
    // console.error('~~ proxy event', ev, self.path)
    proxy.on(ev, self.emit.bind(self, ev))
  })

  self.emit('proxy', proxy)

  proxy.on('ready', function () {
    // console.error(\"~~ proxy is ready!\", self.path)
    self.ready = true
    self.emit('ready')
  })

  var calls = self._buffer
  self._buffer.length = 0
  calls.forEach(function (c) {
    proxy[c[0]].apply(proxy, c[1])
  })
}

ProxyReader.prototype.pause = function () {
  return this._proxyTarget ? this._proxyTarget.pause() : false
}

ProxyReader.prototype.resume = function () {
  return this._proxyTarget ? this._proxyTarget.resume() : false
}
";
        
        $__internal_05cb9f1b43f8d7bb51a6193d11aba4540cc1a07519bd4b6844db4b921cced6eb->leave($__internal_05cb9f1b43f8d7bb51a6193d11aba4540cc1a07519bd4b6844db4b921cced6eb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fstream/lib/proxy-reader.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// A reader for when we don't yet know what kind of thing
// the thing is.

module.exports = ProxyReader

var Reader = require('./reader.js')
var getType = require('./get-type.js')
var inherits = require('inherits')
var fs = require('graceful-fs')

inherits(ProxyReader, Reader)

function ProxyReader (props) {
  var self = this
  if (!(self instanceof ProxyReader)) {
    throw new Error('ProxyReader must be called as constructor.')
  }

  self.props = props
  self._buffer = []
  self.ready = false

  Reader.call(self, props)
}

ProxyReader.prototype._stat = function () {
  var self = this
  var props = self.props
  // stat the thing to see what the proxy should be.
  var stat = props.follow ? 'stat' : 'lstat'

  fs[stat](props.path, function (er, current) {
    var type
    if (er || !current) {
      type = 'File'
    } else {
      type = getType(current)
    }

    props[type] = true
    props.type = self.type = type

    self._old = current
    self._addProxy(Reader(props, current))
  })
}

ProxyReader.prototype._addProxy = function (proxy) {
  var self = this
  if (self._proxyTarget) {
    return self.error('proxy already set')
  }

  self._proxyTarget = proxy
  proxy._proxy = self

  ;[
    'error',
    'data',
    'end',
    'close',
    'linkpath',
    'entry',
    'entryEnd',
    'child',
    'childEnd',
    'warn',
    'stat'
  ].forEach(function (ev) {
    // console.error('~~ proxy event', ev, self.path)
    proxy.on(ev, self.emit.bind(self, ev))
  })

  self.emit('proxy', proxy)

  proxy.on('ready', function () {
    // console.error(\"~~ proxy is ready!\", self.path)
    self.ready = true
    self.emit('ready')
  })

  var calls = self._buffer
  self._buffer.length = 0
  calls.forEach(function (c) {
    proxy[c[0]].apply(proxy, c[1])
  })
}

ProxyReader.prototype.pause = function () {
  return this._proxyTarget ? this._proxyTarget.pause() : false
}

ProxyReader.prototype.resume = function () {
  return this._proxyTarget ? this._proxyTarget.resume() : false
}
", "node_modules/fstream/lib/proxy-reader.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fstream/lib/proxy-reader.js");
    }
}
