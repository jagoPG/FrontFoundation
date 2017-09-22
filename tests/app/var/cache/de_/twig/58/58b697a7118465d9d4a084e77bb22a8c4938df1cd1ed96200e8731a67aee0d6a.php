<?php

/* node_modules/get-stream/index.js */
class __TwigTemplate_b7a83cf1260734554fd523300a31b192546918235e6342a3c9d048a9c2433ef6 extends Twig_Template
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
        $__internal_0c4bb0ef3d869524b4fca0bf882f4c04e9af18a89486238123ee037593b890ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4bb0ef3d869524b4fca0bf882f4c04e9af18a89486238123ee037593b890ac->enter($__internal_0c4bb0ef3d869524b4fca0bf882f4c04e9af18a89486238123ee037593b890ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/get-stream/index.js"));

        // line 1
        echo "'use strict';
const bufferStream = require('./buffer-stream');

function getStream(inputStream, opts) {
\tif (!inputStream) {
\t\treturn Promise.reject(new Error('Expected a stream'));
\t}

\topts = Object.assign({maxBuffer: Infinity}, opts);

\tconst maxBuffer = opts.maxBuffer;
\tlet stream;
\tlet clean;

\tconst p = new Promise((resolve, reject) => {
\t\tconst error = err => {
\t\t\tif (err) { // null check
\t\t\t\terr.bufferedData = stream.getBufferedValue();
\t\t\t}

\t\t\treject(err);
\t\t};

\t\tstream = bufferStream(opts);
\t\tinputStream.once('error', error);
\t\tinputStream.pipe(stream);

\t\tstream.on('data', () => {
\t\t\tif (stream.getBufferedLength() > maxBuffer) {
\t\t\t\treject(new Error('maxBuffer exceeded'));
\t\t\t}
\t\t});
\t\tstream.once('error', error);
\t\tstream.on('end', resolve);

\t\tclean = () => {
\t\t\t// some streams doesn't implement the `stream.Readable` interface correctly
\t\t\tif (inputStream.unpipe) {
\t\t\t\tinputStream.unpipe(stream);
\t\t\t}
\t\t};
\t});

\tp.then(clean, clean);

\treturn p.then(() => stream.getBufferedValue());
}

module.exports = getStream;
module.exports.buffer = (stream, opts) => getStream(stream, Object.assign({}, opts, {encoding: 'buffer'}));
module.exports.array = (stream, opts) => getStream(stream, Object.assign({}, opts, {array: true}));
";
        
        $__internal_0c4bb0ef3d869524b4fca0bf882f4c04e9af18a89486238123ee037593b890ac->leave($__internal_0c4bb0ef3d869524b4fca0bf882f4c04e9af18a89486238123ee037593b890ac_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/get-stream/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
const bufferStream = require('./buffer-stream');

function getStream(inputStream, opts) {
\tif (!inputStream) {
\t\treturn Promise.reject(new Error('Expected a stream'));
\t}

\topts = Object.assign({maxBuffer: Infinity}, opts);

\tconst maxBuffer = opts.maxBuffer;
\tlet stream;
\tlet clean;

\tconst p = new Promise((resolve, reject) => {
\t\tconst error = err => {
\t\t\tif (err) { // null check
\t\t\t\terr.bufferedData = stream.getBufferedValue();
\t\t\t}

\t\t\treject(err);
\t\t};

\t\tstream = bufferStream(opts);
\t\tinputStream.once('error', error);
\t\tinputStream.pipe(stream);

\t\tstream.on('data', () => {
\t\t\tif (stream.getBufferedLength() > maxBuffer) {
\t\t\t\treject(new Error('maxBuffer exceeded'));
\t\t\t}
\t\t});
\t\tstream.once('error', error);
\t\tstream.on('end', resolve);

\t\tclean = () => {
\t\t\t// some streams doesn't implement the `stream.Readable` interface correctly
\t\t\tif (inputStream.unpipe) {
\t\t\t\tinputStream.unpipe(stream);
\t\t\t}
\t\t};
\t});

\tp.then(clean, clean);

\treturn p.then(() => stream.getBufferedValue());
}

module.exports = getStream;
module.exports.buffer = (stream, opts) => getStream(stream, Object.assign({}, opts, {encoding: 'buffer'}));
module.exports.array = (stream, opts) => getStream(stream, Object.assign({}, opts, {array: true}));
", "node_modules/get-stream/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/get-stream/index.js");
    }
}
