<?php

/* node_modules/sshpk/lib/dhe.js */
class __TwigTemplate_2601d765e9f93a67ab7bceecff162dfb2fd77d7170e7cc7aa7217819c8e73e21 extends Twig_Template
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
        $__internal_06fad94907f4f9910ca5a50171a9e9cb86d2f80511ec363ba94d8188ec97ccf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06fad94907f4f9910ca5a50171a9e9cb86d2f80511ec363ba94d8188ec97ccf3->enter($__internal_06fad94907f4f9910ca5a50171a9e9cb86d2f80511ec363ba94d8188ec97ccf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sshpk/lib/dhe.js"));

        // line 1
        echo "// Copyright 2017 Joyent, Inc.

module.exports = {
\tDiffieHellman: DiffieHellman,
\tgenerateECDSA: generateECDSA,
\tgenerateED25519: generateED25519
};

var assert = require('assert-plus');
var crypto = require('crypto');
var algs = require('./algs');
var utils = require('./utils');
var nacl;

var Key = require('./key');
var PrivateKey = require('./private-key');

var CRYPTO_HAVE_ECDH = (crypto.createECDH !== undefined);

var ecdh, ec, jsbn;

function DiffieHellman(key) {
\tutils.assertCompatible(key, Key, [1, 4], 'key');
\tthis._isPriv = PrivateKey.isPrivateKey(key, [1, 3]);
\tthis._algo = key.type;
\tthis._curve = key.curve;
\tthis._key = key;
\tif (key.type === 'dsa') {
\t\tif (!CRYPTO_HAVE_ECDH) {
\t\t\tthrow (new Error('Due to bugs in the node 0.10 ' +
\t\t\t    'crypto API, node 0.12.x or later is required ' +
\t\t\t    'to use DH'));
\t\t}
\t\tthis._dh = crypto.createDiffieHellman(
\t\t    key.part.p.data, undefined,
\t\t    key.part.g.data, undefined);
\t\tthis._p = key.part.p;
\t\tthis._g = key.part.g;
\t\tif (this._isPriv)
\t\t\tthis._dh.setPrivateKey(key.part.x.data);
\t\tthis._dh.setPublicKey(key.part.y.data);

\t} else if (key.type === 'ecdsa') {
\t\tif (!CRYPTO_HAVE_ECDH) {
\t\t\tif (ecdh === undefined)
\t\t\t\tecdh = require('ecc-jsbn');
\t\t\tif (ec === undefined)
\t\t\t\tec = require('ecc-jsbn/lib/ec');
\t\t\tif (jsbn === undefined)
\t\t\t\tjsbn = require('jsbn').BigInteger;

\t\t\tthis._ecParams = new X9ECParameters(this._curve);

\t\t\tif (this._isPriv) {
\t\t\t\tthis._priv = new ECPrivate(
\t\t\t\t    this._ecParams, key.part.d.data);
\t\t\t}
\t\t\treturn;
\t\t}

\t\tvar curve = {
\t\t\t'nistp256': 'prime256v1',
\t\t\t'nistp384': 'secp384r1',
\t\t\t'nistp521': 'secp521r1'
\t\t}[key.curve];
\t\tthis._dh = crypto.createECDH(curve);
\t\tif (typeof (this._dh) !== 'object' ||
\t\t    typeof (this._dh.setPrivateKey) !== 'function') {
\t\t\tCRYPTO_HAVE_ECDH = false;
\t\t\tDiffieHellman.call(this, key);
\t\t\treturn;
\t\t}
\t\tif (this._isPriv)
\t\t\tthis._dh.setPrivateKey(key.part.d.data);
\t\tthis._dh.setPublicKey(key.part.Q.data);

\t} else if (key.type === 'curve25519') {
\t\tif (nacl === undefined)
\t\t\tnacl = require('tweetnacl');

\t\tif (this._isPriv) {
\t\t\tthis._priv = key.part.r.data;
\t\t}

\t} else {
\t\tthrow (new Error('DH not supported for ' + key.type + ' keys'));
\t}
}

DiffieHellman.prototype.getPublicKey = function () {
\tif (this._isPriv)
\t\treturn (this._key.toPublic());
\treturn (this._key);
};

DiffieHellman.prototype.getPrivateKey = function () {
\tif (this._isPriv)
\t\treturn (this._key);
\telse
\t\treturn (undefined);
};
DiffieHellman.prototype.getKey = DiffieHellman.prototype.getPrivateKey;

DiffieHellman.prototype._keyCheck = function (pk, isPub) {
\tassert.object(pk, 'key');
\tif (!isPub)
\t\tutils.assertCompatible(pk, PrivateKey, [1, 3], 'key');
\tutils.assertCompatible(pk, Key, [1, 4], 'key');

\tif (pk.type !== this._algo) {
\t\tthrow (new Error('A ' + pk.type + ' key cannot be used in ' +
\t\t    this._algo + ' Diffie-Hellman'));
\t}

\tif (pk.curve !== this._curve) {
\t\tthrow (new Error('A key from the ' + pk.curve + ' curve ' +
\t\t    'cannot be used with a ' + this._curve +
\t\t    ' Diffie-Hellman'));
\t}

\tif (pk.type === 'dsa') {
\t\tassert.deepEqual(pk.part.p, this._p,
\t\t    'DSA key prime does not match');
\t\tassert.deepEqual(pk.part.g, this._g,
\t\t    'DSA key generator does not match');
\t}
};

DiffieHellman.prototype.setKey = function (pk) {
\tthis._keyCheck(pk);

\tif (pk.type === 'dsa') {
\t\tthis._dh.setPrivateKey(pk.part.x.data);
\t\tthis._dh.setPublicKey(pk.part.y.data);

\t} else if (pk.type === 'ecdsa') {
\t\tif (CRYPTO_HAVE_ECDH) {
\t\t\tthis._dh.setPrivateKey(pk.part.d.data);
\t\t\tthis._dh.setPublicKey(pk.part.Q.data);
\t\t} else {
\t\t\tthis._priv = new ECPrivate(
\t\t\t    this._ecParams, pk.part.d.data);
\t\t}

\t} else if (pk.type === 'curve25519') {
\t\tthis._priv = pk.part.r.data;
\t\tif (this._priv[0] === 0x00)
\t\t\tthis._priv = this._priv.slice(1);
\t\tthis._priv = this._priv.slice(0, 32);
\t}
\tthis._key = pk;
\tthis._isPriv = true;
};
DiffieHellman.prototype.setPrivateKey = DiffieHellman.prototype.setKey;

DiffieHellman.prototype.computeSecret = function (otherpk) {
\tthis._keyCheck(otherpk, true);
\tif (!this._isPriv)
\t\tthrow (new Error('DH exchange has not been initialized with ' +
\t\t    'a private key yet'));

\tvar pub;
\tif (this._algo === 'dsa') {
\t\treturn (this._dh.computeSecret(
\t\t    otherpk.part.y.data));

\t} else if (this._algo === 'ecdsa') {
\t\tif (CRYPTO_HAVE_ECDH) {
\t\t\treturn (this._dh.computeSecret(
\t\t\t    otherpk.part.Q.data));
\t\t} else {
\t\t\tpub = new ECPublic(
\t\t\t    this._ecParams, otherpk.part.Q.data);
\t\t\treturn (this._priv.deriveSharedSecret(pub));
\t\t}

\t} else if (this._algo === 'curve25519') {
\t\tpub = otherpk.part.R.data;
\t\twhile (pub[0] === 0x00 && pub.length > 32)
\t\t\tpub = pub.slice(1);
\t\tassert.strictEqual(pub.length, 32);
\t\tassert.strictEqual(this._priv.length, 64);

\t\tvar priv = this._priv.slice(0, 32);

\t\tvar secret = nacl.box.before(new Uint8Array(pub),
\t\t    new Uint8Array(priv));

\t\treturn (new Buffer(secret));
\t}

\tthrow (new Error('Invalid algorithm: ' + this._algo));
};

DiffieHellman.prototype.generateKey = function () {
\tvar parts = [];
\tvar priv, pub;
\tif (this._algo === 'dsa') {
\t\tthis._dh.generateKeys();

\t\tparts.push({name: 'p', data: this._p.data});
\t\tparts.push({name: 'q', data: this._key.part.q.data});
\t\tparts.push({name: 'g', data: this._g.data});
\t\tparts.push({name: 'y', data: this._dh.getPublicKey()});
\t\tparts.push({name: 'x', data: this._dh.getPrivateKey()});
\t\tthis._key = new PrivateKey({
\t\t\ttype: 'dsa',
\t\t\tparts: parts
\t\t});
\t\tthis._isPriv = true;
\t\treturn (this._key);

\t} else if (this._algo === 'ecdsa') {
\t\tif (CRYPTO_HAVE_ECDH) {
\t\t\tthis._dh.generateKeys();

\t\t\tparts.push({name: 'curve',
\t\t\t    data: new Buffer(this._curve)});
\t\t\tparts.push({name: 'Q', data: this._dh.getPublicKey()});
\t\t\tparts.push({name: 'd', data: this._dh.getPrivateKey()});
\t\t\tthis._key = new PrivateKey({
\t\t\t\ttype: 'ecdsa',
\t\t\t\tcurve: this._curve,
\t\t\t\tparts: parts
\t\t\t});
\t\t\tthis._isPriv = true;
\t\t\treturn (this._key);

\t\t} else {
\t\t\tvar n = this._ecParams.getN();
\t\t\tvar r = new jsbn(crypto.randomBytes(n.bitLength()));
\t\t\tvar n1 = n.subtract(jsbn.ONE);
\t\t\tpriv = r.mod(n1).add(jsbn.ONE);
\t\t\tpub = this._ecParams.getG().multiply(priv);

\t\t\tpriv = new Buffer(priv.toByteArray());
\t\t\tpub = new Buffer(this._ecParams.getCurve().
\t\t\t    encodePointHex(pub), 'hex');

\t\t\tthis._priv = new ECPrivate(this._ecParams, priv);

\t\t\tparts.push({name: 'curve',
\t\t\t    data: new Buffer(this._curve)});
\t\t\tparts.push({name: 'Q', data: pub});
\t\t\tparts.push({name: 'd', data: priv});

\t\t\tthis._key = new PrivateKey({
\t\t\t\ttype: 'ecdsa',
\t\t\t\tcurve: this._curve,
\t\t\t\tparts: parts
\t\t\t});
\t\t\tthis._isPriv = true;
\t\t\treturn (this._key);
\t\t}

\t} else if (this._algo === 'curve25519') {
\t\tvar pair = nacl.box.keyPair();
\t\tpriv = new Buffer(pair.secretKey);
\t\tpub = new Buffer(pair.publicKey);
\t\tpriv = Buffer.concat([priv, pub]);
\t\tassert.strictEqual(priv.length, 64);
\t\tassert.strictEqual(pub.length, 32);

\t\tparts.push({name: 'R', data: pub});
\t\tparts.push({name: 'r', data: priv});
\t\tthis._key = new PrivateKey({
\t\t\ttype: 'curve25519',
\t\t\tparts: parts
\t\t});
\t\tthis._isPriv = true;
\t\treturn (this._key);
\t}

\tthrow (new Error('Invalid algorithm: ' + this._algo));
};
DiffieHellman.prototype.generateKeys = DiffieHellman.prototype.generateKey;

/* These are helpers for using ecc-jsbn (for node 0.10 compatibility). */

function X9ECParameters(name) {
\tvar params = algs.curves[name];
\tassert.object(params);

\tvar p = new jsbn(params.p);
\tvar a = new jsbn(params.a);
\tvar b = new jsbn(params.b);
\tvar n = new jsbn(params.n);
\tvar h = jsbn.ONE;
\tvar curve = new ec.ECCurveFp(p, a, b);
\tvar G = curve.decodePointHex(params.G.toString('hex'));

\tthis.curve = curve;
\tthis.g = G;
\tthis.n = n;
\tthis.h = h;
}
X9ECParameters.prototype.getCurve = function () { return (this.curve); };
X9ECParameters.prototype.getG = function () { return (this.g); };
X9ECParameters.prototype.getN = function () { return (this.n); };
X9ECParameters.prototype.getH = function () { return (this.h); };

function ECPublic(params, buffer) {
\tthis._params = params;
\tif (buffer[0] === 0x00)
\t\tbuffer = buffer.slice(1);
\tthis._pub = params.getCurve().decodePointHex(buffer.toString('hex'));
}

function ECPrivate(params, buffer) {
\tthis._params = params;
\tthis._priv = new jsbn(utils.mpNormalize(buffer));
}
ECPrivate.prototype.deriveSharedSecret = function (pubKey) {
\tassert.ok(pubKey instanceof ECPublic);
\tvar S = pubKey._pub.multiply(this._priv);
\treturn (new Buffer(S.getX().toBigInteger().toByteArray()));
};

function generateED25519() {
\tif (nacl === undefined)
\t\tnacl = require('tweetnacl');

\tvar pair = nacl.sign.keyPair();
\tvar priv = new Buffer(pair.secretKey);
\tvar pub = new Buffer(pair.publicKey);
\tassert.strictEqual(priv.length, 64);
\tassert.strictEqual(pub.length, 32);

\tvar parts = [];
\tparts.push({name: 'R', data: pub});
\tparts.push({name: 'r', data: priv});
\tvar key = new PrivateKey({
\t\ttype: 'ed25519',
\t\tparts: parts
\t});
\treturn (key);
}

/* Generates a new ECDSA private key on a given curve. */
function generateECDSA(curve) {
\tvar parts = [];
\tvar key;

\tif (CRYPTO_HAVE_ECDH) {
\t\t/*
\t\t * Node crypto doesn't expose key generation directly, but the
\t\t * ECDH instances can generate keys. It turns out this just
\t\t * calls into the OpenSSL generic key generator, and we can
\t\t * read its output happily without doing an actual DH. So we
\t\t * use that here.
\t\t */
\t\tvar osCurve = {
\t\t\t'nistp256': 'prime256v1',
\t\t\t'nistp384': 'secp384r1',
\t\t\t'nistp521': 'secp521r1'
\t\t}[curve];

\t\tvar dh = crypto.createECDH(osCurve);
\t\tdh.generateKeys();

\t\tparts.push({name: 'curve',
\t\t    data: new Buffer(curve)});
\t\tparts.push({name: 'Q', data: dh.getPublicKey()});
\t\tparts.push({name: 'd', data: dh.getPrivateKey()});

\t\tkey = new PrivateKey({
\t\t\ttype: 'ecdsa',
\t\t\tcurve: curve,
\t\t\tparts: parts
\t\t});
\t\treturn (key);

\t} else {
\t\tif (ecdh === undefined)
\t\t\tecdh = require('ecc-jsbn');
\t\tif (ec === undefined)
\t\t\tec = require('ecc-jsbn/lib/ec');
\t\tif (jsbn === undefined)
\t\t\tjsbn = require('jsbn').BigInteger;

\t\tvar ecParams = new X9ECParameters(curve);

\t\t/* This algorithm taken from FIPS PUB 186-4 (section B.4.1) */
\t\tvar n = ecParams.getN();
\t\t/*
\t\t * The crypto.randomBytes() function can only give us whole
\t\t * bytes, so taking a nod from X9.62, we round up.
\t\t */
\t\tvar cByteLen = Math.ceil((n.bitLength() + 64) / 8);
\t\tvar c = new jsbn(crypto.randomBytes(cByteLen));

\t\tvar n1 = n.subtract(jsbn.ONE);
\t\tvar priv = c.mod(n1).add(jsbn.ONE);
\t\tvar pub = ecParams.getG().multiply(priv);

\t\tpriv = new Buffer(priv.toByteArray());
\t\tpub = new Buffer(ecParams.getCurve().
\t\t    encodePointHex(pub), 'hex');

\t\tparts.push({name: 'curve', data: new Buffer(curve)});
\t\tparts.push({name: 'Q', data: pub});
\t\tparts.push({name: 'd', data: priv});

\t\tkey = new PrivateKey({
\t\t\ttype: 'ecdsa',
\t\t\tcurve: curve,
\t\t\tparts: parts
\t\t});
\t\treturn (key);
\t}
}
";
        
        $__internal_06fad94907f4f9910ca5a50171a9e9cb86d2f80511ec363ba94d8188ec97ccf3->leave($__internal_06fad94907f4f9910ca5a50171a9e9cb86d2f80511ec363ba94d8188ec97ccf3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sshpk/lib/dhe.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Copyright 2017 Joyent, Inc.

module.exports = {
\tDiffieHellman: DiffieHellman,
\tgenerateECDSA: generateECDSA,
\tgenerateED25519: generateED25519
};

var assert = require('assert-plus');
var crypto = require('crypto');
var algs = require('./algs');
var utils = require('./utils');
var nacl;

var Key = require('./key');
var PrivateKey = require('./private-key');

var CRYPTO_HAVE_ECDH = (crypto.createECDH !== undefined);

var ecdh, ec, jsbn;

function DiffieHellman(key) {
\tutils.assertCompatible(key, Key, [1, 4], 'key');
\tthis._isPriv = PrivateKey.isPrivateKey(key, [1, 3]);
\tthis._algo = key.type;
\tthis._curve = key.curve;
\tthis._key = key;
\tif (key.type === 'dsa') {
\t\tif (!CRYPTO_HAVE_ECDH) {
\t\t\tthrow (new Error('Due to bugs in the node 0.10 ' +
\t\t\t    'crypto API, node 0.12.x or later is required ' +
\t\t\t    'to use DH'));
\t\t}
\t\tthis._dh = crypto.createDiffieHellman(
\t\t    key.part.p.data, undefined,
\t\t    key.part.g.data, undefined);
\t\tthis._p = key.part.p;
\t\tthis._g = key.part.g;
\t\tif (this._isPriv)
\t\t\tthis._dh.setPrivateKey(key.part.x.data);
\t\tthis._dh.setPublicKey(key.part.y.data);

\t} else if (key.type === 'ecdsa') {
\t\tif (!CRYPTO_HAVE_ECDH) {
\t\t\tif (ecdh === undefined)
\t\t\t\tecdh = require('ecc-jsbn');
\t\t\tif (ec === undefined)
\t\t\t\tec = require('ecc-jsbn/lib/ec');
\t\t\tif (jsbn === undefined)
\t\t\t\tjsbn = require('jsbn').BigInteger;

\t\t\tthis._ecParams = new X9ECParameters(this._curve);

\t\t\tif (this._isPriv) {
\t\t\t\tthis._priv = new ECPrivate(
\t\t\t\t    this._ecParams, key.part.d.data);
\t\t\t}
\t\t\treturn;
\t\t}

\t\tvar curve = {
\t\t\t'nistp256': 'prime256v1',
\t\t\t'nistp384': 'secp384r1',
\t\t\t'nistp521': 'secp521r1'
\t\t}[key.curve];
\t\tthis._dh = crypto.createECDH(curve);
\t\tif (typeof (this._dh) !== 'object' ||
\t\t    typeof (this._dh.setPrivateKey) !== 'function') {
\t\t\tCRYPTO_HAVE_ECDH = false;
\t\t\tDiffieHellman.call(this, key);
\t\t\treturn;
\t\t}
\t\tif (this._isPriv)
\t\t\tthis._dh.setPrivateKey(key.part.d.data);
\t\tthis._dh.setPublicKey(key.part.Q.data);

\t} else if (key.type === 'curve25519') {
\t\tif (nacl === undefined)
\t\t\tnacl = require('tweetnacl');

\t\tif (this._isPriv) {
\t\t\tthis._priv = key.part.r.data;
\t\t}

\t} else {
\t\tthrow (new Error('DH not supported for ' + key.type + ' keys'));
\t}
}

DiffieHellman.prototype.getPublicKey = function () {
\tif (this._isPriv)
\t\treturn (this._key.toPublic());
\treturn (this._key);
};

DiffieHellman.prototype.getPrivateKey = function () {
\tif (this._isPriv)
\t\treturn (this._key);
\telse
\t\treturn (undefined);
};
DiffieHellman.prototype.getKey = DiffieHellman.prototype.getPrivateKey;

DiffieHellman.prototype._keyCheck = function (pk, isPub) {
\tassert.object(pk, 'key');
\tif (!isPub)
\t\tutils.assertCompatible(pk, PrivateKey, [1, 3], 'key');
\tutils.assertCompatible(pk, Key, [1, 4], 'key');

\tif (pk.type !== this._algo) {
\t\tthrow (new Error('A ' + pk.type + ' key cannot be used in ' +
\t\t    this._algo + ' Diffie-Hellman'));
\t}

\tif (pk.curve !== this._curve) {
\t\tthrow (new Error('A key from the ' + pk.curve + ' curve ' +
\t\t    'cannot be used with a ' + this._curve +
\t\t    ' Diffie-Hellman'));
\t}

\tif (pk.type === 'dsa') {
\t\tassert.deepEqual(pk.part.p, this._p,
\t\t    'DSA key prime does not match');
\t\tassert.deepEqual(pk.part.g, this._g,
\t\t    'DSA key generator does not match');
\t}
};

DiffieHellman.prototype.setKey = function (pk) {
\tthis._keyCheck(pk);

\tif (pk.type === 'dsa') {
\t\tthis._dh.setPrivateKey(pk.part.x.data);
\t\tthis._dh.setPublicKey(pk.part.y.data);

\t} else if (pk.type === 'ecdsa') {
\t\tif (CRYPTO_HAVE_ECDH) {
\t\t\tthis._dh.setPrivateKey(pk.part.d.data);
\t\t\tthis._dh.setPublicKey(pk.part.Q.data);
\t\t} else {
\t\t\tthis._priv = new ECPrivate(
\t\t\t    this._ecParams, pk.part.d.data);
\t\t}

\t} else if (pk.type === 'curve25519') {
\t\tthis._priv = pk.part.r.data;
\t\tif (this._priv[0] === 0x00)
\t\t\tthis._priv = this._priv.slice(1);
\t\tthis._priv = this._priv.slice(0, 32);
\t}
\tthis._key = pk;
\tthis._isPriv = true;
};
DiffieHellman.prototype.setPrivateKey = DiffieHellman.prototype.setKey;

DiffieHellman.prototype.computeSecret = function (otherpk) {
\tthis._keyCheck(otherpk, true);
\tif (!this._isPriv)
\t\tthrow (new Error('DH exchange has not been initialized with ' +
\t\t    'a private key yet'));

\tvar pub;
\tif (this._algo === 'dsa') {
\t\treturn (this._dh.computeSecret(
\t\t    otherpk.part.y.data));

\t} else if (this._algo === 'ecdsa') {
\t\tif (CRYPTO_HAVE_ECDH) {
\t\t\treturn (this._dh.computeSecret(
\t\t\t    otherpk.part.Q.data));
\t\t} else {
\t\t\tpub = new ECPublic(
\t\t\t    this._ecParams, otherpk.part.Q.data);
\t\t\treturn (this._priv.deriveSharedSecret(pub));
\t\t}

\t} else if (this._algo === 'curve25519') {
\t\tpub = otherpk.part.R.data;
\t\twhile (pub[0] === 0x00 && pub.length > 32)
\t\t\tpub = pub.slice(1);
\t\tassert.strictEqual(pub.length, 32);
\t\tassert.strictEqual(this._priv.length, 64);

\t\tvar priv = this._priv.slice(0, 32);

\t\tvar secret = nacl.box.before(new Uint8Array(pub),
\t\t    new Uint8Array(priv));

\t\treturn (new Buffer(secret));
\t}

\tthrow (new Error('Invalid algorithm: ' + this._algo));
};

DiffieHellman.prototype.generateKey = function () {
\tvar parts = [];
\tvar priv, pub;
\tif (this._algo === 'dsa') {
\t\tthis._dh.generateKeys();

\t\tparts.push({name: 'p', data: this._p.data});
\t\tparts.push({name: 'q', data: this._key.part.q.data});
\t\tparts.push({name: 'g', data: this._g.data});
\t\tparts.push({name: 'y', data: this._dh.getPublicKey()});
\t\tparts.push({name: 'x', data: this._dh.getPrivateKey()});
\t\tthis._key = new PrivateKey({
\t\t\ttype: 'dsa',
\t\t\tparts: parts
\t\t});
\t\tthis._isPriv = true;
\t\treturn (this._key);

\t} else if (this._algo === 'ecdsa') {
\t\tif (CRYPTO_HAVE_ECDH) {
\t\t\tthis._dh.generateKeys();

\t\t\tparts.push({name: 'curve',
\t\t\t    data: new Buffer(this._curve)});
\t\t\tparts.push({name: 'Q', data: this._dh.getPublicKey()});
\t\t\tparts.push({name: 'd', data: this._dh.getPrivateKey()});
\t\t\tthis._key = new PrivateKey({
\t\t\t\ttype: 'ecdsa',
\t\t\t\tcurve: this._curve,
\t\t\t\tparts: parts
\t\t\t});
\t\t\tthis._isPriv = true;
\t\t\treturn (this._key);

\t\t} else {
\t\t\tvar n = this._ecParams.getN();
\t\t\tvar r = new jsbn(crypto.randomBytes(n.bitLength()));
\t\t\tvar n1 = n.subtract(jsbn.ONE);
\t\t\tpriv = r.mod(n1).add(jsbn.ONE);
\t\t\tpub = this._ecParams.getG().multiply(priv);

\t\t\tpriv = new Buffer(priv.toByteArray());
\t\t\tpub = new Buffer(this._ecParams.getCurve().
\t\t\t    encodePointHex(pub), 'hex');

\t\t\tthis._priv = new ECPrivate(this._ecParams, priv);

\t\t\tparts.push({name: 'curve',
\t\t\t    data: new Buffer(this._curve)});
\t\t\tparts.push({name: 'Q', data: pub});
\t\t\tparts.push({name: 'd', data: priv});

\t\t\tthis._key = new PrivateKey({
\t\t\t\ttype: 'ecdsa',
\t\t\t\tcurve: this._curve,
\t\t\t\tparts: parts
\t\t\t});
\t\t\tthis._isPriv = true;
\t\t\treturn (this._key);
\t\t}

\t} else if (this._algo === 'curve25519') {
\t\tvar pair = nacl.box.keyPair();
\t\tpriv = new Buffer(pair.secretKey);
\t\tpub = new Buffer(pair.publicKey);
\t\tpriv = Buffer.concat([priv, pub]);
\t\tassert.strictEqual(priv.length, 64);
\t\tassert.strictEqual(pub.length, 32);

\t\tparts.push({name: 'R', data: pub});
\t\tparts.push({name: 'r', data: priv});
\t\tthis._key = new PrivateKey({
\t\t\ttype: 'curve25519',
\t\t\tparts: parts
\t\t});
\t\tthis._isPriv = true;
\t\treturn (this._key);
\t}

\tthrow (new Error('Invalid algorithm: ' + this._algo));
};
DiffieHellman.prototype.generateKeys = DiffieHellman.prototype.generateKey;

/* These are helpers for using ecc-jsbn (for node 0.10 compatibility). */

function X9ECParameters(name) {
\tvar params = algs.curves[name];
\tassert.object(params);

\tvar p = new jsbn(params.p);
\tvar a = new jsbn(params.a);
\tvar b = new jsbn(params.b);
\tvar n = new jsbn(params.n);
\tvar h = jsbn.ONE;
\tvar curve = new ec.ECCurveFp(p, a, b);
\tvar G = curve.decodePointHex(params.G.toString('hex'));

\tthis.curve = curve;
\tthis.g = G;
\tthis.n = n;
\tthis.h = h;
}
X9ECParameters.prototype.getCurve = function () { return (this.curve); };
X9ECParameters.prototype.getG = function () { return (this.g); };
X9ECParameters.prototype.getN = function () { return (this.n); };
X9ECParameters.prototype.getH = function () { return (this.h); };

function ECPublic(params, buffer) {
\tthis._params = params;
\tif (buffer[0] === 0x00)
\t\tbuffer = buffer.slice(1);
\tthis._pub = params.getCurve().decodePointHex(buffer.toString('hex'));
}

function ECPrivate(params, buffer) {
\tthis._params = params;
\tthis._priv = new jsbn(utils.mpNormalize(buffer));
}
ECPrivate.prototype.deriveSharedSecret = function (pubKey) {
\tassert.ok(pubKey instanceof ECPublic);
\tvar S = pubKey._pub.multiply(this._priv);
\treturn (new Buffer(S.getX().toBigInteger().toByteArray()));
};

function generateED25519() {
\tif (nacl === undefined)
\t\tnacl = require('tweetnacl');

\tvar pair = nacl.sign.keyPair();
\tvar priv = new Buffer(pair.secretKey);
\tvar pub = new Buffer(pair.publicKey);
\tassert.strictEqual(priv.length, 64);
\tassert.strictEqual(pub.length, 32);

\tvar parts = [];
\tparts.push({name: 'R', data: pub});
\tparts.push({name: 'r', data: priv});
\tvar key = new PrivateKey({
\t\ttype: 'ed25519',
\t\tparts: parts
\t});
\treturn (key);
}

/* Generates a new ECDSA private key on a given curve. */
function generateECDSA(curve) {
\tvar parts = [];
\tvar key;

\tif (CRYPTO_HAVE_ECDH) {
\t\t/*
\t\t * Node crypto doesn't expose key generation directly, but the
\t\t * ECDH instances can generate keys. It turns out this just
\t\t * calls into the OpenSSL generic key generator, and we can
\t\t * read its output happily without doing an actual DH. So we
\t\t * use that here.
\t\t */
\t\tvar osCurve = {
\t\t\t'nistp256': 'prime256v1',
\t\t\t'nistp384': 'secp384r1',
\t\t\t'nistp521': 'secp521r1'
\t\t}[curve];

\t\tvar dh = crypto.createECDH(osCurve);
\t\tdh.generateKeys();

\t\tparts.push({name: 'curve',
\t\t    data: new Buffer(curve)});
\t\tparts.push({name: 'Q', data: dh.getPublicKey()});
\t\tparts.push({name: 'd', data: dh.getPrivateKey()});

\t\tkey = new PrivateKey({
\t\t\ttype: 'ecdsa',
\t\t\tcurve: curve,
\t\t\tparts: parts
\t\t});
\t\treturn (key);

\t} else {
\t\tif (ecdh === undefined)
\t\t\tecdh = require('ecc-jsbn');
\t\tif (ec === undefined)
\t\t\tec = require('ecc-jsbn/lib/ec');
\t\tif (jsbn === undefined)
\t\t\tjsbn = require('jsbn').BigInteger;

\t\tvar ecParams = new X9ECParameters(curve);

\t\t/* This algorithm taken from FIPS PUB 186-4 (section B.4.1) */
\t\tvar n = ecParams.getN();
\t\t/*
\t\t * The crypto.randomBytes() function can only give us whole
\t\t * bytes, so taking a nod from X9.62, we round up.
\t\t */
\t\tvar cByteLen = Math.ceil((n.bitLength() + 64) / 8);
\t\tvar c = new jsbn(crypto.randomBytes(cByteLen));

\t\tvar n1 = n.subtract(jsbn.ONE);
\t\tvar priv = c.mod(n1).add(jsbn.ONE);
\t\tvar pub = ecParams.getG().multiply(priv);

\t\tpriv = new Buffer(priv.toByteArray());
\t\tpub = new Buffer(ecParams.getCurve().
\t\t    encodePointHex(pub), 'hex');

\t\tparts.push({name: 'curve', data: new Buffer(curve)});
\t\tparts.push({name: 'Q', data: pub});
\t\tparts.push({name: 'd', data: priv});

\t\tkey = new PrivateKey({
\t\t\ttype: 'ecdsa',
\t\t\tcurve: curve,
\t\t\tparts: parts
\t\t});
\t\treturn (key);
\t}
}
", "node_modules/sshpk/lib/dhe.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sshpk/lib/dhe.js");
    }
}
