<?php

/* node_modules/sshpk/lib/formats/x509-pem.js */
class __TwigTemplate_a3124544ca799c16826d817c0764a5934eeb6a2ef619c358756bcb413d1d2d47 extends Twig_Template
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
        $__internal_34f57e0f5a2258f3af8d5793964e48f07c7139eb5524b1e9a0c2db145ac30cc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34f57e0f5a2258f3af8d5793964e48f07c7139eb5524b1e9a0c2db145ac30cc0->enter($__internal_34f57e0f5a2258f3af8d5793964e48f07c7139eb5524b1e9a0c2db145ac30cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sshpk/lib/formats/x509-pem.js"));

        // line 1
        echo "// Copyright 2016 Joyent, Inc.

var x509 = require('./x509');

module.exports = {
\tread: read,
\tverify: x509.verify,
\tsign: x509.sign,
\twrite: write
};

var assert = require('assert-plus');
var asn1 = require('asn1');
var algs = require('../algs');
var utils = require('../utils');
var Key = require('../key');
var PrivateKey = require('../private-key');
var pem = require('./pem');
var Identity = require('../identity');
var Signature = require('../signature');
var Certificate = require('../certificate');

function read(buf, options) {
\tif (typeof (buf) !== 'string') {
\t\tassert.buffer(buf, 'buf');
\t\tbuf = buf.toString('ascii');
\t}

\tvar lines = buf.trim().split(/[\\r\\n]+/g);

\tvar m = lines[0].match(/*JSSTYLED*/
\t    /[-]+[ ]*BEGIN CERTIFICATE[ ]*[-]+/);
\tassert.ok(m, 'invalid PEM header');

\tvar m2 = lines[lines.length - 1].match(/*JSSTYLED*/
\t    /[-]+[ ]*END CERTIFICATE[ ]*[-]+/);
\tassert.ok(m2, 'invalid PEM footer');

\tvar headers = {};
\twhile (true) {
\t\tlines = lines.slice(1);
\t\tm = lines[0].match(/*JSSTYLED*/
\t\t    /^([A-Za-z0-9-]+): (.+)\$/);
\t\tif (!m)
\t\t\tbreak;
\t\theaders[m[1].toLowerCase()] = m[2];
\t}

\t/* Chop off the first and last lines */
\tlines = lines.slice(0, -1).join('');
\tbuf = new Buffer(lines, 'base64');

\treturn (x509.read(buf, options));
}

function write(cert, options) {
\tvar dbuf = x509.write(cert, options);

\tvar header = 'CERTIFICATE';
\tvar tmp = dbuf.toString('base64');
\tvar len = tmp.length + (tmp.length / 64) +
\t    18 + 16 + header.length*2 + 10;
\tvar buf = new Buffer(len);
\tvar o = 0;
\to += buf.write('-----BEGIN ' + header + '-----\\n', o);
\tfor (var i = 0; i < tmp.length; ) {
\t\tvar limit = i + 64;
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
        
        $__internal_34f57e0f5a2258f3af8d5793964e48f07c7139eb5524b1e9a0c2db145ac30cc0->leave($__internal_34f57e0f5a2258f3af8d5793964e48f07c7139eb5524b1e9a0c2db145ac30cc0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sshpk/lib/formats/x509-pem.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Copyright 2016 Joyent, Inc.

var x509 = require('./x509');

module.exports = {
\tread: read,
\tverify: x509.verify,
\tsign: x509.sign,
\twrite: write
};

var assert = require('assert-plus');
var asn1 = require('asn1');
var algs = require('../algs');
var utils = require('../utils');
var Key = require('../key');
var PrivateKey = require('../private-key');
var pem = require('./pem');
var Identity = require('../identity');
var Signature = require('../signature');
var Certificate = require('../certificate');

function read(buf, options) {
\tif (typeof (buf) !== 'string') {
\t\tassert.buffer(buf, 'buf');
\t\tbuf = buf.toString('ascii');
\t}

\tvar lines = buf.trim().split(/[\\r\\n]+/g);

\tvar m = lines[0].match(/*JSSTYLED*/
\t    /[-]+[ ]*BEGIN CERTIFICATE[ ]*[-]+/);
\tassert.ok(m, 'invalid PEM header');

\tvar m2 = lines[lines.length - 1].match(/*JSSTYLED*/
\t    /[-]+[ ]*END CERTIFICATE[ ]*[-]+/);
\tassert.ok(m2, 'invalid PEM footer');

\tvar headers = {};
\twhile (true) {
\t\tlines = lines.slice(1);
\t\tm = lines[0].match(/*JSSTYLED*/
\t\t    /^([A-Za-z0-9-]+): (.+)\$/);
\t\tif (!m)
\t\t\tbreak;
\t\theaders[m[1].toLowerCase()] = m[2];
\t}

\t/* Chop off the first and last lines */
\tlines = lines.slice(0, -1).join('');
\tbuf = new Buffer(lines, 'base64');

\treturn (x509.read(buf, options));
}

function write(cert, options) {
\tvar dbuf = x509.write(cert, options);

\tvar header = 'CERTIFICATE';
\tvar tmp = dbuf.toString('base64');
\tvar len = tmp.length + (tmp.length / 64) +
\t    18 + 16 + header.length*2 + 10;
\tvar buf = new Buffer(len);
\tvar o = 0;
\to += buf.write('-----BEGIN ' + header + '-----\\n', o);
\tfor (var i = 0; i < tmp.length; ) {
\t\tvar limit = i + 64;
\t\tif (limit > tmp.length)
\t\t\tlimit = tmp.length;
\t\to += buf.write(tmp.slice(i, limit), o);
\t\tbuf[o++] = 10;
\t\ti = limit;
\t}
\to += buf.write('-----END ' + header + '-----\\n', o);

\treturn (buf.slice(0, o));
}
", "node_modules/sshpk/lib/formats/x509-pem.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sshpk/lib/formats/x509-pem.js");
    }
}
