<?php

/* node_modules/fsevents/node_modules/fstream/lib/abstract.js */
class __TwigTemplate_5ee6e41c144a9cc56f35d8543f9f29519b8061a913cc8496e34d1356d85fe56d extends Twig_Template
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
        $__internal_efa53a4247d66a22e760f8af06c3aeae1a24155c77967b404845829006c78515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa53a4247d66a22e760f8af06c3aeae1a24155c77967b404845829006c78515->enter($__internal_efa53a4247d66a22e760f8af06c3aeae1a24155c77967b404845829006c78515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/fstream/lib/abstract.js"));

        // line 1
        echo "// the parent class for all fstreams.

module.exports = Abstract

var Stream = require('stream').Stream
var inherits = require('inherits')

function Abstract () {
  Stream.call(this)
}

inherits(Abstract, Stream)

Abstract.prototype.on = function (ev, fn) {
  if (ev === 'ready' && this.ready) {
    process.nextTick(fn.bind(this))
  } else {
    Stream.prototype.on.call(this, ev, fn)
  }
  return this
}

Abstract.prototype.abort = function () {
  this._aborted = true
  this.emit('abort')
}

Abstract.prototype.destroy = function () {}

Abstract.prototype.warn = function (msg, code) {
  var self = this
  var er = decorate(msg, code, self)
  if (!self.listeners('warn')) {
    console.error('%s %s\\n' +
    'path = %s\\n' +
    'syscall = %s\\n' +
    'fstream_type = %s\\n' +
    'fstream_path = %s\\n' +
    'fstream_unc_path = %s\\n' +
    'fstream_class = %s\\n' +
    'fstream_stack =\\n%s\\n',
      code || 'UNKNOWN',
      er.stack,
      er.path,
      er.syscall,
      er.fstream_type,
      er.fstream_path,
      er.fstream_unc_path,
      er.fstream_class,
      er.fstream_stack.join('\\n'))
  } else {
    self.emit('warn', er)
  }
}

Abstract.prototype.info = function (msg, code) {
  this.emit('info', msg, code)
}

Abstract.prototype.error = function (msg, code, th) {
  var er = decorate(msg, code, this)
  if (th) throw er
  else this.emit('error', er)
}

function decorate (er, code, self) {
  if (!(er instanceof Error)) er = new Error(er)
  er.code = er.code || code
  er.path = er.path || self.path
  er.fstream_type = er.fstream_type || self.type
  er.fstream_path = er.fstream_path || self.path
  if (self._path !== self.path) {
    er.fstream_unc_path = er.fstream_unc_path || self._path
  }
  if (self.linkpath) {
    er.fstream_linkpath = er.fstream_linkpath || self.linkpath
  }
  er.fstream_class = er.fstream_class || self.constructor.name
  er.fstream_stack = er.fstream_stack ||
    new Error().stack.split(/\\n/).slice(3).map(function (s) {
      return s.replace(/^ {4}at /, '')
    })

  return er
}
";
        
        $__internal_efa53a4247d66a22e760f8af06c3aeae1a24155c77967b404845829006c78515->leave($__internal_efa53a4247d66a22e760f8af06c3aeae1a24155c77967b404845829006c78515_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/fstream/lib/abstract.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// the parent class for all fstreams.

module.exports = Abstract

var Stream = require('stream').Stream
var inherits = require('inherits')

function Abstract () {
  Stream.call(this)
}

inherits(Abstract, Stream)

Abstract.prototype.on = function (ev, fn) {
  if (ev === 'ready' && this.ready) {
    process.nextTick(fn.bind(this))
  } else {
    Stream.prototype.on.call(this, ev, fn)
  }
  return this
}

Abstract.prototype.abort = function () {
  this._aborted = true
  this.emit('abort')
}

Abstract.prototype.destroy = function () {}

Abstract.prototype.warn = function (msg, code) {
  var self = this
  var er = decorate(msg, code, self)
  if (!self.listeners('warn')) {
    console.error('%s %s\\n' +
    'path = %s\\n' +
    'syscall = %s\\n' +
    'fstream_type = %s\\n' +
    'fstream_path = %s\\n' +
    'fstream_unc_path = %s\\n' +
    'fstream_class = %s\\n' +
    'fstream_stack =\\n%s\\n',
      code || 'UNKNOWN',
      er.stack,
      er.path,
      er.syscall,
      er.fstream_type,
      er.fstream_path,
      er.fstream_unc_path,
      er.fstream_class,
      er.fstream_stack.join('\\n'))
  } else {
    self.emit('warn', er)
  }
}

Abstract.prototype.info = function (msg, code) {
  this.emit('info', msg, code)
}

Abstract.prototype.error = function (msg, code, th) {
  var er = decorate(msg, code, this)
  if (th) throw er
  else this.emit('error', er)
}

function decorate (er, code, self) {
  if (!(er instanceof Error)) er = new Error(er)
  er.code = er.code || code
  er.path = er.path || self.path
  er.fstream_type = er.fstream_type || self.type
  er.fstream_path = er.fstream_path || self.path
  if (self._path !== self.path) {
    er.fstream_unc_path = er.fstream_unc_path || self._path
  }
  if (self.linkpath) {
    er.fstream_linkpath = er.fstream_linkpath || self.linkpath
  }
  er.fstream_class = er.fstream_class || self.constructor.name
  er.fstream_stack = er.fstream_stack ||
    new Error().stack.split(/\\n/).slice(3).map(function (s) {
      return s.replace(/^ {4}at /, '')
    })

  return er
}
", "node_modules/fsevents/node_modules/fstream/lib/abstract.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/fstream/lib/abstract.js");
    }
}
