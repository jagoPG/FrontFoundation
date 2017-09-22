<?php

/* node_modules/fsevents/node_modules/sshpk/bin/sshpk-verify */
class __TwigTemplate_eb24c46626e6f9b8f0418d43d70abeda6dfc003ca81664bd212f5f31e8d370ea extends Twig_Template
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
        $__internal_3c0ae39e971d6a947bc99c1d5960bebfb8e91e003854cb3e20db0a81465e0141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0ae39e971d6a947bc99c1d5960bebfb8e91e003854cb3e20db0a81465e0141->enter($__internal_3c0ae39e971d6a947bc99c1d5960bebfb8e91e003854cb3e20db0a81465e0141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/sshpk/bin/sshpk-verify"));

        // line 1
        echo "#!/usr/bin/env node
// -*- mode: js -*-
// vim: set filetype=javascript :
// Copyright 2015 Joyent, Inc.  All rights reserved.

var dashdash = require('dashdash');
var sshpk = require('../lib/index');
var fs = require('fs');
var path = require('path');

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
\t\thelp: 'Path to (public) key to use'
\t},
\t{
\t\tnames: ['file', 'f'],
\t\ttype: 'string',
\t\thelp: 'Input filename'
\t},
\t{
\t\tnames: ['format', 't'],
\t\ttype: 'string',
\t\thelp: 'Signature format (asn1, ssh, raw)'
\t},
\t{
\t\tnames: ['signature', 's'],
\t\ttype: 'string',
\t\thelp: 'base64-encoded signature data'
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
\t\tconsole.error('sshpk-verify: error: %s', e.message);
\t\tprocess.exit(3);
\t}

\tif (opts.help || opts._args.length > 1) {
\t\tvar help = parser.help({}).trimRight();
\t\tconsole.error('sshpk-verify: sign data using an SSH key\\n');
\t\tconsole.error(help);
\t\tprocess.exit(3);
\t}

\tif (!opts.identity) {
\t\tvar help = parser.help({}).trimRight();
\t\tconsole.error('sshpk-verify: the -i or --identity option ' +
\t\t    'is required\\n');
\t\tconsole.error(help);
\t\tprocess.exit(3);
\t}

\tif (!opts.signature) {
\t\tvar help = parser.help({}).trimRight();
\t\tconsole.error('sshpk-verify: the -s or --signature option ' +
\t\t    'is required\\n');
\t\tconsole.error(help);
\t\tprocess.exit(3);
\t}

\tvar keyData = fs.readFileSync(opts.identity);

\tvar key;
\ttry {
\t\tkey = sshpk.parseKey(keyData);
\t} catch (e) {
\t\tconsole.error('sshpk-verify: error loading key \"' +
\t\t    opts.identity + '\": ' + e.name + ': ' + e.message);
\t\tprocess.exit(2);
\t}

\tvar fmt = opts.format || 'asn1';
\tvar sigData = new Buffer(opts.signature, 'base64');

\tvar sig;
\ttry {
\t\tsig = sshpk.parseSignature(sigData, key.type, fmt);
\t} catch (e) {
\t\tconsole.error('sshpk-verify: error parsing signature: ' +
\t\t    e.name + ': ' + e.message);
\t\tprocess.exit(2);
\t}

\tvar hash = opts.hash || key.defaultHashAlgorithm();

\tvar verifier;
\ttry {
\t\tverifier = key.createVerify(hash);
\t} catch (e) {
\t\tconsole.error('sshpk-verify: error creating verifier: ' +
\t\t    e.name + ': ' + e.message);
\t\tprocess.exit(2);
\t}

\tif (opts.verbose) {
\t\tconsole.error('sshpk-verify: using %s-%s with a %d bit key',
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
\t\tconsole.error('sshpk-verify: error opening input file' +
\t\t     ': ' + e.name + ': ' + e.message);
\t\tprocess.exit(2);
\t}

\tinFile.pipe(verifier);
\tinFile.on('end', function () {
\t\tvar ret;
\t\ttry {
\t\t\tret = verifier.verify(sig);
\t\t} catch (e) {
\t\t\tconsole.error('sshpk-verify: error verifying data: ' +
\t\t\t    e.name + ': ' + e.message);
\t\t\tprocess.exit(1);
\t\t}

\t\tif (ret) {
\t\t\tconsole.error('OK');
\t\t\tprocess.exit(0);
\t\t}

\t\tconsole.error('NOT OK');
\t\tprocess.exit(1);
\t});
}
";
        
        $__internal_3c0ae39e971d6a947bc99c1d5960bebfb8e91e003854cb3e20db0a81465e0141->leave($__internal_3c0ae39e971d6a947bc99c1d5960bebfb8e91e003854cb3e20db0a81465e0141_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/sshpk/bin/sshpk-verify";
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
\t\thelp: 'Path to (public) key to use'
\t},
\t{
\t\tnames: ['file', 'f'],
\t\ttype: 'string',
\t\thelp: 'Input filename'
\t},
\t{
\t\tnames: ['format', 't'],
\t\ttype: 'string',
\t\thelp: 'Signature format (asn1, ssh, raw)'
\t},
\t{
\t\tnames: ['signature', 's'],
\t\ttype: 'string',
\t\thelp: 'base64-encoded signature data'
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
\t\tconsole.error('sshpk-verify: error: %s', e.message);
\t\tprocess.exit(3);
\t}

\tif (opts.help || opts._args.length > 1) {
\t\tvar help = parser.help({}).trimRight();
\t\tconsole.error('sshpk-verify: sign data using an SSH key\\n');
\t\tconsole.error(help);
\t\tprocess.exit(3);
\t}

\tif (!opts.identity) {
\t\tvar help = parser.help({}).trimRight();
\t\tconsole.error('sshpk-verify: the -i or --identity option ' +
\t\t    'is required\\n');
\t\tconsole.error(help);
\t\tprocess.exit(3);
\t}

\tif (!opts.signature) {
\t\tvar help = parser.help({}).trimRight();
\t\tconsole.error('sshpk-verify: the -s or --signature option ' +
\t\t    'is required\\n');
\t\tconsole.error(help);
\t\tprocess.exit(3);
\t}

\tvar keyData = fs.readFileSync(opts.identity);

\tvar key;
\ttry {
\t\tkey = sshpk.parseKey(keyData);
\t} catch (e) {
\t\tconsole.error('sshpk-verify: error loading key \"' +
\t\t    opts.identity + '\": ' + e.name + ': ' + e.message);
\t\tprocess.exit(2);
\t}

\tvar fmt = opts.format || 'asn1';
\tvar sigData = new Buffer(opts.signature, 'base64');

\tvar sig;
\ttry {
\t\tsig = sshpk.parseSignature(sigData, key.type, fmt);
\t} catch (e) {
\t\tconsole.error('sshpk-verify: error parsing signature: ' +
\t\t    e.name + ': ' + e.message);
\t\tprocess.exit(2);
\t}

\tvar hash = opts.hash || key.defaultHashAlgorithm();

\tvar verifier;
\ttry {
\t\tverifier = key.createVerify(hash);
\t} catch (e) {
\t\tconsole.error('sshpk-verify: error creating verifier: ' +
\t\t    e.name + ': ' + e.message);
\t\tprocess.exit(2);
\t}

\tif (opts.verbose) {
\t\tconsole.error('sshpk-verify: using %s-%s with a %d bit key',
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
\t\tconsole.error('sshpk-verify: error opening input file' +
\t\t     ': ' + e.name + ': ' + e.message);
\t\tprocess.exit(2);
\t}

\tinFile.pipe(verifier);
\tinFile.on('end', function () {
\t\tvar ret;
\t\ttry {
\t\t\tret = verifier.verify(sig);
\t\t} catch (e) {
\t\t\tconsole.error('sshpk-verify: error verifying data: ' +
\t\t\t    e.name + ': ' + e.message);
\t\t\tprocess.exit(1);
\t\t}

\t\tif (ret) {
\t\t\tconsole.error('OK');
\t\t\tprocess.exit(0);
\t\t}

\t\tconsole.error('NOT OK');
\t\tprocess.exit(1);
\t});
}
", "node_modules/fsevents/node_modules/sshpk/bin/sshpk-verify", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/sshpk/bin/sshpk-verify");
    }
}
