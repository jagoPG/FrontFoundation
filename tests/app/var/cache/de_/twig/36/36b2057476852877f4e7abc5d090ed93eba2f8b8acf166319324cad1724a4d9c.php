<?php

/* node_modules/sshpk/lib/certificate.js */
class __TwigTemplate_61a9f3473ce683860a2b1d2db88ad0f1c578ddbec6d28067dacb7c0e8dbdf226 extends Twig_Template
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
        $__internal_5813b3f4167f83fefcf2a4187d5968b52c31812e5d83a0b045a8b750e124de28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5813b3f4167f83fefcf2a4187d5968b52c31812e5d83a0b045a8b750e124de28->enter($__internal_5813b3f4167f83fefcf2a4187d5968b52c31812e5d83a0b045a8b750e124de28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sshpk/lib/certificate.js"));

        // line 1
        echo "// Copyright 2016 Joyent, Inc.

module.exports = Certificate;

var assert = require('assert-plus');
var algs = require('./algs');
var crypto = require('crypto');
var Fingerprint = require('./fingerprint');
var Signature = require('./signature');
var errs = require('./errors');
var util = require('util');
var utils = require('./utils');
var Key = require('./key');
var PrivateKey = require('./private-key');
var Identity = require('./identity');

var formats = {};
formats['openssh'] = require('./formats/openssh-cert');
formats['x509'] = require('./formats/x509');
formats['pem'] = require('./formats/x509-pem');

var CertificateParseError = errs.CertificateParseError;
var InvalidAlgorithmError = errs.InvalidAlgorithmError;

function Certificate(opts) {
\tassert.object(opts, 'options');
\tassert.arrayOfObject(opts.subjects, 'options.subjects');
\tutils.assertCompatible(opts.subjects[0], Identity, [1, 0],
\t    'options.subjects');
\tutils.assertCompatible(opts.subjectKey, Key, [1, 0],
\t    'options.subjectKey');
\tutils.assertCompatible(opts.issuer, Identity, [1, 0], 'options.issuer');
\tif (opts.issuerKey !== undefined) {
\t\tutils.assertCompatible(opts.issuerKey, Key, [1, 0],
\t\t    'options.issuerKey');
\t}
\tassert.object(opts.signatures, 'options.signatures');
\tassert.buffer(opts.serial, 'options.serial');
\tassert.date(opts.validFrom, 'options.validFrom');
\tassert.date(opts.validUntil, 'optons.validUntil');

\tassert.optionalArrayOfString(opts.purposes, 'options.purposes');

\tthis._hashCache = {};

\tthis.subjects = opts.subjects;
\tthis.issuer = opts.issuer;
\tthis.subjectKey = opts.subjectKey;
\tthis.issuerKey = opts.issuerKey;
\tthis.signatures = opts.signatures;
\tthis.serial = opts.serial;
\tthis.validFrom = opts.validFrom;
\tthis.validUntil = opts.validUntil;
\tthis.purposes = opts.purposes;
}

Certificate.formats = formats;

Certificate.prototype.toBuffer = function (format, options) {
\tif (format === undefined)
\t\tformat = 'x509';
\tassert.string(format, 'format');
\tassert.object(formats[format], 'formats[format]');
\tassert.optionalObject(options, 'options');

\treturn (formats[format].write(this, options));
};

Certificate.prototype.toString = function (format, options) {
\tif (format === undefined)
\t\tformat = 'pem';
\treturn (this.toBuffer(format, options).toString());
};

Certificate.prototype.fingerprint = function (algo) {
\tif (algo === undefined)
\t\talgo = 'sha256';
\tassert.string(algo, 'algorithm');
\tvar opts = {
\t\ttype: 'certificate',
\t\thash: this.hash(algo),
\t\talgorithm: algo
\t};
\treturn (new Fingerprint(opts));
};

Certificate.prototype.hash = function (algo) {
\tassert.string(algo, 'algorithm');
\talgo = algo.toLowerCase();
\tif (algs.hashAlgs[algo] === undefined)
\t\tthrow (new InvalidAlgorithmError(algo));

\tif (this._hashCache[algo])
\t\treturn (this._hashCache[algo]);

\tvar hash = crypto.createHash(algo).
\t    update(this.toBuffer('x509')).digest();
\tthis._hashCache[algo] = hash;
\treturn (hash);
};

Certificate.prototype.isExpired = function (when) {
\tif (when === undefined)
\t\twhen = new Date();
\treturn (!((when.getTime() >= this.validFrom.getTime()) &&
\t\t(when.getTime() < this.validUntil.getTime())));
};

Certificate.prototype.isSignedBy = function (issuerCert) {
\tutils.assertCompatible(issuerCert, Certificate, [1, 0], 'issuer');

\tif (!this.issuer.equals(issuerCert.subjects[0]))
\t\treturn (false);
\tif (this.issuer.purposes && this.issuer.purposes.length > 0 &&
\t    this.issuer.purposes.indexOf('ca') === -1) {
\t\treturn (false);
\t}

\treturn (this.isSignedByKey(issuerCert.subjectKey));
};

Certificate.prototype.isSignedByKey = function (issuerKey) {
\tutils.assertCompatible(issuerKey, Key, [1, 2], 'issuerKey');

\tif (this.issuerKey !== undefined) {
\t\treturn (this.issuerKey.
\t\t    fingerprint('sha512').matches(issuerKey));
\t}

\tvar fmt = Object.keys(this.signatures)[0];
\tvar valid = formats[fmt].verify(this, issuerKey);
\tif (valid)
\t\tthis.issuerKey = issuerKey;
\treturn (valid);
};

Certificate.prototype.signWith = function (key) {
\tutils.assertCompatible(key, PrivateKey, [1, 2], 'key');
\tvar fmts = Object.keys(formats);
\tvar didOne = false;
\tfor (var i = 0; i < fmts.length; ++i) {
\t\tif (fmts[i] !== 'pem') {
\t\t\tvar ret = formats[fmts[i]].sign(this, key);
\t\t\tif (ret === true)
\t\t\t\tdidOne = true;
\t\t}
\t}
\tif (!didOne) {
\t\tthrow (new Error('Failed to sign the certificate for any ' +
\t\t    'available certificate formats'));
\t}
};

Certificate.createSelfSigned = function (subjectOrSubjects, key, options) {
\tvar subjects;
\tif (Array.isArray(subjectOrSubjects))
\t\tsubjects = subjectOrSubjects;
\telse
\t\tsubjects = [subjectOrSubjects];

\tassert.arrayOfObject(subjects);
\tsubjects.forEach(function (subject) {
\t\tutils.assertCompatible(subject, Identity, [1, 0], 'subject');
\t});

\tutils.assertCompatible(key, PrivateKey, [1, 2], 'private key');

\tassert.optionalObject(options, 'options');
\tif (options === undefined)
\t\toptions = {};
\tassert.optionalObject(options.validFrom, 'options.validFrom');
\tassert.optionalObject(options.validUntil, 'options.validUntil');
\tvar validFrom = options.validFrom;
\tvar validUntil = options.validUntil;
\tif (validFrom === undefined)
\t\tvalidFrom = new Date();
\tif (validUntil === undefined) {
\t\tassert.optionalNumber(options.lifetime, 'options.lifetime');
\t\tvar lifetime = options.lifetime;
\t\tif (lifetime === undefined)
\t\t\tlifetime = 10*365*24*3600;
\t\tvalidUntil = new Date();
\t\tvalidUntil.setTime(validUntil.getTime() + lifetime*1000);
\t}
\tassert.optionalBuffer(options.serial, 'options.serial');
\tvar serial = options.serial;
\tif (serial === undefined)
\t\tserial = new Buffer('0000000000000001', 'hex');

\tvar purposes = options.purposes;
\tif (purposes === undefined)
\t\tpurposes = [];

\tif (purposes.indexOf('signature') === -1)
\t\tpurposes.push('signature');

\t/* Self-signed certs are always CAs. */
\tif (purposes.indexOf('ca') === -1)
\t\tpurposes.push('ca');
\tif (purposes.indexOf('crl') === -1)
\t\tpurposes.push('crl');

\t/*
\t * If we weren't explicitly given any other purposes, do the sensible
\t * thing and add some basic ones depending on the subject type.
\t */
\tif (purposes.length <= 3) {
\t\tvar hostSubjects = subjects.filter(function (subject) {
\t\t\treturn (subject.type === 'host');
\t\t});
\t\tvar userSubjects = subjects.filter(function (subject) {
\t\t\treturn (subject.type === 'user');
\t\t});
\t\tif (hostSubjects.length > 0) {
\t\t\tif (purposes.indexOf('serverAuth') === -1)
\t\t\t\tpurposes.push('serverAuth');
\t\t}
\t\tif (userSubjects.length > 0) {
\t\t\tif (purposes.indexOf('clientAuth') === -1)
\t\t\t\tpurposes.push('clientAuth');
\t\t}
\t\tif (userSubjects.length > 0 || hostSubjects.length > 0) {
\t\t\tif (purposes.indexOf('keyAgreement') === -1)
\t\t\t\tpurposes.push('keyAgreement');
\t\t\tif (key.type === 'rsa' &&
\t\t\t    purposes.indexOf('encryption') === -1)
\t\t\t\tpurposes.push('encryption');
\t\t}
\t}

\tvar cert = new Certificate({
\t\tsubjects: subjects,
\t\tissuer: subjects[0],
\t\tsubjectKey: key.toPublic(),
\t\tissuerKey: key.toPublic(),
\t\tsignatures: {},
\t\tserial: serial,
\t\tvalidFrom: validFrom,
\t\tvalidUntil: validUntil,
\t\tpurposes: purposes
\t});
\tcert.signWith(key);

\treturn (cert);
};

Certificate.create =
    function (subjectOrSubjects, key, issuer, issuerKey, options) {
\tvar subjects;
\tif (Array.isArray(subjectOrSubjects))
\t\tsubjects = subjectOrSubjects;
\telse
\t\tsubjects = [subjectOrSubjects];

\tassert.arrayOfObject(subjects);
\tsubjects.forEach(function (subject) {
\t\tutils.assertCompatible(subject, Identity, [1, 0], 'subject');
\t});

\tutils.assertCompatible(key, Key, [1, 0], 'key');
\tif (PrivateKey.isPrivateKey(key))
\t\tkey = key.toPublic();
\tutils.assertCompatible(issuer, Identity, [1, 0], 'issuer');
\tutils.assertCompatible(issuerKey, PrivateKey, [1, 2], 'issuer key');

\tassert.optionalObject(options, 'options');
\tif (options === undefined)
\t\toptions = {};
\tassert.optionalObject(options.validFrom, 'options.validFrom');
\tassert.optionalObject(options.validUntil, 'options.validUntil');
\tvar validFrom = options.validFrom;
\tvar validUntil = options.validUntil;
\tif (validFrom === undefined)
\t\tvalidFrom = new Date();
\tif (validUntil === undefined) {
\t\tassert.optionalNumber(options.lifetime, 'options.lifetime');
\t\tvar lifetime = options.lifetime;
\t\tif (lifetime === undefined)
\t\t\tlifetime = 10*365*24*3600;
\t\tvalidUntil = new Date();
\t\tvalidUntil.setTime(validUntil.getTime() + lifetime*1000);
\t}
\tassert.optionalBuffer(options.serial, 'options.serial');
\tvar serial = options.serial;
\tif (serial === undefined)
\t\tserial = new Buffer('0000000000000001', 'hex');

\tvar purposes = options.purposes;
\tif (purposes === undefined)
\t\tpurposes = [];

\tif (purposes.indexOf('signature') === -1)
\t\tpurposes.push('signature');

\tif (options.ca === true) {
\t\tif (purposes.indexOf('ca') === -1)
\t\t\tpurposes.push('ca');
\t\tif (purposes.indexOf('crl') === -1)
\t\t\tpurposes.push('crl');
\t}

\tvar hostSubjects = subjects.filter(function (subject) {
\t\treturn (subject.type === 'host');
\t});
\tvar userSubjects = subjects.filter(function (subject) {
\t\treturn (subject.type === 'user');
\t});
\tif (hostSubjects.length > 0) {
\t\tif (purposes.indexOf('serverAuth') === -1)
\t\t\tpurposes.push('serverAuth');
\t}
\tif (userSubjects.length > 0) {
\t\tif (purposes.indexOf('clientAuth') === -1)
\t\t\tpurposes.push('clientAuth');
\t}
\tif (userSubjects.length > 0 || hostSubjects.length > 0) {
\t\tif (purposes.indexOf('keyAgreement') === -1)
\t\t\tpurposes.push('keyAgreement');
\t\tif (key.type === 'rsa' &&
\t\t    purposes.indexOf('encryption') === -1)
\t\t\tpurposes.push('encryption');
\t}

\tvar cert = new Certificate({
\t\tsubjects: subjects,
\t\tissuer: issuer,
\t\tsubjectKey: key,
\t\tissuerKey: issuerKey.toPublic(),
\t\tsignatures: {},
\t\tserial: serial,
\t\tvalidFrom: validFrom,
\t\tvalidUntil: validUntil,
\t\tpurposes: purposes
\t});
\tcert.signWith(issuerKey);

\treturn (cert);
};

Certificate.parse = function (data, format, options) {
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
\t\treturn (k);
\t} catch (e) {
\t\tthrow (new CertificateParseError(options.filename, format, e));
\t}
};

Certificate.isCertificate = function (obj, ver) {
\treturn (utils.isCompatible(obj, Certificate, ver));
};

/*
 * API versions for Certificate:
 * [1,0] -- initial ver
 */
Certificate.prototype._sshpkApiVersion = [1, 0];

Certificate._oldVersionDetect = function (obj) {
\treturn ([1, 0]);
};
";
        
        $__internal_5813b3f4167f83fefcf2a4187d5968b52c31812e5d83a0b045a8b750e124de28->leave($__internal_5813b3f4167f83fefcf2a4187d5968b52c31812e5d83a0b045a8b750e124de28_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sshpk/lib/certificate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Copyright 2016 Joyent, Inc.

module.exports = Certificate;

var assert = require('assert-plus');
var algs = require('./algs');
var crypto = require('crypto');
var Fingerprint = require('./fingerprint');
var Signature = require('./signature');
var errs = require('./errors');
var util = require('util');
var utils = require('./utils');
var Key = require('./key');
var PrivateKey = require('./private-key');
var Identity = require('./identity');

var formats = {};
formats['openssh'] = require('./formats/openssh-cert');
formats['x509'] = require('./formats/x509');
formats['pem'] = require('./formats/x509-pem');

var CertificateParseError = errs.CertificateParseError;
var InvalidAlgorithmError = errs.InvalidAlgorithmError;

function Certificate(opts) {
\tassert.object(opts, 'options');
\tassert.arrayOfObject(opts.subjects, 'options.subjects');
\tutils.assertCompatible(opts.subjects[0], Identity, [1, 0],
\t    'options.subjects');
\tutils.assertCompatible(opts.subjectKey, Key, [1, 0],
\t    'options.subjectKey');
\tutils.assertCompatible(opts.issuer, Identity, [1, 0], 'options.issuer');
\tif (opts.issuerKey !== undefined) {
\t\tutils.assertCompatible(opts.issuerKey, Key, [1, 0],
\t\t    'options.issuerKey');
\t}
\tassert.object(opts.signatures, 'options.signatures');
\tassert.buffer(opts.serial, 'options.serial');
\tassert.date(opts.validFrom, 'options.validFrom');
\tassert.date(opts.validUntil, 'optons.validUntil');

\tassert.optionalArrayOfString(opts.purposes, 'options.purposes');

\tthis._hashCache = {};

\tthis.subjects = opts.subjects;
\tthis.issuer = opts.issuer;
\tthis.subjectKey = opts.subjectKey;
\tthis.issuerKey = opts.issuerKey;
\tthis.signatures = opts.signatures;
\tthis.serial = opts.serial;
\tthis.validFrom = opts.validFrom;
\tthis.validUntil = opts.validUntil;
\tthis.purposes = opts.purposes;
}

Certificate.formats = formats;

Certificate.prototype.toBuffer = function (format, options) {
\tif (format === undefined)
\t\tformat = 'x509';
\tassert.string(format, 'format');
\tassert.object(formats[format], 'formats[format]');
\tassert.optionalObject(options, 'options');

\treturn (formats[format].write(this, options));
};

Certificate.prototype.toString = function (format, options) {
\tif (format === undefined)
\t\tformat = 'pem';
\treturn (this.toBuffer(format, options).toString());
};

Certificate.prototype.fingerprint = function (algo) {
\tif (algo === undefined)
\t\talgo = 'sha256';
\tassert.string(algo, 'algorithm');
\tvar opts = {
\t\ttype: 'certificate',
\t\thash: this.hash(algo),
\t\talgorithm: algo
\t};
\treturn (new Fingerprint(opts));
};

Certificate.prototype.hash = function (algo) {
\tassert.string(algo, 'algorithm');
\talgo = algo.toLowerCase();
\tif (algs.hashAlgs[algo] === undefined)
\t\tthrow (new InvalidAlgorithmError(algo));

\tif (this._hashCache[algo])
\t\treturn (this._hashCache[algo]);

\tvar hash = crypto.createHash(algo).
\t    update(this.toBuffer('x509')).digest();
\tthis._hashCache[algo] = hash;
\treturn (hash);
};

Certificate.prototype.isExpired = function (when) {
\tif (when === undefined)
\t\twhen = new Date();
\treturn (!((when.getTime() >= this.validFrom.getTime()) &&
\t\t(when.getTime() < this.validUntil.getTime())));
};

Certificate.prototype.isSignedBy = function (issuerCert) {
\tutils.assertCompatible(issuerCert, Certificate, [1, 0], 'issuer');

\tif (!this.issuer.equals(issuerCert.subjects[0]))
\t\treturn (false);
\tif (this.issuer.purposes && this.issuer.purposes.length > 0 &&
\t    this.issuer.purposes.indexOf('ca') === -1) {
\t\treturn (false);
\t}

\treturn (this.isSignedByKey(issuerCert.subjectKey));
};

Certificate.prototype.isSignedByKey = function (issuerKey) {
\tutils.assertCompatible(issuerKey, Key, [1, 2], 'issuerKey');

\tif (this.issuerKey !== undefined) {
\t\treturn (this.issuerKey.
\t\t    fingerprint('sha512').matches(issuerKey));
\t}

\tvar fmt = Object.keys(this.signatures)[0];
\tvar valid = formats[fmt].verify(this, issuerKey);
\tif (valid)
\t\tthis.issuerKey = issuerKey;
\treturn (valid);
};

Certificate.prototype.signWith = function (key) {
\tutils.assertCompatible(key, PrivateKey, [1, 2], 'key');
\tvar fmts = Object.keys(formats);
\tvar didOne = false;
\tfor (var i = 0; i < fmts.length; ++i) {
\t\tif (fmts[i] !== 'pem') {
\t\t\tvar ret = formats[fmts[i]].sign(this, key);
\t\t\tif (ret === true)
\t\t\t\tdidOne = true;
\t\t}
\t}
\tif (!didOne) {
\t\tthrow (new Error('Failed to sign the certificate for any ' +
\t\t    'available certificate formats'));
\t}
};

Certificate.createSelfSigned = function (subjectOrSubjects, key, options) {
\tvar subjects;
\tif (Array.isArray(subjectOrSubjects))
\t\tsubjects = subjectOrSubjects;
\telse
\t\tsubjects = [subjectOrSubjects];

\tassert.arrayOfObject(subjects);
\tsubjects.forEach(function (subject) {
\t\tutils.assertCompatible(subject, Identity, [1, 0], 'subject');
\t});

\tutils.assertCompatible(key, PrivateKey, [1, 2], 'private key');

\tassert.optionalObject(options, 'options');
\tif (options === undefined)
\t\toptions = {};
\tassert.optionalObject(options.validFrom, 'options.validFrom');
\tassert.optionalObject(options.validUntil, 'options.validUntil');
\tvar validFrom = options.validFrom;
\tvar validUntil = options.validUntil;
\tif (validFrom === undefined)
\t\tvalidFrom = new Date();
\tif (validUntil === undefined) {
\t\tassert.optionalNumber(options.lifetime, 'options.lifetime');
\t\tvar lifetime = options.lifetime;
\t\tif (lifetime === undefined)
\t\t\tlifetime = 10*365*24*3600;
\t\tvalidUntil = new Date();
\t\tvalidUntil.setTime(validUntil.getTime() + lifetime*1000);
\t}
\tassert.optionalBuffer(options.serial, 'options.serial');
\tvar serial = options.serial;
\tif (serial === undefined)
\t\tserial = new Buffer('0000000000000001', 'hex');

\tvar purposes = options.purposes;
\tif (purposes === undefined)
\t\tpurposes = [];

\tif (purposes.indexOf('signature') === -1)
\t\tpurposes.push('signature');

\t/* Self-signed certs are always CAs. */
\tif (purposes.indexOf('ca') === -1)
\t\tpurposes.push('ca');
\tif (purposes.indexOf('crl') === -1)
\t\tpurposes.push('crl');

\t/*
\t * If we weren't explicitly given any other purposes, do the sensible
\t * thing and add some basic ones depending on the subject type.
\t */
\tif (purposes.length <= 3) {
\t\tvar hostSubjects = subjects.filter(function (subject) {
\t\t\treturn (subject.type === 'host');
\t\t});
\t\tvar userSubjects = subjects.filter(function (subject) {
\t\t\treturn (subject.type === 'user');
\t\t});
\t\tif (hostSubjects.length > 0) {
\t\t\tif (purposes.indexOf('serverAuth') === -1)
\t\t\t\tpurposes.push('serverAuth');
\t\t}
\t\tif (userSubjects.length > 0) {
\t\t\tif (purposes.indexOf('clientAuth') === -1)
\t\t\t\tpurposes.push('clientAuth');
\t\t}
\t\tif (userSubjects.length > 0 || hostSubjects.length > 0) {
\t\t\tif (purposes.indexOf('keyAgreement') === -1)
\t\t\t\tpurposes.push('keyAgreement');
\t\t\tif (key.type === 'rsa' &&
\t\t\t    purposes.indexOf('encryption') === -1)
\t\t\t\tpurposes.push('encryption');
\t\t}
\t}

\tvar cert = new Certificate({
\t\tsubjects: subjects,
\t\tissuer: subjects[0],
\t\tsubjectKey: key.toPublic(),
\t\tissuerKey: key.toPublic(),
\t\tsignatures: {},
\t\tserial: serial,
\t\tvalidFrom: validFrom,
\t\tvalidUntil: validUntil,
\t\tpurposes: purposes
\t});
\tcert.signWith(key);

\treturn (cert);
};

Certificate.create =
    function (subjectOrSubjects, key, issuer, issuerKey, options) {
\tvar subjects;
\tif (Array.isArray(subjectOrSubjects))
\t\tsubjects = subjectOrSubjects;
\telse
\t\tsubjects = [subjectOrSubjects];

\tassert.arrayOfObject(subjects);
\tsubjects.forEach(function (subject) {
\t\tutils.assertCompatible(subject, Identity, [1, 0], 'subject');
\t});

\tutils.assertCompatible(key, Key, [1, 0], 'key');
\tif (PrivateKey.isPrivateKey(key))
\t\tkey = key.toPublic();
\tutils.assertCompatible(issuer, Identity, [1, 0], 'issuer');
\tutils.assertCompatible(issuerKey, PrivateKey, [1, 2], 'issuer key');

\tassert.optionalObject(options, 'options');
\tif (options === undefined)
\t\toptions = {};
\tassert.optionalObject(options.validFrom, 'options.validFrom');
\tassert.optionalObject(options.validUntil, 'options.validUntil');
\tvar validFrom = options.validFrom;
\tvar validUntil = options.validUntil;
\tif (validFrom === undefined)
\t\tvalidFrom = new Date();
\tif (validUntil === undefined) {
\t\tassert.optionalNumber(options.lifetime, 'options.lifetime');
\t\tvar lifetime = options.lifetime;
\t\tif (lifetime === undefined)
\t\t\tlifetime = 10*365*24*3600;
\t\tvalidUntil = new Date();
\t\tvalidUntil.setTime(validUntil.getTime() + lifetime*1000);
\t}
\tassert.optionalBuffer(options.serial, 'options.serial');
\tvar serial = options.serial;
\tif (serial === undefined)
\t\tserial = new Buffer('0000000000000001', 'hex');

\tvar purposes = options.purposes;
\tif (purposes === undefined)
\t\tpurposes = [];

\tif (purposes.indexOf('signature') === -1)
\t\tpurposes.push('signature');

\tif (options.ca === true) {
\t\tif (purposes.indexOf('ca') === -1)
\t\t\tpurposes.push('ca');
\t\tif (purposes.indexOf('crl') === -1)
\t\t\tpurposes.push('crl');
\t}

\tvar hostSubjects = subjects.filter(function (subject) {
\t\treturn (subject.type === 'host');
\t});
\tvar userSubjects = subjects.filter(function (subject) {
\t\treturn (subject.type === 'user');
\t});
\tif (hostSubjects.length > 0) {
\t\tif (purposes.indexOf('serverAuth') === -1)
\t\t\tpurposes.push('serverAuth');
\t}
\tif (userSubjects.length > 0) {
\t\tif (purposes.indexOf('clientAuth') === -1)
\t\t\tpurposes.push('clientAuth');
\t}
\tif (userSubjects.length > 0 || hostSubjects.length > 0) {
\t\tif (purposes.indexOf('keyAgreement') === -1)
\t\t\tpurposes.push('keyAgreement');
\t\tif (key.type === 'rsa' &&
\t\t    purposes.indexOf('encryption') === -1)
\t\t\tpurposes.push('encryption');
\t}

\tvar cert = new Certificate({
\t\tsubjects: subjects,
\t\tissuer: issuer,
\t\tsubjectKey: key,
\t\tissuerKey: issuerKey.toPublic(),
\t\tsignatures: {},
\t\tserial: serial,
\t\tvalidFrom: validFrom,
\t\tvalidUntil: validUntil,
\t\tpurposes: purposes
\t});
\tcert.signWith(issuerKey);

\treturn (cert);
};

Certificate.parse = function (data, format, options) {
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
\t\treturn (k);
\t} catch (e) {
\t\tthrow (new CertificateParseError(options.filename, format, e));
\t}
};

Certificate.isCertificate = function (obj, ver) {
\treturn (utils.isCompatible(obj, Certificate, ver));
};

/*
 * API versions for Certificate:
 * [1,0] -- initial ver
 */
Certificate.prototype._sshpkApiVersion = [1, 0];

Certificate._oldVersionDetect = function (obj) {
\treturn ([1, 0]);
};
", "node_modules/sshpk/lib/certificate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sshpk/lib/certificate.js");
    }
}
