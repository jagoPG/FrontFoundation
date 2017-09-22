<?php

/* node_modules/fsevents/node_modules/sshpk/bin/sshpk-sign */
class __TwigTemplate_d0acf084201dac860052da53ba216d661815532032101c7b603e06988ee18f9a extends Twig_Template
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
        $__internal_197b577d11ec59f204c0a1ca867566f8d949b643c7e335fdfca78ef838dd2b00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197b577d11ec59f204c0a1ca867566f8d949b643c7e335fdfca78ef838dd2b00->enter($__internal_197b577d11ec59f204c0a1ca867566f8d949b643c7e335fdfca78ef838dd2b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/sshpk/bin/sshpk-sign"));

        // line 1
        echo "#!/usr/bin/env node
// -*- mode: js -*-
// vim: set filetype=javascript :
// Copyright 2015 Joyent, Inc.  All rights reserved.

var dashdash = require('dashdash');
var sshpk = require('../lib/index');
var fs = require('fs');
var path = require('path');
var getPassword = require('getpass').getPass;

var options = [
\t{
\t\tnames: ['hash', 'H'],
\t\ttype: 'string',
\t\thelp: 'Hash algorithm (sha1, sha256, sha384, sha512)'
\t},
\t{
\t\tnames: ['verbose', 'v'],
\t\ttype: 'bool',
\t\thelp: 'Display verbose info about key and hash used'
\t},
\t{
\t\tnames: ['identity', 'i'],
\t\ttype: 'string',
\t\thelp: 'Path to key to use'
\t},
\t{
\t\tnames: ['file', 'f'],
\t\ttype: 'string',
\t\thelp: 'Input filename'
\t},
\t{
\t\tnames: ['out', 'o'],
\t\ttype: 'string',
\t\thelp: 'Output filename'
\t},
\t{
\t\tnames: ['format', 't'],
\t\ttype: 'string',
\t\thelp: 'Signature format (asn1, ssh, raw)'
\t},
\t{
\t\tnames: ['binary', 'b'],
\t\ttype: 'bool',
\t\thelp: 'Output raw binary instead of base64'
\t},
\t{
\t\tnames: ['help', 'h'],
\t\ttype: 'bool',
\t\thelp: 'Shows this help text'
\t}
];

var parseOpts = {};

if (require.main === module) {
\tvar parser = dashdash.createParser({
\t\toptions: options
\t});

\ttry {
\t\tvar opts = parser.parse(process.argv);
\t} catch (e) {
\t\tconsole.error('sshpk-sign: error: %s', e.message);
\t\tprocess.exit(1);
\t}

\tif (opts.help || opts._args.length > 1) {
\t\tvar help = parser.help({}).trimRight();
\t\tconsole.error('sshpk-sign: sign data using an SSH key\\n');
\t\tconsole.error(help);
\t\tprocess.exit(1);
\t}

\tif (!opts.identity) {
\t\tvar help = parser.help({}).trimRight();
\t\tconsole.error('sshpk-sign: the -i or --identity option ' +
\t\t    'is required\\n');
\t\tconsole.error(help);
\t\tprocess.exit(1);
\t}

\tvar keyData = fs.readFileSync(opts.identity);
\tparseOpts.filename = opts.identity;

\trun();
}

function run() {
\tvar key;
\ttry {
\t\tkey = sshpk.parsePrivateKey(keyData, 'auto', parseOpts);
\t} catch (e) {
\t\tif (e.name === 'KeyEncryptedError') {
\t\t\tgetPassword(function (err, pw) {
\t\t\t\tparseOpts.passphrase = pw;
\t\t\t\trun();
\t\t\t});
\t\t\treturn;
\t\t}
\t\tconsole.error('sshpk-sign: error loading private key \"' +
\t\t    opts.identity + '\": ' + e.name + ': ' + e.message);
\t\tprocess.exit(1);
\t}

\tvar hash = opts.hash || key.defaultHashAlgorithm();

\tvar signer;
\ttry {
\t\tsigner = key.createSign(hash);
\t} catch (e) {
\t\tconsole.error('sshpk-sign: error creating signer: ' +
\t\t    e.name + ': ' + e.message);
\t\tprocess.exit(1);
\t}

\tif (opts.verbose) {
\t\tconsole.error('sshpk-sign: using %s-%s with a %d bit key',
\t\t    key.type, hash, key.size);
\t}

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
\t\tconsole.error('sshpk-sign: error opening input file' +
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
\t\tconsole.error('sshpk-sign: error opening output file' +
\t\t    ': ' + e.name + ': ' + e.message);
\t\tprocess.exit(1);
\t}

\tinFile.pipe(signer);
\tinFile.on('end', function () {
\t\tvar sig;
\t\ttry {
\t\t\tsig = signer.sign();
\t\t} catch (e) {
\t\t\tconsole.error('sshpk-sign: error signing data: ' +
\t\t\t    e.name + ': ' + e.message);
\t\t\tprocess.exit(1);
\t\t}

\t\tvar fmt = opts.format || 'asn1';
\t\tvar output;
\t\ttry {
\t\t\toutput = sig.toBuffer(fmt);
\t\t\tif (!opts.binary)
\t\t\t\toutput = output.toString('base64');
\t\t} catch (e) {
\t\t\tconsole.error('sshpk-sign: error converting signature' +
\t\t\t    ' to ' + fmt + ' format: ' + e.name + ': ' +
\t\t\t    e.message);
\t\t\tprocess.exit(1);
\t\t}

\t\toutFile.write(output);
\t\tif (!opts.binary)
\t\t\toutFile.write('\\n');
\t\toutFile.once('drain', function () {
\t\t\tprocess.exit(0);
\t\t});
\t});
}
";
        
        $__internal_197b577d11ec59f204c0a1ca867566f8d949b643c7e335fdfca78ef838dd2b00->leave($__internal_197b577d11ec59f204c0a1ca867566f8d949b643c7e335fdfca78ef838dd2b00_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/sshpk/bin/sshpk-sign";
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
var getPassword = require('getpass').getPass;

var options = [
\t{
\t\tnames: ['hash', 'H'],
\t\ttype: 'string',
\t\thelp: 'Hash algorithm (sha1, sha256, sha384, sha512)'
\t},
\t{
\t\tnames: ['verbose', 'v'],
\t\ttype: 'bool',
\t\thelp: 'Display verbose info about key and hash used'
\t},
\t{
\t\tnames: ['identity', 'i'],
\t\ttype: 'string',
\t\thelp: 'Path to key to use'
\t},
\t{
\t\tnames: ['file', 'f'],
\t\ttype: 'string',
\t\thelp: 'Input filename'
\t},
\t{
\t\tnames: ['out', 'o'],
\t\ttype: 'string',
\t\thelp: 'Output filename'
\t},
\t{
\t\tnames: ['format', 't'],
\t\ttype: 'string',
\t\thelp: 'Signature format (asn1, ssh, raw)'
\t},
\t{
\t\tnames: ['binary', 'b'],
\t\ttype: 'bool',
\t\thelp: 'Output raw binary instead of base64'
\t},
\t{
\t\tnames: ['help', 'h'],
\t\ttype: 'bool',
\t\thelp: 'Shows this help text'
\t}
];

var parseOpts = {};

if (require.main === module) {
\tvar parser = dashdash.createParser({
\t\toptions: options
\t});

\ttry {
\t\tvar opts = parser.parse(process.argv);
\t} catch (e) {
\t\tconsole.error('sshpk-sign: error: %s', e.message);
\t\tprocess.exit(1);
\t}

\tif (opts.help || opts._args.length > 1) {
\t\tvar help = parser.help({}).trimRight();
\t\tconsole.error('sshpk-sign: sign data using an SSH key\\n');
\t\tconsole.error(help);
\t\tprocess.exit(1);
\t}

\tif (!opts.identity) {
\t\tvar help = parser.help({}).trimRight();
\t\tconsole.error('sshpk-sign: the -i or --identity option ' +
\t\t    'is required\\n');
\t\tconsole.error(help);
\t\tprocess.exit(1);
\t}

\tvar keyData = fs.readFileSync(opts.identity);
\tparseOpts.filename = opts.identity;

\trun();
}

function run() {
\tvar key;
\ttry {
\t\tkey = sshpk.parsePrivateKey(keyData, 'auto', parseOpts);
\t} catch (e) {
\t\tif (e.name === 'KeyEncryptedError') {
\t\t\tgetPassword(function (err, pw) {
\t\t\t\tparseOpts.passphrase = pw;
\t\t\t\trun();
\t\t\t});
\t\t\treturn;
\t\t}
\t\tconsole.error('sshpk-sign: error loading private key \"' +
\t\t    opts.identity + '\": ' + e.name + ': ' + e.message);
\t\tprocess.exit(1);
\t}

\tvar hash = opts.hash || key.defaultHashAlgorithm();

\tvar signer;
\ttry {
\t\tsigner = key.createSign(hash);
\t} catch (e) {
\t\tconsole.error('sshpk-sign: error creating signer: ' +
\t\t    e.name + ': ' + e.message);
\t\tprocess.exit(1);
\t}

\tif (opts.verbose) {
\t\tconsole.error('sshpk-sign: using %s-%s with a %d bit key',
\t\t    key.type, hash, key.size);
\t}

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
\t\tconsole.error('sshpk-sign: error opening input file' +
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
\t\tconsole.error('sshpk-sign: error opening output file' +
\t\t    ': ' + e.name + ': ' + e.message);
\t\tprocess.exit(1);
\t}

\tinFile.pipe(signer);
\tinFile.on('end', function () {
\t\tvar sig;
\t\ttry {
\t\t\tsig = signer.sign();
\t\t} catch (e) {
\t\t\tconsole.error('sshpk-sign: error signing data: ' +
\t\t\t    e.name + ': ' + e.message);
\t\t\tprocess.exit(1);
\t\t}

\t\tvar fmt = opts.format || 'asn1';
\t\tvar output;
\t\ttry {
\t\t\toutput = sig.toBuffer(fmt);
\t\t\tif (!opts.binary)
\t\t\t\toutput = output.toString('base64');
\t\t} catch (e) {
\t\t\tconsole.error('sshpk-sign: error converting signature' +
\t\t\t    ' to ' + fmt + ' format: ' + e.name + ': ' +
\t\t\t    e.message);
\t\t\tprocess.exit(1);
\t\t}

\t\toutFile.write(output);
\t\tif (!opts.binary)
\t\t\toutFile.write('\\n');
\t\toutFile.once('drain', function () {
\t\t\tprocess.exit(0);
\t\t});
\t});
}
", "node_modules/fsevents/node_modules/sshpk/bin/sshpk-sign", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/sshpk/bin/sshpk-sign");
    }
}
