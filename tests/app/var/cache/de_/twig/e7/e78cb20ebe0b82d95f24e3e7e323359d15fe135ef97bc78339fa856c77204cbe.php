<?php

/* node_modules/stream-http/test/browser/post-binary.js */
class __TwigTemplate_b28502286d09f10b5aaf430b8688bd8c10ddc86bc79cdc34e8d5113929399748 extends Twig_Template
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
        $__internal_23088091d275f85aa585f0c0bc34dc5195b5f5b8a37f14b2e1ad5dfd7f53c45b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23088091d275f85aa585f0c0bc34dc5195b5f5b8a37f14b2e1ad5dfd7f53c45b->enter($__internal_23088091d275f85aa585f0c0bc34dc5195b5f5b8a37f14b2e1ad5dfd7f53c45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stream-http/test/browser/post-binary.js"));

        // line 1
        echo "var Buffer = require('buffer').Buffer
var fs = require('fs')
var test = require('tape')
var UAParser = require('ua-parser-js')

var http = require('../..')

var browser = (new UAParser()).setUA(navigator.userAgent).getBrowser()
var browserName = browser.name
var browserVersion = browser.major
// Binary request bodies don't work in a bunch of browsers
var skipVerification = ((browserName === 'Opera' && browserVersion <= 11) ||
\t(browserName === 'IE' && browserVersion <= 10) ||
\t(browserName === 'Safari' && browserVersion <= 5) ||
\t(browserName === 'WebKit' && browserVersion <= 534) || // Old mobile safari
\t(browserName === 'Android Browser' && browserVersion <= 4))

var reference = fs.readFileSync(__dirname + '/../server/static/browserify.png')

test('post binary', function (t) {
\tvar req = http.request({
\t\tpath: '/echo',
\t\tmethod: 'POST'
\t}, function (res) {
\t\tvar buffers = []

\t\tres.on('end', function () {
\t\t\tif (skipVerification)
\t\t\t\tt.skip('binary data not preserved on this browser')
\t\t\telse
\t\t\t\tt.ok(reference.equals(Buffer.concat(buffers)), 'echoed contents match')
\t\t\tt.end()
\t\t})

\t\tres.on('data', function (data) {
\t\t\tbuffers.push(data)
\t\t})
\t})

\treq.write(reference)
\treq.end()
})";
        
        $__internal_23088091d275f85aa585f0c0bc34dc5195b5f5b8a37f14b2e1ad5dfd7f53c45b->leave($__internal_23088091d275f85aa585f0c0bc34dc5195b5f5b8a37f14b2e1ad5dfd7f53c45b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stream-http/test/browser/post-binary.js";
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
// Binary request bodies don't work in a bunch of browsers
var skipVerification = ((browserName === 'Opera' && browserVersion <= 11) ||
\t(browserName === 'IE' && browserVersion <= 10) ||
\t(browserName === 'Safari' && browserVersion <= 5) ||
\t(browserName === 'WebKit' && browserVersion <= 534) || // Old mobile safari
\t(browserName === 'Android Browser' && browserVersion <= 4))

var reference = fs.readFileSync(__dirname + '/../server/static/browserify.png')

test('post binary', function (t) {
\tvar req = http.request({
\t\tpath: '/echo',
\t\tmethod: 'POST'
\t}, function (res) {
\t\tvar buffers = []

\t\tres.on('end', function () {
\t\t\tif (skipVerification)
\t\t\t\tt.skip('binary data not preserved on this browser')
\t\t\telse
\t\t\t\tt.ok(reference.equals(Buffer.concat(buffers)), 'echoed contents match')
\t\t\tt.end()
\t\t})

\t\tres.on('data', function (data) {
\t\t\tbuffers.push(data)
\t\t})
\t})

\treq.write(reference)
\treq.end()
})", "node_modules/stream-http/test/browser/post-binary.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stream-http/test/browser/post-binary.js");
    }
}
