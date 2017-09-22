<?php

/* node_modules/fsevents/node_modules/fstream/lib/socket-reader.js */
class __TwigTemplate_b820a257fcb8b774c7612419279ce1c6883fe8765b6a3c7c039087b15ebd4797 extends Twig_Template
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
        $__internal_b9d3e1a6edf8c56965686ab3e92ed0ba6273c6571e6967e101a8fbf49b2856b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9d3e1a6edf8c56965686ab3e92ed0ba6273c6571e6967e101a8fbf49b2856b3->enter($__internal_b9d3e1a6edf8c56965686ab3e92ed0ba6273c6571e6967e101a8fbf49b2856b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/fstream/lib/socket-reader.js"));

        // line 1
        echo "// Just get the stats, and then don't do anything.
// You can't really \"read\" from a socket.  You \"connect\" to it.
// Mostly, this is here so that reading a dir with a socket in it
// doesn't blow up.

module.exports = SocketReader

var inherits = require('inherits')
var Reader = require('./reader.js')

inherits(SocketReader, Reader)

function SocketReader (props) {
  var self = this
  if (!(self instanceof SocketReader)) {
    throw new Error('SocketReader must be called as constructor.')
  }

  if (!(props.type === 'Socket' && props.Socket)) {
    throw new Error('Non-socket type ' + props.type)
  }

  Reader.call(self, props)
}

SocketReader.prototype._read = function () {
  var self = this
  if (self._paused) return
  // basically just a no-op, since we got all the info we have
  // from the _stat method
  if (!self._ended) {
    self.emit('end')
    self.emit('close')
    self._ended = true
  }
}
";
        
        $__internal_b9d3e1a6edf8c56965686ab3e92ed0ba6273c6571e6967e101a8fbf49b2856b3->leave($__internal_b9d3e1a6edf8c56965686ab3e92ed0ba6273c6571e6967e101a8fbf49b2856b3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/fstream/lib/socket-reader.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Just get the stats, and then don't do anything.
// You can't really \"read\" from a socket.  You \"connect\" to it.
// Mostly, this is here so that reading a dir with a socket in it
// doesn't blow up.

module.exports = SocketReader

var inherits = require('inherits')
var Reader = require('./reader.js')

inherits(SocketReader, Reader)

function SocketReader (props) {
  var self = this
  if (!(self instanceof SocketReader)) {
    throw new Error('SocketReader must be called as constructor.')
  }

  if (!(props.type === 'Socket' && props.Socket)) {
    throw new Error('Non-socket type ' + props.type)
  }

  Reader.call(self, props)
}

SocketReader.prototype._read = function () {
  var self = this
  if (self._paused) return
  // basically just a no-op, since we got all the info we have
  // from the _stat method
  if (!self._ended) {
    self.emit('end')
    self.emit('close')
    self._ended = true
  }
}
", "node_modules/fsevents/node_modules/fstream/lib/socket-reader.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/fstream/lib/socket-reader.js");
    }
}
