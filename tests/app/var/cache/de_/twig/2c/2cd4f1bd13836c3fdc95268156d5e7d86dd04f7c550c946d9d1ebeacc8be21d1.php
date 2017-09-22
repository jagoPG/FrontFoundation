<?php

/* node_modules/fsevents/node_modules/sshpk/bin/sshpk-conv */
class __TwigTemplate_b2ccdf06870ac07a88cde451dbfa775a4bcb82ae6c98e6f736f9660be38d2e6a extends Twig_Template
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
        $__internal_a8c20dae57466334fefaf4ec8d9245ae37dc3584972a64295e3597edfd502d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c20dae57466334fefaf4ec8d9245ae37dc3584972a64295e3597edfd502d61->enter($__internal_a8c20dae57466334fefaf4ec8d9245ae37dc3584972a64295e3597edfd502d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/sshpk/bin/sshpk-conv"));

        // line 1
        echo "#!/usr/bin/env node
// -*- mode: js -*-
// vim: set filetype=javascript :
// Copyright 2015 Joyent, Inc.  All rights reserved.

var dashdash = require('dashdash');
var sshpk = require('../lib/index');
var fs = require('fs');
var path = require('path');
var tty = require('tty');
var readline = require('readline');
var getPassword = require('getpass').getPass;

var options = [
\t{
\t\tnames: ['outformat', 't'],
\t\ttype: 'string',
\t\thelp: 'Output format'
\t},
\t{
\t\tnames: ['informat', 'T'],
\t\ttype: 'string',
\t\thelp: 'Input format'
\t},
\t{
\t\tnames: ['file', 'f'],
\t\ttype: 'string',
\t\thelp: 'Input file name (default stdin)'
\t},
\t{
\t\tnames: ['out', 'o'],
\t\ttype: 'string',
\t\thelp: 'Output file name (default stdout)'
\t},
\t{
\t\tnames: ['private', 'p'],
\t\ttype: 'bool',
\t\thelp: 'Produce a private key as output'
\t},
\t{
\t\tnames: ['derive', 'd'],
\t\ttype: 'string',
\t\thelp: 'Output a new key derived from this one, with given algo'
\t},
\t{
\t\tnames: ['identify', 'i'],
\t\ttype: 'bool',
\t\thelp: 'Print key metadata instead of converting'
\t},
\t{
\t\tnames: ['comment', 'c'],
\t\ttype: 'string',
\t\thelp: 'Set key comment, if output format supports'
\t},
\t{
\t\tnames: ['help', 'h'],
\t\ttype: 'bool',
\t\thelp: 'Shows this help text'
\t}
];

if (require.main === module) {
\tvar parser = dashdash.createParser({
\t\toptions: options
\t});

\ttry {
\t\tvar opts = parser.parse(process.argv);
\t} catch (e) {
\t\tconsole.error('sshpk-conv: error: %s', e.message);
\t\tprocess.exit(1);
\t}

\tif (opts.help || opts._args.length > 1) {
\t\tvar help = parser.help({}).trimRight();
\t\tconsole.error('sshpk-conv: converts between SSH key formats\\n');
\t\tconsole.error(help);
\t\tconsole.error('\\navailable formats:');
\t\tconsole.error('  - pem, pkcs1     eg id_rsa');
\t\tconsole.error('  - ssh            eg id_rsa.pub');
\t\tconsole.error('  - pkcs8          format you want for openssl');
\t\tconsole.error('  - openssh        like output of ssh-keygen -o');
\t\tconsole.error('  - rfc4253        raw OpenSSH wire format');
\t\tprocess.exit(1);
\t}

\t/*
\t * Key derivation can only be done on private keys, so use of the -d
\t * option necessarily implies -p.
\t */
\tif (opts.derive)
\t\topts.private = true;

\tvar inFile = process.stdin;
\tvar inFileName = 'stdin';

\tvar inFilePath;
\tif (opts.file) {
\t\tinFilePath = opts.file;
\t} else if (opts._args.length === 1) {
\t\tinFilePath = opts._args[0];
\t}

\tif (inFilePath)
\t\tinFileName = path.basename(inFilePath);

\ttry {
\t\tif (inFilePath) {
\t\t\tfs.accessSync(inFilePath, fs.R_OK);
\t\t\tinFile = fs.createReadStream(inFilePath);
\t\t}
\t} catch (e) {
\t\tconsole.error('sshpk-conv: error opening input file' +
\t\t     ': ' + e.name + ': ' + e.message);
\t\tprocess.exit(1);
\t}

\tvar outFile = process.stdout;

\ttry {
\t\tif (opts.out && !opts.identify) {
\t\t\tfs.accessSync(path.dirname(opts.out), fs.W_OK);
\t\t\toutFile = fs.createWriteStream(opts.out);
\t\t}
\t} catch (e) {
\t\tconsole.error('sshpk-conv: error opening output file' +
\t\t    ': ' + e.name + ': ' + e.message);
\t\tprocess.exit(1);
\t}

\tvar bufs = [];
\tinFile.on('readable', function () {
\t\tvar data;
\t\twhile ((data = inFile.read()))
\t\t\tbufs.push(data);
\t});
\tvar parseOpts = {};
\tparseOpts.filename = inFileName;
\tinFile.on('end', function processKey() {
\t\tvar buf = Buffer.concat(bufs);
\t\tvar fmt = 'auto';
\t\tif (opts.informat)
\t\t\tfmt = opts.informat;
\t\tvar f = sshpk.parseKey;
\t\tif (opts.private)
\t\t\tf = sshpk.parsePrivateKey;
\t\ttry {
\t\t\tvar key = f(buf, fmt, parseOpts);
\t\t} catch (e) {
\t\t\tif (e.name === 'KeyEncryptedError') {
\t\t\t\tgetPassword(function (err, pw) {
\t\t\t\t\tif (err) {
\t\t\t\t\t\tconsole.log('sshpk-conv: ' +
\t\t\t\t\t\t    err.name + ': ' +
\t\t\t\t\t\t    err.message);
\t\t\t\t\t\tprocess.exit(1);
\t\t\t\t\t}
\t\t\t\t\tparseOpts.passphrase = pw;
\t\t\t\t\tprocessKey();
\t\t\t\t});
\t\t\t\treturn;
\t\t\t}
\t\t\tconsole.error('sshpk-conv: ' +
\t\t\t    e.name + ': ' + e.message);
\t\t\tprocess.exit(1);
\t\t}

\t\tif (opts.derive)
\t\t\tkey = key.derive(opts.derive);

\t\tif (opts.comment)
\t\t\tkey.comment = opts.comment;

\t\tif (!opts.identify) {
\t\t\tfmt = undefined;
\t\t\tif (opts.outformat)
\t\t\t\tfmt = opts.outformat;
\t\t\toutFile.write(key.toBuffer(fmt));
\t\t\tif (fmt === 'ssh' ||
\t\t\t    (!opts.private && fmt === undefined))
\t\t\t\toutFile.write('\\n');
\t\t\toutFile.once('drain', function () {
\t\t\t\tprocess.exit(0);
\t\t\t});
\t\t} else {
\t\t\tvar kind = 'public';
\t\t\tif (sshpk.PrivateKey.isPrivateKey(key))
\t\t\t\tkind = 'private';
\t\t\tconsole.log('%s: a %d bit %s %s key', inFileName,
\t\t\t    key.size, key.type.toUpperCase(), kind);
\t\t\tif (key.type === 'ecdsa')
\t\t\t\tconsole.log('ECDSA curve: %s', key.curve);
\t\t\tif (key.comment)
\t\t\t\tconsole.log('Comment: %s', key.comment);
\t\t\tconsole.log('Fingerprint:');
\t\t\tconsole.log('  ' + key.fingerprint().toString());
\t\t\tconsole.log('  ' + key.fingerprint('md5').toString());
\t\t\tprocess.exit(0);
\t\t}
\t});
}
";
        
        $__internal_a8c20dae57466334fefaf4ec8d9245ae37dc3584972a64295e3597edfd502d61->leave($__internal_a8c20dae57466334fefaf4ec8d9245ae37dc3584972a64295e3597edfd502d61_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/sshpk/bin/sshpk-conv";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env node
// -*- mode: js -*-
// vim: set filetype=javascript :
// Copyright 2015 Joyent, Inc.  All rights reserved.

var dashdash = require('dashdash');
var sshpk = require('../lib/index');
var fs = require('fs');
var path = require('path');
var tty = require('tty');
var readline = require('readline');
var getPassword = require('getpass').getPass;

var options = [
\t{
\t\tnames: ['outformat', 't'],
\t\ttype: 'string',
\t\thelp: 'Output format'
\t},
\t{
\t\tnames: ['informat', 'T'],
\t\ttype: 'string',
\t\thelp: 'Input format'
\t},
\t{
\t\tnames: ['file', 'f'],
\t\ttype: 'string',
\t\thelp: 'Input file name (default stdin)'
\t},
\t{
\t\tnames: ['out', 'o'],
\t\ttype: 'string',
\t\thelp: 'Output file name (default stdout)'
\t},
\t{
\t\tnames: ['private', 'p'],
\t\ttype: 'bool',
\t\thelp: 'Produce a private key as output'
\t},
\t{
\t\tnames: ['derive', 'd'],
\t\ttype: 'string',
\t\thelp: 'Output a new key derived from this one, with given algo'
\t},
\t{
\t\tnames: ['identify', 'i'],
\t\ttype: 'bool',
\t\thelp: 'Print key metadata instead of converting'
\t},
\t{
\t\tnames: ['comment', 'c'],
\t\ttype: 'string',
\t\thelp: 'Set key comment, if output format supports'
\t},
\t{
\t\tnames: ['help', 'h'],
\t\ttype: 'bool',
\t\thelp: 'Shows this help text'
\t}
];

if (require.main === module) {
\tvar parser = dashdash.createParser({
\t\toptions: options
\t});

\ttry {
\t\tvar opts = parser.parse(process.argv);
\t} catch (e) {
\t\tconsole.error('sshpk-conv: error: %s', e.message);
\t\tprocess.exit(1);
\t}

\tif (opts.help || opts._args.length > 1) {
\t\tvar help = parser.help({}).trimRight();
\t\tconsole.error('sshpk-conv: converts between SSH key formats\\n');
\t\tconsole.error(help);
\t\tconsole.error('\\navailable formats:');
\t\tconsole.error('  - pem, pkcs1     eg id_rsa');
\t\tconsole.error('  - ssh            eg id_rsa.pub');
\t\tconsole.error('  - pkcs8          format you want for openssl');
\t\tconsole.error('  - openssh        like output of ssh-keygen -o');
\t\tconsole.error('  - rfc4253        raw OpenSSH wire format');
\t\tprocess.exit(1);
\t}

\t/*
\t * Key derivation can only be done on private keys, so use of the -d
\t * option necessarily implies -p.
\t */
\tif (opts.derive)
\t\topts.private = true;

\tvar inFile = process.stdin;
\tvar inFileName = 'stdin';

\tvar inFilePath;
\tif (opts.file) {
\t\tinFilePath = opts.file;
\t} else if (opts._args.length === 1) {
\t\tinFilePath = opts._args[0];
\t}

\tif (inFilePath)
\t\tinFileName = path.basename(inFilePath);

\ttry {
\t\tif (inFilePath) {
\t\t\tfs.accessSync(inFilePath, fs.R_OK);
\t\t\tinFile = fs.createReadStream(inFilePath);
\t\t}
\t} catch (e) {
\t\tconsole.error('sshpk-conv: error opening input file' +
\t\t     ': ' + e.name + ': ' + e.message);
\t\tprocess.exit(1);
\t}

\tvar outFile = process.stdout;

\ttry {
\t\tif (opts.out && !opts.identify) {
\t\t\tfs.accessSync(path.dirname(opts.out), fs.W_OK);
\t\t\toutFile = fs.createWriteStream(opts.out);
\t\t}
\t} catch (e) {
\t\tconsole.error('sshpk-conv: error opening output file' +
\t\t    ': ' + e.name + ': ' + e.message);
\t\tprocess.exit(1);
\t}

\tvar bufs = [];
\tinFile.on('readable', function () {
\t\tvar data;
\t\twhile ((data = inFile.read()))
\t\t\tbufs.push(data);
\t});
\tvar parseOpts = {};
\tparseOpts.filename = inFileName;
\tinFile.on('end', function processKey() {
\t\tvar buf = Buffer.concat(bufs);
\t\tvar fmt = 'auto';
\t\tif (opts.informat)
\t\t\tfmt = opts.informat;
\t\tvar f = sshpk.parseKey;
\t\tif (opts.private)
\t\t\tf = sshpk.parsePrivateKey;
\t\ttry {
\t\t\tvar key = f(buf, fmt, parseOpts);
\t\t} catch (e) {
\t\t\tif (e.name === 'KeyEncryptedError') {
\t\t\t\tgetPassword(function (err, pw) {
\t\t\t\t\tif (err) {
\t\t\t\t\t\tconsole.log('sshpk-conv: ' +
\t\t\t\t\t\t    err.name + ': ' +
\t\t\t\t\t\t    err.message);
\t\t\t\t\t\tprocess.exit(1);
\t\t\t\t\t}
\t\t\t\t\tparseOpts.passphrase = pw;
\t\t\t\t\tprocessKey();
\t\t\t\t});
\t\t\t\treturn;
\t\t\t}
\t\t\tconsole.error('sshpk-conv: ' +
\t\t\t    e.name + ': ' + e.message);
\t\t\tprocess.exit(1);
\t\t}

\t\tif (opts.derive)
\t\t\tkey = key.derive(opts.derive);

\t\tif (opts.comment)
\t\t\tkey.comment = opts.comment;

\t\tif (!opts.identify) {
\t\t\tfmt = undefined;
\t\t\tif (opts.outformat)
\t\t\t\tfmt = opts.outformat;
\t\t\toutFile.write(key.toBuffer(fmt));
\t\t\tif (fmt === 'ssh' ||
\t\t\t    (!opts.private && fmt === undefined))
\t\t\t\toutFile.write('\\n');
\t\t\toutFile.once('drain', function () {
\t\t\t\tprocess.exit(0);
\t\t\t});
\t\t} else {
\t\t\tvar kind = 'public';
\t\t\tif (sshpk.PrivateKey.isPrivateKey(key))
\t\t\t\tkind = 'private';
\t\t\tconsole.log('%s: a %d bit %s %s key', inFileName,
\t\t\t    key.size, key.type.toUpperCase(), kind);
\t\t\tif (key.type === 'ecdsa')
\t\t\t\tconsole.log('ECDSA curve: %s', key.curve);
\t\t\tif (key.comment)
\t\t\t\tconsole.log('Comment: %s', key.comment);
\t\t\tconsole.log('Fingerprint:');
\t\t\tconsole.log('  ' + key.fingerprint().toString());
\t\t\tconsole.log('  ' + key.fingerprint('md5').toString());
\t\t\tprocess.exit(0);
\t\t}
\t});
}
", "node_modules/fsevents/node_modules/sshpk/bin/sshpk-conv", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/sshpk/bin/sshpk-conv");
    }
}
