<?php

/* node_modules/fstream/lib/socket-reader.js */
class __TwigTemplate_c8a34f0010f46da27cfbaf47679e70937b1dfdfe575d0cba7e401089826e6ce5 extends Twig_Template
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
        $__internal_6cb0382b530b33afab97c0174022e97e955db37e1298a5847ece6e2acdb20a0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb0382b530b33afab97c0174022e97e955db37e1298a5847ece6e2acdb20a0e->enter($__internal_6cb0382b530b33afab97c0174022e97e955db37e1298a5847ece6e2acdb20a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fstream/lib/socket-reader.js"));

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
        
        $__internal_6cb0382b530b33afab97c0174022e97e955db37e1298a5847ece6e2acdb20a0e->leave($__internal_6cb0382b530b33afab97c0174022e97e955db37e1298a5847ece6e2acdb20a0e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fstream/lib/socket-reader.js";
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
", "node_modules/fstream/lib/socket-reader.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fstream/lib/socket-reader.js");
    }
}
