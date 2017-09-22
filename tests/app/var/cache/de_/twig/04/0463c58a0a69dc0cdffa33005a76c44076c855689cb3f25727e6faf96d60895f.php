<?php

/* node_modules/sshpk/lib/formats/ssh.js */
class __TwigTemplate_a2344922584c11e22fffc7dd07747e32adf030e7cbda1c30315ba8a2ead66cb4 extends Twig_Template
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
        $__internal_39b03638e9e848b8d3f8bb672e5ec484aef4a0606c396c009bee7f846dbc9cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b03638e9e848b8d3f8bb672e5ec484aef4a0606c396c009bee7f846dbc9cb8->enter($__internal_39b03638e9e848b8d3f8bb672e5ec484aef4a0606c396c009bee7f846dbc9cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sshpk/lib/formats/ssh.js"));

        // line 1
        echo "// Copyright 2015 Joyent, Inc.

module.exports = {
\tread: read,
\twrite: write
};

var assert = require('assert-plus');
var rfc4253 = require('./rfc4253');
var utils = require('../utils');
var Key = require('../key');
var PrivateKey = require('../private-key');

var sshpriv = require('./ssh-private');

/*JSSTYLED*/
var SSHKEY_RE = /^([a-z0-9-]+)[ \\t]+([a-zA-Z0-9+\\/]+[=]*)([\\n \\t]+([^\\n]+))?\$/;
/*JSSTYLED*/
var SSHKEY_RE2 = /^([a-z0-9-]+)[ \\t]+([a-zA-Z0-9+\\/ \\t\\n]+[=]*)(.*)\$/;

function read(buf, options) {
\tif (typeof (buf) !== 'string') {
\t\tassert.buffer(buf, 'buf');
\t\tbuf = buf.toString('ascii');
\t}

\tvar trimmed = buf.trim().replace(/[\\\\\\r]/g, '');
\tvar m = trimmed.match(SSHKEY_RE);
\tif (!m)
\t\tm = trimmed.match(SSHKEY_RE2);
\tassert.ok(m, 'key must match regex');

\tvar type = rfc4253.algToKeyType(m[1]);
\tvar kbuf = new Buffer(m[2], 'base64');

\t/*
\t * This is a bit tricky. If we managed to parse the key and locate the
\t * key comment with the regex, then do a non-partial read and assert
\t * that we have consumed all bytes. If we couldn't locate the key
\t * comment, though, there may be whitespace shenanigans going on that
\t * have conjoined the comment to the rest of the key. We do a partial
\t * read in this case to try to make the best out of a sorry situation.
\t */
\tvar key;
\tvar ret = {};
\tif (m[4]) {
\t\ttry {
\t\t\tkey = rfc4253.read(kbuf);

\t\t} catch (e) {
\t\t\tm = trimmed.match(SSHKEY_RE2);
\t\t\tassert.ok(m, 'key must match regex');
\t\t\tkbuf = new Buffer(m[2], 'base64');
\t\t\tkey = rfc4253.readInternal(ret, 'public', kbuf);
\t\t}
\t} else {
\t\tkey = rfc4253.readInternal(ret, 'public', kbuf);
\t}

\tassert.strictEqual(type, key.type);

\tif (m[4] && m[4].length > 0) {
\t\tkey.comment = m[4];

\t} else if (ret.consumed) {
\t\t/*
\t\t * Now the magic: trying to recover the key comment when it's
\t\t * gotten conjoined to the key or otherwise shenanigan'd.
\t\t *
\t\t * Work out how much base64 we used, then drop all non-base64
\t\t * chars from the beginning up to this point in the the string.
\t\t * Then offset in this and try to make up for missing = chars.
\t\t */
\t\tvar data = m[2] + m[3];
\t\tvar realOffset = Math.ceil(ret.consumed / 3) * 4;
\t\tdata = data.slice(0, realOffset - 2). /*JSSTYLED*/
\t\t    replace(/[^a-zA-Z0-9+\\/=]/g, '') +
\t\t    data.slice(realOffset - 2);

\t\tvar padding = ret.consumed % 3;
\t\tif (padding > 0 &&
\t\t    data.slice(realOffset - 1, realOffset) !== '=')
\t\t\trealOffset--;
\t\twhile (data.slice(realOffset, realOffset + 1) === '=')
\t\t\trealOffset++;

\t\t/* Finally, grab what we think is the comment & clean it up. */
\t\tvar trailer = data.slice(realOffset);
\t\ttrailer = trailer.replace(/[\\r\\n]/g, ' ').
\t\t    replace(/^\\s+/, '');
\t\tif (trailer.match(/^[a-zA-Z0-9]/))
\t\t\tkey.comment = trailer;
\t}

\treturn (key);
}

function write(key, options) {
\tassert.object(key);
\tif (!Key.isKey(key))
\t\tthrow (new Error('Must be a public key'));

\tvar parts = [];
\tvar alg = rfc4253.keyTypeToAlg(key);
\tparts.push(alg);

\tvar buf = rfc4253.write(key);
\tparts.push(buf.toString('base64'));

\tif (key.comment)
\t\tparts.push(key.comment);

\treturn (new Buffer(parts.join(' ')));
}
";
        
        $__internal_39b03638e9e848b8d3f8bb672e5ec484aef4a0606c396c009bee7f846dbc9cb8->leave($__internal_39b03638e9e848b8d3f8bb672e5ec484aef4a0606c396c009bee7f846dbc9cb8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sshpk/lib/formats/ssh.js";
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
var rfc4253 = require('./rfc4253');
var utils = require('../utils');
var Key = require('../key');
var PrivateKey = require('../private-key');

var sshpriv = require('./ssh-private');

/*JSSTYLED*/
var SSHKEY_RE = /^([a-z0-9-]+)[ \\t]+([a-zA-Z0-9+\\/]+[=]*)([\\n \\t]+([^\\n]+))?\$/;
/*JSSTYLED*/
var SSHKEY_RE2 = /^([a-z0-9-]+)[ \\t]+([a-zA-Z0-9+\\/ \\t\\n]+[=]*)(.*)\$/;

function read(buf, options) {
\tif (typeof (buf) !== 'string') {
\t\tassert.buffer(buf, 'buf');
\t\tbuf = buf.toString('ascii');
\t}

\tvar trimmed = buf.trim().replace(/[\\\\\\r]/g, '');
\tvar m = trimmed.match(SSHKEY_RE);
\tif (!m)
\t\tm = trimmed.match(SSHKEY_RE2);
\tassert.ok(m, 'key must match regex');

\tvar type = rfc4253.algToKeyType(m[1]);
\tvar kbuf = new Buffer(m[2], 'base64');

\t/*
\t * This is a bit tricky. If we managed to parse the key and locate the
\t * key comment with the regex, then do a non-partial read and assert
\t * that we have consumed all bytes. If we couldn't locate the key
\t * comment, though, there may be whitespace shenanigans going on that
\t * have conjoined the comment to the rest of the key. We do a partial
\t * read in this case to try to make the best out of a sorry situation.
\t */
\tvar key;
\tvar ret = {};
\tif (m[4]) {
\t\ttry {
\t\t\tkey = rfc4253.read(kbuf);

\t\t} catch (e) {
\t\t\tm = trimmed.match(SSHKEY_RE2);
\t\t\tassert.ok(m, 'key must match regex');
\t\t\tkbuf = new Buffer(m[2], 'base64');
\t\t\tkey = rfc4253.readInternal(ret, 'public', kbuf);
\t\t}
\t} else {
\t\tkey = rfc4253.readInternal(ret, 'public', kbuf);
\t}

\tassert.strictEqual(type, key.type);

\tif (m[4] && m[4].length > 0) {
\t\tkey.comment = m[4];

\t} else if (ret.consumed) {
\t\t/*
\t\t * Now the magic: trying to recover the key comment when it's
\t\t * gotten conjoined to the key or otherwise shenanigan'd.
\t\t *
\t\t * Work out how much base64 we used, then drop all non-base64
\t\t * chars from the beginning up to this point in the the string.
\t\t * Then offset in this and try to make up for missing = chars.
\t\t */
\t\tvar data = m[2] + m[3];
\t\tvar realOffset = Math.ceil(ret.consumed / 3) * 4;
\t\tdata = data.slice(0, realOffset - 2). /*JSSTYLED*/
\t\t    replace(/[^a-zA-Z0-9+\\/=]/g, '') +
\t\t    data.slice(realOffset - 2);

\t\tvar padding = ret.consumed % 3;
\t\tif (padding > 0 &&
\t\t    data.slice(realOffset - 1, realOffset) !== '=')
\t\t\trealOffset--;
\t\twhile (data.slice(realOffset, realOffset + 1) === '=')
\t\t\trealOffset++;

\t\t/* Finally, grab what we think is the comment & clean it up. */
\t\tvar trailer = data.slice(realOffset);
\t\ttrailer = trailer.replace(/[\\r\\n]/g, ' ').
\t\t    replace(/^\\s+/, '');
\t\tif (trailer.match(/^[a-zA-Z0-9]/))
\t\t\tkey.comment = trailer;
\t}

\treturn (key);
}

function write(key, options) {
\tassert.object(key);
\tif (!Key.isKey(key))
\t\tthrow (new Error('Must be a public key'));

\tvar parts = [];
\tvar alg = rfc4253.keyTypeToAlg(key);
\tparts.push(alg);

\tvar buf = rfc4253.write(key);
\tparts.push(buf.toString('base64'));

\tif (key.comment)
\t\tparts.push(key.comment);

\treturn (new Buffer(parts.join(' ')));
}
", "node_modules/sshpk/lib/formats/ssh.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sshpk/lib/formats/ssh.js");
    }
}
