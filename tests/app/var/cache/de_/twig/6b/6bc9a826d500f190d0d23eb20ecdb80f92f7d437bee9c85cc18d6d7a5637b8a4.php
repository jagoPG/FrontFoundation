<?php

/* node_modules/stream-http/test/browser/headers.js */
class __TwigTemplate_98e8b331f7eab02008895c2fb39b87d134d0e4b81d66f09b736ffe887c9455ca extends Twig_Template
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
        $__internal_42dd4cab989d1b919a0107f269683dd9a745cd9a94c99c7b68848e6ed5103b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42dd4cab989d1b919a0107f269683dd9a745cd9a94c99c7b68848e6ed5103b02->enter($__internal_42dd4cab989d1b919a0107f269683dd9a745cd9a94c99c7b68848e6ed5103b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stream-http/test/browser/headers.js"));

        // line 1
        echo "var Buffer = require('buffer').Buffer
var fs = require('fs')
var test = require('tape')
var UAParser = require('ua-parser-js')

var http = require('../..')

test('headers', function (t) {
\thttp.get({
\t\tpath: '/testHeaders?Response-Header=bar&Response-Header-2=BAR2',
\t\theaders: {
\t\t\t'Test-Request-Header': 'foo',
\t\t\t'Test-Request-Header-2': 'FOO2'
\t\t}
\t}, function (res) {
\t\tvar rawHeaders = []
\t\tfor (var i = 0; i < res.rawHeaders.length; i += 2) {
\t\t\tvar lowerKey = res.rawHeaders[i].toLowerCase()
\t\t\tif (lowerKey.indexOf('test-') === 0)
\t\t\t\trawHeaders.push(lowerKey, res.rawHeaders[i + 1])
\t\t}
\t\tvar header1Pos = rawHeaders.indexOf('test-response-header')
\t\tt.ok(header1Pos >= 0, 'raw response header 1 present')
\t\tt.equal(rawHeaders[header1Pos + 1], 'bar', 'raw response header value 1')
\t\tvar header2Pos = rawHeaders.indexOf('test-response-header-2')
\t\tt.ok(header2Pos >= 0, 'raw response header 2 present')
\t\tt.equal(rawHeaders[header2Pos + 1], 'BAR2', 'raw response header value 2')
\t\tt.equal(rawHeaders.length, 4, 'correct number of raw headers')

\t\tt.equal(res.headers['test-response-header'], 'bar', 'response header 1')
\t\tt.equal(res.headers['test-response-header-2'], 'BAR2', 'response header 2')

\t\tvar buffers = []

\t\tres.on('end', function () {
\t\t\tvar body = JSON.parse(Buffer.concat(buffers).toString())
\t\t\tt.equal(body['test-request-header'], 'foo', 'request header 1')
\t\t\tt.equal(body['test-request-header-2'], 'FOO2', 'request header 2')
\t\t\tt.equal(Object.keys(body).length, 2, 'correct number of request headers')
\t\t\tt.end()
\t\t})

\t\tres.on('data', function (data) {
\t\t\tbuffers.push(data)
\t\t})
\t})
})

test('arrays of headers', function (t) {
\thttp.get({
\t\tpath: '/testHeaders?Response-Header=bar&Response-Header=BAR2',
\t\theaders: {
\t\t\t'Test-Request-Header': ['foo', 'FOO2']
\t\t}
\t}, function (res) {
\t\tvar rawHeaders = []
\t\tfor (var i = 0; i < res.rawHeaders.length; i += 2) {
\t\t\tvar lowerKey = res.rawHeaders[i].toLowerCase()
\t\t\tif (lowerKey.indexOf('test-') === 0)
\t\t\t\trawHeaders.push(lowerKey, res.rawHeaders[i + 1])
\t\t}
\t\tt.equal(rawHeaders[0], 'test-response-header', 'raw response header present')
\t\tt.equal(rawHeaders[1], 'bar, BAR2', 'raw response header value')
\t\tt.equal(rawHeaders.length, 2, 'correct number of raw headers')

\t\tt.equal(res.headers['test-response-header'], 'bar, BAR2', 'response header')

\t\tvar buffers = []

\t\tres.on('end', function () {
\t\t\tvar body = JSON.parse(Buffer.concat(buffers).toString())
\t\t\tt.equal(body['test-request-header'], 'foo,FOO2', 'request headers')
\t\t\tt.equal(Object.keys(body).length, 1, 'correct number of request headers')
\t\t\tt.end()
\t\t})

\t\tres.on('data', function (data) {
\t\t\tbuffers.push(data)
\t\t})
\t})
})

test('content-type response header', function (t) {
\thttp.get('/testHeaders', function (res) {
\t\tt.equal(res.headers['content-type'], 'application/json', 'content-type preserved')
\t\tt.end()
\t})
})

var browser = (new UAParser()).setUA(navigator.userAgent).getBrowser()
var browserName = browser.name
var browserVersion = browser.major
var browserMinorVersion = browser.minor || 0
// The content-type header is broken when 'prefer-streaming' or 'allow-wrong-content-type'
// is passed in browsers that rely on xhr.overrideMimeType(), namely older chrome, safari 6-10.0, and the stock Android browser
// Note that Safari 10.0 on iOS 10.3 doesn't need to override the mime type, so the content-type is preserved.
var wrongMimeType = ((browserName === 'Chrome' && browserVersion <= 42) ||
\t((browserName === 'Safari' || browserName === 'Mobile Safari') && browserVersion >= 6 && (browserVersion < 10 || (browserVersion == 10 && browserMinorVersion == 0)))
\t|| (browserName === 'Android Browser'))

test('content-type response header with forced streaming', function (t) {
\thttp.get({
\t\tpath: '/testHeaders',
\t\tmode: 'prefer-streaming'
\t}, function (res) {
\t\tif (wrongMimeType) {
\t\t\t// allow both the 'wrong' and correct mime type, since sometimes it's impossible to tell which to expect
\t\t\t// from the browser version alone (e.g. Safari 10.0 on iOS 10.2 vs iOS 10.3)
\t\t\tvar contentType = res.headers['content-type']
\t\t\tvar correct = (contentType === 'text/plain; charset=x-user-defined') || (contentType === 'application/json')
\t\t\tt.ok(correct, 'content-type either preserved or overridden')
\t\t} else
\t\t\tt.equal(res.headers['content-type'], 'application/json', 'content-type preserved')
\t\tt.end()
\t})
})";
        
        $__internal_42dd4cab989d1b919a0107f269683dd9a745cd9a94c99c7b68848e6ed5103b02->leave($__internal_42dd4cab989d1b919a0107f269683dd9a745cd9a94c99c7b68848e6ed5103b02_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stream-http/test/browser/headers.js";
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

test('headers', function (t) {
\thttp.get({
\t\tpath: '/testHeaders?Response-Header=bar&Response-Header-2=BAR2',
\t\theaders: {
\t\t\t'Test-Request-Header': 'foo',
\t\t\t'Test-Request-Header-2': 'FOO2'
\t\t}
\t}, function (res) {
\t\tvar rawHeaders = []
\t\tfor (var i = 0; i < res.rawHeaders.length; i += 2) {
\t\t\tvar lowerKey = res.rawHeaders[i].toLowerCase()
\t\t\tif (lowerKey.indexOf('test-') === 0)
\t\t\t\trawHeaders.push(lowerKey, res.rawHeaders[i + 1])
\t\t}
\t\tvar header1Pos = rawHeaders.indexOf('test-response-header')
\t\tt.ok(header1Pos >= 0, 'raw response header 1 present')
\t\tt.equal(rawHeaders[header1Pos + 1], 'bar', 'raw response header value 1')
\t\tvar header2Pos = rawHeaders.indexOf('test-response-header-2')
\t\tt.ok(header2Pos >= 0, 'raw response header 2 present')
\t\tt.equal(rawHeaders[header2Pos + 1], 'BAR2', 'raw response header value 2')
\t\tt.equal(rawHeaders.length, 4, 'correct number of raw headers')

\t\tt.equal(res.headers['test-response-header'], 'bar', 'response header 1')
\t\tt.equal(res.headers['test-response-header-2'], 'BAR2', 'response header 2')

\t\tvar buffers = []

\t\tres.on('end', function () {
\t\t\tvar body = JSON.parse(Buffer.concat(buffers).toString())
\t\t\tt.equal(body['test-request-header'], 'foo', 'request header 1')
\t\t\tt.equal(body['test-request-header-2'], 'FOO2', 'request header 2')
\t\t\tt.equal(Object.keys(body).length, 2, 'correct number of request headers')
\t\t\tt.end()
\t\t})

\t\tres.on('data', function (data) {
\t\t\tbuffers.push(data)
\t\t})
\t})
})

test('arrays of headers', function (t) {
\thttp.get({
\t\tpath: '/testHeaders?Response-Header=bar&Response-Header=BAR2',
\t\theaders: {
\t\t\t'Test-Request-Header': ['foo', 'FOO2']
\t\t}
\t}, function (res) {
\t\tvar rawHeaders = []
\t\tfor (var i = 0; i < res.rawHeaders.length; i += 2) {
\t\t\tvar lowerKey = res.rawHeaders[i].toLowerCase()
\t\t\tif (lowerKey.indexOf('test-') === 0)
\t\t\t\trawHeaders.push(lowerKey, res.rawHeaders[i + 1])
\t\t}
\t\tt.equal(rawHeaders[0], 'test-response-header', 'raw response header present')
\t\tt.equal(rawHeaders[1], 'bar, BAR2', 'raw response header value')
\t\tt.equal(rawHeaders.length, 2, 'correct number of raw headers')

\t\tt.equal(res.headers['test-response-header'], 'bar, BAR2', 'response header')

\t\tvar buffers = []

\t\tres.on('end', function () {
\t\t\tvar body = JSON.parse(Buffer.concat(buffers).toString())
\t\t\tt.equal(body['test-request-header'], 'foo,FOO2', 'request headers')
\t\t\tt.equal(Object.keys(body).length, 1, 'correct number of request headers')
\t\t\tt.end()
\t\t})

\t\tres.on('data', function (data) {
\t\t\tbuffers.push(data)
\t\t})
\t})
})

test('content-type response header', function (t) {
\thttp.get('/testHeaders', function (res) {
\t\tt.equal(res.headers['content-type'], 'application/json', 'content-type preserved')
\t\tt.end()
\t})
})

var browser = (new UAParser()).setUA(navigator.userAgent).getBrowser()
var browserName = browser.name
var browserVersion = browser.major
var browserMinorVersion = browser.minor || 0
// The content-type header is broken when 'prefer-streaming' or 'allow-wrong-content-type'
// is passed in browsers that rely on xhr.overrideMimeType(), namely older chrome, safari 6-10.0, and the stock Android browser
// Note that Safari 10.0 on iOS 10.3 doesn't need to override the mime type, so the content-type is preserved.
var wrongMimeType = ((browserName === 'Chrome' && browserVersion <= 42) ||
\t((browserName === 'Safari' || browserName === 'Mobile Safari') && browserVersion >= 6 && (browserVersion < 10 || (browserVersion == 10 && browserMinorVersion == 0)))
\t|| (browserName === 'Android Browser'))

test('content-type response header with forced streaming', function (t) {
\thttp.get({
\t\tpath: '/testHeaders',
\t\tmode: 'prefer-streaming'
\t}, function (res) {
\t\tif (wrongMimeType) {
\t\t\t// allow both the 'wrong' and correct mime type, since sometimes it's impossible to tell which to expect
\t\t\t// from the browser version alone (e.g. Safari 10.0 on iOS 10.2 vs iOS 10.3)
\t\t\tvar contentType = res.headers['content-type']
\t\t\tvar correct = (contentType === 'text/plain; charset=x-user-defined') || (contentType === 'application/json')
\t\t\tt.ok(correct, 'content-type either preserved or overridden')
\t\t} else
\t\t\tt.equal(res.headers['content-type'], 'application/json', 'content-type preserved')
\t\tt.end()
\t})
})", "node_modules/stream-http/test/browser/headers.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stream-http/test/browser/headers.js");
    }
}
