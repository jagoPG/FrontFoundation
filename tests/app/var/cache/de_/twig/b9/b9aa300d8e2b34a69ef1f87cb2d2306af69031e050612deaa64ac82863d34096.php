<?php

/* node_modules/sshpk/lib/formats/ssh-private.js */
class __TwigTemplate_944d5b0cb8f1c7df5c37316a1dbab5a0212b7870c4e580c22d74f8d58b2c1e86 extends Twig_Template
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
        $__internal_9d48c37cf8db124bc116567ad8270f92c2a492ea1bdd50a980f13d56b31c0674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d48c37cf8db124bc116567ad8270f92c2a492ea1bdd50a980f13d56b31c0674->enter($__internal_9d48c37cf8db124bc116567ad8270f92c2a492ea1bdd50a980f13d56b31c0674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sshpk/lib/formats/ssh-private.js"));

        // line 1
        echo "// Copyright 2015 Joyent, Inc.

module.exports = {
\tread: read,
\treadSSHPrivate: readSSHPrivate,
\twrite: write
};

var assert = require('assert-plus');
var asn1 = require('asn1');
var algs = require('../algs');
var utils = require('../utils');
var crypto = require('crypto');

var Key = require('../key');
var PrivateKey = require('../private-key');
var pem = require('./pem');
var rfc4253 = require('./rfc4253');
var SSHBuffer = require('../ssh-buffer');
var errors = require('../errors');

var bcrypt;

function read(buf, options) {
\treturn (pem.read(buf, options));
}

var MAGIC = 'openssh-key-v1';

function readSSHPrivate(type, buf, options) {
\tbuf = new SSHBuffer({buffer: buf});

\tvar magic = buf.readCString();
\tassert.strictEqual(magic, MAGIC, 'bad magic string');

\tvar cipher = buf.readString();
\tvar kdf = buf.readString();
\tvar kdfOpts = buf.readBuffer();

\tvar nkeys = buf.readInt();
\tif (nkeys !== 1) {
\t\tthrow (new Error('OpenSSH-format key file contains ' +
\t\t    'multiple keys: this is unsupported.'));
\t}

\tvar pubKey = buf.readBuffer();

\tif (type === 'public') {
\t\tassert.ok(buf.atEnd(), 'excess bytes left after key');
\t\treturn (rfc4253.read(pubKey));
\t}

\tvar privKeyBlob = buf.readBuffer();
\tassert.ok(buf.atEnd(), 'excess bytes left after key');

\tvar kdfOptsBuf = new SSHBuffer({ buffer: kdfOpts });
\tswitch (kdf) {
\tcase 'none':
\t\tif (cipher !== 'none') {
\t\t\tthrow (new Error('OpenSSH-format key uses KDF \"none\" ' +
\t\t\t     'but specifies a cipher other than \"none\"'));
\t\t}
\t\tbreak;
\tcase 'bcrypt':
\t\tvar salt = kdfOptsBuf.readBuffer();
\t\tvar rounds = kdfOptsBuf.readInt();
\t\tvar cinf = utils.opensshCipherInfo(cipher);
\t\tif (bcrypt === undefined) {
\t\t\tbcrypt = require('bcrypt-pbkdf');
\t\t}

\t\tif (typeof (options.passphrase) === 'string') {
\t\t\toptions.passphrase = new Buffer(options.passphrase,
\t\t\t    'utf-8');
\t\t}
\t\tif (!Buffer.isBuffer(options.passphrase)) {
\t\t\tthrow (new errors.KeyEncryptedError(
\t\t\t    options.filename, 'OpenSSH'));
\t\t}

\t\tvar pass = new Uint8Array(options.passphrase);
\t\tvar salti = new Uint8Array(salt);
\t\t/* Use the pbkdf to derive both the key and the IV. */
\t\tvar out = new Uint8Array(cinf.keySize + cinf.blockSize);
\t\tvar res = bcrypt.pbkdf(pass, pass.length, salti, salti.length,
\t\t    out, out.length, rounds);
\t\tif (res !== 0) {
\t\t\tthrow (new Error('bcrypt_pbkdf function returned ' +
\t\t\t    'failure, parameters invalid'));
\t\t}
\t\tout = new Buffer(out);
\t\tvar ckey = out.slice(0, cinf.keySize);
\t\tvar iv = out.slice(cinf.keySize, cinf.keySize + cinf.blockSize);
\t\tvar cipherStream = crypto.createDecipheriv(cinf.opensslName,
\t\t    ckey, iv);
\t\tcipherStream.setAutoPadding(false);
\t\tvar chunk, chunks = [];
\t\tcipherStream.once('error', function (e) {
\t\t\tif (e.toString().indexOf('bad decrypt') !== -1) {
\t\t\t\tthrow (new Error('Incorrect passphrase ' +
\t\t\t\t    'supplied, could not decrypt key'));
\t\t\t}
\t\t\tthrow (e);
\t\t});
\t\tcipherStream.write(privKeyBlob);
\t\tcipherStream.end();
\t\twhile ((chunk = cipherStream.read()) !== null)
\t\t\tchunks.push(chunk);
\t\tprivKeyBlob = Buffer.concat(chunks);
\t\tbreak;
\tdefault:
\t\tthrow (new Error(
\t\t    'OpenSSH-format key uses unknown KDF \"' + kdf + '\"'));
\t}

\tbuf = new SSHBuffer({buffer: privKeyBlob});

\tvar checkInt1 = buf.readInt();
\tvar checkInt2 = buf.readInt();
\tif (checkInt1 !== checkInt2) {
\t\tthrow (new Error('Incorrect passphrase supplied, could not ' +
\t\t    'decrypt key'));
\t}

\tvar ret = {};
\tvar key = rfc4253.readInternal(ret, 'private', buf.remainder());

\tbuf.skip(ret.consumed);

\tvar comment = buf.readString();
\tkey.comment = comment;

\treturn (key);
}

function write(key, options) {
\tvar pubKey;
\tif (PrivateKey.isPrivateKey(key))
\t\tpubKey = key.toPublic();
\telse
\t\tpubKey = key;

\tvar cipher = 'none';
\tvar kdf = 'none';
\tvar kdfopts = new Buffer(0);
\tvar cinf = { blockSize: 8 };
\tvar passphrase;
\tif (options !== undefined) {
\t\tpassphrase = options.passphrase;
\t\tif (typeof (passphrase) === 'string')
\t\t\tpassphrase = new Buffer(passphrase, 'utf-8');
\t\tif (passphrase !== undefined) {
\t\t\tassert.buffer(passphrase, 'options.passphrase');
\t\t\tassert.optionalString(options.cipher, 'options.cipher');
\t\t\tcipher = options.cipher;
\t\t\tif (cipher === undefined)
\t\t\t\tcipher = 'aes128-ctr';
\t\t\tcinf = utils.opensshCipherInfo(cipher);
\t\t\tkdf = 'bcrypt';
\t\t}
\t}

\tvar privBuf;
\tif (PrivateKey.isPrivateKey(key)) {
\t\tprivBuf = new SSHBuffer({});
\t\tvar checkInt = crypto.randomBytes(4).readUInt32BE(0);
\t\tprivBuf.writeInt(checkInt);
\t\tprivBuf.writeInt(checkInt);
\t\tprivBuf.write(key.toBuffer('rfc4253'));
\t\tprivBuf.writeString(key.comment || '');

\t\tvar n = 1;
\t\twhile (privBuf._offset % cinf.blockSize !== 0)
\t\t\tprivBuf.writeChar(n++);
\t\tprivBuf = privBuf.toBuffer();
\t}

\tswitch (kdf) {
\tcase 'none':
\t\tbreak;
\tcase 'bcrypt':
\t\tvar salt = crypto.randomBytes(16);
\t\tvar rounds = 16;
\t\tvar kdfssh = new SSHBuffer({});
\t\tkdfssh.writeBuffer(salt);
\t\tkdfssh.writeInt(rounds);
\t\tkdfopts = kdfssh.toBuffer();

\t\tif (bcrypt === undefined) {
\t\t\tbcrypt = require('bcrypt-pbkdf');
\t\t}
\t\tvar pass = new Uint8Array(passphrase);
\t\tvar salti = new Uint8Array(salt);
\t\t/* Use the pbkdf to derive both the key and the IV. */
\t\tvar out = new Uint8Array(cinf.keySize + cinf.blockSize);
\t\tvar res = bcrypt.pbkdf(pass, pass.length, salti, salti.length,
\t\t    out, out.length, rounds);
\t\tif (res !== 0) {
\t\t\tthrow (new Error('bcrypt_pbkdf function returned ' +
\t\t\t    'failure, parameters invalid'));
\t\t}
\t\tout = new Buffer(out);
\t\tvar ckey = out.slice(0, cinf.keySize);
\t\tvar iv = out.slice(cinf.keySize, cinf.keySize + cinf.blockSize);

\t\tvar cipherStream = crypto.createCipheriv(cinf.opensslName,
\t\t    ckey, iv);
\t\tcipherStream.setAutoPadding(false);
\t\tvar chunk, chunks = [];
\t\tcipherStream.once('error', function (e) {
\t\t\tthrow (e);
\t\t});
\t\tcipherStream.write(privBuf);
\t\tcipherStream.end();
\t\twhile ((chunk = cipherStream.read()) !== null)
\t\t\tchunks.push(chunk);
\t\tprivBuf = Buffer.concat(chunks);
\t\tbreak;
\tdefault:
\t\tthrow (new Error('Unsupported kdf ' + kdf));
\t}

\tvar buf = new SSHBuffer({});

\tbuf.writeCString(MAGIC);
\tbuf.writeString(cipher);\t/* cipher */
\tbuf.writeString(kdf);\t\t/* kdf */
\tbuf.writeBuffer(kdfopts);\t/* kdfoptions */

\tbuf.writeInt(1);\t\t/* nkeys */
\tbuf.writeBuffer(pubKey.toBuffer('rfc4253'));

\tif (privBuf)
\t\tbuf.writeBuffer(privBuf);

\tbuf = buf.toBuffer();

\tvar header;
\tif (PrivateKey.isPrivateKey(key))
\t\theader = 'OPENSSH PRIVATE KEY';
\telse
\t\theader = 'OPENSSH PUBLIC KEY';

\tvar tmp = buf.toString('base64');
\tvar len = tmp.length + (tmp.length / 70) +
\t    18 + 16 + header.length*2 + 10;
\tbuf = new Buffer(len);
\tvar o = 0;
\to += buf.write('-----BEGIN ' + header + '-----\\n', o);
\tfor (var i = 0; i < tmp.length; ) {
\t\tvar limit = i + 70;
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
        
        $__internal_9d48c37cf8db124bc116567ad8270f92c2a492ea1bdd50a980f13d56b31c0674->leave($__internal_9d48c37cf8db124bc116567ad8270f92c2a492ea1bdd50a980f13d56b31c0674_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sshpk/lib/formats/ssh-private.js";
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
\treadSSHPrivate: readSSHPrivate,
\twrite: write
};

var assert = require('assert-plus');
var asn1 = require('asn1');
var algs = require('../algs');
var utils = require('../utils');
var crypto = require('crypto');

var Key = require('../key');
var PrivateKey = require('../private-key');
var pem = require('./pem');
var rfc4253 = require('./rfc4253');
var SSHBuffer = require('../ssh-buffer');
var errors = require('../errors');

var bcrypt;

function read(buf, options) {
\treturn (pem.read(buf, options));
}

var MAGIC = 'openssh-key-v1';

function readSSHPrivate(type, buf, options) {
\tbuf = new SSHBuffer({buffer: buf});

\tvar magic = buf.readCString();
\tassert.strictEqual(magic, MAGIC, 'bad magic string');

\tvar cipher = buf.readString();
\tvar kdf = buf.readString();
\tvar kdfOpts = buf.readBuffer();

\tvar nkeys = buf.readInt();
\tif (nkeys !== 1) {
\t\tthrow (new Error('OpenSSH-format key file contains ' +
\t\t    'multiple keys: this is unsupported.'));
\t}

\tvar pubKey = buf.readBuffer();

\tif (type === 'public') {
\t\tassert.ok(buf.atEnd(), 'excess bytes left after key');
\t\treturn (rfc4253.read(pubKey));
\t}

\tvar privKeyBlob = buf.readBuffer();
\tassert.ok(buf.atEnd(), 'excess bytes left after key');

\tvar kdfOptsBuf = new SSHBuffer({ buffer: kdfOpts });
\tswitch (kdf) {
\tcase 'none':
\t\tif (cipher !== 'none') {
\t\t\tthrow (new Error('OpenSSH-format key uses KDF \"none\" ' +
\t\t\t     'but specifies a cipher other than \"none\"'));
\t\t}
\t\tbreak;
\tcase 'bcrypt':
\t\tvar salt = kdfOptsBuf.readBuffer();
\t\tvar rounds = kdfOptsBuf.readInt();
\t\tvar cinf = utils.opensshCipherInfo(cipher);
\t\tif (bcrypt === undefined) {
\t\t\tbcrypt = require('bcrypt-pbkdf');
\t\t}

\t\tif (typeof (options.passphrase) === 'string') {
\t\t\toptions.passphrase = new Buffer(options.passphrase,
\t\t\t    'utf-8');
\t\t}
\t\tif (!Buffer.isBuffer(options.passphrase)) {
\t\t\tthrow (new errors.KeyEncryptedError(
\t\t\t    options.filename, 'OpenSSH'));
\t\t}

\t\tvar pass = new Uint8Array(options.passphrase);
\t\tvar salti = new Uint8Array(salt);
\t\t/* Use the pbkdf to derive both the key and the IV. */
\t\tvar out = new Uint8Array(cinf.keySize + cinf.blockSize);
\t\tvar res = bcrypt.pbkdf(pass, pass.length, salti, salti.length,
\t\t    out, out.length, rounds);
\t\tif (res !== 0) {
\t\t\tthrow (new Error('bcrypt_pbkdf function returned ' +
\t\t\t    'failure, parameters invalid'));
\t\t}
\t\tout = new Buffer(out);
\t\tvar ckey = out.slice(0, cinf.keySize);
\t\tvar iv = out.slice(cinf.keySize, cinf.keySize + cinf.blockSize);
\t\tvar cipherStream = crypto.createDecipheriv(cinf.opensslName,
\t\t    ckey, iv);
\t\tcipherStream.setAutoPadding(false);
\t\tvar chunk, chunks = [];
\t\tcipherStream.once('error', function (e) {
\t\t\tif (e.toString().indexOf('bad decrypt') !== -1) {
\t\t\t\tthrow (new Error('Incorrect passphrase ' +
\t\t\t\t    'supplied, could not decrypt key'));
\t\t\t}
\t\t\tthrow (e);
\t\t});
\t\tcipherStream.write(privKeyBlob);
\t\tcipherStream.end();
\t\twhile ((chunk = cipherStream.read()) !== null)
\t\t\tchunks.push(chunk);
\t\tprivKeyBlob = Buffer.concat(chunks);
\t\tbreak;
\tdefault:
\t\tthrow (new Error(
\t\t    'OpenSSH-format key uses unknown KDF \"' + kdf + '\"'));
\t}

\tbuf = new SSHBuffer({buffer: privKeyBlob});

\tvar checkInt1 = buf.readInt();
\tvar checkInt2 = buf.readInt();
\tif (checkInt1 !== checkInt2) {
\t\tthrow (new Error('Incorrect passphrase supplied, could not ' +
\t\t    'decrypt key'));
\t}

\tvar ret = {};
\tvar key = rfc4253.readInternal(ret, 'private', buf.remainder());

\tbuf.skip(ret.consumed);

\tvar comment = buf.readString();
\tkey.comment = comment;

\treturn (key);
}

function write(key, options) {
\tvar pubKey;
\tif (PrivateKey.isPrivateKey(key))
\t\tpubKey = key.toPublic();
\telse
\t\tpubKey = key;

\tvar cipher = 'none';
\tvar kdf = 'none';
\tvar kdfopts = new Buffer(0);
\tvar cinf = { blockSize: 8 };
\tvar passphrase;
\tif (options !== undefined) {
\t\tpassphrase = options.passphrase;
\t\tif (typeof (passphrase) === 'string')
\t\t\tpassphrase = new Buffer(passphrase, 'utf-8');
\t\tif (passphrase !== undefined) {
\t\t\tassert.buffer(passphrase, 'options.passphrase');
\t\t\tassert.optionalString(options.cipher, 'options.cipher');
\t\t\tcipher = options.cipher;
\t\t\tif (cipher === undefined)
\t\t\t\tcipher = 'aes128-ctr';
\t\t\tcinf = utils.opensshCipherInfo(cipher);
\t\t\tkdf = 'bcrypt';
\t\t}
\t}

\tvar privBuf;
\tif (PrivateKey.isPrivateKey(key)) {
\t\tprivBuf = new SSHBuffer({});
\t\tvar checkInt = crypto.randomBytes(4).readUInt32BE(0);
\t\tprivBuf.writeInt(checkInt);
\t\tprivBuf.writeInt(checkInt);
\t\tprivBuf.write(key.toBuffer('rfc4253'));
\t\tprivBuf.writeString(key.comment || '');

\t\tvar n = 1;
\t\twhile (privBuf._offset % cinf.blockSize !== 0)
\t\t\tprivBuf.writeChar(n++);
\t\tprivBuf = privBuf.toBuffer();
\t}

\tswitch (kdf) {
\tcase 'none':
\t\tbreak;
\tcase 'bcrypt':
\t\tvar salt = crypto.randomBytes(16);
\t\tvar rounds = 16;
\t\tvar kdfssh = new SSHBuffer({});
\t\tkdfssh.writeBuffer(salt);
\t\tkdfssh.writeInt(rounds);
\t\tkdfopts = kdfssh.toBuffer();

\t\tif (bcrypt === undefined) {
\t\t\tbcrypt = require('bcrypt-pbkdf');
\t\t}
\t\tvar pass = new Uint8Array(passphrase);
\t\tvar salti = new Uint8Array(salt);
\t\t/* Use the pbkdf to derive both the key and the IV. */
\t\tvar out = new Uint8Array(cinf.keySize + cinf.blockSize);
\t\tvar res = bcrypt.pbkdf(pass, pass.length, salti, salti.length,
\t\t    out, out.length, rounds);
\t\tif (res !== 0) {
\t\t\tthrow (new Error('bcrypt_pbkdf function returned ' +
\t\t\t    'failure, parameters invalid'));
\t\t}
\t\tout = new Buffer(out);
\t\tvar ckey = out.slice(0, cinf.keySize);
\t\tvar iv = out.slice(cinf.keySize, cinf.keySize + cinf.blockSize);

\t\tvar cipherStream = crypto.createCipheriv(cinf.opensslName,
\t\t    ckey, iv);
\t\tcipherStream.setAutoPadding(false);
\t\tvar chunk, chunks = [];
\t\tcipherStream.once('error', function (e) {
\t\t\tthrow (e);
\t\t});
\t\tcipherStream.write(privBuf);
\t\tcipherStream.end();
\t\twhile ((chunk = cipherStream.read()) !== null)
\t\t\tchunks.push(chunk);
\t\tprivBuf = Buffer.concat(chunks);
\t\tbreak;
\tdefault:
\t\tthrow (new Error('Unsupported kdf ' + kdf));
\t}

\tvar buf = new SSHBuffer({});

\tbuf.writeCString(MAGIC);
\tbuf.writeString(cipher);\t/* cipher */
\tbuf.writeString(kdf);\t\t/* kdf */
\tbuf.writeBuffer(kdfopts);\t/* kdfoptions */

\tbuf.writeInt(1);\t\t/* nkeys */
\tbuf.writeBuffer(pubKey.toBuffer('rfc4253'));

\tif (privBuf)
\t\tbuf.writeBuffer(privBuf);

\tbuf = buf.toBuffer();

\tvar header;
\tif (PrivateKey.isPrivateKey(key))
\t\theader = 'OPENSSH PRIVATE KEY';
\telse
\t\theader = 'OPENSSH PUBLIC KEY';

\tvar tmp = buf.toString('base64');
\tvar len = tmp.length + (tmp.length / 70) +
\t    18 + 16 + header.length*2 + 10;
\tbuf = new Buffer(len);
\tvar o = 0;
\to += buf.write('-----BEGIN ' + header + '-----\\n', o);
\tfor (var i = 0; i < tmp.length; ) {
\t\tvar limit = i + 70;
\t\tif (limit > tmp.length)
\t\t\tlimit = tmp.length;
\t\to += buf.write(tmp.slice(i, limit), o);
\t\tbuf[o++] = 10;
\t\ti = limit;
\t}
\to += buf.write('-----END ' + header + '-----\\n', o);

\treturn (buf.slice(0, o));
}
", "node_modules/sshpk/lib/formats/ssh-private.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sshpk/lib/formats/ssh-private.js");
    }
}
