<?php

/* node_modules/fsevents/node_modules/tar/lib/buffer-entry.js */
class __TwigTemplate_4468de455bb056ef791c9eb67567c0cdcccce89cf5205acaedc83832a917857e extends Twig_Template
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
        $__internal_3e8cb1c3ac47d571430ef021507e1dd1d68d6f67e05c602261e9c02af682b894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8cb1c3ac47d571430ef021507e1dd1d68d6f67e05c602261e9c02af682b894->enter($__internal_3e8cb1c3ac47d571430ef021507e1dd1d68d6f67e05c602261e9c02af682b894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/tar/lib/buffer-entry.js"));

        // line 1
        echo "// just like the Entry class, but it buffers the contents
//
// XXX It would be good to set a maximum BufferEntry filesize,
// since it eats up memory.  In normal operation,
// these are only for long filenames or link names, which are
// rarely very big.

module.exports = BufferEntry

var inherits = require(\"inherits\")
  , Entry = require(\"./entry.js\")

function BufferEntry () {
  Entry.apply(this, arguments)
  this._buffer = new Buffer(this.props.size)
  this._offset = 0
  this.body = \"\"
  this.on(\"end\", function () {
    this.body = this._buffer.toString().slice(0, -1)
  })
}

inherits(BufferEntry, Entry)

// collect the bytes as they come in.
BufferEntry.prototype.write = function (c) {
  c.copy(this._buffer, this._offset)
  this._offset += c.length
  Entry.prototype.write.call(this, c)
}
";
        
        $__internal_3e8cb1c3ac47d571430ef021507e1dd1d68d6f67e05c602261e9c02af682b894->leave($__internal_3e8cb1c3ac47d571430ef021507e1dd1d68d6f67e05c602261e9c02af682b894_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/tar/lib/buffer-entry.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// just like the Entry class, but it buffers the contents
//
// XXX It would be good to set a maximum BufferEntry filesize,
// since it eats up memory.  In normal operation,
// these are only for long filenames or link names, which are
// rarely very big.

module.exports = BufferEntry

var inherits = require(\"inherits\")
  , Entry = require(\"./entry.js\")

function BufferEntry () {
  Entry.apply(this, arguments)
  this._buffer = new Buffer(this.props.size)
  this._offset = 0
  this.body = \"\"
  this.on(\"end\", function () {
    this.body = this._buffer.toString().slice(0, -1)
  })
}

inherits(BufferEntry, Entry)

// collect the bytes as they come in.
BufferEntry.prototype.write = function (c) {
  c.copy(this._buffer, this._offset)
  this._offset += c.length
  Entry.prototype.write.call(this, c)
}
", "node_modules/fsevents/node_modules/tar/lib/buffer-entry.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/tar/lib/buffer-entry.js");
    }
}
