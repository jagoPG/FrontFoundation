<?php

/* node_modules/sshpk/lib/formats/rfc4253.js */
class __TwigTemplate_48e1ba9e08ce10523d9f6f98b0d979a28e50cc0d7eaeb0c5d387d65a365f4b61 extends Twig_Template
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
        $__internal_acee9a9a1a51712511e2e985a2e4df6901d62284281c689f543504e30810c8e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acee9a9a1a51712511e2e985a2e4df6901d62284281c689f543504e30810c8e1->enter($__internal_acee9a9a1a51712511e2e985a2e4df6901d62284281c689f543504e30810c8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sshpk/lib/formats/rfc4253.js"));

        // line 1
        echo "// Copyright 2015 Joyent, Inc.

module.exports = {
\tread: read.bind(undefined, false, undefined),
\treadType: read.bind(undefined, false),
\twrite: write,
\t/* semi-private api, used by sshpk-agent */
\treadPartial: read.bind(undefined, true),

\t/* shared with ssh format */
\treadInternal: read,
\tkeyTypeToAlg: keyTypeToAlg,
\talgToKeyType: algToKeyType
};

var assert = require('assert-plus');
var algs = require('../algs');
var utils = require('../utils');
var Key = require('../key');
var PrivateKey = require('../private-key');
var SSHBuffer = require('../ssh-buffer');

function algToKeyType(alg) {
\tassert.string(alg);
\tif (alg === 'ssh-dss')
\t\treturn ('dsa');
\telse if (alg === 'ssh-rsa')
\t\treturn ('rsa');
\telse if (alg === 'ssh-ed25519')
\t\treturn ('ed25519');
\telse if (alg === 'ssh-curve25519')
\t\treturn ('curve25519');
\telse if (alg.match(/^ecdsa-sha2-/))
\t\treturn ('ecdsa');
\telse
\t\tthrow (new Error('Unknown algorithm ' + alg));
}

function keyTypeToAlg(key) {
\tassert.object(key);
\tif (key.type === 'dsa')
\t\treturn ('ssh-dss');
\telse if (key.type === 'rsa')
\t\treturn ('ssh-rsa');
\telse if (key.type === 'ed25519')
\t\treturn ('ssh-ed25519');
\telse if (key.type === 'curve25519')
\t\treturn ('ssh-curve25519');
\telse if (key.type === 'ecdsa')
\t\treturn ('ecdsa-sha2-' + key.part.curve.data.toString());
\telse
\t\tthrow (new Error('Unknown key type ' + key.type));
}

function read(partial, type, buf, options) {
\tif (typeof (buf) === 'string')
\t\tbuf = new Buffer(buf);
\tassert.buffer(buf, 'buf');

\tvar key = {};

\tvar parts = key.parts = [];
\tvar sshbuf = new SSHBuffer({buffer: buf});

\tvar alg = sshbuf.readString();
\tassert.ok(!sshbuf.atEnd(), 'key must have at least one part');

\tkey.type = algToKeyType(alg);

\tvar partCount = algs.info[key.type].parts.length;
\tif (type && type === 'private')
\t\tpartCount = algs.privInfo[key.type].parts.length;

\twhile (!sshbuf.atEnd() && parts.length < partCount)
\t\tparts.push(sshbuf.readPart());
\twhile (!partial && !sshbuf.atEnd())
\t\tparts.push(sshbuf.readPart());

\tassert.ok(parts.length >= 1,
\t    'key must have at least one part');
\tassert.ok(partial || sshbuf.atEnd(),
\t    'leftover bytes at end of key');

\tvar Constructor = Key;
\tvar algInfo = algs.info[key.type];
\tif (type === 'private' || algInfo.parts.length !== parts.length) {
\t\talgInfo = algs.privInfo[key.type];
\t\tConstructor = PrivateKey;
\t}
\tassert.strictEqual(algInfo.parts.length, parts.length);

\tif (key.type === 'ecdsa') {
\t\tvar res = /^ecdsa-sha2-(.+)\$/.exec(alg);
\t\tassert.ok(res !== null);
\t\tassert.strictEqual(res[1], parts[0].data.toString());
\t}

\tvar normalized = true;
\tfor (var i = 0; i < algInfo.parts.length; ++i) {
\t\tparts[i].name = algInfo.parts[i];
\t\tif (parts[i].name !== 'curve' &&
\t\t    algInfo.normalize !== false) {
\t\t\tvar p = parts[i];
\t\t\tvar nd = utils.mpNormalize(p.data);
\t\t\tif (nd !== p.data) {
\t\t\t\tp.data = nd;
\t\t\t\tnormalized = false;
\t\t\t}
\t\t}
\t}

\tif (normalized)
\t\tkey._rfc4253Cache = sshbuf.toBuffer();

\tif (partial && typeof (partial) === 'object') {
\t\tpartial.remainder = sshbuf.remainder();
\t\tpartial.consumed = sshbuf._offset;
\t}

\treturn (new Constructor(key));
}

function write(key, options) {
\tassert.object(key);

\tvar alg = keyTypeToAlg(key);
\tvar i;

\tvar algInfo = algs.info[key.type];
\tif (PrivateKey.isPrivateKey(key))
\t\talgInfo = algs.privInfo[key.type];
\tvar parts = algInfo.parts;

\tvar buf = new SSHBuffer({});

\tbuf.writeString(alg);

\tfor (i = 0; i < parts.length; ++i) {
\t\tvar data = key.part[parts[i]].data;
\t\tif (algInfo.normalize !== false)
\t\t\tdata = utils.mpNormalize(data);
\t\tbuf.writeBuffer(data);
\t}

\treturn (buf.toBuffer());
}
";
        
        $__internal_acee9a9a1a51712511e2e985a2e4df6901d62284281c689f543504e30810c8e1->leave($__internal_acee9a9a1a51712511e2e985a2e4df6901d62284281c689f543504e30810c8e1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sshpk/lib/formats/rfc4253.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Copyright 2015 Joyent, Inc.

module.exports = {
\tread: read.bind(undefined, false, undefined),
\treadType: read.bind(undefined, false),
\twrite: write,
\t/* semi-private api, used by sshpk-agent */
\treadPartial: read.bind(undefined, true),

\t/* shared with ssh format */
\treadInternal: read,
\tkeyTypeToAlg: keyTypeToAlg,
\talgToKeyType: algToKeyType
};

var assert = require('assert-plus');
var algs = require('../algs');
var utils = require('../utils');
var Key = require('../key');
var PrivateKey = require('../private-key');
var SSHBuffer = require('../ssh-buffer');

function algToKeyType(alg) {
\tassert.string(alg);
\tif (alg === 'ssh-dss')
\t\treturn ('dsa');
\telse if (alg === 'ssh-rsa')
\t\treturn ('rsa');
\telse if (alg === 'ssh-ed25519')
\t\treturn ('ed25519');
\telse if (alg === 'ssh-curve25519')
\t\treturn ('curve25519');
\telse if (alg.match(/^ecdsa-sha2-/))
\t\treturn ('ecdsa');
\telse
\t\tthrow (new Error('Unknown algorithm ' + alg));
}

function keyTypeToAlg(key) {
\tassert.object(key);
\tif (key.type === 'dsa')
\t\treturn ('ssh-dss');
\telse if (key.type === 'rsa')
\t\treturn ('ssh-rsa');
\telse if (key.type === 'ed25519')
\t\treturn ('ssh-ed25519');
\telse if (key.type === 'curve25519')
\t\treturn ('ssh-curve25519');
\telse if (key.type === 'ecdsa')
\t\treturn ('ecdsa-sha2-' + key.part.curve.data.toString());
\telse
\t\tthrow (new Error('Unknown key type ' + key.type));
}

function read(partial, type, buf, options) {
\tif (typeof (buf) === 'string')
\t\tbuf = new Buffer(buf);
\tassert.buffer(buf, 'buf');

\tvar key = {};

\tvar parts = key.parts = [];
\tvar sshbuf = new SSHBuffer({buffer: buf});

\tvar alg = sshbuf.readString();
\tassert.ok(!sshbuf.atEnd(), 'key must have at least one part');

\tkey.type = algToKeyType(alg);

\tvar partCount = algs.info[key.type].parts.length;
\tif (type && type === 'private')
\t\tpartCount = algs.privInfo[key.type].parts.length;

\twhile (!sshbuf.atEnd() && parts.length < partCount)
\t\tparts.push(sshbuf.readPart());
\twhile (!partial && !sshbuf.atEnd())
\t\tparts.push(sshbuf.readPart());

\tassert.ok(parts.length >= 1,
\t    'key must have at least one part');
\tassert.ok(partial || sshbuf.atEnd(),
\t    'leftover bytes at end of key');

\tvar Constructor = Key;
\tvar algInfo = algs.info[key.type];
\tif (type === 'private' || algInfo.parts.length !== parts.length) {
\t\talgInfo = algs.privInfo[key.type];
\t\tConstructor = PrivateKey;
\t}
\tassert.strictEqual(algInfo.parts.length, parts.length);

\tif (key.type === 'ecdsa') {
\t\tvar res = /^ecdsa-sha2-(.+)\$/.exec(alg);
\t\tassert.ok(res !== null);
\t\tassert.strictEqual(res[1], parts[0].data.toString());
\t}

\tvar normalized = true;
\tfor (var i = 0; i < algInfo.parts.length; ++i) {
\t\tparts[i].name = algInfo.parts[i];
\t\tif (parts[i].name !== 'curve' &&
\t\t    algInfo.normalize !== false) {
\t\t\tvar p = parts[i];
\t\t\tvar nd = utils.mpNormalize(p.data);
\t\t\tif (nd !== p.data) {
\t\t\t\tp.data = nd;
\t\t\t\tnormalized = false;
\t\t\t}
\t\t}
\t}

\tif (normalized)
\t\tkey._rfc4253Cache = sshbuf.toBuffer();

\tif (partial && typeof (partial) === 'object') {
\t\tpartial.remainder = sshbuf.remainder();
\t\tpartial.consumed = sshbuf._offset;
\t}

\treturn (new Constructor(key));
}

function write(key, options) {
\tassert.object(key);

\tvar alg = keyTypeToAlg(key);
\tvar i;

\tvar algInfo = algs.info[key.type];
\tif (PrivateKey.isPrivateKey(key))
\t\talgInfo = algs.privInfo[key.type];
\tvar parts = algInfo.parts;

\tvar buf = new SSHBuffer({});

\tbuf.writeString(alg);

\tfor (i = 0; i < parts.length; ++i) {
\t\tvar data = key.part[parts[i]].data;
\t\tif (algInfo.normalize !== false)
\t\t\tdata = utils.mpNormalize(data);
\t\tbuf.writeBuffer(data);
\t}

\treturn (buf.toBuffer());
}
", "node_modules/sshpk/lib/formats/rfc4253.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sshpk/lib/formats/rfc4253.js");
    }
}
