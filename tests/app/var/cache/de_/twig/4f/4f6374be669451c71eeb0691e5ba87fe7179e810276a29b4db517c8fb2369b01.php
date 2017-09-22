<?php

/* node_modules/stream-http/test/browser/binary-streaming.js */
class __TwigTemplate_9cab58519a99619c05279137c625567be8f5823c7727e5c64492b478d9953a4f extends Twig_Template
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
        $__internal_c1995e245b690cb28e5f8f54a3c840da79435f8dd1923a97ea0a984e8f601cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1995e245b690cb28e5f8f54a3c840da79435f8dd1923a97ea0a984e8f601cd7->enter($__internal_c1995e245b690cb28e5f8f54a3c840da79435f8dd1923a97ea0a984e8f601cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stream-http/test/browser/binary-streaming.js"));

        // line 1
        echo "var Buffer = require('buffer').Buffer
var fs = require('fs')
var test = require('tape')
var UAParser = require('ua-parser-js')

var http = require('../..')

var browser = (new UAParser()).setUA(navigator.userAgent).getBrowser()
var browserName = browser.name
var browserVersion = browser.major
// Binary streaming doesn't work in IE10 or below or in Opera
var skipStreamingCheck = (browserName === 'Opera' || (browserName === 'IE' && browserVersion <= 10))

// Binary data gets corrupted in IE8 or below
var skipVerification = (browserName === 'IE' && browserVersion <= 8)

// IE8 tends to throw up modal dialogs complaining about scripts running too long
// Since streaming doesn't actually work there anyway, just use one copy
var COPIES = skipVerification ? 1 : 20
var MIN_PIECES = 2

var referenceOnce = fs.readFileSync(__dirname + '/../server/static/browserify.png')
var reference = new Buffer(referenceOnce.length * COPIES)
for(var i = 0; i < COPIES; i++) {
\treferenceOnce.copy(reference, referenceOnce.length * i)
}

test('binary streaming', function (t) {
\thttp.get({
\t\tpath: '/browserify.png?copies=' + COPIES,
\t\tmode: 'allow-wrong-content-type'
\t}, function (res) {
\t\tvar buffers = []
\t\tres.on('end', function () {
\t\t\tif (skipVerification)
\t\t\t\tt.skip('binary data not preserved on IE <= 8')
\t\t\telse
\t\t\t\tt.ok(reference.equals(Buffer.concat(buffers)), 'contents match')

\t\t\tif (skipStreamingCheck)
\t\t\t\tt.skip('streaming not available on IE <= 8')
\t\t\telse
\t\t\t\tt.ok(buffers.length >= MIN_PIECES, 'received in multiple parts')
\t\t\tt.end()
\t\t})

\t\tres.on('data', function (data) {
\t\t\tbuffers.push(data)
\t\t})
\t})
})

test('large binary request without streaming', function (t) {
\thttp.get({
\t\tpath: '/browserify.png?copies=' + COPIES,
\t\tmode: 'default',
\t}, function (res) {
\t\tvar buffers = []
\t\tres.on('end', function () {
\t\t\tif (skipVerification)
\t\t\t\tt.skip('binary data not preserved on IE <= 8')
\t\t\telse
\t\t\t\tt.ok(reference.equals(Buffer.concat(buffers)), 'contents match')
\t\t\tt.end()
\t\t})

\t\tres.on('data', function (data) {
\t\t\tbuffers.push(data)
\t\t})
\t})
})";
        
        $__internal_c1995e245b690cb28e5f8f54a3c840da79435f8dd1923a97ea0a984e8f601cd7->leave($__internal_c1995e245b690cb28e5f8f54a3c840da79435f8dd1923a97ea0a984e8f601cd7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stream-http/test/browser/binary-streaming.js";
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
var UAParser = require('ua-parser-js')

var http = require('../..')

var browser = (new UAParser()).setUA(navigator.userAgent).getBrowser()
var browserName = browser.name
var browserVersion = browser.major
// Binary streaming doesn't work in IE10 or below or in Opera
var skipStreamingCheck = (browserName === 'Opera' || (browserName === 'IE' && browserVersion <= 10))

// Binary data gets corrupted in IE8 or below
var skipVerification = (browserName === 'IE' && browserVersion <= 8)

// IE8 tends to throw up modal dialogs complaining about scripts running too long
// Since streaming doesn't actually work there anyway, just use one copy
var COPIES = skipVerification ? 1 : 20
var MIN_PIECES = 2

var referenceOnce = fs.readFileSync(__dirname + '/../server/static/browserify.png')
var reference = new Buffer(referenceOnce.length * COPIES)
for(var i = 0; i < COPIES; i++) {
\treferenceOnce.copy(reference, referenceOnce.length * i)
}

test('binary streaming', function (t) {
\thttp.get({
\t\tpath: '/browserify.png?copies=' + COPIES,
\t\tmode: 'allow-wrong-content-type'
\t}, function (res) {
\t\tvar buffers = []
\t\tres.on('end', function () {
\t\t\tif (skipVerification)
\t\t\t\tt.skip('binary data not preserved on IE <= 8')
\t\t\telse
\t\t\t\tt.ok(reference.equals(Buffer.concat(buffers)), 'contents match')

\t\t\tif (skipStreamingCheck)
\t\t\t\tt.skip('streaming not available on IE <= 8')
\t\t\telse
\t\t\t\tt.ok(buffers.length >= MIN_PIECES, 'received in multiple parts')
\t\t\tt.end()
\t\t})

\t\tres.on('data', function (data) {
\t\t\tbuffers.push(data)
\t\t})
\t})
})

test('large binary request without streaming', function (t) {
\thttp.get({
\t\tpath: '/browserify.png?copies=' + COPIES,
\t\tmode: 'default',
\t}, function (res) {
\t\tvar buffers = []
\t\tres.on('end', function () {
\t\t\tif (skipVerification)
\t\t\t\tt.skip('binary data not preserved on IE <= 8')
\t\t\telse
\t\t\t\tt.ok(reference.equals(Buffer.concat(buffers)), 'contents match')
\t\t\tt.end()
\t\t})

\t\tres.on('data', function (data) {
\t\t\tbuffers.push(data)
\t\t})
\t})
})", "node_modules/stream-http/test/browser/binary-streaming.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stream-http/test/browser/binary-streaming.js");
    }
}
