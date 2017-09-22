<?php

/* node_modules/readdirp/stream-api.js */
class __TwigTemplate_5dce5c0fec9c29da7a795bb12ab608375ec9e618d5410fd1c74f251fb4528a53 extends Twig_Template
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
        $__internal_f72c3fc187dcf57e3ab7f2dfc969f6d8c899382a022aefccaeda5e88fddae8d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f72c3fc187dcf57e3ab7f2dfc969f6d8c899382a022aefccaeda5e88fddae8d0->enter($__internal_f72c3fc187dcf57e3ab7f2dfc969f6d8c899382a022aefccaeda5e88fddae8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/readdirp/stream-api.js"));

        // line 1
        echo "'use strict';

var si =  require('set-immediate-shim');
var stream = require('readable-stream');
var util = require('util');

var Readable = stream.Readable;

module.exports = ReaddirpReadable;

util.inherits(ReaddirpReadable, Readable);

function ReaddirpReadable (opts) {
  if (!(this instanceof ReaddirpReadable)) return new ReaddirpReadable(opts);

  opts = opts || {};

  opts.objectMode = true;
  Readable.call(this, opts);

  // backpressure not implemented at this point
  this.highWaterMark = Infinity;

  this._destroyed = false;
  this._paused = false;
  this._warnings = [];
  this._errors = [];

  this._pauseResumeErrors();
}

var proto = ReaddirpReadable.prototype;

proto._pauseResumeErrors = function () {
  var self = this;
  self.on('pause', function () { self._paused = true });
  self.on('resume', function () {
    if (self._destroyed) return;
    self._paused = false;

    self._warnings.forEach(function (err) { self.emit('warn', err) });
    self._warnings.length = 0;

    self._errors.forEach(function (err) { self.emit('error', err) });
    self._errors.length = 0;
  })
}

// called for each entry
proto._processEntry = function (entry) {
  if (this._destroyed) return;
  this.push(entry);
}

proto._read = function () { }

proto.destroy = function () {
  // when stream is destroyed it will emit nothing further, not even errors or warnings
  this.push(null);
  this.readable = false;
  this._destroyed = true;
  this.emit('close');
}

proto._done = function () {
  this.push(null);
}

// we emit errors and warnings async since we may handle errors like invalid args
// within the initial event loop before any event listeners subscribed
proto._handleError = function (err) {
  var self = this;
  si(function () {
    if (self._paused) return self._warnings.push(err);
    if (!self._destroyed) self.emit('warn', err);
  });
}

proto._handleFatalError = function (err) {
  var self = this;
  si(function () {
    if (self._paused) return self._errors.push(err);
    if (!self._destroyed) self.emit('error', err);
  });
}

function createStreamAPI () {
  var stream = new ReaddirpReadable();

  return {
      stream           :  stream
    , processEntry     :  stream._processEntry.bind(stream)
    , done             :  stream._done.bind(stream)
    , handleError      :  stream._handleError.bind(stream)
    , handleFatalError :  stream._handleFatalError.bind(stream)
  };
}

module.exports = createStreamAPI;
";
        
        $__internal_f72c3fc187dcf57e3ab7f2dfc969f6d8c899382a022aefccaeda5e88fddae8d0->leave($__internal_f72c3fc187dcf57e3ab7f2dfc969f6d8c899382a022aefccaeda5e88fddae8d0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/readdirp/stream-api.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var si =  require('set-immediate-shim');
var stream = require('readable-stream');
var util = require('util');

var Readable = stream.Readable;

module.exports = ReaddirpReadable;

util.inherits(ReaddirpReadable, Readable);

function ReaddirpReadable (opts) {
  if (!(this instanceof ReaddirpReadable)) return new ReaddirpReadable(opts);

  opts = opts || {};

  opts.objectMode = true;
  Readable.call(this, opts);

  // backpressure not implemented at this point
  this.highWaterMark = Infinity;

  this._destroyed = false;
  this._paused = false;
  this._warnings = [];
  this._errors = [];

  this._pauseResumeErrors();
}

var proto = ReaddirpReadable.prototype;

proto._pauseResumeErrors = function () {
  var self = this;
  self.on('pause', function () { self._paused = true });
  self.on('resume', function () {
    if (self._destroyed) return;
    self._paused = false;

    self._warnings.forEach(function (err) { self.emit('warn', err) });
    self._warnings.length = 0;

    self._errors.forEach(function (err) { self.emit('error', err) });
    self._errors.length = 0;
  })
}

// called for each entry
proto._processEntry = function (entry) {
  if (this._destroyed) return;
  this.push(entry);
}

proto._read = function () { }

proto.destroy = function () {
  // when stream is destroyed it will emit nothing further, not even errors or warnings
  this.push(null);
  this.readable = false;
  this._destroyed = true;
  this.emit('close');
}

proto._done = function () {
  this.push(null);
}

// we emit errors and warnings async since we may handle errors like invalid args
// within the initial event loop before any event listeners subscribed
proto._handleError = function (err) {
  var self = this;
  si(function () {
    if (self._paused) return self._warnings.push(err);
    if (!self._destroyed) self.emit('warn', err);
  });
}

proto._handleFatalError = function (err) {
  var self = this;
  si(function () {
    if (self._paused) return self._errors.push(err);
    if (!self._destroyed) self.emit('error', err);
  });
}

function createStreamAPI () {
  var stream = new ReaddirpReadable();

  return {
      stream           :  stream
    , processEntry     :  stream._processEntry.bind(stream)
    , done             :  stream._done.bind(stream)
    , handleError      :  stream._handleError.bind(stream)
    , handleFatalError :  stream._handleFatalError.bind(stream)
  };
}

module.exports = createStreamAPI;
", "node_modules/readdirp/stream-api.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/readdirp/stream-api.js");
    }
}
