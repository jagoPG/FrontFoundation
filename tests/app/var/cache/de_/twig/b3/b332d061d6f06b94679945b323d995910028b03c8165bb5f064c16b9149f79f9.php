<?php

/* node_modules/sshpk/lib/signature.js */
class __TwigTemplate_2c5e8f91fc34b4b9e9ecdedb0a7853fe3846ce1ce1684018244a98ed59128e19 extends Twig_Template
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
        $__internal_22e326f3a9c440a5714f89e57b80129709dd90e7f00d27876f653204a7a186d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e326f3a9c440a5714f89e57b80129709dd90e7f00d27876f653204a7a186d0->enter($__internal_22e326f3a9c440a5714f89e57b80129709dd90e7f00d27876f653204a7a186d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sshpk/lib/signature.js"));

        // line 1
        echo "// Copyright 2015 Joyent, Inc.

module.exports = Signature;

var assert = require('assert-plus');
var algs = require('./algs');
var crypto = require('crypto');
var errs = require('./errors');
var utils = require('./utils');
var asn1 = require('asn1');
var SSHBuffer = require('./ssh-buffer');

var InvalidAlgorithmError = errs.InvalidAlgorithmError;
var SignatureParseError = errs.SignatureParseError;

function Signature(opts) {
\tassert.object(opts, 'options');
\tassert.arrayOfObject(opts.parts, 'options.parts');
\tassert.string(opts.type, 'options.type');

\tvar partLookup = {};
\tfor (var i = 0; i < opts.parts.length; ++i) {
\t\tvar part = opts.parts[i];
\t\tpartLookup[part.name] = part;
\t}

\tthis.type = opts.type;
\tthis.hashAlgorithm = opts.hashAlgo;
\tthis.curve = opts.curve;
\tthis.parts = opts.parts;
\tthis.part = partLookup;
}

Signature.prototype.toBuffer = function (format) {
\tif (format === undefined)
\t\tformat = 'asn1';
\tassert.string(format, 'format');

\tvar buf;
\tvar stype = 'ssh-' + this.type;

\tswitch (this.type) {
\tcase 'rsa':
\t\tswitch (this.hashAlgorithm) {
\t\tcase 'sha256':
\t\t\tstype = 'rsa-sha2-256';
\t\t\tbreak;
\t\tcase 'sha512':
\t\t\tstype = 'rsa-sha2-512';
\t\t\tbreak;
\t\tcase 'sha1':
\t\tcase undefined:
\t\t\tbreak;
\t\tdefault:
\t\t\tthrow (new Error('SSH signature ' +
\t\t\t    'format does not support hash ' +
\t\t\t    'algorithm ' + this.hashAlgorithm));
\t\t}
\t\tif (format === 'ssh') {
\t\t\tbuf = new SSHBuffer({});
\t\t\tbuf.writeString(stype);
\t\t\tbuf.writePart(this.part.sig);
\t\t\treturn (buf.toBuffer());
\t\t} else {
\t\t\treturn (this.part.sig.data);
\t\t}
\t\tbreak;

\tcase 'ed25519':
\t\tif (format === 'ssh') {
\t\t\tbuf = new SSHBuffer({});
\t\t\tbuf.writeString(stype);
\t\t\tbuf.writePart(this.part.sig);
\t\t\treturn (buf.toBuffer());
\t\t} else {
\t\t\treturn (this.part.sig.data);
\t\t}
\t\tbreak;

\tcase 'dsa':
\tcase 'ecdsa':
\t\tvar r, s;
\t\tif (format === 'asn1') {
\t\t\tvar der = new asn1.BerWriter();
\t\t\tder.startSequence();
\t\t\tr = utils.mpNormalize(this.part.r.data);
\t\t\ts = utils.mpNormalize(this.part.s.data);
\t\t\tder.writeBuffer(r, asn1.Ber.Integer);
\t\t\tder.writeBuffer(s, asn1.Ber.Integer);
\t\t\tder.endSequence();
\t\t\treturn (der.buffer);
\t\t} else if (format === 'ssh' && this.type === 'dsa') {
\t\t\tbuf = new SSHBuffer({});
\t\t\tbuf.writeString('ssh-dss');
\t\t\tr = this.part.r.data;
\t\t\tif (r.length > 20 && r[0] === 0x00)
\t\t\t\tr = r.slice(1);
\t\t\ts = this.part.s.data;
\t\t\tif (s.length > 20 && s[0] === 0x00)
\t\t\t\ts = s.slice(1);
\t\t\tif ((this.hashAlgorithm &&
\t\t\t    this.hashAlgorithm !== 'sha1') ||
\t\t\t    r.length + s.length !== 40) {
\t\t\t\tthrow (new Error('OpenSSH only supports ' +
\t\t\t\t    'DSA signatures with SHA1 hash'));
\t\t\t}
\t\t\tbuf.writeBuffer(Buffer.concat([r, s]));
\t\t\treturn (buf.toBuffer());
\t\t} else if (format === 'ssh' && this.type === 'ecdsa') {
\t\t\tvar inner = new SSHBuffer({});
\t\t\tr = this.part.r.data;
\t\t\tinner.writeBuffer(r);
\t\t\tinner.writePart(this.part.s);

\t\t\tbuf = new SSHBuffer({});
\t\t\t/* XXX: find a more proper way to do this? */
\t\t\tvar curve;
\t\t\tif (r[0] === 0x00)
\t\t\t\tr = r.slice(1);
\t\t\tvar sz = r.length * 8;
\t\t\tif (sz === 256)
\t\t\t\tcurve = 'nistp256';
\t\t\telse if (sz === 384)
\t\t\t\tcurve = 'nistp384';
\t\t\telse if (sz === 528)
\t\t\t\tcurve = 'nistp521';
\t\t\tbuf.writeString('ecdsa-sha2-' + curve);
\t\t\tbuf.writeBuffer(inner.toBuffer());
\t\t\treturn (buf.toBuffer());
\t\t}
\t\tthrow (new Error('Invalid signature format'));
\tdefault:
\t\tthrow (new Error('Invalid signature data'));
\t}
};

Signature.prototype.toString = function (format) {
\tassert.optionalString(format, 'format');
\treturn (this.toBuffer(format).toString('base64'));
};

Signature.parse = function (data, type, format) {
\tif (typeof (data) === 'string')
\t\tdata = new Buffer(data, 'base64');
\tassert.buffer(data, 'data');
\tassert.string(format, 'format');
\tassert.string(type, 'type');

\tvar opts = {};
\topts.type = type.toLowerCase();
\topts.parts = [];

\ttry {
\t\tassert.ok(data.length > 0, 'signature must not be empty');
\t\tswitch (opts.type) {
\t\tcase 'rsa':
\t\t\treturn (parseOneNum(data, type, format, opts));
\t\tcase 'ed25519':
\t\t\treturn (parseOneNum(data, type, format, opts));

\t\tcase 'dsa':
\t\tcase 'ecdsa':
\t\t\tif (format === 'asn1')
\t\t\t\treturn (parseDSAasn1(data, type, format, opts));
\t\t\telse if (opts.type === 'dsa')
\t\t\t\treturn (parseDSA(data, type, format, opts));
\t\t\telse
\t\t\t\treturn (parseECDSA(data, type, format, opts));

\t\tdefault:
\t\t\tthrow (new InvalidAlgorithmError(type));
\t\t}

\t} catch (e) {
\t\tif (e instanceof InvalidAlgorithmError)
\t\t\tthrow (e);
\t\tthrow (new SignatureParseError(type, format, e));
\t}
};

function parseOneNum(data, type, format, opts) {
\tif (format === 'ssh') {
\t\ttry {
\t\t\tvar buf = new SSHBuffer({buffer: data});
\t\t\tvar head = buf.readString();
\t\t} catch (e) {
\t\t\t/* fall through */
\t\t}
\t\tif (buf !== undefined) {
\t\t\tvar msg = 'SSH signature does not match expected ' +
\t\t\t    'type (expected ' + type + ', got ' + head + ')';
\t\t\tswitch (head) {
\t\t\tcase 'ssh-rsa':
\t\t\t\tassert.strictEqual(type, 'rsa', msg);
\t\t\t\topts.hashAlgo = 'sha1';
\t\t\t\tbreak;
\t\t\tcase 'rsa-sha2-256':
\t\t\t\tassert.strictEqual(type, 'rsa', msg);
\t\t\t\topts.hashAlgo = 'sha256';
\t\t\t\tbreak;
\t\t\tcase 'rsa-sha2-512':
\t\t\t\tassert.strictEqual(type, 'rsa', msg);
\t\t\t\topts.hashAlgo = 'sha512';
\t\t\t\tbreak;
\t\t\tcase 'ssh-ed25519':
\t\t\t\tassert.strictEqual(type, 'ed25519', msg);
\t\t\t\topts.hashAlgo = 'sha512';
\t\t\t\tbreak;
\t\t\tdefault:
\t\t\t\tthrow (new Error('Unknown SSH signature ' +
\t\t\t\t    'type: ' + head));
\t\t\t}
\t\t\tvar sig = buf.readPart();
\t\t\tassert.ok(buf.atEnd(), 'extra trailing bytes');
\t\t\tsig.name = 'sig';
\t\t\topts.parts.push(sig);
\t\t\treturn (new Signature(opts));
\t\t}
\t}
\topts.parts.push({name: 'sig', data: data});
\treturn (new Signature(opts));
}

function parseDSAasn1(data, type, format, opts) {
\tvar der = new asn1.BerReader(data);
\tder.readSequence();
\tvar r = der.readString(asn1.Ber.Integer, true);
\tvar s = der.readString(asn1.Ber.Integer, true);

\topts.parts.push({name: 'r', data: utils.mpNormalize(r)});
\topts.parts.push({name: 's', data: utils.mpNormalize(s)});

\treturn (new Signature(opts));
}

function parseDSA(data, type, format, opts) {
\tif (data.length != 40) {
\t\tvar buf = new SSHBuffer({buffer: data});
\t\tvar d = buf.readBuffer();
\t\tif (d.toString('ascii') === 'ssh-dss')
\t\t\td = buf.readBuffer();
\t\tassert.ok(buf.atEnd(), 'extra trailing bytes');
\t\tassert.strictEqual(d.length, 40, 'invalid inner length');
\t\tdata = d;
\t}
\topts.parts.push({name: 'r', data: data.slice(0, 20)});
\topts.parts.push({name: 's', data: data.slice(20, 40)});
\treturn (new Signature(opts));
}

function parseECDSA(data, type, format, opts) {
\tvar buf = new SSHBuffer({buffer: data});

\tvar r, s;
\tvar inner = buf.readBuffer();
\tvar stype = inner.toString('ascii');
\tif (stype.slice(0, 6) === 'ecdsa-') {
\t\tvar parts = stype.split('-');
\t\tassert.strictEqual(parts[0], 'ecdsa');
\t\tassert.strictEqual(parts[1], 'sha2');
\t\topts.curve = parts[2];
\t\tswitch (opts.curve) {
\t\tcase 'nistp256':
\t\t\topts.hashAlgo = 'sha256';
\t\t\tbreak;
\t\tcase 'nistp384':
\t\t\topts.hashAlgo = 'sha384';
\t\t\tbreak;
\t\tcase 'nistp521':
\t\t\topts.hashAlgo = 'sha512';
\t\t\tbreak;
\t\tdefault:
\t\t\tthrow (new Error('Unsupported ECDSA curve: ' +
\t\t\t    opts.curve));
\t\t}
\t\tinner = buf.readBuffer();
\t\tassert.ok(buf.atEnd(), 'extra trailing bytes on outer');
\t\tbuf = new SSHBuffer({buffer: inner});
\t\tr = buf.readPart();
\t} else {
\t\tr = {data: inner};
\t}

\ts = buf.readPart();
\tassert.ok(buf.atEnd(), 'extra trailing bytes');

\tr.name = 'r';
\ts.name = 's';

\topts.parts.push(r);
\topts.parts.push(s);
\treturn (new Signature(opts));
}

Signature.isSignature = function (obj, ver) {
\treturn (utils.isCompatible(obj, Signature, ver));
};

/*
 * API versions for Signature:
 * [1,0] -- initial ver
 * [2,0] -- support for rsa in full ssh format, compat with sshpk-agent
 *          hashAlgorithm property
 * [2,1] -- first tagged version
 */
Signature.prototype._sshpkApiVersion = [2, 1];

Signature._oldVersionDetect = function (obj) {
\tassert.func(obj.toBuffer);
\tif (obj.hasOwnProperty('hashAlgorithm'))
\t\treturn ([2, 0]);
\treturn ([1, 0]);
};
";
        
        $__internal_22e326f3a9c440a5714f89e57b80129709dd90e7f00d27876f653204a7a186d0->leave($__internal_22e326f3a9c440a5714f89e57b80129709dd90e7f00d27876f653204a7a186d0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sshpk/lib/signature.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Copyright 2015 Joyent, Inc.

module.exports = Signature;

var assert = require('assert-plus');
var algs = require('./algs');
var crypto = require('crypto');
var errs = require('./errors');
var utils = require('./utils');
var asn1 = require('asn1');
var SSHBuffer = require('./ssh-buffer');

var InvalidAlgorithmError = errs.InvalidAlgorithmError;
var SignatureParseError = errs.SignatureParseError;

function Signature(opts) {
\tassert.object(opts, 'options');
\tassert.arrayOfObject(opts.parts, 'options.parts');
\tassert.string(opts.type, 'options.type');

\tvar partLookup = {};
\tfor (var i = 0; i < opts.parts.length; ++i) {
\t\tvar part = opts.parts[i];
\t\tpartLookup[part.name] = part;
\t}

\tthis.type = opts.type;
\tthis.hashAlgorithm = opts.hashAlgo;
\tthis.curve = opts.curve;
\tthis.parts = opts.parts;
\tthis.part = partLookup;
}

Signature.prototype.toBuffer = function (format) {
\tif (format === undefined)
\t\tformat = 'asn1';
\tassert.string(format, 'format');

\tvar buf;
\tvar stype = 'ssh-' + this.type;

\tswitch (this.type) {
\tcase 'rsa':
\t\tswitch (this.hashAlgorithm) {
\t\tcase 'sha256':
\t\t\tstype = 'rsa-sha2-256';
\t\t\tbreak;
\t\tcase 'sha512':
\t\t\tstype = 'rsa-sha2-512';
\t\t\tbreak;
\t\tcase 'sha1':
\t\tcase undefined:
\t\t\tbreak;
\t\tdefault:
\t\t\tthrow (new Error('SSH signature ' +
\t\t\t    'format does not support hash ' +
\t\t\t    'algorithm ' + this.hashAlgorithm));
\t\t}
\t\tif (format === 'ssh') {
\t\t\tbuf = new SSHBuffer({});
\t\t\tbuf.writeString(stype);
\t\t\tbuf.writePart(this.part.sig);
\t\t\treturn (buf.toBuffer());
\t\t} else {
\t\t\treturn (this.part.sig.data);
\t\t}
\t\tbreak;

\tcase 'ed25519':
\t\tif (format === 'ssh') {
\t\t\tbuf = new SSHBuffer({});
\t\t\tbuf.writeString(stype);
\t\t\tbuf.writePart(this.part.sig);
\t\t\treturn (buf.toBuffer());
\t\t} else {
\t\t\treturn (this.part.sig.data);
\t\t}
\t\tbreak;

\tcase 'dsa':
\tcase 'ecdsa':
\t\tvar r, s;
\t\tif (format === 'asn1') {
\t\t\tvar der = new asn1.BerWriter();
\t\t\tder.startSequence();
\t\t\tr = utils.mpNormalize(this.part.r.data);
\t\t\ts = utils.mpNormalize(this.part.s.data);
\t\t\tder.writeBuffer(r, asn1.Ber.Integer);
\t\t\tder.writeBuffer(s, asn1.Ber.Integer);
\t\t\tder.endSequence();
\t\t\treturn (der.buffer);
\t\t} else if (format === 'ssh' && this.type === 'dsa') {
\t\t\tbuf = new SSHBuffer({});
\t\t\tbuf.writeString('ssh-dss');
\t\t\tr = this.part.r.data;
\t\t\tif (r.length > 20 && r[0] === 0x00)
\t\t\t\tr = r.slice(1);
\t\t\ts = this.part.s.data;
\t\t\tif (s.length > 20 && s[0] === 0x00)
\t\t\t\ts = s.slice(1);
\t\t\tif ((this.hashAlgorithm &&
\t\t\t    this.hashAlgorithm !== 'sha1') ||
\t\t\t    r.length + s.length !== 40) {
\t\t\t\tthrow (new Error('OpenSSH only supports ' +
\t\t\t\t    'DSA signatures with SHA1 hash'));
\t\t\t}
\t\t\tbuf.writeBuffer(Buffer.concat([r, s]));
\t\t\treturn (buf.toBuffer());
\t\t} else if (format === 'ssh' && this.type === 'ecdsa') {
\t\t\tvar inner = new SSHBuffer({});
\t\t\tr = this.part.r.data;
\t\t\tinner.writeBuffer(r);
\t\t\tinner.writePart(this.part.s);

\t\t\tbuf = new SSHBuffer({});
\t\t\t/* XXX: find a more proper way to do this? */
\t\t\tvar curve;
\t\t\tif (r[0] === 0x00)
\t\t\t\tr = r.slice(1);
\t\t\tvar sz = r.length * 8;
\t\t\tif (sz === 256)
\t\t\t\tcurve = 'nistp256';
\t\t\telse if (sz === 384)
\t\t\t\tcurve = 'nistp384';
\t\t\telse if (sz === 528)
\t\t\t\tcurve = 'nistp521';
\t\t\tbuf.writeString('ecdsa-sha2-' + curve);
\t\t\tbuf.writeBuffer(inner.toBuffer());
\t\t\treturn (buf.toBuffer());
\t\t}
\t\tthrow (new Error('Invalid signature format'));
\tdefault:
\t\tthrow (new Error('Invalid signature data'));
\t}
};

Signature.prototype.toString = function (format) {
\tassert.optionalString(format, 'format');
\treturn (this.toBuffer(format).toString('base64'));
};

Signature.parse = function (data, type, format) {
\tif (typeof (data) === 'string')
\t\tdata = new Buffer(data, 'base64');
\tassert.buffer(data, 'data');
\tassert.string(format, 'format');
\tassert.string(type, 'type');

\tvar opts = {};
\topts.type = type.toLowerCase();
\topts.parts = [];

\ttry {
\t\tassert.ok(data.length > 0, 'signature must not be empty');
\t\tswitch (opts.type) {
\t\tcase 'rsa':
\t\t\treturn (parseOneNum(data, type, format, opts));
\t\tcase 'ed25519':
\t\t\treturn (parseOneNum(data, type, format, opts));

\t\tcase 'dsa':
\t\tcase 'ecdsa':
\t\t\tif (format === 'asn1')
\t\t\t\treturn (parseDSAasn1(data, type, format, opts));
\t\t\telse if (opts.type === 'dsa')
\t\t\t\treturn (parseDSA(data, type, format, opts));
\t\t\telse
\t\t\t\treturn (parseECDSA(data, type, format, opts));

\t\tdefault:
\t\t\tthrow (new InvalidAlgorithmError(type));
\t\t}

\t} catch (e) {
\t\tif (e instanceof InvalidAlgorithmError)
\t\t\tthrow (e);
\t\tthrow (new SignatureParseError(type, format, e));
\t}
};

function parseOneNum(data, type, format, opts) {
\tif (format === 'ssh') {
\t\ttry {
\t\t\tvar buf = new SSHBuffer({buffer: data});
\t\t\tvar head = buf.readString();
\t\t} catch (e) {
\t\t\t/* fall through */
\t\t}
\t\tif (buf !== undefined) {
\t\t\tvar msg = 'SSH signature does not match expected ' +
\t\t\t    'type (expected ' + type + ', got ' + head + ')';
\t\t\tswitch (head) {
\t\t\tcase 'ssh-rsa':
\t\t\t\tassert.strictEqual(type, 'rsa', msg);
\t\t\t\topts.hashAlgo = 'sha1';
\t\t\t\tbreak;
\t\t\tcase 'rsa-sha2-256':
\t\t\t\tassert.strictEqual(type, 'rsa', msg);
\t\t\t\topts.hashAlgo = 'sha256';
\t\t\t\tbreak;
\t\t\tcase 'rsa-sha2-512':
\t\t\t\tassert.strictEqual(type, 'rsa', msg);
\t\t\t\topts.hashAlgo = 'sha512';
\t\t\t\tbreak;
\t\t\tcase 'ssh-ed25519':
\t\t\t\tassert.strictEqual(type, 'ed25519', msg);
\t\t\t\topts.hashAlgo = 'sha512';
\t\t\t\tbreak;
\t\t\tdefault:
\t\t\t\tthrow (new Error('Unknown SSH signature ' +
\t\t\t\t    'type: ' + head));
\t\t\t}
\t\t\tvar sig = buf.readPart();
\t\t\tassert.ok(buf.atEnd(), 'extra trailing bytes');
\t\t\tsig.name = 'sig';
\t\t\topts.parts.push(sig);
\t\t\treturn (new Signature(opts));
\t\t}
\t}
\topts.parts.push({name: 'sig', data: data});
\treturn (new Signature(opts));
}

function parseDSAasn1(data, type, format, opts) {
\tvar der = new asn1.BerReader(data);
\tder.readSequence();
\tvar r = der.readString(asn1.Ber.Integer, true);
\tvar s = der.readString(asn1.Ber.Integer, true);

\topts.parts.push({name: 'r', data: utils.mpNormalize(r)});
\topts.parts.push({name: 's', data: utils.mpNormalize(s)});

\treturn (new Signature(opts));
}

function parseDSA(data, type, format, opts) {
\tif (data.length != 40) {
\t\tvar buf = new SSHBuffer({buffer: data});
\t\tvar d = buf.readBuffer();
\t\tif (d.toString('ascii') === 'ssh-dss')
\t\t\td = buf.readBuffer();
\t\tassert.ok(buf.atEnd(), 'extra trailing bytes');
\t\tassert.strictEqual(d.length, 40, 'invalid inner length');
\t\tdata = d;
\t}
\topts.parts.push({name: 'r', data: data.slice(0, 20)});
\topts.parts.push({name: 's', data: data.slice(20, 40)});
\treturn (new Signature(opts));
}

function parseECDSA(data, type, format, opts) {
\tvar buf = new SSHBuffer({buffer: data});

\tvar r, s;
\tvar inner = buf.readBuffer();
\tvar stype = inner.toString('ascii');
\tif (stype.slice(0, 6) === 'ecdsa-') {
\t\tvar parts = stype.split('-');
\t\tassert.strictEqual(parts[0], 'ecdsa');
\t\tassert.strictEqual(parts[1], 'sha2');
\t\topts.curve = parts[2];
\t\tswitch (opts.curve) {
\t\tcase 'nistp256':
\t\t\topts.hashAlgo = 'sha256';
\t\t\tbreak;
\t\tcase 'nistp384':
\t\t\topts.hashAlgo = 'sha384';
\t\t\tbreak;
\t\tcase 'nistp521':
\t\t\topts.hashAlgo = 'sha512';
\t\t\tbreak;
\t\tdefault:
\t\t\tthrow (new Error('Unsupported ECDSA curve: ' +
\t\t\t    opts.curve));
\t\t}
\t\tinner = buf.readBuffer();
\t\tassert.ok(buf.atEnd(), 'extra trailing bytes on outer');
\t\tbuf = new SSHBuffer({buffer: inner});
\t\tr = buf.readPart();
\t} else {
\t\tr = {data: inner};
\t}

\ts = buf.readPart();
\tassert.ok(buf.atEnd(), 'extra trailing bytes');

\tr.name = 'r';
\ts.name = 's';

\topts.parts.push(r);
\topts.parts.push(s);
\treturn (new Signature(opts));
}

Signature.isSignature = function (obj, ver) {
\treturn (utils.isCompatible(obj, Signature, ver));
};

/*
 * API versions for Signature:
 * [1,0] -- initial ver
 * [2,0] -- support for rsa in full ssh format, compat with sshpk-agent
 *          hashAlgorithm property
 * [2,1] -- first tagged version
 */
Signature.prototype._sshpkApiVersion = [2, 1];

Signature._oldVersionDetect = function (obj) {
\tassert.func(obj.toBuffer);
\tif (obj.hasOwnProperty('hashAlgorithm'))
\t\treturn ([2, 0]);
\treturn ([1, 0]);
};
", "node_modules/sshpk/lib/signature.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sshpk/lib/signature.js");
    }
}
