<?php

/* node_modules/sshpk/lib/formats/pkcs8.js */
class __TwigTemplate_f9b5955148d823f5e515dffc36b1e0c95debf810aeac940b13a41ddb4a4abbe9 extends Twig_Template
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
        $__internal_9efa20daadf740d912d8479af6ee329781fb68450c95c07733e57a7ad629000f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9efa20daadf740d912d8479af6ee329781fb68450c95c07733e57a7ad629000f->enter($__internal_9efa20daadf740d912d8479af6ee329781fb68450c95c07733e57a7ad629000f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sshpk/lib/formats/pkcs8.js"));

        // line 1
        echo "// Copyright 2015 Joyent, Inc.

module.exports = {
\tread: read,
\treadPkcs8: readPkcs8,
\twrite: write,
\twritePkcs8: writePkcs8,

\treadECDSACurve: readECDSACurve,
\twriteECDSACurve: writeECDSACurve
};

var assert = require('assert-plus');
var asn1 = require('asn1');
var algs = require('../algs');
var utils = require('../utils');
var Key = require('../key');
var PrivateKey = require('../private-key');
var pem = require('./pem');

function read(buf, options) {
\treturn (pem.read(buf, options, 'pkcs8'));
}

function write(key, options) {
\treturn (pem.write(key, options, 'pkcs8'));
}

/* Helper to read in a single mpint */
function readMPInt(der, nm) {
\tassert.strictEqual(der.peek(), asn1.Ber.Integer,
\t    nm + ' is not an Integer');
\treturn (utils.mpNormalize(der.readString(asn1.Ber.Integer, true)));
}

function readPkcs8(alg, type, der) {
\t/* Private keys in pkcs#8 format have a weird extra int */
\tif (der.peek() === asn1.Ber.Integer) {
\t\tassert.strictEqual(type, 'private',
\t\t    'unexpected Integer at start of public key');
\t\tder.readString(asn1.Ber.Integer, true);
\t}

\tder.readSequence();
\tvar next = der.offset + der.length;

\tvar oid = der.readOID();
\tswitch (oid) {
\tcase '1.2.840.113549.1.1.1':
\t\tder._offset = next;
\t\tif (type === 'public')
\t\t\treturn (readPkcs8RSAPublic(der));
\t\telse
\t\t\treturn (readPkcs8RSAPrivate(der));
\tcase '1.2.840.10040.4.1':
\t\tif (type === 'public')
\t\t\treturn (readPkcs8DSAPublic(der));
\t\telse
\t\t\treturn (readPkcs8DSAPrivate(der));
\tcase '1.2.840.10045.2.1':
\t\tif (type === 'public')
\t\t\treturn (readPkcs8ECDSAPublic(der));
\t\telse
\t\t\treturn (readPkcs8ECDSAPrivate(der));
\tdefault:
\t\tthrow (new Error('Unknown key type OID ' + oid));
\t}
}

function readPkcs8RSAPublic(der) {
\t// bit string sequence
\tder.readSequence(asn1.Ber.BitString);
\tder.readByte();
\tder.readSequence();

\t// modulus
\tvar n = readMPInt(der, 'modulus');
\tvar e = readMPInt(der, 'exponent');

\t// now, make the key
\tvar key = {
\t\ttype: 'rsa',
\t\tsource: der.originalInput,
\t\tparts: [
\t\t\t{ name: 'e', data: e },
\t\t\t{ name: 'n', data: n }
\t\t]
\t};

\treturn (new Key(key));
}

function readPkcs8RSAPrivate(der) {
\tder.readSequence(asn1.Ber.OctetString);
\tder.readSequence();

\tvar ver = readMPInt(der, 'version');
\tassert.equal(ver[0], 0x0, 'unknown RSA private key version');

\t// modulus then public exponent
\tvar n = readMPInt(der, 'modulus');
\tvar e = readMPInt(der, 'public exponent');
\tvar d = readMPInt(der, 'private exponent');
\tvar p = readMPInt(der, 'prime1');
\tvar q = readMPInt(der, 'prime2');
\tvar dmodp = readMPInt(der, 'exponent1');
\tvar dmodq = readMPInt(der, 'exponent2');
\tvar iqmp = readMPInt(der, 'iqmp');

\t// now, make the key
\tvar key = {
\t\ttype: 'rsa',
\t\tparts: [
\t\t\t{ name: 'n', data: n },
\t\t\t{ name: 'e', data: e },
\t\t\t{ name: 'd', data: d },
\t\t\t{ name: 'iqmp', data: iqmp },
\t\t\t{ name: 'p', data: p },
\t\t\t{ name: 'q', data: q },
\t\t\t{ name: 'dmodp', data: dmodp },
\t\t\t{ name: 'dmodq', data: dmodq }
\t\t]
\t};

\treturn (new PrivateKey(key));
}

function readPkcs8DSAPublic(der) {
\tder.readSequence();

\tvar p = readMPInt(der, 'p');
\tvar q = readMPInt(der, 'q');
\tvar g = readMPInt(der, 'g');

\t// bit string sequence
\tder.readSequence(asn1.Ber.BitString);
\tder.readByte();

\tvar y = readMPInt(der, 'y');

\t// now, make the key
\tvar key = {
\t\ttype: 'dsa',
\t\tparts: [
\t\t\t{ name: 'p', data: p },
\t\t\t{ name: 'q', data: q },
\t\t\t{ name: 'g', data: g },
\t\t\t{ name: 'y', data: y }
\t\t]
\t};

\treturn (new Key(key));
}

function readPkcs8DSAPrivate(der) {
\tder.readSequence();

\tvar p = readMPInt(der, 'p');
\tvar q = readMPInt(der, 'q');
\tvar g = readMPInt(der, 'g');

\tder.readSequence(asn1.Ber.OctetString);
\tvar x = readMPInt(der, 'x');

\t/* The pkcs#8 format does not include the public key */
\tvar y = utils.calculateDSAPublic(g, p, x);

\tvar key = {
\t\ttype: 'dsa',
\t\tparts: [
\t\t\t{ name: 'p', data: p },
\t\t\t{ name: 'q', data: q },
\t\t\t{ name: 'g', data: g },
\t\t\t{ name: 'y', data: y },
\t\t\t{ name: 'x', data: x }
\t\t]
\t};

\treturn (new PrivateKey(key));
}

function readECDSACurve(der) {
\tvar curveName, curveNames;
\tvar j, c, cd;

\tif (der.peek() === asn1.Ber.OID) {
\t\tvar oid = der.readOID();

\t\tcurveNames = Object.keys(algs.curves);
\t\tfor (j = 0; j < curveNames.length; ++j) {
\t\t\tc = curveNames[j];
\t\t\tcd = algs.curves[c];
\t\t\tif (cd.pkcs8oid === oid) {
\t\t\t\tcurveName = c;
\t\t\t\tbreak;
\t\t\t}
\t\t}

\t} else {
\t\t// ECParameters sequence
\t\tder.readSequence();
\t\tvar version = der.readString(asn1.Ber.Integer, true);
\t\tassert.strictEqual(version[0], 1, 'ECDSA key not version 1');

\t\tvar curve = {};

\t\t// FieldID sequence
\t\tder.readSequence();
\t\tvar fieldTypeOid = der.readOID();
\t\tassert.strictEqual(fieldTypeOid, '1.2.840.10045.1.1',
\t\t    'ECDSA key is not from a prime-field');
\t\tvar p = curve.p = utils.mpNormalize(
\t\t    der.readString(asn1.Ber.Integer, true));
\t\t/*
\t\t * p always starts with a 1 bit, so count the zeros to get its
\t\t * real size.
\t\t */
\t\tcurve.size = p.length * 8 - utils.countZeros(p);

\t\t// Curve sequence
\t\tder.readSequence();
\t\tcurve.a = utils.mpNormalize(
\t\t    der.readString(asn1.Ber.OctetString, true));
\t\tcurve.b = utils.mpNormalize(
\t\t    der.readString(asn1.Ber.OctetString, true));
\t\tif (der.peek() === asn1.Ber.BitString)
\t\t\tcurve.s = der.readString(asn1.Ber.BitString, true);

\t\t// Combined Gx and Gy
\t\tcurve.G = der.readString(asn1.Ber.OctetString, true);
\t\tassert.strictEqual(curve.G[0], 0x4,
\t\t    'uncompressed G is required');

\t\tcurve.n = utils.mpNormalize(
\t\t    der.readString(asn1.Ber.Integer, true));
\t\tcurve.h = utils.mpNormalize(
\t\t    der.readString(asn1.Ber.Integer, true));
\t\tassert.strictEqual(curve.h[0], 0x1, 'a cofactor=1 curve is ' +
\t\t    'required');

\t\tcurveNames = Object.keys(algs.curves);
\t\tvar ks = Object.keys(curve);
\t\tfor (j = 0; j < curveNames.length; ++j) {
\t\t\tc = curveNames[j];
\t\t\tcd = algs.curves[c];
\t\t\tvar equal = true;
\t\t\tfor (var i = 0; i < ks.length; ++i) {
\t\t\t\tvar k = ks[i];
\t\t\t\tif (cd[k] === undefined)
\t\t\t\t\tcontinue;
\t\t\t\tif (typeof (cd[k]) === 'object' &&
\t\t\t\t    cd[k].equals !== undefined) {
\t\t\t\t\tif (!cd[k].equals(curve[k])) {
\t\t\t\t\t\tequal = false;
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t} else if (Buffer.isBuffer(cd[k])) {
\t\t\t\t\tif (cd[k].toString('binary')
\t\t\t\t\t    !== curve[k].toString('binary')) {
\t\t\t\t\t\tequal = false;
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tif (cd[k] !== curve[k]) {
\t\t\t\t\t\tequal = false;
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\tif (equal) {
\t\t\t\tcurveName = c;
\t\t\t\tbreak;
\t\t\t}
\t\t}
\t}
\treturn (curveName);
}

function readPkcs8ECDSAPrivate(der) {
\tvar curveName = readECDSACurve(der);
\tassert.string(curveName, 'a known elliptic curve');

\tder.readSequence(asn1.Ber.OctetString);
\tder.readSequence();

\tvar version = readMPInt(der, 'version');
\tassert.equal(version[0], 1, 'unknown version of ECDSA key');

\tvar d = der.readString(asn1.Ber.OctetString, true);
\tder.readSequence(0xa1);

\tvar Q = der.readString(asn1.Ber.BitString, true);
\tQ = utils.ecNormalize(Q);

\tvar key = {
\t\ttype: 'ecdsa',
\t\tparts: [
\t\t\t{ name: 'curve', data: new Buffer(curveName) },
\t\t\t{ name: 'Q', data: Q },
\t\t\t{ name: 'd', data: d }
\t\t]
\t};

\treturn (new PrivateKey(key));
}

function readPkcs8ECDSAPublic(der) {
\tvar curveName = readECDSACurve(der);
\tassert.string(curveName, 'a known elliptic curve');

\tvar Q = der.readString(asn1.Ber.BitString, true);
\tQ = utils.ecNormalize(Q);

\tvar key = {
\t\ttype: 'ecdsa',
\t\tparts: [
\t\t\t{ name: 'curve', data: new Buffer(curveName) },
\t\t\t{ name: 'Q', data: Q }
\t\t]
\t};

\treturn (new Key(key));
}

function writePkcs8(der, key) {
\tder.startSequence();

\tif (PrivateKey.isPrivateKey(key)) {
\t\tvar sillyInt = new Buffer(1);
\t\tsillyInt[0] = 0x0;
\t\tder.writeBuffer(sillyInt, asn1.Ber.Integer);
\t}

\tder.startSequence();
\tswitch (key.type) {
\tcase 'rsa':
\t\tder.writeOID('1.2.840.113549.1.1.1');
\t\tif (PrivateKey.isPrivateKey(key))
\t\t\twritePkcs8RSAPrivate(key, der);
\t\telse
\t\t\twritePkcs8RSAPublic(key, der);
\t\tbreak;
\tcase 'dsa':
\t\tder.writeOID('1.2.840.10040.4.1');
\t\tif (PrivateKey.isPrivateKey(key))
\t\t\twritePkcs8DSAPrivate(key, der);
\t\telse
\t\t\twritePkcs8DSAPublic(key, der);
\t\tbreak;
\tcase 'ecdsa':
\t\tder.writeOID('1.2.840.10045.2.1');
\t\tif (PrivateKey.isPrivateKey(key))
\t\t\twritePkcs8ECDSAPrivate(key, der);
\t\telse
\t\t\twritePkcs8ECDSAPublic(key, der);
\t\tbreak;
\tdefault:
\t\tthrow (new Error('Unsupported key type: ' + key.type));
\t}

\tder.endSequence();
}

function writePkcs8RSAPrivate(key, der) {
\tder.writeNull();
\tder.endSequence();

\tder.startSequence(asn1.Ber.OctetString);
\tder.startSequence();

\tvar version = new Buffer(1);
\tversion[0] = 0;
\tder.writeBuffer(version, asn1.Ber.Integer);

\tder.writeBuffer(key.part.n.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.e.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.d.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.p.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.q.data, asn1.Ber.Integer);
\tif (!key.part.dmodp || !key.part.dmodq)
\t\tutils.addRSAMissing(key);
\tder.writeBuffer(key.part.dmodp.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.dmodq.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.iqmp.data, asn1.Ber.Integer);

\tder.endSequence();
\tder.endSequence();
}

function writePkcs8RSAPublic(key, der) {
\tder.writeNull();
\tder.endSequence();

\tder.startSequence(asn1.Ber.BitString);
\tder.writeByte(0x00);

\tder.startSequence();
\tder.writeBuffer(key.part.n.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.e.data, asn1.Ber.Integer);
\tder.endSequence();

\tder.endSequence();
}

function writePkcs8DSAPrivate(key, der) {
\tder.startSequence();
\tder.writeBuffer(key.part.p.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.q.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.g.data, asn1.Ber.Integer);
\tder.endSequence();

\tder.endSequence();

\tder.startSequence(asn1.Ber.OctetString);
\tder.writeBuffer(key.part.x.data, asn1.Ber.Integer);
\tder.endSequence();
}

function writePkcs8DSAPublic(key, der) {
\tder.startSequence();
\tder.writeBuffer(key.part.p.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.q.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.g.data, asn1.Ber.Integer);
\tder.endSequence();
\tder.endSequence();

\tder.startSequence(asn1.Ber.BitString);
\tder.writeByte(0x00);
\tder.writeBuffer(key.part.y.data, asn1.Ber.Integer);
\tder.endSequence();
}

function writeECDSACurve(key, der) {
\tvar curve = algs.curves[key.curve];
\tif (curve.pkcs8oid) {
\t\t/* This one has a name in pkcs#8, so just write the oid */
\t\tder.writeOID(curve.pkcs8oid);

\t} else {
\t\t// ECParameters sequence
\t\tder.startSequence();

\t\tvar version = new Buffer(1);
\t\tversion.writeUInt8(1, 0);
\t\tder.writeBuffer(version, asn1.Ber.Integer);

\t\t// FieldID sequence
\t\tder.startSequence();
\t\tder.writeOID('1.2.840.10045.1.1'); // prime-field
\t\tder.writeBuffer(curve.p, asn1.Ber.Integer);
\t\tder.endSequence();

\t\t// Curve sequence
\t\tder.startSequence();
\t\tvar a = curve.p;
\t\tif (a[0] === 0x0)
\t\t\ta = a.slice(1);
\t\tder.writeBuffer(a, asn1.Ber.OctetString);
\t\tder.writeBuffer(curve.b, asn1.Ber.OctetString);
\t\tder.writeBuffer(curve.s, asn1.Ber.BitString);
\t\tder.endSequence();

\t\tder.writeBuffer(curve.G, asn1.Ber.OctetString);
\t\tder.writeBuffer(curve.n, asn1.Ber.Integer);
\t\tvar h = curve.h;
\t\tif (!h) {
\t\t\th = new Buffer(1);
\t\t\th[0] = 1;
\t\t}
\t\tder.writeBuffer(h, asn1.Ber.Integer);

\t\t// ECParameters
\t\tder.endSequence();
\t}
}

function writePkcs8ECDSAPublic(key, der) {
\twriteECDSACurve(key, der);
\tder.endSequence();

\tvar Q = utils.ecNormalize(key.part.Q.data, true);
\tder.writeBuffer(Q, asn1.Ber.BitString);
}

function writePkcs8ECDSAPrivate(key, der) {
\twriteECDSACurve(key, der);
\tder.endSequence();

\tder.startSequence(asn1.Ber.OctetString);
\tder.startSequence();

\tvar version = new Buffer(1);
\tversion[0] = 1;
\tder.writeBuffer(version, asn1.Ber.Integer);

\tder.writeBuffer(key.part.d.data, asn1.Ber.OctetString);

\tder.startSequence(0xa1);
\tvar Q = utils.ecNormalize(key.part.Q.data, true);
\tder.writeBuffer(Q, asn1.Ber.BitString);
\tder.endSequence();

\tder.endSequence();
\tder.endSequence();
}
";
        
        $__internal_9efa20daadf740d912d8479af6ee329781fb68450c95c07733e57a7ad629000f->leave($__internal_9efa20daadf740d912d8479af6ee329781fb68450c95c07733e57a7ad629000f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sshpk/lib/formats/pkcs8.js";
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
\treadPkcs8: readPkcs8,
\twrite: write,
\twritePkcs8: writePkcs8,

\treadECDSACurve: readECDSACurve,
\twriteECDSACurve: writeECDSACurve
};

var assert = require('assert-plus');
var asn1 = require('asn1');
var algs = require('../algs');
var utils = require('../utils');
var Key = require('../key');
var PrivateKey = require('../private-key');
var pem = require('./pem');

function read(buf, options) {
\treturn (pem.read(buf, options, 'pkcs8'));
}

function write(key, options) {
\treturn (pem.write(key, options, 'pkcs8'));
}

/* Helper to read in a single mpint */
function readMPInt(der, nm) {
\tassert.strictEqual(der.peek(), asn1.Ber.Integer,
\t    nm + ' is not an Integer');
\treturn (utils.mpNormalize(der.readString(asn1.Ber.Integer, true)));
}

function readPkcs8(alg, type, der) {
\t/* Private keys in pkcs#8 format have a weird extra int */
\tif (der.peek() === asn1.Ber.Integer) {
\t\tassert.strictEqual(type, 'private',
\t\t    'unexpected Integer at start of public key');
\t\tder.readString(asn1.Ber.Integer, true);
\t}

\tder.readSequence();
\tvar next = der.offset + der.length;

\tvar oid = der.readOID();
\tswitch (oid) {
\tcase '1.2.840.113549.1.1.1':
\t\tder._offset = next;
\t\tif (type === 'public')
\t\t\treturn (readPkcs8RSAPublic(der));
\t\telse
\t\t\treturn (readPkcs8RSAPrivate(der));
\tcase '1.2.840.10040.4.1':
\t\tif (type === 'public')
\t\t\treturn (readPkcs8DSAPublic(der));
\t\telse
\t\t\treturn (readPkcs8DSAPrivate(der));
\tcase '1.2.840.10045.2.1':
\t\tif (type === 'public')
\t\t\treturn (readPkcs8ECDSAPublic(der));
\t\telse
\t\t\treturn (readPkcs8ECDSAPrivate(der));
\tdefault:
\t\tthrow (new Error('Unknown key type OID ' + oid));
\t}
}

function readPkcs8RSAPublic(der) {
\t// bit string sequence
\tder.readSequence(asn1.Ber.BitString);
\tder.readByte();
\tder.readSequence();

\t// modulus
\tvar n = readMPInt(der, 'modulus');
\tvar e = readMPInt(der, 'exponent');

\t// now, make the key
\tvar key = {
\t\ttype: 'rsa',
\t\tsource: der.originalInput,
\t\tparts: [
\t\t\t{ name: 'e', data: e },
\t\t\t{ name: 'n', data: n }
\t\t]
\t};

\treturn (new Key(key));
}

function readPkcs8RSAPrivate(der) {
\tder.readSequence(asn1.Ber.OctetString);
\tder.readSequence();

\tvar ver = readMPInt(der, 'version');
\tassert.equal(ver[0], 0x0, 'unknown RSA private key version');

\t// modulus then public exponent
\tvar n = readMPInt(der, 'modulus');
\tvar e = readMPInt(der, 'public exponent');
\tvar d = readMPInt(der, 'private exponent');
\tvar p = readMPInt(der, 'prime1');
\tvar q = readMPInt(der, 'prime2');
\tvar dmodp = readMPInt(der, 'exponent1');
\tvar dmodq = readMPInt(der, 'exponent2');
\tvar iqmp = readMPInt(der, 'iqmp');

\t// now, make the key
\tvar key = {
\t\ttype: 'rsa',
\t\tparts: [
\t\t\t{ name: 'n', data: n },
\t\t\t{ name: 'e', data: e },
\t\t\t{ name: 'd', data: d },
\t\t\t{ name: 'iqmp', data: iqmp },
\t\t\t{ name: 'p', data: p },
\t\t\t{ name: 'q', data: q },
\t\t\t{ name: 'dmodp', data: dmodp },
\t\t\t{ name: 'dmodq', data: dmodq }
\t\t]
\t};

\treturn (new PrivateKey(key));
}

function readPkcs8DSAPublic(der) {
\tder.readSequence();

\tvar p = readMPInt(der, 'p');
\tvar q = readMPInt(der, 'q');
\tvar g = readMPInt(der, 'g');

\t// bit string sequence
\tder.readSequence(asn1.Ber.BitString);
\tder.readByte();

\tvar y = readMPInt(der, 'y');

\t// now, make the key
\tvar key = {
\t\ttype: 'dsa',
\t\tparts: [
\t\t\t{ name: 'p', data: p },
\t\t\t{ name: 'q', data: q },
\t\t\t{ name: 'g', data: g },
\t\t\t{ name: 'y', data: y }
\t\t]
\t};

\treturn (new Key(key));
}

function readPkcs8DSAPrivate(der) {
\tder.readSequence();

\tvar p = readMPInt(der, 'p');
\tvar q = readMPInt(der, 'q');
\tvar g = readMPInt(der, 'g');

\tder.readSequence(asn1.Ber.OctetString);
\tvar x = readMPInt(der, 'x');

\t/* The pkcs#8 format does not include the public key */
\tvar y = utils.calculateDSAPublic(g, p, x);

\tvar key = {
\t\ttype: 'dsa',
\t\tparts: [
\t\t\t{ name: 'p', data: p },
\t\t\t{ name: 'q', data: q },
\t\t\t{ name: 'g', data: g },
\t\t\t{ name: 'y', data: y },
\t\t\t{ name: 'x', data: x }
\t\t]
\t};

\treturn (new PrivateKey(key));
}

function readECDSACurve(der) {
\tvar curveName, curveNames;
\tvar j, c, cd;

\tif (der.peek() === asn1.Ber.OID) {
\t\tvar oid = der.readOID();

\t\tcurveNames = Object.keys(algs.curves);
\t\tfor (j = 0; j < curveNames.length; ++j) {
\t\t\tc = curveNames[j];
\t\t\tcd = algs.curves[c];
\t\t\tif (cd.pkcs8oid === oid) {
\t\t\t\tcurveName = c;
\t\t\t\tbreak;
\t\t\t}
\t\t}

\t} else {
\t\t// ECParameters sequence
\t\tder.readSequence();
\t\tvar version = der.readString(asn1.Ber.Integer, true);
\t\tassert.strictEqual(version[0], 1, 'ECDSA key not version 1');

\t\tvar curve = {};

\t\t// FieldID sequence
\t\tder.readSequence();
\t\tvar fieldTypeOid = der.readOID();
\t\tassert.strictEqual(fieldTypeOid, '1.2.840.10045.1.1',
\t\t    'ECDSA key is not from a prime-field');
\t\tvar p = curve.p = utils.mpNormalize(
\t\t    der.readString(asn1.Ber.Integer, true));
\t\t/*
\t\t * p always starts with a 1 bit, so count the zeros to get its
\t\t * real size.
\t\t */
\t\tcurve.size = p.length * 8 - utils.countZeros(p);

\t\t// Curve sequence
\t\tder.readSequence();
\t\tcurve.a = utils.mpNormalize(
\t\t    der.readString(asn1.Ber.OctetString, true));
\t\tcurve.b = utils.mpNormalize(
\t\t    der.readString(asn1.Ber.OctetString, true));
\t\tif (der.peek() === asn1.Ber.BitString)
\t\t\tcurve.s = der.readString(asn1.Ber.BitString, true);

\t\t// Combined Gx and Gy
\t\tcurve.G = der.readString(asn1.Ber.OctetString, true);
\t\tassert.strictEqual(curve.G[0], 0x4,
\t\t    'uncompressed G is required');

\t\tcurve.n = utils.mpNormalize(
\t\t    der.readString(asn1.Ber.Integer, true));
\t\tcurve.h = utils.mpNormalize(
\t\t    der.readString(asn1.Ber.Integer, true));
\t\tassert.strictEqual(curve.h[0], 0x1, 'a cofactor=1 curve is ' +
\t\t    'required');

\t\tcurveNames = Object.keys(algs.curves);
\t\tvar ks = Object.keys(curve);
\t\tfor (j = 0; j < curveNames.length; ++j) {
\t\t\tc = curveNames[j];
\t\t\tcd = algs.curves[c];
\t\t\tvar equal = true;
\t\t\tfor (var i = 0; i < ks.length; ++i) {
\t\t\t\tvar k = ks[i];
\t\t\t\tif (cd[k] === undefined)
\t\t\t\t\tcontinue;
\t\t\t\tif (typeof (cd[k]) === 'object' &&
\t\t\t\t    cd[k].equals !== undefined) {
\t\t\t\t\tif (!cd[k].equals(curve[k])) {
\t\t\t\t\t\tequal = false;
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t} else if (Buffer.isBuffer(cd[k])) {
\t\t\t\t\tif (cd[k].toString('binary')
\t\t\t\t\t    !== curve[k].toString('binary')) {
\t\t\t\t\t\tequal = false;
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tif (cd[k] !== curve[k]) {
\t\t\t\t\t\tequal = false;
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\tif (equal) {
\t\t\t\tcurveName = c;
\t\t\t\tbreak;
\t\t\t}
\t\t}
\t}
\treturn (curveName);
}

function readPkcs8ECDSAPrivate(der) {
\tvar curveName = readECDSACurve(der);
\tassert.string(curveName, 'a known elliptic curve');

\tder.readSequence(asn1.Ber.OctetString);
\tder.readSequence();

\tvar version = readMPInt(der, 'version');
\tassert.equal(version[0], 1, 'unknown version of ECDSA key');

\tvar d = der.readString(asn1.Ber.OctetString, true);
\tder.readSequence(0xa1);

\tvar Q = der.readString(asn1.Ber.BitString, true);
\tQ = utils.ecNormalize(Q);

\tvar key = {
\t\ttype: 'ecdsa',
\t\tparts: [
\t\t\t{ name: 'curve', data: new Buffer(curveName) },
\t\t\t{ name: 'Q', data: Q },
\t\t\t{ name: 'd', data: d }
\t\t]
\t};

\treturn (new PrivateKey(key));
}

function readPkcs8ECDSAPublic(der) {
\tvar curveName = readECDSACurve(der);
\tassert.string(curveName, 'a known elliptic curve');

\tvar Q = der.readString(asn1.Ber.BitString, true);
\tQ = utils.ecNormalize(Q);

\tvar key = {
\t\ttype: 'ecdsa',
\t\tparts: [
\t\t\t{ name: 'curve', data: new Buffer(curveName) },
\t\t\t{ name: 'Q', data: Q }
\t\t]
\t};

\treturn (new Key(key));
}

function writePkcs8(der, key) {
\tder.startSequence();

\tif (PrivateKey.isPrivateKey(key)) {
\t\tvar sillyInt = new Buffer(1);
\t\tsillyInt[0] = 0x0;
\t\tder.writeBuffer(sillyInt, asn1.Ber.Integer);
\t}

\tder.startSequence();
\tswitch (key.type) {
\tcase 'rsa':
\t\tder.writeOID('1.2.840.113549.1.1.1');
\t\tif (PrivateKey.isPrivateKey(key))
\t\t\twritePkcs8RSAPrivate(key, der);
\t\telse
\t\t\twritePkcs8RSAPublic(key, der);
\t\tbreak;
\tcase 'dsa':
\t\tder.writeOID('1.2.840.10040.4.1');
\t\tif (PrivateKey.isPrivateKey(key))
\t\t\twritePkcs8DSAPrivate(key, der);
\t\telse
\t\t\twritePkcs8DSAPublic(key, der);
\t\tbreak;
\tcase 'ecdsa':
\t\tder.writeOID('1.2.840.10045.2.1');
\t\tif (PrivateKey.isPrivateKey(key))
\t\t\twritePkcs8ECDSAPrivate(key, der);
\t\telse
\t\t\twritePkcs8ECDSAPublic(key, der);
\t\tbreak;
\tdefault:
\t\tthrow (new Error('Unsupported key type: ' + key.type));
\t}

\tder.endSequence();
}

function writePkcs8RSAPrivate(key, der) {
\tder.writeNull();
\tder.endSequence();

\tder.startSequence(asn1.Ber.OctetString);
\tder.startSequence();

\tvar version = new Buffer(1);
\tversion[0] = 0;
\tder.writeBuffer(version, asn1.Ber.Integer);

\tder.writeBuffer(key.part.n.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.e.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.d.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.p.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.q.data, asn1.Ber.Integer);
\tif (!key.part.dmodp || !key.part.dmodq)
\t\tutils.addRSAMissing(key);
\tder.writeBuffer(key.part.dmodp.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.dmodq.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.iqmp.data, asn1.Ber.Integer);

\tder.endSequence();
\tder.endSequence();
}

function writePkcs8RSAPublic(key, der) {
\tder.writeNull();
\tder.endSequence();

\tder.startSequence(asn1.Ber.BitString);
\tder.writeByte(0x00);

\tder.startSequence();
\tder.writeBuffer(key.part.n.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.e.data, asn1.Ber.Integer);
\tder.endSequence();

\tder.endSequence();
}

function writePkcs8DSAPrivate(key, der) {
\tder.startSequence();
\tder.writeBuffer(key.part.p.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.q.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.g.data, asn1.Ber.Integer);
\tder.endSequence();

\tder.endSequence();

\tder.startSequence(asn1.Ber.OctetString);
\tder.writeBuffer(key.part.x.data, asn1.Ber.Integer);
\tder.endSequence();
}

function writePkcs8DSAPublic(key, der) {
\tder.startSequence();
\tder.writeBuffer(key.part.p.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.q.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.g.data, asn1.Ber.Integer);
\tder.endSequence();
\tder.endSequence();

\tder.startSequence(asn1.Ber.BitString);
\tder.writeByte(0x00);
\tder.writeBuffer(key.part.y.data, asn1.Ber.Integer);
\tder.endSequence();
}

function writeECDSACurve(key, der) {
\tvar curve = algs.curves[key.curve];
\tif (curve.pkcs8oid) {
\t\t/* This one has a name in pkcs#8, so just write the oid */
\t\tder.writeOID(curve.pkcs8oid);

\t} else {
\t\t// ECParameters sequence
\t\tder.startSequence();

\t\tvar version = new Buffer(1);
\t\tversion.writeUInt8(1, 0);
\t\tder.writeBuffer(version, asn1.Ber.Integer);

\t\t// FieldID sequence
\t\tder.startSequence();
\t\tder.writeOID('1.2.840.10045.1.1'); // prime-field
\t\tder.writeBuffer(curve.p, asn1.Ber.Integer);
\t\tder.endSequence();

\t\t// Curve sequence
\t\tder.startSequence();
\t\tvar a = curve.p;
\t\tif (a[0] === 0x0)
\t\t\ta = a.slice(1);
\t\tder.writeBuffer(a, asn1.Ber.OctetString);
\t\tder.writeBuffer(curve.b, asn1.Ber.OctetString);
\t\tder.writeBuffer(curve.s, asn1.Ber.BitString);
\t\tder.endSequence();

\t\tder.writeBuffer(curve.G, asn1.Ber.OctetString);
\t\tder.writeBuffer(curve.n, asn1.Ber.Integer);
\t\tvar h = curve.h;
\t\tif (!h) {
\t\t\th = new Buffer(1);
\t\t\th[0] = 1;
\t\t}
\t\tder.writeBuffer(h, asn1.Ber.Integer);

\t\t// ECParameters
\t\tder.endSequence();
\t}
}

function writePkcs8ECDSAPublic(key, der) {
\twriteECDSACurve(key, der);
\tder.endSequence();

\tvar Q = utils.ecNormalize(key.part.Q.data, true);
\tder.writeBuffer(Q, asn1.Ber.BitString);
}

function writePkcs8ECDSAPrivate(key, der) {
\twriteECDSACurve(key, der);
\tder.endSequence();

\tder.startSequence(asn1.Ber.OctetString);
\tder.startSequence();

\tvar version = new Buffer(1);
\tversion[0] = 1;
\tder.writeBuffer(version, asn1.Ber.Integer);

\tder.writeBuffer(key.part.d.data, asn1.Ber.OctetString);

\tder.startSequence(0xa1);
\tvar Q = utils.ecNormalize(key.part.Q.data, true);
\tder.writeBuffer(Q, asn1.Ber.BitString);
\tder.endSequence();

\tder.endSequence();
\tder.endSequence();
}
", "node_modules/sshpk/lib/formats/pkcs8.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sshpk/lib/formats/pkcs8.js");
    }
}
