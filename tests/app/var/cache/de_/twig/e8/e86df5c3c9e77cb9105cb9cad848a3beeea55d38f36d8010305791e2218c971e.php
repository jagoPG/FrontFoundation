<?php

/* node_modules/fsevents/node_modules/sshpk/lib/formats/auto.js */
class __TwigTemplate_d5e55e93819a26ef8bf9191515ef4fe61b05c0980f29f9e8d2028beaeae72f33 extends Twig_Template
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
        $__internal_293bd53b496aaf0b773c42190543c5da1fc16748509ae38674b51c0456df7548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_293bd53b496aaf0b773c42190543c5da1fc16748509ae38674b51c0456df7548->enter($__internal_293bd53b496aaf0b773c42190543c5da1fc16748509ae38674b51c0456df7548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/sshpk/lib/formats/auto.js"));

        // line 1
        echo "// Copyright 2015 Joyent, Inc.

module.exports = {
\tread: read,
\twrite: write
};

var assert = require('assert-plus');
var utils = require('../utils');
var Key = require('../key');
var PrivateKey = require('../private-key');

var pem = require('./pem');
var ssh = require('./ssh');
var rfc4253 = require('./rfc4253');

function read(buf, options) {
\tif (typeof (buf) === 'string') {
\t\tif (buf.trim().match(/^[-]+[ ]*BEGIN/))
\t\t\treturn (pem.read(buf, options));
\t\tif (buf.match(/^\\s*ssh-[a-z]/))
\t\t\treturn (ssh.read(buf, options));
\t\tif (buf.match(/^\\s*ecdsa-/))
\t\t\treturn (ssh.read(buf, options));
\t\tbuf = new Buffer(buf, 'binary');
\t} else {
\t\tassert.buffer(buf);
\t\tif (findPEMHeader(buf))
\t\t\treturn (pem.read(buf, options));
\t\tif (findSSHHeader(buf))
\t\t\treturn (ssh.read(buf, options));
\t}
\tif (buf.readUInt32BE(0) < buf.length)
\t\treturn (rfc4253.read(buf, options));
\tthrow (new Error('Failed to auto-detect format of key'));
}

function findSSHHeader(buf) {
\tvar offset = 0;
\twhile (offset < buf.length &&
\t    (buf[offset] === 32 || buf[offset] === 10 || buf[offset] === 9))
\t\t++offset;
\tif (offset + 4 <= buf.length &&
\t    buf.slice(offset, offset + 4).toString('ascii') === 'ssh-')
\t\treturn (true);
\tif (offset + 6 <= buf.length &&
\t    buf.slice(offset, offset + 6).toString('ascii') === 'ecdsa-')
\t\treturn (true);
\treturn (false);
}

function findPEMHeader(buf) {
\tvar offset = 0;
\twhile (offset < buf.length &&
\t    (buf[offset] === 32 || buf[offset] === 10))
\t\t++offset;
\tif (buf[offset] !== 45)
\t\treturn (false);
\twhile (offset < buf.length &&
\t    (buf[offset] === 45))
\t\t++offset;
\twhile (offset < buf.length &&
\t    (buf[offset] === 32))
\t\t++offset;
\tif (offset + 5 > buf.length ||
\t    buf.slice(offset, offset + 5).toString('ascii') !== 'BEGIN')
\t\treturn (false);
\treturn (true);
}

function write(key, options) {
\tthrow (new Error('\"auto\" format cannot be used for writing'));
}
";
        
        $__internal_293bd53b496aaf0b773c42190543c5da1fc16748509ae38674b51c0456df7548->leave($__internal_293bd53b496aaf0b773c42190543c5da1fc16748509ae38674b51c0456df7548_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/sshpk/lib/formats/auto.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Copyright 2015 Joyent, Inc.

module.exports = {
\tread: read,
\twrite: write
};

var assert = require('assert-plus');
var utils = require('../utils');
var Key = require('../key');
var PrivateKey = require('../private-key');

var pem = require('./pem');
var ssh = require('./ssh');
var rfc4253 = require('./rfc4253');

function read(buf, options) {
\tif (typeof (buf) === 'string') {
\t\tif (buf.trim().match(/^[-]+[ ]*BEGIN/))
\t\t\treturn (pem.read(buf, options));
\t\tif (buf.match(/^\\s*ssh-[a-z]/))
\t\t\treturn (ssh.read(buf, options));
\t\tif (buf.match(/^\\s*ecdsa-/))
\t\t\treturn (ssh.read(buf, options));
\t\tbuf = new Buffer(buf, 'binary');
\t} else {
\t\tassert.buffer(buf);
\t\tif (findPEMHeader(buf))
\t\t\treturn (pem.read(buf, options));
\t\tif (findSSHHeader(buf))
\t\t\treturn (ssh.read(buf, options));
\t}
\tif (buf.readUInt32BE(0) < buf.length)
\t\treturn (rfc4253.read(buf, options));
\tthrow (new Error('Failed to auto-detect format of key'));
}

function findSSHHeader(buf) {
\tvar offset = 0;
\twhile (offset < buf.length &&
\t    (buf[offset] === 32 || buf[offset] === 10 || buf[offset] === 9))
\t\t++offset;
\tif (offset + 4 <= buf.length &&
\t    buf.slice(offset, offset + 4).toString('ascii') === 'ssh-')
\t\treturn (true);
\tif (offset + 6 <= buf.length &&
\t    buf.slice(offset, offset + 6).toString('ascii') === 'ecdsa-')
\t\treturn (true);
\treturn (false);
}

function findPEMHeader(buf) {
\tvar offset = 0;
\twhile (offset < buf.length &&
\t    (buf[offset] === 32 || buf[offset] === 10))
\t\t++offset;
\tif (buf[offset] !== 45)
\t\treturn (false);
\twhile (offset < buf.length &&
\t    (buf[offset] === 45))
\t\t++offset;
\twhile (offset < buf.length &&
\t    (buf[offset] === 32))
\t\t++offset;
\tif (offset + 5 > buf.length ||
\t    buf.slice(offset, offset + 5).toString('ascii') !== 'BEGIN')
\t\treturn (false);
\treturn (true);
}

function write(key, options) {
\tthrow (new Error('\"auto\" format cannot be used for writing'));
}
", "node_modules/fsevents/node_modules/sshpk/lib/formats/auto.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/sshpk/lib/formats/auto.js");
    }
}
