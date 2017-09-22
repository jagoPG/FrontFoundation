<?php

/* node_modules/stream-http/test/browser/webworker.js */
class __TwigTemplate_e6bc02413f3c642d39774622510f7e78e537b8a4f1e2dd8e021984773e4c6258 extends Twig_Template
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
        $__internal_caf63bebc7387d04238da5ac2d0f74e6a15bc10a44e79149f1665b4f776c18b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf63bebc7387d04238da5ac2d0f74e6a15bc10a44e79149f1665b4f776c18b0->enter($__internal_caf63bebc7387d04238da5ac2d0f74e6a15bc10a44e79149f1665b4f776c18b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stream-http/test/browser/webworker.js"));

        // line 1
        echo "var fs = require('fs')
var test = require('tape')
var UAParser = require('ua-parser-js')
var url = require('url')
var work = require('webworkify')

var browser = (new UAParser()).setUA(navigator.userAgent).getBrowser()
var browserName = browser.name
var browserVersion = browser.major
// Skip browsers with poor or nonexistant WebWorker support
var skip = ((browserName === 'Opera' && browserVersion <= 12) ||
\t(browserName === 'IE' && browserVersion <= 10) ||
\t(browserName === 'Safari' && browserVersion <= 5) ||
\t(browserName === 'WebKit' && browserVersion <= 534) || // Old mobile safari
\t(browserName === 'Android Browser' && browserVersion <= 4))

var reference = fs.readFileSync(__dirname + '/../server/static/browserify.png')

test('binary download in WebWorker', {
\tskip: skip
}, function (t) {
\t// We have to use a global url, since webworkify puts the worker in a Blob,
\t// which doesn't have a proper location
\tvar testUrl = url.resolve(global.location.href, '/browserify.png')
\tvar worker = work(require('./lib/webworker-worker.js'))
\tworker.addEventListener('message', function (ev) {
\t\tvar data = new Buffer(new Uint8Array(ev.data))
\t\tt.ok(reference.equals(data), 'contents match')
\t\tt.end()
\t})
\tworker.postMessage(testUrl)
})";
        
        $__internal_caf63bebc7387d04238da5ac2d0f74e6a15bc10a44e79149f1665b4f776c18b0->leave($__internal_caf63bebc7387d04238da5ac2d0f74e6a15bc10a44e79149f1665b4f776c18b0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stream-http/test/browser/webworker.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var fs = require('fs')
var test = require('tape')
var UAParser = require('ua-parser-js')
var url = require('url')
var work = require('webworkify')

var browser = (new UAParser()).setUA(navigator.userAgent).getBrowser()
var browserName = browser.name
var browserVersion = browser.major
// Skip browsers with poor or nonexistant WebWorker support
var skip = ((browserName === 'Opera' && browserVersion <= 12) ||
\t(browserName === 'IE' && browserVersion <= 10) ||
\t(browserName === 'Safari' && browserVersion <= 5) ||
\t(browserName === 'WebKit' && browserVersion <= 534) || // Old mobile safari
\t(browserName === 'Android Browser' && browserVersion <= 4))

var reference = fs.readFileSync(__dirname + '/../server/static/browserify.png')

test('binary download in WebWorker', {
\tskip: skip
}, function (t) {
\t// We have to use a global url, since webworkify puts the worker in a Blob,
\t// which doesn't have a proper location
\tvar testUrl = url.resolve(global.location.href, '/browserify.png')
\tvar worker = work(require('./lib/webworker-worker.js'))
\tworker.addEventListener('message', function (ev) {
\t\tvar data = new Buffer(new Uint8Array(ev.data))
\t\tt.ok(reference.equals(data), 'contents match')
\t\tt.end()
\t})
\tworker.postMessage(testUrl)
})", "node_modules/stream-http/test/browser/webworker.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stream-http/test/browser/webworker.js");
    }
}
