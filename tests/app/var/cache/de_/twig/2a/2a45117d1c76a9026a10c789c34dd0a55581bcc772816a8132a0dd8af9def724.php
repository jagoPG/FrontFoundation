<?php

/* node_modules/sshpk/lib/private-key.js */
class __TwigTemplate_a2e9bb5c160048a74e50050e89fd758c03546f98a8ac7d271f617ebf0483af91 extends Twig_Template
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
        $__internal_857fea087f273a643155f832fcff6d4a6c653bf823d3f69a50d050187c3c2b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_857fea087f273a643155f832fcff6d4a6c653bf823d3f69a50d050187c3c2b2c->enter($__internal_857fea087f273a643155f832fcff6d4a6c653bf823d3f69a50d050187c3c2b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sshpk/lib/private-key.js"));

        // line 1
        echo "// Copyright 2017 Joyent, Inc.

module.exports = PrivateKey;

var assert = require('assert-plus');
var algs = require('./algs');
var crypto = require('crypto');
var Fingerprint = require('./fingerprint');
var Signature = require('./signature');
var errs = require('./errors');
var util = require('util');
var utils = require('./utils');
var dhe = require('./dhe');
var generateECDSA = dhe.generateECDSA;
var generateED25519 = dhe.generateED25519;
var edCompat;
var nacl;

try {
\tedCompat = require('./ed-compat');
} catch (e) {
\t/* Just continue through, and bail out if we try to use it. */
}

var Key = require('./key');

var InvalidAlgorithmError = errs.InvalidAlgorithmError;
var KeyParseError = errs.KeyParseError;
var KeyEncryptedError = errs.KeyEncryptedError;

var formats = {};
formats['auto'] = require('./formats/auto');
formats['pem'] = require('./formats/pem');
formats['pkcs1'] = require('./formats/pkcs1');
formats['pkcs8'] = require('./formats/pkcs8');
formats['rfc4253'] = require('./formats/rfc4253');
formats['ssh-private'] = require('./formats/ssh-private');
formats['openssh'] = formats['ssh-private'];
formats['ssh'] = formats['ssh-private'];

function PrivateKey(opts) {
\tassert.object(opts, 'options');
\tKey.call(this, opts);

\tthis._pubCache = undefined;
}
util.inherits(PrivateKey, Key);

PrivateKey.formats = formats;

PrivateKey.prototype.toBuffer = function (format, options) {
\tif (format === undefined)
\t\tformat = 'pkcs1';
\tassert.string(format, 'format');
\tassert.object(formats[format], 'formats[format]');
\tassert.optionalObject(options, 'options');

\treturn (formats[format].write(this, options));
};

PrivateKey.prototype.hash = function (algo) {
\treturn (this.toPublic().hash(algo));
};

PrivateKey.prototype.toPublic = function () {
\tif (this._pubCache)
\t\treturn (this._pubCache);

\tvar algInfo = algs.info[this.type];
\tvar pubParts = [];
\tfor (var i = 0; i < algInfo.parts.length; ++i) {
\t\tvar p = algInfo.parts[i];
\t\tpubParts.push(this.part[p]);
\t}

\tthis._pubCache = new Key({
\t\ttype: this.type,
\t\tsource: this,
\t\tparts: pubParts
\t});
\tif (this.comment)
\t\tthis._pubCache.comment = this.comment;
\treturn (this._pubCache);
};

PrivateKey.prototype.derive = function (newType) {
\tassert.string(newType, 'type');
\tvar priv, pub, pair;

\tif (this.type === 'ed25519' && newType === 'curve25519') {
\t\tif (nacl === undefined)
\t\t\tnacl = require('tweetnacl');

\t\tpriv = this.part.r.data;
\t\tif (priv[0] === 0x00)
\t\t\tpriv = priv.slice(1);
\t\tpriv = priv.slice(0, 32);

\t\tpair = nacl.box.keyPair.fromSecretKey(new Uint8Array(priv));
\t\tpub = new Buffer(pair.publicKey);
\t\tpriv = Buffer.concat([priv, pub]);

\t\treturn (new PrivateKey({
\t\t\ttype: 'curve25519',
\t\t\tparts: [
\t\t\t\t{ name: 'R', data: utils.mpNormalize(pub) },
\t\t\t\t{ name: 'r', data: priv }
\t\t\t]
\t\t}));
\t} else if (this.type === 'curve25519' && newType === 'ed25519') {
\t\tif (nacl === undefined)
\t\t\tnacl = require('tweetnacl');

\t\tpriv = this.part.r.data;
\t\tif (priv[0] === 0x00)
\t\t\tpriv = priv.slice(1);
\t\tpriv = priv.slice(0, 32);

\t\tpair = nacl.sign.keyPair.fromSeed(new Uint8Array(priv));
\t\tpub = new Buffer(pair.publicKey);
\t\tpriv = Buffer.concat([priv, pub]);

\t\treturn (new PrivateKey({
\t\t\ttype: 'ed25519',
\t\t\tparts: [
\t\t\t\t{ name: 'R', data: utils.mpNormalize(pub) },
\t\t\t\t{ name: 'r', data: priv }
\t\t\t]
\t\t}));
\t}
\tthrow (new Error('Key derivation not supported from ' + this.type +
\t    ' to ' + newType));
};

PrivateKey.prototype.createVerify = function (hashAlgo) {
\treturn (this.toPublic().createVerify(hashAlgo));
};

PrivateKey.prototype.createSign = function (hashAlgo) {
\tif (hashAlgo === undefined)
\t\thashAlgo = this.defaultHashAlgorithm();
\tassert.string(hashAlgo, 'hash algorithm');

\t/* ED25519 is not supported by OpenSSL, use a javascript impl. */
\tif (this.type === 'ed25519' && edCompat !== undefined)
\t\treturn (new edCompat.Signer(this, hashAlgo));
\tif (this.type === 'curve25519')
\t\tthrow (new Error('Curve25519 keys are not suitable for ' +
\t\t    'signing or verification'));

\tvar v, nm, err;
\ttry {
\t\tnm = hashAlgo.toUpperCase();
\t\tv = crypto.createSign(nm);
\t} catch (e) {
\t\terr = e;
\t}
\tif (v === undefined || (err instanceof Error &&
\t    err.message.match(/Unknown message digest/))) {
\t\tnm = 'RSA-';
\t\tnm += hashAlgo.toUpperCase();
\t\tv = crypto.createSign(nm);
\t}
\tassert.ok(v, 'failed to create verifier');
\tvar oldSign = v.sign.bind(v);
\tvar key = this.toBuffer('pkcs1');
\tvar type = this.type;
\tvar curve = this.curve;
\tv.sign = function () {
\t\tvar sig = oldSign(key);
\t\tif (typeof (sig) === 'string')
\t\t\tsig = new Buffer(sig, 'binary');
\t\tsig = Signature.parse(sig, type, 'asn1');
\t\tsig.hashAlgorithm = hashAlgo;
\t\tsig.curve = curve;
\t\treturn (sig);
\t};
\treturn (v);
};

PrivateKey.parse = function (data, format, options) {
\tif (typeof (data) !== 'string')
\t\tassert.buffer(data, 'data');
\tif (format === undefined)
\t\tformat = 'auto';
\tassert.string(format, 'format');
\tif (typeof (options) === 'string')
\t\toptions = { filename: options };
\tassert.optionalObject(options, 'options');
\tif (options === undefined)
\t\toptions = {};
\tassert.optionalString(options.filename, 'options.filename');
\tif (options.filename === undefined)
\t\toptions.filename = '(unnamed)';

\tassert.object(formats[format], 'formats[format]');

\ttry {
\t\tvar k = formats[format].read(data, options);
\t\tassert.ok(k instanceof PrivateKey, 'key is not a private key');
\t\tif (!k.comment)
\t\t\tk.comment = options.filename;
\t\treturn (k);
\t} catch (e) {
\t\tif (e.name === 'KeyEncryptedError')
\t\t\tthrow (e);
\t\tthrow (new KeyParseError(options.filename, format, e));
\t}
};

PrivateKey.isPrivateKey = function (obj, ver) {
\treturn (utils.isCompatible(obj, PrivateKey, ver));
};

PrivateKey.generate = function (type, options) {
\tif (options === undefined)
\t\toptions = {};
\tassert.object(options, 'options');

\tswitch (type) {
\tcase 'ecdsa':
\t\tif (options.curve === undefined)
\t\t\toptions.curve = 'nistp256';
\t\tassert.string(options.curve, 'options.curve');
\t\treturn (generateECDSA(options.curve));
\tcase 'ed25519':
\t\treturn (generateED25519());
\tdefault:
\t\tthrow (new Error('Key generation not supported with key ' +
\t\t    'type \"' + type + '\"'));
\t}
};

/*
 * API versions for PrivateKey:
 * [1,0] -- initial ver
 * [1,1] -- added auto, pkcs[18], openssh/ssh-private formats
 * [1,2] -- added defaultHashAlgorithm
 * [1,3] -- added derive, ed, createDH
 * [1,4] -- first tagged version
 */
PrivateKey.prototype._sshpkApiVersion = [1, 4];

PrivateKey._oldVersionDetect = function (obj) {
\tassert.func(obj.toPublic);
\tassert.func(obj.createSign);
\tif (obj.derive)
\t\treturn ([1, 3]);
\tif (obj.defaultHashAlgorithm)
\t\treturn ([1, 2]);
\tif (obj.formats['auto'])
\t\treturn ([1, 1]);
\treturn ([1, 0]);
};
";
        
        $__internal_857fea087f273a643155f832fcff6d4a6c653bf823d3f69a50d050187c3c2b2c->leave($__internal_857fea087f273a643155f832fcff6d4a6c653bf823d3f69a50d050187c3c2b2c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sshpk/lib/private-key.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Copyright 2017 Joyent, Inc.

module.exports = PrivateKey;

var assert = require('assert-plus');
var algs = require('./algs');
var crypto = require('crypto');
var Fingerprint = require('./fingerprint');
var Signature = require('./signature');
var errs = require('./errors');
var util = require('util');
var utils = require('./utils');
var dhe = require('./dhe');
var generateECDSA = dhe.generateECDSA;
var generateED25519 = dhe.generateED25519;
var edCompat;
var nacl;

try {
\tedCompat = require('./ed-compat');
} catch (e) {
\t/* Just continue through, and bail out if we try to use it. */
}

var Key = require('./key');

var InvalidAlgorithmError = errs.InvalidAlgorithmError;
var KeyParseError = errs.KeyParseError;
var KeyEncryptedError = errs.KeyEncryptedError;

var formats = {};
formats['auto'] = require('./formats/auto');
formats['pem'] = require('./formats/pem');
formats['pkcs1'] = require('./formats/pkcs1');
formats['pkcs8'] = require('./formats/pkcs8');
formats['rfc4253'] = require('./formats/rfc4253');
formats['ssh-private'] = require('./formats/ssh-private');
formats['openssh'] = formats['ssh-private'];
formats['ssh'] = formats['ssh-private'];

function PrivateKey(opts) {
\tassert.object(opts, 'options');
\tKey.call(this, opts);

\tthis._pubCache = undefined;
}
util.inherits(PrivateKey, Key);

PrivateKey.formats = formats;

PrivateKey.prototype.toBuffer = function (format, options) {
\tif (format === undefined)
\t\tformat = 'pkcs1';
\tassert.string(format, 'format');
\tassert.object(formats[format], 'formats[format]');
\tassert.optionalObject(options, 'options');

\treturn (formats[format].write(this, options));
};

PrivateKey.prototype.hash = function (algo) {
\treturn (this.toPublic().hash(algo));
};

PrivateKey.prototype.toPublic = function () {
\tif (this._pubCache)
\t\treturn (this._pubCache);

\tvar algInfo = algs.info[this.type];
\tvar pubParts = [];
\tfor (var i = 0; i < algInfo.parts.length; ++i) {
\t\tvar p = algInfo.parts[i];
\t\tpubParts.push(this.part[p]);
\t}

\tthis._pubCache = new Key({
\t\ttype: this.type,
\t\tsource: this,
\t\tparts: pubParts
\t});
\tif (this.comment)
\t\tthis._pubCache.comment = this.comment;
\treturn (this._pubCache);
};

PrivateKey.prototype.derive = function (newType) {
\tassert.string(newType, 'type');
\tvar priv, pub, pair;

\tif (this.type === 'ed25519' && newType === 'curve25519') {
\t\tif (nacl === undefined)
\t\t\tnacl = require('tweetnacl');

\t\tpriv = this.part.r.data;
\t\tif (priv[0] === 0x00)
\t\t\tpriv = priv.slice(1);
\t\tpriv = priv.slice(0, 32);

\t\tpair = nacl.box.keyPair.fromSecretKey(new Uint8Array(priv));
\t\tpub = new Buffer(pair.publicKey);
\t\tpriv = Buffer.concat([priv, pub]);

\t\treturn (new PrivateKey({
\t\t\ttype: 'curve25519',
\t\t\tparts: [
\t\t\t\t{ name: 'R', data: utils.mpNormalize(pub) },
\t\t\t\t{ name: 'r', data: priv }
\t\t\t]
\t\t}));
\t} else if (this.type === 'curve25519' && newType === 'ed25519') {
\t\tif (nacl === undefined)
\t\t\tnacl = require('tweetnacl');

\t\tpriv = this.part.r.data;
\t\tif (priv[0] === 0x00)
\t\t\tpriv = priv.slice(1);
\t\tpriv = priv.slice(0, 32);

\t\tpair = nacl.sign.keyPair.fromSeed(new Uint8Array(priv));
\t\tpub = new Buffer(pair.publicKey);
\t\tpriv = Buffer.concat([priv, pub]);

\t\treturn (new PrivateKey({
\t\t\ttype: 'ed25519',
\t\t\tparts: [
\t\t\t\t{ name: 'R', data: utils.mpNormalize(pub) },
\t\t\t\t{ name: 'r', data: priv }
\t\t\t]
\t\t}));
\t}
\tthrow (new Error('Key derivation not supported from ' + this.type +
\t    ' to ' + newType));
};

PrivateKey.prototype.createVerify = function (hashAlgo) {
\treturn (this.toPublic().createVerify(hashAlgo));
};

PrivateKey.prototype.createSign = function (hashAlgo) {
\tif (hashAlgo === undefined)
\t\thashAlgo = this.defaultHashAlgorithm();
\tassert.string(hashAlgo, 'hash algorithm');

\t/* ED25519 is not supported by OpenSSL, use a javascript impl. */
\tif (this.type === 'ed25519' && edCompat !== undefined)
\t\treturn (new edCompat.Signer(this, hashAlgo));
\tif (this.type === 'curve25519')
\t\tthrow (new Error('Curve25519 keys are not suitable for ' +
\t\t    'signing or verification'));

\tvar v, nm, err;
\ttry {
\t\tnm = hashAlgo.toUpperCase();
\t\tv = crypto.createSign(nm);
\t} catch (e) {
\t\terr = e;
\t}
\tif (v === undefined || (err instanceof Error &&
\t    err.message.match(/Unknown message digest/))) {
\t\tnm = 'RSA-';
\t\tnm += hashAlgo.toUpperCase();
\t\tv = crypto.createSign(nm);
\t}
\tassert.ok(v, 'failed to create verifier');
\tvar oldSign = v.sign.bind(v);
\tvar key = this.toBuffer('pkcs1');
\tvar type = this.type;
\tvar curve = this.curve;
\tv.sign = function () {
\t\tvar sig = oldSign(key);
\t\tif (typeof (sig) === 'string')
\t\t\tsig = new Buffer(sig, 'binary');
\t\tsig = Signature.parse(sig, type, 'asn1');
\t\tsig.hashAlgorithm = hashAlgo;
\t\tsig.curve = curve;
\t\treturn (sig);
\t};
\treturn (v);
};

PrivateKey.parse = function (data, format, options) {
\tif (typeof (data) !== 'string')
\t\tassert.buffer(data, 'data');
\tif (format === undefined)
\t\tformat = 'auto';
\tassert.string(format, 'format');
\tif (typeof (options) === 'string')
\t\toptions = { filename: options };
\tassert.optionalObject(options, 'options');
\tif (options === undefined)
\t\toptions = {};
\tassert.optionalString(options.filename, 'options.filename');
\tif (options.filename === undefined)
\t\toptions.filename = '(unnamed)';

\tassert.object(formats[format], 'formats[format]');

\ttry {
\t\tvar k = formats[format].read(data, options);
\t\tassert.ok(k instanceof PrivateKey, 'key is not a private key');
\t\tif (!k.comment)
\t\t\tk.comment = options.filename;
\t\treturn (k);
\t} catch (e) {
\t\tif (e.name === 'KeyEncryptedError')
\t\t\tthrow (e);
\t\tthrow (new KeyParseError(options.filename, format, e));
\t}
};

PrivateKey.isPrivateKey = function (obj, ver) {
\treturn (utils.isCompatible(obj, PrivateKey, ver));
};

PrivateKey.generate = function (type, options) {
\tif (options === undefined)
\t\toptions = {};
\tassert.object(options, 'options');

\tswitch (type) {
\tcase 'ecdsa':
\t\tif (options.curve === undefined)
\t\t\toptions.curve = 'nistp256';
\t\tassert.string(options.curve, 'options.curve');
\t\treturn (generateECDSA(options.curve));
\tcase 'ed25519':
\t\treturn (generateED25519());
\tdefault:
\t\tthrow (new Error('Key generation not supported with key ' +
\t\t    'type \"' + type + '\"'));
\t}
};

/*
 * API versions for PrivateKey:
 * [1,0] -- initial ver
 * [1,1] -- added auto, pkcs[18], openssh/ssh-private formats
 * [1,2] -- added defaultHashAlgorithm
 * [1,3] -- added derive, ed, createDH
 * [1,4] -- first tagged version
 */
PrivateKey.prototype._sshpkApiVersion = [1, 4];

PrivateKey._oldVersionDetect = function (obj) {
\tassert.func(obj.toPublic);
\tassert.func(obj.createSign);
\tif (obj.derive)
\t\treturn ([1, 3]);
\tif (obj.defaultHashAlgorithm)
\t\treturn ([1, 2]);
\tif (obj.formats['auto'])
\t\treturn ([1, 1]);
\treturn ([1, 0]);
};
", "node_modules/sshpk/lib/private-key.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sshpk/lib/private-key.js");
    }
}
