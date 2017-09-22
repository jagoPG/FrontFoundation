<?php

/* node_modules/create-ecdh/browser.js */
class __TwigTemplate_3f0769557c89a2eea3ab0add7f7c7f9880433b6dadbbcb14753b5a0c86e053ff extends Twig_Template
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
        $__internal_3dcefa8bdea9c7de3bba9730dfb9b48092a52d42b77c700cd40fcd69db2a9136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dcefa8bdea9c7de3bba9730dfb9b48092a52d42b77c700cd40fcd69db2a9136->enter($__internal_3dcefa8bdea9c7de3bba9730dfb9b48092a52d42b77c700cd40fcd69db2a9136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/create-ecdh/browser.js"));

        // line 1
        echo "var elliptic = require('elliptic');
var BN = require('bn.js');

module.exports = function createECDH(curve) {
\treturn new ECDH(curve);
};

var aliases = {
\tsecp256k1: {
\t\tname: 'secp256k1',
\t\tbyteLength: 32
\t},
\tsecp224r1: {
\t\tname: 'p224',
\t\tbyteLength: 28
\t},
\tprime256v1: {
\t\tname: 'p256',
\t\tbyteLength: 32
\t},
\tprime192v1: {
\t\tname: 'p192',
\t\tbyteLength: 24
\t},
\ted25519: {
\t\tname: 'ed25519',
\t\tbyteLength: 32
\t},
\tsecp384r1: {
\t\tname: 'p384',
\t\tbyteLength: 48
\t},
\tsecp521r1: {
\t\tname: 'p521',
\t\tbyteLength: 66
\t}
};

aliases.p224 = aliases.secp224r1;
aliases.p256 = aliases.secp256r1 = aliases.prime256v1;
aliases.p192 = aliases.secp192r1 = aliases.prime192v1;
aliases.p384 = aliases.secp384r1;
aliases.p521 = aliases.secp521r1;

function ECDH(curve) {
\tthis.curveType = aliases[curve];
\tif (!this.curveType ) {
\t\tthis.curveType = {
\t\t\tname: curve
\t\t};
\t}
\tthis.curve = new elliptic.ec(this.curveType.name);
\tthis.keys = void 0;
}

ECDH.prototype.generateKeys = function (enc, format) {
\tthis.keys = this.curve.genKeyPair();
\treturn this.getPublicKey(enc, format);
};

ECDH.prototype.computeSecret = function (other, inenc, enc) {
\tinenc = inenc || 'utf8';
\tif (!Buffer.isBuffer(other)) {
\t\tother = new Buffer(other, inenc);
\t}
\tvar otherPub = this.curve.keyFromPublic(other).getPublic();
\tvar out = otherPub.mul(this.keys.getPrivate()).getX();
\treturn formatReturnValue(out, enc, this.curveType.byteLength);
};

ECDH.prototype.getPublicKey = function (enc, format) {
\tvar key = this.keys.getPublic(format === 'compressed', true);
\tif (format === 'hybrid') {
\t\tif (key[key.length - 1] % 2) {
\t\t\tkey[0] = 7;
\t\t} else {
\t\t\tkey [0] = 6;
\t\t}
\t}
\treturn formatReturnValue(key, enc);
};

ECDH.prototype.getPrivateKey = function (enc) {
\treturn formatReturnValue(this.keys.getPrivate(), enc);
};

ECDH.prototype.setPublicKey = function (pub, enc) {
\tenc = enc || 'utf8';
\tif (!Buffer.isBuffer(pub)) {
\t\tpub = new Buffer(pub, enc);
\t}
\tthis.keys._importPublic(pub);
\treturn this;
};

ECDH.prototype.setPrivateKey = function (priv, enc) {
\tenc = enc || 'utf8';
\tif (!Buffer.isBuffer(priv)) {
\t\tpriv = new Buffer(priv, enc);
\t}
\tvar _priv = new BN(priv);
\t_priv = _priv.toString(16);
\tthis.keys._importPrivate(_priv);
\treturn this;
};

function formatReturnValue(bn, enc, len) {
\tif (!Array.isArray(bn)) {
\t\tbn = bn.toArray();
\t}
\tvar buf = new Buffer(bn);
\tif (len && buf.length < len) {
\t\tvar zeros = new Buffer(len - buf.length);
\t\tzeros.fill(0);
\t\tbuf = Buffer.concat([zeros, buf]);
\t}
\tif (!enc) {
\t\treturn buf;
\t} else {
\t\treturn buf.toString(enc);
\t}
}
";
        
        $__internal_3dcefa8bdea9c7de3bba9730dfb9b48092a52d42b77c700cd40fcd69db2a9136->leave($__internal_3dcefa8bdea9c7de3bba9730dfb9b48092a52d42b77c700cd40fcd69db2a9136_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/create-ecdh/browser.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var elliptic = require('elliptic');
var BN = require('bn.js');

module.exports = function createECDH(curve) {
\treturn new ECDH(curve);
};

var aliases = {
\tsecp256k1: {
\t\tname: 'secp256k1',
\t\tbyteLength: 32
\t},
\tsecp224r1: {
\t\tname: 'p224',
\t\tbyteLength: 28
\t},
\tprime256v1: {
\t\tname: 'p256',
\t\tbyteLength: 32
\t},
\tprime192v1: {
\t\tname: 'p192',
\t\tbyteLength: 24
\t},
\ted25519: {
\t\tname: 'ed25519',
\t\tbyteLength: 32
\t},
\tsecp384r1: {
\t\tname: 'p384',
\t\tbyteLength: 48
\t},
\tsecp521r1: {
\t\tname: 'p521',
\t\tbyteLength: 66
\t}
};

aliases.p224 = aliases.secp224r1;
aliases.p256 = aliases.secp256r1 = aliases.prime256v1;
aliases.p192 = aliases.secp192r1 = aliases.prime192v1;
aliases.p384 = aliases.secp384r1;
aliases.p521 = aliases.secp521r1;

function ECDH(curve) {
\tthis.curveType = aliases[curve];
\tif (!this.curveType ) {
\t\tthis.curveType = {
\t\t\tname: curve
\t\t};
\t}
\tthis.curve = new elliptic.ec(this.curveType.name);
\tthis.keys = void 0;
}

ECDH.prototype.generateKeys = function (enc, format) {
\tthis.keys = this.curve.genKeyPair();
\treturn this.getPublicKey(enc, format);
};

ECDH.prototype.computeSecret = function (other, inenc, enc) {
\tinenc = inenc || 'utf8';
\tif (!Buffer.isBuffer(other)) {
\t\tother = new Buffer(other, inenc);
\t}
\tvar otherPub = this.curve.keyFromPublic(other).getPublic();
\tvar out = otherPub.mul(this.keys.getPrivate()).getX();
\treturn formatReturnValue(out, enc, this.curveType.byteLength);
};

ECDH.prototype.getPublicKey = function (enc, format) {
\tvar key = this.keys.getPublic(format === 'compressed', true);
\tif (format === 'hybrid') {
\t\tif (key[key.length - 1] % 2) {
\t\t\tkey[0] = 7;
\t\t} else {
\t\t\tkey [0] = 6;
\t\t}
\t}
\treturn formatReturnValue(key, enc);
};

ECDH.prototype.getPrivateKey = function (enc) {
\treturn formatReturnValue(this.keys.getPrivate(), enc);
};

ECDH.prototype.setPublicKey = function (pub, enc) {
\tenc = enc || 'utf8';
\tif (!Buffer.isBuffer(pub)) {
\t\tpub = new Buffer(pub, enc);
\t}
\tthis.keys._importPublic(pub);
\treturn this;
};

ECDH.prototype.setPrivateKey = function (priv, enc) {
\tenc = enc || 'utf8';
\tif (!Buffer.isBuffer(priv)) {
\t\tpriv = new Buffer(priv, enc);
\t}
\tvar _priv = new BN(priv);
\t_priv = _priv.toString(16);
\tthis.keys._importPrivate(_priv);
\treturn this;
};

function formatReturnValue(bn, enc, len) {
\tif (!Array.isArray(bn)) {
\t\tbn = bn.toArray();
\t}
\tvar buf = new Buffer(bn);
\tif (len && buf.length < len) {
\t\tvar zeros = new Buffer(len - buf.length);
\t\tzeros.fill(0);
\t\tbuf = Buffer.concat([zeros, buf]);
\t}
\tif (!enc) {
\t\treturn buf;
\t} else {
\t\treturn buf.toString(enc);
\t}
}
", "node_modules/create-ecdh/browser.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/create-ecdh/browser.js");
    }
}
