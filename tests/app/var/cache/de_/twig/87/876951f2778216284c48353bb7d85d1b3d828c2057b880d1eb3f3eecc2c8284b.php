<?php

/* node_modules/sshpk/lib/formats/pem.js */
class __TwigTemplate_d992c60bb69ddb1a7a9ca60f639d2f3a74d5732e19d761edc34769694efbfe9f extends Twig_Template
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
        $__internal_d4067495d68e740facebadae781e7d53a0c1537515416a132a9a342c45fe3ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4067495d68e740facebadae781e7d53a0c1537515416a132a9a342c45fe3ad2->enter($__internal_d4067495d68e740facebadae781e7d53a0c1537515416a132a9a342c45fe3ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sshpk/lib/formats/pem.js"));

        // line 1
        echo "// Copyright 2015 Joyent, Inc.

module.exports = {
\tread: read,
\twrite: write
};

var assert = require('assert-plus');
var asn1 = require('asn1');
var crypto = require('crypto');
var algs = require('../algs');
var utils = require('../utils');
var Key = require('../key');
var PrivateKey = require('../private-key');

var pkcs1 = require('./pkcs1');
var pkcs8 = require('./pkcs8');
var sshpriv = require('./ssh-private');
var rfc4253 = require('./rfc4253');

var errors = require('../errors');

/*
 * For reading we support both PKCS#1 and PKCS#8. If we find a private key,
 * we just take the public component of it and use that.
 */
function read(buf, options, forceType) {
\tvar input = buf;
\tif (typeof (buf) !== 'string') {
\t\tassert.buffer(buf, 'buf');
\t\tbuf = buf.toString('ascii');
\t}

\tvar lines = buf.trim().split('\\n');

\tvar m = lines[0].match(/*JSSTYLED*/
\t    /[-]+[ ]*BEGIN ([A-Z0-9]+ )?(PUBLIC|PRIVATE) KEY[ ]*[-]+/);
\tassert.ok(m, 'invalid PEM header');

\tvar m2 = lines[lines.length - 1].match(/*JSSTYLED*/
\t    /[-]+[ ]*END ([A-Z0-9]+ )?(PUBLIC|PRIVATE) KEY[ ]*[-]+/);
\tassert.ok(m2, 'invalid PEM footer');

\t/* Begin and end banners must match key type */
\tassert.equal(m[2], m2[2]);
\tvar type = m[2].toLowerCase();

\tvar alg;
\tif (m[1]) {
\t\t/* They also must match algorithms, if given */
\t\tassert.equal(m[1], m2[1], 'PEM header and footer mismatch');
\t\talg = m[1].trim();
\t}

\tvar headers = {};
\twhile (true) {
\t\tlines = lines.slice(1);
\t\tm = lines[0].match(/*JSSTYLED*/
\t\t    /^([A-Za-z0-9-]+): (.+)\$/);
\t\tif (!m)
\t\t\tbreak;
\t\theaders[m[1].toLowerCase()] = m[2];
\t}

\tvar cipher, key, iv;
\tif (headers['proc-type']) {
\t\tvar parts = headers['proc-type'].split(',');
\t\tif (parts[0] === '4' && parts[1] === 'ENCRYPTED') {
\t\t\tif (typeof (options.passphrase) === 'string') {
\t\t\t\toptions.passphrase = new Buffer(
\t\t\t\t    options.passphrase, 'utf-8');
\t\t\t}
\t\t\tif (!Buffer.isBuffer(options.passphrase)) {
\t\t\t\tthrow (new errors.KeyEncryptedError(
\t\t\t\t    options.filename, 'PEM'));
\t\t\t} else {
\t\t\t\tparts = headers['dek-info'].split(',');
\t\t\t\tassert.ok(parts.length === 2);
\t\t\t\tcipher = parts[0].toLowerCase();
\t\t\t\tiv = new Buffer(parts[1], 'hex');
\t\t\t\tkey = utils.opensslKeyDeriv(cipher, iv,
\t\t\t\t    options.passphrase, 1).key;
\t\t\t}
\t\t}
\t}

\t/* Chop off the first and last lines */
\tlines = lines.slice(0, -1).join('');
\tbuf = new Buffer(lines, 'base64');

\tif (cipher && key && iv) {
\t\tvar cipherStream = crypto.createDecipheriv(cipher, key, iv);
\t\tvar chunk, chunks = [];
\t\tcipherStream.once('error', function (e) {
\t\t\tif (e.toString().indexOf('bad decrypt') !== -1) {
\t\t\t\tthrow (new Error('Incorrect passphrase ' +
\t\t\t\t    'supplied, could not decrypt key'));
\t\t\t}
\t\t\tthrow (e);
\t\t});
\t\tcipherStream.write(buf);
\t\tcipherStream.end();
\t\twhile ((chunk = cipherStream.read()) !== null)
\t\t\tchunks.push(chunk);
\t\tbuf = Buffer.concat(chunks);
\t}

\t/* The new OpenSSH internal format abuses PEM headers */
\tif (alg && alg.toLowerCase() === 'openssh')
\t\treturn (sshpriv.readSSHPrivate(type, buf, options));
\tif (alg && alg.toLowerCase() === 'ssh2')
\t\treturn (rfc4253.readType(type, buf, options));

\tvar der = new asn1.BerReader(buf);
\tder.originalInput = input;

\t/*
\t * All of the PEM file types start with a sequence tag, so chop it
\t * off here
\t */
\tder.readSequence();

\t/* PKCS#1 type keys name an algorithm in the banner explicitly */
\tif (alg) {
\t\tif (forceType)
\t\t\tassert.strictEqual(forceType, 'pkcs1');
\t\treturn (pkcs1.readPkcs1(alg, type, der));
\t} else {
\t\tif (forceType)
\t\t\tassert.strictEqual(forceType, 'pkcs8');
\t\treturn (pkcs8.readPkcs8(alg, type, der));
\t}
}

function write(key, options, type) {
\tassert.object(key);

\tvar alg = {'ecdsa': 'EC', 'rsa': 'RSA', 'dsa': 'DSA'}[key.type];
\tvar header;

\tvar der = new asn1.BerWriter();

\tif (PrivateKey.isPrivateKey(key)) {
\t\tif (type && type === 'pkcs8') {
\t\t\theader = 'PRIVATE KEY';
\t\t\tpkcs8.writePkcs8(der, key);
\t\t} else {
\t\t\tif (type)
\t\t\t\tassert.strictEqual(type, 'pkcs1');
\t\t\theader = alg + ' PRIVATE KEY';
\t\t\tpkcs1.writePkcs1(der, key);
\t\t}

\t} else if (Key.isKey(key)) {
\t\tif (type && type === 'pkcs1') {
\t\t\theader = alg + ' PUBLIC KEY';
\t\t\tpkcs1.writePkcs1(der, key);
\t\t} else {
\t\t\tif (type)
\t\t\t\tassert.strictEqual(type, 'pkcs8');
\t\t\theader = 'PUBLIC KEY';
\t\t\tpkcs8.writePkcs8(der, key);
\t\t}

\t} else {
\t\tthrow (new Error('key is not a Key or PrivateKey'));
\t}

\tvar tmp = der.buffer.toString('base64');
\tvar len = tmp.length + (tmp.length / 64) +
\t    18 + 16 + header.length*2 + 10;
\tvar buf = new Buffer(len);
\tvar o = 0;
\to += buf.write('-----BEGIN ' + header + '-----\\n', o);
\tfor (var i = 0; i < tmp.length; ) {
\t\tvar limit = i + 64;
\t\tif (limit > tmp.length)
\t\t\tlimit = tmp.length;
\t\to += buf.write(tmp.slice(i, limit), o);
\t\tbuf[o++] = 10;
\t\ti = limit;
\t}
\to += buf.write('-----END ' + header + '-----\\n', o);

\treturn (buf.slice(0, o));
}
";
        
        $__internal_d4067495d68e740facebadae781e7d53a0c1537515416a132a9a342c45fe3ad2->leave($__internal_d4067495d68e740facebadae781e7d53a0c1537515416a132a9a342c45fe3ad2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sshpk/lib/formats/pem.js";
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
\twrite: write
};

var assert = require('assert-plus');
var asn1 = require('asn1');
var crypto = require('crypto');
var algs = require('../algs');
var utils = require('../utils');
var Key = require('../key');
var PrivateKey = require('../private-key');

var pkcs1 = require('./pkcs1');
var pkcs8 = require('./pkcs8');
var sshpriv = require('./ssh-private');
var rfc4253 = require('./rfc4253');

var errors = require('../errors');

/*
 * For reading we support both PKCS#1 and PKCS#8. If we find a private key,
 * we just take the public component of it and use that.
 */
function read(buf, options, forceType) {
\tvar input = buf;
\tif (typeof (buf) !== 'string') {
\t\tassert.buffer(buf, 'buf');
\t\tbuf = buf.toString('ascii');
\t}

\tvar lines = buf.trim().split('\\n');

\tvar m = lines[0].match(/*JSSTYLED*/
\t    /[-]+[ ]*BEGIN ([A-Z0-9]+ )?(PUBLIC|PRIVATE) KEY[ ]*[-]+/);
\tassert.ok(m, 'invalid PEM header');

\tvar m2 = lines[lines.length - 1].match(/*JSSTYLED*/
\t    /[-]+[ ]*END ([A-Z0-9]+ )?(PUBLIC|PRIVATE) KEY[ ]*[-]+/);
\tassert.ok(m2, 'invalid PEM footer');

\t/* Begin and end banners must match key type */
\tassert.equal(m[2], m2[2]);
\tvar type = m[2].toLowerCase();

\tvar alg;
\tif (m[1]) {
\t\t/* They also must match algorithms, if given */
\t\tassert.equal(m[1], m2[1], 'PEM header and footer mismatch');
\t\talg = m[1].trim();
\t}

\tvar headers = {};
\twhile (true) {
\t\tlines = lines.slice(1);
\t\tm = lines[0].match(/*JSSTYLED*/
\t\t    /^([A-Za-z0-9-]+): (.+)\$/);
\t\tif (!m)
\t\t\tbreak;
\t\theaders[m[1].toLowerCase()] = m[2];
\t}

\tvar cipher, key, iv;
\tif (headers['proc-type']) {
\t\tvar parts = headers['proc-type'].split(',');
\t\tif (parts[0] === '4' && parts[1] === 'ENCRYPTED') {
\t\t\tif (typeof (options.passphrase) === 'string') {
\t\t\t\toptions.passphrase = new Buffer(
\t\t\t\t    options.passphrase, 'utf-8');
\t\t\t}
\t\t\tif (!Buffer.isBuffer(options.passphrase)) {
\t\t\t\tthrow (new errors.KeyEncryptedError(
\t\t\t\t    options.filename, 'PEM'));
\t\t\t} else {
\t\t\t\tparts = headers['dek-info'].split(',');
\t\t\t\tassert.ok(parts.length === 2);
\t\t\t\tcipher = parts[0].toLowerCase();
\t\t\t\tiv = new Buffer(parts[1], 'hex');
\t\t\t\tkey = utils.opensslKeyDeriv(cipher, iv,
\t\t\t\t    options.passphrase, 1).key;
\t\t\t}
\t\t}
\t}

\t/* Chop off the first and last lines */
\tlines = lines.slice(0, -1).join('');
\tbuf = new Buffer(lines, 'base64');

\tif (cipher && key && iv) {
\t\tvar cipherStream = crypto.createDecipheriv(cipher, key, iv);
\t\tvar chunk, chunks = [];
\t\tcipherStream.once('error', function (e) {
\t\t\tif (e.toString().indexOf('bad decrypt') !== -1) {
\t\t\t\tthrow (new Error('Incorrect passphrase ' +
\t\t\t\t    'supplied, could not decrypt key'));
\t\t\t}
\t\t\tthrow (e);
\t\t});
\t\tcipherStream.write(buf);
\t\tcipherStream.end();
\t\twhile ((chunk = cipherStream.read()) !== null)
\t\t\tchunks.push(chunk);
\t\tbuf = Buffer.concat(chunks);
\t}

\t/* The new OpenSSH internal format abuses PEM headers */
\tif (alg && alg.toLowerCase() === 'openssh')
\t\treturn (sshpriv.readSSHPrivate(type, buf, options));
\tif (alg && alg.toLowerCase() === 'ssh2')
\t\treturn (rfc4253.readType(type, buf, options));

\tvar der = new asn1.BerReader(buf);
\tder.originalInput = input;

\t/*
\t * All of the PEM file types start with a sequence tag, so chop it
\t * off here
\t */
\tder.readSequence();

\t/* PKCS#1 type keys name an algorithm in the banner explicitly */
\tif (alg) {
\t\tif (forceType)
\t\t\tassert.strictEqual(forceType, 'pkcs1');
\t\treturn (pkcs1.readPkcs1(alg, type, der));
\t} else {
\t\tif (forceType)
\t\t\tassert.strictEqual(forceType, 'pkcs8');
\t\treturn (pkcs8.readPkcs8(alg, type, der));
\t}
}

function write(key, options, type) {
\tassert.object(key);

\tvar alg = {'ecdsa': 'EC', 'rsa': 'RSA', 'dsa': 'DSA'}[key.type];
\tvar header;

\tvar der = new asn1.BerWriter();

\tif (PrivateKey.isPrivateKey(key)) {
\t\tif (type && type === 'pkcs8') {
\t\t\theader = 'PRIVATE KEY';
\t\t\tpkcs8.writePkcs8(der, key);
\t\t} else {
\t\t\tif (type)
\t\t\t\tassert.strictEqual(type, 'pkcs1');
\t\t\theader = alg + ' PRIVATE KEY';
\t\t\tpkcs1.writePkcs1(der, key);
\t\t}

\t} else if (Key.isKey(key)) {
\t\tif (type && type === 'pkcs1') {
\t\t\theader = alg + ' PUBLIC KEY';
\t\t\tpkcs1.writePkcs1(der, key);
\t\t} else {
\t\t\tif (type)
\t\t\t\tassert.strictEqual(type, 'pkcs8');
\t\t\theader = 'PUBLIC KEY';
\t\t\tpkcs8.writePkcs8(der, key);
\t\t}

\t} else {
\t\tthrow (new Error('key is not a Key or PrivateKey'));
\t}

\tvar tmp = der.buffer.toString('base64');
\tvar len = tmp.length + (tmp.length / 64) +
\t    18 + 16 + header.length*2 + 10;
\tvar buf = new Buffer(len);
\tvar o = 0;
\to += buf.write('-----BEGIN ' + header + '-----\\n', o);
\tfor (var i = 0; i < tmp.length; ) {
\t\tvar limit = i + 64;
\t\tif (limit > tmp.length)
\t\t\tlimit = tmp.length;
\t\to += buf.write(tmp.slice(i, limit), o);
\t\tbuf[o++] = 10;
\t\ti = limit;
\t}
\to += buf.write('-----END ' + header + '-----\\n', o);

\treturn (buf.slice(0, o));
}
", "node_modules/sshpk/lib/formats/pem.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sshpk/lib/formats/pem.js");
    }
}
