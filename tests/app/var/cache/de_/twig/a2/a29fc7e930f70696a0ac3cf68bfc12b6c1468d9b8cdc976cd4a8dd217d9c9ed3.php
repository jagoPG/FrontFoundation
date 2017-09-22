<?php

/* node_modules/fsevents/node_modules/sshpk/lib/formats/openssh-cert.js */
class __TwigTemplate_0a3bf720350d1e5a9217e1a11fcf231948c5f84ba3a07c9d7cc6f6b8dd2b2e1e extends Twig_Template
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
        $__internal_2fd9ab7cc2a6b1b13e1d6ee97caefe9ab9837f136ffb6bb065973cc1775b409f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd9ab7cc2a6b1b13e1d6ee97caefe9ab9837f136ffb6bb065973cc1775b409f->enter($__internal_2fd9ab7cc2a6b1b13e1d6ee97caefe9ab9837f136ffb6bb065973cc1775b409f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/sshpk/lib/formats/openssh-cert.js"));

        // line 1
        echo "// Copyright 2017 Joyent, Inc.

module.exports = {
\tread: read,
\tverify: verify,
\tsign: sign,
\tsignAsync: signAsync,
\twrite: write,

\t/* Internal private API */
\tfromBuffer: fromBuffer,
\ttoBuffer: toBuffer
};

var assert = require('assert-plus');
var SSHBuffer = require('../ssh-buffer');
var crypto = require('crypto');
var algs = require('../algs');
var Key = require('../key');
var PrivateKey = require('../private-key');
var Identity = require('../identity');
var rfc4253 = require('./rfc4253');
var Signature = require('../signature');
var utils = require('../utils');
var Certificate = require('../certificate');

function verify(cert, key) {
\t/*
\t * We always give an issuerKey, so if our verify() is being called then
\t * there was no signature. Return false.
\t */
\treturn (false);
}

var TYPES = {
\t'user': 1,
\t'host': 2
};
Object.keys(TYPES).forEach(function (k) { TYPES[TYPES[k]] = k; });

var ECDSA_ALGO = /^ecdsa-sha2-([^@-]+)-cert-v01@openssh.com\$/;

function read(buf, options) {
\tif (Buffer.isBuffer(buf))
\t\tbuf = buf.toString('ascii');
\tvar parts = buf.trim().split(/[ \\t\\n]+/g);
\tif (parts.length < 2 || parts.length > 3)
\t\tthrow (new Error('Not a valid SSH certificate line'));

\tvar algo = parts[0];
\tvar data = parts[1];

\tdata = new Buffer(data, 'base64');
\treturn (fromBuffer(data, algo));
}

function fromBuffer(data, algo, partial) {
\tvar sshbuf = new SSHBuffer({ buffer: data });
\tvar innerAlgo = sshbuf.readString();
\tif (algo !== undefined && innerAlgo !== algo)
\t\tthrow (new Error('SSH certificate algorithm mismatch'));
\tif (algo === undefined)
\t\talgo = innerAlgo;

\tvar cert = {};
\tcert.signatures = {};
\tcert.signatures.openssh = {};

\tcert.signatures.openssh.nonce = sshbuf.readBuffer();

\tvar key = {};
\tvar parts = (key.parts = []);
\tkey.type = getAlg(algo);

\tvar partCount = algs.info[key.type].parts.length;
\twhile (parts.length < partCount)
\t\tparts.push(sshbuf.readPart());
\tassert.ok(parts.length >= 1, 'key must have at least one part');

\tvar algInfo = algs.info[key.type];
\tif (key.type === 'ecdsa') {
\t\tvar res = ECDSA_ALGO.exec(algo);
\t\tassert.ok(res !== null);
\t\tassert.strictEqual(res[1], parts[0].data.toString());
\t}

\tfor (var i = 0; i < algInfo.parts.length; ++i) {
\t\tparts[i].name = algInfo.parts[i];
\t\tif (parts[i].name !== 'curve' &&
\t\t    algInfo.normalize !== false) {
\t\t\tvar p = parts[i];
\t\t\tp.data = utils.mpNormalize(p.data);
\t\t}
\t}

\tcert.subjectKey = new Key(key);

\tcert.serial = sshbuf.readInt64();

\tvar type = TYPES[sshbuf.readInt()];
\tassert.string(type, 'valid cert type');

\tcert.signatures.openssh.keyId = sshbuf.readString();

\tvar principals = [];
\tvar pbuf = sshbuf.readBuffer();
\tvar psshbuf = new SSHBuffer({ buffer: pbuf });
\twhile (!psshbuf.atEnd())
\t\tprincipals.push(psshbuf.readString());
\tif (principals.length === 0)
\t\tprincipals = ['*'];

\tcert.subjects = principals.map(function (pr) {
\t\tif (type === 'user')
\t\t\treturn (Identity.forUser(pr));
\t\telse if (type === 'host')
\t\t\treturn (Identity.forHost(pr));
\t\tthrow (new Error('Unknown identity type ' + type));
\t});

\tcert.validFrom = int64ToDate(sshbuf.readInt64());
\tcert.validUntil = int64ToDate(sshbuf.readInt64());

\tcert.signatures.openssh.critical = sshbuf.readBuffer();
\tcert.signatures.openssh.exts = sshbuf.readBuffer();

\t/* reserved */
\tsshbuf.readBuffer();

\tvar signingKeyBuf = sshbuf.readBuffer();
\tcert.issuerKey = rfc4253.read(signingKeyBuf);

\t/*
\t * OpenSSH certs don't give the identity of the issuer, just their
\t * public key. So, we use an Identity that matches anything. The
\t * isSignedBy() function will later tell you if the key matches.
\t */
\tcert.issuer = Identity.forHost('**');

\tvar sigBuf = sshbuf.readBuffer();
\tcert.signatures.openssh.signature =
\t    Signature.parse(sigBuf, cert.issuerKey.type, 'ssh');

\tif (partial !== undefined) {
\t\tpartial.remainder = sshbuf.remainder();
\t\tpartial.consumed = sshbuf._offset;
\t}

\treturn (new Certificate(cert));
}

function int64ToDate(buf) {
\tvar i = buf.readUInt32BE(0) * 4294967296;
\ti += buf.readUInt32BE(4);
\tvar d = new Date();
\td.setTime(i * 1000);
\td.sourceInt64 = buf;
\treturn (d);
}

function dateToInt64(date) {
\tif (date.sourceInt64 !== undefined)
\t\treturn (date.sourceInt64);
\tvar i = Math.round(date.getTime() / 1000);
\tvar upper = Math.floor(i / 4294967296);
\tvar lower = Math.floor(i % 4294967296);
\tvar buf = new Buffer(8);
\tbuf.writeUInt32BE(upper, 0);
\tbuf.writeUInt32BE(lower, 4);
\treturn (buf);
}

function sign(cert, key) {
\tif (cert.signatures.openssh === undefined)
\t\tcert.signatures.openssh = {};
\ttry {
\t\tvar blob = toBuffer(cert, true);
\t} catch (e) {
\t\tdelete (cert.signatures.openssh);
\t\treturn (false);
\t}
\tvar sig = cert.signatures.openssh;
\tvar hashAlgo = undefined;
\tif (key.type === 'rsa' || key.type === 'dsa')
\t\thashAlgo = 'sha1';
\tvar signer = key.createSign(hashAlgo);
\tsigner.write(blob);
\tsig.signature = signer.sign();
\treturn (true);
}

function signAsync(cert, signer, done) {
\tif (cert.signatures.openssh === undefined)
\t\tcert.signatures.openssh = {};
\ttry {
\t\tvar blob = toBuffer(cert, true);
\t} catch (e) {
\t\tdelete (cert.signatures.openssh);
\t\tdone(e);
\t\treturn;
\t}
\tvar sig = cert.signatures.openssh;

\tsigner(blob, function (err, signature) {
\t\tif (err) {
\t\t\tdone(err);
\t\t\treturn;
\t\t}
\t\ttry {
\t\t\t/*
\t\t\t * This will throw if the signature isn't of a
\t\t\t * type/algo that can be used for SSH.
\t\t\t */
\t\t\tsignature.toBuffer('ssh');
\t\t} catch (e) {
\t\t\tdone(e);
\t\t\treturn;
\t\t}
\t\tsig.signature = signature;
\t\tdone();
\t});
}

function write(cert, options) {
\tif (options === undefined)
\t\toptions = {};

\tvar blob = toBuffer(cert);
\tvar out = getCertType(cert.subjectKey) + ' ' + blob.toString('base64');
\tif (options.comment)
\t\tout = out + ' ' + options.comment;
\treturn (out);
}


function toBuffer(cert, noSig) {
\tassert.object(cert.signatures.openssh, 'signature for openssh format');
\tvar sig = cert.signatures.openssh;

\tif (sig.nonce === undefined)
\t\tsig.nonce = crypto.randomBytes(16);
\tvar buf = new SSHBuffer({});
\tbuf.writeString(getCertType(cert.subjectKey));
\tbuf.writeBuffer(sig.nonce);

\tvar key = cert.subjectKey;
\tvar algInfo = algs.info[key.type];
\talgInfo.parts.forEach(function (part) {
\t\tbuf.writePart(key.part[part]);
\t});

\tbuf.writeInt64(cert.serial);

\tvar type = cert.subjects[0].type;
\tassert.notStrictEqual(type, 'unknown');
\tcert.subjects.forEach(function (id) {
\t\tassert.strictEqual(id.type, type);
\t});
\ttype = TYPES[type];
\tbuf.writeInt(type);

\tif (sig.keyId === undefined) {
\t\tsig.keyId = cert.subjects[0].type + '_' +
\t\t    (cert.subjects[0].uid || cert.subjects[0].hostname);
\t}
\tbuf.writeString(sig.keyId);

\tvar sub = new SSHBuffer({});
\tcert.subjects.forEach(function (id) {
\t\tif (type === TYPES.host)
\t\t\tsub.writeString(id.hostname);
\t\telse if (type === TYPES.user)
\t\t\tsub.writeString(id.uid);
\t});
\tbuf.writeBuffer(sub.toBuffer());

\tbuf.writeInt64(dateToInt64(cert.validFrom));
\tbuf.writeInt64(dateToInt64(cert.validUntil));

\tif (sig.critical === undefined)
\t\tsig.critical = new Buffer(0);
\tbuf.writeBuffer(sig.critical);

\tif (sig.exts === undefined)
\t\tsig.exts = new Buffer(0);
\tbuf.writeBuffer(sig.exts);

\t/* reserved */
\tbuf.writeBuffer(new Buffer(0));

\tsub = rfc4253.write(cert.issuerKey);
\tbuf.writeBuffer(sub);

\tif (!noSig)
\t\tbuf.writeBuffer(sig.signature.toBuffer('ssh'));

\treturn (buf.toBuffer());
}

function getAlg(certType) {
\tif (certType === 'ssh-rsa-cert-v01@openssh.com')
\t\treturn ('rsa');
\tif (certType === 'ssh-dss-cert-v01@openssh.com')
\t\treturn ('dsa');
\tif (certType.match(ECDSA_ALGO))
\t\treturn ('ecdsa');
\tif (certType === 'ssh-ed25519-cert-v01@openssh.com')
\t\treturn ('ed25519');
\tthrow (new Error('Unsupported cert type ' + certType));
}

function getCertType(key) {
\tif (key.type === 'rsa')
\t\treturn ('ssh-rsa-cert-v01@openssh.com');
\tif (key.type === 'dsa')
\t\treturn ('ssh-dss-cert-v01@openssh.com');
\tif (key.type === 'ecdsa')
\t\treturn ('ecdsa-sha2-' + key.curve + '-cert-v01@openssh.com');
\tif (key.type === 'ed25519')
\t\treturn ('ssh-ed25519-cert-v01@openssh.com');
\tthrow (new Error('Unsupported key type ' + key.type));
}
";
        
        $__internal_2fd9ab7cc2a6b1b13e1d6ee97caefe9ab9837f136ffb6bb065973cc1775b409f->leave($__internal_2fd9ab7cc2a6b1b13e1d6ee97caefe9ab9837f136ffb6bb065973cc1775b409f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/sshpk/lib/formats/openssh-cert.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Copyright 2017 Joyent, Inc.

module.exports = {
\tread: read,
\tverify: verify,
\tsign: sign,
\tsignAsync: signAsync,
\twrite: write,

\t/* Internal private API */
\tfromBuffer: fromBuffer,
\ttoBuffer: toBuffer
};

var assert = require('assert-plus');
var SSHBuffer = require('../ssh-buffer');
var crypto = require('crypto');
var algs = require('../algs');
var Key = require('../key');
var PrivateKey = require('../private-key');
var Identity = require('../identity');
var rfc4253 = require('./rfc4253');
var Signature = require('../signature');
var utils = require('../utils');
var Certificate = require('../certificate');

function verify(cert, key) {
\t/*
\t * We always give an issuerKey, so if our verify() is being called then
\t * there was no signature. Return false.
\t */
\treturn (false);
}

var TYPES = {
\t'user': 1,
\t'host': 2
};
Object.keys(TYPES).forEach(function (k) { TYPES[TYPES[k]] = k; });

var ECDSA_ALGO = /^ecdsa-sha2-([^@-]+)-cert-v01@openssh.com\$/;

function read(buf, options) {
\tif (Buffer.isBuffer(buf))
\t\tbuf = buf.toString('ascii');
\tvar parts = buf.trim().split(/[ \\t\\n]+/g);
\tif (parts.length < 2 || parts.length > 3)
\t\tthrow (new Error('Not a valid SSH certificate line'));

\tvar algo = parts[0];
\tvar data = parts[1];

\tdata = new Buffer(data, 'base64');
\treturn (fromBuffer(data, algo));
}

function fromBuffer(data, algo, partial) {
\tvar sshbuf = new SSHBuffer({ buffer: data });
\tvar innerAlgo = sshbuf.readString();
\tif (algo !== undefined && innerAlgo !== algo)
\t\tthrow (new Error('SSH certificate algorithm mismatch'));
\tif (algo === undefined)
\t\talgo = innerAlgo;

\tvar cert = {};
\tcert.signatures = {};
\tcert.signatures.openssh = {};

\tcert.signatures.openssh.nonce = sshbuf.readBuffer();

\tvar key = {};
\tvar parts = (key.parts = []);
\tkey.type = getAlg(algo);

\tvar partCount = algs.info[key.type].parts.length;
\twhile (parts.length < partCount)
\t\tparts.push(sshbuf.readPart());
\tassert.ok(parts.length >= 1, 'key must have at least one part');

\tvar algInfo = algs.info[key.type];
\tif (key.type === 'ecdsa') {
\t\tvar res = ECDSA_ALGO.exec(algo);
\t\tassert.ok(res !== null);
\t\tassert.strictEqual(res[1], parts[0].data.toString());
\t}

\tfor (var i = 0; i < algInfo.parts.length; ++i) {
\t\tparts[i].name = algInfo.parts[i];
\t\tif (parts[i].name !== 'curve' &&
\t\t    algInfo.normalize !== false) {
\t\t\tvar p = parts[i];
\t\t\tp.data = utils.mpNormalize(p.data);
\t\t}
\t}

\tcert.subjectKey = new Key(key);

\tcert.serial = sshbuf.readInt64();

\tvar type = TYPES[sshbuf.readInt()];
\tassert.string(type, 'valid cert type');

\tcert.signatures.openssh.keyId = sshbuf.readString();

\tvar principals = [];
\tvar pbuf = sshbuf.readBuffer();
\tvar psshbuf = new SSHBuffer({ buffer: pbuf });
\twhile (!psshbuf.atEnd())
\t\tprincipals.push(psshbuf.readString());
\tif (principals.length === 0)
\t\tprincipals = ['*'];

\tcert.subjects = principals.map(function (pr) {
\t\tif (type === 'user')
\t\t\treturn (Identity.forUser(pr));
\t\telse if (type === 'host')
\t\t\treturn (Identity.forHost(pr));
\t\tthrow (new Error('Unknown identity type ' + type));
\t});

\tcert.validFrom = int64ToDate(sshbuf.readInt64());
\tcert.validUntil = int64ToDate(sshbuf.readInt64());

\tcert.signatures.openssh.critical = sshbuf.readBuffer();
\tcert.signatures.openssh.exts = sshbuf.readBuffer();

\t/* reserved */
\tsshbuf.readBuffer();

\tvar signingKeyBuf = sshbuf.readBuffer();
\tcert.issuerKey = rfc4253.read(signingKeyBuf);

\t/*
\t * OpenSSH certs don't give the identity of the issuer, just their
\t * public key. So, we use an Identity that matches anything. The
\t * isSignedBy() function will later tell you if the key matches.
\t */
\tcert.issuer = Identity.forHost('**');

\tvar sigBuf = sshbuf.readBuffer();
\tcert.signatures.openssh.signature =
\t    Signature.parse(sigBuf, cert.issuerKey.type, 'ssh');

\tif (partial !== undefined) {
\t\tpartial.remainder = sshbuf.remainder();
\t\tpartial.consumed = sshbuf._offset;
\t}

\treturn (new Certificate(cert));
}

function int64ToDate(buf) {
\tvar i = buf.readUInt32BE(0) * 4294967296;
\ti += buf.readUInt32BE(4);
\tvar d = new Date();
\td.setTime(i * 1000);
\td.sourceInt64 = buf;
\treturn (d);
}

function dateToInt64(date) {
\tif (date.sourceInt64 !== undefined)
\t\treturn (date.sourceInt64);
\tvar i = Math.round(date.getTime() / 1000);
\tvar upper = Math.floor(i / 4294967296);
\tvar lower = Math.floor(i % 4294967296);
\tvar buf = new Buffer(8);
\tbuf.writeUInt32BE(upper, 0);
\tbuf.writeUInt32BE(lower, 4);
\treturn (buf);
}

function sign(cert, key) {
\tif (cert.signatures.openssh === undefined)
\t\tcert.signatures.openssh = {};
\ttry {
\t\tvar blob = toBuffer(cert, true);
\t} catch (e) {
\t\tdelete (cert.signatures.openssh);
\t\treturn (false);
\t}
\tvar sig = cert.signatures.openssh;
\tvar hashAlgo = undefined;
\tif (key.type === 'rsa' || key.type === 'dsa')
\t\thashAlgo = 'sha1';
\tvar signer = key.createSign(hashAlgo);
\tsigner.write(blob);
\tsig.signature = signer.sign();
\treturn (true);
}

function signAsync(cert, signer, done) {
\tif (cert.signatures.openssh === undefined)
\t\tcert.signatures.openssh = {};
\ttry {
\t\tvar blob = toBuffer(cert, true);
\t} catch (e) {
\t\tdelete (cert.signatures.openssh);
\t\tdone(e);
\t\treturn;
\t}
\tvar sig = cert.signatures.openssh;

\tsigner(blob, function (err, signature) {
\t\tif (err) {
\t\t\tdone(err);
\t\t\treturn;
\t\t}
\t\ttry {
\t\t\t/*
\t\t\t * This will throw if the signature isn't of a
\t\t\t * type/algo that can be used for SSH.
\t\t\t */
\t\t\tsignature.toBuffer('ssh');
\t\t} catch (e) {
\t\t\tdone(e);
\t\t\treturn;
\t\t}
\t\tsig.signature = signature;
\t\tdone();
\t});
}

function write(cert, options) {
\tif (options === undefined)
\t\toptions = {};

\tvar blob = toBuffer(cert);
\tvar out = getCertType(cert.subjectKey) + ' ' + blob.toString('base64');
\tif (options.comment)
\t\tout = out + ' ' + options.comment;
\treturn (out);
}


function toBuffer(cert, noSig) {
\tassert.object(cert.signatures.openssh, 'signature for openssh format');
\tvar sig = cert.signatures.openssh;

\tif (sig.nonce === undefined)
\t\tsig.nonce = crypto.randomBytes(16);
\tvar buf = new SSHBuffer({});
\tbuf.writeString(getCertType(cert.subjectKey));
\tbuf.writeBuffer(sig.nonce);

\tvar key = cert.subjectKey;
\tvar algInfo = algs.info[key.type];
\talgInfo.parts.forEach(function (part) {
\t\tbuf.writePart(key.part[part]);
\t});

\tbuf.writeInt64(cert.serial);

\tvar type = cert.subjects[0].type;
\tassert.notStrictEqual(type, 'unknown');
\tcert.subjects.forEach(function (id) {
\t\tassert.strictEqual(id.type, type);
\t});
\ttype = TYPES[type];
\tbuf.writeInt(type);

\tif (sig.keyId === undefined) {
\t\tsig.keyId = cert.subjects[0].type + '_' +
\t\t    (cert.subjects[0].uid || cert.subjects[0].hostname);
\t}
\tbuf.writeString(sig.keyId);

\tvar sub = new SSHBuffer({});
\tcert.subjects.forEach(function (id) {
\t\tif (type === TYPES.host)
\t\t\tsub.writeString(id.hostname);
\t\telse if (type === TYPES.user)
\t\t\tsub.writeString(id.uid);
\t});
\tbuf.writeBuffer(sub.toBuffer());

\tbuf.writeInt64(dateToInt64(cert.validFrom));
\tbuf.writeInt64(dateToInt64(cert.validUntil));

\tif (sig.critical === undefined)
\t\tsig.critical = new Buffer(0);
\tbuf.writeBuffer(sig.critical);

\tif (sig.exts === undefined)
\t\tsig.exts = new Buffer(0);
\tbuf.writeBuffer(sig.exts);

\t/* reserved */
\tbuf.writeBuffer(new Buffer(0));

\tsub = rfc4253.write(cert.issuerKey);
\tbuf.writeBuffer(sub);

\tif (!noSig)
\t\tbuf.writeBuffer(sig.signature.toBuffer('ssh'));

\treturn (buf.toBuffer());
}

function getAlg(certType) {
\tif (certType === 'ssh-rsa-cert-v01@openssh.com')
\t\treturn ('rsa');
\tif (certType === 'ssh-dss-cert-v01@openssh.com')
\t\treturn ('dsa');
\tif (certType.match(ECDSA_ALGO))
\t\treturn ('ecdsa');
\tif (certType === 'ssh-ed25519-cert-v01@openssh.com')
\t\treturn ('ed25519');
\tthrow (new Error('Unsupported cert type ' + certType));
}

function getCertType(key) {
\tif (key.type === 'rsa')
\t\treturn ('ssh-rsa-cert-v01@openssh.com');
\tif (key.type === 'dsa')
\t\treturn ('ssh-dss-cert-v01@openssh.com');
\tif (key.type === 'ecdsa')
\t\treturn ('ecdsa-sha2-' + key.curve + '-cert-v01@openssh.com');
\tif (key.type === 'ed25519')
\t\treturn ('ssh-ed25519-cert-v01@openssh.com');
\tthrow (new Error('Unsupported key type ' + key.type));
}
", "node_modules/fsevents/node_modules/sshpk/lib/formats/openssh-cert.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/sshpk/lib/formats/openssh-cert.js");
    }
}
