<?php

/* node_modules/get-stream/buffer-stream.js */
class __TwigTemplate_28a042136ad5d36c1e1ba5d080a7246ee713bc1e74712f06dbe99265a44cbd96 extends Twig_Template
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
        $__internal_1740bd25c873f858bfc368b3a10f3d0fd6fdfcb98c37ffbc7b25be715ecc5738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1740bd25c873f858bfc368b3a10f3d0fd6fdfcb98c37ffbc7b25be715ecc5738->enter($__internal_1740bd25c873f858bfc368b3a10f3d0fd6fdfcb98c37ffbc7b25be715ecc5738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/get-stream/buffer-stream.js"));

        // line 1
        echo "'use strict';
const PassThrough = require('stream').PassThrough;

module.exports = opts => {
\topts = Object.assign({}, opts);

\tconst array = opts.array;
\tlet encoding = opts.encoding;
\tconst buffer = encoding === 'buffer';
\tlet objectMode = false;

\tif (array) {
\t\tobjectMode = !(encoding || buffer);
\t} else {
\t\tencoding = encoding || 'utf8';
\t}

\tif (buffer) {
\t\tencoding = null;
\t}

\tlet len = 0;
\tconst ret = [];
\tconst stream = new PassThrough({objectMode});

\tif (encoding) {
\t\tstream.setEncoding(encoding);
\t}

\tstream.on('data', chunk => {
\t\tret.push(chunk);

\t\tif (objectMode) {
\t\t\tlen = ret.length;
\t\t} else {
\t\t\tlen += chunk.length;
\t\t}
\t});

\tstream.getBufferedValue = () => {
\t\tif (array) {
\t\t\treturn ret;
\t\t}

\t\treturn buffer ? Buffer.concat(ret, len) : ret.join('');
\t};

\tstream.getBufferedLength = () => len;

\treturn stream;
};
";
        
        $__internal_1740bd25c873f858bfc368b3a10f3d0fd6fdfcb98c37ffbc7b25be715ecc5738->leave($__internal_1740bd25c873f858bfc368b3a10f3d0fd6fdfcb98c37ffbc7b25be715ecc5738_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/get-stream/buffer-stream.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
const PassThrough = require('stream').PassThrough;

module.exports = opts => {
\topts = Object.assign({}, opts);

\tconst array = opts.array;
\tlet encoding = opts.encoding;
\tconst buffer = encoding === 'buffer';
\tlet objectMode = false;

\tif (array) {
\t\tobjectMode = !(encoding || buffer);
\t} else {
\t\tencoding = encoding || 'utf8';
\t}

\tif (buffer) {
\t\tencoding = null;
\t}

\tlet len = 0;
\tconst ret = [];
\tconst stream = new PassThrough({objectMode});

\tif (encoding) {
\t\tstream.setEncoding(encoding);
\t}

\tstream.on('data', chunk => {
\t\tret.push(chunk);

\t\tif (objectMode) {
\t\t\tlen = ret.length;
\t\t} else {
\t\t\tlen += chunk.length;
\t\t}
\t});

\tstream.getBufferedValue = () => {
\t\tif (array) {
\t\t\treturn ret;
\t\t}

\t\treturn buffer ? Buffer.concat(ret, len) : ret.join('');
\t};

\tstream.getBufferedLength = () => len;

\treturn stream;
};
", "node_modules/get-stream/buffer-stream.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/get-stream/buffer-stream.js");
    }
}
