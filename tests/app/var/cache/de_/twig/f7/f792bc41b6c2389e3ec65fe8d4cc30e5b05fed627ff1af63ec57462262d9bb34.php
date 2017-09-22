<?php

/* node_modules/stream-http/test/browser/text.js */
class __TwigTemplate_5e5c089b2ce73d1c9bcddd45b0d823921f7aaad545066106c9f66482ee12a1bd extends Twig_Template
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
        $__internal_6cbcce535e19dd603a457719644067ecb213f29906f6939fef2a74f37cb555a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbcce535e19dd603a457719644067ecb213f29906f6939fef2a74f37cb555a0->enter($__internal_6cbcce535e19dd603a457719644067ecb213f29906f6939fef2a74f37cb555a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stream-http/test/browser/text.js"));

        // line 1
        echo "var Buffer = require('buffer').Buffer
var fs = require('fs')
var test = require('tape')
var UAParser = require('ua-parser-js')
var url = require('url')

var http = require('../..')

var browser = (new UAParser()).setUA(navigator.userAgent).getBrowser()
var browserName = browser.name
var browserVersion = browser.major
// Response urls don't work on many browsers
var skipResponseUrl = ((browserName === 'Opera') ||
\t(browserName === 'IE') ||
\t(browserName === 'Edge') ||
\t(browserName === 'Chrome' && browserVersion <= 36) ||
\t(browserName === 'Firefox' && browserVersion <= 31) ||
\t((browserName === 'Safari' || browserName === 'Mobile Safari') && browserVersion <= 8) ||
\t(browserName === 'WebKit') || // Old mobile safari
\t(browserName === 'Android Browser' && browserVersion <= 4))

var reference = fs.readFileSync(__dirname + '/../server/static/basic.txt')

test('basic functionality', function (t) {
\thttp.get('/basic.txt', function (res) {
\t\tif (!skipResponseUrl) {
\t\t\tvar testUrl = url.resolve(global.location.href, '/basic.txt')
\t\t\t// Redirects aren't tested, but presumably only browser bugs
\t\t\t// would cause this to fail only after redirects.
\t\t\tt.equals(res.url, testUrl, 'response url correct')
\t\t}

\t\tvar buffers = []

\t\tres.on('end', function () {
\t\t\tt.ok(reference.equals(Buffer.concat(buffers)), 'contents match')
\t\t\tt.end()
\t\t})

\t\tres.on('data', function (data) {
\t\t\tbuffers.push(data)
\t\t})
\t})
})";
        
        $__internal_6cbcce535e19dd603a457719644067ecb213f29906f6939fef2a74f37cb555a0->leave($__internal_6cbcce535e19dd603a457719644067ecb213f29906f6939fef2a74f37cb555a0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stream-http/test/browser/text.js";
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
var url = require('url')

var http = require('../..')

var browser = (new UAParser()).setUA(navigator.userAgent).getBrowser()
var browserName = browser.name
var browserVersion = browser.major
// Response urls don't work on many browsers
var skipResponseUrl = ((browserName === 'Opera') ||
\t(browserName === 'IE') ||
\t(browserName === 'Edge') ||
\t(browserName === 'Chrome' && browserVersion <= 36) ||
\t(browserName === 'Firefox' && browserVersion <= 31) ||
\t((browserName === 'Safari' || browserName === 'Mobile Safari') && browserVersion <= 8) ||
\t(browserName === 'WebKit') || // Old mobile safari
\t(browserName === 'Android Browser' && browserVersion <= 4))

var reference = fs.readFileSync(__dirname + '/../server/static/basic.txt')

test('basic functionality', function (t) {
\thttp.get('/basic.txt', function (res) {
\t\tif (!skipResponseUrl) {
\t\t\tvar testUrl = url.resolve(global.location.href, '/basic.txt')
\t\t\t// Redirects aren't tested, but presumably only browser bugs
\t\t\t// would cause this to fail only after redirects.
\t\t\tt.equals(res.url, testUrl, 'response url correct')
\t\t}

\t\tvar buffers = []

\t\tres.on('end', function () {
\t\t\tt.ok(reference.equals(Buffer.concat(buffers)), 'contents match')
\t\t\tt.end()
\t\t})

\t\tres.on('data', function (data) {
\t\t\tbuffers.push(data)
\t\t})
\t})
})", "node_modules/stream-http/test/browser/text.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stream-http/test/browser/text.js");
    }
}
