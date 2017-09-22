<?php

/* node_modules/stream-http/test/browser/binary.js */
class __TwigTemplate_9cdcf491295ab7a2c7874a3e67144ec8ca78c095074f7601c5e84128caf20236 extends Twig_Template
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
        $__internal_3731989149a4b1e5984ee473366a0edf4fb0d91395c5322bc493aa05d44e1c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3731989149a4b1e5984ee473366a0edf4fb0d91395c5322bc493aa05d44e1c9d->enter($__internal_3731989149a4b1e5984ee473366a0edf4fb0d91395c5322bc493aa05d44e1c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stream-http/test/browser/binary.js"));

        // line 1
        echo "var Buffer = require('buffer').Buffer
var fs = require('fs')
var test = require('tape')
var UAParser = require('ua-parser-js')

var http = require('../..')

var browser = (new UAParser()).setUA(navigator.userAgent).getBrowser()
var browserName = browser.name
var browserVersion = browser.major
// Binary data gets corrupted in IE8 or below
var skipVerification = (browserName === 'IE' && browserVersion <= 8)

var reference = fs.readFileSync(__dirname + '/../server/static/browserify.png')

test('binary download', function (t) {
\thttp.get('/browserify.png', function (res) {
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
        
        $__internal_3731989149a4b1e5984ee473366a0edf4fb0d91395c5322bc493aa05d44e1c9d->leave($__internal_3731989149a4b1e5984ee473366a0edf4fb0d91395c5322bc493aa05d44e1c9d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stream-http/test/browser/binary.js";
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
// Binary data gets corrupted in IE8 or below
var skipVerification = (browserName === 'IE' && browserVersion <= 8)

var reference = fs.readFileSync(__dirname + '/../server/static/browserify.png')

test('binary download', function (t) {
\thttp.get('/browserify.png', function (res) {
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
})", "node_modules/stream-http/test/browser/binary.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stream-http/test/browser/binary.js");
    }
}
