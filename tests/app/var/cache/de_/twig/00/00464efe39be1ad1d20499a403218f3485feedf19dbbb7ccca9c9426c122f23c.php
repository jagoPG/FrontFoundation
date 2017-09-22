<?php

/* node_modules/sshpk/lib/formats/x509.js */
class __TwigTemplate_71c2ee895114b6090b2d8eeba8642725e3e68043169914e75fbc0323cecda569 extends Twig_Template
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
        $__internal_e670d1ed17d65e53108effb7d350d34ef3d25f62f11287bb3418e16476f5bc88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e670d1ed17d65e53108effb7d350d34ef3d25f62f11287bb3418e16476f5bc88->enter($__internal_e670d1ed17d65e53108effb7d350d34ef3d25f62f11287bb3418e16476f5bc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sshpk/lib/formats/x509.js"));

        // line 1
        echo "// Copyright 2017 Joyent, Inc.

module.exports = {
\tread: read,
\tverify: verify,
\tsign: sign,
\tsignAsync: signAsync,
\twrite: write
};

var assert = require('assert-plus');
var asn1 = require('asn1');
var algs = require('../algs');
var utils = require('../utils');
var Key = require('../key');
var PrivateKey = require('../private-key');
var pem = require('./pem');
var Identity = require('../identity');
var Signature = require('../signature');
var Certificate = require('../certificate');
var pkcs8 = require('./pkcs8');

/*
 * This file is based on RFC5280 (X.509).
 */

/* Helper to read in a single mpint */
function readMPInt(der, nm) {
\tassert.strictEqual(der.peek(), asn1.Ber.Integer,
\t    nm + ' is not an Integer');
\treturn (utils.mpNormalize(der.readString(asn1.Ber.Integer, true)));
}

function verify(cert, key) {
\tvar sig = cert.signatures.x509;
\tassert.object(sig, 'x509 signature');

\tvar algParts = sig.algo.split('-');
\tif (algParts[0] !== key.type)
\t\treturn (false);

\tvar blob = sig.cache;
\tif (blob === undefined) {
\t\tvar der = new asn1.BerWriter();
\t\twriteTBSCert(cert, der);
\t\tblob = der.buffer;
\t}

\tvar verifier = key.createVerify(algParts[1]);
\tverifier.write(blob);
\treturn (verifier.verify(sig.signature));
}

function Local(i) {
\treturn (asn1.Ber.Context | asn1.Ber.Constructor | i);
}

function Context(i) {
\treturn (asn1.Ber.Context | i);
}

var SIGN_ALGS = {
\t'rsa-md5': '1.2.840.113549.1.1.4',
\t'rsa-sha1': '1.2.840.113549.1.1.5',
\t'rsa-sha256': '1.2.840.113549.1.1.11',
\t'rsa-sha384': '1.2.840.113549.1.1.12',
\t'rsa-sha512': '1.2.840.113549.1.1.13',
\t'dsa-sha1': '1.2.840.10040.4.3',
\t'dsa-sha256': '2.16.840.1.101.3.4.3.2',
\t'ecdsa-sha1': '1.2.840.10045.4.1',
\t'ecdsa-sha256': '1.2.840.10045.4.3.2',
\t'ecdsa-sha384': '1.2.840.10045.4.3.3',
\t'ecdsa-sha512': '1.2.840.10045.4.3.4'
};
Object.keys(SIGN_ALGS).forEach(function (k) {
\tSIGN_ALGS[SIGN_ALGS[k]] = k;
});
SIGN_ALGS['1.3.14.3.2.3'] = 'rsa-md5';
SIGN_ALGS['1.3.14.3.2.29'] = 'rsa-sha1';

var EXTS = {
\t'issuerKeyId': '2.5.29.35',
\t'altName': '2.5.29.17',
\t'basicConstraints': '2.5.29.19',
\t'keyUsage': '2.5.29.15',
\t'extKeyUsage': '2.5.29.37'
};

function read(buf, options) {
\tif (typeof (buf) === 'string') {
\t\tbuf = new Buffer(buf, 'binary');
\t}
\tassert.buffer(buf, 'buf');

\tvar der = new asn1.BerReader(buf);

\tder.readSequence();
\tif (Math.abs(der.length - der.remain) > 1) {
\t\tthrow (new Error('DER sequence does not contain whole byte ' +
\t\t    'stream'));
\t}

\tvar tbsStart = der.offset;
\tder.readSequence();
\tvar sigOffset = der.offset + der.length;
\tvar tbsEnd = sigOffset;

\tif (der.peek() === Local(0)) {
\t\tder.readSequence(Local(0));
\t\tvar version = der.readInt();
\t\tassert.ok(version <= 3,
\t\t    'only x.509 versions up to v3 supported');
\t}

\tvar cert = {};
\tcert.signatures = {};
\tvar sig = (cert.signatures.x509 = {});
\tsig.extras = {};

\tcert.serial = readMPInt(der, 'serial');

\tder.readSequence();
\tvar after = der.offset + der.length;
\tvar certAlgOid = der.readOID();
\tvar certAlg = SIGN_ALGS[certAlgOid];
\tif (certAlg === undefined)
\t\tthrow (new Error('unknown signature algorithm ' + certAlgOid));

\tder._offset = after;
\tcert.issuer = Identity.parseAsn1(der);

\tder.readSequence();
\tcert.validFrom = readDate(der);
\tcert.validUntil = readDate(der);

\tcert.subjects = [Identity.parseAsn1(der)];

\tder.readSequence();
\tafter = der.offset + der.length;
\tcert.subjectKey = pkcs8.readPkcs8(undefined, 'public', der);
\tder._offset = after;

\t/* issuerUniqueID */
\tif (der.peek() === Local(1)) {
\t\tder.readSequence(Local(1));
\t\tsig.extras.issuerUniqueID =
\t\t    buf.slice(der.offset, der.offset + der.length);
\t\tder._offset += der.length;
\t}

\t/* subjectUniqueID */
\tif (der.peek() === Local(2)) {
\t\tder.readSequence(Local(2));
\t\tsig.extras.subjectUniqueID =
\t\t    buf.slice(der.offset, der.offset + der.length);
\t\tder._offset += der.length;
\t}

\t/* extensions */
\tif (der.peek() === Local(3)) {
\t\tder.readSequence(Local(3));
\t\tvar extEnd = der.offset + der.length;
\t\tder.readSequence();

\t\twhile (der.offset < extEnd)
\t\t\treadExtension(cert, buf, der);

\t\tassert.strictEqual(der.offset, extEnd);
\t}

\tassert.strictEqual(der.offset, sigOffset);

\tder.readSequence();
\tafter = der.offset + der.length;
\tvar sigAlgOid = der.readOID();
\tvar sigAlg = SIGN_ALGS[sigAlgOid];
\tif (sigAlg === undefined)
\t\tthrow (new Error('unknown signature algorithm ' + sigAlgOid));
\tder._offset = after;

\tvar sigData = der.readString(asn1.Ber.BitString, true);
\tif (sigData[0] === 0)
\t\tsigData = sigData.slice(1);
\tvar algParts = sigAlg.split('-');

\tsig.signature = Signature.parse(sigData, algParts[0], 'asn1');
\tsig.signature.hashAlgorithm = algParts[1];
\tsig.algo = sigAlg;
\tsig.cache = buf.slice(tbsStart, tbsEnd);

\treturn (new Certificate(cert));
}

function readDate(der) {
\tif (der.peek() === asn1.Ber.UTCTime) {
\t\treturn (utcTimeToDate(der.readString(asn1.Ber.UTCTime)));
\t} else if (der.peek() === asn1.Ber.GeneralizedTime) {
\t\treturn (gTimeToDate(der.readString(asn1.Ber.GeneralizedTime)));
\t} else {
\t\tthrow (new Error('Unsupported date format'));
\t}
}

/* RFC5280, section 4.2.1.6 (GeneralName type) */
var ALTNAME = {
\tOtherName: Local(0),
\tRFC822Name: Context(1),
\tDNSName: Context(2),
\tX400Address: Local(3),
\tDirectoryName: Local(4),
\tEDIPartyName: Local(5),
\tURI: Context(6),
\tIPAddress: Context(7),
\tOID: Context(8)
};

/* RFC5280, section 4.2.1.12 (KeyPurposeId) */
var EXTPURPOSE = {
\t'serverAuth': '1.3.6.1.5.5.7.3.1',
\t'clientAuth': '1.3.6.1.5.5.7.3.2',
\t'codeSigning': '1.3.6.1.5.5.7.3.3',

\t/* See https://github.com/joyent/oid-docs/blob/master/root.md */
\t'joyentDocker': '1.3.6.1.4.1.38678.1.4.1',
\t'joyentCmon': '1.3.6.1.4.1.38678.1.4.2'
};
var EXTPURPOSE_REV = {};
Object.keys(EXTPURPOSE).forEach(function (k) {
\tEXTPURPOSE_REV[EXTPURPOSE[k]] = k;
});

var KEYUSEBITS = [
\t'signature', 'identity', 'keyEncryption',
\t'encryption', 'keyAgreement', 'ca', 'crl'
];

function readExtension(cert, buf, der) {
\tder.readSequence();
\tvar after = der.offset + der.length;
\tvar extId = der.readOID();
\tvar id;
\tvar sig = cert.signatures.x509;
\tsig.extras.exts = [];

\tvar critical;
\tif (der.peek() === asn1.Ber.Boolean)
\t\tcritical = der.readBoolean();

\tswitch (extId) {
\tcase (EXTS.basicConstraints):
\t\tder.readSequence(asn1.Ber.OctetString);
\t\tder.readSequence();
\t\tvar bcEnd = der.offset + der.length;
\t\tvar ca = false;
\t\tif (der.peek() === asn1.Ber.Boolean)
\t\t\tca = der.readBoolean();
\t\tif (cert.purposes === undefined)
\t\t\tcert.purposes = [];
\t\tif (ca === true)
\t\t\tcert.purposes.push('ca');
\t\tvar bc = { oid: extId, critical: critical };
\t\tif (der.offset < bcEnd && der.peek() === asn1.Ber.Integer)
\t\t\tbc.pathLen = der.readInt();
\t\tsig.extras.exts.push(bc);
\t\tbreak;
\tcase (EXTS.extKeyUsage):
\t\tder.readSequence(asn1.Ber.OctetString);
\t\tder.readSequence();
\t\tif (cert.purposes === undefined)
\t\t\tcert.purposes = [];
\t\tvar ekEnd = der.offset + der.length;
\t\twhile (der.offset < ekEnd) {
\t\t\tvar oid = der.readOID();
\t\t\tcert.purposes.push(EXTPURPOSE_REV[oid] || oid);
\t\t}
\t\t/*
\t\t * This is a bit of a hack: in the case where we have a cert
\t\t * that's only allowed to do serverAuth or clientAuth (and not
\t\t * the other), we want to make sure all our Subjects are of
\t\t * the right type. But we already parsed our Subjects and
\t\t * decided if they were hosts or users earlier (since it appears
\t\t * first in the cert).
\t\t *
\t\t * So we go through and mutate them into the right kind here if
\t\t * it doesn't match. This might not be hugely beneficial, as it
\t\t * seems that single-purpose certs are not often seen in the
\t\t * wild.
\t\t */
\t\tif (cert.purposes.indexOf('serverAuth') !== -1 &&
\t\t    cert.purposes.indexOf('clientAuth') === -1) {
\t\t\tcert.subjects.forEach(function (ide) {
\t\t\t\tif (ide.type !== 'host') {
\t\t\t\t\tide.type = 'host';
\t\t\t\t\tide.hostname = ide.uid ||
\t\t\t\t\t    ide.email ||
\t\t\t\t\t    ide.components[0].value;
\t\t\t\t}
\t\t\t});
\t\t} else if (cert.purposes.indexOf('clientAuth') !== -1 &&
\t\t    cert.purposes.indexOf('serverAuth') === -1) {
\t\t\tcert.subjects.forEach(function (ide) {
\t\t\t\tif (ide.type !== 'user') {
\t\t\t\t\tide.type = 'user';
\t\t\t\t\tide.uid = ide.hostname ||
\t\t\t\t\t    ide.email ||
\t\t\t\t\t    ide.components[0].value;
\t\t\t\t}
\t\t\t});
\t\t}
\t\tsig.extras.exts.push({ oid: extId, critical: critical });
\t\tbreak;
\tcase (EXTS.keyUsage):
\t\tder.readSequence(asn1.Ber.OctetString);
\t\tvar bits = der.readString(asn1.Ber.BitString, true);
\t\tvar setBits = readBitField(bits, KEYUSEBITS);
\t\tsetBits.forEach(function (bit) {
\t\t\tif (cert.purposes === undefined)
\t\t\t\tcert.purposes = [];
\t\t\tif (cert.purposes.indexOf(bit) === -1)
\t\t\t\tcert.purposes.push(bit);
\t\t});
\t\tsig.extras.exts.push({ oid: extId, critical: critical,
\t\t    bits: bits });
\t\tbreak;
\tcase (EXTS.altName):
\t\tder.readSequence(asn1.Ber.OctetString);
\t\tder.readSequence();
\t\tvar aeEnd = der.offset + der.length;
\t\twhile (der.offset < aeEnd) {
\t\t\tswitch (der.peek()) {
\t\t\tcase ALTNAME.OtherName:
\t\t\tcase ALTNAME.EDIPartyName:
\t\t\t\tder.readSequence();
\t\t\t\tder._offset += der.length;
\t\t\t\tbreak;
\t\t\tcase ALTNAME.OID:
\t\t\t\tder.readOID(ALTNAME.OID);
\t\t\t\tbreak;
\t\t\tcase ALTNAME.RFC822Name:
\t\t\t\t/* RFC822 specifies email addresses */
\t\t\t\tvar email = der.readString(ALTNAME.RFC822Name);
\t\t\t\tid = Identity.forEmail(email);
\t\t\t\tif (!cert.subjects[0].equals(id))
\t\t\t\t\tcert.subjects.push(id);
\t\t\t\tbreak;
\t\t\tcase ALTNAME.DirectoryName:
\t\t\t\tder.readSequence(ALTNAME.DirectoryName);
\t\t\t\tid = Identity.parseAsn1(der);
\t\t\t\tif (!cert.subjects[0].equals(id))
\t\t\t\t\tcert.subjects.push(id);
\t\t\t\tbreak;
\t\t\tcase ALTNAME.DNSName:
\t\t\t\tvar host = der.readString(
\t\t\t\t    ALTNAME.DNSName);
\t\t\t\tid = Identity.forHost(host);
\t\t\t\tif (!cert.subjects[0].equals(id))
\t\t\t\t\tcert.subjects.push(id);
\t\t\t\tbreak;
\t\t\tdefault:
\t\t\t\tder.readString(der.peek());
\t\t\t\tbreak;
\t\t\t}
\t\t}
\t\tsig.extras.exts.push({ oid: extId, critical: critical });
\t\tbreak;
\tdefault:
\t\tsig.extras.exts.push({
\t\t\toid: extId,
\t\t\tcritical: critical,
\t\t\tdata: der.readString(asn1.Ber.OctetString, true)
\t\t});
\t\tbreak;
\t}

\tder._offset = after;
}

var UTCTIME_RE =
    /^([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})?Z\$/;
function utcTimeToDate(t) {
\tvar m = t.match(UTCTIME_RE);
\tassert.ok(m, 'timestamps must be in UTC');
\tvar d = new Date();

\tvar thisYear = d.getUTCFullYear();
\tvar century = Math.floor(thisYear / 100) * 100;

\tvar year = parseInt(m[1], 10);
\tif (thisYear % 100 < 50 && year >= 60)
\t\tyear += (century - 1);
\telse
\t\tyear += century;
\td.setUTCFullYear(year, parseInt(m[2], 10) - 1, parseInt(m[3], 10));
\td.setUTCHours(parseInt(m[4], 10), parseInt(m[5], 10));
\tif (m[6] && m[6].length > 0)
\t\td.setUTCSeconds(parseInt(m[6], 10));
\treturn (d);
}

var GTIME_RE =
    /^([0-9]{4})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})?Z\$/;
function gTimeToDate(t) {
\tvar m = t.match(GTIME_RE);
\tassert.ok(m);
\tvar d = new Date();

\td.setUTCFullYear(parseInt(m[1], 10), parseInt(m[2], 10) - 1,
\t    parseInt(m[3], 10));
\td.setUTCHours(parseInt(m[4], 10), parseInt(m[5], 10));
\tif (m[6] && m[6].length > 0)
\t\td.setUTCSeconds(parseInt(m[6], 10));
\treturn (d);
}

function zeroPad(n) {
\tvar s = '' + n;
\twhile (s.length < 2)
\t\ts = '0' + s;
\treturn (s);
}

function dateToUTCTime(d) {
\tvar s = '';
\ts += zeroPad(d.getUTCFullYear() % 100);
\ts += zeroPad(d.getUTCMonth() + 1);
\ts += zeroPad(d.getUTCDate());
\ts += zeroPad(d.getUTCHours());
\ts += zeroPad(d.getUTCMinutes());
\ts += zeroPad(d.getUTCSeconds());
\ts += 'Z';
\treturn (s);
}

function sign(cert, key) {
\tif (cert.signatures.x509 === undefined)
\t\tcert.signatures.x509 = {};
\tvar sig = cert.signatures.x509;

\tsig.algo = key.type + '-' + key.defaultHashAlgorithm();
\tif (SIGN_ALGS[sig.algo] === undefined)
\t\treturn (false);

\tvar der = new asn1.BerWriter();
\twriteTBSCert(cert, der);
\tvar blob = der.buffer;
\tsig.cache = blob;

\tvar signer = key.createSign();
\tsigner.write(blob);
\tcert.signatures.x509.signature = signer.sign();

\treturn (true);
}

function signAsync(cert, signer, done) {
\tif (cert.signatures.x509 === undefined)
\t\tcert.signatures.x509 = {};
\tvar sig = cert.signatures.x509;

\tvar der = new asn1.BerWriter();
\twriteTBSCert(cert, der);
\tvar blob = der.buffer;
\tsig.cache = blob;

\tsigner(blob, function (err, signature) {
\t\tif (err) {
\t\t\tdone(err);
\t\t\treturn;
\t\t}
\t\tsig.algo = signature.type + '-' + signature.hashAlgorithm;
\t\tif (SIGN_ALGS[sig.algo] === undefined) {
\t\t\tdone(new Error('Invalid signing algorithm \"' +
\t\t\t    sig.algo + '\"'));
\t\t\treturn;
\t\t}
\t\tsig.signature = signature;
\t\tdone();
\t});
}

function write(cert, options) {
\tvar sig = cert.signatures.x509;
\tassert.object(sig, 'x509 signature');

\tvar der = new asn1.BerWriter();
\tder.startSequence();
\tif (sig.cache) {
\t\tder._ensure(sig.cache.length);
\t\tsig.cache.copy(der._buf, der._offset);
\t\tder._offset += sig.cache.length;
\t} else {
\t\twriteTBSCert(cert, der);
\t}

\tder.startSequence();
\tder.writeOID(SIGN_ALGS[sig.algo]);
\tif (sig.algo.match(/^rsa-/))
\t\tder.writeNull();
\tder.endSequence();

\tvar sigData = sig.signature.toBuffer('asn1');
\tvar data = new Buffer(sigData.length + 1);
\tdata[0] = 0;
\tsigData.copy(data, 1);
\tder.writeBuffer(data, asn1.Ber.BitString);
\tder.endSequence();

\treturn (der.buffer);
}

function writeTBSCert(cert, der) {
\tvar sig = cert.signatures.x509;
\tassert.object(sig, 'x509 signature');

\tder.startSequence();

\tder.startSequence(Local(0));
\tder.writeInt(2);
\tder.endSequence();

\tder.writeBuffer(utils.mpNormalize(cert.serial), asn1.Ber.Integer);

\tder.startSequence();
\tder.writeOID(SIGN_ALGS[sig.algo]);
\tder.endSequence();

\tcert.issuer.toAsn1(der);

\tder.startSequence();
\tder.writeString(dateToUTCTime(cert.validFrom), asn1.Ber.UTCTime);
\tder.writeString(dateToUTCTime(cert.validUntil), asn1.Ber.UTCTime);
\tder.endSequence();

\tvar subject = cert.subjects[0];
\tvar altNames = cert.subjects.slice(1);
\tsubject.toAsn1(der);

\tpkcs8.writePkcs8(der, cert.subjectKey);

\tif (sig.extras && sig.extras.issuerUniqueID) {
\t\tder.writeBuffer(sig.extras.issuerUniqueID, Local(1));
\t}

\tif (sig.extras && sig.extras.subjectUniqueID) {
\t\tder.writeBuffer(sig.extras.subjectUniqueID, Local(2));
\t}

\tif (altNames.length > 0 || subject.type === 'host' ||
\t    (cert.purposes !== undefined && cert.purposes.length > 0) ||
\t    (sig.extras && sig.extras.exts)) {
\t\tder.startSequence(Local(3));
\t\tder.startSequence();

\t\tvar exts = [];
\t\tif (cert.purposes !== undefined && cert.purposes.length > 0) {
\t\t\texts.push({
\t\t\t\toid: EXTS.basicConstraints,
\t\t\t\tcritical: true
\t\t\t});
\t\t\texts.push({
\t\t\t\toid: EXTS.keyUsage,
\t\t\t\tcritical: true
\t\t\t});
\t\t\texts.push({
\t\t\t\toid: EXTS.extKeyUsage,
\t\t\t\tcritical: true
\t\t\t});
\t\t}
\t\texts.push({ oid: EXTS.altName });
\t\tif (sig.extras && sig.extras.exts)
\t\t\texts = sig.extras.exts;

\t\tfor (var i = 0; i < exts.length; ++i) {
\t\t\tder.startSequence();
\t\t\tder.writeOID(exts[i].oid);

\t\t\tif (exts[i].critical !== undefined)
\t\t\t\tder.writeBoolean(exts[i].critical);

\t\t\tif (exts[i].oid === EXTS.altName) {
\t\t\t\tder.startSequence(asn1.Ber.OctetString);
\t\t\t\tder.startSequence();
\t\t\t\tif (subject.type === 'host') {
\t\t\t\t\tder.writeString(subject.hostname,
\t\t\t\t\t    Context(2));
\t\t\t\t}
\t\t\t\tfor (var j = 0; j < altNames.length; ++j) {
\t\t\t\t\tif (altNames[j].type === 'host') {
\t\t\t\t\t\tder.writeString(
\t\t\t\t\t\t    altNames[j].hostname,
\t\t\t\t\t\t    ALTNAME.DNSName);
\t\t\t\t\t} else if (altNames[j].type ===
\t\t\t\t\t    'email') {
\t\t\t\t\t\tder.writeString(
\t\t\t\t\t\t    altNames[j].email,
\t\t\t\t\t\t    ALTNAME.RFC822Name);
\t\t\t\t\t} else {
\t\t\t\t\t\t/*
\t\t\t\t\t\t * Encode anything else as a
\t\t\t\t\t\t * DN style name for now.
\t\t\t\t\t\t */
\t\t\t\t\t\tder.startSequence(
\t\t\t\t\t\t    ALTNAME.DirectoryName);
\t\t\t\t\t\taltNames[j].toAsn1(der);
\t\t\t\t\t\tder.endSequence();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tder.endSequence();
\t\t\t\tder.endSequence();
\t\t\t} else if (exts[i].oid === EXTS.basicConstraints) {
\t\t\t\tder.startSequence(asn1.Ber.OctetString);
\t\t\t\tder.startSequence();
\t\t\t\tvar ca = (cert.purposes.indexOf('ca') !== -1);
\t\t\t\tvar pathLen = exts[i].pathLen;
\t\t\t\tder.writeBoolean(ca);
\t\t\t\tif (pathLen !== undefined)
\t\t\t\t\tder.writeInt(pathLen);
\t\t\t\tder.endSequence();
\t\t\t\tder.endSequence();
\t\t\t} else if (exts[i].oid === EXTS.extKeyUsage) {
\t\t\t\tder.startSequence(asn1.Ber.OctetString);
\t\t\t\tder.startSequence();
\t\t\t\tcert.purposes.forEach(function (purpose) {
\t\t\t\t\tif (purpose === 'ca')
\t\t\t\t\t\treturn;
\t\t\t\t\tif (KEYUSEBITS.indexOf(purpose) !== -1)
\t\t\t\t\t\treturn;
\t\t\t\t\tvar oid = purpose;
\t\t\t\t\tif (EXTPURPOSE[purpose] !== undefined)
\t\t\t\t\t\toid = EXTPURPOSE[purpose];
\t\t\t\t\tder.writeOID(oid);
\t\t\t\t});
\t\t\t\tder.endSequence();
\t\t\t\tder.endSequence();
\t\t\t} else if (exts[i].oid === EXTS.keyUsage) {
\t\t\t\tder.startSequence(asn1.Ber.OctetString);
\t\t\t\t/*
\t\t\t\t * If we parsed this certificate from a byte
\t\t\t\t * stream (i.e. we didn't generate it in sshpk)
\t\t\t\t * then we'll have a \".bits\" property on the
\t\t\t\t * ext with the original raw byte contents.
\t\t\t\t *
\t\t\t\t * If we have this, use it here instead of
\t\t\t\t * regenerating it. This guarantees we output
\t\t\t\t * the same data we parsed, so signatures still
\t\t\t\t * validate.
\t\t\t\t */
\t\t\t\tif (exts[i].bits !== undefined) {
\t\t\t\t\tder.writeBuffer(exts[i].bits,
\t\t\t\t\t    asn1.Ber.BitString);
\t\t\t\t} else {
\t\t\t\t\tvar bits = writeBitField(cert.purposes,
\t\t\t\t\t    KEYUSEBITS);
\t\t\t\t\tder.writeBuffer(bits,
\t\t\t\t\t    asn1.Ber.BitString);
\t\t\t\t}
\t\t\t\tder.endSequence();
\t\t\t} else {
\t\t\t\tder.writeBuffer(exts[i].data,
\t\t\t\t    asn1.Ber.OctetString);
\t\t\t}

\t\t\tder.endSequence();
\t\t}

\t\tder.endSequence();
\t\tder.endSequence();
\t}

\tder.endSequence();
}

/*
 * Reads an ASN.1 BER bitfield out of the Buffer produced by doing
 * `BerReader#readString(asn1.Ber.BitString)`. That function gives us the raw
 * contents of the BitString tag, which is a count of unused bits followed by
 * the bits as a right-padded byte string.
 *
 * `bits` is the Buffer, `bitIndex` should contain an array of string names
 * for the bits in the string, ordered starting with bit #0 in the ASN.1 spec.
 *
 * Returns an array of Strings, the names of the bits that were set to 1.
 */
function readBitField(bits, bitIndex) {
\tvar bitLen = 8 * (bits.length - 1) - bits[0];
\tvar setBits = {};
\tfor (var i = 0; i < bitLen; ++i) {
\t\tvar byteN = 1 + Math.floor(i / 8);
\t\tvar bit = 7 - (i % 8);
\t\tvar mask = 1 << bit;
\t\tvar bitVal = ((bits[byteN] & mask) !== 0);
\t\tvar name = bitIndex[i];
\t\tif (bitVal && typeof (name) === 'string') {
\t\t\tsetBits[name] = true;
\t\t}
\t}
\treturn (Object.keys(setBits));
}

/*
 * `setBits` is an array of strings, containing the names for each bit that
 * sould be set to 1. `bitIndex` is same as in `readBitField()`.
 *
 * Returns a Buffer, ready to be written out with `BerWriter#writeString()`.
 */
function writeBitField(setBits, bitIndex) {
\tvar bitLen = bitIndex.length;
\tvar blen = Math.ceil(bitLen / 8);
\tvar unused = blen * 8 - bitLen;
\tvar bits = new Buffer(1 + blen);
\tbits.fill(0);
\tbits[0] = unused;
\tfor (var i = 0; i < bitLen; ++i) {
\t\tvar byteN = 1 + Math.floor(i / 8);
\t\tvar bit = 7 - (i % 8);
\t\tvar mask = 1 << bit;
\t\tvar name = bitIndex[i];
\t\tif (name === undefined)
\t\t\tcontinue;
\t\tvar bitVal = (setBits.indexOf(name) !== -1);
\t\tif (bitVal) {
\t\t\tbits[byteN] |= mask;
\t\t}
\t}
\treturn (bits);
}
";
        
        $__internal_e670d1ed17d65e53108effb7d350d34ef3d25f62f11287bb3418e16476f5bc88->leave($__internal_e670d1ed17d65e53108effb7d350d34ef3d25f62f11287bb3418e16476f5bc88_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sshpk/lib/formats/x509.js";
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
\twrite: write
};

var assert = require('assert-plus');
var asn1 = require('asn1');
var algs = require('../algs');
var utils = require('../utils');
var Key = require('../key');
var PrivateKey = require('../private-key');
var pem = require('./pem');
var Identity = require('../identity');
var Signature = require('../signature');
var Certificate = require('../certificate');
var pkcs8 = require('./pkcs8');

/*
 * This file is based on RFC5280 (X.509).
 */

/* Helper to read in a single mpint */
function readMPInt(der, nm) {
\tassert.strictEqual(der.peek(), asn1.Ber.Integer,
\t    nm + ' is not an Integer');
\treturn (utils.mpNormalize(der.readString(asn1.Ber.Integer, true)));
}

function verify(cert, key) {
\tvar sig = cert.signatures.x509;
\tassert.object(sig, 'x509 signature');

\tvar algParts = sig.algo.split('-');
\tif (algParts[0] !== key.type)
\t\treturn (false);

\tvar blob = sig.cache;
\tif (blob === undefined) {
\t\tvar der = new asn1.BerWriter();
\t\twriteTBSCert(cert, der);
\t\tblob = der.buffer;
\t}

\tvar verifier = key.createVerify(algParts[1]);
\tverifier.write(blob);
\treturn (verifier.verify(sig.signature));
}

function Local(i) {
\treturn (asn1.Ber.Context | asn1.Ber.Constructor | i);
}

function Context(i) {
\treturn (asn1.Ber.Context | i);
}

var SIGN_ALGS = {
\t'rsa-md5': '1.2.840.113549.1.1.4',
\t'rsa-sha1': '1.2.840.113549.1.1.5',
\t'rsa-sha256': '1.2.840.113549.1.1.11',
\t'rsa-sha384': '1.2.840.113549.1.1.12',
\t'rsa-sha512': '1.2.840.113549.1.1.13',
\t'dsa-sha1': '1.2.840.10040.4.3',
\t'dsa-sha256': '2.16.840.1.101.3.4.3.2',
\t'ecdsa-sha1': '1.2.840.10045.4.1',
\t'ecdsa-sha256': '1.2.840.10045.4.3.2',
\t'ecdsa-sha384': '1.2.840.10045.4.3.3',
\t'ecdsa-sha512': '1.2.840.10045.4.3.4'
};
Object.keys(SIGN_ALGS).forEach(function (k) {
\tSIGN_ALGS[SIGN_ALGS[k]] = k;
});
SIGN_ALGS['1.3.14.3.2.3'] = 'rsa-md5';
SIGN_ALGS['1.3.14.3.2.29'] = 'rsa-sha1';

var EXTS = {
\t'issuerKeyId': '2.5.29.35',
\t'altName': '2.5.29.17',
\t'basicConstraints': '2.5.29.19',
\t'keyUsage': '2.5.29.15',
\t'extKeyUsage': '2.5.29.37'
};

function read(buf, options) {
\tif (typeof (buf) === 'string') {
\t\tbuf = new Buffer(buf, 'binary');
\t}
\tassert.buffer(buf, 'buf');

\tvar der = new asn1.BerReader(buf);

\tder.readSequence();
\tif (Math.abs(der.length - der.remain) > 1) {
\t\tthrow (new Error('DER sequence does not contain whole byte ' +
\t\t    'stream'));
\t}

\tvar tbsStart = der.offset;
\tder.readSequence();
\tvar sigOffset = der.offset + der.length;
\tvar tbsEnd = sigOffset;

\tif (der.peek() === Local(0)) {
\t\tder.readSequence(Local(0));
\t\tvar version = der.readInt();
\t\tassert.ok(version <= 3,
\t\t    'only x.509 versions up to v3 supported');
\t}

\tvar cert = {};
\tcert.signatures = {};
\tvar sig = (cert.signatures.x509 = {});
\tsig.extras = {};

\tcert.serial = readMPInt(der, 'serial');

\tder.readSequence();
\tvar after = der.offset + der.length;
\tvar certAlgOid = der.readOID();
\tvar certAlg = SIGN_ALGS[certAlgOid];
\tif (certAlg === undefined)
\t\tthrow (new Error('unknown signature algorithm ' + certAlgOid));

\tder._offset = after;
\tcert.issuer = Identity.parseAsn1(der);

\tder.readSequence();
\tcert.validFrom = readDate(der);
\tcert.validUntil = readDate(der);

\tcert.subjects = [Identity.parseAsn1(der)];

\tder.readSequence();
\tafter = der.offset + der.length;
\tcert.subjectKey = pkcs8.readPkcs8(undefined, 'public', der);
\tder._offset = after;

\t/* issuerUniqueID */
\tif (der.peek() === Local(1)) {
\t\tder.readSequence(Local(1));
\t\tsig.extras.issuerUniqueID =
\t\t    buf.slice(der.offset, der.offset + der.length);
\t\tder._offset += der.length;
\t}

\t/* subjectUniqueID */
\tif (der.peek() === Local(2)) {
\t\tder.readSequence(Local(2));
\t\tsig.extras.subjectUniqueID =
\t\t    buf.slice(der.offset, der.offset + der.length);
\t\tder._offset += der.length;
\t}

\t/* extensions */
\tif (der.peek() === Local(3)) {
\t\tder.readSequence(Local(3));
\t\tvar extEnd = der.offset + der.length;
\t\tder.readSequence();

\t\twhile (der.offset < extEnd)
\t\t\treadExtension(cert, buf, der);

\t\tassert.strictEqual(der.offset, extEnd);
\t}

\tassert.strictEqual(der.offset, sigOffset);

\tder.readSequence();
\tafter = der.offset + der.length;
\tvar sigAlgOid = der.readOID();
\tvar sigAlg = SIGN_ALGS[sigAlgOid];
\tif (sigAlg === undefined)
\t\tthrow (new Error('unknown signature algorithm ' + sigAlgOid));
\tder._offset = after;

\tvar sigData = der.readString(asn1.Ber.BitString, true);
\tif (sigData[0] === 0)
\t\tsigData = sigData.slice(1);
\tvar algParts = sigAlg.split('-');

\tsig.signature = Signature.parse(sigData, algParts[0], 'asn1');
\tsig.signature.hashAlgorithm = algParts[1];
\tsig.algo = sigAlg;
\tsig.cache = buf.slice(tbsStart, tbsEnd);

\treturn (new Certificate(cert));
}

function readDate(der) {
\tif (der.peek() === asn1.Ber.UTCTime) {
\t\treturn (utcTimeToDate(der.readString(asn1.Ber.UTCTime)));
\t} else if (der.peek() === asn1.Ber.GeneralizedTime) {
\t\treturn (gTimeToDate(der.readString(asn1.Ber.GeneralizedTime)));
\t} else {
\t\tthrow (new Error('Unsupported date format'));
\t}
}

/* RFC5280, section 4.2.1.6 (GeneralName type) */
var ALTNAME = {
\tOtherName: Local(0),
\tRFC822Name: Context(1),
\tDNSName: Context(2),
\tX400Address: Local(3),
\tDirectoryName: Local(4),
\tEDIPartyName: Local(5),
\tURI: Context(6),
\tIPAddress: Context(7),
\tOID: Context(8)
};

/* RFC5280, section 4.2.1.12 (KeyPurposeId) */
var EXTPURPOSE = {
\t'serverAuth': '1.3.6.1.5.5.7.3.1',
\t'clientAuth': '1.3.6.1.5.5.7.3.2',
\t'codeSigning': '1.3.6.1.5.5.7.3.3',

\t/* See https://github.com/joyent/oid-docs/blob/master/root.md */
\t'joyentDocker': '1.3.6.1.4.1.38678.1.4.1',
\t'joyentCmon': '1.3.6.1.4.1.38678.1.4.2'
};
var EXTPURPOSE_REV = {};
Object.keys(EXTPURPOSE).forEach(function (k) {
\tEXTPURPOSE_REV[EXTPURPOSE[k]] = k;
});

var KEYUSEBITS = [
\t'signature', 'identity', 'keyEncryption',
\t'encryption', 'keyAgreement', 'ca', 'crl'
];

function readExtension(cert, buf, der) {
\tder.readSequence();
\tvar after = der.offset + der.length;
\tvar extId = der.readOID();
\tvar id;
\tvar sig = cert.signatures.x509;
\tsig.extras.exts = [];

\tvar critical;
\tif (der.peek() === asn1.Ber.Boolean)
\t\tcritical = der.readBoolean();

\tswitch (extId) {
\tcase (EXTS.basicConstraints):
\t\tder.readSequence(asn1.Ber.OctetString);
\t\tder.readSequence();
\t\tvar bcEnd = der.offset + der.length;
\t\tvar ca = false;
\t\tif (der.peek() === asn1.Ber.Boolean)
\t\t\tca = der.readBoolean();
\t\tif (cert.purposes === undefined)
\t\t\tcert.purposes = [];
\t\tif (ca === true)
\t\t\tcert.purposes.push('ca');
\t\tvar bc = { oid: extId, critical: critical };
\t\tif (der.offset < bcEnd && der.peek() === asn1.Ber.Integer)
\t\t\tbc.pathLen = der.readInt();
\t\tsig.extras.exts.push(bc);
\t\tbreak;
\tcase (EXTS.extKeyUsage):
\t\tder.readSequence(asn1.Ber.OctetString);
\t\tder.readSequence();
\t\tif (cert.purposes === undefined)
\t\t\tcert.purposes = [];
\t\tvar ekEnd = der.offset + der.length;
\t\twhile (der.offset < ekEnd) {
\t\t\tvar oid = der.readOID();
\t\t\tcert.purposes.push(EXTPURPOSE_REV[oid] || oid);
\t\t}
\t\t/*
\t\t * This is a bit of a hack: in the case where we have a cert
\t\t * that's only allowed to do serverAuth or clientAuth (and not
\t\t * the other), we want to make sure all our Subjects are of
\t\t * the right type. But we already parsed our Subjects and
\t\t * decided if they were hosts or users earlier (since it appears
\t\t * first in the cert).
\t\t *
\t\t * So we go through and mutate them into the right kind here if
\t\t * it doesn't match. This might not be hugely beneficial, as it
\t\t * seems that single-purpose certs are not often seen in the
\t\t * wild.
\t\t */
\t\tif (cert.purposes.indexOf('serverAuth') !== -1 &&
\t\t    cert.purposes.indexOf('clientAuth') === -1) {
\t\t\tcert.subjects.forEach(function (ide) {
\t\t\t\tif (ide.type !== 'host') {
\t\t\t\t\tide.type = 'host';
\t\t\t\t\tide.hostname = ide.uid ||
\t\t\t\t\t    ide.email ||
\t\t\t\t\t    ide.components[0].value;
\t\t\t\t}
\t\t\t});
\t\t} else if (cert.purposes.indexOf('clientAuth') !== -1 &&
\t\t    cert.purposes.indexOf('serverAuth') === -1) {
\t\t\tcert.subjects.forEach(function (ide) {
\t\t\t\tif (ide.type !== 'user') {
\t\t\t\t\tide.type = 'user';
\t\t\t\t\tide.uid = ide.hostname ||
\t\t\t\t\t    ide.email ||
\t\t\t\t\t    ide.components[0].value;
\t\t\t\t}
\t\t\t});
\t\t}
\t\tsig.extras.exts.push({ oid: extId, critical: critical });
\t\tbreak;
\tcase (EXTS.keyUsage):
\t\tder.readSequence(asn1.Ber.OctetString);
\t\tvar bits = der.readString(asn1.Ber.BitString, true);
\t\tvar setBits = readBitField(bits, KEYUSEBITS);
\t\tsetBits.forEach(function (bit) {
\t\t\tif (cert.purposes === undefined)
\t\t\t\tcert.purposes = [];
\t\t\tif (cert.purposes.indexOf(bit) === -1)
\t\t\t\tcert.purposes.push(bit);
\t\t});
\t\tsig.extras.exts.push({ oid: extId, critical: critical,
\t\t    bits: bits });
\t\tbreak;
\tcase (EXTS.altName):
\t\tder.readSequence(asn1.Ber.OctetString);
\t\tder.readSequence();
\t\tvar aeEnd = der.offset + der.length;
\t\twhile (der.offset < aeEnd) {
\t\t\tswitch (der.peek()) {
\t\t\tcase ALTNAME.OtherName:
\t\t\tcase ALTNAME.EDIPartyName:
\t\t\t\tder.readSequence();
\t\t\t\tder._offset += der.length;
\t\t\t\tbreak;
\t\t\tcase ALTNAME.OID:
\t\t\t\tder.readOID(ALTNAME.OID);
\t\t\t\tbreak;
\t\t\tcase ALTNAME.RFC822Name:
\t\t\t\t/* RFC822 specifies email addresses */
\t\t\t\tvar email = der.readString(ALTNAME.RFC822Name);
\t\t\t\tid = Identity.forEmail(email);
\t\t\t\tif (!cert.subjects[0].equals(id))
\t\t\t\t\tcert.subjects.push(id);
\t\t\t\tbreak;
\t\t\tcase ALTNAME.DirectoryName:
\t\t\t\tder.readSequence(ALTNAME.DirectoryName);
\t\t\t\tid = Identity.parseAsn1(der);
\t\t\t\tif (!cert.subjects[0].equals(id))
\t\t\t\t\tcert.subjects.push(id);
\t\t\t\tbreak;
\t\t\tcase ALTNAME.DNSName:
\t\t\t\tvar host = der.readString(
\t\t\t\t    ALTNAME.DNSName);
\t\t\t\tid = Identity.forHost(host);
\t\t\t\tif (!cert.subjects[0].equals(id))
\t\t\t\t\tcert.subjects.push(id);
\t\t\t\tbreak;
\t\t\tdefault:
\t\t\t\tder.readString(der.peek());
\t\t\t\tbreak;
\t\t\t}
\t\t}
\t\tsig.extras.exts.push({ oid: extId, critical: critical });
\t\tbreak;
\tdefault:
\t\tsig.extras.exts.push({
\t\t\toid: extId,
\t\t\tcritical: critical,
\t\t\tdata: der.readString(asn1.Ber.OctetString, true)
\t\t});
\t\tbreak;
\t}

\tder._offset = after;
}

var UTCTIME_RE =
    /^([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})?Z\$/;
function utcTimeToDate(t) {
\tvar m = t.match(UTCTIME_RE);
\tassert.ok(m, 'timestamps must be in UTC');
\tvar d = new Date();

\tvar thisYear = d.getUTCFullYear();
\tvar century = Math.floor(thisYear / 100) * 100;

\tvar year = parseInt(m[1], 10);
\tif (thisYear % 100 < 50 && year >= 60)
\t\tyear += (century - 1);
\telse
\t\tyear += century;
\td.setUTCFullYear(year, parseInt(m[2], 10) - 1, parseInt(m[3], 10));
\td.setUTCHours(parseInt(m[4], 10), parseInt(m[5], 10));
\tif (m[6] && m[6].length > 0)
\t\td.setUTCSeconds(parseInt(m[6], 10));
\treturn (d);
}

var GTIME_RE =
    /^([0-9]{4})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})?Z\$/;
function gTimeToDate(t) {
\tvar m = t.match(GTIME_RE);
\tassert.ok(m);
\tvar d = new Date();

\td.setUTCFullYear(parseInt(m[1], 10), parseInt(m[2], 10) - 1,
\t    parseInt(m[3], 10));
\td.setUTCHours(parseInt(m[4], 10), parseInt(m[5], 10));
\tif (m[6] && m[6].length > 0)
\t\td.setUTCSeconds(parseInt(m[6], 10));
\treturn (d);
}

function zeroPad(n) {
\tvar s = '' + n;
\twhile (s.length < 2)
\t\ts = '0' + s;
\treturn (s);
}

function dateToUTCTime(d) {
\tvar s = '';
\ts += zeroPad(d.getUTCFullYear() % 100);
\ts += zeroPad(d.getUTCMonth() + 1);
\ts += zeroPad(d.getUTCDate());
\ts += zeroPad(d.getUTCHours());
\ts += zeroPad(d.getUTCMinutes());
\ts += zeroPad(d.getUTCSeconds());
\ts += 'Z';
\treturn (s);
}

function sign(cert, key) {
\tif (cert.signatures.x509 === undefined)
\t\tcert.signatures.x509 = {};
\tvar sig = cert.signatures.x509;

\tsig.algo = key.type + '-' + key.defaultHashAlgorithm();
\tif (SIGN_ALGS[sig.algo] === undefined)
\t\treturn (false);

\tvar der = new asn1.BerWriter();
\twriteTBSCert(cert, der);
\tvar blob = der.buffer;
\tsig.cache = blob;

\tvar signer = key.createSign();
\tsigner.write(blob);
\tcert.signatures.x509.signature = signer.sign();

\treturn (true);
}

function signAsync(cert, signer, done) {
\tif (cert.signatures.x509 === undefined)
\t\tcert.signatures.x509 = {};
\tvar sig = cert.signatures.x509;

\tvar der = new asn1.BerWriter();
\twriteTBSCert(cert, der);
\tvar blob = der.buffer;
\tsig.cache = blob;

\tsigner(blob, function (err, signature) {
\t\tif (err) {
\t\t\tdone(err);
\t\t\treturn;
\t\t}
\t\tsig.algo = signature.type + '-' + signature.hashAlgorithm;
\t\tif (SIGN_ALGS[sig.algo] === undefined) {
\t\t\tdone(new Error('Invalid signing algorithm \"' +
\t\t\t    sig.algo + '\"'));
\t\t\treturn;
\t\t}
\t\tsig.signature = signature;
\t\tdone();
\t});
}

function write(cert, options) {
\tvar sig = cert.signatures.x509;
\tassert.object(sig, 'x509 signature');

\tvar der = new asn1.BerWriter();
\tder.startSequence();
\tif (sig.cache) {
\t\tder._ensure(sig.cache.length);
\t\tsig.cache.copy(der._buf, der._offset);
\t\tder._offset += sig.cache.length;
\t} else {
\t\twriteTBSCert(cert, der);
\t}

\tder.startSequence();
\tder.writeOID(SIGN_ALGS[sig.algo]);
\tif (sig.algo.match(/^rsa-/))
\t\tder.writeNull();
\tder.endSequence();

\tvar sigData = sig.signature.toBuffer('asn1');
\tvar data = new Buffer(sigData.length + 1);
\tdata[0] = 0;
\tsigData.copy(data, 1);
\tder.writeBuffer(data, asn1.Ber.BitString);
\tder.endSequence();

\treturn (der.buffer);
}

function writeTBSCert(cert, der) {
\tvar sig = cert.signatures.x509;
\tassert.object(sig, 'x509 signature');

\tder.startSequence();

\tder.startSequence(Local(0));
\tder.writeInt(2);
\tder.endSequence();

\tder.writeBuffer(utils.mpNormalize(cert.serial), asn1.Ber.Integer);

\tder.startSequence();
\tder.writeOID(SIGN_ALGS[sig.algo]);
\tder.endSequence();

\tcert.issuer.toAsn1(der);

\tder.startSequence();
\tder.writeString(dateToUTCTime(cert.validFrom), asn1.Ber.UTCTime);
\tder.writeString(dateToUTCTime(cert.validUntil), asn1.Ber.UTCTime);
\tder.endSequence();

\tvar subject = cert.subjects[0];
\tvar altNames = cert.subjects.slice(1);
\tsubject.toAsn1(der);

\tpkcs8.writePkcs8(der, cert.subjectKey);

\tif (sig.extras && sig.extras.issuerUniqueID) {
\t\tder.writeBuffer(sig.extras.issuerUniqueID, Local(1));
\t}

\tif (sig.extras && sig.extras.subjectUniqueID) {
\t\tder.writeBuffer(sig.extras.subjectUniqueID, Local(2));
\t}

\tif (altNames.length > 0 || subject.type === 'host' ||
\t    (cert.purposes !== undefined && cert.purposes.length > 0) ||
\t    (sig.extras && sig.extras.exts)) {
\t\tder.startSequence(Local(3));
\t\tder.startSequence();

\t\tvar exts = [];
\t\tif (cert.purposes !== undefined && cert.purposes.length > 0) {
\t\t\texts.push({
\t\t\t\toid: EXTS.basicConstraints,
\t\t\t\tcritical: true
\t\t\t});
\t\t\texts.push({
\t\t\t\toid: EXTS.keyUsage,
\t\t\t\tcritical: true
\t\t\t});
\t\t\texts.push({
\t\t\t\toid: EXTS.extKeyUsage,
\t\t\t\tcritical: true
\t\t\t});
\t\t}
\t\texts.push({ oid: EXTS.altName });
\t\tif (sig.extras && sig.extras.exts)
\t\t\texts = sig.extras.exts;

\t\tfor (var i = 0; i < exts.length; ++i) {
\t\t\tder.startSequence();
\t\t\tder.writeOID(exts[i].oid);

\t\t\tif (exts[i].critical !== undefined)
\t\t\t\tder.writeBoolean(exts[i].critical);

\t\t\tif (exts[i].oid === EXTS.altName) {
\t\t\t\tder.startSequence(asn1.Ber.OctetString);
\t\t\t\tder.startSequence();
\t\t\t\tif (subject.type === 'host') {
\t\t\t\t\tder.writeString(subject.hostname,
\t\t\t\t\t    Context(2));
\t\t\t\t}
\t\t\t\tfor (var j = 0; j < altNames.length; ++j) {
\t\t\t\t\tif (altNames[j].type === 'host') {
\t\t\t\t\t\tder.writeString(
\t\t\t\t\t\t    altNames[j].hostname,
\t\t\t\t\t\t    ALTNAME.DNSName);
\t\t\t\t\t} else if (altNames[j].type ===
\t\t\t\t\t    'email') {
\t\t\t\t\t\tder.writeString(
\t\t\t\t\t\t    altNames[j].email,
\t\t\t\t\t\t    ALTNAME.RFC822Name);
\t\t\t\t\t} else {
\t\t\t\t\t\t/*
\t\t\t\t\t\t * Encode anything else as a
\t\t\t\t\t\t * DN style name for now.
\t\t\t\t\t\t */
\t\t\t\t\t\tder.startSequence(
\t\t\t\t\t\t    ALTNAME.DirectoryName);
\t\t\t\t\t\taltNames[j].toAsn1(der);
\t\t\t\t\t\tder.endSequence();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tder.endSequence();
\t\t\t\tder.endSequence();
\t\t\t} else if (exts[i].oid === EXTS.basicConstraints) {
\t\t\t\tder.startSequence(asn1.Ber.OctetString);
\t\t\t\tder.startSequence();
\t\t\t\tvar ca = (cert.purposes.indexOf('ca') !== -1);
\t\t\t\tvar pathLen = exts[i].pathLen;
\t\t\t\tder.writeBoolean(ca);
\t\t\t\tif (pathLen !== undefined)
\t\t\t\t\tder.writeInt(pathLen);
\t\t\t\tder.endSequence();
\t\t\t\tder.endSequence();
\t\t\t} else if (exts[i].oid === EXTS.extKeyUsage) {
\t\t\t\tder.startSequence(asn1.Ber.OctetString);
\t\t\t\tder.startSequence();
\t\t\t\tcert.purposes.forEach(function (purpose) {
\t\t\t\t\tif (purpose === 'ca')
\t\t\t\t\t\treturn;
\t\t\t\t\tif (KEYUSEBITS.indexOf(purpose) !== -1)
\t\t\t\t\t\treturn;
\t\t\t\t\tvar oid = purpose;
\t\t\t\t\tif (EXTPURPOSE[purpose] !== undefined)
\t\t\t\t\t\toid = EXTPURPOSE[purpose];
\t\t\t\t\tder.writeOID(oid);
\t\t\t\t});
\t\t\t\tder.endSequence();
\t\t\t\tder.endSequence();
\t\t\t} else if (exts[i].oid === EXTS.keyUsage) {
\t\t\t\tder.startSequence(asn1.Ber.OctetString);
\t\t\t\t/*
\t\t\t\t * If we parsed this certificate from a byte
\t\t\t\t * stream (i.e. we didn't generate it in sshpk)
\t\t\t\t * then we'll have a \".bits\" property on the
\t\t\t\t * ext with the original raw byte contents.
\t\t\t\t *
\t\t\t\t * If we have this, use it here instead of
\t\t\t\t * regenerating it. This guarantees we output
\t\t\t\t * the same data we parsed, so signatures still
\t\t\t\t * validate.
\t\t\t\t */
\t\t\t\tif (exts[i].bits !== undefined) {
\t\t\t\t\tder.writeBuffer(exts[i].bits,
\t\t\t\t\t    asn1.Ber.BitString);
\t\t\t\t} else {
\t\t\t\t\tvar bits = writeBitField(cert.purposes,
\t\t\t\t\t    KEYUSEBITS);
\t\t\t\t\tder.writeBuffer(bits,
\t\t\t\t\t    asn1.Ber.BitString);
\t\t\t\t}
\t\t\t\tder.endSequence();
\t\t\t} else {
\t\t\t\tder.writeBuffer(exts[i].data,
\t\t\t\t    asn1.Ber.OctetString);
\t\t\t}

\t\t\tder.endSequence();
\t\t}

\t\tder.endSequence();
\t\tder.endSequence();
\t}

\tder.endSequence();
}

/*
 * Reads an ASN.1 BER bitfield out of the Buffer produced by doing
 * `BerReader#readString(asn1.Ber.BitString)`. That function gives us the raw
 * contents of the BitString tag, which is a count of unused bits followed by
 * the bits as a right-padded byte string.
 *
 * `bits` is the Buffer, `bitIndex` should contain an array of string names
 * for the bits in the string, ordered starting with bit #0 in the ASN.1 spec.
 *
 * Returns an array of Strings, the names of the bits that were set to 1.
 */
function readBitField(bits, bitIndex) {
\tvar bitLen = 8 * (bits.length - 1) - bits[0];
\tvar setBits = {};
\tfor (var i = 0; i < bitLen; ++i) {
\t\tvar byteN = 1 + Math.floor(i / 8);
\t\tvar bit = 7 - (i % 8);
\t\tvar mask = 1 << bit;
\t\tvar bitVal = ((bits[byteN] & mask) !== 0);
\t\tvar name = bitIndex[i];
\t\tif (bitVal && typeof (name) === 'string') {
\t\t\tsetBits[name] = true;
\t\t}
\t}
\treturn (Object.keys(setBits));
}

/*
 * `setBits` is an array of strings, containing the names for each bit that
 * sould be set to 1. `bitIndex` is same as in `readBitField()`.
 *
 * Returns a Buffer, ready to be written out with `BerWriter#writeString()`.
 */
function writeBitField(setBits, bitIndex) {
\tvar bitLen = bitIndex.length;
\tvar blen = Math.ceil(bitLen / 8);
\tvar unused = blen * 8 - bitLen;
\tvar bits = new Buffer(1 + blen);
\tbits.fill(0);
\tbits[0] = unused;
\tfor (var i = 0; i < bitLen; ++i) {
\t\tvar byteN = 1 + Math.floor(i / 8);
\t\tvar bit = 7 - (i % 8);
\t\tvar mask = 1 << bit;
\t\tvar name = bitIndex[i];
\t\tif (name === undefined)
\t\t\tcontinue;
\t\tvar bitVal = (setBits.indexOf(name) !== -1);
\t\tif (bitVal) {
\t\t\tbits[byteN] |= mask;
\t\t}
\t}
\treturn (bits);
}
", "node_modules/sshpk/lib/formats/x509.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sshpk/lib/formats/x509.js");
    }
}
