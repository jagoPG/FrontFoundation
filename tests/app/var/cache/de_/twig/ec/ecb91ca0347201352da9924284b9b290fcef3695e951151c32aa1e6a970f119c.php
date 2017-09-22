<?php

/* node_modules/gzip-size/index.js */
class __TwigTemplate_826476f40ebaf28a626776b800e41834ca5bfd4defbe09256e93ef176ae4b97b extends Twig_Template
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
        $__internal_4c93bc72092dc668be70e7452a51008dba3a00fc4296a474dd2c6f6cbb789daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c93bc72092dc668be70e7452a51008dba3a00fc4296a474dd2c6f6cbb789daf->enter($__internal_4c93bc72092dc668be70e7452a51008dba3a00fc4296a474dd2c6f6cbb789daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/gzip-size/index.js"));

        // line 1
        echo "'use strict';
var duplexer = require('duplexer');
var stream = require('stream');
var zlib = require('zlib');
var opts = {level: 9};

module.exports = function (str, cb) {
\tif (!str) {
\t\tcb(null, 0);
\t\treturn;
\t}

\tzlib.gzip(str, opts, function (err, data) {
\t\tif (err) {
\t\t\tcb(err, 0);
\t\t\treturn;
\t\t}

\t\tcb(err, data.length);
\t});
};

module.exports.sync = function (str) {
\treturn zlib.gzipSync(str, opts).length;
};

module.exports.stream = function () {
\tvar input = new stream.PassThrough();
\tvar output = new stream.PassThrough();
\tvar wrapper = duplexer(input, output);

\tvar gzipSize = 0;
\tvar gzip = zlib.createGzip(opts)
\t\t.on('data', function (buf) {
\t\t\tgzipSize += buf.length;
\t\t})
\t\t.on('error', function () {
\t\t\twrapper.gzipSize = 0;
\t\t})
\t\t.on('end', function () {
\t\t\twrapper.gzipSize = gzipSize;
\t\t\twrapper.emit('gzip-size', gzipSize);
\t\t\toutput.end();
\t\t});

\tinput.pipe(gzip);
\tinput.pipe(output, {end: false});

\treturn wrapper;
};
";
        
        $__internal_4c93bc72092dc668be70e7452a51008dba3a00fc4296a474dd2c6f6cbb789daf->leave($__internal_4c93bc72092dc668be70e7452a51008dba3a00fc4296a474dd2c6f6cbb789daf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/gzip-size/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var duplexer = require('duplexer');
var stream = require('stream');
var zlib = require('zlib');
var opts = {level: 9};

module.exports = function (str, cb) {
\tif (!str) {
\t\tcb(null, 0);
\t\treturn;
\t}

\tzlib.gzip(str, opts, function (err, data) {
\t\tif (err) {
\t\t\tcb(err, 0);
\t\t\treturn;
\t\t}

\t\tcb(err, data.length);
\t});
};

module.exports.sync = function (str) {
\treturn zlib.gzipSync(str, opts).length;
};

module.exports.stream = function () {
\tvar input = new stream.PassThrough();
\tvar output = new stream.PassThrough();
\tvar wrapper = duplexer(input, output);

\tvar gzipSize = 0;
\tvar gzip = zlib.createGzip(opts)
\t\t.on('data', function (buf) {
\t\t\tgzipSize += buf.length;
\t\t})
\t\t.on('error', function () {
\t\t\twrapper.gzipSize = 0;
\t\t})
\t\t.on('end', function () {
\t\t\twrapper.gzipSize = gzipSize;
\t\t\twrapper.emit('gzip-size', gzipSize);
\t\t\toutput.end();
\t\t});

\tinput.pipe(gzip);
\tinput.pipe(output, {end: false});

\treturn wrapper;
};
", "node_modules/gzip-size/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/gzip-size/index.js");
    }
}
