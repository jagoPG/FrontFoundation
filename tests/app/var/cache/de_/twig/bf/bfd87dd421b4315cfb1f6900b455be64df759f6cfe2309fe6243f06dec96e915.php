<?php

/* node_modules/sshpk/lib/identity.js */
class __TwigTemplate_93f194f92fc695f2b489e44c9b8a8635910cc1508383ba24c6a44cb361970162 extends Twig_Template
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
        $__internal_4325235845fd8784e3b6790f447a13c68fb73a4694f9a88180992ed358f24230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4325235845fd8784e3b6790f447a13c68fb73a4694f9a88180992ed358f24230->enter($__internal_4325235845fd8784e3b6790f447a13c68fb73a4694f9a88180992ed358f24230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sshpk/lib/identity.js"));

        // line 1
        echo "// Copyright 2017 Joyent, Inc.

module.exports = Identity;

var assert = require('assert-plus');
var algs = require('./algs');
var crypto = require('crypto');
var Fingerprint = require('./fingerprint');
var Signature = require('./signature');
var errs = require('./errors');
var util = require('util');
var utils = require('./utils');
var asn1 = require('asn1');

/*JSSTYLED*/
var DNS_NAME_RE = /^([*]|[a-z0-9][a-z0-9\\-]{0,62})(?:\\.([*]|[a-z0-9][a-z0-9\\-]{0,62}))*\$/i;

var oids = {};
oids.cn = '2.5.4.3';
oids.o = '2.5.4.10';
oids.ou = '2.5.4.11';
oids.l = '2.5.4.7';
oids.s = '2.5.4.8';
oids.c = '2.5.4.6';
oids.sn = '2.5.4.4';
oids.dc = '0.9.2342.19200300.100.1.25';
oids.uid = '0.9.2342.19200300.100.1.1';
oids.mail = '0.9.2342.19200300.100.1.3';

var unoids = {};
Object.keys(oids).forEach(function (k) {
\tunoids[oids[k]] = k;
});

function Identity(opts) {
\tvar self = this;
\tassert.object(opts, 'options');
\tassert.arrayOfObject(opts.components, 'options.components');
\tthis.components = opts.components;
\tthis.componentLookup = {};
\tthis.components.forEach(function (c) {
\t\tif (c.name && !c.oid)
\t\t\tc.oid = oids[c.name];
\t\tif (c.oid && !c.name)
\t\t\tc.name = unoids[c.oid];
\t\tif (self.componentLookup[c.name] === undefined)
\t\t\tself.componentLookup[c.name] = [];
\t\tself.componentLookup[c.name].push(c);
\t});
\tif (this.componentLookup.cn && this.componentLookup.cn.length > 0) {
\t\tthis.cn = this.componentLookup.cn[0].value;
\t}
\tassert.optionalString(opts.type, 'options.type');
\tif (opts.type === undefined) {
\t\tif (this.components.length === 1 &&
\t\t    this.componentLookup.cn &&
\t\t    this.componentLookup.cn.length === 1 &&
\t\t    this.componentLookup.cn[0].value.match(DNS_NAME_RE)) {
\t\t\tthis.type = 'host';
\t\t\tthis.hostname = this.componentLookup.cn[0].value;

\t\t} else if (this.componentLookup.dc &&
\t\t    this.components.length === this.componentLookup.dc.length) {
\t\t\tthis.type = 'host';
\t\t\tthis.hostname = this.componentLookup.dc.map(
\t\t\t    function (c) {
\t\t\t\treturn (c.value);
\t\t\t}).join('.');

\t\t} else if (this.componentLookup.uid &&
\t\t    this.components.length ===
\t\t    this.componentLookup.uid.length) {
\t\t\tthis.type = 'user';
\t\t\tthis.uid = this.componentLookup.uid[0].value;

\t\t} else if (this.componentLookup.cn &&
\t\t    this.componentLookup.cn.length === 1 &&
\t\t    this.componentLookup.cn[0].value.match(DNS_NAME_RE)) {
\t\t\tthis.type = 'host';
\t\t\tthis.hostname = this.componentLookup.cn[0].value;

\t\t} else if (this.componentLookup.uid &&
\t\t    this.componentLookup.uid.length === 1) {
\t\t\tthis.type = 'user';
\t\t\tthis.uid = this.componentLookup.uid[0].value;

\t\t} else if (this.componentLookup.mail &&
\t\t    this.componentLookup.mail.length === 1) {
\t\t\tthis.type = 'email';
\t\t\tthis.email = this.componentLookup.mail[0].value;

\t\t} else if (this.componentLookup.cn &&
\t\t    this.componentLookup.cn.length === 1) {
\t\t\tthis.type = 'user';
\t\t\tthis.uid = this.componentLookup.cn[0].value;

\t\t} else {
\t\t\tthis.type = 'unknown';
\t\t}
\t} else {
\t\tthis.type = opts.type;
\t\tif (this.type === 'host')
\t\t\tthis.hostname = opts.hostname;
\t\telse if (this.type === 'user')
\t\t\tthis.uid = opts.uid;
\t\telse if (this.type === 'email')
\t\t\tthis.email = opts.email;
\t\telse
\t\t\tthrow (new Error('Unknown type ' + this.type));
\t}
}

Identity.prototype.toString = function () {
\treturn (this.components.map(function (c) {
\t\treturn (c.name.toUpperCase() + '=' + c.value);
\t}).join(', '));
};

/*
 * These are from X.680 -- PrintableString allowed chars are in section 37.4
 * table 8. Spec for IA5Strings is \"1,6 + SPACE + DEL\" where 1 refers to
 * ISO IR #001 (standard ASCII control characters) and 6 refers to ISO IR #006
 * (the basic ASCII character set).
 */
/* JSSTYLED */
var NOT_PRINTABLE = /[^a-zA-Z0-9 '(),+.\\/:=?-]/;
/* JSSTYLED */
var NOT_IA5 = /[^\\x00-\\x7f]/;

Identity.prototype.toAsn1 = function (der, tag) {
\tder.startSequence(tag);
\tthis.components.forEach(function (c) {
\t\tder.startSequence(asn1.Ber.Constructor | asn1.Ber.Set);
\t\tder.startSequence();
\t\tder.writeOID(c.oid);
\t\t/*
\t\t * If we fit in a PrintableString, use that. Otherwise use an
\t\t * IA5String or UTF8String.
\t\t */
\t\tif (c.value.match(NOT_IA5)) {
\t\t\tvar v = new Buffer(c.value, 'utf8');
\t\t\tder.writeBuffer(v, asn1.Ber.Utf8String);
\t\t} else if (c.value.match(NOT_PRINTABLE)) {
\t\t\tder.writeString(c.value, asn1.Ber.IA5String);
\t\t} else {
\t\t\tder.writeString(c.value, asn1.Ber.PrintableString);
\t\t}
\t\tder.endSequence();
\t\tder.endSequence();
\t});
\tder.endSequence();
};

function globMatch(a, b) {
\tif (a === '**' || b === '**')
\t\treturn (true);
\tvar aParts = a.split('.');
\tvar bParts = b.split('.');
\tif (aParts.length !== bParts.length)
\t\treturn (false);
\tfor (var i = 0; i < aParts.length; ++i) {
\t\tif (aParts[i] === '*' || bParts[i] === '*')
\t\t\tcontinue;
\t\tif (aParts[i] !== bParts[i])
\t\t\treturn (false);
\t}
\treturn (true);
}

Identity.prototype.equals = function (other) {
\tif (!Identity.isIdentity(other, [1, 0]))
\t\treturn (false);
\tif (other.components.length !== this.components.length)
\t\treturn (false);
\tfor (var i = 0; i < this.components.length; ++i) {
\t\tif (this.components[i].oid !== other.components[i].oid)
\t\t\treturn (false);
\t\tif (!globMatch(this.components[i].value,
\t\t    other.components[i].value)) {
\t\t\treturn (false);
\t\t}
\t}
\treturn (true);
};

Identity.forHost = function (hostname) {
\tassert.string(hostname, 'hostname');
\treturn (new Identity({
\t\ttype: 'host',
\t\thostname: hostname,
\t\tcomponents: [ { name: 'cn', value: hostname } ]
\t}));
};

Identity.forUser = function (uid) {
\tassert.string(uid, 'uid');
\treturn (new Identity({
\t\ttype: 'user',
\t\tuid: uid,
\t\tcomponents: [ { name: 'uid', value: uid } ]
\t}));
};

Identity.forEmail = function (email) {
\tassert.string(email, 'email');
\treturn (new Identity({
\t\ttype: 'email',
\t\temail: email,
\t\tcomponents: [ { name: 'mail', value: email } ]
\t}));
};

Identity.parseDN = function (dn) {
\tassert.string(dn, 'dn');
\tvar parts = dn.split(',');
\tvar cmps = parts.map(function (c) {
\t\tc = c.trim();
\t\tvar eqPos = c.indexOf('=');
\t\tvar name = c.slice(0, eqPos).toLowerCase();
\t\tvar value = c.slice(eqPos + 1);
\t\treturn ({ name: name, value: value });
\t});
\treturn (new Identity({ components: cmps }));
};

Identity.parseAsn1 = function (der, top) {
\tvar components = [];
\tder.readSequence(top);
\tvar end = der.offset + der.length;
\twhile (der.offset < end) {
\t\tder.readSequence(asn1.Ber.Constructor | asn1.Ber.Set);
\t\tvar after = der.offset + der.length;
\t\tder.readSequence();
\t\tvar oid = der.readOID();
\t\tvar type = der.peek();
\t\tvar value;
\t\tswitch (type) {
\t\tcase asn1.Ber.PrintableString:
\t\tcase asn1.Ber.IA5String:
\t\tcase asn1.Ber.OctetString:
\t\tcase asn1.Ber.T61String:
\t\t\tvalue = der.readString(type);
\t\t\tbreak;
\t\tcase asn1.Ber.Utf8String:
\t\t\tvalue = der.readString(type, true);
\t\t\tvalue = value.toString('utf8');
\t\t\tbreak;
\t\tcase asn1.Ber.CharacterString:
\t\tcase asn1.Ber.BMPString:
\t\t\tvalue = der.readString(type, true);
\t\t\tvalue = value.toString('utf16le');
\t\t\tbreak;
\t\tdefault:
\t\t\tthrow (new Error('Unknown asn1 type ' + type));
\t\t}
\t\tcomponents.push({ oid: oid, value: value });
\t\tder._offset = after;
\t}
\tder._offset = end;
\treturn (new Identity({
\t\tcomponents: components
\t}));
};

Identity.isIdentity = function (obj, ver) {
\treturn (utils.isCompatible(obj, Identity, ver));
};

/*
 * API versions for Identity:
 * [1,0] -- initial ver
 */
Identity.prototype._sshpkApiVersion = [1, 0];

Identity._oldVersionDetect = function (obj) {
\treturn ([1, 0]);
};
";
        
        $__internal_4325235845fd8784e3b6790f447a13c68fb73a4694f9a88180992ed358f24230->leave($__internal_4325235845fd8784e3b6790f447a13c68fb73a4694f9a88180992ed358f24230_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sshpk/lib/identity.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Copyright 2017 Joyent, Inc.

module.exports = Identity;

var assert = require('assert-plus');
var algs = require('./algs');
var crypto = require('crypto');
var Fingerprint = require('./fingerprint');
var Signature = require('./signature');
var errs = require('./errors');
var util = require('util');
var utils = require('./utils');
var asn1 = require('asn1');

/*JSSTYLED*/
var DNS_NAME_RE = /^([*]|[a-z0-9][a-z0-9\\-]{0,62})(?:\\.([*]|[a-z0-9][a-z0-9\\-]{0,62}))*\$/i;

var oids = {};
oids.cn = '2.5.4.3';
oids.o = '2.5.4.10';
oids.ou = '2.5.4.11';
oids.l = '2.5.4.7';
oids.s = '2.5.4.8';
oids.c = '2.5.4.6';
oids.sn = '2.5.4.4';
oids.dc = '0.9.2342.19200300.100.1.25';
oids.uid = '0.9.2342.19200300.100.1.1';
oids.mail = '0.9.2342.19200300.100.1.3';

var unoids = {};
Object.keys(oids).forEach(function (k) {
\tunoids[oids[k]] = k;
});

function Identity(opts) {
\tvar self = this;
\tassert.object(opts, 'options');
\tassert.arrayOfObject(opts.components, 'options.components');
\tthis.components = opts.components;
\tthis.componentLookup = {};
\tthis.components.forEach(function (c) {
\t\tif (c.name && !c.oid)
\t\t\tc.oid = oids[c.name];
\t\tif (c.oid && !c.name)
\t\t\tc.name = unoids[c.oid];
\t\tif (self.componentLookup[c.name] === undefined)
\t\t\tself.componentLookup[c.name] = [];
\t\tself.componentLookup[c.name].push(c);
\t});
\tif (this.componentLookup.cn && this.componentLookup.cn.length > 0) {
\t\tthis.cn = this.componentLookup.cn[0].value;
\t}
\tassert.optionalString(opts.type, 'options.type');
\tif (opts.type === undefined) {
\t\tif (this.components.length === 1 &&
\t\t    this.componentLookup.cn &&
\t\t    this.componentLookup.cn.length === 1 &&
\t\t    this.componentLookup.cn[0].value.match(DNS_NAME_RE)) {
\t\t\tthis.type = 'host';
\t\t\tthis.hostname = this.componentLookup.cn[0].value;

\t\t} else if (this.componentLookup.dc &&
\t\t    this.components.length === this.componentLookup.dc.length) {
\t\t\tthis.type = 'host';
\t\t\tthis.hostname = this.componentLookup.dc.map(
\t\t\t    function (c) {
\t\t\t\treturn (c.value);
\t\t\t}).join('.');

\t\t} else if (this.componentLookup.uid &&
\t\t    this.components.length ===
\t\t    this.componentLookup.uid.length) {
\t\t\tthis.type = 'user';
\t\t\tthis.uid = this.componentLookup.uid[0].value;

\t\t} else if (this.componentLookup.cn &&
\t\t    this.componentLookup.cn.length === 1 &&
\t\t    this.componentLookup.cn[0].value.match(DNS_NAME_RE)) {
\t\t\tthis.type = 'host';
\t\t\tthis.hostname = this.componentLookup.cn[0].value;

\t\t} else if (this.componentLookup.uid &&
\t\t    this.componentLookup.uid.length === 1) {
\t\t\tthis.type = 'user';
\t\t\tthis.uid = this.componentLookup.uid[0].value;

\t\t} else if (this.componentLookup.mail &&
\t\t    this.componentLookup.mail.length === 1) {
\t\t\tthis.type = 'email';
\t\t\tthis.email = this.componentLookup.mail[0].value;

\t\t} else if (this.componentLookup.cn &&
\t\t    this.componentLookup.cn.length === 1) {
\t\t\tthis.type = 'user';
\t\t\tthis.uid = this.componentLookup.cn[0].value;

\t\t} else {
\t\t\tthis.type = 'unknown';
\t\t}
\t} else {
\t\tthis.type = opts.type;
\t\tif (this.type === 'host')
\t\t\tthis.hostname = opts.hostname;
\t\telse if (this.type === 'user')
\t\t\tthis.uid = opts.uid;
\t\telse if (this.type === 'email')
\t\t\tthis.email = opts.email;
\t\telse
\t\t\tthrow (new Error('Unknown type ' + this.type));
\t}
}

Identity.prototype.toString = function () {
\treturn (this.components.map(function (c) {
\t\treturn (c.name.toUpperCase() + '=' + c.value);
\t}).join(', '));
};

/*
 * These are from X.680 -- PrintableString allowed chars are in section 37.4
 * table 8. Spec for IA5Strings is \"1,6 + SPACE + DEL\" where 1 refers to
 * ISO IR #001 (standard ASCII control characters) and 6 refers to ISO IR #006
 * (the basic ASCII character set).
 */
/* JSSTYLED */
var NOT_PRINTABLE = /[^a-zA-Z0-9 '(),+.\\/:=?-]/;
/* JSSTYLED */
var NOT_IA5 = /[^\\x00-\\x7f]/;

Identity.prototype.toAsn1 = function (der, tag) {
\tder.startSequence(tag);
\tthis.components.forEach(function (c) {
\t\tder.startSequence(asn1.Ber.Constructor | asn1.Ber.Set);
\t\tder.startSequence();
\t\tder.writeOID(c.oid);
\t\t/*
\t\t * If we fit in a PrintableString, use that. Otherwise use an
\t\t * IA5String or UTF8String.
\t\t */
\t\tif (c.value.match(NOT_IA5)) {
\t\t\tvar v = new Buffer(c.value, 'utf8');
\t\t\tder.writeBuffer(v, asn1.Ber.Utf8String);
\t\t} else if (c.value.match(NOT_PRINTABLE)) {
\t\t\tder.writeString(c.value, asn1.Ber.IA5String);
\t\t} else {
\t\t\tder.writeString(c.value, asn1.Ber.PrintableString);
\t\t}
\t\tder.endSequence();
\t\tder.endSequence();
\t});
\tder.endSequence();
};

function globMatch(a, b) {
\tif (a === '**' || b === '**')
\t\treturn (true);
\tvar aParts = a.split('.');
\tvar bParts = b.split('.');
\tif (aParts.length !== bParts.length)
\t\treturn (false);
\tfor (var i = 0; i < aParts.length; ++i) {
\t\tif (aParts[i] === '*' || bParts[i] === '*')
\t\t\tcontinue;
\t\tif (aParts[i] !== bParts[i])
\t\t\treturn (false);
\t}
\treturn (true);
}

Identity.prototype.equals = function (other) {
\tif (!Identity.isIdentity(other, [1, 0]))
\t\treturn (false);
\tif (other.components.length !== this.components.length)
\t\treturn (false);
\tfor (var i = 0; i < this.components.length; ++i) {
\t\tif (this.components[i].oid !== other.components[i].oid)
\t\t\treturn (false);
\t\tif (!globMatch(this.components[i].value,
\t\t    other.components[i].value)) {
\t\t\treturn (false);
\t\t}
\t}
\treturn (true);
};

Identity.forHost = function (hostname) {
\tassert.string(hostname, 'hostname');
\treturn (new Identity({
\t\ttype: 'host',
\t\thostname: hostname,
\t\tcomponents: [ { name: 'cn', value: hostname } ]
\t}));
};

Identity.forUser = function (uid) {
\tassert.string(uid, 'uid');
\treturn (new Identity({
\t\ttype: 'user',
\t\tuid: uid,
\t\tcomponents: [ { name: 'uid', value: uid } ]
\t}));
};

Identity.forEmail = function (email) {
\tassert.string(email, 'email');
\treturn (new Identity({
\t\ttype: 'email',
\t\temail: email,
\t\tcomponents: [ { name: 'mail', value: email } ]
\t}));
};

Identity.parseDN = function (dn) {
\tassert.string(dn, 'dn');
\tvar parts = dn.split(',');
\tvar cmps = parts.map(function (c) {
\t\tc = c.trim();
\t\tvar eqPos = c.indexOf('=');
\t\tvar name = c.slice(0, eqPos).toLowerCase();
\t\tvar value = c.slice(eqPos + 1);
\t\treturn ({ name: name, value: value });
\t});
\treturn (new Identity({ components: cmps }));
};

Identity.parseAsn1 = function (der, top) {
\tvar components = [];
\tder.readSequence(top);
\tvar end = der.offset + der.length;
\twhile (der.offset < end) {
\t\tder.readSequence(asn1.Ber.Constructor | asn1.Ber.Set);
\t\tvar after = der.offset + der.length;
\t\tder.readSequence();
\t\tvar oid = der.readOID();
\t\tvar type = der.peek();
\t\tvar value;
\t\tswitch (type) {
\t\tcase asn1.Ber.PrintableString:
\t\tcase asn1.Ber.IA5String:
\t\tcase asn1.Ber.OctetString:
\t\tcase asn1.Ber.T61String:
\t\t\tvalue = der.readString(type);
\t\t\tbreak;
\t\tcase asn1.Ber.Utf8String:
\t\t\tvalue = der.readString(type, true);
\t\t\tvalue = value.toString('utf8');
\t\t\tbreak;
\t\tcase asn1.Ber.CharacterString:
\t\tcase asn1.Ber.BMPString:
\t\t\tvalue = der.readString(type, true);
\t\t\tvalue = value.toString('utf16le');
\t\t\tbreak;
\t\tdefault:
\t\t\tthrow (new Error('Unknown asn1 type ' + type));
\t\t}
\t\tcomponents.push({ oid: oid, value: value });
\t\tder._offset = after;
\t}
\tder._offset = end;
\treturn (new Identity({
\t\tcomponents: components
\t}));
};

Identity.isIdentity = function (obj, ver) {
\treturn (utils.isCompatible(obj, Identity, ver));
};

/*
 * API versions for Identity:
 * [1,0] -- initial ver
 */
Identity.prototype._sshpkApiVersion = [1, 0];

Identity._oldVersionDetect = function (obj) {
\treturn ([1, 0]);
};
", "node_modules/sshpk/lib/identity.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sshpk/lib/identity.js");
    }
}
