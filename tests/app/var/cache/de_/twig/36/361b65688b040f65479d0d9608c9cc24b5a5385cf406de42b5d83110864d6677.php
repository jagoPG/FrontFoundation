<?php

/* node_modules/fsevents/node_modules/fstream/lib/link-writer.js */
class __TwigTemplate_5a43faa6a89ac506e63167322488248e4622b61363fccfde240c0ffccd8c3162 extends Twig_Template
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
        $__internal_266220bf9ebc925742395bfeefd5cd2f801c901a82abf3cf7283a06580e501ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_266220bf9ebc925742395bfeefd5cd2f801c901a82abf3cf7283a06580e501ea->enter($__internal_266220bf9ebc925742395bfeefd5cd2f801c901a82abf3cf7283a06580e501ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/fstream/lib/link-writer.js"));

        // line 1
        echo "module.exports = LinkWriter

var fs = require('graceful-fs')
var Writer = require('./writer.js')
var inherits = require('inherits')
var path = require('path')
var rimraf = require('rimraf')

inherits(LinkWriter, Writer)

function LinkWriter (props) {
  var self = this
  if (!(self instanceof LinkWriter)) {
    throw new Error('LinkWriter must be called as constructor.')
  }

  // should already be established as a Link type
  if (!((props.type === 'Link' && props.Link) ||
    (props.type === 'SymbolicLink' && props.SymbolicLink))) {
    throw new Error('Non-link type ' + props.type)
  }

  if (props.linkpath === '') props.linkpath = '.'
  if (!props.linkpath) {
    self.error('Need linkpath property to create ' + props.type)
  }

  Writer.call(this, props)
}

LinkWriter.prototype._create = function () {
  // console.error(\" LW _create\")
  var self = this
  var hard = self.type === 'Link' || process.platform === 'win32'
  var link = hard ? 'link' : 'symlink'
  var lp = hard ? path.resolve(self.dirname, self.linkpath) : self.linkpath

  // can only change the link path by clobbering
  // For hard links, let's just assume that's always the case, since
  // there's no good way to read them if we don't already know.
  if (hard) return clobber(self, lp, link)

  fs.readlink(self._path, function (er, p) {
    // only skip creation if it's exactly the same link
    if (p && p === lp) return finish(self)
    clobber(self, lp, link)
  })
}

function clobber (self, lp, link) {
  rimraf(self._path, function (er) {
    if (er) return self.error(er)
    create(self, lp, link)
  })
}

function create (self, lp, link) {
  fs[link](lp, self._path, function (er) {
    // if this is a hard link, and we're in the process of writing out a
    // directory, it's very possible that the thing we're linking to
    // doesn't exist yet (especially if it was intended as a symlink),
    // so swallow ENOENT errors here and just soldier in.
    // Additionally, an EPERM or EACCES can happen on win32 if it's trying
    // to make a link to a directory.  Again, just skip it.
    // A better solution would be to have fs.symlink be supported on
    // windows in some nice fashion.
    if (er) {
      if ((er.code === 'ENOENT' ||
        er.code === 'EACCES' ||
        er.code === 'EPERM') && process.platform === 'win32') {
        self.ready = true
        self.emit('ready')
        self.emit('end')
        self.emit('close')
        self.end = self._finish = function () {}
      } else return self.error(er)
    }
    finish(self)
  })
}

function finish (self) {
  self.ready = true
  self.emit('ready')
  if (self._ended && !self._finished) self._finish()
}

LinkWriter.prototype.end = function () {
  // console.error(\"LW finish in end\")
  this._ended = true
  if (this.ready) {
    this._finished = true
    this._finish()
  }
}
";
        
        $__internal_266220bf9ebc925742395bfeefd5cd2f801c901a82abf3cf7283a06580e501ea->leave($__internal_266220bf9ebc925742395bfeefd5cd2f801c901a82abf3cf7283a06580e501ea_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/fstream/lib/link-writer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = LinkWriter

var fs = require('graceful-fs')
var Writer = require('./writer.js')
var inherits = require('inherits')
var path = require('path')
var rimraf = require('rimraf')

inherits(LinkWriter, Writer)

function LinkWriter (props) {
  var self = this
  if (!(self instanceof LinkWriter)) {
    throw new Error('LinkWriter must be called as constructor.')
  }

  // should already be established as a Link type
  if (!((props.type === 'Link' && props.Link) ||
    (props.type === 'SymbolicLink' && props.SymbolicLink))) {
    throw new Error('Non-link type ' + props.type)
  }

  if (props.linkpath === '') props.linkpath = '.'
  if (!props.linkpath) {
    self.error('Need linkpath property to create ' + props.type)
  }

  Writer.call(this, props)
}

LinkWriter.prototype._create = function () {
  // console.error(\" LW _create\")
  var self = this
  var hard = self.type === 'Link' || process.platform === 'win32'
  var link = hard ? 'link' : 'symlink'
  var lp = hard ? path.resolve(self.dirname, self.linkpath) : self.linkpath

  // can only change the link path by clobbering
  // For hard links, let's just assume that's always the case, since
  // there's no good way to read them if we don't already know.
  if (hard) return clobber(self, lp, link)

  fs.readlink(self._path, function (er, p) {
    // only skip creation if it's exactly the same link
    if (p && p === lp) return finish(self)
    clobber(self, lp, link)
  })
}

function clobber (self, lp, link) {
  rimraf(self._path, function (er) {
    if (er) return self.error(er)
    create(self, lp, link)
  })
}

function create (self, lp, link) {
  fs[link](lp, self._path, function (er) {
    // if this is a hard link, and we're in the process of writing out a
    // directory, it's very possible that the thing we're linking to
    // doesn't exist yet (especially if it was intended as a symlink),
    // so swallow ENOENT errors here and just soldier in.
    // Additionally, an EPERM or EACCES can happen on win32 if it's trying
    // to make a link to a directory.  Again, just skip it.
    // A better solution would be to have fs.symlink be supported on
    // windows in some nice fashion.
    if (er) {
      if ((er.code === 'ENOENT' ||
        er.code === 'EACCES' ||
        er.code === 'EPERM') && process.platform === 'win32') {
        self.ready = true
        self.emit('ready')
        self.emit('end')
        self.emit('close')
        self.end = self._finish = function () {}
      } else return self.error(er)
    }
    finish(self)
  })
}

function finish (self) {
  self.ready = true
  self.emit('ready')
  if (self._ended && !self._finished) self._finish()
}

LinkWriter.prototype.end = function () {
  // console.error(\"LW finish in end\")
  this._ended = true
  if (this.ready) {
    this._finished = true
    this._finish()
  }
}
", "node_modules/fsevents/node_modules/fstream/lib/link-writer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/fstream/lib/link-writer.js");
    }
}
