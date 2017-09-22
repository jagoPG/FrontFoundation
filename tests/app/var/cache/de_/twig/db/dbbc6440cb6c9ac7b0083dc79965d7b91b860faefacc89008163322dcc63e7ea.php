<?php

/* node_modules/sshpk/lib/formats/pkcs1.js */
class __TwigTemplate_8b8901dad358531824d5eb93ad2d9d7de6b51fd82db8467ac5aaada0e8c2dc76 extends Twig_Template
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
        $__internal_5a7dab69fc8eb96a09bb988a28adf3b28b49a82a02ff0d2f7d8ddf964ed58b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a7dab69fc8eb96a09bb988a28adf3b28b49a82a02ff0d2f7d8ddf964ed58b11->enter($__internal_5a7dab69fc8eb96a09bb988a28adf3b28b49a82a02ff0d2f7d8ddf964ed58b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sshpk/lib/formats/pkcs1.js"));

        // line 1
        echo "// Copyright 2015 Joyent, Inc.

module.exports = {
\tread: read,
\treadPkcs1: readPkcs1,
\twrite: write,
\twritePkcs1: writePkcs1
};

var assert = require('assert-plus');
var asn1 = require('asn1');
var algs = require('../algs');
var utils = require('../utils');

var Key = require('../key');
var PrivateKey = require('../private-key');
var pem = require('./pem');

var pkcs8 = require('./pkcs8');
var readECDSACurve = pkcs8.readECDSACurve;

function read(buf, options) {
\treturn (pem.read(buf, options, 'pkcs1'));
}

function write(key, options) {
\treturn (pem.write(key, options, 'pkcs1'));
}

/* Helper to read in a single mpint */
function readMPInt(der, nm) {
\tassert.strictEqual(der.peek(), asn1.Ber.Integer,
\t    nm + ' is not an Integer');
\treturn (utils.mpNormalize(der.readString(asn1.Ber.Integer, true)));
}

function readPkcs1(alg, type, der) {
\tswitch (alg) {
\tcase 'RSA':
\t\tif (type === 'public')
\t\t\treturn (readPkcs1RSAPublic(der));
\t\telse if (type === 'private')
\t\t\treturn (readPkcs1RSAPrivate(der));
\t\tthrow (new Error('Unknown key type: ' + type));
\tcase 'DSA':
\t\tif (type === 'public')
\t\t\treturn (readPkcs1DSAPublic(der));
\t\telse if (type === 'private')
\t\t\treturn (readPkcs1DSAPrivate(der));
\t\tthrow (new Error('Unknown key type: ' + type));
\tcase 'EC':
\tcase 'ECDSA':
\t\tif (type === 'private')
\t\t\treturn (readPkcs1ECDSAPrivate(der));
\t\telse if (type === 'public')
\t\t\treturn (readPkcs1ECDSAPublic(der));
\t\tthrow (new Error('Unknown key type: ' + type));
\tdefault:
\t\tthrow (new Error('Unknown key algo: ' + alg));
\t}
}

function readPkcs1RSAPublic(der) {
\t// modulus and exponent
\tvar n = readMPInt(der, 'modulus');
\tvar e = readMPInt(der, 'exponent');

\t// now, make the key
\tvar key = {
\t\ttype: 'rsa',
\t\tparts: [
\t\t\t{ name: 'e', data: e },
\t\t\t{ name: 'n', data: n }
\t\t]
\t};

\treturn (new Key(key));
}

function readPkcs1RSAPrivate(der) {
\tvar version = readMPInt(der, 'version');
\tassert.strictEqual(version[0], 0);

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

function readPkcs1DSAPrivate(der) {
\tvar version = readMPInt(der, 'version');
\tassert.strictEqual(version.readUInt8(0), 0);

\tvar p = readMPInt(der, 'p');
\tvar q = readMPInt(der, 'q');
\tvar g = readMPInt(der, 'g');
\tvar y = readMPInt(der, 'y');
\tvar x = readMPInt(der, 'x');

\t// now, make the key
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

function readPkcs1DSAPublic(der) {
\tvar y = readMPInt(der, 'y');
\tvar p = readMPInt(der, 'p');
\tvar q = readMPInt(der, 'q');
\tvar g = readMPInt(der, 'g');

\tvar key = {
\t\ttype: 'dsa',
\t\tparts: [
\t\t\t{ name: 'y', data: y },
\t\t\t{ name: 'p', data: p },
\t\t\t{ name: 'q', data: q },
\t\t\t{ name: 'g', data: g }
\t\t]
\t};

\treturn (new Key(key));
}

function readPkcs1ECDSAPublic(der) {
\tder.readSequence();

\tvar oid = der.readOID();
\tassert.strictEqual(oid, '1.2.840.10045.2.1', 'must be ecPublicKey');

\tvar curveOid = der.readOID();

\tvar curve;
\tvar curves = Object.keys(algs.curves);
\tfor (var j = 0; j < curves.length; ++j) {
\t\tvar c = curves[j];
\t\tvar cd = algs.curves[c];
\t\tif (cd.pkcs8oid === curveOid) {
\t\t\tcurve = c;
\t\t\tbreak;
\t\t}
\t}
\tassert.string(curve, 'a known ECDSA named curve');

\tvar Q = der.readString(asn1.Ber.BitString, true);
\tQ = utils.ecNormalize(Q);

\tvar key = {
\t\ttype: 'ecdsa',
\t\tparts: [
\t\t\t{ name: 'curve', data: new Buffer(curve) },
\t\t\t{ name: 'Q', data: Q }
\t\t]
\t};

\treturn (new Key(key));
}

function readPkcs1ECDSAPrivate(der) {
\tvar version = readMPInt(der, 'version');
\tassert.strictEqual(version.readUInt8(0), 1);

\t// private key
\tvar d = der.readString(asn1.Ber.OctetString, true);

\tder.readSequence(0xa0);
\tvar curve = readECDSACurve(der);
\tassert.string(curve, 'a known elliptic curve');

\tder.readSequence(0xa1);
\tvar Q = der.readString(asn1.Ber.BitString, true);
\tQ = utils.ecNormalize(Q);

\tvar key = {
\t\ttype: 'ecdsa',
\t\tparts: [
\t\t\t{ name: 'curve', data: new Buffer(curve) },
\t\t\t{ name: 'Q', data: Q },
\t\t\t{ name: 'd', data: d }
\t\t]
\t};

\treturn (new PrivateKey(key));
}

function writePkcs1(der, key) {
\tder.startSequence();

\tswitch (key.type) {
\tcase 'rsa':
\t\tif (PrivateKey.isPrivateKey(key))
\t\t\twritePkcs1RSAPrivate(der, key);
\t\telse
\t\t\twritePkcs1RSAPublic(der, key);
\t\tbreak;
\tcase 'dsa':
\t\tif (PrivateKey.isPrivateKey(key))
\t\t\twritePkcs1DSAPrivate(der, key);
\t\telse
\t\t\twritePkcs1DSAPublic(der, key);
\t\tbreak;
\tcase 'ecdsa':
\t\tif (PrivateKey.isPrivateKey(key))
\t\t\twritePkcs1ECDSAPrivate(der, key);
\t\telse
\t\t\twritePkcs1ECDSAPublic(der, key);
\t\tbreak;
\tdefault:
\t\tthrow (new Error('Unknown key algo: ' + key.type));
\t}

\tder.endSequence();
}

function writePkcs1RSAPublic(der, key) {
\tder.writeBuffer(key.part.n.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.e.data, asn1.Ber.Integer);
}

function writePkcs1RSAPrivate(der, key) {
\tvar ver = new Buffer(1);
\tver[0] = 0;
\tder.writeBuffer(ver, asn1.Ber.Integer);

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
}

function writePkcs1DSAPrivate(der, key) {
\tvar ver = new Buffer(1);
\tver[0] = 0;
\tder.writeBuffer(ver, asn1.Ber.Integer);

\tder.writeBuffer(key.part.p.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.q.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.g.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.y.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.x.data, asn1.Ber.Integer);
}

function writePkcs1DSAPublic(der, key) {
\tder.writeBuffer(key.part.y.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.p.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.q.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.g.data, asn1.Ber.Integer);
}

function writePkcs1ECDSAPublic(der, key) {
\tder.startSequence();

\tder.writeOID('1.2.840.10045.2.1'); /* ecPublicKey */
\tvar curve = key.part.curve.data.toString();
\tvar curveOid = algs.curves[curve].pkcs8oid;
\tassert.string(curveOid, 'a known ECDSA named curve');
\tder.writeOID(curveOid);

\tder.endSequence();

\tvar Q = utils.ecNormalize(key.part.Q.data, true);
\tder.writeBuffer(Q, asn1.Ber.BitString);
}

function writePkcs1ECDSAPrivate(der, key) {
\tvar ver = new Buffer(1);
\tver[0] = 1;
\tder.writeBuffer(ver, asn1.Ber.Integer);

\tder.writeBuffer(key.part.d.data, asn1.Ber.OctetString);

\tder.startSequence(0xa0);
\tvar curve = key.part.curve.data.toString();
\tvar curveOid = algs.curves[curve].pkcs8oid;
\tassert.string(curveOid, 'a known ECDSA named curve');
\tder.writeOID(curveOid);
\tder.endSequence();

\tder.startSequence(0xa1);
\tvar Q = utils.ecNormalize(key.part.Q.data, true);
\tder.writeBuffer(Q, asn1.Ber.BitString);
\tder.endSequence();
}
";
        
        $__internal_5a7dab69fc8eb96a09bb988a28adf3b28b49a82a02ff0d2f7d8ddf964ed58b11->leave($__internal_5a7dab69fc8eb96a09bb988a28adf3b28b49a82a02ff0d2f7d8ddf964ed58b11_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sshpk/lib/formats/pkcs1.js";
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
\treadPkcs1: readPkcs1,
\twrite: write,
\twritePkcs1: writePkcs1
};

var assert = require('assert-plus');
var asn1 = require('asn1');
var algs = require('../algs');
var utils = require('../utils');

var Key = require('../key');
var PrivateKey = require('../private-key');
var pem = require('./pem');

var pkcs8 = require('./pkcs8');
var readECDSACurve = pkcs8.readECDSACurve;

function read(buf, options) {
\treturn (pem.read(buf, options, 'pkcs1'));
}

function write(key, options) {
\treturn (pem.write(key, options, 'pkcs1'));
}

/* Helper to read in a single mpint */
function readMPInt(der, nm) {
\tassert.strictEqual(der.peek(), asn1.Ber.Integer,
\t    nm + ' is not an Integer');
\treturn (utils.mpNormalize(der.readString(asn1.Ber.Integer, true)));
}

function readPkcs1(alg, type, der) {
\tswitch (alg) {
\tcase 'RSA':
\t\tif (type === 'public')
\t\t\treturn (readPkcs1RSAPublic(der));
\t\telse if (type === 'private')
\t\t\treturn (readPkcs1RSAPrivate(der));
\t\tthrow (new Error('Unknown key type: ' + type));
\tcase 'DSA':
\t\tif (type === 'public')
\t\t\treturn (readPkcs1DSAPublic(der));
\t\telse if (type === 'private')
\t\t\treturn (readPkcs1DSAPrivate(der));
\t\tthrow (new Error('Unknown key type: ' + type));
\tcase 'EC':
\tcase 'ECDSA':
\t\tif (type === 'private')
\t\t\treturn (readPkcs1ECDSAPrivate(der));
\t\telse if (type === 'public')
\t\t\treturn (readPkcs1ECDSAPublic(der));
\t\tthrow (new Error('Unknown key type: ' + type));
\tdefault:
\t\tthrow (new Error('Unknown key algo: ' + alg));
\t}
}

function readPkcs1RSAPublic(der) {
\t// modulus and exponent
\tvar n = readMPInt(der, 'modulus');
\tvar e = readMPInt(der, 'exponent');

\t// now, make the key
\tvar key = {
\t\ttype: 'rsa',
\t\tparts: [
\t\t\t{ name: 'e', data: e },
\t\t\t{ name: 'n', data: n }
\t\t]
\t};

\treturn (new Key(key));
}

function readPkcs1RSAPrivate(der) {
\tvar version = readMPInt(der, 'version');
\tassert.strictEqual(version[0], 0);

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

function readPkcs1DSAPrivate(der) {
\tvar version = readMPInt(der, 'version');
\tassert.strictEqual(version.readUInt8(0), 0);

\tvar p = readMPInt(der, 'p');
\tvar q = readMPInt(der, 'q');
\tvar g = readMPInt(der, 'g');
\tvar y = readMPInt(der, 'y');
\tvar x = readMPInt(der, 'x');

\t// now, make the key
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

function readPkcs1DSAPublic(der) {
\tvar y = readMPInt(der, 'y');
\tvar p = readMPInt(der, 'p');
\tvar q = readMPInt(der, 'q');
\tvar g = readMPInt(der, 'g');

\tvar key = {
\t\ttype: 'dsa',
\t\tparts: [
\t\t\t{ name: 'y', data: y },
\t\t\t{ name: 'p', data: p },
\t\t\t{ name: 'q', data: q },
\t\t\t{ name: 'g', data: g }
\t\t]
\t};

\treturn (new Key(key));
}

function readPkcs1ECDSAPublic(der) {
\tder.readSequence();

\tvar oid = der.readOID();
\tassert.strictEqual(oid, '1.2.840.10045.2.1', 'must be ecPublicKey');

\tvar curveOid = der.readOID();

\tvar curve;
\tvar curves = Object.keys(algs.curves);
\tfor (var j = 0; j < curves.length; ++j) {
\t\tvar c = curves[j];
\t\tvar cd = algs.curves[c];
\t\tif (cd.pkcs8oid === curveOid) {
\t\t\tcurve = c;
\t\t\tbreak;
\t\t}
\t}
\tassert.string(curve, 'a known ECDSA named curve');

\tvar Q = der.readString(asn1.Ber.BitString, true);
\tQ = utils.ecNormalize(Q);

\tvar key = {
\t\ttype: 'ecdsa',
\t\tparts: [
\t\t\t{ name: 'curve', data: new Buffer(curve) },
\t\t\t{ name: 'Q', data: Q }
\t\t]
\t};

\treturn (new Key(key));
}

function readPkcs1ECDSAPrivate(der) {
\tvar version = readMPInt(der, 'version');
\tassert.strictEqual(version.readUInt8(0), 1);

\t// private key
\tvar d = der.readString(asn1.Ber.OctetString, true);

\tder.readSequence(0xa0);
\tvar curve = readECDSACurve(der);
\tassert.string(curve, 'a known elliptic curve');

\tder.readSequence(0xa1);
\tvar Q = der.readString(asn1.Ber.BitString, true);
\tQ = utils.ecNormalize(Q);

\tvar key = {
\t\ttype: 'ecdsa',
\t\tparts: [
\t\t\t{ name: 'curve', data: new Buffer(curve) },
\t\t\t{ name: 'Q', data: Q },
\t\t\t{ name: 'd', data: d }
\t\t]
\t};

\treturn (new PrivateKey(key));
}

function writePkcs1(der, key) {
\tder.startSequence();

\tswitch (key.type) {
\tcase 'rsa':
\t\tif (PrivateKey.isPrivateKey(key))
\t\t\twritePkcs1RSAPrivate(der, key);
\t\telse
\t\t\twritePkcs1RSAPublic(der, key);
\t\tbreak;
\tcase 'dsa':
\t\tif (PrivateKey.isPrivateKey(key))
\t\t\twritePkcs1DSAPrivate(der, key);
\t\telse
\t\t\twritePkcs1DSAPublic(der, key);
\t\tbreak;
\tcase 'ecdsa':
\t\tif (PrivateKey.isPrivateKey(key))
\t\t\twritePkcs1ECDSAPrivate(der, key);
\t\telse
\t\t\twritePkcs1ECDSAPublic(der, key);
\t\tbreak;
\tdefault:
\t\tthrow (new Error('Unknown key algo: ' + key.type));
\t}

\tder.endSequence();
}

function writePkcs1RSAPublic(der, key) {
\tder.writeBuffer(key.part.n.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.e.data, asn1.Ber.Integer);
}

function writePkcs1RSAPrivate(der, key) {
\tvar ver = new Buffer(1);
\tver[0] = 0;
\tder.writeBuffer(ver, asn1.Ber.Integer);

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
}

function writePkcs1DSAPrivate(der, key) {
\tvar ver = new Buffer(1);
\tver[0] = 0;
\tder.writeBuffer(ver, asn1.Ber.Integer);

\tder.writeBuffer(key.part.p.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.q.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.g.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.y.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.x.data, asn1.Ber.Integer);
}

function writePkcs1DSAPublic(der, key) {
\tder.writeBuffer(key.part.y.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.p.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.q.data, asn1.Ber.Integer);
\tder.writeBuffer(key.part.g.data, asn1.Ber.Integer);
}

function writePkcs1ECDSAPublic(der, key) {
\tder.startSequence();

\tder.writeOID('1.2.840.10045.2.1'); /* ecPublicKey */
\tvar curve = key.part.curve.data.toString();
\tvar curveOid = algs.curves[curve].pkcs8oid;
\tassert.string(curveOid, 'a known ECDSA named curve');
\tder.writeOID(curveOid);

\tder.endSequence();

\tvar Q = utils.ecNormalize(key.part.Q.data, true);
\tder.writeBuffer(Q, asn1.Ber.BitString);
}

function writePkcs1ECDSAPrivate(der, key) {
\tvar ver = new Buffer(1);
\tver[0] = 1;
\tder.writeBuffer(ver, asn1.Ber.Integer);

\tder.writeBuffer(key.part.d.data, asn1.Ber.OctetString);

\tder.startSequence(0xa0);
\tvar curve = key.part.curve.data.toString();
\tvar curveOid = algs.curves[curve].pkcs8oid;
\tassert.string(curveOid, 'a known ECDSA named curve');
\tder.writeOID(curveOid);
\tder.endSequence();

\tder.startSequence(0xa1);
\tvar Q = utils.ecNormalize(key.part.Q.data, true);
\tder.writeBuffer(Q, asn1.Ber.BitString);
\tder.endSequence();
}
", "node_modules/sshpk/lib/formats/pkcs1.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sshpk/lib/formats/pkcs1.js");
    }
}
