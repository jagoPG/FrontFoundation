<?php

/* node_modules/fsevents/node_modules/sshpk/lib/ssh-buffer.js */
class __TwigTemplate_d6d37d261ed4e0002c53ded5f59f50d6ef3963568409210a632ef935841e5e7e extends Twig_Template
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
        $__internal_64b09729d4955459154993e6151f4a648800fe54abb14815c4248c467037efff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b09729d4955459154993e6151f4a648800fe54abb14815c4248c467037efff->enter($__internal_64b09729d4955459154993e6151f4a648800fe54abb14815c4248c467037efff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/sshpk/lib/ssh-buffer.js"));

        // line 1
        echo "// Copyright 2015 Joyent, Inc.

module.exports = SSHBuffer;

var assert = require('assert-plus');

function SSHBuffer(opts) {
\tassert.object(opts, 'options');
\tif (opts.buffer !== undefined)
\t\tassert.buffer(opts.buffer, 'options.buffer');

\tthis._size = opts.buffer ? opts.buffer.length : 1024;
\tthis._buffer = opts.buffer || (new Buffer(this._size));
\tthis._offset = 0;
}

SSHBuffer.prototype.toBuffer = function () {
\treturn (this._buffer.slice(0, this._offset));
};

SSHBuffer.prototype.atEnd = function () {
\treturn (this._offset >= this._buffer.length);
};

SSHBuffer.prototype.remainder = function () {
\treturn (this._buffer.slice(this._offset));
};

SSHBuffer.prototype.skip = function (n) {
\tthis._offset += n;
};

SSHBuffer.prototype.expand = function () {
\tthis._size *= 2;
\tvar buf = new Buffer(this._size);
\tthis._buffer.copy(buf, 0);
\tthis._buffer = buf;
};

SSHBuffer.prototype.readPart = function () {
\treturn ({data: this.readBuffer()});
};

SSHBuffer.prototype.readBuffer = function () {
\tvar len = this._buffer.readUInt32BE(this._offset);
\tthis._offset += 4;
\tassert.ok(this._offset + len <= this._buffer.length,
\t    'length out of bounds at +0x' + this._offset.toString(16) +
\t    ' (data truncated?)');
\tvar buf = this._buffer.slice(this._offset, this._offset + len);
\tthis._offset += len;
\treturn (buf);
};

SSHBuffer.prototype.readString = function () {
\treturn (this.readBuffer().toString());
};

SSHBuffer.prototype.readCString = function () {
\tvar offset = this._offset;
\twhile (offset < this._buffer.length &&
\t    this._buffer[offset] !== 0x00)
\t\toffset++;
\tassert.ok(offset < this._buffer.length, 'c string does not terminate');
\tvar str = this._buffer.slice(this._offset, offset).toString();
\tthis._offset = offset + 1;
\treturn (str);
};

SSHBuffer.prototype.readInt = function () {
\tvar v = this._buffer.readUInt32BE(this._offset);
\tthis._offset += 4;
\treturn (v);
};

SSHBuffer.prototype.readInt64 = function () {
\tassert.ok(this._offset + 8 < this._buffer.length,
\t    'buffer not long enough to read Int64');
\tvar v = this._buffer.slice(this._offset, this._offset + 8);
\tthis._offset += 8;
\treturn (v);
};

SSHBuffer.prototype.readChar = function () {
\tvar v = this._buffer[this._offset++];
\treturn (v);
};

SSHBuffer.prototype.writeBuffer = function (buf) {
\twhile (this._offset + 4 + buf.length > this._size)
\t\tthis.expand();
\tthis._buffer.writeUInt32BE(buf.length, this._offset);
\tthis._offset += 4;
\tbuf.copy(this._buffer, this._offset);
\tthis._offset += buf.length;
};

SSHBuffer.prototype.writeString = function (str) {
\tthis.writeBuffer(new Buffer(str, 'utf8'));
};

SSHBuffer.prototype.writeCString = function (str) {
\twhile (this._offset + 1 + str.length > this._size)
\t\tthis.expand();
\tthis._buffer.write(str, this._offset);
\tthis._offset += str.length;
\tthis._buffer[this._offset++] = 0;
};

SSHBuffer.prototype.writeInt = function (v) {
\twhile (this._offset + 4 > this._size)
\t\tthis.expand();
\tthis._buffer.writeUInt32BE(v, this._offset);
\tthis._offset += 4;
};

SSHBuffer.prototype.writeInt64 = function (v) {
\tassert.buffer(v, 'value');
\tif (v.length > 8) {
\t\tvar lead = v.slice(0, v.length - 8);
\t\tfor (var i = 0; i < lead.length; ++i) {
\t\t\tassert.strictEqual(lead[i], 0,
\t\t\t    'must fit in 64 bits of precision');
\t\t}
\t\tv = v.slice(v.length - 8, v.length);
\t}
\twhile (this._offset + 8 > this._size)
\t\tthis.expand();
\tv.copy(this._buffer, this._offset);
\tthis._offset += 8;
};

SSHBuffer.prototype.writeChar = function (v) {
\twhile (this._offset + 1 > this._size)
\t\tthis.expand();
\tthis._buffer[this._offset++] = v;
};

SSHBuffer.prototype.writePart = function (p) {
\tthis.writeBuffer(p.data);
};

SSHBuffer.prototype.write = function (buf) {
\twhile (this._offset + buf.length > this._size)
\t\tthis.expand();
\tbuf.copy(this._buffer, this._offset);
\tthis._offset += buf.length;
};
";
        
        $__internal_64b09729d4955459154993e6151f4a648800fe54abb14815c4248c467037efff->leave($__internal_64b09729d4955459154993e6151f4a648800fe54abb14815c4248c467037efff_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/sshpk/lib/ssh-buffer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Copyright 2015 Joyent, Inc.

module.exports = SSHBuffer;

var assert = require('assert-plus');

function SSHBuffer(opts) {
\tassert.object(opts, 'options');
\tif (opts.buffer !== undefined)
\t\tassert.buffer(opts.buffer, 'options.buffer');

\tthis._size = opts.buffer ? opts.buffer.length : 1024;
\tthis._buffer = opts.buffer || (new Buffer(this._size));
\tthis._offset = 0;
}

SSHBuffer.prototype.toBuffer = function () {
\treturn (this._buffer.slice(0, this._offset));
};

SSHBuffer.prototype.atEnd = function () {
\treturn (this._offset >= this._buffer.length);
};

SSHBuffer.prototype.remainder = function () {
\treturn (this._buffer.slice(this._offset));
};

SSHBuffer.prototype.skip = function (n) {
\tthis._offset += n;
};

SSHBuffer.prototype.expand = function () {
\tthis._size *= 2;
\tvar buf = new Buffer(this._size);
\tthis._buffer.copy(buf, 0);
\tthis._buffer = buf;
};

SSHBuffer.prototype.readPart = function () {
\treturn ({data: this.readBuffer()});
};

SSHBuffer.prototype.readBuffer = function () {
\tvar len = this._buffer.readUInt32BE(this._offset);
\tthis._offset += 4;
\tassert.ok(this._offset + len <= this._buffer.length,
\t    'length out of bounds at +0x' + this._offset.toString(16) +
\t    ' (data truncated?)');
\tvar buf = this._buffer.slice(this._offset, this._offset + len);
\tthis._offset += len;
\treturn (buf);
};

SSHBuffer.prototype.readString = function () {
\treturn (this.readBuffer().toString());
};

SSHBuffer.prototype.readCString = function () {
\tvar offset = this._offset;
\twhile (offset < this._buffer.length &&
\t    this._buffer[offset] !== 0x00)
\t\toffset++;
\tassert.ok(offset < this._buffer.length, 'c string does not terminate');
\tvar str = this._buffer.slice(this._offset, offset).toString();
\tthis._offset = offset + 1;
\treturn (str);
};

SSHBuffer.prototype.readInt = function () {
\tvar v = this._buffer.readUInt32BE(this._offset);
\tthis._offset += 4;
\treturn (v);
};

SSHBuffer.prototype.readInt64 = function () {
\tassert.ok(this._offset + 8 < this._buffer.length,
\t    'buffer not long enough to read Int64');
\tvar v = this._buffer.slice(this._offset, this._offset + 8);
\tthis._offset += 8;
\treturn (v);
};

SSHBuffer.prototype.readChar = function () {
\tvar v = this._buffer[this._offset++];
\treturn (v);
};

SSHBuffer.prototype.writeBuffer = function (buf) {
\twhile (this._offset + 4 + buf.length > this._size)
\t\tthis.expand();
\tthis._buffer.writeUInt32BE(buf.length, this._offset);
\tthis._offset += 4;
\tbuf.copy(this._buffer, this._offset);
\tthis._offset += buf.length;
};

SSHBuffer.prototype.writeString = function (str) {
\tthis.writeBuffer(new Buffer(str, 'utf8'));
};

SSHBuffer.prototype.writeCString = function (str) {
\twhile (this._offset + 1 + str.length > this._size)
\t\tthis.expand();
\tthis._buffer.write(str, this._offset);
\tthis._offset += str.length;
\tthis._buffer[this._offset++] = 0;
};

SSHBuffer.prototype.writeInt = function (v) {
\twhile (this._offset + 4 > this._size)
\t\tthis.expand();
\tthis._buffer.writeUInt32BE(v, this._offset);
\tthis._offset += 4;
};

SSHBuffer.prototype.writeInt64 = function (v) {
\tassert.buffer(v, 'value');
\tif (v.length > 8) {
\t\tvar lead = v.slice(0, v.length - 8);
\t\tfor (var i = 0; i < lead.length; ++i) {
\t\t\tassert.strictEqual(lead[i], 0,
\t\t\t    'must fit in 64 bits of precision');
\t\t}
\t\tv = v.slice(v.length - 8, v.length);
\t}
\twhile (this._offset + 8 > this._size)
\t\tthis.expand();
\tv.copy(this._buffer, this._offset);
\tthis._offset += 8;
};

SSHBuffer.prototype.writeChar = function (v) {
\twhile (this._offset + 1 > this._size)
\t\tthis.expand();
\tthis._buffer[this._offset++] = v;
};

SSHBuffer.prototype.writePart = function (p) {
\tthis.writeBuffer(p.data);
};

SSHBuffer.prototype.write = function (buf) {
\twhile (this._offset + buf.length > this._size)
\t\tthis.expand();
\tbuf.copy(this._buffer, this._offset);
\tthis._offset += buf.length;
};
", "node_modules/fsevents/node_modules/sshpk/lib/ssh-buffer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/sshpk/lib/ssh-buffer.js");
    }
}
