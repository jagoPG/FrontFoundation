<?php

/* node_modules/fstream/lib/proxy-writer.js */
class __TwigTemplate_8b2556c6367725e2b61eb0cd567dd28020c301f5d86917dfe04e9ce619a54440 extends Twig_Template
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
        $__internal_ea3b710c364bdb6b489b1f91fbca91b18a5bbfb4eeec9b506f658f59f5d7a9e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3b710c364bdb6b489b1f91fbca91b18a5bbfb4eeec9b506f658f59f5d7a9e3->enter($__internal_ea3b710c364bdb6b489b1f91fbca91b18a5bbfb4eeec9b506f658f59f5d7a9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fstream/lib/proxy-writer.js"));

        // line 1
        echo "// A writer for when we don't know what kind of thing
// the thing is.  That is, it's not explicitly set,
// so we're going to make it whatever the thing already
// is, or \"File\"
//
// Until then, collect all events.

module.exports = ProxyWriter

var Writer = require('./writer.js')
var getType = require('./get-type.js')
var inherits = require('inherits')
var collect = require('./collect.js')
var fs = require('fs')

inherits(ProxyWriter, Writer)

function ProxyWriter (props) {
  var self = this
  if (!(self instanceof ProxyWriter)) {
    throw new Error('ProxyWriter must be called as constructor.')
  }

  self.props = props
  self._needDrain = false

  Writer.call(self, props)
}

ProxyWriter.prototype._stat = function () {
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
    self._addProxy(Writer(props, current))
  })
}

ProxyWriter.prototype._addProxy = function (proxy) {
  // console.error(\"~~ set proxy\", this.path)
  var self = this
  if (self._proxy) {
    return self.error('proxy already set')
  }

  self._proxy = proxy
  ;[
    'ready',
    'error',
    'close',
    'pipe',
    'drain',
    'warn'
  ].forEach(function (ev) {
    proxy.on(ev, self.emit.bind(self, ev))
  })

  self.emit('proxy', proxy)

  var calls = self._buffer
  calls.forEach(function (c) {
    // console.error(\"~~ ~~ proxy buffered call\", c[0], c[1])
    proxy[c[0]].apply(proxy, c[1])
  })
  self._buffer.length = 0
  if (self._needsDrain) self.emit('drain')
}

ProxyWriter.prototype.add = function (entry) {
  // console.error(\"~~ proxy add\")
  collect(entry)

  if (!this._proxy) {
    this._buffer.push(['add', [entry]])
    this._needDrain = true
    return false
  }
  return this._proxy.add(entry)
}

ProxyWriter.prototype.write = function (c) {
  // console.error('~~ proxy write')
  if (!this._proxy) {
    this._buffer.push(['write', [c]])
    this._needDrain = true
    return false
  }
  return this._proxy.write(c)
}

ProxyWriter.prototype.end = function (c) {
  // console.error('~~ proxy end')
  if (!this._proxy) {
    this._buffer.push(['end', [c]])
    return false
  }
  return this._proxy.end(c)
}
";
        
        $__internal_ea3b710c364bdb6b489b1f91fbca91b18a5bbfb4eeec9b506f658f59f5d7a9e3->leave($__internal_ea3b710c364bdb6b489b1f91fbca91b18a5bbfb4eeec9b506f658f59f5d7a9e3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fstream/lib/proxy-writer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// A writer for when we don't know what kind of thing
// the thing is.  That is, it's not explicitly set,
// so we're going to make it whatever the thing already
// is, or \"File\"
//
// Until then, collect all events.

module.exports = ProxyWriter

var Writer = require('./writer.js')
var getType = require('./get-type.js')
var inherits = require('inherits')
var collect = require('./collect.js')
var fs = require('fs')

inherits(ProxyWriter, Writer)

function ProxyWriter (props) {
  var self = this
  if (!(self instanceof ProxyWriter)) {
    throw new Error('ProxyWriter must be called as constructor.')
  }

  self.props = props
  self._needDrain = false

  Writer.call(self, props)
}

ProxyWriter.prototype._stat = function () {
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
    self._addProxy(Writer(props, current))
  })
}

ProxyWriter.prototype._addProxy = function (proxy) {
  // console.error(\"~~ set proxy\", this.path)
  var self = this
  if (self._proxy) {
    return self.error('proxy already set')
  }

  self._proxy = proxy
  ;[
    'ready',
    'error',
    'close',
    'pipe',
    'drain',
    'warn'
  ].forEach(function (ev) {
    proxy.on(ev, self.emit.bind(self, ev))
  })

  self.emit('proxy', proxy)

  var calls = self._buffer
  calls.forEach(function (c) {
    // console.error(\"~~ ~~ proxy buffered call\", c[0], c[1])
    proxy[c[0]].apply(proxy, c[1])
  })
  self._buffer.length = 0
  if (self._needsDrain) self.emit('drain')
}

ProxyWriter.prototype.add = function (entry) {
  // console.error(\"~~ proxy add\")
  collect(entry)

  if (!this._proxy) {
    this._buffer.push(['add', [entry]])
    this._needDrain = true
    return false
  }
  return this._proxy.add(entry)
}

ProxyWriter.prototype.write = function (c) {
  // console.error('~~ proxy write')
  if (!this._proxy) {
    this._buffer.push(['write', [c]])
    this._needDrain = true
    return false
  }
  return this._proxy.write(c)
}

ProxyWriter.prototype.end = function (c) {
  // console.error('~~ proxy end')
  if (!this._proxy) {
    this._buffer.push(['end', [c]])
    return false
  }
  return this._proxy.end(c)
}
", "node_modules/fstream/lib/proxy-writer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fstream/lib/proxy-writer.js");
    }
}