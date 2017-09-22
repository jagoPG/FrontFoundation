<?php

/* node_modules/stream-http/test/browser/abort.js */
class __TwigTemplate_989ef62584d7be5e5c9109f6eece4394803fe287314a2d391d0fd6116bb9b709 extends Twig_Template
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
        $__internal_06f3bc3c7ca7f67e7299f28ccdab516e04301ce6593191c026af705716df678b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f3bc3c7ca7f67e7299f28ccdab516e04301ce6593191c026af705716df678b->enter($__internal_06f3bc3c7ca7f67e7299f28ccdab516e04301ce6593191c026af705716df678b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stream-http/test/browser/abort.js"));

        // line 1
        echo "var Buffer = require('buffer').Buffer
var fs = require('fs')
var test = require('tape')

var http = require('../..')

test('abort before response', function (t) {
\tvar req = http.get('/basic.txt', function (res) {
\t\tt.fail('unexpected response')
\t})
\treq.abort()
\tt.end()
})

test('abort on response', function (t) {
\tvar req = http.get('/basic.txt', function (res) {
\t\treq.abort()
\t\tt.end()

\t\tres.on('end', function () {
\t\t\tt.fail('unexpected end')
\t\t})

\t\tres.on('data', function (data) {
\t\t\tt.fail('unexpected data')
\t\t})
\t})
})

test('abort on data', function (t) {
\tvar req = http.get('/browserify.png?copies=5', function (res) {
\t\tvar firstData = true
\t\tvar failOnData = false

\t\tres.on('end', function () {
\t\t\tt.fail('unexpected end')
\t\t})

\t\tres.on('data', function (data) {
\t\t\tif (failOnData)
\t\t\t\tt.fail('unexpected data')
\t\t\telse if (firstData) {
\t\t\t\tfirstData = false
\t\t\t\treq.abort()
\t\t\t\tt.end()
\t\t\t\tprocess.nextTick(function () {
\t\t\t\t\t// Wait for any data that may have been queued
\t\t\t\t\t// in the stream before considering data events
\t\t\t\t\t// as errors
\t\t\t\t\tfailOnData = true
\t\t\t\t})
\t\t\t}
\t\t})
\t})
})";
        
        $__internal_06f3bc3c7ca7f67e7299f28ccdab516e04301ce6593191c026af705716df678b->leave($__internal_06f3bc3c7ca7f67e7299f28ccdab516e04301ce6593191c026af705716df678b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stream-http/test/browser/abort.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var Buffer = require('buffer').Buffer
var fs = require('fs')
var test = require('tape')

var http = require('../..')

test('abort before response', function (t) {
\tvar req = http.get('/basic.txt', function (res) {
\t\tt.fail('unexpected response')
\t})
\treq.abort()
\tt.end()
})

test('abort on response', function (t) {
\tvar req = http.get('/basic.txt', function (res) {
\t\treq.abort()
\t\tt.end()

\t\tres.on('end', function () {
\t\t\tt.fail('unexpected end')
\t\t})

\t\tres.on('data', function (data) {
\t\t\tt.fail('unexpected data')
\t\t})
\t})
})

test('abort on data', function (t) {
\tvar req = http.get('/browserify.png?copies=5', function (res) {
\t\tvar firstData = true
\t\tvar failOnData = false

\t\tres.on('end', function () {
\t\t\tt.fail('unexpected end')
\t\t})

\t\tres.on('data', function (data) {
\t\t\tif (failOnData)
\t\t\t\tt.fail('unexpected data')
\t\t\telse if (firstData) {
\t\t\t\tfirstData = false
\t\t\t\treq.abort()
\t\t\t\tt.end()
\t\t\t\tprocess.nextTick(function () {
\t\t\t\t\t// Wait for any data that may have been queued
\t\t\t\t\t// in the stream before considering data events
\t\t\t\t\t// as errors
\t\t\t\t\tfailOnData = true
\t\t\t\t})
\t\t\t}
\t\t})
\t})
})", "node_modules/stream-http/test/browser/abort.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stream-http/test/browser/abort.js");
    }
}
