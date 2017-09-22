<?php

/* node_modules/fsevents/node_modules/sshpk/lib/fingerprint.js */
class __TwigTemplate_1cc4de01d2499ca98313bc77d7a89431f97e140ea79df903507141d3925e3388 extends Twig_Template
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
        $__internal_7b37ececc7e7dc406699d5e7ce15818e2ff53c2fdc82243d9af81079154ed713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b37ececc7e7dc406699d5e7ce15818e2ff53c2fdc82243d9af81079154ed713->enter($__internal_7b37ececc7e7dc406699d5e7ce15818e2ff53c2fdc82243d9af81079154ed713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/sshpk/lib/fingerprint.js"));

        // line 1
        echo "// Copyright 2015 Joyent, Inc.

module.exports = Fingerprint;

var assert = require('assert-plus');
var algs = require('./algs');
var crypto = require('crypto');
var errs = require('./errors');
var Key = require('./key');
var Certificate = require('./certificate');
var utils = require('./utils');

var FingerprintFormatError = errs.FingerprintFormatError;
var InvalidAlgorithmError = errs.InvalidAlgorithmError;

function Fingerprint(opts) {
\tassert.object(opts, 'options');
\tassert.string(opts.type, 'options.type');
\tassert.buffer(opts.hash, 'options.hash');
\tassert.string(opts.algorithm, 'options.algorithm');

\tthis.algorithm = opts.algorithm.toLowerCase();
\tif (algs.hashAlgs[this.algorithm] !== true)
\t\tthrow (new InvalidAlgorithmError(this.algorithm));

\tthis.hash = opts.hash;
\tthis.type = opts.type;
}

Fingerprint.prototype.toString = function (format) {
\tif (format === undefined) {
\t\tif (this.algorithm === 'md5')
\t\t\tformat = 'hex';
\t\telse
\t\t\tformat = 'base64';
\t}
\tassert.string(format);

\tswitch (format) {
\tcase 'hex':
\t\treturn (addColons(this.hash.toString('hex')));
\tcase 'base64':
\t\treturn (sshBase64Format(this.algorithm,
\t\t    this.hash.toString('base64')));
\tdefault:
\t\tthrow (new FingerprintFormatError(undefined, format));
\t}
};

Fingerprint.prototype.matches = function (other) {
\tassert.object(other, 'key or certificate');
\tif (this.type === 'key') {
\t\tutils.assertCompatible(other, Key, [1, 0], 'key');
\t} else {
\t\tutils.assertCompatible(other, Certificate, [1, 0],
\t\t    'certificate');
\t}

\tvar theirHash = other.hash(this.algorithm);
\tvar theirHash2 = crypto.createHash(this.algorithm).
\t    update(theirHash).digest('base64');

\tif (this.hash2 === undefined)
\t\tthis.hash2 = crypto.createHash(this.algorithm).
\t\t    update(this.hash).digest('base64');

\treturn (this.hash2 === theirHash2);
};

Fingerprint.parse = function (fp, options) {
\tassert.string(fp, 'fingerprint');

\tvar alg, hash, enAlgs;
\tif (Array.isArray(options)) {
\t\tenAlgs = options;
\t\toptions = {};
\t}
\tassert.optionalObject(options, 'options');
\tif (options === undefined)
\t\toptions = {};
\tif (options.enAlgs !== undefined)
\t\tenAlgs = options.enAlgs;
\tassert.optionalArrayOfString(enAlgs, 'algorithms');

\tvar parts = fp.split(':');
\tif (parts.length == 2) {
\t\talg = parts[0].toLowerCase();
\t\t/*JSSTYLED*/
\t\tvar base64RE = /^[A-Za-z0-9+\\/=]+\$/;
\t\tif (!base64RE.test(parts[1]))
\t\t\tthrow (new FingerprintFormatError(fp));
\t\ttry {
\t\t\thash = new Buffer(parts[1], 'base64');
\t\t} catch (e) {
\t\t\tthrow (new FingerprintFormatError(fp));
\t\t}
\t} else if (parts.length > 2) {
\t\talg = 'md5';
\t\tif (parts[0].toLowerCase() === 'md5')
\t\t\tparts = parts.slice(1);
\t\tparts = parts.join('');
\t\t/*JSSTYLED*/
\t\tvar md5RE = /^[a-fA-F0-9]+\$/;
\t\tif (!md5RE.test(parts))
\t\t\tthrow (new FingerprintFormatError(fp));
\t\ttry {
\t\t\thash = new Buffer(parts, 'hex');
\t\t} catch (e) {
\t\t\tthrow (new FingerprintFormatError(fp));
\t\t}
\t}

\tif (alg === undefined)
\t\tthrow (new FingerprintFormatError(fp));

\tif (algs.hashAlgs[alg] === undefined)
\t\tthrow (new InvalidAlgorithmError(alg));

\tif (enAlgs !== undefined) {
\t\tenAlgs = enAlgs.map(function (a) { return a.toLowerCase(); });
\t\tif (enAlgs.indexOf(alg) === -1)
\t\t\tthrow (new InvalidAlgorithmError(alg));
\t}

\treturn (new Fingerprint({
\t\talgorithm: alg,
\t\thash: hash,
\t\ttype: options.type || 'key'
\t}));
};

function addColons(s) {
\t/*JSSTYLED*/
\treturn (s.replace(/(.{2})(?=.)/g, '\$1:'));
}

function base64Strip(s) {
\t/*JSSTYLED*/
\treturn (s.replace(/=*\$/, ''));
}

function sshBase64Format(alg, h) {
\treturn (alg.toUpperCase() + ':' + base64Strip(h));
}

Fingerprint.isFingerprint = function (obj, ver) {
\treturn (utils.isCompatible(obj, Fingerprint, ver));
};

/*
 * API versions for Fingerprint:
 * [1,0] -- initial ver
 * [1,1] -- first tagged ver
 */
Fingerprint.prototype._sshpkApiVersion = [1, 1];

Fingerprint._oldVersionDetect = function (obj) {
\tassert.func(obj.toString);
\tassert.func(obj.matches);
\treturn ([1, 0]);
};
";
        
        $__internal_7b37ececc7e7dc406699d5e7ce15818e2ff53c2fdc82243d9af81079154ed713->leave($__internal_7b37ececc7e7dc406699d5e7ce15818e2ff53c2fdc82243d9af81079154ed713_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/sshpk/lib/fingerprint.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Copyright 2015 Joyent, Inc.

module.exports = Fingerprint;

var assert = require('assert-plus');
var algs = require('./algs');
var crypto = require('crypto');
var errs = require('./errors');
var Key = require('./key');
var Certificate = require('./certificate');
var utils = require('./utils');

var FingerprintFormatError = errs.FingerprintFormatError;
var InvalidAlgorithmError = errs.InvalidAlgorithmError;

function Fingerprint(opts) {
\tassert.object(opts, 'options');
\tassert.string(opts.type, 'options.type');
\tassert.buffer(opts.hash, 'options.hash');
\tassert.string(opts.algorithm, 'options.algorithm');

\tthis.algorithm = opts.algorithm.toLowerCase();
\tif (algs.hashAlgs[this.algorithm] !== true)
\t\tthrow (new InvalidAlgorithmError(this.algorithm));

\tthis.hash = opts.hash;
\tthis.type = opts.type;
}

Fingerprint.prototype.toString = function (format) {
\tif (format === undefined) {
\t\tif (this.algorithm === 'md5')
\t\t\tformat = 'hex';
\t\telse
\t\t\tformat = 'base64';
\t}
\tassert.string(format);

\tswitch (format) {
\tcase 'hex':
\t\treturn (addColons(this.hash.toString('hex')));
\tcase 'base64':
\t\treturn (sshBase64Format(this.algorithm,
\t\t    this.hash.toString('base64')));
\tdefault:
\t\tthrow (new FingerprintFormatError(undefined, format));
\t}
};

Fingerprint.prototype.matches = function (other) {
\tassert.object(other, 'key or certificate');
\tif (this.type === 'key') {
\t\tutils.assertCompatible(other, Key, [1, 0], 'key');
\t} else {
\t\tutils.assertCompatible(other, Certificate, [1, 0],
\t\t    'certificate');
\t}

\tvar theirHash = other.hash(this.algorithm);
\tvar theirHash2 = crypto.createHash(this.algorithm).
\t    update(theirHash).digest('base64');

\tif (this.hash2 === undefined)
\t\tthis.hash2 = crypto.createHash(this.algorithm).
\t\t    update(this.hash).digest('base64');

\treturn (this.hash2 === theirHash2);
};

Fingerprint.parse = function (fp, options) {
\tassert.string(fp, 'fingerprint');

\tvar alg, hash, enAlgs;
\tif (Array.isArray(options)) {
\t\tenAlgs = options;
\t\toptions = {};
\t}
\tassert.optionalObject(options, 'options');
\tif (options === undefined)
\t\toptions = {};
\tif (options.enAlgs !== undefined)
\t\tenAlgs = options.enAlgs;
\tassert.optionalArrayOfString(enAlgs, 'algorithms');

\tvar parts = fp.split(':');
\tif (parts.length == 2) {
\t\talg = parts[0].toLowerCase();
\t\t/*JSSTYLED*/
\t\tvar base64RE = /^[A-Za-z0-9+\\/=]+\$/;
\t\tif (!base64RE.test(parts[1]))
\t\t\tthrow (new FingerprintFormatError(fp));
\t\ttry {
\t\t\thash = new Buffer(parts[1], 'base64');
\t\t} catch (e) {
\t\t\tthrow (new FingerprintFormatError(fp));
\t\t}
\t} else if (parts.length > 2) {
\t\talg = 'md5';
\t\tif (parts[0].toLowerCase() === 'md5')
\t\t\tparts = parts.slice(1);
\t\tparts = parts.join('');
\t\t/*JSSTYLED*/
\t\tvar md5RE = /^[a-fA-F0-9]+\$/;
\t\tif (!md5RE.test(parts))
\t\t\tthrow (new FingerprintFormatError(fp));
\t\ttry {
\t\t\thash = new Buffer(parts, 'hex');
\t\t} catch (e) {
\t\t\tthrow (new FingerprintFormatError(fp));
\t\t}
\t}

\tif (alg === undefined)
\t\tthrow (new FingerprintFormatError(fp));

\tif (algs.hashAlgs[alg] === undefined)
\t\tthrow (new InvalidAlgorithmError(alg));

\tif (enAlgs !== undefined) {
\t\tenAlgs = enAlgs.map(function (a) { return a.toLowerCase(); });
\t\tif (enAlgs.indexOf(alg) === -1)
\t\t\tthrow (new InvalidAlgorithmError(alg));
\t}

\treturn (new Fingerprint({
\t\talgorithm: alg,
\t\thash: hash,
\t\ttype: options.type || 'key'
\t}));
};

function addColons(s) {
\t/*JSSTYLED*/
\treturn (s.replace(/(.{2})(?=.)/g, '\$1:'));
}

function base64Strip(s) {
\t/*JSSTYLED*/
\treturn (s.replace(/=*\$/, ''));
}

function sshBase64Format(alg, h) {
\treturn (alg.toUpperCase() + ':' + base64Strip(h));
}

Fingerprint.isFingerprint = function (obj, ver) {
\treturn (utils.isCompatible(obj, Fingerprint, ver));
};

/*
 * API versions for Fingerprint:
 * [1,0] -- initial ver
 * [1,1] -- first tagged ver
 */
Fingerprint.prototype._sshpkApiVersion = [1, 1];

Fingerprint._oldVersionDetect = function (obj) {
\tassert.func(obj.toString);
\tassert.func(obj.matches);
\treturn ([1, 0]);
};
", "node_modules/fsevents/node_modules/sshpk/lib/fingerprint.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/sshpk/lib/fingerprint.js");
    }
}
