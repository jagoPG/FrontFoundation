<?php

/* node_modules/to-arraybuffer/test.js */
class __TwigTemplate_82ca72cc2bdfc71786a40934fc177e92fbee4e04767b27ad57e09c5ded0d7e77 extends Twig_Template
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
        $__internal_76423f41c93128306c0d6a4ffcc594356668d1cb3c2ed644796997bd06f54c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76423f41c93128306c0d6a4ffcc594356668d1cb3c2ed644796997bd06f54c2c->enter($__internal_76423f41c93128306c0d6a4ffcc594356668d1cb3c2ed644796997bd06f54c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/to-arraybuffer/test.js"));

        // line 1
        echo "var Buffer = require('buffer').Buffer
var test = require('tape')

var toArrayBuffer = require('.')

function elementsEqual (ab, buffer) {
\tvar view = new Uint8Array(ab)
\tfor (var i = 0; i < view.length; i++) {
\t\tif (view[i] !== buffer[i]) {
\t\t\treturn false
\t\t}
\t}
\treturn true
}

test('Basic behavior', function (t) {
\tvar buf = new Buffer(10)
\tfor (var i = 0; i < 10; i++) {
\t\tbuf[i] = i
\t}

\tvar ab = toArrayBuffer(buf)

\tt.equals(ab.byteLength, 10, 'correct length')
\tt.ok(elementsEqual(ab, buf), 'elements equal')
\tt.end()
})

test('Behavior when input is a subarray 1', function (t) {
\tvar origBuf = new Buffer(10)
\tfor (var i = 0; i < 10; i++) {
\t\torigBuf[i] = i
\t}
\tvar buf = origBuf.slice(1)

\tvar ab = toArrayBuffer(buf)

\tt.equals(ab.byteLength, 9, 'correct length')
\tt.ok(elementsEqual(ab, buf), 'elements equal')
\tt.notOk(ab === buf.buffer, 'the underlying ArrayBuffer is not returned when incorrect')
\tt.end()
})

test('Behavior when input is a subarray 2', function (t) {
\tvar origBuf = new Buffer(10)
\tfor (var i = 0; i < 10; i++) {
\t\torigBuf[i] = i
\t}
\tvar buf = origBuf.slice(0, 9)

\tvar ab = toArrayBuffer(buf)

\tt.equals(ab.byteLength, 9, 'correct length')
\tt.ok(elementsEqual(ab, buf), 'elements equal')
\tt.notOk(ab === buf.buffer, 'the underlying ArrayBuffer is not returned when incorrect')
\tt.end()
})
";
        
        $__internal_76423f41c93128306c0d6a4ffcc594356668d1cb3c2ed644796997bd06f54c2c->leave($__internal_76423f41c93128306c0d6a4ffcc594356668d1cb3c2ed644796997bd06f54c2c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/to-arraybuffer/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var Buffer = require('buffer').Buffer
var test = require('tape')

var toArrayBuffer = require('.')

function elementsEqual (ab, buffer) {
\tvar view = new Uint8Array(ab)
\tfor (var i = 0; i < view.length; i++) {
\t\tif (view[i] !== buffer[i]) {
\t\t\treturn false
\t\t}
\t}
\treturn true
}

test('Basic behavior', function (t) {
\tvar buf = new Buffer(10)
\tfor (var i = 0; i < 10; i++) {
\t\tbuf[i] = i
\t}

\tvar ab = toArrayBuffer(buf)

\tt.equals(ab.byteLength, 10, 'correct length')
\tt.ok(elementsEqual(ab, buf), 'elements equal')
\tt.end()
})

test('Behavior when input is a subarray 1', function (t) {
\tvar origBuf = new Buffer(10)
\tfor (var i = 0; i < 10; i++) {
\t\torigBuf[i] = i
\t}
\tvar buf = origBuf.slice(1)

\tvar ab = toArrayBuffer(buf)

\tt.equals(ab.byteLength, 9, 'correct length')
\tt.ok(elementsEqual(ab, buf), 'elements equal')
\tt.notOk(ab === buf.buffer, 'the underlying ArrayBuffer is not returned when incorrect')
\tt.end()
})

test('Behavior when input is a subarray 2', function (t) {
\tvar origBuf = new Buffer(10)
\tfor (var i = 0; i < 10; i++) {
\t\torigBuf[i] = i
\t}
\tvar buf = origBuf.slice(0, 9)

\tvar ab = toArrayBuffer(buf)

\tt.equals(ab.byteLength, 9, 'correct length')
\tt.ok(elementsEqual(ab, buf), 'elements equal')
\tt.notOk(ab === buf.buffer, 'the underlying ArrayBuffer is not returned when incorrect')
\tt.end()
})
", "node_modules/to-arraybuffer/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/to-arraybuffer/test.js");
    }
}
