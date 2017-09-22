<?php

/* node_modules/tar/lib/buffer-entry.js */
class __TwigTemplate_9a57ec9c1a792222e34c5fed632b5f4a59f7eb27dd55277b4e58a080511a7eb0 extends Twig_Template
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
        $__internal_d7dbe3055337d759f5e448cfc987bd6543a101d8ebfde622417b843450b22314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7dbe3055337d759f5e448cfc987bd6543a101d8ebfde622417b843450b22314->enter($__internal_d7dbe3055337d759f5e448cfc987bd6543a101d8ebfde622417b843450b22314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tar/lib/buffer-entry.js"));

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
        
        $__internal_d7dbe3055337d759f5e448cfc987bd6543a101d8ebfde622417b843450b22314->leave($__internal_d7dbe3055337d759f5e448cfc987bd6543a101d8ebfde622417b843450b22314_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tar/lib/buffer-entry.js";
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
", "node_modules/tar/lib/buffer-entry.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tar/lib/buffer-entry.js");
    }
}
