<?php

/* node_modules/stream-http/test/browser/text-streaming.js */
class __TwigTemplate_57d9e6f2f5f551465f43067069302188568c409a92d45064db932e494ca3a420 extends Twig_Template
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
        $__internal_a55004da89985e776c2f5944ea83b27664b93def85dab28885c3ef9618201d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55004da89985e776c2f5944ea83b27664b93def85dab28885c3ef9618201d38->enter($__internal_a55004da89985e776c2f5944ea83b27664b93def85dab28885c3ef9618201d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stream-http/test/browser/text-streaming.js"));

        // line 1
        echo "var Buffer = require('buffer').Buffer
var fs = require('fs')
var test = require('tape')
var UAParser = require('ua-parser-js')

var http = require('../..')

var browser = (new UAParser()).setUA(navigator.userAgent).getBrowser()
var browserName = browser.name
var browserVersion = browser.major
// Streaming doesn't work in IE9 or below or in Opera
var skipStreamingCheck = (browserName === 'Opera' || (browserName === 'IE' && browserVersion <= 9))

var COPIES = 1000
var MIN_PIECES = 5

var referenceOnce = fs.readFileSync(__dirname + '/../server/static/basic.txt')
var reference = new Buffer(referenceOnce.length * COPIES)
for(var i = 0; i < COPIES; i++) {
\treferenceOnce.copy(reference, referenceOnce.length * i)
}

test('text streaming', function (t) {
\thttp.get({
\t\tpath: '/basic.txt?copies=' + COPIES,
\t\tmode: 'prefer-streaming'
\t}, function (res) {
\t\tvar buffers = []

\t\tres.on('end', function () {
\t\t\tif (skipStreamingCheck)
\t\t\t\tt.skip('streaming not available on IE <= 8')
\t\t\telse
\t\t\t\tt.ok(buffers.length >= MIN_PIECES, 'received in multiple parts')
\t\t\tt.ok(reference.equals(Buffer.concat(buffers)), 'contents match')
\t\t\tt.end()
\t\t})

\t\tres.on('data', function (data) {
\t\t\tbuffers.push(data)
\t\t})
\t})
})";
        
        $__internal_a55004da89985e776c2f5944ea83b27664b93def85dab28885c3ef9618201d38->leave($__internal_a55004da89985e776c2f5944ea83b27664b93def85dab28885c3ef9618201d38_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stream-http/test/browser/text-streaming.js";
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
// Streaming doesn't work in IE9 or below or in Opera
var skipStreamingCheck = (browserName === 'Opera' || (browserName === 'IE' && browserVersion <= 9))

var COPIES = 1000
var MIN_PIECES = 5

var referenceOnce = fs.readFileSync(__dirname + '/../server/static/basic.txt')
var reference = new Buffer(referenceOnce.length * COPIES)
for(var i = 0; i < COPIES; i++) {
\treferenceOnce.copy(reference, referenceOnce.length * i)
}

test('text streaming', function (t) {
\thttp.get({
\t\tpath: '/basic.txt?copies=' + COPIES,
\t\tmode: 'prefer-streaming'
\t}, function (res) {
\t\tvar buffers = []

\t\tres.on('end', function () {
\t\t\tif (skipStreamingCheck)
\t\t\t\tt.skip('streaming not available on IE <= 8')
\t\t\telse
\t\t\t\tt.ok(buffers.length >= MIN_PIECES, 'received in multiple parts')
\t\t\tt.ok(reference.equals(Buffer.concat(buffers)), 'contents match')
\t\t\tt.end()
\t\t})

\t\tres.on('data', function (data) {
\t\t\tbuffers.push(data)
\t\t})
\t})
})", "node_modules/stream-http/test/browser/text-streaming.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stream-http/test/browser/text-streaming.js");
    }
}
