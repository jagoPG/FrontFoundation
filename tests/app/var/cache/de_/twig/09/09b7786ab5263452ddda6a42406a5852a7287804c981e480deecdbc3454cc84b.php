<?php

/* node_modules/to-arraybuffer/index.js */
class __TwigTemplate_0fee9abfe0e5fbece98cbe261655da18f62113bab1f336bd19ef9b4f568d2a1e extends Twig_Template
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
        $__internal_c82a4a92c30c33d3cc58020cde180bbece4413675a3ea62bcf65929119a7981b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c82a4a92c30c33d3cc58020cde180bbece4413675a3ea62bcf65929119a7981b->enter($__internal_c82a4a92c30c33d3cc58020cde180bbece4413675a3ea62bcf65929119a7981b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/to-arraybuffer/index.js"));

        // line 1
        echo "var Buffer = require('buffer').Buffer

module.exports = function (buf) {
\t// If the buffer is backed by a Uint8Array, a faster version will work
\tif (buf instanceof Uint8Array) {
\t\t// If the buffer isn't a subarray, return the underlying ArrayBuffer
\t\tif (buf.byteOffset === 0 && buf.byteLength === buf.buffer.byteLength) {
\t\t\treturn buf.buffer
\t\t} else if (typeof buf.buffer.slice === 'function') {
\t\t\t// Otherwise we need to get a proper copy
\t\t\treturn buf.buffer.slice(buf.byteOffset, buf.byteOffset + buf.byteLength)
\t\t}
\t}

\tif (Buffer.isBuffer(buf)) {
\t\t// This is the slow version that will work with any Buffer
\t\t// implementation (even in old browsers)
\t\tvar arrayCopy = new Uint8Array(buf.length)
\t\tvar len = buf.length
\t\tfor (var i = 0; i < len; i++) {
\t\t\tarrayCopy[i] = buf[i]
\t\t}
\t\treturn arrayCopy.buffer
\t} else {
\t\tthrow new Error('Argument must be a Buffer')
\t}
}
";
        
        $__internal_c82a4a92c30c33d3cc58020cde180bbece4413675a3ea62bcf65929119a7981b->leave($__internal_c82a4a92c30c33d3cc58020cde180bbece4413675a3ea62bcf65929119a7981b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/to-arraybuffer/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var Buffer = require('buffer').Buffer

module.exports = function (buf) {
\t// If the buffer is backed by a Uint8Array, a faster version will work
\tif (buf instanceof Uint8Array) {
\t\t// If the buffer isn't a subarray, return the underlying ArrayBuffer
\t\tif (buf.byteOffset === 0 && buf.byteLength === buf.buffer.byteLength) {
\t\t\treturn buf.buffer
\t\t} else if (typeof buf.buffer.slice === 'function') {
\t\t\t// Otherwise we need to get a proper copy
\t\t\treturn buf.buffer.slice(buf.byteOffset, buf.byteOffset + buf.byteLength)
\t\t}
\t}

\tif (Buffer.isBuffer(buf)) {
\t\t// This is the slow version that will work with any Buffer
\t\t// implementation (even in old browsers)
\t\tvar arrayCopy = new Uint8Array(buf.length)
\t\tvar len = buf.length
\t\tfor (var i = 0; i < len; i++) {
\t\t\tarrayCopy[i] = buf[i]
\t\t}
\t\treturn arrayCopy.buffer
\t} else {
\t\tthrow new Error('Argument must be a Buffer')
\t}
}
", "node_modules/to-arraybuffer/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/to-arraybuffer/index.js");
    }
}
