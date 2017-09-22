<?php

/* node_modules/fsevents/node_modules/sshpk/lib/utils.js */
class __TwigTemplate_68dd91541c204a360c3bbe73f435c9d47fbd0ba5502b00843014d297eb2ee9fd extends Twig_Template
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
        $__internal_ef4fdbaead357d4aecf36858957433baf2dc7000a788ae147b121fc4068a39ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef4fdbaead357d4aecf36858957433baf2dc7000a788ae147b121fc4068a39ee->enter($__internal_ef4fdbaead357d4aecf36858957433baf2dc7000a788ae147b121fc4068a39ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/sshpk/lib/utils.js"));

        // line 1
        echo "// Copyright 2015 Joyent, Inc.

module.exports = {
\tbufferSplit: bufferSplit,
\taddRSAMissing: addRSAMissing,
\tcalculateDSAPublic: calculateDSAPublic,
\tmpNormalize: mpNormalize,
\tecNormalize: ecNormalize,
\tcountZeros: countZeros,
\tassertCompatible: assertCompatible,
\tisCompatible: isCompatible,
\topensslKeyDeriv: opensslKeyDeriv,
\topensshCipherInfo: opensshCipherInfo
};

var assert = require('assert-plus');
var PrivateKey = require('./private-key');
var crypto = require('crypto');

var MAX_CLASS_DEPTH = 3;

function isCompatible(obj, klass, needVer) {
\tif (obj === null || typeof (obj) !== 'object')
\t\treturn (false);
\tif (needVer === undefined)
\t\tneedVer = klass.prototype._sshpkApiVersion;
\tif (obj instanceof klass &&
\t    klass.prototype._sshpkApiVersion[0] == needVer[0])
\t\treturn (true);
\tvar proto = Object.getPrototypeOf(obj);
\tvar depth = 0;
\twhile (proto.constructor.name !== klass.name) {
\t\tproto = Object.getPrototypeOf(proto);
\t\tif (!proto || ++depth > MAX_CLASS_DEPTH)
\t\t\treturn (false);
\t}
\tif (proto.constructor.name !== klass.name)
\t\treturn (false);
\tvar ver = proto._sshpkApiVersion;
\tif (ver === undefined)
\t\tver = klass._oldVersionDetect(obj);
\tif (ver[0] != needVer[0] || ver[1] < needVer[1])
\t\treturn (false);
\treturn (true);
}

function assertCompatible(obj, klass, needVer, name) {
\tif (name === undefined)
\t\tname = 'object';
\tassert.ok(obj, name + ' must not be null');
\tassert.object(obj, name + ' must be an object');
\tif (needVer === undefined)
\t\tneedVer = klass.prototype._sshpkApiVersion;
\tif (obj instanceof klass &&
\t    klass.prototype._sshpkApiVersion[0] == needVer[0])
\t\treturn;
\tvar proto = Object.getPrototypeOf(obj);
\tvar depth = 0;
\twhile (proto.constructor.name !== klass.name) {
\t\tproto = Object.getPrototypeOf(proto);
\t\tassert.ok(proto && ++depth <= MAX_CLASS_DEPTH,
\t\t    name + ' must be a ' + klass.name + ' instance');
\t}
\tassert.strictEqual(proto.constructor.name, klass.name,
\t    name + ' must be a ' + klass.name + ' instance');
\tvar ver = proto._sshpkApiVersion;
\tif (ver === undefined)
\t\tver = klass._oldVersionDetect(obj);
\tassert.ok(ver[0] == needVer[0] && ver[1] >= needVer[1],
\t    name + ' must be compatible with ' + klass.name + ' klass ' +
\t    'version ' + needVer[0] + '.' + needVer[1]);
}

var CIPHER_LEN = {
\t'des-ede3-cbc': { key: 7, iv: 8 },
\t'aes-128-cbc': { key: 16, iv: 16 }
};
var PKCS5_SALT_LEN = 8;

function opensslKeyDeriv(cipher, salt, passphrase, count) {
\tassert.buffer(salt, 'salt');
\tassert.buffer(passphrase, 'passphrase');
\tassert.number(count, 'iteration count');

\tvar clen = CIPHER_LEN[cipher];
\tassert.object(clen, 'supported cipher');

\tsalt = salt.slice(0, PKCS5_SALT_LEN);

\tvar D, D_prev, bufs;
\tvar material = new Buffer(0);
\twhile (material.length < clen.key + clen.iv) {
\t\tbufs = [];
\t\tif (D_prev)
\t\t\tbufs.push(D_prev);
\t\tbufs.push(passphrase);
\t\tbufs.push(salt);
\t\tD = Buffer.concat(bufs);
\t\tfor (var j = 0; j < count; ++j)
\t\t\tD = crypto.createHash('md5').update(D).digest();
\t\tmaterial = Buffer.concat([material, D]);
\t\tD_prev = D;
\t}

\treturn ({
\t    key: material.slice(0, clen.key),
\t    iv: material.slice(clen.key, clen.key + clen.iv)
\t});
}

/* Count leading zero bits on a buffer */
function countZeros(buf) {
\tvar o = 0, obit = 8;
\twhile (o < buf.length) {
\t\tvar mask = (1 << obit);
\t\tif ((buf[o] & mask) === mask)
\t\t\tbreak;
\t\tobit--;
\t\tif (obit < 0) {
\t\t\to++;
\t\t\tobit = 8;
\t\t}
\t}
\treturn (o*8 + (8 - obit) - 1);
}

function bufferSplit(buf, chr) {
\tassert.buffer(buf);
\tassert.string(chr);

\tvar parts = [];
\tvar lastPart = 0;
\tvar matches = 0;
\tfor (var i = 0; i < buf.length; ++i) {
\t\tif (buf[i] === chr.charCodeAt(matches))
\t\t\t++matches;
\t\telse if (buf[i] === chr.charCodeAt(0))
\t\t\tmatches = 1;
\t\telse
\t\t\tmatches = 0;

\t\tif (matches >= chr.length) {
\t\t\tvar newPart = i + 1;
\t\t\tparts.push(buf.slice(lastPart, newPart - matches));
\t\t\tlastPart = newPart;
\t\t\tmatches = 0;
\t\t}
\t}
\tif (lastPart <= buf.length)
\t\tparts.push(buf.slice(lastPart, buf.length));

\treturn (parts);
}

function ecNormalize(buf, addZero) {
\tassert.buffer(buf);
\tif (buf[0] === 0x00 && buf[1] === 0x04) {
\t\tif (addZero)
\t\t\treturn (buf);
\t\treturn (buf.slice(1));
\t} else if (buf[0] === 0x04) {
\t\tif (!addZero)
\t\t\treturn (buf);
\t} else {
\t\twhile (buf[0] === 0x00)
\t\t\tbuf = buf.slice(1);
\t\tif (buf[0] === 0x02 || buf[0] === 0x03)
\t\t\tthrow (new Error('Compressed elliptic curve points ' +
\t\t\t    'are not supported'));
\t\tif (buf[0] !== 0x04)
\t\t\tthrow (new Error('Not a valid elliptic curve point'));
\t\tif (!addZero)
\t\t\treturn (buf);
\t}
\tvar b = new Buffer(buf.length + 1);
\tb[0] = 0x0;
\tbuf.copy(b, 1);
\treturn (b);
}

function mpNormalize(buf) {
\tassert.buffer(buf);
\twhile (buf.length > 1 && buf[0] === 0x00 && (buf[1] & 0x80) === 0x00)
\t\tbuf = buf.slice(1);
\tif ((buf[0] & 0x80) === 0x80) {
\t\tvar b = new Buffer(buf.length + 1);
\t\tb[0] = 0x00;
\t\tbuf.copy(b, 1);
\t\tbuf = b;
\t}
\treturn (buf);
}

function bigintToMpBuf(bigint) {
\tvar buf = new Buffer(bigint.toByteArray());
\tbuf = mpNormalize(buf);
\treturn (buf);
}

function calculateDSAPublic(g, p, x) {
\tassert.buffer(g);
\tassert.buffer(p);
\tassert.buffer(x);
\ttry {
\t\tvar bigInt = require('jsbn').BigInteger;
\t} catch (e) {
\t\tthrow (new Error('To load a PKCS#8 format DSA private key, ' +
\t\t    'the node jsbn library is required.'));
\t}
\tg = new bigInt(g);
\tp = new bigInt(p);
\tx = new bigInt(x);
\tvar y = g.modPow(x, p);
\tvar ybuf = bigintToMpBuf(y);
\treturn (ybuf);
}

function addRSAMissing(key) {
\tassert.object(key);
\tassertCompatible(key, PrivateKey, [1, 1]);
\ttry {
\t\tvar bigInt = require('jsbn').BigInteger;
\t} catch (e) {
\t\tthrow (new Error('To write a PEM private key from ' +
\t\t    'this source, the node jsbn lib is required.'));
\t}

\tvar d = new bigInt(key.part.d.data);
\tvar buf;

\tif (!key.part.dmodp) {
\t\tvar p = new bigInt(key.part.p.data);
\t\tvar dmodp = d.mod(p.subtract(1));

\t\tbuf = bigintToMpBuf(dmodp);
\t\tkey.part.dmodp = {name: 'dmodp', data: buf};
\t\tkey.parts.push(key.part.dmodp);
\t}
\tif (!key.part.dmodq) {
\t\tvar q = new bigInt(key.part.q.data);
\t\tvar dmodq = d.mod(q.subtract(1));

\t\tbuf = bigintToMpBuf(dmodq);
\t\tkey.part.dmodq = {name: 'dmodq', data: buf};
\t\tkey.parts.push(key.part.dmodq);
\t}
}

function opensshCipherInfo(cipher) {
\tvar inf = {};
\tswitch (cipher) {
\tcase '3des-cbc':
\t\tinf.keySize = 24;
\t\tinf.blockSize = 8;
\t\tinf.opensslName = 'des-ede3-cbc';
\t\tbreak;
\tcase 'blowfish-cbc':
\t\tinf.keySize = 16;
\t\tinf.blockSize = 8;
\t\tinf.opensslName = 'bf-cbc';
\t\tbreak;
\tcase 'aes128-cbc':
\tcase 'aes128-ctr':
\tcase 'aes128-gcm@openssh.com':
\t\tinf.keySize = 16;
\t\tinf.blockSize = 16;
\t\tinf.opensslName = 'aes-128-' + cipher.slice(7, 10);
\t\tbreak;
\tcase 'aes192-cbc':
\tcase 'aes192-ctr':
\tcase 'aes192-gcm@openssh.com':
\t\tinf.keySize = 24;
\t\tinf.blockSize = 16;
\t\tinf.opensslName = 'aes-192-' + cipher.slice(7, 10);
\t\tbreak;
\tcase 'aes256-cbc':
\tcase 'aes256-ctr':
\tcase 'aes256-gcm@openssh.com':
\t\tinf.keySize = 32;
\t\tinf.blockSize = 16;
\t\tinf.opensslName = 'aes-256-' + cipher.slice(7, 10);
\t\tbreak;
\tdefault:
\t\tthrow (new Error(
\t\t    'Unsupported openssl cipher \"' + cipher + '\"'));
\t}
\treturn (inf);
}
";
        
        $__internal_ef4fdbaead357d4aecf36858957433baf2dc7000a788ae147b121fc4068a39ee->leave($__internal_ef4fdbaead357d4aecf36858957433baf2dc7000a788ae147b121fc4068a39ee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/sshpk/lib/utils.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Copyright 2015 Joyent, Inc.

module.exports = {
\tbufferSplit: bufferSplit,
\taddRSAMissing: addRSAMissing,
\tcalculateDSAPublic: calculateDSAPublic,
\tmpNormalize: mpNormalize,
\tecNormalize: ecNormalize,
\tcountZeros: countZeros,
\tassertCompatible: assertCompatible,
\tisCompatible: isCompatible,
\topensslKeyDeriv: opensslKeyDeriv,
\topensshCipherInfo: opensshCipherInfo
};

var assert = require('assert-plus');
var PrivateKey = require('./private-key');
var crypto = require('crypto');

var MAX_CLASS_DEPTH = 3;

function isCompatible(obj, klass, needVer) {
\tif (obj === null || typeof (obj) !== 'object')
\t\treturn (false);
\tif (needVer === undefined)
\t\tneedVer = klass.prototype._sshpkApiVersion;
\tif (obj instanceof klass &&
\t    klass.prototype._sshpkApiVersion[0] == needVer[0])
\t\treturn (true);
\tvar proto = Object.getPrototypeOf(obj);
\tvar depth = 0;
\twhile (proto.constructor.name !== klass.name) {
\t\tproto = Object.getPrototypeOf(proto);
\t\tif (!proto || ++depth > MAX_CLASS_DEPTH)
\t\t\treturn (false);
\t}
\tif (proto.constructor.name !== klass.name)
\t\treturn (false);
\tvar ver = proto._sshpkApiVersion;
\tif (ver === undefined)
\t\tver = klass._oldVersionDetect(obj);
\tif (ver[0] != needVer[0] || ver[1] < needVer[1])
\t\treturn (false);
\treturn (true);
}

function assertCompatible(obj, klass, needVer, name) {
\tif (name === undefined)
\t\tname = 'object';
\tassert.ok(obj, name + ' must not be null');
\tassert.object(obj, name + ' must be an object');
\tif (needVer === undefined)
\t\tneedVer = klass.prototype._sshpkApiVersion;
\tif (obj instanceof klass &&
\t    klass.prototype._sshpkApiVersion[0] == needVer[0])
\t\treturn;
\tvar proto = Object.getPrototypeOf(obj);
\tvar depth = 0;
\twhile (proto.constructor.name !== klass.name) {
\t\tproto = Object.getPrototypeOf(proto);
\t\tassert.ok(proto && ++depth <= MAX_CLASS_DEPTH,
\t\t    name + ' must be a ' + klass.name + ' instance');
\t}
\tassert.strictEqual(proto.constructor.name, klass.name,
\t    name + ' must be a ' + klass.name + ' instance');
\tvar ver = proto._sshpkApiVersion;
\tif (ver === undefined)
\t\tver = klass._oldVersionDetect(obj);
\tassert.ok(ver[0] == needVer[0] && ver[1] >= needVer[1],
\t    name + ' must be compatible with ' + klass.name + ' klass ' +
\t    'version ' + needVer[0] + '.' + needVer[1]);
}

var CIPHER_LEN = {
\t'des-ede3-cbc': { key: 7, iv: 8 },
\t'aes-128-cbc': { key: 16, iv: 16 }
};
var PKCS5_SALT_LEN = 8;

function opensslKeyDeriv(cipher, salt, passphrase, count) {
\tassert.buffer(salt, 'salt');
\tassert.buffer(passphrase, 'passphrase');
\tassert.number(count, 'iteration count');

\tvar clen = CIPHER_LEN[cipher];
\tassert.object(clen, 'supported cipher');

\tsalt = salt.slice(0, PKCS5_SALT_LEN);

\tvar D, D_prev, bufs;
\tvar material = new Buffer(0);
\twhile (material.length < clen.key + clen.iv) {
\t\tbufs = [];
\t\tif (D_prev)
\t\t\tbufs.push(D_prev);
\t\tbufs.push(passphrase);
\t\tbufs.push(salt);
\t\tD = Buffer.concat(bufs);
\t\tfor (var j = 0; j < count; ++j)
\t\t\tD = crypto.createHash('md5').update(D).digest();
\t\tmaterial = Buffer.concat([material, D]);
\t\tD_prev = D;
\t}

\treturn ({
\t    key: material.slice(0, clen.key),
\t    iv: material.slice(clen.key, clen.key + clen.iv)
\t});
}

/* Count leading zero bits on a buffer */
function countZeros(buf) {
\tvar o = 0, obit = 8;
\twhile (o < buf.length) {
\t\tvar mask = (1 << obit);
\t\tif ((buf[o] & mask) === mask)
\t\t\tbreak;
\t\tobit--;
\t\tif (obit < 0) {
\t\t\to++;
\t\t\tobit = 8;
\t\t}
\t}
\treturn (o*8 + (8 - obit) - 1);
}

function bufferSplit(buf, chr) {
\tassert.buffer(buf);
\tassert.string(chr);

\tvar parts = [];
\tvar lastPart = 0;
\tvar matches = 0;
\tfor (var i = 0; i < buf.length; ++i) {
\t\tif (buf[i] === chr.charCodeAt(matches))
\t\t\t++matches;
\t\telse if (buf[i] === chr.charCodeAt(0))
\t\t\tmatches = 1;
\t\telse
\t\t\tmatches = 0;

\t\tif (matches >= chr.length) {
\t\t\tvar newPart = i + 1;
\t\t\tparts.push(buf.slice(lastPart, newPart - matches));
\t\t\tlastPart = newPart;
\t\t\tmatches = 0;
\t\t}
\t}
\tif (lastPart <= buf.length)
\t\tparts.push(buf.slice(lastPart, buf.length));

\treturn (parts);
}

function ecNormalize(buf, addZero) {
\tassert.buffer(buf);
\tif (buf[0] === 0x00 && buf[1] === 0x04) {
\t\tif (addZero)
\t\t\treturn (buf);
\t\treturn (buf.slice(1));
\t} else if (buf[0] === 0x04) {
\t\tif (!addZero)
\t\t\treturn (buf);
\t} else {
\t\twhile (buf[0] === 0x00)
\t\t\tbuf = buf.slice(1);
\t\tif (buf[0] === 0x02 || buf[0] === 0x03)
\t\t\tthrow (new Error('Compressed elliptic curve points ' +
\t\t\t    'are not supported'));
\t\tif (buf[0] !== 0x04)
\t\t\tthrow (new Error('Not a valid elliptic curve point'));
\t\tif (!addZero)
\t\t\treturn (buf);
\t}
\tvar b = new Buffer(buf.length + 1);
\tb[0] = 0x0;
\tbuf.copy(b, 1);
\treturn (b);
}

function mpNormalize(buf) {
\tassert.buffer(buf);
\twhile (buf.length > 1 && buf[0] === 0x00 && (buf[1] & 0x80) === 0x00)
\t\tbuf = buf.slice(1);
\tif ((buf[0] & 0x80) === 0x80) {
\t\tvar b = new Buffer(buf.length + 1);
\t\tb[0] = 0x00;
\t\tbuf.copy(b, 1);
\t\tbuf = b;
\t}
\treturn (buf);
}

function bigintToMpBuf(bigint) {
\tvar buf = new Buffer(bigint.toByteArray());
\tbuf = mpNormalize(buf);
\treturn (buf);
}

function calculateDSAPublic(g, p, x) {
\tassert.buffer(g);
\tassert.buffer(p);
\tassert.buffer(x);
\ttry {
\t\tvar bigInt = require('jsbn').BigInteger;
\t} catch (e) {
\t\tthrow (new Error('To load a PKCS#8 format DSA private key, ' +
\t\t    'the node jsbn library is required.'));
\t}
\tg = new bigInt(g);
\tp = new bigInt(p);
\tx = new bigInt(x);
\tvar y = g.modPow(x, p);
\tvar ybuf = bigintToMpBuf(y);
\treturn (ybuf);
}

function addRSAMissing(key) {
\tassert.object(key);
\tassertCompatible(key, PrivateKey, [1, 1]);
\ttry {
\t\tvar bigInt = require('jsbn').BigInteger;
\t} catch (e) {
\t\tthrow (new Error('To write a PEM private key from ' +
\t\t    'this source, the node jsbn lib is required.'));
\t}

\tvar d = new bigInt(key.part.d.data);
\tvar buf;

\tif (!key.part.dmodp) {
\t\tvar p = new bigInt(key.part.p.data);
\t\tvar dmodp = d.mod(p.subtract(1));

\t\tbuf = bigintToMpBuf(dmodp);
\t\tkey.part.dmodp = {name: 'dmodp', data: buf};
\t\tkey.parts.push(key.part.dmodp);
\t}
\tif (!key.part.dmodq) {
\t\tvar q = new bigInt(key.part.q.data);
\t\tvar dmodq = d.mod(q.subtract(1));

\t\tbuf = bigintToMpBuf(dmodq);
\t\tkey.part.dmodq = {name: 'dmodq', data: buf};
\t\tkey.parts.push(key.part.dmodq);
\t}
}

function opensshCipherInfo(cipher) {
\tvar inf = {};
\tswitch (cipher) {
\tcase '3des-cbc':
\t\tinf.keySize = 24;
\t\tinf.blockSize = 8;
\t\tinf.opensslName = 'des-ede3-cbc';
\t\tbreak;
\tcase 'blowfish-cbc':
\t\tinf.keySize = 16;
\t\tinf.blockSize = 8;
\t\tinf.opensslName = 'bf-cbc';
\t\tbreak;
\tcase 'aes128-cbc':
\tcase 'aes128-ctr':
\tcase 'aes128-gcm@openssh.com':
\t\tinf.keySize = 16;
\t\tinf.blockSize = 16;
\t\tinf.opensslName = 'aes-128-' + cipher.slice(7, 10);
\t\tbreak;
\tcase 'aes192-cbc':
\tcase 'aes192-ctr':
\tcase 'aes192-gcm@openssh.com':
\t\tinf.keySize = 24;
\t\tinf.blockSize = 16;
\t\tinf.opensslName = 'aes-192-' + cipher.slice(7, 10);
\t\tbreak;
\tcase 'aes256-cbc':
\tcase 'aes256-ctr':
\tcase 'aes256-gcm@openssh.com':
\t\tinf.keySize = 32;
\t\tinf.blockSize = 16;
\t\tinf.opensslName = 'aes-256-' + cipher.slice(7, 10);
\t\tbreak;
\tdefault:
\t\tthrow (new Error(
\t\t    'Unsupported openssl cipher \"' + cipher + '\"'));
\t}
\treturn (inf);
}
", "node_modules/fsevents/node_modules/sshpk/lib/utils.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/sshpk/lib/utils.js");
    }
}
