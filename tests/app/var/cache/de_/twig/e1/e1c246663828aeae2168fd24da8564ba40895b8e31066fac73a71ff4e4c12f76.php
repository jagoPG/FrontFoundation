<?php

/* node_modules/fsevents/node_modules/sshpk/lib/ed-compat.js */
class __TwigTemplate_7be7f7c74d4352d55c2b7a48426cde792b905ef968725a473f8061c117303dea extends Twig_Template
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
        $__internal_be15ac7efe3f3392413a23504c95837b8bd5fd8b2847ad332ef256a3b0e1575f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be15ac7efe3f3392413a23504c95837b8bd5fd8b2847ad332ef256a3b0e1575f->enter($__internal_be15ac7efe3f3392413a23504c95837b8bd5fd8b2847ad332ef256a3b0e1575f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/sshpk/lib/ed-compat.js"));

        // line 1
        echo "// Copyright 2015 Joyent, Inc.

module.exports = {
\tVerifier: Verifier,
\tSigner: Signer
};

var nacl;
var stream = require('stream');
var util = require('util');
var assert = require('assert-plus');
var Signature = require('./signature');

function Verifier(key, hashAlgo) {
\tif (nacl === undefined)
\t\tnacl = require('tweetnacl');

\tif (hashAlgo.toLowerCase() !== 'sha512')
\t\tthrow (new Error('ED25519 only supports the use of ' +
\t\t    'SHA-512 hashes'));

\tthis.key = key;
\tthis.chunks = [];

\tstream.Writable.call(this, {});
}
util.inherits(Verifier, stream.Writable);

Verifier.prototype._write = function (chunk, enc, cb) {
\tthis.chunks.push(chunk);
\tcb();
};

Verifier.prototype.update = function (chunk) {
\tif (typeof (chunk) === 'string')
\t\tchunk = new Buffer(chunk, 'binary');
\tthis.chunks.push(chunk);
};

Verifier.prototype.verify = function (signature, fmt) {
\tvar sig;
\tif (Signature.isSignature(signature, [2, 0])) {
\t\tif (signature.type !== 'ed25519')
\t\t\treturn (false);
\t\tsig = signature.toBuffer('raw');

\t} else if (typeof (signature) === 'string') {
\t\tsig = new Buffer(signature, 'base64');

\t} else if (Signature.isSignature(signature, [1, 0])) {
\t\tthrow (new Error('signature was created by too old ' +
\t\t    'a version of sshpk and cannot be verified'));
\t}

\tassert.buffer(sig);
\treturn (nacl.sign.detached.verify(
\t    new Uint8Array(Buffer.concat(this.chunks)),
\t    new Uint8Array(sig),
\t    new Uint8Array(this.key.part.R.data)));
};

function Signer(key, hashAlgo) {
\tif (nacl === undefined)
\t\tnacl = require('tweetnacl');

\tif (hashAlgo.toLowerCase() !== 'sha512')
\t\tthrow (new Error('ED25519 only supports the use of ' +
\t\t    'SHA-512 hashes'));

\tthis.key = key;
\tthis.chunks = [];

\tstream.Writable.call(this, {});
}
util.inherits(Signer, stream.Writable);

Signer.prototype._write = function (chunk, enc, cb) {
\tthis.chunks.push(chunk);
\tcb();
};

Signer.prototype.update = function (chunk) {
\tif (typeof (chunk) === 'string')
\t\tchunk = new Buffer(chunk, 'binary');
\tthis.chunks.push(chunk);
};

Signer.prototype.sign = function () {
\tvar sig = nacl.sign.detached(
\t    new Uint8Array(Buffer.concat(this.chunks)),
\t    new Uint8Array(this.key.part.r.data));
\tvar sigBuf = new Buffer(sig);
\tvar sigObj = Signature.parse(sigBuf, 'ed25519', 'raw');
\tsigObj.hashAlgorithm = 'sha512';
\treturn (sigObj);
};
";
        
        $__internal_be15ac7efe3f3392413a23504c95837b8bd5fd8b2847ad332ef256a3b0e1575f->leave($__internal_be15ac7efe3f3392413a23504c95837b8bd5fd8b2847ad332ef256a3b0e1575f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/sshpk/lib/ed-compat.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Copyright 2015 Joyent, Inc.

module.exports = {
\tVerifier: Verifier,
\tSigner: Signer
};

var nacl;
var stream = require('stream');
var util = require('util');
var assert = require('assert-plus');
var Signature = require('./signature');

function Verifier(key, hashAlgo) {
\tif (nacl === undefined)
\t\tnacl = require('tweetnacl');

\tif (hashAlgo.toLowerCase() !== 'sha512')
\t\tthrow (new Error('ED25519 only supports the use of ' +
\t\t    'SHA-512 hashes'));

\tthis.key = key;
\tthis.chunks = [];

\tstream.Writable.call(this, {});
}
util.inherits(Verifier, stream.Writable);

Verifier.prototype._write = function (chunk, enc, cb) {
\tthis.chunks.push(chunk);
\tcb();
};

Verifier.prototype.update = function (chunk) {
\tif (typeof (chunk) === 'string')
\t\tchunk = new Buffer(chunk, 'binary');
\tthis.chunks.push(chunk);
};

Verifier.prototype.verify = function (signature, fmt) {
\tvar sig;
\tif (Signature.isSignature(signature, [2, 0])) {
\t\tif (signature.type !== 'ed25519')
\t\t\treturn (false);
\t\tsig = signature.toBuffer('raw');

\t} else if (typeof (signature) === 'string') {
\t\tsig = new Buffer(signature, 'base64');

\t} else if (Signature.isSignature(signature, [1, 0])) {
\t\tthrow (new Error('signature was created by too old ' +
\t\t    'a version of sshpk and cannot be verified'));
\t}

\tassert.buffer(sig);
\treturn (nacl.sign.detached.verify(
\t    new Uint8Array(Buffer.concat(this.chunks)),
\t    new Uint8Array(sig),
\t    new Uint8Array(this.key.part.R.data)));
};

function Signer(key, hashAlgo) {
\tif (nacl === undefined)
\t\tnacl = require('tweetnacl');

\tif (hashAlgo.toLowerCase() !== 'sha512')
\t\tthrow (new Error('ED25519 only supports the use of ' +
\t\t    'SHA-512 hashes'));

\tthis.key = key;
\tthis.chunks = [];

\tstream.Writable.call(this, {});
}
util.inherits(Signer, stream.Writable);

Signer.prototype._write = function (chunk, enc, cb) {
\tthis.chunks.push(chunk);
\tcb();
};

Signer.prototype.update = function (chunk) {
\tif (typeof (chunk) === 'string')
\t\tchunk = new Buffer(chunk, 'binary');
\tthis.chunks.push(chunk);
};

Signer.prototype.sign = function () {
\tvar sig = nacl.sign.detached(
\t    new Uint8Array(Buffer.concat(this.chunks)),
\t    new Uint8Array(this.key.part.r.data));
\tvar sigBuf = new Buffer(sig);
\tvar sigObj = Signature.parse(sigBuf, 'ed25519', 'raw');
\tsigObj.hashAlgorithm = 'sha512';
\treturn (sigObj);
};
", "node_modules/fsevents/node_modules/sshpk/lib/ed-compat.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/sshpk/lib/ed-compat.js");
    }
}
