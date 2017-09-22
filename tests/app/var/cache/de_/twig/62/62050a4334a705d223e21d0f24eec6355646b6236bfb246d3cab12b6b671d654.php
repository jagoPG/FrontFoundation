<?php

/* node_modules/fsevents/node_modules/sshpk/lib/key.js */
class __TwigTemplate_521db668552c509d1b10e5d59fad9244ddac346ce30fc3b9d047359717cf3c63 extends Twig_Template
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
        $__internal_b2241918e86045ec2eb08246d57ddb236d0ea0f21d458fb31997095a5af9b9f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2241918e86045ec2eb08246d57ddb236d0ea0f21d458fb31997095a5af9b9f4->enter($__internal_b2241918e86045ec2eb08246d57ddb236d0ea0f21d458fb31997095a5af9b9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/sshpk/lib/key.js"));

        // line 1
        echo "// Copyright 2017 Joyent, Inc.

module.exports = Key;

var assert = require('assert-plus');
var algs = require('./algs');
var crypto = require('crypto');
var Fingerprint = require('./fingerprint');
var Signature = require('./signature');
var DiffieHellman = require('./dhe').DiffieHellman;
var errs = require('./errors');
var utils = require('./utils');
var PrivateKey = require('./private-key');
var edCompat;

try {
\tedCompat = require('./ed-compat');
} catch (e) {
\t/* Just continue through, and bail out if we try to use it. */
}

var InvalidAlgorithmError = errs.InvalidAlgorithmError;
var KeyParseError = errs.KeyParseError;

var formats = {};
formats['auto'] = require('./formats/auto');
formats['pem'] = require('./formats/pem');
formats['pkcs1'] = require('./formats/pkcs1');
formats['pkcs8'] = require('./formats/pkcs8');
formats['rfc4253'] = require('./formats/rfc4253');
formats['ssh'] = require('./formats/ssh');
formats['ssh-private'] = require('./formats/ssh-private');
formats['openssh'] = formats['ssh-private'];

function Key(opts) {
\tassert.object(opts, 'options');
\tassert.arrayOfObject(opts.parts, 'options.parts');
\tassert.string(opts.type, 'options.type');
\tassert.optionalString(opts.comment, 'options.comment');

\tvar algInfo = algs.info[opts.type];
\tif (typeof (algInfo) !== 'object')
\t\tthrow (new InvalidAlgorithmError(opts.type));

\tvar partLookup = {};
\tfor (var i = 0; i < opts.parts.length; ++i) {
\t\tvar part = opts.parts[i];
\t\tpartLookup[part.name] = part;
\t}

\tthis.type = opts.type;
\tthis.parts = opts.parts;
\tthis.part = partLookup;
\tthis.comment = undefined;
\tthis.source = opts.source;

\t/* for speeding up hashing/fingerprint operations */
\tthis._rfc4253Cache = opts._rfc4253Cache;
\tthis._hashCache = {};

\tvar sz;
\tthis.curve = undefined;
\tif (this.type === 'ecdsa') {
\t\tvar curve = this.part.curve.data.toString();
\t\tthis.curve = curve;
\t\tsz = algs.curves[curve].size;
\t} else if (this.type === 'ed25519') {
\t\tsz = 256;
\t\tthis.curve = 'curve25519';
\t} else {
\t\tvar szPart = this.part[algInfo.sizePart];
\t\tsz = szPart.data.length;
\t\tsz = sz * 8 - utils.countZeros(szPart.data);
\t}
\tthis.size = sz;
}

Key.formats = formats;

Key.prototype.toBuffer = function (format, options) {
\tif (format === undefined)
\t\tformat = 'ssh';
\tassert.string(format, 'format');
\tassert.object(formats[format], 'formats[format]');
\tassert.optionalObject(options, 'options');

\tif (format === 'rfc4253') {
\t\tif (this._rfc4253Cache === undefined)
\t\t\tthis._rfc4253Cache = formats['rfc4253'].write(this);
\t\treturn (this._rfc4253Cache);
\t}

\treturn (formats[format].write(this, options));
};

Key.prototype.toString = function (format, options) {
\treturn (this.toBuffer(format, options).toString());
};

Key.prototype.hash = function (algo) {
\tassert.string(algo, 'algorithm');
\talgo = algo.toLowerCase();
\tif (algs.hashAlgs[algo] === undefined)
\t\tthrow (new InvalidAlgorithmError(algo));

\tif (this._hashCache[algo])
\t\treturn (this._hashCache[algo]);

\tvar hash = crypto.createHash(algo).
\t    update(this.toBuffer('rfc4253')).digest();
\tthis._hashCache[algo] = hash;
\treturn (hash);
};

Key.prototype.fingerprint = function (algo) {
\tif (algo === undefined)
\t\talgo = 'sha256';
\tassert.string(algo, 'algorithm');
\tvar opts = {
\t\ttype: 'key',
\t\thash: this.hash(algo),
\t\talgorithm: algo
\t};
\treturn (new Fingerprint(opts));
};

Key.prototype.defaultHashAlgorithm = function () {
\tvar hashAlgo = 'sha1';
\tif (this.type === 'rsa')
\t\thashAlgo = 'sha256';
\tif (this.type === 'dsa' && this.size > 1024)
\t\thashAlgo = 'sha256';
\tif (this.type === 'ed25519')
\t\thashAlgo = 'sha512';
\tif (this.type === 'ecdsa') {
\t\tif (this.size <= 256)
\t\t\thashAlgo = 'sha256';
\t\telse if (this.size <= 384)
\t\t\thashAlgo = 'sha384';
\t\telse
\t\t\thashAlgo = 'sha512';
\t}
\treturn (hashAlgo);
};

Key.prototype.createVerify = function (hashAlgo) {
\tif (hashAlgo === undefined)
\t\thashAlgo = this.defaultHashAlgorithm();
\tassert.string(hashAlgo, 'hash algorithm');

\t/* ED25519 is not supported by OpenSSL, use a javascript impl. */
\tif (this.type === 'ed25519' && edCompat !== undefined)
\t\treturn (new edCompat.Verifier(this, hashAlgo));
\tif (this.type === 'curve25519')
\t\tthrow (new Error('Curve25519 keys are not suitable for ' +
\t\t    'signing or verification'));

\tvar v, nm, err;
\ttry {
\t\tnm = hashAlgo.toUpperCase();
\t\tv = crypto.createVerify(nm);
\t} catch (e) {
\t\terr = e;
\t}
\tif (v === undefined || (err instanceof Error &&
\t    err.message.match(/Unknown message digest/))) {
\t\tnm = 'RSA-';
\t\tnm += hashAlgo.toUpperCase();
\t\tv = crypto.createVerify(nm);
\t}
\tassert.ok(v, 'failed to create verifier');
\tvar oldVerify = v.verify.bind(v);
\tvar key = this.toBuffer('pkcs8');
\tvar curve = this.curve;
\tvar self = this;
\tv.verify = function (signature, fmt) {
\t\tif (Signature.isSignature(signature, [2, 0])) {
\t\t\tif (signature.type !== self.type)
\t\t\t\treturn (false);
\t\t\tif (signature.hashAlgorithm &&
\t\t\t    signature.hashAlgorithm !== hashAlgo)
\t\t\t\treturn (false);
\t\t\tif (signature.curve && self.type === 'ecdsa' &&
\t\t\t    signature.curve !== curve)
\t\t\t\treturn (false);
\t\t\treturn (oldVerify(key, signature.toBuffer('asn1')));

\t\t} else if (typeof (signature) === 'string' ||
\t\t    Buffer.isBuffer(signature)) {
\t\t\treturn (oldVerify(key, signature, fmt));

\t\t/*
\t\t * Avoid doing this on valid arguments, walking the prototype
\t\t * chain can be quite slow.
\t\t */
\t\t} else if (Signature.isSignature(signature, [1, 0])) {
\t\t\tthrow (new Error('signature was created by too old ' +
\t\t\t    'a version of sshpk and cannot be verified'));

\t\t} else {
\t\t\tthrow (new TypeError('signature must be a string, ' +
\t\t\t    'Buffer, or Signature object'));
\t\t}
\t};
\treturn (v);
};

Key.prototype.createDiffieHellman = function () {
\tif (this.type === 'rsa')
\t\tthrow (new Error('RSA keys do not support Diffie-Hellman'));

\treturn (new DiffieHellman(this));
};
Key.prototype.createDH = Key.prototype.createDiffieHellman;

Key.parse = function (data, format, options) {
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
\t\tif (k instanceof PrivateKey)
\t\t\tk = k.toPublic();
\t\tif (!k.comment)
\t\t\tk.comment = options.filename;
\t\treturn (k);
\t} catch (e) {
\t\tif (e.name === 'KeyEncryptedError')
\t\t\tthrow (e);
\t\tthrow (new KeyParseError(options.filename, format, e));
\t}
};

Key.isKey = function (obj, ver) {
\treturn (utils.isCompatible(obj, Key, ver));
};

/*
 * API versions for Key:
 * [1,0] -- initial ver, may take Signature for createVerify or may not
 * [1,1] -- added pkcs1, pkcs8 formats
 * [1,2] -- added auto, ssh-private, openssh formats
 * [1,3] -- added defaultHashAlgorithm
 * [1,4] -- added ed support, createDH
 * [1,5] -- first explicitly tagged version
 */
Key.prototype._sshpkApiVersion = [1, 5];

Key._oldVersionDetect = function (obj) {
\tassert.func(obj.toBuffer);
\tassert.func(obj.fingerprint);
\tif (obj.createDH)
\t\treturn ([1, 4]);
\tif (obj.defaultHashAlgorithm)
\t\treturn ([1, 3]);
\tif (obj.formats['auto'])
\t\treturn ([1, 2]);
\tif (obj.formats['pkcs1'])
\t\treturn ([1, 1]);
\treturn ([1, 0]);
};
";
        
        $__internal_b2241918e86045ec2eb08246d57ddb236d0ea0f21d458fb31997095a5af9b9f4->leave($__internal_b2241918e86045ec2eb08246d57ddb236d0ea0f21d458fb31997095a5af9b9f4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/sshpk/lib/key.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Copyright 2017 Joyent, Inc.

module.exports = Key;

var assert = require('assert-plus');
var algs = require('./algs');
var crypto = require('crypto');
var Fingerprint = require('./fingerprint');
var Signature = require('./signature');
var DiffieHellman = require('./dhe').DiffieHellman;
var errs = require('./errors');
var utils = require('./utils');
var PrivateKey = require('./private-key');
var edCompat;

try {
\tedCompat = require('./ed-compat');
} catch (e) {
\t/* Just continue through, and bail out if we try to use it. */
}

var InvalidAlgorithmError = errs.InvalidAlgorithmError;
var KeyParseError = errs.KeyParseError;

var formats = {};
formats['auto'] = require('./formats/auto');
formats['pem'] = require('./formats/pem');
formats['pkcs1'] = require('./formats/pkcs1');
formats['pkcs8'] = require('./formats/pkcs8');
formats['rfc4253'] = require('./formats/rfc4253');
formats['ssh'] = require('./formats/ssh');
formats['ssh-private'] = require('./formats/ssh-private');
formats['openssh'] = formats['ssh-private'];

function Key(opts) {
\tassert.object(opts, 'options');
\tassert.arrayOfObject(opts.parts, 'options.parts');
\tassert.string(opts.type, 'options.type');
\tassert.optionalString(opts.comment, 'options.comment');

\tvar algInfo = algs.info[opts.type];
\tif (typeof (algInfo) !== 'object')
\t\tthrow (new InvalidAlgorithmError(opts.type));

\tvar partLookup = {};
\tfor (var i = 0; i < opts.parts.length; ++i) {
\t\tvar part = opts.parts[i];
\t\tpartLookup[part.name] = part;
\t}

\tthis.type = opts.type;
\tthis.parts = opts.parts;
\tthis.part = partLookup;
\tthis.comment = undefined;
\tthis.source = opts.source;

\t/* for speeding up hashing/fingerprint operations */
\tthis._rfc4253Cache = opts._rfc4253Cache;
\tthis._hashCache = {};

\tvar sz;
\tthis.curve = undefined;
\tif (this.type === 'ecdsa') {
\t\tvar curve = this.part.curve.data.toString();
\t\tthis.curve = curve;
\t\tsz = algs.curves[curve].size;
\t} else if (this.type === 'ed25519') {
\t\tsz = 256;
\t\tthis.curve = 'curve25519';
\t} else {
\t\tvar szPart = this.part[algInfo.sizePart];
\t\tsz = szPart.data.length;
\t\tsz = sz * 8 - utils.countZeros(szPart.data);
\t}
\tthis.size = sz;
}

Key.formats = formats;

Key.prototype.toBuffer = function (format, options) {
\tif (format === undefined)
\t\tformat = 'ssh';
\tassert.string(format, 'format');
\tassert.object(formats[format], 'formats[format]');
\tassert.optionalObject(options, 'options');

\tif (format === 'rfc4253') {
\t\tif (this._rfc4253Cache === undefined)
\t\t\tthis._rfc4253Cache = formats['rfc4253'].write(this);
\t\treturn (this._rfc4253Cache);
\t}

\treturn (formats[format].write(this, options));
};

Key.prototype.toString = function (format, options) {
\treturn (this.toBuffer(format, options).toString());
};

Key.prototype.hash = function (algo) {
\tassert.string(algo, 'algorithm');
\talgo = algo.toLowerCase();
\tif (algs.hashAlgs[algo] === undefined)
\t\tthrow (new InvalidAlgorithmError(algo));

\tif (this._hashCache[algo])
\t\treturn (this._hashCache[algo]);

\tvar hash = crypto.createHash(algo).
\t    update(this.toBuffer('rfc4253')).digest();
\tthis._hashCache[algo] = hash;
\treturn (hash);
};

Key.prototype.fingerprint = function (algo) {
\tif (algo === undefined)
\t\talgo = 'sha256';
\tassert.string(algo, 'algorithm');
\tvar opts = {
\t\ttype: 'key',
\t\thash: this.hash(algo),
\t\talgorithm: algo
\t};
\treturn (new Fingerprint(opts));
};

Key.prototype.defaultHashAlgorithm = function () {
\tvar hashAlgo = 'sha1';
\tif (this.type === 'rsa')
\t\thashAlgo = 'sha256';
\tif (this.type === 'dsa' && this.size > 1024)
\t\thashAlgo = 'sha256';
\tif (this.type === 'ed25519')
\t\thashAlgo = 'sha512';
\tif (this.type === 'ecdsa') {
\t\tif (this.size <= 256)
\t\t\thashAlgo = 'sha256';
\t\telse if (this.size <= 384)
\t\t\thashAlgo = 'sha384';
\t\telse
\t\t\thashAlgo = 'sha512';
\t}
\treturn (hashAlgo);
};

Key.prototype.createVerify = function (hashAlgo) {
\tif (hashAlgo === undefined)
\t\thashAlgo = this.defaultHashAlgorithm();
\tassert.string(hashAlgo, 'hash algorithm');

\t/* ED25519 is not supported by OpenSSL, use a javascript impl. */
\tif (this.type === 'ed25519' && edCompat !== undefined)
\t\treturn (new edCompat.Verifier(this, hashAlgo));
\tif (this.type === 'curve25519')
\t\tthrow (new Error('Curve25519 keys are not suitable for ' +
\t\t    'signing or verification'));

\tvar v, nm, err;
\ttry {
\t\tnm = hashAlgo.toUpperCase();
\t\tv = crypto.createVerify(nm);
\t} catch (e) {
\t\terr = e;
\t}
\tif (v === undefined || (err instanceof Error &&
\t    err.message.match(/Unknown message digest/))) {
\t\tnm = 'RSA-';
\t\tnm += hashAlgo.toUpperCase();
\t\tv = crypto.createVerify(nm);
\t}
\tassert.ok(v, 'failed to create verifier');
\tvar oldVerify = v.verify.bind(v);
\tvar key = this.toBuffer('pkcs8');
\tvar curve = this.curve;
\tvar self = this;
\tv.verify = function (signature, fmt) {
\t\tif (Signature.isSignature(signature, [2, 0])) {
\t\t\tif (signature.type !== self.type)
\t\t\t\treturn (false);
\t\t\tif (signature.hashAlgorithm &&
\t\t\t    signature.hashAlgorithm !== hashAlgo)
\t\t\t\treturn (false);
\t\t\tif (signature.curve && self.type === 'ecdsa' &&
\t\t\t    signature.curve !== curve)
\t\t\t\treturn (false);
\t\t\treturn (oldVerify(key, signature.toBuffer('asn1')));

\t\t} else if (typeof (signature) === 'string' ||
\t\t    Buffer.isBuffer(signature)) {
\t\t\treturn (oldVerify(key, signature, fmt));

\t\t/*
\t\t * Avoid doing this on valid arguments, walking the prototype
\t\t * chain can be quite slow.
\t\t */
\t\t} else if (Signature.isSignature(signature, [1, 0])) {
\t\t\tthrow (new Error('signature was created by too old ' +
\t\t\t    'a version of sshpk and cannot be verified'));

\t\t} else {
\t\t\tthrow (new TypeError('signature must be a string, ' +
\t\t\t    'Buffer, or Signature object'));
\t\t}
\t};
\treturn (v);
};

Key.prototype.createDiffieHellman = function () {
\tif (this.type === 'rsa')
\t\tthrow (new Error('RSA keys do not support Diffie-Hellman'));

\treturn (new DiffieHellman(this));
};
Key.prototype.createDH = Key.prototype.createDiffieHellman;

Key.parse = function (data, format, options) {
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
\t\tif (k instanceof PrivateKey)
\t\t\tk = k.toPublic();
\t\tif (!k.comment)
\t\t\tk.comment = options.filename;
\t\treturn (k);
\t} catch (e) {
\t\tif (e.name === 'KeyEncryptedError')
\t\t\tthrow (e);
\t\tthrow (new KeyParseError(options.filename, format, e));
\t}
};

Key.isKey = function (obj, ver) {
\treturn (utils.isCompatible(obj, Key, ver));
};

/*
 * API versions for Key:
 * [1,0] -- initial ver, may take Signature for createVerify or may not
 * [1,1] -- added pkcs1, pkcs8 formats
 * [1,2] -- added auto, ssh-private, openssh formats
 * [1,3] -- added defaultHashAlgorithm
 * [1,4] -- added ed support, createDH
 * [1,5] -- first explicitly tagged version
 */
Key.prototype._sshpkApiVersion = [1, 5];

Key._oldVersionDetect = function (obj) {
\tassert.func(obj.toBuffer);
\tassert.func(obj.fingerprint);
\tif (obj.createDH)
\t\treturn ([1, 4]);
\tif (obj.defaultHashAlgorithm)
\t\treturn ([1, 3]);
\tif (obj.formats['auto'])
\t\treturn ([1, 2]);
\tif (obj.formats['pkcs1'])
\t\treturn ([1, 1]);
\treturn ([1, 0]);
};
", "node_modules/fsevents/node_modules/sshpk/lib/key.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/sshpk/lib/key.js");
    }
}
